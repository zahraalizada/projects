<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | D I N O</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!--  Custom  css-->
    <link rel="stylesheet" type="text/css" href="website/css/main.css">


</head>
<body>

<?php include "header.php" ?>

<?php
include "admin/connect.php";


$query = $conn->prepare("SELECT * FROM about ");
$query->execute();
$rowCount = $query->rowCount();

if ($rowCount) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
    print_r($row['header']);

}

?>

<main>
    <section id="banner">
        <div id="up"></div>
        <div class="container-fluid">
            <div class="banner-img-about" style="background-image: url('./admin/images/<?php echo $row['image'] ?>')">

            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h2 class="mb-4 text-success text-center text-uppercase"><?php echo $row['header'] ?></h2>
                    <p>
                        <?php echo $row['content'] ?>
                    </p>
                </div>
            </div>
        </div>


    </section>


</main>


<?php include "footer.php" ?>


<!-- Bootstrap js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>


<script src="website/js/app.js"></script>

</body>
</html>