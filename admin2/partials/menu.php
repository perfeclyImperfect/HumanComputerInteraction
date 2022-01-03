<?php
    include("connection.php");
    include("partials/check.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2e3a8b2bf6.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@1,500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/admin.css">

    <title>Admin Panel</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><a href="index.php"><span>Parcao</span>Travels</a></h1>
        </div>
        <i class="fas fa-bars menu-toggle"></i>
        <div>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <?php 
                        if(isset($_SESSION['dashName'])){
                            echo $_SESSION['dashName'];
                        }
                        ?>
                        <i class="fas fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="logout.php" class="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

     <!-- main content starts here -->
 <div class="page-wrapper">
    <div class="left-sidebar">
        <ul>
            <li><a onclick="test2()">Manage Admin</a></li>
            <li><a onclick="test3()">Manage Category</a></li>
            <li><a onclick="test4()">Manage Package</a></li>
            <li><a onclick="test()">Customer List</a></li>
        </ul>
    </div>