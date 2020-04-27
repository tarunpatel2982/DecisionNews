<?php

	 include("db_con.php");

	 session_start();


	 if(isset($_POST['submit']))
		{

			$username=$_POST['username'];
			$password=$_POST['user_password'];
			
			
			$result= mysqli_query($con,'SELECT * FROM user where u_name="'.$username.'" and pass ="'.$password.'" ');
			
			if(mysqli_num_rows($result)==1)
			{
				echo "<script>alert('Login Successfully!!!!');</script>";
				$_SESSION['username']=$username;
				
				header('location: home_page.php');
		    
			}
			else
			{
				echo "<script>alert('Login faild !!!!');</script>";

				 $invalid_user="Invalid UserName Or Password";
				 	header('location: u_login.php');
			}

		}

?>