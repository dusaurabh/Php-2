<?php require_once('Include/DB.php'); ?>
<?php require_once('Include/Functions.php'); ?>
<?php require_once('Include/Sessions.php'); ?>
<?php Confirm_Login(); ?>


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
        .col-sm-2{
    background-color:#FFA07A;
}
        #Side_Menu a.active{
    color:#ffffff;
    background-color: #27AAE1;
    font-weight: bold;
}
        #Side_Menu a{
              color: black;
            background-color: #27AAE1;
            font-weight: bold;
        }
        
        #Side_Menu a:hover{
    color: #ffffff;
    background-color: #1ab394;
    font-weight: bold;
    display: block;
    
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
      <li><a class="nav-link" href="index.php"><i class="fa fa-home "></i> Home </a></li>
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
            Want to Logout   <i class="fa fa-hand-o-down"> </i>
               
          </div>
          <div class="card-footer">
              <span id="admin"><i class="fa fa-sign-out"></i></span>
          <button class="btn btn-outline-warning"><a href="logout.php"> Logout </a></button>
          </div>
             
          
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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">
            <ul id="Side_Menu" class="nav nav-tabs nav-stacked ">
<li><a class="nav-link" href="questions.php"><i class="fa fa-th "></i> &nbsp;Add Question Papers</a><br></li>
<li><a class="nav-link" href="study_materials.php"><i class="fa fa-list-alt"></i> &nbsp;Add Study Resources</a><br></li>
<li><a class="nav-link" href="Time_table.php"><i class="fa fa-tags"></i> &nbsp;Add Exam Time Table</a><br> </li>
<li><a class="nav-link" href="commentsection.php"><i class="fa fa-comment"></i> &nbsp;Comments</a></li>
                
            </ul>
        </div>
        
        <div class="col-sm-10">
          <div class="table-responsive">
           <table class="table table-striped table-hover">
            <tr>
             <th>No.</th>
             <th>Name</th>
             <th>DateTime</th>
             <th>Email_By</th>
             <th>Comment</th>
             <th>DeleteComment</th>
             <th>Approve</th>
            </tr>
               
               
            <tr>
             <?php 
                global $con;
                $SrNo = 0;
                $Query = "SELECT * FROM comments WHERE status='OFF' ORDER BY id desc";
                $Execute = mysqli_query($con,$Query);
                 while($DataRows = mysqli_fetch_array($Execute)){
                     $Id = $DataRows['id'];
                     $DateTime = $DataRows['datetime'];
                     $Name = $DataRows['name'];
                     $Email = $DataRows['email'];
                     $Comment = $DataRows['comment'];
                     $SrNo++;
                 
                ?>
                  
            </tr>
               
            <tr>
               <td><?php echo htmlentities($SrNo); ?></td> 
               <td><?php echo htmlentities($Name); ?></td>
               <td><?php echo htmlentities($DateTime); ?></td>
               <td><?php echo htmlentities($Email); ?></td>
               <td><?php echo htmlentities($Comment); ?></td>
               <td><a href="deletecomments.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a></td> 
               <td><a href="approve_comments.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Approve</span></a></td>
                
            </tr>
               <?php  } ?>
           </table>
          </div>
        </div>
        
    </div>
</div>
    


    
      
        
    
    
    
    
    
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
