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
                        <h3>Update Member</h3>

                        <?php

                        if($_POST){
                            $name = $_POST['name'];
                            $hdnid = $_POST['hdnid'];

                            $query = $conn->prepare("UPDATE team SET name = ? WHERE id = ?");
                            $update = $query->execute([$name,$hdnid]);
                            header("Location: team.php");
                            exit();
                        }

                        if($_GET){
                            $id = $_GET['p_id'];

                            $query = $conn->query("SELECT * FROM team WHERE id = {$id}")->fetch(PDO::FETCH_ASSOC);

                            if($query["name"]){
                                $name=$query["name"];
                                $email=$query["email"];
                                $facebook=$query["facebook"];
                                $vimeo=$query["vimeo"];
                                $twitter=$query["twitter"];
                                $description=$query["description"];
                            } else{
                                 $name="No info";
                                 $email="No info";
                                 $facebook="No info";
                                 $vimeo="No info";
                                 $twitter="No info";
                                 $description="No info";
                            }
                        }
                        ?>


                        <form action="edit_team_member.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-name">Name</label>
                                <input type="hidden" name="hdnid" value="<?php echo $id; ?>">
                                <input class="form-control" id="basic-form-name" type="text" placeholder="Name" name="name" value="<?php echo $name; ?>"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-form-email">Email address</label>
                                <input class="form-control" id="basic-form-email" type="email" placeholder="name@example.com" name="email" value="<?php echo $email; ?>"/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-form-email">Facebook address</label>
                                <input class="form-control" id="basic-form-email" type="text" placeholder="www.facebook.com" name="facebook" value="<?php echo $facebook; ?>"/>
                            </div>
                            <div class="mb-3"><label class="form-label" for="basic-form-email" >Vimeo address</label><input class="form-control" id="basic-form-email" type="text" placeholder="www.vimeo.com" name="vimeo" value="<?php echo $vimeo; ?>"/></div>
                            <div class="mb-3"><label class="form-label" for="basic-form-email">Twitter address</label><input class="form-control" id="basic-form-email" type="text" placeholder="www.twitter.com" name="twitter" value="<?php echo $twitter; ?>"/></div>

                            <!--                            <div class="mb-3"><label class="form-label">Upload Image</label><input class="form-control" type="file" name="image"/></div>-->
                            <div class="mb-3"><label class="form-label" for="basic-form-textarea">Description</label><textarea class="form-control" id="basic-form-textarea" rows="3" placeholder="Description" name="description"><?php echo $description; ?></textarea></div>

                            <button class="btn btn-primary" type="submit" name="update_member">Update</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
</body>

</html>
