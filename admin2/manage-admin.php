<?php 
include('connection.php');
include('includes.php');

$retrieve_list = "SELECT * FROM tbl_admin";
$res = $con->query($retrieve_list);

?>

<div class="content">
    <h2 class="page-title">Admin Manager</h2>
    <div class="text-center"><button class="btn" onclick="addAdmin()">Add Admin</button></div><br>
    <br>
    <div class="manage-admin">
        <table>
            <thead>
                <th>ID No.</th>
                <th>Admin Name</th>
                <th>Username</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while($row = mysqli_fetch_array($res)){
                    $i++;
                    echo "<tr>
                            <td>$i</td>
                            <td>$row[name]</td>
                            <td>$row[username]</td>
                            <td>
                                <button class='btn' onclick='updateadmin($row[id])' >Update</button>
                                <button onclick='deleteme($row[id])' class='btn'>Delete</button>
                            </td>
                            
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>