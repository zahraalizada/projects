<?php
include("connect.php");

$name = $_POST['isim'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$konu = $_POST['konu'];
$mesaj = $_POST['mesaj'];

if($name && $telefon && $email && $konu && $mesaj){ // post ile alinan deyerlerin bos olub olmadiginin yoxlanilmasi(empty(), isset() ile de yoxlana biler)

    // DB-de iletisim tablosunda basliqlarin adlari qeyd olunur insert into kodundan sonra
     $sql = "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj)
    VALUES (?,?,?,?,?)";

     // DB ile elaqe qurulur ve melumatlarin yuklenmesi ucun hazirlanir
     $insert = $conn->prepare($sql);
     // DB-de qeyd etdiyimiz basliqlarin sirasina uygun olaraq post-dan aldigimiz melumatlar elave edilir
     $insert->execute([$name,$telefon,$email,$konu,$mesaj]);

     if($insert){ // Formun gonderilmesi true||false yoxlanmasi
         // Formdan gonderilibse gelen true cavabinin sessionda saxlanmasi
         $_SESSION["success"] = "Mesajiniz ugurla gonderildi";
         // Form gonderildikden sonra esas sehifeye avtomatik gelmesi
         header("location:index.php");
     } else{
         // Formdan gonderilmeyibse false oldugu ehtimald abu yazi yazilacaq
         echo "Mesajiniz gonderilmedi";
     }
}

?>

