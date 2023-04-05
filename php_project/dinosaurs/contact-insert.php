<?php include "./admin/connect.php" ?>
<?php

if(isset($_POST['name'])){
    $firstname = $_POST['name'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if (isset($firstname, $lastname, $email, $subject, $message)) {
        $sql = "INSERT INTO contact (firstname, lastname,email,subject,message) VALUES (?,?,?,?,?)";

        $insert = $conn->prepare($sql);
        $insert->execute([$firstname, $lastname, $email, $subject, $message]);

        if($insert){

            $_SESSION["success"] = "Mesajiniz ugurla gonderildi";
//            var_dump($_SESSION["success"]);
            header("location:index.php");
            exit();
        } else{
            echo "Mesajiniz gonderilmedi";
        }

    }
}

?>