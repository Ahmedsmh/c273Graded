<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <script>
            $(document).ready(function () {
                $("#defaultForm").validate({
                    rules: {
                        username: {
                            required: true
                        },
                        password: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{8,}$/
                        },
                        height: {
                            required: true,
                                
                                pattern: /^\d*\.\d{2}$/
                            },
                            weight: {
                                required: true,
                                minlength: 2,
                                pattern: /^[0-9]{1,3}$/
                            },
                            birthday: {
                                required: true
                            }
                        },
                        messages: {
                            username: {
                                required: "Please enter a username"
                            },
                            password: {
                                required: "Please enter a password",
                                pattern: "Password must contain at least one lowercase, one uppercase letters, a number and minimum of 8 characters"
                            },
                            height: {
                                required: "Please enter your height",
                                
                                pattern: "Height must include 2 decimal places (Eg. 1.65)"
                            },
                            weight: {
                                required: "Please enter your weight",
                                minlenght: "Weight an only be less than 4 digits",
                                pattern: "Weight can only be less than 4 digits"
                            },
                            birthday: {
                                required: "Enter your birthdate"
                            }
                        },
                        submitHandler: function () {
                            return true;
                        }
                    });
                });
        </script>
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
        <h1 style="text-align: center;">Register for an account</h1>
        <div class="container">
            <form id="defaultForm" method="post" action="doSignUp.php">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" placeholder="Username" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" id="pass" name="password" placeholder="password" class="form-control">

                </div>
                <div id="message" style="display: none;">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid"><b>Lowercase</b> letters</p>
                    <p id="capital" class="invalid"><b>uppercase</b> letter</p>
                    <p id="number" class="invalid">At least an <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                <div class="form-group">
                    <label>Weight(in kg):</label>
                    <input type="text" name="weight" placeholder="Weight" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Height(in m):</label>
                    <input type="text" name="height" placeholder="Height" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input id="date" type="date" name="birthday" class="form-control" >
                </div>
                <div class="form-group">
                    <label id="level">Active level:</label><br>
                    <label class="block" id="sedentary"><input type="radio" name="activetype" value="sedentary" checked>Sedentary</label><br>
                    <label class="block" id="moderate"><input type="radio" name="activetype" value="moderate">Moderate</label><br>
                    <label class="block" id="active"><input type="radio" name="activetype" value="active">Active</label><br>
                </div>
                <input type="submit" class="btn btn-primary" value="Sign up"/>
            </form>
        </div>
    </body>
</html>
