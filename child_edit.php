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
   

   $check = '1';
   
   }


   else
   {
   	$check = 0 ;
   }

    $child_image = $_FILES["fileToUpload"]["name"];
    




	$name = $_POST['name'] ;
    $age = $_POST['age'] ;
    $identification = $_POST['identification'] ;
    $location = $_POST['location'] ;
    $getup = $_POST['getup'] ;
    $phone = $_POST['phone'] ;
        $province = $_POST['province'] ;

  $user_id = $_SESSION['ada'] ;

  $idy = $_POST['idy'] ;



  if($check == '0')
  {
  

   		$query = "update missing_child set m_name = '$name', m_age = '$age' , m_identification = '$identification' , m_location = '$location', m_getup = '$getup', m_phone = '$phone', province = '$province' where m_id = '$idy' ";
  }

  else
  {


  		 	$query = "update missing_child set m_name = '$name', m_age = '$age' , m_identification = '$identification' , m_location = '$location', m_getup = '$getup', m_phone = '$phone', province = '$province', m_child_image = '$child_image' where m_id = '$idy' ";
  }

	

	if($conn->query($query))
	{
		echo "<script type='text/javascript'>alert('Your Post Has Been Updated');</script>";
	}
}

?>







            <?php 
           
           include('config.php') ;
    
           
            
            $id = $_GET['chi'] ;

           $query = "select * from missing_child where m_id = '$id'" ;

           $result = $conn->query($query) ;
           $row = $result->fetch_assoc() ;
                            
 
           


       

            ?>


<div class="banner_inner_content_agile_w3l">
	
</div>
	<!--//banner -->
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Update Child Info</h1>
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
								<input value="<?php echo $row['m_name'] ?>" type="text" name="name" placeholder="" required >
							</div>
						</li>







						<li> 
							<label class="form-label">
							   Age
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php echo $row['m_age'] ?>" type="text" name="age" placeholder="" required>
									
								</span>
					
						</li>









						<li> 
							<label class="form-label">
							   Identification Mark
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php echo $row['m_identification'] ?>" type="text" name="identification" placeholder="" required>
									
								</span>
					
						</li>







								<li> 
							<label class="form-label">
							   Location
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php echo $row['m_location'] ?>" type="text" name="location" placeholder="" required>
									
								</span>
					
						</li>



								<li> 
							<label class="form-label">
							   Get up
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input value="<?php echo $row['m_getup'] ?>" type="text" name="getup" placeholder="" required>
									
								</span>
					
						</li>





					
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input value="<?php echo $row['m_phone'] ?>" type="text" name="phone" placeholder="" 1>
							</div>
						</li>


										<li> 
							<label class="form-label">
							   Year
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								
    	<select style="width:30%; margin-bottom:30px" name="year">
       			
       		<?php 

          $y = '2009' ;

          for ($i=0; $i < 9 ; $i++) { 
          	# code...
          	 	$y++ ;
          	?>
          	<option value="<?php echo $row['year'] ?>"><?php echo $row['year'] ?></option>

          	<?php 
            if($y != $row['year'])
            {
            	?>
	<option value="<?php echo $y ; ?>"><?php echo $y ; ?></option>
            	<?php
            }
          
          	?>
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
							</div>
						</li>
				
				
						<li> 
							<label class="form-label">
							   Change Child Picture
							   <span class="form-required">  </span>
							</label>
							<div class="form-input">
								<input type="file" name="fileToUpload">
							</div>
						</li>


						<input type="hidden" name="idy" value="<?php echo $row['m_id'] ?>">


				
					
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