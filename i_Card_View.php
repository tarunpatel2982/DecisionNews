 <?php
     session_start();
      include("db_con.php");
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	 <link rel="stylesheet" href="css/i_card_view.css">
        
</head>
<body>



  <?php
  	if(isset($_SESSION['username']))
         {

              $sql="SELECT employee.designation ,employee.profile,employee.first_name,employee.last_name,employee.member_since ,employee.expire_date ,employee.dob,employee.address,employee.mob ,employee.email FROM employee where emp_id='".$_GET['emp_id']."'";
            
              $query=mysqli_query($con,$sql);
            
        while($row=mysqli_fetch_array($query)){

    ?>
	<div class="card">
		<h1 class="title" >PRESS</h1>
		
		<p class="designationemp" ><?php  echo $row['designation']?></p>

		<img src="emp_images/<?php echo $row['profile']; ?>" width="93px"height="117px"style="border:1px solid white;" class="img">


		<div class="transbox">
			<p class="name1"><?php echo $row['first_name']?></p>
			<p class="name2"><?php echo $row['last_name']?></p>
		</div>

		<div class="post" >
  			<h3>Decision News</h3>
		</div>
		<div>
			<p class="p1">Member Since:<?php echo $row['member_since']?> </p>
			<p class="p2">Expire: <?php echo $row['expire_date']?></p>
			<p class="p3">Date Of Birth:<?php echo $row['dob']?></p>
			<img class="qrimage"src="D_Barcode.png"/>
		</div>
		<div class="sing">
			<img src="images/sig1.jpg" class="sinImg">
			<p>Authorised Sing.</p>
		 
			</div>
		 <?php
			include("qr/qrlib.php");
			QRcode::png("www.javatpoint.com","D_Barcode.png","H","2","2");
		?>
	
	</div>


 
 
 <div class="card2">
 
	<h1 class="title" >PRESS</h1>
 
	<p class="address"> <?php echo $row['address']?></p>
	<p class="mobno">Mobile No :<?php echo $row['mob']?></p>
	<p class="email">Email : <?php echo $row['email']?></p>
	
	<p class="domain"> www.decisionnews.in</p>
	
	<h3 class="low"> DECISION NEWS WILL NOT RESPONSIBLE  </h3>
	<h3 class="low2">FOR ANY MISS USE OF I-CARD</h3>
	<p class="comAdd">BRB COMPLEX 3th FLOOR , HANUMANBARI CHAR RASTA , VANSDA, NAVASARI</p>
	<p></p>
 </div>
 
 <?php
        }

    }
 ?>
</body>
</html>