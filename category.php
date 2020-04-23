<?php
include 'connect.php';
define('UPLPATH', 'upload/');
$category=$_GET['category'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Brand</title>
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
        <div class="container"><a class="navbar-brand logo" href="#"><img id="logo" src="assets/img/js.svg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><img class="menu" src="assets/img/menu-three-outlined-bars.svg"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=moda">Moda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=sport">Sport</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="unos.html">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.html"><i class="fas fa-user"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.html"><i class="fas fa-user-plus"></i></a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info capitalize"><?php echo $category;?></h2>
                    
                </div>
                <div class="row">
                <?php
                        $query = "SELECT * FROM vijesti WHERE do_show=1 AND category='$category' LIMIT 15";
                        $result = mysqli_query($dbc, $query);
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        echo '<div class="col col-12 col-md-6 col-lg-3">';
                        echo '<div class="card clean-card text-center pad">';
                        echo '<img class="card-img-top w-100 d-block" src="' . UPLPATH . $row['image'] . '">';
                        echo '<div class="card-body info">';
                        echo '<div class="media_body">';
                        echo '<h4 class="card-title">';
                        echo '<a href="clanak.php?id='.$row['id'].'">';
                        echo  $row['title'];
                        echo '</a></h4>';
                        echo '<p class="card-text">';
                        echo  $row['short'];
                        echo '</p>';
                        echo '<a class="btn btn-outline-primary btn-lg readmore" role="link" href="clanak.php?id='.$row['id'].'">Read more</a>';
                        echo '</div> </div> </div></div>';
                        }?> 
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