
<?php include "header.php" ?>




<main>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col py-5">
                    <h2 class="mb-4 text-success text-uppercase">Search Results</h2>
                    <p>

                        <?php

                        if($_GET){
                            $search = $_GET['search'];

                            if(!$search){
                                echo "Please enter word..";
                            } else{

                                $query = $conn->prepare("SELECT * FROM posts WHERE header LIKE :header");
                                $query ->execute([':header' => "%".$search."%"]);

                                $query_row_count = $query->rowCount();
                                if($query_row_count > 0){
                                    echo $query_row_count." number of words found";
                                    echo "<br><br>";

                                    foreach ($query as $row){
                                        echo "<b>Result: </b> " . $row['header'];
                                        echo "<br>";
                                    }
                                } else{
                                    echo "Sorry, nothing found!";
                                }
                            }
                        }


                        ?>
                    </p>
                </div>
            </div>
        </div>


    </section>





</main>


<?php include "footer.php" ?>

