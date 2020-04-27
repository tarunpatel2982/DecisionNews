<!DOCTYPE html>



  <?php
     session_start();
      include("db_con.php");
  ?>
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
        <title>Teble</title>


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
        <link rel="stylesheet" href="css/view.css">       
        <link rel="stylesheet" href="css1/bootstrap.min.css">
        <link rel="stylesheet" href="css1/dataTables.bootstrap4.min.css">

			
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
                        <img src="img/logo.png" alt="">
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
                              <li><a href="AddEmp.php">Add New Emp</a></li>
                             <!--  <li><a href="ViewData.html">View Data</a></li> -->
                              <li><a href="#">Report</a></li>
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
                       

 <div class="container mb-3 mt-3">
    <table class="table table-striped table-bordered mydatatable" cellspacing="0" width="100%">
      <thead>
      
           <tr>
        
        <th class="th-sm">Name

        </th>
        <th class="th-sm">Designation

        </th>
        <th class="th-sm">Join Date

        </th>
        <th class="th-sm">Expire Date

        </th>
        <th class="th-sm">Update

        </th>
        <th class="th-sm">Action</th>

      </tr>
          
      </thead>

      <tbody> 

            <?php
                $sql='SELECT * FROM employee';
                $query=mysqli_query($con,$sql);
             ?>
          <tr>
               <?php
                while($row=mysqli_fetch_array($query))
                {
              ?>
                 <td value=" "><?php echo $row['first_name'] , $row['last_name'] ?></td>
                <td value=" "><?php echo $row['designation'] ?></td>
                <td value=" "><?php echo $row['member_since'] ?></td>
                <td value=" "><?php echo $row['expire_date'] ?></td>
                <td><button class="btn btn-primary" style="border-radius: 10px;">Renew I-Card</button></td>
                <td><a class="btn btn-warning" style="border-radius: 10px;" href="i_Card_View.php?emp_id=<?php echo $row['emp_id']?>" >View I-Card</a></td>

                                       
                                       </tr>
                                      <?php
                                        }
                                        ?>
                                      </tbody>
      
      </table>


                    </div>
                </div>
            </div>
        </div>



        <!--
        JavaScripts
        ========================== -->
<!--
<script src="js1/jquery-3.3.1.min.js"></script>-->	
<script src="js1/jquery-3.3.1.min.js"></script>
<script src="js1/bootstrap.min.js"></script>

<script src="js1/jquery.dataTables.min.js"></script>
<script src="js1/dataTables.bootstrap4.min.js"></script>

<script>

$('.mydatatable').DataTable()
</script>
        


        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.justifiedGallery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
