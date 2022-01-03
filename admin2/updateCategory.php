<?php 
include('connection.php');
include('partials/menu.php');
?>
<img src="">
<div class="content">
    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sqlretrieve = "SELECT * FROM tbl_category WHERE id=$id";

            $res = mysqli_query($con, $sqlretrieve);

            $row = mysqli_fetch_array($res);
            $title = $row['title'];
            $image = $row['img_name'];
            $featured = $row['featured'];
            $active = $row['active'];

        }
        else {
            ;
        }
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Title</td>
                <td>
                    <input type="text" name="title" value="<?php echo $title; ?>">
                </td>
            </tr>
            <tr>
                <td>Featured</td>
                <td>
                    <input <?php if($featured=="Yes"){ echo "checked";} ?> type="radio" name="featured" value="Yes"> Yes
                    <input <?php if($featured=="No"){ echo "checked";} ?> type="radio" name="featured" value="No"> No
                </td>
            </tr>
            <tr>
                <td>Active</td>
                <td>
                    <input <?php if($active=="Yes"){ echo "checked";} ?> type="radio" name="active" value="Yes"> Yes
                    <input <?php if($active=="No"){ echo "checked";} ?> type="radio" name="active" value="No"> No
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input class="btn" type="submit" name="submit" value="update">
                </td>
            </tr>
        </table>
    </form>
    <?php  
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $featured = $_POST['featured'];
            $active = $_POST['active'];

            $updatesql = "UPDATE tbl_category SET title='$title', featured='$featured', active='$active' WHERE id='$id'";
            mysqli_query($con, $updatesql);
            mysqli_close($con);

            header("location: http://localhost/HCI/admin2/");

            $_SESSION['category-update'] = "<div class='success'>Update Complete</div>";
        }
        
    ?>
</div>

