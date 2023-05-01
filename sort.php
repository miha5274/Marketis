<?php

// подключаемся к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Marketis";
$conn = new mysqli($servername, $username, $password, $dbname);

// проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Получаем данные в формате JSON из POST-запроса
$data = json_decode(file_get_contents('php://input'), true);

// Обрабатываем данные
$sort = $data['price'];
$new = $data['new'];
$category = $data['category'];

$sql = "SELECT products.*, logo.image_logo, logo.box_logo
        FROM products
        INNER JOIN logo ON products.brand = logo.name"
        . ($category ? " WHERE category = '$category'" : "") . 
        " ORDER BY " . ($sort === 'cheap' ? 'price ASC' : 'price DESC') 
              . "," . ($new === 'new' ? 'product_id ASC' : 'product_id DESC');


                $product = $conn->query($sql);
                header('Content-Type: application/json');
                if (!$product) {
                    die("Error in query: " . $conn->error);
                }
                
    // Преобразуем результат в ассоциативный массив
    $product_array = $product->fetch_all(MYSQLI_ASSOC);
    foreach ($product_array as $product) {
        $image_base64 = base64_encode($product['image']);
        $image_logo_base64 = base64_encode($product['image_logo']);
        $box_logo_base64 = base64_encode($product['box_logo']);
        echo json_encode(   array('name' => $product['name'], 
                            'price' => $product['price'],
                            'brand' => $product['brand'],
                            'category' => $product['category'],
                            'image' => $image_base64,
                            'image_logo' => $image_logo_base64,
                            'box_logo' => $box_logo_base64
                        ));
      }

    // Преобразуем ассоциативный массив в JSON
    $product_json = json_encode($product_array);

    // Выводим JSON
    echo $product_json;

$conn->close();
?>
