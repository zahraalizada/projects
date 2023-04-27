<?php
include "connect.php";

//New Post add

$post_header = $_POST['post_header'];

$post_image = $_FILES['post_image']['name'];
$post_image_temp = $_FILES['post_image']['tmp_name'];

$post_description = $_POST['post_description'];


move_uploaded_file($post_image_temp, "./images/$post_image");

if(isset($post_header,$post_image,$post_description)){
    $sql = "INSERT INTO posts (header,image,content) VALUES (?,?,?)";
    $insert = $conn->prepare($sql);
    $insert->execute([$post_header,$post_image,$post_description]);
    header("Location:add_post.php");
}

?>