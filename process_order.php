<?php

// Подключаемся к базе данных
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'Marketis';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_error) {
    die('Ошибка подключения к базе данных: ' . $mysqli->connect_error);
}

// Получаем данные из POST-запроса и декодируем JSON
$data = json_decode(file_get_contents('php://input'), true);

// Проверяем наличие необходимых ключей в массиве данных
if (isset($data['name'], $data['address'], $data['tel'], $data['cart'])) {
    $name = $data['name'];
    $address = $data['address'];
    $tel = $data['tel'];
    $cart = $data['cart'];
} else {
    echo 'Некорректные данные';
    exit;
}


$total_price = 0;
foreach ($cart as $name => $quantity) {
    $query = "SELECT * FROM products WHERE name = '$name'";
    $result = $mysqli->query($query);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $total_price += $price * $quantity;
    } else {
        continue;
    }
}


// Подготавливаем запрос на добавление заказа в базу данных
$cart_json = json_encode($cart);
$sql = "INSERT INTO orders (name, address, tel, total_price, cart) VALUES ('$name', '$address', '$tel', '$total_price', '$cart_json')";


// Отправляем запрос и проверяем его выполнение
if ($mysqli->query($sql) === TRUE) {
    echo 'Заказ успешно оформлен!';
} else {
    echo 'Ошибка при оформлении заказа: ' . $mysqli->error;
}

// Закрываем соединение с базой данных
$mysqli->close();
?>
