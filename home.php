<!doctype html>
<html lang="en">

<head>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>OMS- Best Place to Buy old mobiles</title>
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
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="21.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Mobile Store</h5>
                    <p>[ old mobile phone ]</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="23.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Smart Mobiles</h5>
                    <p>[ Best Place to Buy Mobile ]</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="20.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Online Store</h5>
                    <p>[ Huge Collection and Varieties of Brands ]</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br><br>
    <h2 style=" font-family:serif;  text-align: center;"><strong>Top Mobile Brand</strong></h2>
    <br>
    <hr><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <a href="show.php?rn=Apple" class="nav-link">
                    <img src="Apple.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Apple Mobiles</h5>
                </a>
                <p class="card-text">A few of the popular smartphones from Apple are iPhone 12 Pro, iPhone 12 Pro Max,
                    iPhone 12 mini, iPhone 12, iPhone 11 Pro Max, iPhone 11, iPhone XR, iPhone XS Max, iPhone XS.</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="show.php?rn=Samsung" class="nav-link">
                <img src="samlogo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Samsung Mobiles</h5>
            </a>
            <p class="card-text">Some of the best Samsung smartphone models are Galaxy S21, Galaxy S21 Ultra 5G, Galaxy
                S21 Plus 5G, Galaxy S21 5G, Galaxy S20 FE 5G, Galaxy A52 5G, Galaxy Note 20 Ultra 5G..</p>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="show.php?rn=Oneplus" class="nav-link">
                <img src="onelogo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Oneplus Mobiles </h5>
            </a>
            <p class="card-text">Some of the popular Oneplus smartphones areONEPLUS 8 PRO 256GB. ONEPLUS 7T PRO MCLAREN
                LIMITED EDITION (12GB. ONEPLUS 9 PRO. ONEPLUS 7 PRO 128GB. ONEPLUS 8T. ONEPLUS 8 PRO. ONEPLUS 8 256GB.
                ONEPLUS 7T PRO 256GB., etc</p>
        </div>
    </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="show.php?rn=Mi" class="nav-link">
            <img src="milogo4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                
                    <h5 class="card-title">Redmi Mobiles</h5>
                </a>
                <p class="card-text">Xiaomi achieved sales of 206 million units in 2020 with revenue of $25.4 billion.
                    Some of the successful flagship products from Xiaomi are Mi 10 Ultra, Redmi Note 9 Pro, Redmi Note
                    9, Redmi Note 8, etc and its best model is Mi 11 Ultra.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <a href="show.php?rn=Others" class="nav-link">
                <img src="relogo1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Others Mobile</h5>
            </a>
            <p class="card-text"> Here all Mobile List Micromax,Intex,Lava,Karbonn,Iball,Reliance,Spice,Swipe.</p>
        </div>
    </div>
    </div>
    </div>
    <br><hr><br>
    <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="home.php" class="nav-link px-2 text-muted">Home</a></li>
      
      <li class="nav-item"><a href="cont.php" class="nav-link px-2 text-muted">Contact us</a></li>

      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Company, Inc</p>
  </footer>
</div>
<br><hr><br>



    <!-- Option 1:  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



</body>

</html>