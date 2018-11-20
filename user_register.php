<?php require('Include/DB.php'); ?>
<?php require('Include/Sessions.php'); ?>
<?php require('Include/user_login_handler/register_handler.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Social NetWork</title>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/register_style.css">


    <style>
        body{
            margin: 0;
            padding: 0;

        }
        .wrapper{

            background-size: 100%;
            width:100%;
            height:100%;

        }
        input[type="text"]:hover,input[type="email"]:hover,input[type="password"]:hover{
            border-color: #3498db;
        }
        h4{
            color:#3CB371;
        }

    </style>

</head>
<body>
<div style="height:10px; background:#D20A0A;"></div>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark " role="navigation">

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>

    <div class="navbar-header">
        <a class="navbar-brand" href="#"><h3>Study Hacks</h3></a>
    </div>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
            <li><a class="nav-link  " href="home.php"><i class="fa fa-home "></i> Home </a></li>
            <li><a class="nav-link" href="about.php" >About Us</a></li>

            <li><a class="nav-link" href="comments.php" ><i class="fa fa-pencil "></i> Comments</a></li>



            <div class="dropdown" style="margin-right:20px;">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Download Section
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="download_question_papers.php">Download Question Papers</a>
                    <a class="dropdown-item" href="download_study_materials.php">Download Study Materials</a>
                    <a class="dropdown-item" href="#">Download Time Table</a>
                </div>
            </div>

        </ul>


    </div>
    <div class="card" style="margin-right:10px;">
        <div class="card-body">
            Admin Login <i class="fa fa-hand-o-down"></i>




            <button class="btn btn-outline-warning"><a href="login.php"><span id="admin"><i class="fa fa-user" style="margin-right:20px;"></i></span> Click Here </a></button>

        </div>

    </div>

    <div class="card" style="margin-right:10px;">
        <div class="card-body">
            User Login <i class="fa fa-hand-o-down"></i>




            <button class="btn btn-outline-warning"><a href="user_register.php"><span id="admin"><i class="fa fa-user" style="margin-right:20px;"></i></span> Click Here </a></button>

        </div>

    </div>


</nav>
<div style="height:10px; background:#D20A0A;"></div>

<span class="text-center">
        <?php
        echo SuccessMessage();
        echo ErrorMessage();
        ?>
    </span>
<div class="wrapper">
    <div class="col-lg-4 m-auto pt-4">
        <div class="card text-center  card-form">

            <div class="card-header bg-warning">
                <h3 style="color:#0984e3;" >Sign Up</h3>
                <p style="color:white; opacity: 1.9;">Fill This Form to register</p>
            </div>
            <div class="card-body bg-danger">
                <form action="user_register.php" method="post">
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <input  type="text" class="form-control form-control-lg" placeholder="First Name" name="reg_fname" value="<?php
                        if(isset($_SESSION["reg_fname"])){
                            echo $_SESSION["reg_fname"];
                        }
                        ?>"
                                required>
                        <br>

                        <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "<h4> Your first name must be between 2 and 25 characters</h4><br>"; ?>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <input  type="text" class="form-control form-control-lg" placeholder="Last Name" name="reg_lname" value="<?php
                        if(isset($_SESSION["reg_lname"])){
                            echo $_SESSION["reg_lname"];
                        }
                        ?>"
                                required></div>

                    <?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "<h4>Your last name must be between 2 and 25 characters</h4><br>"; ?>

                    <div class="form-group input-group">
                        <input type="email" class="form-control form-control-lg" placeholder="Email" name="reg_email" value="<?php
                        if(isset($_SESSION["reg_email"])){
                            echo $_SESSION["reg_email"];
                        }
                        ?>" required>
                        <span class="input-group-addon">@something</span>
                    </div>



                    <div class="form-group input-group">
                        <input type="email" class="form-control form-control-lg" placeholder="Confirm Email" name="reg_email2" value="<?php
                        if(isset($_SESSION["reg_email2"])){
                            echo $_SESSION["reg_email2"];
                        }
                        ?>" required>
                        <span class="input-group-addon">@something</span>
                    </div>

                    <?php if(in_array("Email already in use<br>", $error_array)) echo "<h4>Email already in use</h4><br>";
                    else if(in_array("Invalid email format<br>", $error_array)) echo "<h4>Invalid email format</h4><br>";
                    else if(in_array("Emails don't match<br>", $error_array)) echo "<h4>Emails don't match</h4><br>"; ?>

                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" placeholder="Password" name="reg_password" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="reg_password2" required>
                    </div>

                    <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "<h4>Your passwords do not match</h4><br>";
                    else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "<h4>Your password can only contain english characters or numbers</h4><br>";
                    else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "<h4>Your password must be betwen 5 and 30 characters</h4><br>"; ?>
                    <br>
                    <input  type="submit" name="register_button" class="btn btn-success ">
                    <br>
                    <?php if(in_array("<span style='color: #FFFF00;'>You're all set! Goahead and login!</span><br>", $error_array)) echo "<span style='color: #FFFF00;'>You're all set! Goahead and login!</span><br>"; ?>
                    <br>
                    <div class="row">
                        <h5 class="text-info">Already Have an Account?</h5>&nbsp;
                        <a href="user_login.php"><span class="btn btn-warning" style="font-size:1em;">Sign in</span></a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
