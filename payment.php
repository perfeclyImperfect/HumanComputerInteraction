<?php 
include('main-partials/menu.php'); 
include('connection.php');
include('admin2/includes.php');

$package_id = $_GET['id'];

$retrieve_package = "SELECT * FROM tbl_package WHERE id = $package_id";
$res = $con->query($retrieve_package);

$row = mysqli_fetch_assoc($res);


$retrieve_reservation = "SELECT id FROM tbl_reservation ORDER BY id DESC LIMIT 1";
$result = $con->query($retrieve_reservation);

$rows = mysqli_fetch_array($result);

$res_id = $rows['id'] + 1;



if(isset($_POST['reserved'])){
    $_SESSION['package'] = $_POST['package'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['qty'] = $_POST['qty'];
    $_SESSION['total'] = $_POST['price'] * $_POST['qty'];
    $_SESSION['hotel'] = $_POST['hotel'];
    $_SESSION['travel_date'] = $_POST['travel-date'];

    $_SESSION['cust_name'] = $_POST['full-name'];
    $_SESSION['cust_contact'] = $_POST['contact'];
    $_SESSION['cust_email'] = $_POST['email'];
    $_SESSION['cust_address'] = $_POST['address'];
}
$package = $_SESSION['package'];
$price = $_SESSION['price'];
$qty = $_SESSION['qty'];
$total = $_SESSION['total'];
$hotel =   $_SESSION['hotel'];
$travel_date = $_SESSION['travel_date'];
$cust_name = $_SESSION['cust_name'];
$cust_contact = $_SESSION['cust_contact'];
$cust_email = $_SESSION['cust_email'];
$cust_address = $_SESSION['cust_address'];
$booking_date = date("Y-m-d h:i:sa");
?>

<section class="food-search">
    <div class="container">
        <h2 class="text-center text-white">Payment</h2>
        <form action="" method="POST" class="order">
            <fieldset>
                <legend>Payment information</legend>
                <h2 class="order-label text-black">Total</h2>
                <h2 class="order-label text-black">₱<?php echo $total; ?>.00</h2><br><br>
                <div class="order-label">Card Number</div>
                <input type="text" placeholder="16-digit card number" class="input-responsive" required>

                <div class="order-label">Expiration Date</div>
                <input type="text" placeholder="MM/YY" class="input-responsive" required>

                <div class="order-label">Security Code</div>
                <input type="text" placeholder="3-digit security code" class="input-responsive" required>

                <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary">
            </fieldset>
        </form>
    </div>
</section>

<?php

    if(isset($_POST['submit'])){
        

        $status = "Confirmed";

        $insertsql = "INSERT INTO tbl_reservation(package,price,qty,total,hotel,travel_date,status,cust_name,cust_contact,cust_email,cust_address) VALUES('$package','$price','$qty','$total','$hotel','$travel_date','$status','$cust_name','$cust_contact','$cust_email','$cust_address')";
        mysqli_query($con, $insertsql);
        mysqli_close($con);

        echo "
        <script>
            swal({
                title: 'Payment Success!',
                text: 'Your reservation is confirmed!',
                icon: 'success'
                }).then(function() {
                    window.location = 'http://localhost/HCI/receipt.php?id=$res_id';
                });
        </script>
        ";

    }
?>

