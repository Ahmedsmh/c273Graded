<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Yishun Hospital</title>
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
            .vision, .mission {
                color: white;
            }

            .row {
                display: flex;
            }

            .column {
                flex: 33.33%;
                padding: 5px;
            }

            .center {
                text-align: center;
                border: 3px solid purple;
            }

            table, td {
                border: 1px solid black;
            }

            th {
                background-color: #FFFF00;
            }
            .carousel-inner{
                width: 100%;
                height: 1000px;

            }
        </style>
    </head>
    <body>
        <?php
        ?>
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
        <div class="container-fluid">
            <h1>Our Vision And Mission</h1>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 vision" style="background-color: #8741bb;">
                    <p> Our Vision:</p> Adding years of healthy life.
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 mission" style="background-color:#0069d9;">
                    <p>Our Mission:</p> Provide good quality, affordable and hassle-free healthcare with science, love and wisdom.
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h1>About YCH</h1>

                    Yishun Community Hospital is one of Singapore's largest community hospitals to provide rehabilitation services. Situated beside acute-care Khoo Teck Puat Hospital, the two hospitals are connected by sky link bridges and bring about an integrated care experience for patients, through connected network of healthcare teams, information flow and treatment plans.                                 
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <h1>Our Doctors</h1>
                    Our team of clinicians is committed to providing our patients a high level of care. Comprising rehabilitation, sub-acute (non-emergency), dementia and palliative care, our clinicians focuses on the best possible outcome for our patients.                
                </div> 
            </div>
        </div>

        <br>

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/yishun image3.jpg" alt="" style="width:100%; height:100%"/>
                </div>
                <div class="carousel-item">
                    <img src="images/yishun imag2.jpg" alt="" style="width: 100%; height: 100%"/>

                </div>
                <div class="carousel-item">
                    <img src="images/yishun image1.jpg" alt="" style="width: 100%; height: 100%"/>
                    
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="center">
            <h1>Contact Us</h1>
            <p>Address: Yishun Community Hospital 2 Yishun Central 2, Singapore 768024</p>
            <p>Telephone: +65 6807 8800</p>
            <p>General Enquiry: enquiry@yishunhospital.com.sg</p>
            <p>Billing Enquiry: payment@1fss.com.sg or 6407 8128</p>
            <p>Media Queries and Information: media@yishunhospital.com.sg</p>
            <img src="images/map-direction-from-yishun.jpg" alt=""  style="width:40%"/>

            <br><br>
        </div>
    </body>
</html>
