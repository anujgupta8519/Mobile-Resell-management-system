<?php
$insert = false;
 include 'connection.php';

if ($_SERVER['REQUEST_METHOD']== 'POST') {
//   // code...
   $Name= $_POST['Name'];
  $Last= $_POST['Last'];
  $Email= $_POST['Email'];
  $Mobile=  $_POST['Mobile'];
  $Comm = $_POST['Comm'];
  $Apply = $_POST['check'];
  $sql= "INSERT INTO `contact`(`name`, `last`, `email`, `number`, `comment`, `apply`) VALUES ('$Name', '$Last', '$Email', '$Mobile', '$Comm', '$Apply') ";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // code...
    $insert = true;
    
  }else{
    echo "not";
  }

 }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact us</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">
                        <img src="logo1.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Mobile Store
                    </a>
                </div>
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Buy-Mobile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="login.php">Apple</a></li>
                            <li><a class="dropdown-item" href="login.php">One Plus</a></li>
                            <li><a class="dropdown-item" href="login.php">Samsung</a></li>
                            <li><a class="dropdown-item" href="login.php">Mi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="login.php">Other Mobile</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cont.php">Contact us</a>
                    </li>

                </ul>

                <div class="text-end">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-success me-2 -4 dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="adminlogin.php">Admin Login</a></li>
                            <li><a class="dropdown-item" href="login.php">User Login</a></li>

                        </ul>
                    </div>


                    <a href="regi.php" class="btn btn-outline-warning me-2 -4">Sign-in</a>
                </div>
            </div>
        </div>
    </nav>
                    <?php
if ($insert) {
  // code...
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Wait!</strong>we will connect you as soon as possible
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
    <br><br><br><br><br>
    <img class="img-fluid" src="cont.png">
    <br><br>
    <h3 style="text-align: center;"><u style="color: red;">Need help</u> </h3>
    <p style="text-align: center;">we are here to hear you</p>
    <br><br><br>
    <center><iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.9314999374183!2d78.20315321435015!3d26.2314151954021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c14c64938e5f%3A0x87b3d6a725f7b077!2z4KSu4KS-4KSn4KS1IOCkh-CkguCkuOCljeCkn-ClgOCkn-CljeCkr-ClguCknyDgpJHgpKsg4KSf4KWH4KSV4KWN4KSo4KWL4KSy4KWJ4KSc4KWAIOCkj-Cko-CljeCkoSDgpLjgpL7gpIfgpILgpLg!5e0!3m2!1shi!2sin!4v1637310417212!5m2!1shi!2sin"
            width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
    <br><br>
    <hr><br><br>
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">

            <h6>MADHAV INSTITUTE OF TECHNOLOGY & SCIENCE<br>
                Gola ka Mandir, Gwalior - 474005, Madhya Pradesh, India</h6>
            <p>
                Devloper name - Anuj Gupta <br>
                Email:anujgupta.6264@gmail.com
                <br> Tel: 6264061406
            </p>
            <br><br>
            <hr><br><br>
            <h6 style="text-align:center;">Help us serve you better by sharing your feedback</h6>
            <br>
            <form class="row g-3" method="POST">

                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="Name">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="Last">
                </div>
                <div class="col-md-6">

                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email">
                </div>
                <div class="col-md-6">

                    <label for="inputEmail4" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" name="Mobile">
                </div>


                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Comment</label>
                    <textarea cols="140" rows="5" name="Comm"></textarea>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" name="check" value="yes" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Term & condition apply </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
                <br><hr><br>
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="home.php" class="nav-link px-2 text-muted">Home</a></li>

      <li class="nav-item"><a href="cont.php" class="nav-link px-2 text-muted">contact</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Company, Inc</p>
  </footer>
</div>
<br><hr><br>






            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: Bootstrap Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>

            <!-- Option 2: Separate Popper and Bootstrap JS -->
            <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>