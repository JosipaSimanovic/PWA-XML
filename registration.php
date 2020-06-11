<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
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
    define('UPLPATH', 'img/');
    session_start();
    ?>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php"><img id="logo" src="assets/img/js.svg"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><img class="menu" src="assets/img/menu-three-outlined-bars.svg"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=moda">Moda</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php?category=sport">Sport</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="unos.php">Contact Us</a></li>
                    <?php if (isset($_SESSION['username'])) {
                            echo '<li class="nav-item" role="presentation"><span class="nav-link"><i class="fas fa-user"></i> ' . $_SESSION['username'] . '</span></li>';
                            echo '<li class="nav-item" role="presentation"><a href="logout.php" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>';
                        } else {
                            echo '<li class="nav-item" role="presentation"><a class="nav-link" href="login.php"><i class="fas fa-user"></i></a></li>';
                            echo '<li class="nav-item" role="presentation"><a class="nav-link active"  href="registration.php"><i class="fas fa-user-plus"></i></a></li>';
                        }
                    ?>
                </ul>
        </div>
        </div>
    </nav>
    
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registracija</h2>
                    
                </div>
                <form method="post" action="redirectRegister.php" name="registracija" >
                    <div class="form-group">
                        <label for="ime">Ime</label>
                        <input class="form-control item" type="text" name="ime" id="ime">
                        <span id="porukaIme" class="bojaPoruke"></span>
                    </div>
                    <div class="form-group">
                        <label for="prezime">Prezime</label>
                        <input class="form-control item" type="text" name="prezime" id="prezime">
                        <span id="porukaPrezime" class="bojaPoruke"></span>
                    </div>
                    <div class="form-group">
                        <label for="korisnicko_ime">Korisničko ime</label>
                        <input class="form-control item" type="text" name="korisnicko_ime" id="korisnicko_ime">
                        <span id="porukaKorisnickoIme" class="bojaPoruke"></span>
                    </div>
                    <div class="form-group">
                        <label for="lozinka">Lozinka</label>
                        <input class="form-control item" type="password"  name="pass" id="pass">
                        <span id="porukaPass" class="bojaPoruke"></span>
                    </div>
                    <div class="form-group">
                        <label for="lozinka2">Ponovite lozinku</label>
                        <input class="form-control item" type="password" name="passRep" id="passRep">
                        <span id="porukaPassRep" class="bojaPoruke"></span>
                    </div>
                    <button class="btn btn-primary btn-block" name="reg" type="submit" id="registracija">Registracija</button></form>
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
    <script type="text/javascript">
        document.getElementById("registracija").onclick = function(event) {
            var slanjeForme = true;

            //ime
            var poljeIme = document.getElementById("ime");
            var ime = document.getElementById("ime").value;
            if (ime.length == 0) {
                slanjeForme = false;
                poljeIme.style.border = "1px solid #ff9b94";
                document.getElementById("porukaIme").innerHTML = "<br>Unesite ime!<br>";
            } else {
                document.getElementById("porukaIme").innerHTML = "";
            }

            //prezime
            var poljePrezime = document.getElementById("prezime");
            var prezime = document.getElementById("prezime").value;
            if (prezime.length == 0) {
                slanjeForme = false;
                poljePrezime.style.border = "1px solid #ff9b94";
                document.getElementById("porukaPrezime").innerHTML = "<br>Unesite Prezime!<br>";
            } else {
                document.getElementById("porukaPrezime").innerHTML = "";
            }

            //korisnicko ime
            var poljeUsername = document.getElementById("korisnicko_ime");
            var username = document.getElementById("korisnicko_ime").value;
            if (username.length == 0) {
                slanjeForme = false;
                poljeUsername.style.border = "1px solid #ff9b94";
                document.getElementById("porukaKorisnickoIme").innerHTML = "<br>Unesite korisničko ime!<br>";
            } else {
                document.getElementById("porukaKorisnickoIme").innerHTML = "";
            }

            //lozinka
            var poljePass = document.getElementById("pass");
            var pass = document.getElementById("pass").value;
            var poljePassRep = document.getElementById("passRep");
            var passRep = document.getElementById("passRep").value;
            if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
                slanjeForme = false;
                poljePass.style.border = "1px solid #ff9b94";
                poljePassRep.style.border = "1px solid #ff9b94";
                document.getElementById("porukaPass").innerHTML = "<br>Lozinke nisu iste!<br>";
                document.getElementById("porukaPassRep").innerHTML = "<br>Lozinke nisu iste!<br>";
            } else {
                document.getElementById("porukaPass").innerHTML = "";
                document.getElementById("porukaPassRep").innerHTML = "";
            }

            if (slanjeForme != true) {
                event.preventDefault();
            }
        }
    </script>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>


<?php 
if (isset($_GET['errorRegister'])) {
    $error = $_GET['errorRegister'];

    if ($error) {
        echo '<script type="text/javascript">';
        echo 'document.getElementById("porukaRegister").innerHTML = "Registration failed, please try again."';
        echo '</script>';
    }
}

?>