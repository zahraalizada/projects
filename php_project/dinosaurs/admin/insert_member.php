<?php
include "connect.php";

//Team member add

$name = $_POST['name'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];
$vimeo = $_POST['vimeo'];
$twitter = $_POST['twitter'];
$description = $_POST['description'];

if(isset($name,$email,$facebook,$vimeo,$twitter)){
    $sql = "INSERT INTO team (name,email,facebook,vimeo,twitter,description) VALUES (?,?,?,?,?,?)";
    $insert = $conn->prepare($sql);
    $insert->execute([$name,$email,$facebook,$vimeo,$twitter,$description]);
    header("Location:add_team.php");
}

?>