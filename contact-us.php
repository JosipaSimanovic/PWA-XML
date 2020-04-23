<?php
include 'connect.php';
define('UPLPATH', 'upload/');
$date=date(d.m.Y.);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact Us - Brand</title>
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
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
            </div>
            <div class="row border-roza smanji">
                <div class="col-md-12 col-xl-12 offset-md-0 offset-xl-0 col-12 col-lg-12">
                    <div class="row border-roza">
                        <div class="col col-12 p-1">
                            <form class="tablica" method="post" action="skripta.php" name="unos" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col col-lg-1"><label class="col-form-label">Ime vijesti</label></div>
                                    <div class="col col-lg-2"><label class="col-form-label">Kratki sažetak vijesti</label></div>
                                    <div class="col col-3"><label class="col-form-label">Tekst vijesti</label></div>
                                    <div class="col col-2"><label class="col-form-label">Tekst vijesti</label></div>
                                    <div class="col col-2"><label class="col-form-label">File</label></div>
                                    <div class="col col-1"><label class="col-form-label">Prikazivanje</label></div>
                                    <div class="col col-1"><label class="col-form-label">Uredi</label></div>
                                </div>
                            </form>
                        </div>
                        <?php 
                            $query = "SELECT * FROM vijesti";
                            $result = mysqli_query($dbc, $query);
                            while($row = mysqli_fetch_array($result)) {
                       echo '<div class="col col-12 gotovo p-1">
                            <form class="tablica" method="post" name="unos" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col col-lg-1">
                                        <div class="form-group"><input class="form-control tablica" type="text" name="name" value="'.$row['title'].'"></div>
                                    </div>
                                    <div class="col col-lg-2">
                                        <div class="form-group"><textarea class="form-control tablica" name="short" rows="3">'.$row['short'].'</textarea></div>
                                    </div>
                                    <div class="col col-3">
                                        <div class="form-group"><textarea class="form-control tablica" rows="3" name="content">'.$row['content'].'</textarea></div>
                                    </div>
                                    <div class="col col-2">
                                        <div class="form-group"><select class="form-control tablica" data-live-search="true" name="category" value="'.$row['category'].'">
                                            <option value="sport">Sport</option>
                                            <option value="moda">Moda</option>
                                            <option value="vijesti">Vijesti</option>
                                        </select></div>
                                    </div>
                                    <div class="col col-2">
                                        <div class="form-group relative"><input type="file" class="custom-file-input" name="file" value="'.$row['image'].'" ><button class="btn btn-secondary absolute tablica" type="button">Upload file...</button>
                                        <img src="' . UPLPATH .$row['image'] . '" width=100%>
                                        </div>
                                    </div>
                                    <div class="col col-1">
                                        <div class="form-group">
                                            <div class="form-check custom-control custom-checkbox">';
                                            if($row['do_show'] == 0) {
                                                echo '<input class="form-check-input custom-control-input" type="checkbox" id="customCheck1" name="show">
                                                <label class="form-check-label custom-control-label" for="customCheck1">Da</label></div>';
                                                } else {
                                                echo '<input class="form-check-input custom-control-input" type="checkbox" id="customCheck1" name="show" checked>
                                                <label class="form-check-label custom-control-label" for="customCheck1">Da</label></div>';
                                                }
                                               
                                            // <input class="form-check-input custom-control-input" type="checkbox" id="customCheck1" name="show">
                                            // <label class="form-check-label custom-control-label" for="customCheck1">Da</label></div>
                                       echo ' </div>
                                    </div>
                                    <input type="hidden" name="id" class="form-field-textual"
                                            value="'.$row['id'].'">
                                    <div class="col col-1">
                                        <button class="btn uredi" type="submit" name="update"><i class="far fa-check-circle"></i></button>
                                        <button class="btn uredi" type="reset" value="reset"><i class="fas fa-undo"></i></button>
                                        <button class="btn uredi" type="submit" name="delete"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>';
                                            }


                                            // trenutno ne dela
                                            if(isset($_POST['delete'])){
                                                $id=$_POST['id'];
                                                $query = "DELETE FROM vijesti WHERE id=$id ";
                                                $result = mysqli_query($dbc, $query);
                                               }  
                                            // dela                                      
                                            if(isset($_POST['update'])){
                                                $image = $_FILES['file']['name'];
                                                $title=$_POST['title'];
                                                $short=$_POST['short'];
                                                $content=$_POST['content'];
                                                $category=$_POST['category'];
                                                
                                                if(isset($_POST['show'])){
                                                    $show=1;
                                                }else{
                                                    $show=0;
                                                }
                                                $tmp=$_FILES["file"]["tmp_name"];
                                                $picture = $_FILES['file']['name'];
                                                $target = 'upload/' . $picture;
                                                move_uploaded_file($tmp, $target);

                                                $id=$_POST['id'];
                                                $query = "UPDATE vijesti SET title='$title', short='$short', content='$content',
                                                image='$picture', category='$category', do_show='$show', date='$date' WHERE id=$id ";
                                                $result = mysqli_query($dbc, $query);
                                            }
                                               
                        ?>
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