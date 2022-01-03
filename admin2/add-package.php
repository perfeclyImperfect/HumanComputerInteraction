<?php
include('connection.php');
include('partials/menu.php');
?>

<div class="content">
    <div class="page-title">
        <h2>Add Package</h2>
        <?php
            if(isset($_SESSION['add-package'])){
                echo $_SESSION['add-package'];
                unset($_SESSION['add-package']);
            }
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name="title" placeholder="Enter Title">
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea name="description" id="" cols="30" rows="5" placeholder="Description..."></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price" value="0">
                    </td>
                </tr>
                <tr>
                    <td>Select Image</td>
                    <td>
                        <input type="file" name="file">
                    </td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="category" id="">
                            <?php
                            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
                            $res = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_array($res)){
                                $id = $row['id'];
                                $title = $row['title'];
                                
                                echo "<option value='$id'>$title</option>";
                                
                            }
                            ?>
                        </select>   
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
                        <input class="btn" type="submit" name="submit" value="Add">
                    </td>
                </tr>
            </table>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $category = $_POST['category'];

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
                    $image_name = $_FILES['file']['name'];

                    if($image_name != ""){
                        $tmp = explode('.', $image_name);
                        $ext = end($tmp);

                        $image_name = "parcao-package-".rand(0000,9999).".".$ext;

                        $src = $_FILES['file']['tmp_name'];
                        $dst = "../image/package/".$image_name;

                        $upload = move_uploaded_file($src, $dst);
                    }
                }
                else {
                    $image_name = "";
                }

                $insertsql = "INSERT INTO tbl_package(title,description,price,image_name,category_id,featured,active) VALUES('$title','$description','$price','$image_name','$category','$featured','$active')";
                mysqli_query($con, $insertsql);
                mysqli_close($con);


                $_SESSION['add-package'] = "<div>Package added successfully</div>";

            }



        ?>
    </div>
</div>

