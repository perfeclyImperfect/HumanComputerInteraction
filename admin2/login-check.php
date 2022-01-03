<?php
    include('connection.php');
    include('includes.php');

    $user = $_GET['a'];
    $pass = $_GET['b'];

    $check = "SELECT * FROM tbl_admin WHERE username='$user' AND password='$pass'";

    $res = mysqli_query($con, $check);

        $count = mysqli_num_rows($res);

        if($count == 1){
            $_SESSION['login'] = "<div class='success text-center'>Login Successful.</div>";
            $_SESSION['user'] = $user;
            header("location:".SITEURL.'admin2/index.php');
        }
        else{
            $_SESSION['login'] = "<div class='failed text-center'>Login Failed.</div>";
            header("location:".SITEURL.'admin2/login.php');
        }




?>