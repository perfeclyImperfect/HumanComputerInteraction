<?php
    include('connection.php');


    session_destroy();
    header("location:".SITEURL."admin2/login.php");

?>