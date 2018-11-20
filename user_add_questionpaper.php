<?php
require 'Include/DB.php';
require 'Include/Sessions.php';
require 'Include/Functions.php';
require 'Include/user_login_handler/user_questionpaper.php';
if(isset($_SESSION["user_name"])){
    $user_name = $_SESSION["user_name"];
    $user_details_query = mysqli_query($con,"SELECT * FROM users WHERE username='$user_name'");
    $user = mysqli_fetch_array($user_details_query);
}else{
    header("Location: user_login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Study Hacks</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.php" class="navbar-brand">Study Hacks</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>Welcome <?php echo $user_name; ?>
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="Include/handlers/logout.php" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="user_add_questionpaper.php" class="btn btn-primary btn-block " >
            <i class="fa fa-plus"></i> Add Question Paper
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" >
            <i class="fa fa-plus"></i> Add Study Materials
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-warning btn-block">
            <i class="fa fa-plus"></i> Add Time Table
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-warning btn-block" >
            <i class="fa fa-plus"></i> Add User
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card bg-secondary">
            <div class="card-header">
              <h4>Add Question Paper</h4>
            </div>
            <form action="user_add_questionpaper.php" method="post" enctype="multipart/form-data">
              <div class="form-group ">
                <label for="Branch"><span class="FieldInfo">Branch:</span></label>
                <select class="form-control form-control-lg"  name="Branch" id="Branch" required>
                  <option>#</option>
                  <option>Information Technology</option>
                  <option>Computer Science</option>
                  <option>Electronics and TeleCommunicatio</option>
                  <option>Mechanical</option>
                  <option>Civil</option>
                </select>
              </div>

              <div class="form-group ">
                <label for="Year"><span class="FieldInfo">Year:</span></label>
                <input class="form-control form-control-lg" type="tel" name="Year" id="Year" placeholder="Year" maxlength="4" required>
              </div>

              <div class="form-group ">
                <label for="Subject"><span class="FieldInfo">Subject:</span></label>
                <select class="form-control form-control-lg"  name="Subject" id="Subject" placeholder="Subject" required>
                  <option>Internet Programming</option>
                  <option>Data Structure and Algorithms</option>
                  <option>Microcontroller and Embedded Systems</option>
                  <option>DBMS</option>
                  <option>Advanced DataBase Management Technique</option>
                  <option>Maths</option>
                  <option>Operating Systems</option>
                  <option>CGVR</option>
                  <option>Cryptography and Network Security</option>
                  <option>Automata Theory</option>
                  <option>Software Project Management</option>
                </select>
              </div>

              <div class="form-group ">
                <label for="Sem"><span class="FieldInfo">Sem:</span></label>
                <input class="form-control form-control-lg" type="tel" name="Sem" id="Sem" placeholder="Sem" maxlength="1" required >
              </div>

              <div class="form-group ">
                <label for="PDFSelect"><span class="FieldInfo">PDF:</span></label>
                <input class="form-control form-control-lg" type="file" name="PDF" id="PDFSelect" placeholder="Upload Question Paper" required>
              </div>
                <input  class="btn btn-success " type="submit" name="add_questionpaper" value="Add New Question Paper">
                  <?php if(in_array("<span style='color: #FFFF00;'>Question Paper is added SuccessFully</span><br>", $error_array)) echo "<span style='color: #FFFF00;'>Question Paper is added SuccessFully</span><br>"; ?>
            </form>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Posts</h3>
              <h1 class="display-4">
                <i class="fa fa-pencil"></i> 6
              </h1>
              <a href="posts.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h1 class="display-4">
                <i class="fa fa-folder-open-o"></i> 4
              </h1>
              <a href="categories.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h1 class="display-4">
                <i class="fa fa-users"></i> 2
              </h1>
              <a href="users.html" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2018 Study Hacks</p>
        </div>
      </div>
    </div>
  </footer>







  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'editor1' );
  </script>
</body>
</html>
