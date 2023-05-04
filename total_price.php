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

$data = json_decode(file_get_contents('php://input'), true);
$cart = $data['cart'];

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
echo json_encode(['total_price' => $total_price]);
?>