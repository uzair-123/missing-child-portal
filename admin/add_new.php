<style type="text/css">
.form-style-5{
    max-width: 500px;
    padding: 10px 20px;
    background: #f4f7f8;
    margin: 10px auto;
    padding: 20px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
    border: none;
}
.form-style-5 legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.form-style-5 label {
    display: block;
    margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0;
    outline: 0;
    padding: 7px;
    width: 100%;
    box-sizing: border-box; 
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box; 
    background-color: #e8eeef;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 30px;
    
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
    background: #d2d9dd;
}
.form-style-5 select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.form-style-5 .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 30px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
    position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;
    width: 100%;
    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
    background: #109177;
}
</style>


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
}

?>


<?php

$chk = 0 ;
include 'config.php' ;



if(isset($_POST['ch']))
{

  $user = $_POST['user'] ;
   $email = $_POST['email'] ;


  $pass = $_POST['password'] ;
  $pass = md5($pass) ;
    $c_pass = $_POST['c_password'] ;
  $c_pass = md5($c_pass) ;


  if (!preg_match("/^[a-zA-Z ]*$/",$user)) {
      $nameErr = "Only letters";
      $chk = '3' ; 
    }




   if($pass != $c_pass)
   {
    $passerr = 'Passwords Not Match!'  ;
    $chk = '3' ;

   }


   if($chk == '3')
   {
       echo "<script type='text/javascript'>alert('Failed to add !!! Check verification errors ');</script>";
   }

else

{
$query = "insert into user(username,password,useremail) values('$user','$pass','$email')" ;
if($conn->query($query))
{
    echo "<script type='text/javascript'>alert('ADMIN HAS BEEN ADDED !!! ');</script>";
}

}

}


?>

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
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="index.html">Binary admin</a> 
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
                  



                    
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               





   <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->

<div class="form-style-5">
                 <form action="" method="post">
                            
<legend><span class="number">1</span>ADD NEW ADMIN</legend>

                        <div>
                               <label>Username</label>
                   <input type="text" name="user" value="<?php if(!empty($user)){echo $user;}   ?>"
                    required >
                   <span class="form-required" ><?php if(!empty($nameErr)) echo '*'.$nameErr;?></span>
                 </div>



                        <div>
                               <label>Email</label>
                   <input type="email" name="email" value="<?php if(!empty($email)){echo $email;}   ?>" required>
                 </div>




                   <div>
                  <label><strong>Password </strong></label>
                   <input style="margin-bottom: 30px" type="password" name="password" value="" required>
</div>



                   <div>
                  <label><strong>Confirm Password </strong></label>
                   <input style="margin-bottom: 25px" type="password" name="c_password" value="" required>
                   <span class="form-required" > <?php if(!empty($passerr)) echo '*'.$passerr;?></span>
</div>


                   <input type="submit" name="ch">

                 </form>
               </div>

            
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
      
                <!-- /. ROW  -->

                <!-- /. ROW  -->

                <!-- /. ROW  -->

                <!-- /. ROW  -->
        </div>
               
    </div>
            
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
