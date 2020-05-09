
<?php

session_start();
include("db_con.php");
$expire_date=$_POST['expire_date'];
$sql = "UPDATE employee SET expire_date='$expire_date' WHERE  emp_id='".$_SESSION['emp_id']."'";


$run_costumer = mysqli_query($con, $sql);
if($run_costumer){
                  echo"<script>alert('Update Data')</script>";
                  //header('location: home_page.php');
                  header("Location:ViewData.php"); 
                  }
                  
else{
     echo"<script>alert('somethig went rong !')</script>";
   }
?>