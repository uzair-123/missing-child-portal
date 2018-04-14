<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> 1143 New York, USA</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					
				
					<?php 

					include('config.php') ;

session_start() ;

if($_SERVER['REQUEST_METHOD'] == "GET"){
  if(isset($_GET['logout'])){
    if((int)$_GET['logout'] == 1){
      unset($_SESSION['ada']);
      header('Location: index.php');
      exit();
    }
  }
}


                  if(!isset($_SESSION['ada'])) 
                  {

                ?>

	<li><a href="reg.php"> Register</a> </li>

	<li><a href="login.php"> Login</a> </li>
                <?php 
 

                  }


                  else
                  {

                $i = $_SESSION['ada'] ;
                $que = "select * from person where p_id = '$i'" ;
                $resy = $conn->query($que) ;
                $rowa = $resy->fetch_assoc() ;

                $namy = $rowa['p_name'] ;



                  	?>

<li style="color: white"><strong>Hello <?php echo $namy; ?></strong></li>
	<li><a href="index.php?logout=1"> logout</a> </li> 
     

                  	<?php 

                  }

					?>



				
				</ul>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
							<h1><span class="fa fa-stethoscope" aria-hidden="true"></span>New Clinic </h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About</a></li>
										<li><a href="all_posts.php">Missing Childs</a></li>


								
								<?php 

                                  
                                if(isset($_SESSION['ada']))
                                {

?>
 	<li><a href="add_post.php">Post a new ad</a></li>
						    		<li><a href="my_posts.php">My Posts</a></li>
						    			<li><a href="send.php">Send Message</a></li>
						    				<li><a href="user_edit.php">My Info</a></li>

 <?php

                                }
                                  

								?>
							
							
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>