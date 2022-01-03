<?php include('main-partials/menu.php');
include('connection.php');

$package_id = $_GET['id'];

$retrieve_package = "SELECT * FROM tbl_package WHERE id = $package_id";
$res = $con->query($retrieve_package);

$row = mysqli_fetch_assoc($res);



$a = array("Gemini Travelers Lodge","Residencia Catrina B&B","Telesfora Beach Cottages","Sea Cocoon Hotel");

?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your booking.</h2>

            <form action=<?php echo "payment.php?id=$row[id]"; ?> method="POST" class="order">
                <fieldset>
                    <legend>Selected Package</legend>

                    <div class="food-menu-img">
                        <img src="image/package/<?php echo "$row[image_name]"; ?>" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo "$row[title]"; ?></h3>
                        <input type="hidden" name="package" value="<?php echo "$row[title]"; ?>">
                        <p class="food-price">$<?php echo "$row[price]"; ?></p>
                        <input type="hidden" name="price" value="<?php echo "$row[price]"; ?>">
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" >

                        <div class="order-label">Accomodation</div>
                        <select name="hotel">
                            <?php 
                                foreach($a as $hotels){
                                    echo "<option value='$hotels'>$hotels</option>";
                                }
                            
                            ?>
                        </select><br><br>

                        <div class="order-label">Travel Date</div>
                        <input type="date" name="travel-date" class="input-responsive" >
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Client Information</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Benja Carlo Soliman" class="input-responsive" >

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0968xxxxxx" class="input-responsive" >

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. benja.soliman@neu.edu.ph" class="input-responsive" >

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" ></textarea>

                    <input type="submit" name="reserved" value="Proceed" class="btn btn-primary">
                </fieldset>
            </form>



                   
    
        </div>
    </section>

    <?php include('main-partials/footer.php')?>

