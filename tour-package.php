<?php include('main-partials/menu.php'); 

include('connection.php');

$retrieve_package = "SELECT * FROM tbl_package WHERE active = 'Yes'";
$res = $con->query($retrieve_package);
?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Package.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Tour Packages</h2>



            <?php
                while($row = mysqli_fetch_array($res)){
                    echo "<div class='food-menu-box'>
                    <div class='food-menu-img'>
                        <img src='image/package/$row[image_name]' class='img-responsive img-curve'>
                    </div>
    
                    <div class='food-menu-desc'>
                        <h4>$row[title]</h4>
                        <p class='food-price'>₱$row[price]</p>
                        <p class='food-detail'>
                            $row[description]
                        </p>
                        <br>
                        <a href='reservation.php?id=$row[id]' class='btn btn-primary text-deco'>Book Now</a>
                    </div>
                </div>";
                            
                }
            ?>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('main-partials/footer.php'); ?>