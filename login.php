<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // Если пользователь уже авторизован, перенаправляем его на главную страницу
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обрабатываем запрос на авторизацию пользователя
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Подключаемся к базе данных
    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $dbname = "Marketis";
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Проверяем подключение
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Ищем пользователя в базе данных
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Если пароль совпадает, авторизуем пользователя
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: profile.php');
            exit();
        }
        else {
            $error_message = "Неправильный email или пароль";
        }
    }
    else {
        $error_message = "Неправильный email или пароль";
    }
}

?>
