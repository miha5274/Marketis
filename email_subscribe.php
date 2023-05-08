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

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $sql = "INSERT INTO subscribed_emails (email) VALUES ('$email')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        header("Location: error.html");
    }

    $conn->close();
}
?>