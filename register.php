<?php
    // Подключаемся к базе данных
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Marketis";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверяем подключение
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Получаем данные формы регистрации
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Проверяем, что пользователь с таким именем или email не существует
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    if ($stmt === false) {
        die("Ошибка в SQL-запросе: " . $conn->error);
    }
    
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Если пользователь уже существует, выводим сообщение об ошибке
        echo "Пользователь с таким email уже существует";
        header('Location: index.php');
    } else {
        // Добавляем нового пользователя в базу данных
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            session_start();
            $_SESSION['username'] = $username;
            echo "Пользователь успешно зарегистрирован";
            header('Location: profile.php');
            exit;

        } else {
            echo "<script>alert('Произошла ошибка при регистрации')</script>";
        }        
    }

    // Закрываем соединение с базой данных
    $stmt->close();
    $conn->close();
?>
