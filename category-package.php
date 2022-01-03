<?php 
include('main-partials/menu.php');
include('connection.php');



$category_id = $_GET['category_id'];

$sql_title = "SELECT title FROM tbl_category WHERE id=$category_id AND active = 'Yes'";
$res = $con->query($sql_title);

$row = mysqli_fetch_array($res);

$category_title = $row['title'];


?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>All packages available in <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Tour Packages</h2>

            <?php

            $sql2 = "SELECT * FROM tbl_package WHERE category_id=$category_id AND active = 'Yes'";
            $res2 = $con->query($sql2);

                while($row2 = mysqli_fetch_array($res2)){
                    echo "<div class='food-menu-box'>
                    <div class='food-menu-img'>
                        <img src='image/package/$row2[image_name]' alt='Chicke Hawain Pizza' class='img-responsive img-curve'>
                    </div>
    
                    <div class='food-menu-desc'>
                        <h4>$row2[title]</h4>
                        <p class='food-price'>₱$row2[price]</p>
                        <p class='food-detail'>
                            $row2[description]
                        </p>
                        <br>
    
                        <a href='reservation.php?id=$row2[id]' class='btn btn-primary text-deco'>Book Now</a>
                    </div>
                </div>";
                }
            ?>

        


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('main-partials/footer.php') ?>