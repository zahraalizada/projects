<?php include "connect.php" ?>



<?php include "header.php" ?>
<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <div class="container" data-layout="container">
        <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
        </script>
        <?php include "sidebar.php"; ?>

        <div class="row g-0">
            <div class="col pe-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">
                    <div class="card-body">
                        <h3>Contact </h3>



                        <div class="table-responsive scrollbar">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th class="text-end" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $sec = "SELECT * FROM contact";
                                $result = $conn->query($sec);
                                $rowCount = $result->rowCount();

                                if ($rowCount > 0) {
                                    $row = $result->fetchAll();
                                    foreach ($row as $item) {
                                        echo "
                                          <tr id='".'contact-id-'.$item['id']."'>
                                              <td>" . $item['firstname'] . " " . $item['lastname'] . "</td>
                                              <td>" . $item['email'] . "</td>
                                              <td>" . $item['subject'] . "</td>
                                              <td>" . $item['message'] . "</td>
                                              <td>" . $item['date'] . "</td>
                                              <td><button data-id='".$item['id']."' 
                                              class='btn btn-danger contact-delete'>
                                              <i class='fas fa-trash'></i></button></td>
                                          </tr>
                                                ";
                                    }
                                } else {
                                    echo " Hic bir veri bulunamadi";
                                }


                                ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <?php include('footer.php'); ?>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 06:49:23 GMT -->
</html>