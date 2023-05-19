<?php
session_start();
if (!isset( $_SESSION['username'])) {
    // code...
    ?>
    <script type="text/javascript">
        alert("logout plese login again");
    </script>
    <?php
    header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
     } );
    </script>
        <script>
      $(document).ready( function () {
    $('#myTable1').DataTable();
     } );
    </script>
            <script>
      $(document).ready( function () {
    $('#myTable2').DataTable();
     } );
    </script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Hi <?php 
 echo $_SESSION['username']; 
 ?></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
   
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"><?php 
 echo $_SESSION['username']; 
 ?></a></li>

                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="adminlogout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">

                            </div>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">

                                        </nav>
                                    </div>

                                    </a>


                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Details</div>

                            <a class="nav-link" href="#C2">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User
                            </a>
                                                        <a class="nav-link" href="#C4">
                                <div class="sb-nav-link-icon"><i class="fas fa-users-slash"></i></div>
                               Deactivated User
                            </a>
                                                        <a class="nav-link" href="#C3">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile-alt"></i></div>
                                Mobile
                            </a>
                                                                                    <a class="nav-link" href="#C6">
                                <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                                Feedback
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
  
     

                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <img src="logo1.jpg">
                                <br><br><br>
                                <br><br><br>


                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i id="C2" class="fas fa-users me-1"></i>
                                User
                            </div>
                            <div   class="card-body">
                                <table id="datatablesSimple" >
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Aadhar Number</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Adhar pic</th>
                                            <th>Date of Registration</th>
                                            <th>Deactivate</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Aadhar Number</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Adhar pic</th>
                                            <th>Date of Registration</th>
                                            <th>Deactivate</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    include 'connection.php';
                    

                       $sql= "SELECT * FROM registration";
                      $result = mysqli_query ($con, $sql);
                                  $sno = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                   $sno = $sno+1;                                    
                                    echo "
                                        <tr>
                                            <td>".$sno."</td>
                                            <td>". $row['name'] . "</td>
                                            <td>". $row['adhar'] . "</td>
                                            <td>". $row['mobile'] . "</td>
                                            <td>". $row['email'] . "</td>
                                            <td>". $row['address'] . "</td>
                                            <td> <a class='nav-link' href='$row[adharpic]'>view</a>  </td>
                                            <td>". $row['time'] . "</td>
                                            <td> <a class='btn btn-danger' href='move.php?rn=$row[sno]'>Deactivate</a>  </td>
                                        </tr>

                                        </tr>
                                    ";
                                }

                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
 <div class="container my-4">
    <hr>
                                <div class="card-header">
                                <i id="C3" class="fas fa-mobile-alt me-1"></i>
                                Mobile
                            </div>


<table class="table" id="myTable">
  <thead>
    <tr>
                                            <th>S.no</th>
                                            <th>Brand name</th>
                                            <th>Model number</th>
                                            <th>Des</th>
                                            <th>Amount</th>
                                            <th>Cont</th>
                                            <th>Photo</th>
                                            <th>User Adhar number</th>
                                            <th>Rating</th>
                                            
    </tr>
  </thead>
  <tbody>
                                    <?php
                                    include 'connection.php';
                    

                       $sql= "SELECT * FROM mobile";
                      $result = mysqli_query ($con, $sql);
                                  $sno = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                   $sno = $sno+1;                                    
                                    echo "
                                        <tr>
                                            <td>".$sno."</td>
                                            <td>". $row['mobile_brand'] . "</td>
                                            <td>". $row['model_number'] . "</td>
                                            <td>". $row['des'] . "</td>
                                            <td>". $row['amount'] . "</td>
                                            <td>". $row['contact_details'] . "</td>
                                            <td> <a class='nav-link' href='$row[photo]'>view</a>  </td>
                                            <td>". $row['userid'] . "</td>
                                            <td>". $row['rating'] . "</td>
                                            
                                        </tr>

                                        
                                    ";
                                }

                                    ?>
                                    <!--  <td> <a class='btn btn-danger' href='move.php?rn=$row[mobile_id]'>Deactivate</a>  </td> -->



  </tbody>
</table>
  </div>
  <div class="container my-4">
    <hr>
                                <div class="card-header">
                                <i id="C4" class="fas fa-users-slash me-1"></i>
                                 Deactivated User
                            </div>


<table class="table" id="myTable1">
  <thead>
    <tr>
                                       
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Aadhar Number</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Adhar pic</th>
                                            <th>Date of Registration</th>
                                            <th>Activate</th>
                                        
    </tr>
  </thead>
  <tbody>
 
                                    <?php
                                    include 'connection.php';
                    

                       $sql= "SELECT * FROM deactive";
                      $result = mysqli_query ($con, $sql);
                                  $sno = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                   $sno = $sno+1;                                    
                                    echo "
                                        <tr>
                                            <td>".$sno."</td>
                                            <td>". $row['name'] . "</td>
                                            <td>". $row['adhar'] . "</td>
                                            <td>". $row['mobile'] . "</td>
                                            <td>". $row['email'] . "</td>
                                            <td>". $row['states'] . "</td>
                                            <td> <a class='nav-link' href='$row[adharpic]'>view</a>  </td>
                                            <td>". $row['address'] . "</td>
                                            <td> <a class='btn btn-danger' href='sel.php?rn=$row[sno]'>Activate</a>  </td>
                                        </tr>
                                    ";
                                }

                                    ?>



</tbody>
</table>
  </div>
  


                        </div>
                         <div class="container my-4">
    <hr>
                                <div class="card-header">
                                <i id="C6" class="fas fa-comments me-1"></i>
                                Feedback
                            </div>


<table class="table" id="myTable2">
  <thead>
    <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Last Nmae</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>Comment</th>
                                            
                                            <th>Time</th>
                                            
                                            
    </tr>
  </thead>
  <tbody>
                                    <?php
                                    include 'connection.php';
                    

                       $sqlp= "SELECT * FROM contact";
                      $resultp = mysqli_query ($con, $sqlp);
                                  $sno = 0;
                                while ($rowp = mysqli_fetch_assoc($resultp)) {
                                   $sno = $sno+1;                                    
                                    echo "
                                        <tr>
                                            <td>".$sno."</td>
                                            <td>". $rowp['name'] . "</td>
                                            <td>". $rowp['last'] . "</td>
                                            <td>". $rowp['email'] . "</td>
                                            <td>". $rowp['number'] . "</td>
                                            <td>". $rowp['comment'] . "</td>
                                            <td>". $rowp['time'] . "</td>
                                            
                                            
                                        </tr>

                                        
                                    ";
                                }

                                    ?>
                                   



  </tbody>
</table>
  </div>
                    </div>
                </main>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
