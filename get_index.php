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
  
// выборка всех продуктов из таблицы products
$sql = "SELECT products.*, logo.image_logo, logo.box_logo
FROM products
INNER JOIN logo ON products.brand = logo.name";
$product = $conn->query($sql);

// обработка результатов выборки
if ($product->num_rows > 0) {
    $count = 0;
  // Вывод каждой строки результата в HTML-коде
    while ($row = mysqli_fetch_assoc($product)) {
    $name = $row['name'];
    echo '<div class="shoes__sneaker">
    <div class="shoes__inner">
      <div class="shoes__pink"></div>
      <div class="shoes__blue"></div>
      <div class="shoes__item">
        <div class="shoes__item-wrapper">
          <div class="shoes__shoe">
            <div class="shoes__shoe-name">'.$row['brand'] .'</div>
            <div class="shoes__shoe-img-inner">
              <img class="shoes__shoe-img" width="336" height="157" src="data:image/png;base64,'.base64_encode($row['image']). '" alt="'. $row['model'] .'" />
            </div>
            <div class="shoes__brand shoes__brand_'. $row['brand'] .'">
              <div class="shoes__brand-name">'.$row['brand'] .'</div>
            </div>
          </div>
          <div class="shoes__info">
            <div class="shoes__info-left">
              <img class="shoes__info-img" width="112" height="63" src="data:image/png;base64'.base64_encode($row['image_logo']) .'" alt="'.$row['brand'] .'" />
            </div>
            <div class="shoes__info-right">'.$row['brand'] . ' ' . $row['name'] .'</div>
          </div>
        </div>
      </div>
    </div>
    <div class="shoes__desc">
      <div class="shoes__desc-top">
        <div class="shoes__desc-name">'.$row['brand'] . ' ' . $row['name'] .'</div>
        <div class="shoes__desc-price">'.$row['price'] .'$</div>
      </div>
      <div class="shoes__desc-bottom">
        <div class="shoes__desc-deadline">'.'Заканчивается 01.04.2022' .'</div>
        <a class="shoes__desc-bid" href="product.php?name='.$name .'">Buy</a>
      </div>
    </div>
  </div>
  ';
  $count++;
  if($count == 3) exit;
    }
}
else echo '0 results';
?>