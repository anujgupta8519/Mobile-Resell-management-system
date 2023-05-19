<?php
session_start();
if (!isset( $_SESSION['username'])) {
    // code...
    ?>
    <script type="text/javascript">
        alert("logout plese login again");
    </script>
    <?php
    header('location:login.php');
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
                        <li><a class="dropdown-item" href="userlogout.php">Logout</a></li>
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
                            <a class="nav-link" href="desbord.php">
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

                                                        <a class="nav-link" href="usermobile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                Buy Mobile
                            </a>

                                                        <a class="nav-link" href="mobile.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-mobile"></i></div>
                                Sale Mobile
                            </a>
                        </div>
                    </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <ol class="breadcrumb mb-4">
                            
                        </ol>
                       
  
     

                        </div>

                        <div class="row">
                               <br>
    <h2 class="text-center">Save Mobile </h2>
    <br><br><hr><br>
    <div class="row">
    <div class="card mb-4">
                            <div class="card-header">
                                <i id="C2" class="fas fa-table me-1"></i>
                                Save mobile
                            </div>
                            <div   class="card-body">
                                <table id="datatablesSimple" >
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Model Brand</th>
                                            <th>Model Number</th>
                                            <th>Contact Deatils</th>
                                            <th>Amount</th>
                                            <th>Mobile Photo</th>
                                            
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Model Brand</th>
                                            <th>Model Number</th>
                                            <th>Contact Deatils</th>
                                            <th>Amount</th>
                                            <th>Mobile Photo</th>
                                            
                                            <th>Remove</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                                                        <?php
                                    include 'connection.php';
                                    $al = $_SESSION['adhar'];
                    

                       $sql= "  select * from mobile INNER JOIN wishlist ON  wishlist.adhar = '$al' and wishlist.mobileid = mobile.mobile_id ";
                      $result = mysqli_query ($con, $sql);
                                  $sno = 0;
                                while ($row = mysqli_fetch_array($result)) {
                                   $sno = $sno+1;                                    
                                    echo "
                                        <tr>
                                            <td>".$sno."</td>
                                            <td>". $row['mobile_brand'] . "</td>
                                            <td>". $row['model_number'] . "</td>
                                            <td>". $row['contact_details'] . "</td>
                                            <td>". $row['amount'] . "</td>
                                            <td> <a class='nav-link' href='$row[photo]'>view</a>  </td>
                                            
                                            <td> <a class='btn btn-danger' href='remove.php?rn=$row[id]'>Remove</a>  </td>
                                        </tr>

                                        </tr>
                                    ";
                                }

                                    ?>
                                    </tbody>
                                </table>
                            </div>

                            

  


                        </div>

                </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
