<?php include('main-partials/menu.php');
include('connection.php');




?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            <?php 
                $search = $_POST['search'];
            ?>
            <h2>Search result for <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Tour Package</h2>

            <?php
                

                $retieve_list = "SELECT * FROM tbl_package WHERE title LIKE '%$search%' OR description LIKE '%$search%'";
                $res = $con->query($retieve_list);

                $count = mysqli_num_rows($res);
                if($count > 0){
                    while($row = mysqli_fetch_array($res)){
                        echo "<div class='food-menu-box'>
                        <div class='food-menu-img'>
                            <img src='image/package/$row[image_name]' alt='Chicke Hawain Pizza' class='img-responsive img-curve'>
                        </div>
        
                        <div class='food-menu-desc'>
                            <h4>$row[title]</h4>
                            <p class='food-price'>$$row[price]</p>
                            <p class='food-detail'>
                                $row[description]
                            </p>
                            <br>
        
                            <a href='#' class='btn btn-primary text-deco'>Book Now</a>
                        </div>
                    </div>";
                    }
                }
                else{
                    echo "<div class='text-center search-error'>No matches found</div>";
                }
            ?>

            <div class="clearfix"></div>


        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('main-partials/footer.php')?>