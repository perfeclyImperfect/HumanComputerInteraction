<?php
    include("connection.php");
    $id = $_GET['a'];
    $deletesql = "DELETE from tbl_category where id = '$id'";
    mysqli_query($con,$deletesql);
    mysqli_close($con);

    include("manage-category.php");

?>