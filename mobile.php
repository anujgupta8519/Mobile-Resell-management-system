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
<?php

    include 'connection.php';
    $insert = false;
    $formet = false;
    if ($_SERVER['REQUEST_METHOD']== 'POST') 
    {
        $userid = $_SESSION['adhar'];
        $brand = $_POST['mobileb'];
        $model = $_POST['model'];
        $amount = $_POST['amount'];
        $des = $_POST['des'];
        $contt = $_POST['contt'];
        $rating = $_POST['rating'];
        $mobilepic = $_FILES['mobilepic'];

         $filename = $mobilepic['name'];
        $fileerror = $mobilepic['error'];
        $filetemp = $mobilepic['tmp_name'];

        $filetext = explode('.', $filename);
        $filecheck = strtolower(end($filetext));
        $fileextstored = array('png', 'jpg', 'jpeg');
        if (in_array($filecheck, $fileextstored)) {

           $destinationfile = 'mobile/'.$filename;
           move_uploaded_file($filetemp, $destinationfile);

           $sql = "INSERT INTO `mobile`(`mobile_brand`, `userid` , `model_number`, `des`, `amount`, `contact_details`, `rating`, `photo`) VALUES ('$brand', '$userid', '$model', '$des', '$amount', '$contt', '$rating', '$destinationfile') ";
           $result = mysqli_query($con, $sql);
                       if ($result) {
    // code...
    $insert = true;
    
  }
        }else{
          $formet = true;  
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--                            <style type="text/css">
    .gradient-custom-3 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}</style> -->

    <title>Add mobile</title>
  </head>
  <body>
    
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
                    </div>

                </nav>
            </div>

        </div>
        <br>

       <section class="bg-image img-fluid"
        style="background-image: url('https://source.unsplash.com/1400x1000/?Mobile,mobile');">

        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <br>
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Enter Mobile Details</h2>
                                                                                <?php
if ($formet) {
  // code...
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>check!</strong> file we accept only png jpg jpeg and pdf
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
                                        <?php
if ($insert) {
  // code...
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your mobile is on sale
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
                                <div class="container">
                                    <form method="POST" enctype="multipart/form-data">
                                                                              <table class="container-fluid">
                                            <tr>
                                        
                                                <td>Mobile Brand</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="mobileb" required>
                                                        <option value="Apple">Apple</option>
                                                        <option value="Oneplus">Oneplus</option>
                                                        <option value="Samsung">Samsung</option>
                                                        <option value="Mi">Mi</option>

                                                        <option value="Others">Others</option>


                                                    </select>

                                                </td>
                                            </tr>

                                                                                        <tr>
                                                <td><label>Model number</label> </td>
                                                <td><input type="text" name="model" class="form-control"
                                                         size="20" required>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td><label>Amount</label> </td>
                                                <td><input type="number" name="amount" class="form-control"
                                                         size="20" required>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>Des.</td>
                                                <td><textarea class="form-control" name="des" rows="5" cols="50"
                                                        required></textarea></td>
                                            </tr>

                                                    <tr>
                                                <td>Cotact details</td>
                                                <td><textarea class="form-control" name="contt" rows="5" cols="50"
                                                        required></textarea></td>
                                            </tr>
                                                                                        <tr>
                                        
                                                <td>Rating</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="rating" required>

                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="3.1">3.1</option>
                                                        <option value="3.2">3.2</option>
                                                        <option value="3.3">3.3</option>
                                                        <option value="3.4">3.4</option>
                                                        <option value="3.5">3.5</option>
                                                        <option value="3.6">3.6</option>
                                                        <option value="3.7">3.7</option>
                                                        <option value="3.8">3.8</option>
                                                        <option value="3.9">3.9</option>
                                                        <option value="4">4</option>
                                                        <option value="4.1">4.1</option>
                                                        <option value="4.2">4.2</option>
                                                        <option value="4.3">4.3</option>
                                                        <option value="4.4">4.4</option>
                                                        <option value="4.5">4.5</option>
                                                        <option value="4.6">4.6</option>
                                                        <option value="4.7">4.7</option>
                                                        <option value="4.8">4.8</option>
                                                        <option value="4.9">4.9</option>

                                                        <option value="5">5</option>


                                                    </select>

                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td>Upload Mobile  Picture</td>
                                                <td><input class="form-control" type="file" name="mobilepic" required>
                                                </td>
                                            </tr>
                                            
                                          </table>
                                                                                  <br><br><br>
                                        <center>
                                            <input type="reset" class="btn btn-outline-danger btn-lg" name="reset">
                                            <input type="submit" class="btn btn-outline-success btn-lg" name="submit">

                                        </center>







                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr><br><br>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
  </body>
</html>