<?php  
    include('connection.php');
    
    $name = $_GET['a'];
    $user = $_GET['b'];
    $password = $_GET['c'];
    
    
    $insertsql = "INSERT INTO tbl_admin(name,username,password) VALUES('$name','$user','$password')";
    mysqli_query($con, $insertsql);
    mysqli_close($con);

    include('manage-admin.php');
    
?>

        