<?php
include('main-partials/menu.php');

include('connection.php');

$retrieve_list = "SELECT * FROM tbl_category WHERE active = 'Yes'";
$res = $con->query($retrieve_list);


?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Places</h2>

            <?php
                while($row = mysqli_fetch_array($res)){

                    ?>
                   <?php echo "<a href='category-package.php?category_id=$row[id]'>"; ?>

                   <?php
                  echo "  <div class='box-3 float-container'>
                  <img src='image/category/$row[img_name]' class='img-responsive img-curve'>
              </div>
              </a>";
                }
            ?>


            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

<?php include('main-partials/footer.php'); ?>