
<?php
include('connection.php');

$retrieve_list = "SELECT * FROM tbl_package";
$res = $con->query($retrieve_list);

?>


<div class="content">
    <div class="page-title">
        <h2>Package Manager</h2>
        <div class="text-center"><a class="btn" href="add-package.php">Add Package</a></div><br>
        <div class="text-center">
            <i class="fas fa-search"></i>
            <input type="text" id="search" placeholder="Search...">
            <input type="submit" onclick="searchPackage()" value="Search">
        </div>
        <table>
            <tr>
                <td>S.N.</td>
                <td>Title</td>
                <td>Price</td>
                <td>Image</td>
                <td>Featured</td>
                <td>Active</td>
                <td>Action</td>
            </tr>
            <?php
            $i = 0;
                while($row = mysqli_fetch_array($res)){
                    $i++;
                    echo "<tr>
                    <td>$i</td>
                    <td>$row[title]</td>
                    <td>₱$row[price]</td>
                    <td>
                        <img src='../image/package/$row[image_name]' width='120'>
                    </td>
                    <td>$row[featured]</td>
                    <td>$row[active]</td>
                    <td>
                        <a href='updatePackage.php?id=$row[id]' class='btn'>Update</a>
                        <a onclick='deletePackage($row[id])' class='btn'>Delete</a>
                    </td>
    
                </tr>";
                }
            ?>

            
        </table>
    </div>
</div>