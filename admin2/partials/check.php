<?php 
    if(!isset($_SESSION['user'])){
        $_SESSION['failed-login'] = "<div class='failed text-center'>Login to access Admin Panel</div>";
        header("location:".SITEURL.'admin2/login.php');
    }
?>