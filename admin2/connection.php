<?php 
    
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if(!defined('SITEURL')) define('SITEURL','http://localhost/HCI/');
    if(!defined('DBNAME')) define('DBNAME','hci');

    $con = mysqli_connect('localhost','root','') or die(mysqli_error());
    $db_select = mysqli_select_db($con, DBNAME) or die(mysqli_error());

?>