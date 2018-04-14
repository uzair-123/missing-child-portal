
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


	$name = $_POST['name'] ;
		$name1 = $_POST['name1'] ;
	$gender = $_POST['gender'] ;
	$phone = $_POST['phone'] ;
	$address = $_POST['address'] ;
	$email = $_POST['email'] ;
		$password = $_POST['password'] ;
		$password = md5($password) ;
		$passy = $_POST['password'] ;

		$city = $_POST['city'] ;
		$province = $_POST['province'] ;
		$c_password = $_POST['c_password'] ;
		$c_password = md5($c_password) ;


		$_SESSION['name'] = $name ;
		$_SESSION['name1'] = $name1 ; 
		$_SESSION['gender'] = $gender ;
		$_SESSION['phone'] = $phone ;
		$_SESSION['address'] = $address ;
		$_SESSION['email'] = $email ;
		$_SESSION['password'] = $password ;
		$_SESSION['city'] = $city ;
		$_SESSION['province'] = $province ;


     

      
     
$chk  = '0' ;

       

 if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters";
      $chk = '3' ; 
    }

     if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
      $nameErr1 = "Only letters";
      $chk = '3' ; 
    }


     if (!preg_match('/^\d{4}\d{3}\d{4}/', $phone)) {
     	      $phone_err = 'Invalid Number!';
           $chk = '3' ;
    }


   if($password != $c_password)
   {
   	$pass_err = 'Passwords Not Match!'  ;
   	$chk = '3' ;

   }




    if($province == 'select')
    {
    	  $chk = '4' ;
    }



  $query2 = "select count(*) as coun from person where p_email = '$email'" ;
    $x = $conn->query($query2) ;
    $row = $x->fetch_assoc() ; 

    $sum = $row['coun']  ;

    


   if($sum > 0 )
   {
   	$chk = '1' ;
   }


   	$query2 = "select count(*) as coun from person where p_phone = '$phone'" ;
    $x = $conn->query($query2) ;
    $row = $x->fetch_assoc() ; 

    $sum1 = $row['coun']  ;
    

    if($sum1 > 0 )
    {
    	$chk = '2';
    }



    if($chk == '1')
    {
    	  echo "<script type='text/javascript'>alert('Verification Error !!! ');</script>";
    }


    else if($chk == '2')
    {
    	  echo "<script type='text/javascript'>alert('Mobile no Already Exists !!! ');</script>";
    }

  else if($chk == '3')
    {
    	  echo "<script type='text/javascript'>alert('Verification Problem !!! ');</script>";
    }

  else if($chk == '4')
    {
    	  echo "<script type='text/javascript'>alert('Select Province !!! ');</script>";
    }


    else
    {

	



       $_SESSION['email'] = $email ;

		$digits = 4;
$code =  rand(pow(10, $digits-1), pow(10, $digits)-1);

$_SESSION['code'] = $code ;
	
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    //Server settings
    // $mail->SMTPDebug = 1;                        // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                         // Enable SMTP authentication

    $mail->Username = 'finddearone@gmail.com';                           // Your gmail id
    $mail->Password = 'asd112233';                           // Your gmail password
    $mail->SMTPSecure = 'tls';        // Enable TLS encryption, `ssl` also accepted

    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('finddearone@gmail.com', '123456');
    $mail->addAddress($email);     // Add a recipient
    
    $body = $code;

    //Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = 'Verification Code';
    $mail->Body    = $code;
    $mail->AltBody = strip_tags($body);

    $mail->send();








$mobile = $phone ;///Recepient Mobile Number
$sender = 'Find Dear One';
$message = $code ;


////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "http://sendpk.com/api/sms.php?username=923172782660&password=2384";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 






    echo "<script type='text/javascript'>alert('Verification Code Has Been Sent On Your Email And Mobile');</script>";

 
header("Location: verify.php");
 

} catch (Exception $e) {
    
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
		<h1>Registration</h1>
	</div>
		<div class="container_1">
		
			<div class="agile-form">
				<form action="" method="post">

        

					<ul class="field-list" style="margin-bottom: 50px">
		<li>
							
             <div class="form-group">
					<label for="company" style="width: 40%;">
						<span>First Name</span>
							<input  type="text" name="name" value="<?php if(!empty($name)) echo $name ?>" placeholder="" id="idy" required ><span class="form-required" > <?php if(!empty($nameErr)) echo '*'.$nameErr;?></span>
					</label> 
					<label for="contact" style="margin-bottom: 25px; width: 39%; margin-left: 35px; ">
						<span>Last Name</span>
							<input value="<?php if(!empty($name1)) echo $name1 ?>"  type="text" name="name1" placeholder="" id="idy1" required ><span class="form-required" > <?php if(!empty($nameErr1)) echo '*'.$nameErr1;?></span>
					</label>

			</div>
			
		</li>
						
		<li>
						
			<div class="form-input">		
				<label for="company" style="width: 40%;">
					<span>Gender</span>
						<select style="width:255px;" class="form-dropdown" name="gender" required>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
						</select>
				</label>
				<label for="contact" style="margin-bottom: 25px; width: 35%; margin-left: 25% ">
					<span>Phone Number</span> 
						<input style="width:255px;" value="<?php if(!empty($phone)){ echo $phone; } ?>" type="text" name="phone" placeholder="03xxxxxxxxx" maxlength="11"  required ><span class="form-required" > <?php if(!empty($phone_err)) echo '*'.$phone_err;?></span>
				</label>
			</div>

		</li>
						
		<li> 
            <label for="company" style="width: 40%;">
				<span>City</span>
						<input value="<?php if(!empty($city)){echo $city;} ?>" type="text" name="city" placeholder="" required>
			</label>


            <label for="company" style=" width: 39%; margin-left: 5% ">
				<span>Province</span>
					<select style="width:100%; margin-bottom:30px" name="province">
    		    		<option value="select">select province</option>
						<option value="Sindh">Sindh</option>
						<option value="Punjab">Punjab</option>
						<option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
						<option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
						<option value="Balochistan">Balochistan</option>
						<option value="Federally Administered Tribal Areas">Federally Administered Tribal Areas</option>
       					<option value="Azad Kashmir">Azad Kashmir</option>
				</select>
			</label>					
		</li>
	        

			
		<li>	
			
			<label class="company" style="margin-right: 100px;">Street Address</label>
				<input style="width: 550px;" placeholder="Enter Steet Address" value="<?php if(!empty($address)){echo $address;} ?>" type="text" name="address"  >

		</li>
				
			<li> 
           <label class="form-sub-label" style="margin-right: 100px">Email Address</label>
				<input style="width: 550px;" value="<?php if(!empty($email)){echo $email;} ?>" type="email" name="email" placeholder="myname@example.com" required>

		</li>
		
		
		<li> 
			<label  style="width: 40%;">
				<span>Password</span>
					<input style="width: 250px;" value="" type="password" name="password" placeholder="" required>  
			</label>

			 <label  style="margin-left: 30px; width: 40%; margin-bottom: 50px">
				<span>Confirm Password</span>
					<input type="password" name="c_password" placeholder="" required>
						<span style="width: 50px;" class="form-required" > <?php if(!empty($pass_err)) echo '*'.$pass_err;?></span> 
			</label>
     	
		</li>
			
					
					</ul>
					
					<input style="margin-left: 150px"  type="submit" value="Register" name="register">
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

