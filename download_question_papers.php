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
        #admin .fa{
            font-size: 30px;
            color: red;
        }
       hr {
  border-color: red;
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
      <li><a class="nav-link" href="about.php" >About Us</a></li>
     
      <li><a class="nav-link" href="comments.php" ><i class="fa fa-pencil "></i> Comments</a></li>
       <div class="dropdown" style="margin-right:20px;">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Download Section
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="download_question_papers.php">Download Question Papers</a>
    <a class="dropdown-item" href="#">Download Study Materials</a>
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
    
 
    <h4 class="text-center" style="color:red;"> Select Branch  </h4>
  <div class="table-responsive">
      <table class="table table-striped table-hover">
          
    <td><button  class="btn btn-info" onclick="window.location.href='IT.php'">Information Technology</button></td>
    <td><button  class="btn btn-info" onclick="window.location.href='CS.php'">Computer Science</button></td>
    <td><button  class="btn btn-info" onclick="window.location.href='EXTC.php'">Electronics and Telecommunication</button></td>
    <td><button  class="btn btn-info" onclick="window.location.href='Civil.php'">Civil</button></td>
    <td><button  class="btn btn-info" onclick="window.location.href='Mech.php'">Mechanical</button></td>
      </table>
    </div>
   
        
    
    
    
    
   
  
    
   
   
   
   
    
    
    
    
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
