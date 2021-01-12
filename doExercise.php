<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
include("dbFunctions.php");

$msg = "";
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $type = $_POST['exercises'];
    $duration = $_POST['duration'];
    $queryCheck = "SELECT * FROM user WHERE name='$username'";
    $resultCheck = mysqli_query($link, $queryCheck) or die(mysqli_error($link));
    if (mysqli_num_rows($resultCheck) > 0) {
        $queryInsert = "INSERT INTO entry 
                        (name, type, duration)
                        VALUES ('$username','$type' ,$duration)";
        $resultInsert = mysqli_query($link, $queryInsert) or die(mysqli_error($link));
        $msg = "<a>You have successfully added a entry.</a>";
        $msg .= "<br/> You may now <a href='exercise.php'>return</a>";
    }
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <img src="images/yishun-community-hospital-logo.jpg" alt="" height="70" width="120"/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="YishunHosp.php"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exercise.php">Exercise</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">
                            Account
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="login.php">Login</a>
                            <a class="dropdown-item" href="signup.php">Sign Up</a>   
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        echo $msg
        ?>
    </body>
</html>
