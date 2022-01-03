<?php
    include("connection.php");
    $id = $_GET['a'];
    $deletesql = "DELETE from tbl_admin where id = '$id'";
    mysqli_query($con,$deletesql);
    mysqli_close($con);

    include("manage-admin.php");

?>