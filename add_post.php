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




<?php 

include('config.php') ;


if(isset($_POST['post']))
{
$chk = 0 ;
  if($_FILES["fileToUpload"]["name"] != '')
   {
   
   
    $target_dir = "missing_child/";
    $name = (basename($_FILES["fileToUpload"]["name"]));


    $target_file = $target_dir . $name;
    $uploadOk = 1;
    if (!getimagesize($_FILES["fileToUpload"]["tmp_name"])) {
        $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $uploadOk = 0;
    }
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
   
   
   }

    $child_image = $_FILES["fileToUpload"]["name"];
    




	$name = $_POST['name'] ;
    $age = $_POST['age'] ;
    $identification = $_POST['identification'] ;
    $location = $_POST['location'] ;
    $getup = $_POST['getup'] ;
    $phone = $_POST['phone'] ;
        $province = $_POST['province'] ;
        $year = $_POST['year'] ;

  $user_id = $_SESSION['ada'] ;


  if($province == 'select')
  {
  	$chk = '4' ;
  }


    if($year == 'select')
  {
  	$chk = '5' ;
  }



 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters";
      $chk = '3' ; 
    }


     if (!preg_match('/^\d{4}\d{3}\d{4}/', $phone)) {
     	      $phone_err = 'Invalid Number!';
           $chk = '3' ;
    }

    if($chk == '3')
    {
    			echo "<script type='text/javascript'>alert('Failed to Add !!! Check verification errors');</script>";
    }


    else if($chk == '4')
    {
    		echo "<script type='text/javascript'>alert('Select Province');</script>";
    }

        else if($chk == '5')
    {
    		echo "<script type='text/javascript'>alert('Select Year');</script>";
    }

else
{
	$query = "insert into missing_child(m_name,m_age,m_identification,m_location,m_getup,m_phone,m_child_image,user_id,status,province,year) values('$name','$age','$identification','$location','$getup','$phone','$child_image','$user_id','2','$province','$year')";

	if($conn->query($query))
	{
		echo "<script type='text/javascript'>alert('Your Post Has Been Submitted');</script>";
	}
}
}

?>






<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Post An Ad About Missing Child</h1>
	</div>
		<div class="container_1">
		
			<div class="agile-form">
				<form action="" method="post" enctype= "multipart/form-data">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								 Name
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<span class="form-sub-label">
								<input type="text" name="name" placeholder="" value="<?php if(!empty($name)){ echo $name; } ?>" required >
								<span class="form-required" > <?php if(!empty($nameErr)) echo '*'.$nameErr;?></span>
							</span>
							</div>
						</li>







						<li> 
							<label class="form-label">
							   Age
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php if(!empty($age)){ echo $age; } ?>" type="text" name="age" placeholder="" maxlength="3" required>
									
								</span>
					
						</li>









						<li> 
							<label class="form-label">
							   Identification Mark
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php if(!empty($identification)){ echo $identification; } ?>" type="text" name="identification" placeholder="" required>
									
								</span>
					
						</li>







								<li> 
							<label class="form-label">
							   Location
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php if(!empty($location)){ echo $location; } ?>" type="text" name="location" placeholder="" required>
									
								</span>
					
						</li>



								<li> 
							<label class="form-label">
							   Get up
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php if(!empty($getup)){ echo $getup; } ?>" type="text" name="getup" placeholder="" required>
									
								</span>
					
						</li>





					
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<span class="form-sub-label">
								<input value="<?php if(!empty($phone)){ echo $phone; } ?>" type="text" name="phone" placeholder=""  maxlength="11"  required >
								<span class="form-required" > <?php if(!empty($phone_err)) echo '*'.$phone_err;?></span>
							</span>
				</label>
							</div>
						</li>



					<li> 
							<label class="form-label">
							   Year
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								
    	<select style="width:30%; margin-bottom:30px" name="year">
       			<option value="select">Select Year</option>
       		<?php 

          $y = '2009' ;

          for ($i=0; $i < 9 ; $i++) { 
          	# code...
          	 	$y++ ;
          	?>
          	<option value="<?php echo $y ; ?>"><?php echo $y ; ?></option>
          	<?php 

          }

       
       		?>
  



       	</select>
							</div>
						</li>




					

										<li> 
							<label class="form-label">
							   Province
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								
    	<select style="width:30%; margin-bottom:30px" name="province">
       			<option value="select">Select Province</option>
       		<option value="Sindh">Sindh</option>1
       		<option value="Punjab">Punjab</option>
       		<option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
       		<option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
       			<option value="Balochistan">Balochistan</option>
       				<option value="Federally Administered Tribal Areas">Federally Administered Tribal Areas</option>
       					<option value="Azad Kashmir">Azad Kashmir</option>



       	</select>
							</div>
						</li>
				
				
						<li> 
							<label class="form-label">
							   Upload Child Picture
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="file" name="fileToUpload" required>
							</div>
						</li>


				
					
					</ul>
					<input type="submit" value="Register" name="post">
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