<!DOCTYPE html>
<html>
<?php 
// ---------------MySQL connect-----------------
include 'connect.php';
if (isset($_POST['name']))
{
 $name=$_POST['name'];
}
if (isset($_POST['short']))
{
 $short=$_POST['short'];
}
if (isset($_POST['content']))
{
 $content=$_POST['content'];
}
if (isset($_POST['category']))
{
 $category=$_POST['category'];
}

$tmp=$_FILES["file"]["tmp_name"];
$picture = $_FILES['file']['name'];
$target = 'upload/' . $picture;
move_uploaded_file($tmp, $target);

if (isset($_POST['show']))
{
 $show=1;
}
else{$show=0;}
if (isset($_POST['grade']))
{
 $grade=$_POST['grade'];
}
$date=date("d.m.Y");

// ---------------XML-----------------
$result="";
$result.="<Unos>";
$result.="<Naslov>".$name."</Naslov>";
$result.="<Short>".$short."</Short>";
$result.="<Content>".$content."</Content>";
$result.="<Category>".$category."</Category>";
$result.="<Grade>".$grade."</Grade>";
$result.="</Unos>";
file_put_contents("XML/vijest.xml",$result);


// ---------------MySQL-----------------
$query = "INSERT INTO vijesti (title, short, content, category, image,do_show, grade, date ) VALUES ('$name', '$short', '$content', '$category', '$picture','$show' ,'$grade','$date')";
$result = mysqli_query($dbc, $query) or die('Error querying database.');
mysqli_close($dbc);

?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
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
    <main class="page blog-post">
        <section class="clean-block clean-post dark pt-0">
            <div class="post-image" style='background-image:url(&quot;upload/<?php echo $picture ?>&quot;)'></div>
            <div class="container">
                <div class="block-content">
                    <div class="post-body">
                        <h3><?php echo $name?></h3>
                        <div class="post-info"><span><?php echo $date?></span><span><?php echo ucfirst($category)?></span></div>
                        <p><?php echo $short?></p>
                        <figure class="figure"> <?php echo "<img class='rounded img-fluid figure-img' src='upload/$picture'>"?>
                            <figcaption class="figure-caption">Lorem ipsum dolor</figcaption>
                        </figure>
                        <p><?php echo $content?></p>                        
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