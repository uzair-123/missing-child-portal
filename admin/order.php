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

include 'config.php' ;


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['delete']) && (int)$_GET['delete'] > 0){
        $query2 = "DELETE FROM `order` WHERE  order_id= '".(int)$_GET['delete']."' ";
        $conn->query($query2);

        $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        if ($_SERVER["SERVER_PORT"] != "80")
        {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }
        else
        {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }

        $url = parse_url($pageURL, PHP_URL_PATH);
        header('Location: '.$url);
        exit();
    }



     if (isset($_GET['delete1']) && (int)$_GET['delete1'] > 0){
        $query2 = "DELETE FROM `order` WHERE  order_id= '".(int)$_GET['delete1']."' ";
        $conn->query($query2);

        $pageURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        if ($_SERVER["SERVER_PORT"] != "80")
        {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }
        else
        {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }

        $url = parse_url($pageURL, PHP_URL_PATH);
        header('Location: '.$url);
        exit();
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
font-size: 16px;"> Last access : 8th August, 2017 &nbsp; <a href="index1.php?logout=1" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
          <?php  include 'header.php' ?>
              
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Your Orders</h2>   
                    
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               



                  


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Order No</th>
                                            <th>Customer Name</th>
                                            <th> Selected Product </th>
                                            <th>Product Price</th>
                                            <th>Product Cateogry</th>
                                              
                                      
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                      
                                 <?php 

              include 'config.php' ;

                              $query = "SELECT * FROM `order` WHERE 1" ;

                        if($result = $conn->query($query))
                        {
                            while ($row = $result->fetch_assoc()) {

                           $bno = $row['bno'] ;
                             $x = $row['prod_id'] ;
                             $user = $row['cus_id'] ;
                             $o = $row['order_id'] ;




                             $u = "select cus_name from customers where cus_id = '$user'" ;


                             $u1 = $conn->query($u) ;
                             $uu1 = $u1->fetch_assoc() ;
                             $cus = $uu1['cus_name'] ;


                             $q1 = "select * from game where game_id = '$x'" ;


                             $r1 = $conn->query($q1) ;
                             $rr1 = $r1->fetch_assoc() ;
                             $i = $rr1['gname'] ;


                             if(!empty($i))
                             {
                                  ?>
                                  <tr>

                                 <td><?php echo $row['bno'] ?></td>
                                  <td><?php echo $cus  ?></td>
                                 <td><?php echo $rr1['gname'] ?></td>
                                  <td><?php echo $rr1['gprice'] ?></td>
                                   <td><?php echo "Game" ?></td>
                                   
                                
                                     
                                        <td><a class="btn btn-primary" href="order.php?delete=<?php  echo $o ;?>">  <i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>
                              <?php

                             }


                             else
                             {
                                    $q2 = "select * from gift where gift_id = '$x'" ;


                             $r2 = $conn->query($q2) ;
                             $rr2 = $r2->fetch_assoc() ;
                             $i = $rr2['cname'] ;

                                  ?>
                                  <tr>

                                 <td><?php echo $row['bno'] ?></td>
                                  <td><?php echo $cus  ?></td>
                                 <td><?php echo $rr2['cname'] ?></td>
                                  <td><?php echo $rr2['cprice'] ?></td>
                                   <td><?php echo "Gift Card" ?></td>
                                   
                                
                                      
                                        <td><a class="btn btn-primary" href="order.php?delete1=<?php  echo $o ;?>">  <i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>
                              <?php

                           
                             }


                          

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
