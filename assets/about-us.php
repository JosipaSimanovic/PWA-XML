<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Sidebar-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><img class="menu" src="assets/img/menu-three-outlined-bars.svg"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=moda">Moda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=sport">Sport</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="unos.html">Contact Us</a></li>
                    <?php if (isset($_SESSION['username'])) {
                            echo '<li class="nav-item" role="presentation"><span class="nav-link"><i class="fas fa-user"></i> ' . $_SESSION['username'] . '</span></li>';
                            echo '<li class="nav-item" role="presentation"><a href="logout.php" class="nav-link">LOG OUT</a></li>';
                        } else {
                            echo '<li class="nav-item" role="presentation"><a class="nav-link" href="login.html"><i class="fas fa-user"></i></a></li>';
                            echo '<li class="nav-item" role="presentation"><a class="nav-link"  href="registration.html"><i class="fas fa-user-plus"></i></a></li>';
                        }
                    ?>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar1.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">John Smith</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar2.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Robert Downturn</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar3.jpg">
                            <div class="card-body info">
                                <h4 class="card-title">Ally Sanders</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-4">
                    <ul>
                        <li>Josipa Šimanović</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-sm-4">
                    <ul>
                        <li><a href="mailto:jsimanovi@tvz.hr?Subject=PWA-projekt">jsimanovi@tvz.hr</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-sm-4">
                    <ul>
                        <li>2020</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>