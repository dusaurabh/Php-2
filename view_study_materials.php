<?php  require_once('Include/DB.php'); ?>
<?php  require_once('Include/Sessions.php'); ?>
<?php  require_once('Include/Functions.php'); ?>
<?php 
 if(isset($_GET["id"])){
    global $con;
     $IdFromUrl = $_GET["id"];
     $Query = "SELECT * from study_materials where id='$IdFromUrl' ";
     $Execute = mysqli_query($con,$Query);
     while($DataRows = mysqli_fetch_array($Execute)){
         $ID = $DataRows['id'];
         $PDF = $DataRows['pdf'];
     }
     ?>

<div>
    <object   data="Upload/study_material/<?php echo $PDF; ?>" width="1200px"  height="2100px" ></object>
</div>
     
     
<?php } ?>
