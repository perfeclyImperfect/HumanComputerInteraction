<?php 
include('partials/menu.php');
include('includes.php');
include('connection.php');


$retrieve_date = "SELECT * FROM tbl_reservation WHERE DATE(date_current) = DATE(NOW()) ORDER BY date_current DESC";
$res = $con->query($retrieve_date);
$count = mysqli_num_rows($res);

$retrieve_date2 = "SELECT * FROM tbl_reservation WHERE DATE(date_current) = DATE(NOW()) ORDER BY date_current DESC";
$res3 = $con->query($retrieve_date2);

$retrieve_all = "SELECT * FROM tbl_reservation";
$res2 = $con->query($retrieve_all);
$count2 = mysqli_num_rows($res2);

$total_sum = "SELECT SUM(total) FROM tbl_reservation WHERE DATE(date_current) = DATE(NOW())";
$daily_total = $con->query($total_sum);
$row5 = mysqli_fetch_assoc($daily_total);

$total_sum2 = "SELECT SUM(total) FROM tbl_reservation";
$daily_total2 = $con->query($total_sum2);
$row6 = mysqli_fetch_assoc($daily_total2);

?>

    <div class="content">
        <div id="text">
            <?php
                if(isset($_SESSION['category-update'])){
                    echo $_SESSION['category-update'];
                    unset($_SESSION['category-update']);
                }

                if(isset($_SESSION['category-add'])){
                    echo $_SESSION['category-add'];
                    unset($_SESSION['category-add']);
                }

                if(isset($_SESSION['add-package'])){
                    echo $_SESSION['add-package'];
                    unset($_SESSION['add-package']);
                }


            ?>
            <div class="upper-content">
                <div class="col-4">
                    <div class="row-up text-center">
                        <h1>₱<?php  echo implode($row6); ?></h1>
                    </div>
                    <div class="row-down">
                        <h3 class="text-center">Total Sales</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row-up text-center">
                        <h1><?php echo $count2; ?></h1>
                    </div>
                    <div class="row-down">
                        <h3 class="text-center">Total Reservations</h3>
                    </div>
                </div>



                
                        
                        
                        
               
                <div class="col-4">
                    <div class="row-up text-center">
                        <h1>₱<?php echo implode($row5);  ?></h1>
                    </div>
                    <div class="row-down">
                        <h3 class="text-center">Daily Sales</h3>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row-up text-center">
                        <h1><?php  echo $count; ?></h1>
                    </div>
                    <div class="row-down">
                        <h3 class="text-center">Daily Reservations</h3>
                    </div>
                </div>
            </div>
            

            <div class="lower-content">

                <div class="col-2">
                    <div class="page-title text-center">
                        <h3>Daily Reservation Log</h3>
                    </div>
                    <div class="content1" >
                        <table>
                            <tr>
                                <th></th>
                                <th>Customer Name</th>
                                <th>E-mail</th>
                                <th>Time</th>
                            </tr>
                            <?php
                            $i = 0;
                                while($row2 = mysqli_fetch_assoc($res3)){
                                    $i++;
                                    echo "<tr>
                                    <td>$i</td>
                                    <td>$row2[cust_name]</td>
                                    <td>$row2[cust_email]</td>
                                    <td>$row2[date_current]</td>
                                </tr>";
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>
                
                <div class="col-2">
                    <div class="page-title text-center">
                        <h3>Daily Sales Log</h3>
                    </div>
                    <div class="content2" >
                        <table>
                            <tr>
                                <th></th>
                                <th>Customer Name</th>
                                <th>Package Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>

                            <?php
                            $i = 0;
                                while($row = mysqli_fetch_array($res)){
                                    $i++;
                                    echo "<tr>
                                    <td>$i</td>
                                    <td>$row[cust_name]</td>
                                    <td>$row[price]</td>
                                    <td>$row[qty]</td>
                                    <td>$row[total]</td>
                                </tr>";
                                }
                            ?>
                            
                        </table>
                    </div>
                </div>
            </div>




            <div class="clearfix"></div>
        </div>
    </div>
    
    
</body>
</html>