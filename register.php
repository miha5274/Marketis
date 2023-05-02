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
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    if ($stmt === false) {
        die("Ошибка в SQL-запросе: " . $conn->error);
    }
    
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Если пользователь уже существует, выводим сообщение об ошибке
        echo "alert('Пользователь с таким именем или email уже существует');";
    } else {
        // Добавляем нового пользователя в базу данных
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            echo "<script>alert('Пользователь успешно зарегистрирован'); window.location.href = 'profile.php';</script>";
        } else {
            echo "<script>alert('Произошла ошибка при регистрации')</script>";
        }        
    }

    // Закрываем соединение с базой данных
    $stmt->close();
    $conn->close();
?>
