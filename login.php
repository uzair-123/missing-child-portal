<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->





<!DOCTYPE html>
<html>

<head>
	<title>New Clinic a Medical Category Bootstrap Responsive Web Template | Appointment :: W3layouts </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="New Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<?php include('header.php') ; ?>
	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Login</h1>
	</div>
		<div class="container_1">
		
			<div class="agile-form">
				<form action="" method="post">
					<ul class="field-list">
					
					

<?php 

include('config.php') ;





if (isset($_POST['login'])) {

   $email = $_POST['email'];

   $password = $_POST['pass'];
   $password = mysqli_real_escape_string($conn, $password);
$password = md5($password) ;


   $query = "SELECT DISTINCT * from person WHERE p_email = '$email' AND password = '$password' ";

   if($result = $conn->query($query)){


      if ($result->num_rows > 0) {
         $user = $result->fetch_assoc();
         $_SESSION['ada'] = $user['p_id'];
         header('Location: index.php');
         exit();
      }


      else
      {
      	  echo "<script type='text/javascript'>alert('INVALID PASSWORD , TRY AGAIN !!! ');</script>";
      }
   }
}

?>
					
					
						<li> 
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="myname@example.com" required>
							</div>
						</li>


							<li>
							<label class="form-label"> 
								Password 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="password" name="pass" placeholder="" required >
							</div>
						</li>
				
					
					</ul>
					<input type="submit" value="Login" name="login">
				</form>	
			</div>
		</div>
</div>
	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-3 footer_grid">
				<h3>About Us</h3>
				<p>Nam libero tempore cum vulputate id est id, pretium semper enim. Morbi viverra congue eros.

				</p>
				
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Latest News</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>8088 USA, Honey block, <span>New York City.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid ">
				<h3>Sign up for our Newsletter</h3>
				<p>Get Started For Free</p>
				<div class="footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>© 2018 New Clinic. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>

	</div>

	<!-- //footer -->
	<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					New Clinic
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g7.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>