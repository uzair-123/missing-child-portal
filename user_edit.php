

<style type="text/css">
	label { width: 200px; float: left; margin: 0 20px 0 0; }
span { display: block; margin: 0 0 3px; font-size: 1.2em; font-weight: bold; }
input { width: 200px; border: 1px solid #000; padding: 5px; }

 .required input:after { content:"*"; }
</style>




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









	<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php 












use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';


include('config.php') ;


if(isset($_POST['register']))
{

$chka = 0 ;

	$name = $_POST['name'] ;
		$name1 = $_POST['name1'] ;
	$gender = $_POST['gender'] ;
	$phone = $_POST['phone'] ;
	$address = $_POST['address'] ;
	$email = $_POST['email'] ;
		$password = $_POST['password'] ;
		$pass = $_POST['password'] ;
		$password = md5($password) ;
		$c_password = $_POST['c_password'] ;
		$c_password = md5($c_password) ;

		$city = $_POST['city'] ;
		$province = $_POST['province'] ;
   $idy = $_SESSION['ada'] ;






 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters";
      $chka = 3 ; 
    }

     if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
      $nameErr1 = "Only letters";
      $chka = 3 ; 
    }


    if(!preg_match('/^\d{4}\d{3}\d{4}/', $_POST['phone']))
    {
      $phone_err = 'Invalid Number!';
      $chka = 3 ;
    }


   if(!empty($password) and !empty($c_password))
   {
   if($password != $c_password)
   {
   	$pass_err = 'Passwords Not Match!'  ;
   	$chka = 3 ;

   }
 }


if($chka == 3)
{
	echo "<script type='text/javascript'>alert('Update Failed !!! Check verification errors');</script>";
}


else
{
   
    if(!empty($pass))
   {
	$query = "update person set p_name = '$name', p_lname = '$name1', p_gender = '$gender', p_phone = '$phone', p_address = '$address', p_email = '$email', password = '$password',city = '$city', province = '$province' where p_id = '$idy'";
}

else
{
	$query = "update person set p_name = '$name', p_lname = '$name1', p_gender = '$gender', p_phone = '$phone', p_address = '$address', p_email = '$email',city = '$city', province = '$province' where p_id = '$idy'";
}

	if($conn->query($query))
	{
		
echo "<script type='text/javascript'>alert('Your information Has been Updated');</script>";




	}


}

}

?>










	<!-- banner -->
<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1 style="margin-right: 200px">My Info</h1>
	</div>
		<div class="container_1">
		
			<div class="agile-form">



            <?php 
           
           include('config.php') ;
    
           
            
            $id = $_SESSION['ada'] ;

           $query = "select * from person where p_id = '$id'" ;

           $result = $conn->query($query) ;
           $row = $result->fetch_assoc() ;
                            
 
           


       

            ?>


				










	<form action="" method="post">

        

					<ul class="field-list">
						<li>
							
                         <div class="form-group">
							   <label for="company" style="margin-right: 40px">
    <span>First Name</span>
   	<input  type="text" name="name" 
								  value="<?php echo $row['p_name'] ?>" placeholder="" id="idy" required ><span class="form-required" > <?php if(!empty($nameErr)) echo '*'.$nameErr;?></span>
  </label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
  <label for="contact" style="margin-bottom: 50px">
    <span>Last Name</span>
		<input value="<?php echo $row['p_lname'] ?>"  type="text" name="name1" placeholder="" id="idy1" required ><span class="form-required" > <?php if(!empty($nameErr1)) echo '*'.$nameErr1;?></span>
  </label>

</div>


                      


						</li>




         

						<li>
						
							<div class="form-input">
							
						




                    
               <label for="company" style="margin-right: 40px">
    <span>Gender</span>
  <select class="form-dropdown" name="gender" required>
								<option value="<?php echo $row['p_gender'] ?>"><?php echo $row['p_gender'] ?></option>
                                  
                                
                                <?php
                               if($row['p_gender'] != 'Male')
                               {
                               	?>
	<option value="Male">  Male </option>
                               	<?php
                               }
                                 ?>


    <?php
                               if($row['p_gender'] != 'Female')
                               {
                               	?>
	<option value="Female"> Female </option>
                               	<?php
                               }
                                 ?>




                                 <?php
                               if($row['p_gender'] != 'Transgender')
                               {
                               	?>

	<option value="Transgender"> Transgender </option>
                               	<?php
                               }
                                 ?>
								
								
									
									
								</select>
  </label>
  <label for="contact">
    <span>Phone Number</span>
<input  value="<?php echo $row['p_phone']; ?>" type="text" name="phone" placeholder="03xxxxxxxxx" maxlength="11"  required ><span class="form-required" > <?php if(!empty($phone_err)) echo '*'.$phone_err;?></span>
  </label>


</div>





						</li>
						
		





				          <li> 



                 <label for="company" style="margin-right: 40px">
    <span>City</span>
<input value="<?php echo $row['city'] ?>" type="text" name="city" placeholder="" required>
  </label>


                   <label for="company">
    <span>Province</span>
 	<select style="width:100%; margin-bottom:30px" name="province">
    		    		<option value="<?php echo $row['province']  ?>"><?php echo $row['province']  ?></option>

    		    		<?php 
                      
                      if($row['province'] != 'Sindh')
                      {
                      	?>
<option value="Sindh">Sindh</option>
                      	<?php
                      }

    		    		?>





    		    			<?php 
                      
                      if($row['province'] != 'Punjab')
                      {
                      	?>

<option value="Punjab">Punjab</option>

                      	<?php
                      }

    		    		?>




	<?php 
                      
                      if($row['province'] != 'Khyber Pakhtunkhwa')
                      {
                      	?>

<option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>

                      	<?php
                      }

    		    		?>




	<?php 
                      
                      if($row['province'] != 'Islamabad Capital Territory')
                      {
                      	?>

<option value="Islamabad Capital Territory">Islamabad Capital Territory</option>

                      	<?php
                      }

    		    		?>



    		    			<?php 
                      
                      if($row['province'] != 'Balochistan')
                      {
                      	?>

<option value="Balochistan">Balochistan</option>

                      	<?php
                      }

    		    		?>
       		
       		       		
       		

       			<?php 
                      
                      if($row['province'] != 'Federally Administered Tribal Areas')
                      {
                      	?>


<option value="Federally Administered Tribal Areas">Federally Administered Tribal Areas</option>

                      	<?php
                      }

    		    		?>
       		
       			





       				<?php 
                      
                      if($row['province'] != 'Azad Kashmir')
                      {
                      	?>



<option value="Azad Kashmir">Azad Kashmir</option>

                      	<?php
                      }

    		    		?>
       				
       					



       	</select>
  </label>



						
						</li>
	            
						<li>
		 <label class="form-sub-label" style="margin-right: 100px">Street Address</label>
<input placeholder="Enter Steet Address" value="<?php echo $row['p_address'] ; ?>" type="text" name="address"  >

</li>

				



                      




				<li> 
                 

                             

                                 		 <label class="form-sub-label" style="margin-right: 100px">Email Address</label>
<input value="<?php echo $row['p_email'] ; ?>" type="email" name="email" placeholder="myname@example.com" required>


 

						</li>
				


								<li> 



                      
                                 <label for="company" style="margin-right: 40px">
    <span>Password</span>
						<input value="" type="password" name="password" placeholder="" >  </label>

						                          <label for="company">
    <span>Confirm Password</span>
									<input type="password" name="c_password" placeholder="" >
								<span class="form-required" > <?php if(!empty($pass_err)) echo '*'.$pass_err;?></span> </label>
                      

				
						</li>


				

				
					
					</ul>
					<input style="margin-top: 100px; text-align: center; margin-left: 120px" type="submit" value="Update Info" name="register">
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