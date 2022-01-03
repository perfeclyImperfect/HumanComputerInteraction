<?php
    include("connection.php");
    include('includes.php');

    $ids = $_GET['a'];
    $name = $_GET['b'];
    $user = $_GET['c'];
    $pass = $_GET['d'];

    $updatesql = "UPDATE tbl_admin SET name='$name', username='$user', password='$pass' WHERE id='$ids'";
    mysqli_query($con, $updatesql);
    mysqli_close($con);

    include("manage-admin.php");

?>