<?php
    include 'connection.php';
    $insert = false;
    $same = false;
    $afa = false;
    $formet = false;
if ($_SERVER['REQUEST_METHOD']== 'POST') 
    {
        $Name= $_POST['Name'];
        $Aadhar= $_POST['Aadhar'];
        $Mobile=  $_POST['Mobile'];
        $Email= $_POST['Email'];
        $Password= $_POST['Password'];
        $CPassword= $_POST['CPassword'];
        $gender = $_POST['gender'];
        $States = $_POST['States'];
        $City= $_POST['City'];
        $Address= $_POST['Address'];
        $adharpic= $_FILES['adharpic'];




        $pass = password_hash($Password, PASSWORD_BCRYPT);
        $CPass = password_hash($CPassword, PASSWORD_BCRYPT);
                $adharQ = "select * from registration where adhar = '$Aadhar'";
        $chack = mysqli_query($con, $adharQ);

        $adharcount = mysqli_num_rows($chack);

        if ($adharcount>0) {
          // code...
            $afa = true;
          
        }else {
        if ($Password == $CPassword && strlen($Mobile) == 10 && strlen($Aadhar) == 12 ) {
            // code...
                    $filename = $adharpic['name'];
        $fileerror = $adharpic['error'];
        $filetemp = $adharpic['tmp_name'];

        $filetext = explode('.', $filename);
        $filecheck = strtolower(end($filetext));
        $fileextstored = array('png', 'jpg', 'jpeg', 'pdf');
        if (in_array($filecheck, $fileextstored)) {

           $destinationfile = 'adhar/'.$filename;
           move_uploaded_file($filetemp, $destinationfile);
                               $sql = "INSERT INTO `registration`(`name`, `adhar`, `mobile`, `email`, `pass`, `copass`, `gender`, `states`, `city`, `address`, `adharpic`) VALUES ('$Name', '$Aadhar', '$Mobile', '$Email', '$pass','$CPass','$gender' , '$States', '$City','$Address', '$destinationfile' )";
          $result = mysqli_query($con, $sql);
            if ($result) {
    // code...
    $insert = true;
    
  }
        }else{
          $formet = true;  
        }


        }else {
             $same = true;}

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
    <!--                     <style type="text/css">
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



    <title>OMS-Sign in Page</title>
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



                </div>
            </div>
        </div>
    </nav>

    <section class="bg-image img-fluid"
        style="background-image: url('https://source.unsplash.com/1400x1000/?Mobile,mobile');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Registration form </h2>
                                <div class="container">
                                    <form method="POST" enctype="multipart/form-data">
                                        <?php
if ($insert) {
  // code...
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> you are Sucessfully registrated now you can login with your adhar number and Password
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
                                        <?php
if ($same) {
  // code...
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Plese!</strong> enter correct Password or enter wrong mobile or adhar number
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
                                        <?php
if ($afa) {
  // code...
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Plese!</strong> enter new Aadhar number this is already registrated
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
                                        <?php
if ($formet) {
  // code...
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>check!</strong> file we accept only png jpg jpeg and pdf
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>


                                        <table class="container-fluid">
                                            <tr>
                                                <td><label>Name </label> </td>
                                                <td><input type="text" class="form-control" name="Name"
                                                        placeholder="Ex:anuj" size="20" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Aadhar Card Number </label> </td>
                                                <td><input type="number" class="form-control" name="Aadhar"
                                                        placeholder="8521-4789-6321" size="20" required></td>
                                            </tr>
                                            <tr>
                                                <td><label>Mobile Number</label> </td>
                                                <td><input type="number" name="Mobile" class="form-control"
                                                        placeholder="626-406-1406" size="20" maxlength="10" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Email Id </label> </td>
                                                <td><input type="Email" name="Email" class="form-control"
                                                        placeholder="anujgupta14@example.in" size="20" maxlength="50"
                                                        required></td>
                                            </tr>
                                            <tr>
                                                <td><label>Password</label> </td>
                                                <td><input type="Password" name="Password" class="form-control"
                                                        placeholder="min leanth 8 " size="20" maxlength="20" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Confirm Password</label> </td>
                                                <td><input type="Password" name="CPassword" class="form-control"
                                                        placeholder="min leanth 8 " size="20" maxlength="20" required>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><label>Gender</label> </td>
                                                <td><input class="form-check-input" type="radio" name="gender"
                                                        value="Female" required>Female<input class="form-check-input"
                                                        type="radio" name="gender" value="Male" required>Male<input
                                                        class="form-check-input" type="radio" name="gender"
                                                        value="Custom" required>Custom</td>
                                            </tr>

                                            <tr>
                                                <td>States</td>
                                                <td>
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="States" required>
                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                        <option value="Assam">Assam</option>
                                                        <option value="Bihar">Bihar</option>
                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                        <option value="Goa">Goa</option>
                                                        <option value="Gujarat">Gujarat</option>
                                                        <option value="Haryana">Haryana</option>
                                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                        <option value="Jharkhand">Jharkhand</option>
                                                        <option value="Karnataka">Karnataka</option>
                                                        <option value="Kerala">Kerala</option>
                                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                        <option value="Maharashtra">Maharashtra</option>
                                                        <option value="Manipur">Manipur</option>
                                                        <option value="Meghalaya">Meghalaya</option>
                                                        <option value="Mizoram">Mizoram</option>
                                                        <option value="Nagaland">Nagaland</option>
                                                        <option value="Odisha">Odisha</option>
                                                        <option value="Punjab">Punjab</option>
                                                        <option value="Rajasthan">Rajasthan</option>
                                                        <option value="Sikkim">Sikkim</option>
                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                        <option value="Telangana">Telangana</option>
                                                        <option value="Tripura">Tripura</option>
                                                        <option value=" Uttar Pradesh">Uttar Pradesh</option>
                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                        <option value="West Bengal">West Bengal</option>
                                                        <option value="Andaman and Nicobar Island">Andaman and Nicobar
                                                            Island</option>
                                                        <option value=" Chandigarh">Chandigarh</option>
                                                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra
                                                            and Nagar Haveli and Daman
                                                            and Diu</option>
                                                        <option value="Delhi">Delhi</option>
                                                        <option value="Ladakh">Ladakh</option>
                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                        <option value="Puducherry">Puducherry</option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td><input type="text" name="City" class="form-control"
                                                        placeholder="Ex: Jhansi" size="20" required>
                                                </td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td>Address</td>
                                                <td><textarea class="form-control" name="Address" rows="5" cols="50"
                                                        required></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Upload Aadhar Card Picture</td>
                                                <td><input class="form-control" type="file" name="adharpic" required>
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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>