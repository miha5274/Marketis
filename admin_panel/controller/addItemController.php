<?php
    include_once "../config/dbconnect.php";

    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_brand = $_POST['p_brand'];   
    $category = $_POST['category'];
    $file = $_FILES['image'];
    $image = addslashes(file_get_contents($file['tmp_name']));
    $sql = "INSERT INTO products (name, price, brand, category, image) VALUES ('$p_name', '$p_price', '$p_brand', '$category', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "Records added successfully.";
    } else {
        echo mysqli_error($conn);
    }
    $conn->close();     
?>