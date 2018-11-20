<?php
require 'Include/DB.php';
require 'Include/Sessions.php';
require 'Include/Functions.php';
require 'Include/user_login_handler/register_handler.php';
require 'Include/user_login_handler/login_handler.php';
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
          <div class="card">
            <div class="card-header">
              <h4>Latest Posts</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-inverse">
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date Posted</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row">1</td>
                  <td>Post One</td>
                  <td>Web Development</td>
                  <td>July 12, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">1</td>
                  <td>Post Two</td>
                  <td>Tech Gadgets</td>
                  <td>July 13, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">1</td>
                  <td>Post Three</td>
                  <td>Web Development</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">1</td>
                  <td>Post Four</td>
                  <td>Business</td>
                  <td>July 14, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">1</td>
                  <td>Post Five</td>
                  <td>Web Development</td>
                  <td>July 15 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
                <tr>
                  <td scope="row">1</td>
                  <td>Post Six</td>
                  <td>Health & Wellness</td>
                  <td>July 16, 2017</td>
                  <td><a href="details.html" class="btn btn-secondary">
                    <i class="fa fa-angle-double-right"></i> Details
                  </a></td>
                </tr>
              </tbody>
            </table>
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
          <p class="lead text-center">Copyright &copy; 2017 Blogen</p>
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
