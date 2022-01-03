<?php
include('connection.php');
include('includes.php');

$retrieve_list = "SELECT * FROM tbl_category";
$res = $con->query($retrieve_list);

?>

<div class="content">
    <h2 class="page-title">Category Manager</h2>
    <div class="text-center"><a class="btn" href="category-add.php">Add Category</a></button></div><br>
    <div>
        <table>
            <thead>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php
                $i = 0;
                while($row = mysqli_fetch_array($res)){
                    $i++;
                    echo "<tr>
                            <td>$i</td>
                            <td>$row[title]</td>
                            <td>
                                <img src='../image/category/$row[img_name]' width='120'>
                            </td>
                            
                            <td>$row[featured]</td>
                            <td>$row[active]</td>
                            <td>
                                <a class='btn' href='updateCategory.php?id=$row[id]'>Update</a>
                                <a class='btn' onclick='deleteCategory($row[id])'>Delete</a>
                            </td>
                        </tr>";
                }
            ?>
                
            </tbody>
        </table>
    </div>
</div>