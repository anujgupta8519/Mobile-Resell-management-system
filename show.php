<?php
$id = $_GET['rn'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    

    <title>Top mobile</title>
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
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1400x500/?Mobile,mobile"alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1400x500/?Mobile,Samsung"alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1400x500/?Mobile,oneplus"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <br>
  	<h2 class="text-center"> <?php echo $id ?> Top Mobile </h2>
  	<br><br><hr><br>
  	<div class="row">
  	<?php
include 'connection.php';
if(isset($_GET['rn'])){

$sql = "select * from mobile where mobile_brand = '$id' and rating >= 4";
$result = mysqli_query ($con, $sql);
$num = mysqli_num_rows($result);
if ($num > 0) {
	// code...

while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="col-lg-4 col-md-12  col-sm-12">
	
		<div class="card">
			<h6 class="card-title text-center  p-2" > Model number - <?php echo $row['model_number'] ; ?></h6>
			<div class="card-body">
				<img src="<?php echo $row['photo']  ?>  " alt="<?php echo $row['mobile_brand'] ; ?>.photo" class = "img-fluid mb-2"   >
				<br>
				<h6 class="card-title" >₹  <?php echo $row['amount'] ; ?> </h6>
				<h6 class="badge bg-success"><?php echo $row['rating'] ; ?> <i class="fa fa-star"></i></h6>
				<br>
				<p> Details - <?php echo $row['des'] ; ?> </p>
				
			</div>
			<div class="btn-group flex-fill" role="group" aria-label="Basic example">
              <a href="login.php" class="btn btn-warning">Contact</a>
              <a href="login.php" class="btn btn-primary">Save</a>
</div>
		</div>
	

</div>




<?php



}
}
else{ echo "<div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>Sorry!</h4>
  <p>$id mobile is not availbale </p>
  <hr>
  <p class='mb-0'>This mobile is availbale as soon as possible.</p>
</div>";

}
}
else{
echo "string";
}
?>

    </div>
    <br><br><hr><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>