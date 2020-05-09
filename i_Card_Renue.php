<!DOCTYPE html>
<?php
    session_start();
   
    include("db_con.php");
    ?>
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Author Meta -->
        <meta name="author" content="Themefisher">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Decision News</title>
        <style>
            .form1
            {
                margin-top: 95px;
            }
            .container1 p
            {
                margin-top: 80px;
                font-size: 80px;
            }
        </style>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icons/">

        <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,700,900,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:200,300,400,900,700,500,300' rel='stylesheet' type='text/css'>

		
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/justifiedGallery.min.css">
        <link rel="stylesheet" href="css/et-font.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/emp.css">
		
        
    </head>
	
    <body>
        <!-- #preloader -->
        <!-- end #preloader -->
        <!-- #preloader -->
        <div id="preloader">
            <div class="preloader loading">
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
                <span class="slice"></span>
            </div>
        </div>
        <!-- end #preloader -->
        <header class="site-header navbar-fixed-top navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                       <!--  <img src="img/favicon.png" alt="">
                     -->
                         <h1 style="color: white;">Desicion News</h1>
                     </a>
                </div>
                
                <div class="nav-toggle hidden-xs">
                    <button class="toggle-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <nav class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav main-manu">
                        <?php
                            if(isset($_SESSION['username']))
                            {
                                ?>
                        <li><a href="home_page.php">Home</a></li>
                        <li><a href="ViewData.php">View Data</a></li>

                        <?php
                            }
                        ?>
                    </ul>
                </nav><!-- /.navbar-collapse -->
            </div>
        </header>

         <div class="home-banner fullscreen" >
            <div class="gradient"></div>
            <div class="banner-content dtable fullscreen">
                <div class="content-inner dtablecell">
                    <div class="container">

                        <div class="form1">
                        <center><div style="width: 365px;" class="panel panel-primary">
                            <div class="panel-heading"><h3><center>Renue I-Card </h3></center></div>
                            
                           
								  <form method="post" class=" form-horizontal" action="update_i_card.php" enctype="multipart/form-data"  >
									 <fieldset >
									   
									
                                        <?php

                                               $_SESSION['emp_id']=$_GET['emp_id'];
                                               $sql="SELECT * FROM employee where emp_id='".$_GET['emp_id']."'";
            
                                               $query=mysqli_query($con,$sql);
                                             
                                                while($row=mysqli_fetch_array($query)){

                                        ?>
										<div class="form-group">
										  <label class="col-md-4 control-label">Expires  :</label>  
											<div class="col-md-4 inputGroupContainer">
											  <div class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-minus-sign"></i></span>
												   <input value="<?php echo $row['$expire_date']?>" name="expire_date"  class="form-control"  type="date" >
											  </div>
											 </div>
										</div>
									
                                        <?php
                                                 }
                                        ?>
									   <div class="form-group">
										<label class="col-md-4 control-label"></label>
										  <div class="col-md-4">
										  
										<button type="submit" name="submit"class="btn btn-warning" >SUBMIT <span class="glyphicon glyphicon-send"></span></button>
										  </div>
									  </div>

									 
									
								  </fieldset>
								 </form>

                                 </div>
                            </center>
                            </div>
							   </div>
							 
                    </div>
                </div>
            </div>
        </div>
         <script src="js/jquery.min.js"></script>
	 
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.justifiedGallery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>

   
</html>




<?php


	  
	 