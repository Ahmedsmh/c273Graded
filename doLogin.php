

<?php
include("dbFunctions.php");
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE name='$username' AND password='$password'";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    
    $msg = "";
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['name'];
        $msg = "<b>You have successfully logged in.<b><br>";
        $msg .= "<a href='YishunHosp.php'>Return to main menu</a>";
    } else {
        $msg = "You have entered a wrong password.";
        $msg .= "<a href='login.php'>Login again</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <img src="images/yishun-community-hospital-logo.jpg" alt="" height="70" width="120"/>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="YishunHosp.php"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exercise.php">Exercise</a>
                    </li>

                    <li class="nav-item dropdown active">
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
        <div class="card" style="width: 300px;height: 200px;margin: 0 auto; margin-top: 100px; padding: 10px; text-align: center;">
            Login
            <hr style="background-color: black;">
            <?php
            echo $msg;
            ?>
        </div>
    </body>
</html>

