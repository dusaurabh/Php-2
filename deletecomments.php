<?php  require_once('Include/DB.php'); ?>
<?php  require_once('Include/Sessions.php'); ?>
<?php  require_once('Include/Functions.php'); ?>
<?php  Confirm_Login(); ?>
<?php 
 if(isset($_GET["id"])){
    global $con;
     $IdFromUrl = $_GET["id"];
     $Query = "Delete from comments where id='$IdFromUrl' ";
     $Execute = mysqli_query($con,$Query);
     if($Execute){
         $_SESSION["SuccessMessage"] = "Comment Deleted SuccessFully";
         Redirect_to("commentsection.php");
     }else{
         $_SESSION["ErrorMessage"] = "SomeThing Went Wrong, Try Again";
         Redirect_to("commentsection.php");
     }
 }
?>