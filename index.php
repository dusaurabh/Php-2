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
        <a class="navbar-brand" href="#"><h3>Study Hacks</h3></a>
    </div>
     <div class="collapse navbar-collapse" id="navbarCollapse">
     <ul class="navbar-nav">
      <li><a class="nav-link active bg-success" href="home.php"><i class="fa fa-home "></i> Home </a></li>
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
      
  </div>    
</nav>
<div style="height:10px; background:#D20A0A;"></div>
    
    
 
    
<img src="img/home_background_2.jpg" class="mt-3 img-thumbnail img-fluid" width="100%;">
 <br>
    <br>
    

    
    
  
        
        
   
        
         
        
  
   

        
        
  
      
     
 
      
     
   
    
    
   
  <script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key="e683878c-ea37-4af3-b7de-a4df4df2db6f" >
    
   

      {
 "messages": [
   {"text": "Welcome to the Chatfuel Rockets!"},
   {"text": "What are you up to?"}
 ]
}
      
    </script>
    
    
   
    
    
    
    
    
    
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
