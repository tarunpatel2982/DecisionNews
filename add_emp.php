<?php

	 include("db_con.php");

 if(isset($_POST['submit'])){
	  //text data variables
	  $first_name=$_POST['first_name'];
	  $midle_name=$_POST['midle_name'];
	  $last_name=$_POST['last_name'];

	  $member_since=$_POST['member_since'];
	  $expire_date=$_POST['expire_date'];
	  $dob=$_POST['dob'];
	 
	  $email=$_POST['email'];
	  $contact_no=$_POST['contact_no'];
	  $Adhar_card_no=$_POST['Adhar_card_no'];
	  $blood_group=$_POST['blood_group'];
	  $account_no=$_POST['account_no'];
	  $designation=$_POST['designation'];
	  $address=$_POST['address'];
	  $u_id=mt_rand(1000,10000);
	 
	  //image names
	   $st_pic=$_FILES['pic']['name'];
	  
	  //image temp names
	  
	   $temp_name=$_FILES['pic']['tmp_name'];
	   
	  $f_extension1 = explode('.',$st_pic);
	  
	  $f_extension1 = strtolower(end($f_extension1));
	   
	   $f_newfile1 = uniqid().'.'.$f_extension1;
	  
	   if($f_newfile1==''OR $first_name=='' OR $midle_name==''OR $last_name=='' OR $member_since=='' OR $expire_date=='' OR $dob=='' OR $email=='' OR $blood_group=='' OR $account_no=='' OR $designation=='' OR $address=='' OR $contact_no=='' OR $Adhar_card_no ==''){
		  
		  echo"<script>alert('please fill all the fields !')</script>";
		  exit();
		   }
	  
	  else{
	   // uploading images to ist folder
	   
	   move_uploaded_file($temp_name,"emp_images/$f_newfile1");

	  $insert_clint="insert into employee (profile,first_name,midle_name,last_name,member_since,expire_date,dob,email,blood_group,account_no,designation,address,u_id,contact_no,Adhar_card_no)values('$f_newfile1','$first_name','$midle_name','$last_name','$member_since','$expire_date','$dob','$email','$blood_group','$account_no','$designation','$address','$u_id','$contact_no','$Adhar_card_no')";
	  
	  $run_costumer = mysqli_query($con, $insert_clint);
	  if($run_costumer){
						echo"<script>alert(Add Employee successfully')</script>";
						//header('location: home_page.php');
						header("Location:AddEmp.php"); 
						}
						
	  else{
		   echo"<script>alert('somethig went rong !')</script>";
	     }
    }
  }
?>
