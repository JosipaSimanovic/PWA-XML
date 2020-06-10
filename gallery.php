<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gallery - Brand</title>
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
<?php
    include 'connect.php';
    session_start();
    ?>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><img id="logo" src="assets/img/js.svg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><img class="menu" src="assets/img/menu-three-outlined-bars.svg"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="gallery.php">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=moda">Moda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=sport">Sport</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="unos.php">Contact Us</a></li>
                    <?php if (isset($_SESSION['username'])) {
                            echo '<li class="nav-item" role="presentation"><span class="nav-link"><i class="fas fa-user"></i> ' . $_SESSION['username'] . '</span></li>';
                            echo '<li class="nav-item" role="presentation"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>';
                        } else {
                            echo '<li class="nav-item" role="presentation"><a class="nav-link" href="login.php"><i class="fas fa-user"></i></a></li>';
                            echo '<li class="nav-item" role="presentation"><a class="nav-link "  href="registration.php"><i class="fas fa-user-plus"></i></a></li>';
                        }
                    ?>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image1.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image1.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image4.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image4.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image6.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image6.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image5.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image5.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image1.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image1.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image4.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image4.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image6.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image6.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image5.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image5.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image1.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image1.jpg"></a></div>
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