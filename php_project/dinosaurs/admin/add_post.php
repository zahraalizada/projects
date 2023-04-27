<?php include  "connect.php"?>
<?php include  "header.php"?>

<body>
<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <div class="container" data-layout="container">

        <?php include "sidebar.php";?>

        <div class="row g-0">
            <div class="col pe-lg-2 mb-3">
                <div class="card h-lg-100 overflow-hidden">
                    <div class="card-body">
                        <h3>Add new Post Page</h3>
                        <form action="insert_post.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3"><label class="form-label" for="basic-form-name">Header</label><input class="form-control" id="basic-form-name" type="text" placeholder="Add new header" name="post_header"/></div>

                            <div class="mb-3"><label class="form-label">Upload Image</label><input class="form-control" type="file" name="post_image"/></div>

                            <div class="mb-3"><label class="form-label" for="basic-form-textarea">Content</label><textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="post_description"></textarea></div>

                            <button class="btn btn-primary" type="submit" name="add_post">Submit</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>







        <?php include('footer.php'); ?>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 06:49:23 GMT -->
</html>