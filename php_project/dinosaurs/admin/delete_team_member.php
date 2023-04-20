<?php

require_once "connect.php";

if($_GET){
    $id = $_GET['p_id'];

    $query = $conn->prepare("DELETE FROM team WHERE id = ?");
    $result = $query->execute([$id]);
    header("Location: team.php");

}






?>