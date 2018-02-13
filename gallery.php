<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galerija</title>
    <!--lightbox css files-->
    <link href="./libs/lightbox/css/lightbox.css" rel="stylesheet">
    <?php Template_class::getLibs(); ?>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="./images/logo.png" class="logo" alt=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
            <li><a href="index.php">Galvenā</a></li>
            <li><a href="gamesList.php">Spēles</a></li>
            <li class="active"><a href="gallery.php">Galerija</a></li>
            <li><a href="prices.php">Cenas</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="contacts.php">Kontakti</a></li>
                    <li><a href="contactus.php">Saziņa</a></li>
                </ul>
            </li>
            <li><a href="registration.php">Reģistrācija</a></li>
            <li><a href="aboutus.php">Par Mums</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="#">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Meklēt">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2">
            <p><a href="#">2015. gads</a></p>
            <p><a href="#">2016. gads</a></p>
            <p><a href="#">2017. gads</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <a href="./pictures/gallery/bilde.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde1.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde1.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde2.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde2.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde3.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde3.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde4.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde4.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde5.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde5.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde6.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde6.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde7.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde7.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde8.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde8.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde9.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde9.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde10.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde10.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde11.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde11.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde12.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde12.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde13.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde13.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
            <a href="./pictures/gallery/bilde14.jpg" data-lightbox="roadtrip" data-title="My caption"><img src="./pictures/gallery/bilde14.jpg" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail" alt=""></a>
        </div>
        <div class="col-sm-2">
            <div class="well">
                <p>Reklāma</p>
            </div>
            <div class="well">
                <p>Reklāma</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
<script src="./libs/lightbox/js/lightbox.min.js"></script>
</body>
</html>