<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Marketis";
$conn = new mysqli($servername, $username, $password, $dbname);

// проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

setlocale(LC_TIME, "ru_RU.utf8"); 
$date = strftime("%e %B %Y года");
$month_names_short = array(
    'January' => 'янв',
    'February' => 'фев',
    'March' => 'мар',
    'April' => 'апр',
    'May' => 'мая',
    'June' => 'июн',
    'July' => 'июл',
    'August' => 'авг',
    'September' => 'сен',
    'October' => 'окт',
    'November' => 'ноя',
    'December' => 'дек'
);
$date = strtr($date, $month_names_short);

// Получение массива из POST-запроса
$cart = json_decode(file_get_contents('php://input'), true);

// Генерация HTML-кода для каждого продукта в корзине
$html = '';
echo '<div class="basket__name">ТВОИ YEEZY</div>';
if (!empty($cart)) {
foreach ($cart as $product => $quantity) {
  if($quantity == 0) continue;
  // Получение информации о продукте из базы данных
  $sql = "SELECT products.*, logo.image_logo, logo.box_logo, logo.logo_svg
        FROM products 
        INNER JOIN logo ON products.brand = logo.name 
        WHERE products.name='$product'";
        $result = $conn->query($sql);
        if (!$result) {
            continue;
        }

        
$row = $result->fetch_assoc();

echo '  <div class="basket__sneaker">
              <div class="name" style="display:none;">'.$row['name'].'</div>
              <div class="basket__info">        
                <div class="basket__date">'. $date .' | '. $row['price'].'$ | 1 товар</div>
                <div class="basket__item">
                  <div class="basket__shoe">
                    <div class="basket__shoe-name">' . $row['brand'] . '</div>
                    <div class="basket__shoe-img-inner">
                      <img class="basket__shoe-img" src="data:image/png;base64,' . base64_encode($row['image']) . '" alt="' . $row['name'] . '">
                    </div>
                    <div class="basket__brand basket__brand_nb" style="background-image:url(data:image/png;base64,' . base64_encode($row['box_logo']) .'")>
                      <div class="basket__brand-name">' . $row['brand'] . '</div>
                    </div>
                  </div>
                  <div class="basket__desc">
                    <div class="basket__desc-left">
                      <img class="basket__desc-img" width="50" height="50" src="data:image/png;base64, ' . base64_encode($row['image_logo']) . '" alt="' . $row['brand'] . '">
                    </div>
                    <div class="basket__desc-right">' . $row['brand'] . " " . $row['name'] . '</div>
                  </div>
                </div>
              </div>
              <div class="basket__details">
                <div class="basket__price basket__text" id="price">'.$row['price'] * $quantity. '$</div>
                <div class="basket__size basket__text">36.5 eu</div>
                <div class="basket__pairs basket__text">'. $quantity .' pairs</div>
                <button class="basket__decline" type="button">
                  <span class="visually-hidden">Удалить предмет</span>
                  <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.5 30.625C24.7487 30.625 30.625 24.7487 30.625 17.5C30.625 10.2513 24.7487 4.375 17.5 4.375C10.2513 4.375 4.375 10.2513 4.375 17.5C4.375 24.7487 10.2513 30.625 17.5 30.625Z"
                      stroke="white"
                      stroke-width="2"
                      stroke-miterlimit="10"
                      stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M13.125 13.125L21.8748 21.8748" stroke="#FFBFBF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13.125 21.875L21.8748 13.1252" stroke="#FFBFBF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <a class="basket__show basket__link" href="product.php?name='.$row['name'].'">
                  <span>ПОСМОТРЕТЬ ДЕТАЛИ ВЕЩИ</span>
                  <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.4679 5.45962C15.7218 5.20578 15.7218 4.79422 15.4679 4.54038L11.3313 0.403806C11.0775 0.149965 10.6659 0.149965 10.4121 0.403806C10.1583 0.657647 10.1583 1.0692 10.4121 1.32304L14.0891 5L10.4121 8.67696C10.1583 8.9308 10.1583 9.34235 10.4121 9.59619C10.6659 9.85003 11.0775 9.85003 11.3313 9.59619L15.4679 5.45962ZM15.0083 4.35H-3.05176e-05V5.65H15.0083V4.35Z"
                      fill="white" />
                  </svg>
                </a>
              </div>
            </div>
          </div>' ;

          
}
}
else{
  $html = '<h2>Корзина пустая<h2>';
}
// Возвращение HTML-кода
echo $html;
?>

