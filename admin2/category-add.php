
<?php
include('connection.php');
include('partials/menu.php');
?>

<div class="content">
    <div class="page-title">
        <h2>Add Category</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" placeholder="Enter Title">
                    </td>
                </tr>
                <tr>
                    <td>Upload Image</td>
                    <td>
                        <input type="file" name="file">
                    </td>
                </tr>
                <tr>
                    <td>Featured</td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td>Active</td>
                    <td>
                        <input type="radio" name="active" value="Yes"> Yes
                        <input type="radio" name="active" value="No"> No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit">
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $title = $_POST['title'];

                if(isset($_POST['featured'])){
                    $featured = $_POST['featured'];
                }
                else{
                    $featured = "No";
                }

                if(isset($_POST['active'])){
                    $active = $_POST['active'];
                }
                else{
                    $active = "No";
                }

                if(isset($_FILES['file']['name'])){
                    $image_name= $_FILES['file']['name'];
                    $ext = end(explode('.', $image_name));
                    $image_name = "parcao_".rand(000,999).'.'.$ext;

                    $source_path = $_FILES['file']['tmp_name'];
                    $destination_path = "../image/category/".$image_name;

                    $upload = move_uploaded_file($source_path, $destination_path);
                }
                else {
                    $image_name = "";
                }



                $insertsql = "INSERT INTO tbl_category(title,img_name,featured,active) VALUES('$title','$image_name','$featured','$active')";
                mysqli_query($con, $insertsql);
                mysqli_close($con);

                header("location: http://localhost/HCI/admin2/");

                $_SESSION['category-add'] = "<div class='success'>Added Successfully</div>";
            }
        ?>
    </div>
</div>