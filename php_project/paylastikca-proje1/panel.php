<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>


<table id="customers">
    <tr>
        <th>Ad Soyad</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Konu</th>
        <th>Mesaj</th>
    </tr>

    <?php
    include ("connect.php");

    // panele direk giris olmasin diye session baslatiyoruz
     //session_start(); //- (connect.php sayfamizda baslatdigimiz icin tekrar yazmaya gerek yok)

    // yaratdigimiz session user-in deyerinin olup olmamasini kontrol ediyoruz
    if($_SESSION["user"] == ''){
        // bos ise cikis.php sayfasina yonlendiriyoruz
        echo '<script>window.location.href="cikis.php"</script>';
    } else{
        // else durumunda varsa panel sayfamizi calistiriyoruz

        // iletisim table-dan butun elementler secilir
        $sec = "SELECT * FROM iletisim";
        // secilenler ucun sorgu gonderilir
        $sonuc = $conn->query($sec);
        // secilenlerin nece setir oldugu hesablanir
        $rowCount = $sonuc->rowCount();

        if ($rowCount > 0){ // setir sayi 0-dan boyukdurse if sertine girsin
            // setirler array formatinda row deyiskenine assign edilsin
            $row = $sonuc->fetchAll();
            foreach ($row as $item){ // foreach ile yazdirilsin
                echo "
              <tr>
                  <td>".$item['adsoyad']."</td>
                  <td>".$item['telefon']."</td>
                  <td>".$item['email']."</td>
                  <td>".$item['konu']."</td>
                  <td>".$item['mesaj']."</td>
              </tr>
                    ";
            }
        } else{
            echo " Hic bir veri bulunamadi";
        }
    }



    ?>
</table>

</body>
</html>




