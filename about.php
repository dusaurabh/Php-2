<?php require_once('Include/DB.php'); ?>
<?php require_once('Include/Functions.php'); ?>
<?php require_once('Include/Sessions.php'); ?>
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
        #heading1{
            cursor: grab;
        }
        #heading2{
            cursor: pointer;
        }
        
        
      
.comment-list .row {
margin-bottom: 0px;
}
.comment-list .panel .panel-heading {
 padding: 4px 15px;
 position: absolute;
 border:none;

border-top-right-radius:0px;
top: 1px;
}
.comment-list .panel .panel-heading.right {
border-right-width: 0px;

border-top-left-radius:0px;
right: 16px;
}
.comment-list .panel .panel-heading .panel-body {
padding-top: 6px;
}
.comment-list figcaption {

word-wrap: break-word;
}

@media (min-width: 768px) {
.comment-list .arrow:after, .comment-list .arrow:before {
content: "";
position: absolute;
width: 0;
height: 0;
border-style: solid;
border-color: transparent;
}
.comment-list .panel.arrow.left:after, .comment-list .panel.arrow.left:befor {
border-left: 0;
}

.comment-list .panel.arrow.left:before {
left: 0px;
top: 30px;

border-right-color: inherit;
border-width: 16px;
}

.comment-list .panel.arrow.left:after {
left: 1px;
top: 31px;

border-right-color: #FFFFFF;
border-width: 15px;
}

.comment-list .panel.arrow.right:before {
right: -16px;
top: 30px;

border-left-color: inherit;
border-width: 16px;
}

.comment-list .panel.arrow.right:after {
right: -14px;
top: 31px;

border-left-color: #FFFFFF;
border-width: 15px;
}
}
.comment-list .comment-post {
margin-top: 6px;
}
        
              hr {
  border-color: violet;
           border-bottom: 2px solid red;
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
      <li><a class="nav-link " href="index.php"><i class="fa fa-home "></i> Home </a></li>
      <li><a class="nav-link active bg-success" href="about.php" >About Us</a></li>
     
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
  </div> 
  
  <div class="card">
          <div class="card-body">
            Admin Login <i class="fa fa-hand-o-down"></i>
               
          
          
              
          <button class="btn btn-outline-warning"><a href="login.php"><span id="admin"><i class="fa fa-user"></i></span> Click Here </a></button>
          
            </div> 
          
      </div>
  
</nav>
<div style="height:10px; background:#D20A0A;"></div>
    
<div class="container py-5 bg-light text-center">
    <div class="row">
        <div class="col">
            <div class="mb-5">
                <h1 class="text-primary pb-3">Why This Website is Unique?</h1>
                <p class="lead">We provide Study Materials,previous year question papers,Sysllabus of Universites and more for Free </p>
            </div>
        </div>
    </div>
    
<div id="about" role="textbox">
  <div class="card">
    <div class="card-header" id="heading1">
     <h5 class="mb-0">
      <div href="#collapse1" data-toggle="collapse" data-parent="#about">
       <i class="fa fa-arrow-circle-down"></i> Get Knowledge
      </div>
     </h5>
    </div>
      
      <div id="collapse1" class="collapse ">
          <div class="card-body">
              <p>Gain Knowledge by reading various Engineering Books of IT/CS Streams such as JAVA,C/C++ and more...</p>
          </div>
      </div>
      
  </div>
    
  <div class="card">
      <div class="card-header" id="heading2">
          <h5 class="mb-0">
              <div href="#collapse2" data-toggle="collapse" data-parent="about">
                  <i class="fa fa-arrow-circle-down"></i> Do Practice
              </div>
          </h5>
      </div>
      
      <div id="collapse2" class="collapse">
          <div class="card-body">
              <p>Do practice by Solving various previous year Engineering University Question Papers
              </p>
          </div>
      </div>
  </div>
    
</div>
    
</div>
<br>
    <br>
    <br>
    
        <span class="FieldInfo">Comments About This Site</span>
    <br>
    <br>
<?php 
global $con;
$Query = "SELECT * FROM comments WHERE status='ON'";
$Execute = mysqli_query($con,$Query);
    
while($DataRows  =mysqli_fetch_array($Execute)){
    $SrNo = 0;
    $CommentDate=$DataRows["datetime"];
    $CommenterName=$DataRows["name"];
    $CommentByUser=$DataRows["comment"];

?>

    
    
    <div class="container">
 <div class="row">
  <div class="col-md-8">
    
    <section class="comment-list">
      <!-- First Comment -->
      <div class="row">
        <div class="col-md-2 col-sm-2 hidden-xs">
          <figure class="thumbnail">
            <img class="img-fluid" src="img/user.png" />
            
          </figure>
        </div>
        <div class="col-md-10 col-sm-10">
          <div class="panel panel-default ">
            <div class="panel-body">
              <header class="text-left">
                <div class="comment-user"><i class="fa fa-user"></i> <?php echo htmlentities($CommenterName); ?></div>
                <time class="comment-date" ><i class="fa fa-clock-o"></i> <?php echo htmlentities( $CommentDate); ?></time>
              </header>
              <div class="comment-post">
                <p>
                  <?php echo htmlentities($CommentByUser); ?>
                </p>
                  
              </div>
              
            </div>
          </div>
            
        </div>
          
      </div>
        <hr>
   </section>
</div>
   
<?php } ?>
    
      
        
    
    
    
    
    
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
