<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Paylaştıkça</title>

    <!-- Alertify Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" integrity="sha512-IXuoq1aFd2wXs4NqGskwX2Vb+I8UJ+tGJEu/Dc0zwLNKeQ7CW3Sr6v0yU3z5OQWe3eScVIkER4J9L7byrgR/fA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>

<section id="menu">
    <div id="logo">Paylaştıkça</div>
    <nav>
        <a href="#"><i class="ikon fas fa-home"></i> Ana Sayfa</a>
        <a href="#"><i class="ikon fas fa-info"></i> Hakkımızda</a>
        <a href="#"><i class="ikon fas fa-graduation-cap"></i> Eğitimler</a>
        <a href="#"><i class="ikon fas fa-user-friends"></i> Ekip</a>
        <a href="#"><i class="ikon fas fa-map-pin"></i> İletişim</a>
    </nav>
</section>

<section id="anasayfa">
    <div id="black"></div>
    <div id="icerik">
        <h2>Paylaştıkça</h2>
        <hr width="300" align="left">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum odit perferendis quasi. Ad praesentium
            quae ratione soluta? A, beatae consequuntur eum harum magni officia optio reprehenderit suscipit ullam
            voluptas. Quidem.
        </p>
    </div>
</section>

<section id="hakkimizda">
    <h3>Hakkımızda</h3>
    <div class="container">
        <div id="sol">
            <h5 id="h5sol">
                Lorem ipsum dolor sit amet, <br>
                fugiat impedit voluptate, <br> voluptates.
            </h5>
        </div>
        <div id="sag">
            <span>L</span>
            <p id="psag">orem ipsum dolor sit amet, consectetur consectetur consectetur adipisicing elit. Animi
                inventore nihil rem
                temporibus? Cum ducimus elium ducimus eligendi enim, eos es elium ducimus eligendi enim, eos es elium
                ducimus eligendi enim, eos et impedit in inventore iure nam non porro quas, reprehenderit soluta
                voluptate. </p>
        </div>

        <img src="img/about.jpg" alt="" class="img-fluid mt100">
        <p id="pson"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at blanditiis culpa cupiditate
            dignissimos dolor dolorem facere illum incidunt ipsa, iusto laudantium odio, optio, quaerat quidem repellat
            repellendus tempore tenetur!</p>
    </div>

</section>

<section id="egitim">
    <div class="container">
        <h3>Eğitimler</h3>
        <div class="owl-carousel owl-theme">
            <div class="card item" data-merge="1.5">
                <img class="img-fluid" src="img/r2.jpg" alt="">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    voluptatibus voluptatum.</p>
            </div>
            <div class="card item" data-merge="1.5">
                <img class="img-fluid" src="img/r2.jpg" alt="">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    voluptatibus voluptatum.</p>
            </div>
            <div class="card item" data-merge="1.5">
                <img class="img-fluid" src="img/r2.jpg" alt="">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    voluptatibus voluptatum.</p>
            </div>
        </div>


    </div>

</section>

<section id="ekip">
    <div class="container">
        <h3 id="ekiph3">Ekip</h3>

        <div class="sutun-sol-sag">
            <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">Hakan Celik</h4>
            <p class="ekipp">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fab fa-facebook-f social social"></i></a>
                <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
        </div>
        <div class="orta-sutun">
            <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">Merve Kaya</h4>
            <p class="ekipp">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fab fa-facebook-f social social"></i></a>
                <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
        </div>
        <div class="sutun-sol-sag">
            <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">Sibel Sunal</h4>
            <p class="ekipp">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.
            </p>
            <div class="ekip-ikon">
                <a href="#"><i class="fab fa-facebook-f social social"></i></a>
                <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
        </div>

    </div>

</section>

<section id="iletisim">
    <div class="container">
        <h3 id="h3iletisim">İletişim</h3>

        <form action="insert.php" method="post">
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="telefon" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="email" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>
                    <textarea name="mesaj" cols="30" rows="10" class="form-control"
                              placeholder="Mesaj Giriniz"></textarea>
                    <input type="submit" value="Gönder"/>
                </div>

                <div id="adres">
                    <h4 id="adresbaslik">Adres: </h4>
                    <p class="adresp">Mehmet Akif Ersoy Mah.</p>
                    <p class="adresp">Akyıldız Caddesi</p>
                    <p class="adresp">Oğuz Bey sokak No:123</p>
                    <p class="adresp">0212 389 99 99</p>
                    <p class="adresp">Email: paylastikca@paylastikca.com</p>
                </div>
            </div>
        </form>
        <footer>
            <div id="copyright">Tüm Hakları Saklıdır</div>
            <div id="socialfooter">
                <a href="#"><i class="fab fa-facebook-f social social"></i></a>
                <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                <a href="#"><i class="fab fa-twitter social"></i></a>
            </div>
            <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
        </footer>

    </div>

</section>


<!-- Jquery Js -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

<!-- Owl Js -->
<script src="owl/owl.carousel.min.js"></script>
<!-- Alertify Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="owl/script.js"></script>
<?php

// Formun gonderilmesi zamani alert verilmesi ucun
if (isset($_SESSION['success'])){ // sessionun success olub olmadigini yoxlayir
     //session success true olursa alertify codlari yazdirilsin
   echo
 "   <script>
        $(function () {
            alertify.success('Mesajiniz ugurla gonderildi');
        })
    </script>";

   // session bitdiyi zaman
   session_destroy();
}
?>


</body>
</html>

