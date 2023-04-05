<?php
include "connect.php";
if($_POST['module'] == 'contact'){
    $id = $_POST['deleteId'];

    $sql = "DELETE FROM contact WHERE id=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$id]);

}

?>


