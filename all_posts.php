

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<style type="text/css">
	.left {
    width: 300px;
    height: 40%;
    float:left;
    margin-right: 50px
}

.vl {
    border-left: 6px solid green;
    height: 500px;
}


</style>



<!DOCTYPE html>
<html>

<head>
	<title>New Clinic a Medical Category Bootstrap Responsive Web Template | About :: W3layouts </title>
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
	<!-- about -->

<!-- //about -->
<!-- emergency_cases -->

<!-- //emergency_cases -->
<!-- team -->
<div class="team">
	<div class="container">

        


 
      <div class="left">
	 <form style="margin-bottom: 150px" action="" method="post">
       	<label style="margin-bottom: 50px">SEARCH BY AGE GROUP AND PROVINCE</label>
       	<div class="form=group">
       	
       	<select style="width:70%; margin-bottom:30px" name="age_group">
       	 	<option value="select">Select Age Group</option>
       		<option value="1">1-3</option>
       		<option value="2">4-7</option>
       		<option value="3">8-10</option>
       		<option value="4">above 10</option>
       
       	</select>
       </div>
     

    	<select style="width:70%; margin-bottom:30px" name="province">
       		<option value="select">Select province</option>
       		<option value="Sindh">Sindh</option>
       		<option value="Punjab">Punjab</option>
       		<option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
       		<option value="Islamabad Capital Territory">Islamabad Capital Territory</option>
       			<option value="Balochistan">Balochistan</option>
       				<option value="Federally Administered Tribal Areas">Federally Administered Tribal Areas</option>
       					<option value="Azad Kashmir">Azad Kashmir</option>



       	</select>

        
       	  	<select style="width:70%; margin-bottom:30px" name="year">
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


       <input type="submit" name="submit" value="Search">
       </form>

    
</div>




		<h3 class="heading-agileinfo">Missing Childs</h3>


      





           <?php  

   include('config.php') ;


$count = '0' ;
$sum1 = '0' ;
$sum2 = '0' ;

 if(isset($_GET['sum']))
           {
           	$sum = $_GET['sum'] ;

           }





           else
           {
           	$sum = 0 ;
           }
                    

        if( isset($_POST['submit']) || isset($_GET['cm']) )
        {

        	if(!isset($_POST['submit']))
           {
      $age = $_SESSION['age_group'] ;
         $province = $_SESSION['province'] ;
         $year = $_SESSION['year'] ;
      }

      else
      {
      	    $age = $_POST['age_group'] ;
          $province = $_POST['province'] ;
          $year = $_POST['year'] ;



     $_SESSION['age_group'] = $age ;
          $_SESSION['province'] = $province ;
          $_SESSION['year'] = $year ;

      }
       
           


           if($province == 'select')
           	{
           		// just age
           		if($year == 'select')
           		{

           			if($age == 'select')
           			{
           					$query = "select * from missing_child where status = '1'" ;
           			}

           			else
           			{

           			 if($age == '1')
          {
          	$query = "select * from missing_child where  status = '1' and m_age between '1' and '3' " ;
          } 	


           if($age == '2')
          {
          	$query = "select * from missing_child where  status = '1' and m_age between '4' and '7' ";
          }


              if($age == '3')
          {
          	$query = "select * from missing_child where  status = '1' and m_age between '7' and '10' ";
          }


              if($age == '4')
          {
          	$query = "select * from missing_child where   status = '1' and m_age > '10	' ";
          }


           }


           		}


          // just year and age
           		else
           		{


         if($age == 'select')
         {
            	$query = "select * from missing_child where year = '$year' and status = '1' " ;	
         }


         else 
         {   			

 if($age == '1')
          {
          	$query = "select * from missing_child where year = '$year' and status = '1' and m_age between '1' and '3' " ;
          } 	


           if($age == '2')
          {
          	$query = "select * from missing_child where year = '$year'  and status = '1' and m_age between '4' and '7' ";
          }


              if($age == '3')
          {
          	$query = "select * from missing_child where year = '$year' and status = '1' and m_age between '7' and '10' ";
          }


              if($age == '4')
          {
          	$query = "select * from missing_child where year = '$year' and  status = '1' and m_age > '10	' ";
          }
}

           		}
           	}








// province is not empty  

           else
           	{
              

       

	// just age
           		if($year == 'select')
           		{

           			if($age == 'select')
           			{
           					$query = "select * from missing_child where province = '$province' and status = '1'" ;
           			}

           			else
           			{

           			 if($age == '1')
          {
          	$query = "select * from missing_child where province = '$province' and  status = '1' and m_age between '1' and '3' " ;
          } 	


           if($age == '2')
          {
          	$query = "select * from missing_child where province = '$province' and  status = '1' and m_age between '4' and '7' ";
          }


              if($age == '3')
          {
          	$query = "select * from missing_child where province = '$province' and  status = '1' and m_age between '7' and '10' ";
          }


              if($age == '4')
          {
          	$query = "select * from missing_child where province = '$province' and   status = '1' and m_age > '10	' ";
          }


           }


           		}


          // just year and age
           		else
           		{


         if($age == 'select')
         {
            	$query = "select * from missing_child where province = '$province' and year = '$year' and status = '1' " ;	
         }


         else 
         {   			

 if($age == '1')
          {
          	$query = "select * from missing_child where province = '$province' and year = '$year' and status = '1' and m_age between '1' and '3' " ;
          } 	


           if($age == '2')
          {
          	$query = "select * from missing_child where province = '$province' and year = '$year'  and status = '1' and m_age between '4' and '7' ";
          }


              if($age == '3')
          {
          	$query = "select * from missing_child where province = '$province' and year = '$year' and status = '1' and m_age between '7' and '10' ";
          }


              if($age == '4')
          {
          	$query = "select * from missing_child where province = '$province' and year = '$year' and  status = '1' and m_age > '10	' ";
          }
}

           		}












           	}


   


      

         




 
          

          $result = $conn->query($query) ;



                  while($row = $result->fetch_assoc())
                  {
                  	  $count++ ;
                
                $sum1++; 
                 if($sum1 > $sum)
                 {


               $sum2++ ;

               if($sum2 == '11')
               {
               	break ;
               }
 
          

               ?>


	<div class="teamgrids">
			<div class="col-md-3 teamgrid1">
					<h3><?php echo $row['m_name'] ?></h3>
				<img src="missing_child/<?php echo $row['m_child_image'] ?>" class="img-responsive" alt="" />
				<div class="teaminfo">
				
				
					<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>Age:</strong> <?php echo $row['m_age'] ?></p>

						<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>Province:</strong> <?php echo $row['province'] ?></p>


								<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>location:</strong> <?php echo $row['m_location'] ?></p>

									
										<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>Year:</strong> <?php echo $row['year'] ?></p>
			
			
			<a class="btn btn-danger" href="next.php?m=<?php echo $row['m_id'] ?>">View Details</a>
				</div>
			</div>


               <?php 
           }

                  }

          

  if($count == '0')
  {
  	  echo "<p style ='color:red'>Sorry no records are found !!!</p>";
  }




        }

          


               

               else
               {
 

               

                  $query = "select * from missing_child where status = '1'";

                  $result = $conn->query($query) ;



                  while($row = $result->fetch_assoc())
                  {


                  	  $sum1++; 
                 if($sum1 > $sum)
                 {


               $sum2++ ;

               if($sum2 == '11')
               {
               	break ;
               }
 


               ?>
               


	<div class="teamgrids">
			<div class="col-sm-3 teamgrid1">
					<h3><?php echo $row['m_name'] ?></h3>
				<img src="missing_child/<?php echo $row['m_child_image'] ?>" class="img-responsive" alt="" />
				<div class="teaminfo">
				
				
					<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>Age:</strong> <?php echo $row['m_age'] ?></p>

						<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>Province:</strong> <?php echo $row['province'] ?></p>


								<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>location:</strong> <?php echo $row['m_location'] ?></p>

								
										<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i><strong>Year:</strong> <?php echo $row['year'] ?></p>
			<a class="btn btn-danger"href="next.php?m=<?php echo $row['m_id'] ?>">View Details</a>
			
				</div>
			</div>


               <?php
               } 

                  }

  }

           ?>



	
		
	

			<div class="clearfix">
				
			</div>
		</div>
	</div>
</div>
<div style="margin-left: 750px; margin-bottom: 50px;margin-top: 40px">
	<?php 

	if(isset($_POST['submit']) or isset($_GET['cm']))
	{
	if($sum > '0')
	{
		?>
<a class="btn btn-success" style="margin-right: 70px" href="all_posts.php?sum=<?php echo $sum - 10 ?>&cm=1">prev</a>
		<?php 
	}

}

else
{
	if($sum > '0')
	{
			?>
<a class="btn btn-success" style="margin-right: 70px" href="all_posts.php?sum=<?php echo $sum - 10 ?>">prev</a>
		<?php 
	}

}

	?>


	<?php 

    if(isset($_POST['submit']) or isset($_GET['cm']))
    {
    	?>
 <a class="btn btn-success" href="all_posts.php?sum=<?php echo $sum + 10 ?>&cm=1">next</a>
    	<?php
    }


    else
    {
    	    	?>
 <a class="btn btn-success" href="all_posts.php?sum=<?php echo $sum + 10 ?>">next</a>
    	<?php
    }

	?>

    
</div>
</div>




<!-- //team -->
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