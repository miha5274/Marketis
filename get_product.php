<?php
// подключаемся к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Marketis";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// получаем имя продукта из параметра запроса
$name = $_GET['name'];
// создаем SQL-запрос для выборки продукта из базы данных по имени
$sql = "SELECT products.*, logo.image_logo, logo.box_logo, logo.logo_svg
        FROM products 
        INNER JOIN logo ON products.brand = logo.name 
        WHERE products.name='$name'";

// выполняем запрос
$result = mysqli_query($conn, $sql);

// получаем данные продукта из результата запроса
$row = mysqli_fetch_assoc($result);

// выводим данные продукта
echo '<div class="sneaker__shoe-inner">
        <img class="sneaker__shoe" width="700" height="700" src="data:image/png;base64,' . base64_encode($row['image']) . '" alt="' . $row['model'] . '" />
        </div>
        <img class="sneaker__line" width="568" height="69" src="icons/line.svg" alt="Линия" />
        <div class="sneaker__name">
        <div class="sneaker__logo">
        <img src="data:image/svg+xml;base64,'. base64_encode($row['logo_svg']).'" width="50" height="46" alt="Логотип Air Jordan" />
        </div>
        <h2 class="sneaker__title">' . $row['brand'] .'<br>'. $row['name'] . '</h2>   
    </div>';


// закрываем соединение с базой данных
mysqli_close($conn);
?>
