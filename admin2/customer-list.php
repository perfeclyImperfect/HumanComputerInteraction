<?php
include('connection.php'); 


$retrieve_list = "SELECT * FROM tbl_reservation ORDER BY date_current DESC";
$res = $con->query($retrieve_list);


?>

<div class="content">
    <div class="page-title">
        <h2>Customer List</h2>
    </div class='content3'>
        <table>
            <tr>
                <td>S.N</td>
                <td>Full Name</td>
                <td>Contact</td>
                <td>Email</td>
                <td>Package</td>
                <td>Travel Date</td>
                <td>Total Payment</td>
            </tr>
            <?php
            $i=0;
                while($row = mysqli_fetch_array($res)){
                    $i++;
                    echo "<tr>
                    <td>$i</td>
                    <td>$row[cust_name]</td>
                    <td>$row[cust_contact]</td>
                    <td>$row[cust_email]</td>
                    <td>$row[package]</td>
                    <td>$row[travel_date]</td>
                    <td>$row[total]</td>
                </tr>";
                }

            ?>
            
        </table>
</div>