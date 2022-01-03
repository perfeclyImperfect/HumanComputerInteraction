<?php
include('connection.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                    <h2>Admin Login</h2>

                    <?php
                        if(isset($_SESSION['login'])){
                            echo $_SESSION['login'];
                            unset($_SESSION['login']);
                        }

                        if(isset($_SESSION['failed-login'])){
                            echo $_SESSION['failed-login'];
                            unset($_SESSION['failed-login']);
                        }
                    ?>
                  <br>
                    <form method="post">
                        <input type="text" name="login_user" class="input-box" placeholder="Username" required>
                        <input type="password" name="login_pass" class="input-box" placeholder="Password" required>
                        <input type="submit" class="btn" name="submit" value="Login">
                    </form>
                    <p style="font-size: 12px;">Can't sign in? <a href="../about.php">Contact Administrator</a></p>
                </div>
                <div class="card-back"></div>
            </div>
        </div>
    </div>
</body>
</html>

<?php   

    if(isset($_POST['submit'])){
        $user = $_POST['login_user'];
        $password = $_POST['login_pass'];

        $sql = "SELECT * FROM tbl_admin WHERE username='$user' AND password='$password'";

        $res = mysqli_query($con, $sql);

        

        $count = mysqli_num_rows($res);
        if($count == 1){
            while($row = mysqli_fetch_array($res)){
                $_SESSION['dashName'] = $row[name];
            }
            $_SESSION['user'] = $user;
            header("location:".SITEURL.'admin2/');
        }
        else{
            $_SESSION['login'] = "<div class='failed text-center'>Username or Password is incorrect.</div>";
            header("location:".SITEURL.'admin2/login.php');
        }

    };

?>