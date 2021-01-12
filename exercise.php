<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Exercise</title>
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
        <script>
            $(document).ready(function () {

               $("#slider").slider({
                    value: 0,
                    min: 0,
                    max: 20,
                    step: 1,
                    slide: function (event, ui) {
                        $("#num").val(ui.value);
                    }
                });
                $("#num").val($("#slider").slider("value"));
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
                    <li class="nav-item active">
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
        <form action="doExercise.php" method="post">
            <div class="container">
                <h1 class="display-4">Please fill up the form</h1>

                <hr>

                <label for="type">Type of Exercise:</label>
                <select name="type" id="type">
                    <option value="Walk">Walk</option>
                    <option value="Run">Run</option>
                    <option value="Cycle">Cycle</option>
                </select>

                <br><br>

                <div class="form-group">
                    <label for="num">Duration(Minutes):</label>
                    <input id="num" type="text" class="form-control" name="duration">
                    <div id="slider"></div>
                </div>

                <br>

                <div>          
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </body>
</html>
