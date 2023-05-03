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
  // Вывод каждой строки результата в HTML-коде
while ($row = mysqli_fetch_assoc($product)) {
  $name = $row['name'];
  echo '<div class="catalog__sneaker">
            <div class="catalog__inner">
              <div class="catalog__item">
                <div class="catalog__item-wrapper">
                  <div class="catalog__shoe">
                    <div class="catalog__shoe-name">' . $row['brand'] . '<br>' . $row['model'] . '</div>
                    <div class="catalog__shoe-img-inner">
                      <img class="catalog__shoe-img" width="351" height="236" src="data:image/png;base64,' . base64_encode($row['image']) . '" alt="' . $row['model'] . '">
                    </div>
                    <div class="catalog__brand" style="background-image:url(data:image/png;base64,' . base64_encode($row['box_logo']) .'")>
                    <div class="catalog__brand-name">' . $row['brand'] . '</div>
                    </div>
                  </div>
                  <div class="catalog__info">
                    <div class="catalog__info-left">
                      <img class="catalog__info-img"  src="data:image/png;base64, ' . base64_encode($row['image_logo']) . '" alt="' . $row['brand'] . '">
                    </div>
                    <div class="catalog__info-right">' . $row['brand'] . " " . $row['name'] . '</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="catalog__desc">
              <div class="catalog__desc-top">
                <div class="catalog__desc-name">' . $row['brand'] . " " . $row['name'] . '</div>
                <div class="catalog__desc-price">' . $row['price']  . '$</div>
              </div>
              <div class="catalog__desc-bottom">
                <div class="catalog__desc-delivery">' . 'Бесплатная доставка' . '</div>
                <a class="catalog__desc-bid" href="product.php?name='. $name .'">Buy</a>
              </div>
            </div>
          </div>';
            }
} else {
echo "0 results";
}

// закрытие соединения с базой данных
$conn->close();
?>