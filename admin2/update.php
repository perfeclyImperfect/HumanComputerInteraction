<?php 
include('connection.php');
include('includes.php');
$id = $_GET['a'];
$retrieve = "SELECT * from tbl_admin where id='$id'";
$res = $con->query($retrieve);

?>


<div class="content">
    <table>
        <tr>
            <th>ID No.</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($res)){
            echo "<tr>
            <td>$row[id]</td>
            <td><input type='text' id='id_name' value='$row[name]'></td>
            <td><input type='text' id='id_username' value='$row[username]'></td>
            <td><input type='text' id='id_password' value='$row[password]'></td>
            <td><button class='btn' onclick='updateme($row[id])'>Update</button></td>
            </tr>";
        }
        ?>
    </table>
</div>