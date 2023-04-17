<?php include  "connect.php"?>
<?php include  "header.php"?>

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
        <?php include "sidebar.php";?>

        <div class="row g-0">
            <div class="col pe-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">
                    <div class="card-body">
                        <h3>Add Team Member</h3>
                        <form action="insert_member.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3"><label class="form-label" for="basic-form-name">Name</label><input class="form-control" id="basic-form-name" type="text" placeholder="Name" name="name"/></div>
                            <div class="mb-3"><label class="form-label" for="basic-form-email">Email address</label><input class="form-control" id="basic-form-email" type="email" placeholder="name@example.com" name="email"/></div>
                            <div class="mb-3"><label class="form-label" for="basic-form-email">Facebook address</label><input class="form-control" id="basic-form-email" type="text" placeholder="www.facebook.com" name="facebook"/></div>
                            <div class="mb-3"><label class="form-label" for="basic-form-email" >Vimeo address</label><input class="form-control" id="basic-form-email" type="text" placeholder="www.vimeo.com" name="vimeo"/></div>
                            <div class="mb-3"><label class="form-label" for="basic-form-email">Twitter address</label><input class="form-control" id="basic-form-email" type="text" placeholder="www.twitter.com" name="twitter"/></div>

<!--                            <div class="mb-3"><label class="form-label">Upload Image</label><input class="form-control" type="file" name="image"/></div>-->
                            <div class="mb-3"><label class="form-label" for="basic-form-textarea">Description</label><textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="description"></textarea></div>

                            <button class="btn btn-primary" type="submit" name="add_member">Add Member</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>







        <?php include('footer.php'); ?>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 06:49:23 GMT -->
</html>