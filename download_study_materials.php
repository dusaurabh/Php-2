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
</nav>
<div style="height:10px; background:#D20A0A;"></div>
    
 
   
    
    
   <div class="container-fluid">
       <div class="row pt-2">
	    <?php  
                     global $con;
                     $Query = "SELECT * FROM study_materials ORDER BY id";
                     $Execute = mysqli_query($con,$Query);
                     while($DataRows = mysqli_fetch_array($Execute)){
                         $ID = $DataRows['id'];
                         $Branch = $DataRows['branch'];
                         $Subject = $DataRows['subject'];
                         $Des = $DataRows['des'];
                         $PDF = $DataRows['pdf'];
                     
                     
                     ?>
         <div class="col-md-3 pt-2">
             
            
             
           
                 <div class="card">
                 
                  
                 
                 <div class="card-header bg-danger text-warning" style="font-family: Arial, Helvetica, sans-serif;font-size:1.5em;">
                    
                     
                     <p><?php echo htmlentities($Subject); ?></p>
                     
                     
                 </div>
                 
                 <div class="card-body">
                     <p><?php echo htmlentities($Des); ?></p>
                 </div>
                 
                 <div class="card-footer">
                     <a  href="view_study_materials.php?id=<?php echo $ID; ?>"><span class="btn btn-primary">Download</span></a>
                 </div>
                
            
             </div>
         </div>
           <?php  } ?>
       </div>
       </div>
   
   
        
    
    
    
    
   
  
    
   
   
   
   
    
    
    
    
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
