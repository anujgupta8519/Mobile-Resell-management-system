<?php
session_start(); 
 ?>
<?php
$Passwordincorrect = false;
$usernameincorrect = false;
include 'connection.php';
if (isset($_POST['submit'])) 
    {
      $username = $_POST['username'];
      $Password = $_POST['password'];
       
               $username_search = "select * from admin where username = '$username' ";
        $query = mysqli_query($con, $username_search);
                $username_count = mysqli_num_rows($query);
        if ($username_count) {
            $username_pass = mysqli_fetch_assoc($query);
            $db_pass = $username_pass['password'];
                        $_SESSION['username'] = $username_pass['username'];

            $pass_decode = password_verify($Password, $db_pass);
                        if ($pass_decode) {
                echo "Login";
                header('location:index.php');
            }else{
                $Passwordincorrect = true;
            }
        }else{
            $usernameincorrect = true;
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

    <title>User-Login</title>
    <style type="text/css">
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
    }
    </style>
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
                        <a class="nav-link" href="about.php">About</a>
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
                        <a class="nav-link" href="cont.php">Contact us</a>
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
    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Admin Login </h2>

                                <form action="<?php echo htmlentities ($_SERVER['PHP_SELF']); ?>" method="POST">
                                                                                                                    <?php
if ($Passwordincorrect) {
  // code...
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Plese!</strong> enter correct Password
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
                                            <?php
if ($usernameincorrect) {
  // code...
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Plese!</strong> enter correct User name
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>



                                    <div class="form-outline mb-4">
                                        <input type="text" name="username"  class="form-control form-control-lg" />
                                        <label class="form-label" >User Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" 
                                            class="form-control form-control-lg" />
                                        <label class="form-label" >Password</label>
                                    </div>



                                    <div class="d-flex justify-content-center">
                                       <input type="reset" class="btn btn-outline-danger " name="reset">
                                            <input type="submit" class="btn btn-outline-success " name="submit">
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>