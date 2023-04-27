<?php

require_once "connect.php";

if($_GET){
    $id = $_GET['p_id'];

    $query = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $result = $query->execute([$id]);
    header("Location: posts.php");

}






?>