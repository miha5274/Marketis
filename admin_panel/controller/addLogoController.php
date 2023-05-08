<?php
include_once "../config/dbconnect.php";

$p_name = $_POST['p_name'];

$file = $_FILES['image_logo'];
$image_logo = addslashes(file_get_contents($file['tmp_name']));
$file = $_FILES['box_logo'];
$box_logo = addslashes(file_get_contents($file['tmp_name']));
$file = $_FILES['logo_svg'];
$logo_svg = addslashes(file_get_contents($file['tmp_name']));

$sql = "INSERT INTO logo (name, image_logo, box_logo, logo_svg) VALUES ('$p_name', '$image_logo', '$box_logo', '$logo_svg')";

if ($conn->query($sql) === TRUE) {
    echo "Records added successfully.";
} else {
    echo mysqli_error($conn);
}

$conn->close();
?>
