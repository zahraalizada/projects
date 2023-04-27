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
                        <h3>Update About</h3>

                        <?php

                        if($_POST){
                            $hdnid = $_POST['hdnid'];
                            $header=$_POST["header"];
                            $image=$_FILES["image"]['name'];
                            $image_temp = $_FILES['image']['tmp_name'];
                            $content=$_POST["content"];

                            move_uploaded_file($image, "../images/$image_temp");


                            $query = $conn->prepare("UPDATE about SET header=?, image=?,content = ? WHERE id = ?");
                            $update = $query->execute([$header,$image,$content,$hdnid]);
                            header("Location: about.php");
                            exit();
                        }

                        if($_GET){
                            $id = $_GET['p_id'];

                            $query = $conn->query("SELECT * FROM about WHERE id = {$id}")->fetch(PDO::FETCH_ASSOC);

                            if($query["header"]){
                                $header=$query["header"];
                                $image=$query["image"];
                                $content=$query["content"];
                            } else{
                                $header= "No info";
                                $image= "No info";
                                $content= "No info";
                            }
                        }
                        ?>


                        <form action=" " method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-name">Header</label>
                                <input type="hidden" name="hdnid" value="<?php echo $id; ?>">
                                <input class="form-control" id="basic-form-name" type="text" placeholder="Name" name="header" value="<?php echo $header; ?>"/>
                            </div>

                         <div class="mb-3"><label class="form-label">Upload Image</label>
                             <input class="form-control" type="file" name="image" value="<?php echo $image ?>"/>
                         </div>

                            <div class="mb-3"><label class="form-label" for="basic-form-textarea">Description</label><textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="content"><?php echo $content; ?></textarea></div>

                            <button class="btn btn-primary" type="submit" name="update_about">Update</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
</body>

</html>
