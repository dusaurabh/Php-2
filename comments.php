<?php  require_once('Include/DB.php'); ?>
<?php  require_once('Include/Functions.php');  ?>
<?php  require_once('Include/Sessions.php'); ?>
<?php  
 if(isset($_POST["Submit"])){
     $Name = mysqli_real_escape_string($con,$_POST["Name"]);
     $Email = mysqli_real_escape_string($con,$_POST["Email"]);
     $Comment = mysqli_real_escape_string($con,$_POST["Comment"]);
     date_default_timezone_set('Asia/Kolkata');
     $currenttime = time();
     $DateTime = strftime("%B-%d-%Y %H:%M:%S", $currenttime);
     $DateTime;
     if(empty($Name) || empty($Email) || empty($Comment)){
         $_SESSION["ErrorMessage"] = 'All Fields Must Be Filled Out';
         Redirect_to("comments.php");
     }else{
         global $con;
         $Query = "INSERT INTO comments(datetime,name,email,comment,status)
         VALUES('$DateTime','$Name','$Email','$Comment','OFF')" ;
         $Execute = mysqli_query($con,$Query);
         if($Execute){
             $_SESSION["SuccessMessage"] = "Comment is SuccessFully Send";
             Redirect_to("comments.php");
         }else{
             $_SESSION["ErrorMessage"] = "Comment is not Added,Please Try Again";
             Redirect_to("comments.php");
         }
     }
 }
 

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Study Hacks</title>
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

    <style>
     
        .FieldInfo{
            color: rgb(251, 174, 44);
            
            font-size: 2em;
        }
        
        navbar-brand{
            color: firebrick;
        }
       
        
    </style>
    
    
    
</head>
<body>
  
    
     <div style="height:10px; background:#D20A0A;"></div>
 <nav class="navbar navbar-expand-lg bg-dark navbar-dark " role="navigation">
  <div class="container">
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button>
      
    <div class="navbar-header">
                   <a class="navbar-brand " href="#"><h3>Study Hacks</h3></a>
    </div>
     <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav">
      <li><a class="nav-link " href="home.php"><i class="fa fa-home "></i> Home </a></li>
      <li><a class="nav-link" href="about.php" >About Us</a></li>
     
      <li><a class="nav-link active bg-success" href="comments.php" ><i class="fa fa-pencil "></i> Comments</a></li>&nbsp;
      
      
         
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
         
         <div class="card">
          <div class="card-body">
            Admin Login <i class="fa fa-hand-o-down"></i>
               
          
          
              
          <button class="btn btn-outline-warning"><a href="login.php"><span id="admin"><i class="fa fa-user"></i></span> Click Here </a></button>
          
            </div> 
          
      </div>
         
  </div>    
</nav>
<div style="height:10px; background:#D20A0A;"></div>
   <span class="text-center"> <?php 
    echo SuccessMessage();
    echo ErrorMessage();
    ?>
    </span>
    
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 m-auto">
     <div class="card">
        <div class="card-header bg-primary text-warning" style="font-size:1.5em;">Share Your Thoughts With Us</div>
  <div class="card-body bg-danger">
 <form action="comments.php" method="post">
  <div class="form-group">
   <label for="Name"><span class="FieldInfo">Name:</span></label>
<div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-user text-primary"></i></span>
 <input class="form-control form-control-lg" type="text" name="Name" id="Name" placeholder="Name">
</div> 
  </div>
        
  <div class="form-group ">
   <label for="Email"><span class="FieldInfo">Email:</span></label>
<div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-envelope-o text-primary"></i></span>
    
<input class="form-control form-control-lg" type="email" name="Email" id="Email" placeholder="@">
</div>
  </div>  
        
    <div class="form-group">
     <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
         <textarea name="Comment" placeholder="Comment" class="form-control" rows="4"></textarea>
     </div>
    </div>
        
     
        
      
        <input  class="btn btn-success btn-block" type="submit" name="Submit" value="Add Comment">
    </form>
   </div>
        </div>
        </div>
        
    </div>
</div>

    
      
        
    
    
    
    
    
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
