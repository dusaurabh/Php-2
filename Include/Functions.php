<?php require_once('Include/DB.php'); ?>
<?php require_once('Include/Sessions.php'); ?>
<?php 
 function Redirect_to($New_Location){
     header("location:".$New_Location);
     exit;
 }
function Login_Attempt($Username,$Password){
    global $con;
    $Query="SELECT * FROM login WHERE username='$Username' and password='$Password'";
    $Execute=mysqli_query($con,$Query);
    if($admin=mysqli_fetch_array($Execute)){
        return $admin;
    }else{
        return null;
    }
}

function Login(){
    if(isset($_SESSION["User_id"])){
        return true;
    }
}

function Confirm_Login(){
    if(!Login()){
        $_SESSION["ErrorMessage"]="You Must Login First!!!";
        Redirect_to("login.php");
    }
}





?>