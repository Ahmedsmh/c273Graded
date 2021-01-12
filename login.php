<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
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
        <style>
            input[type=submit] {
                width: 30%;
            }
            .form-control {
                width: 30%;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
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
        <div class="container">
            <h3>Login</h3>
            <form id="form" method="post" action="doLogin.php" class="form-horizontal">
                <div class="form-group">
                    <label for="idEmail">Email<span style="color:red">*</span>:</label>
                    <input type="text" name="email" id="idEmail" class="form-control" required/>
                </div>

                <div class="form-group">
                    <label for="idPwd">Password<span style="color:red">*</span>:</label>             
                    <input type="password" name="pwd" id="idPwd" class="form-control" placeholder="6-8 characters" required/>
                </div>
                <input class="btn btn-block btn-primary" type="submit" value="Submit"/>
            </form>
            
            <br>
            <form method="post" action="signup.php">
                <div class="container">
                    <input type="submit" value="Create account" class="btn btn-success"/>
                </div>
            </form>
        </div>
    </body>
</html>
