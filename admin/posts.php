

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


if(isset($_GET['c']))
{
    $id = $_GET['c'] ;


    $query = "update missing_child set status = '1' where m_id = '$id'" ;
    if($conn->query($query))
    {
        echo "<script type='text/javascript'>alert('POST HAS BEEN APPROVED !!! ');</script>";
    }
}




if(isset($_GET['d']))
{
    $id = $_GET['d'] ;


    $query = "update missing_child set status = '0' where m_id = '$id'" ;
    if($conn->query($query))
    {
        echo "<script type='text/javascript'>alert('POST HAS BEEN DISAPPROVED !!! ');</script>";
    }
}



if(isset($_GET['ede']))
{
    $id = $_GET['ede'] ;


    $query = "delete from missing_child where m_id = '$id'" ;
    $conn->query($query) ;
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
                     <h2>POSTS</h2>   
                    
                       
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
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>CHILD NAME</th>
                                            <th>CHILD AGE</th>
                                         
                                            <th>CHILD IDENTIFICATION</th>
                                            <th>LOCATION</th>
                                            
                                            <th>GETUP</th>
                                                 <th>PHONE</th>
                                                      <th>CHILD IMAGE</th>
                                                           <th>STATUS</th>
                                                            <th>Action</th>
                                                            <th>Action</th>
                                                               <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>



                                    <?php

                                    include 'config.php' ;

                                  $user_id = $_SESSION['ad'] ;
                        $query = "select * from missing_child" ;

                        if($result = $conn->query($query))
                        {
                            while ($row = $result->fetch_assoc()) {


                         ?>


                            <tr class="odd gradeX">
                                            <td><?php echo $row['m_name']  ?></td>
                                            <td><?php echo $row['m_age'] ?></td>
                                           
                                            <td class="center"><?php echo $row['m_identification'] ?></td>


             <td class="center"><?php echo $row['m_location'] ?></td>
                          <td class="center"><?php echo $row['m_getup'] ?></td>
             <td class="center"><?php echo $row['m_phone'] ?></td>








                                            <td >
                                    <img style="height: 100px; width:100px" src="../missing_child/<?php echo $row['m_child_image'] ?>"></td>

                                                 <td class="center"><?php  if($row['status'] == '2'){echo 'pending';} else if($row['status'] == '1'){echo 'approved';} else{echo 'not approved';} ?></td>

                            
                                  <td><a href="posts.php?c=<?php echo $row['m_id'] ?>" name="approve" class="btn btn-success" type="submit">approve</a></td>
                                  <td style="width: 10%"><a href="posts.php?d=<?php echo $row['m_id'] ?>" name="n_approve" class="btn btn-danger" type="submit">not approve</a></td>
                                    <td><a href="posts.php?ede=<?php echo $row['m_id'] ?>" name="n_approve" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                              


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
