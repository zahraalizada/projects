<?php
include "connect.php";

//Team member add

$about_header = $_POST['about_header'];

$about_image = $_FILES['about_image']['name'];
$about_image_temp = $_FILES['about_image']['tmp_name'];

$about_description = $_POST['about_description'];


move_uploaded_file($about_image_temp, "./images/$about_image");

if(isset($about_header,$about_image,$about_description)){
    $sql = "INSERT INTO about (header,image,content) VALUES (?,?,?)";
    $insert = $conn->prepare($sql);
    $insert->execute([$about_header,$about_image,$about_description]);
    header("Location:add_about.php");
}

?>