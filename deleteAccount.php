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

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the user ID or any other identifier for the account to be deleted
    $userName = $_POST['userName'];


      $query = "DELETE FROM users WHERE username = '$userName'";
      $result = mysqli_query($conn, $query);

      if ($result) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");   
        echo "Account deleted successfully";
      } else {
        echo "Error deleting account";
      }
  }
?>
