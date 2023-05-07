<?php
  $email = $_POST['email'];

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'Marketis';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }

  // Подготовка SQL-запроса для вставки email в таблицу
  $stmt = $conn->prepare('INSERT INTO subscribed_emails (email) VALUES (?)');
  $stmt->bind_param('s', $email);

  // Выполнение подготовленного запроса
  if ($stmt->execute()) {
    // Отправка ответа об успешной обработке
    echo 'Email received and processed successfully!';
  } else {
    // Отправка ответа об ошибке при выполнении запроса
    http_response_code(500);
    echo 'Error processing email.';
  }

  // Закрытие соединения с базой данных
  $stmt->close();
  $conn->close();

?>
