<?php
session_start();
if(!isset($_SESSION['ad'])) {
  header('Location: index.php');
  exit();
}
if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(isset($_GET['logout'])){
    if((int)$_GET['logout'] == 1){
      unset($_SESSION['ad']);
      header('Location: index.php');
      exit();
    }
  }
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Panel</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access :  8th August, 2017 &nbsp; <a href="index1.php?logout=1" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
            <?php include 'header.php' ?>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?php 
        
                 include('config.php') ;
                  $quer = "select * from user where user_id = '1' " ;
                   $result = $conn->query($quer) ;
                   $row = $result->fetch_assoc() ;
                   $name = $row['username'] ;
                     echo 'Welcome '.$name ?> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">

            
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-bars"></i>
                </span>

                  <?php 
 $query = "select count(*) as message from message where status = '0'" ;
                   $result = $conn->query($query) ;
                   $row = $result->fetch_assoc() ;
                   $count = $row['message'] ;
                    ?>
                          <div class="text-box" >
                           
                    <p class="main-text"><?php echo $count; ?></p>
                    <p class="text-muted"></p>
                </div>
                <div class="text-box" >
                    <p class="main-text">Unread Messages</p>
                    <p class="text-muted"></p>
                </div>


             </div>
		     </div>
                     <?php 
 $query = "select count(*) as posts from missing_child" ;
                   $result = $conn->query($query) ;
                   $row = $result->fetch_assoc() ;
                   $count = $row['posts'] ;
                    ?>

                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                          <div class="text-box" >
                           
                    <p class="main-text"><?php echo $count  ?></p>
                    <p class="text-muted"></p>
                </div>
                <div class="text-box" >
                    <p class="main-text">Total Posts</p>
                    <p class="text-muted"></p>
                </div>
           
             </div>
		     </div>
         
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>

                  <?php 
 $query = "select count(*) as posts from person" ;
                   $result = $conn->query($query) ;
                   $row = $result->fetch_assoc() ;
                   $count = $row['posts'] ;
                    ?>

                <div class="text-box" >
                           
                    <p class="main-text"><?php echo $count ?></p>
                    <p class="text-muted"></p>
                </div>
                <div class="text-box" >
                           
                    <p class="main-text">Total Users</p>
                    <p class="text-muted"></p>
                </div>


             </div>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
          
                    
                    
                 
      
                        
        </div>
                 <!-- /. ROW  -->

                 <!-- /. ROW  -->
   
                 <!-- /. ROW  -->
       
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
