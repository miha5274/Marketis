<!DOCTYPE html>
<html>
<head>
	<title>Админ Панель - Заказы</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Админ Панель - Заказы</h1>
	</header>

	<main>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Имя</th>
					<th>Адрес</th>
					<th>Телефон</th>
					<th>Сумма</th>
					<th>Дата создания</th>
					<th>Заказ</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// Подключаемся к базе данных
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "Marketis";

					$conn = new mysqli($servername, $username, $password, $dbname);

					// Проверяем соединение
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					}

					// Получаем список заказов
					$sql = "SELECT * FROM orders";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					    // Выводим список заказов в таблицу
					    while($row = $result->fetch_assoc()) {
                            $array = json_decode($row["cart"], true);

                            $text = '';
                            foreach ($array as $key => $value) {
                            $text .= $key . ': ' . $value . ', ';
                            }

                            // Удалить последнюю запятую и пробел
                            $text = rtrim($text, ', ');

					        echo "<tr>";
					        echo "<td>" . $row["id"] . "</td>";
					        echo "<td>" . $row["name"] . "</td>";
					        echo "<td>" . $row["address"] . "</td>";
					        echo "<td>" . $row["tel"] . "</td>";
					        echo "<td>" . $row["total_price"] . "</td>";
					        echo "<td>" . $row["created_at"] . "</td>";
                            echo "<td>" . $text . "</td>";
					        echo '<td><a href="edit_order.php?id=' . $row["id"] . '">Редактировать</a></td>';
					        echo "</tr>";
					    }
					} else {
					    echo "<tr><td colspan='7'>Нет заказов</td></tr>";
					}
					$conn->close();
				?>
			</tbody>
		</table>
	</main>
</body>
</html>
