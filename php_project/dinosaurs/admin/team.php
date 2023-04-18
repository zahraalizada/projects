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
                        <div class="d-flex justify-content-between align-center mb-3">
                            <h3>Team Lists</h3>
                            <a href="add_team.php" class="btn btn-primary">Add Member</a>
                        </div>
                        <div id="tableExample2"
                             data-list='{"valueNames":["name","email","desc"],"page":15,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-striped fs--1 mb-0">
                                    <thead class="bg-200 text-900">
                                    <tr>
                                        <th class="sort" data-sort="name">Name</th>
                                        <th class="sort" data-sort="email">Email</th>
                                        <th class="sort" data-sort="facebook">Facebook</th>
                                        <th class="sort" data-sort="vimeo">Vimeo</th>
                                        <th class="sort" data-sort="twitter">Twitter</th>
                                        <th class="sort" data-sort="desc">Description</th>
                                        <th class="sort" data-sort="desc">Image</th>
                                        <th class="sort" data-sort="desc">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    <?php
                                        include "connect.php";
                                        // Read team table values start
                                        $query = $conn->prepare("SELECT * FROM team ");
                                        $query->execute();

//                                        $query = "SELECT * FROM team";
//                                        $result = $conn->query($query);
                                        $rowCount = $query->rowCount();


                                        if($rowCount>0){
                                            while($row = $query->fetch(PDO::FETCH_OBJ)){

                                                echo "
                                                    <tr>
                                                        <td>" . $row->name. " </td>
                                                        <td>" . $row->email . "</td>
                                                        <td>" . $row->facebook . "</td>
                                                        <td>" . $row->vimeo. "</td>
                                                        <td>" . $row->twitter . "</td>
                                                        <td>" . $row->description . "</td>
                                                        <td>image</td>
                                                        <td class='text-end'>
                                                            <div>
                                                                <a href='edit_user.php?p_id=$row->id' class='btn p-0' data-bs-toggle='tooltip'
                                                                        data-bs-placement='top' title='Edit'><span
                                                                            class='text-500 fas fa-edit'></span></a>
                                                                <a href='delete_user.php?p_id=$row->id' class='btn p-0 ms-2' data-bs-toggle='tooltip'
                                                                        data-bs-placement='top' title='Delete'><span
                                                                            class='text-500 fas fa-trash-alt'></span></a>
                                                            </div>
                                                        </td>
                                                </tr>
                                                ";
                                            }
//                                            foreach ($row as $item){

                                                //---------------------------------------------------------------------
//                                                echo "
//                                                    <tr>
//                                                        <td>".$item['name']."</td>
//                                                        <td>".$item['email']."</td>
//                                                        <td>".$item['facebook']."</td>
//                                                        <td>".$item['vimeo']."</td>
//                                                        <td>".$item['twitter']."</td>
//                                                        <td>".$item['description']."</td>
//                                                        <td>image</td>
//                                                        <td class='text-end'>
//                                                            <div>
/*                                                                <a href='delete_user.php?p_id=<?php echo  ;?>' class='btn p-0' data-bs-toggle='tooltip'*/
//                                                                        data-bs-placement='top' title='Edit'><span
//                                                                            class='text-500 fas fa-edit'></span></a>
//                                                                <a href='#' class='btn p-0 ms-2'   data-bs-toggle='tooltip'
//                                                                        data-bs-placement='top' title='Delete'><span
//                                                                            class='text-500 fas fa-trash-alt'></span></a>
//                                                            </div>
//                                                        </td>
//                                                </tr>
//                                                ";
                                                //---------------------------------------------------------------------

//                                            }
                                        }
                                        // Read team table values end



//                                        $sql = "DELETE FROM team WHERE id=2";
//
//                                        if ($conn->query($sql) === TRUE) {
//                                            echo "Delete Success";
//                                        } else {
//                                            echo "Delete Error" ;
//                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                        data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                <ul class="pagination mb-0"></ul>
                                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                        data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
</body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jan 2022 06:49:23 GMT -->
</html>