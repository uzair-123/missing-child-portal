<?php

include 'config.php' ;




if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $target_dir = "cards/";
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

    $im = $_FILES["fileToUpload"]["name"];
    $gname = $_POST['gname'];
    $gprice = $_POST['gprice'] ;
    $gdesc = $_POST['gdesc'] ;


    $query = "Insert into gift(cname, cprice , cimage,cdesc) VALUES ('$gname','$gprice' , '$im' , '$gdesc')";

    if (($result = $conn->query($query))) {

        echo "<script> window.location = \"gift.php\";</script>";
    }
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Admin Panel</title>
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
font-size: 16px;"> Last access :  8th August, 2017 &nbsp; <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                  
                   <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Games</a>
                    </li>

                      <li  >
                        <a  href="gift.php"><i class="fa fa-table fa-3x"></i> Gift Cards</a>
                    </li>
               
                
                      <li  >
                        <a  href="order.php"><i class="fa fa-table fa-3x"></i> Orders</a>
                    </li>
                      
                
                
                </ul>
              
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Gift Cards Upload</h2>   
                    
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               



                        <form action="gift.php" method="post" enctype="multipart/form-data">


                            <label for="exampleInputEmail1">Card Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Card Name"
                                   name="gname">

                                   <label for="exampleInputEmail1">Card Price</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Card Price"
                                   name="gprice">


                               


                                   <label for="exampleInputEmail1">Card Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Card Description"
                                   name="gdesc">


                            <label  for="exampleInputFile">File input</label>
                            <input style="margin-bottom: 25px" type="file"  name="fileToUpload" class="suby">

                            <input style="margin-bottom: 30px" type="submit" value="Upload Gift Card" name="submit" class="sub">


                        </form>


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Card Name</th>
                                            <th>Card Price</th>
                                         
                                            <th>Card Description</th>
                                            <th>Card photo</th>
                                                  <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>



                                    <?php

                        $query = "select * from gift" ;

                        if($result = $conn->query($query))
                        {
                            while ($row = $result->fetch_assoc()) {


                         ?>


                            <tr class="odd gradeX">
                                            <td><?php echo $row['cname']  ?></td>
                                            <td><?php echo $row['cprice'] ?></td>
                                           
                                            <td class="center"><?php echo $row['cdesc'] ?></td>
                                            <td >
                                    <img style="height: 100px; width:100px" src="cards/<?php echo $row['cimage'] ?>"></td>

                                   <td><a class="edit_client btn btn-primary" href="edit_gift.php?x=<?php echo $row['gift_id']; ?>" ><i class="fa fa-pencil" aria-hidden="true"></a></td>
                                    <td><a class="btn btn-primary" href="gift.php?delete=<?php echo $row['gift_id']; ?>">  <i class="fa fa-trash" aria-hidden="true"></i></a></td>

                                        </tr>
       
                         <?php



                                # code...
                            }
                        }


                        ?>

                                  

                                      
                                    </tbody>
                                </table>
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
