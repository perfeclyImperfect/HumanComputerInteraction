<?php
include('connection.php');
include('main-partials/menu.php');

$retrieve_list = "SELECT * FROM tbl_category WHERE featured = 'Yes' AND active = 'Yes' LIMIT 3";
$res = $con->query($retrieve_list);


$retrieve_package = "SELECT * FROM tbl_package WHERE featured = 'Yes' AND active = 'Yes' LIMIT 4";
$res2 = $con->query($retrieve_package);

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

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Featured Places</h2>
<?php
    while($row = mysqli_fetch_array($res)){
        
        ?>
        
        <?php echo "<a href='category-package.php?category_id=$row[id]'>"; ?>

        <?php
        echo "<div class='box-3 float-container'>
        <img src='../HCI/image/category/$row[img_name]' class='img-responsive img-curve'>
        </div>
        </a>";
    }
?>
    

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Best Seller</h2>



<?php
    while($row2 = mysqli_fetch_array($res2)) {
        echo "<div class='food-menu-box'>
        <div class='food-menu-img'>
            <img src='../HCI/image/package/$row2[image_name]' class='img-responsive img-curve'>
        </div>

        <div class='food-menu-desc'>
            <h4>$row2[title]</h4>
            <p class='food-price'>$$row2[price]</p>
            <p class='food-detail'>
                <a class='text-deco' href='tour-package.php'>Preview>></a>
            </p>
            <br>

            <a href='reservation.php?id=$row2[id]' class='btn btn-primary text-deco'>Book Now</a>
        </div>
    </div>";
    }
?>




            <div class="clearfix"></div>
        </div>
        <p class="text-center">
            <a class="text-deco"href="tour-package.php">See All Packages</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

<?php
include('main-partials/footer.php');
?>