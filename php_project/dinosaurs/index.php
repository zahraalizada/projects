<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | D I N O</title>

    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!--  Custom  css-->
    <link rel="stylesheet" type="text/css" href="website/css/main.css">

    <!--    Owl Carousel 2 css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>

<?php include "website/header.php" ?>

<main>
    <section id="banner">
        <div id="up"></div>
        <div class="container-fluid">
            <div class="banner-img">
                <div class="black-shadow"></div>
                <div class="banner-desc">
                    <h2>Life of the Dinosaurs</h2>
                    <hr>
                    <p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt ducimus ea ipsam nemo quam repudiandae unde, velit vitae? Aliquid blanditiis quaerat repudiandae totam voluptatem! Corporis delectus eaque nemo officia tempore!</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h2 class="mb-4 text-success">ABOUT US</h2>
                    <p>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae blanditiis commodi consequatur dolorem earum est, eveniet illo nobis nostrum, porro reiciendis repellendus rerum sequi, sunt temporibus vel vero voluptas!</span><span>Magni, optio perspiciatis. Aperiam architecto aspernatur corporis debitis dolore dolorum ducimus eius enim eum illo ipsam libero mollitia necessitatibus nesciunt odit qui quo quod sapiente sed, sunt temporibus vitae voluptates?</span>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae blanditiis commodi consequatur dolorem earum est, eveniet illo nobis nostrum, porro reiciendis repellendus rerum sequi, sunt temporibus...</span>
                        <a href="website/about.php" class="card-link">Read more</a>
                    </p>
                </div>
            </div>
        </div>


    </section>

    <section id="dino">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h2 class="mb-4 text-success">DINOSAURS</h2>
                    <div class="owl-carousel">
                        <div class="dino-img"> <img src="website/img/d1.jpg"> </div>
                        <div  class="dino-img"> <img src="website/img/d2.jpg"> </div>
                        <div  class="dino-img"> <img src="website/img/d3.jpg"> </div>
                        <div  class="dino-img"> <img src="website/img/d4.jpg"> </div>
                        <div  class="dino-img"> <img src="website/img/d5.jpg"> </div>
                        <div  class="dino-img"> <img src="website/img/d6.jpg"> </div>
                        <div  class="dino-img"> <img src="website/img/d1.jpg"> </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h2 class="mb-4 text-success">OUR TEAM</h2>
                    <div class="owl-carousel">
                        <div class="card border-0"  style="width: 18rem;">
                            <div class="team-item-img">
                                <img src="website/img/t1.jpg">
                            </div>
                            <div class="card-body">
                                <div class="team-item-desc">
                                    <h5>John Doe</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.</p>
                                    <div class="team-social mb-3">
                                        <a href="#" class="team-icon-link"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0"  style="width: 18rem;">
                            <div class="team-item-img">
                                <img src="website/img/t2.jpg">
                            </div>
                            <div class="card-body">
                                <div class="team-item-desc">
                                    <h5>Wilma Elles</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.</p>
                                    <div class="team-social mb-3">
                                        <a href="#" class="team-icon-link"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0"  style="width: 18rem;">
                            <div class="team-item-img">
                                <img src="website/img/t3.jpg">
                            </div>
                            <div class="card-body">
                                <div class="team-item-desc">
                                    <h5>Alice Curlisle</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.</p>
                                    <div class="team-social mb-3">
                                        <a href="#" class="team-icon-link"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0"  style="width: 18rem;">
                            <div class="team-item-img">
                                <img src="website/img/t1.jpg">
                            </div>
                            <div class="card-body">
                                <div class="team-item-desc">
                                    <h5>John Doe</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.</p>
                                    <div class="team-social mb-3">
                                        <a href="#" class="team-icon-link"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0"  style="width: 18rem;">
                            <div class="team-item-img">
                                <img src="website/img/t3.jpg">
                            </div>
                            <div class="card-body">
                                <div class="team-item-desc">
                                    <h5>Alice Curlisle</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, nesciunt.</p>
                                    <div class="team-social mb-3">
                                        <a href="#" class="team-icon-link"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-twitter"></i></a>
                                        <a href="#" class="team-icon-link"><i class="fa-brands fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5><a href="#" class="card-link text-success text-decoration-none ">All Team</a></h5>
                </div>
            </div>
        </div>
    </section>

    <?php include "website/contact.php" ?>

</main>


<?php include "website/footer.php" ?>


<!-- Bootstrap js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

<!-- Owl Carousel 2 js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="website/js/app.js"></script>

</body>
</html>