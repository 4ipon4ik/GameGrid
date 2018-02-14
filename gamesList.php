<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spēles</title>
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
            <li class="active"><a href="gamesList.php">Spēles</a></li>
            <li><a href="gallery.php">Galerija</a></li>
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
            <p><a href="#">Katalogs</a></p>
            <p><a href="#">Bildes</a></p>
            <p><a href="#">Video</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <a href="./game.php?game=1"><img src="./pictures/games/Counter Strike.jpg" alt="Counter Strike GO" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
            <img src="./pictures/games/Assassin's creed Origins.jpg" alt="Assassin's creed Origins" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Call of Duty WWII.jpg" alt="Call of Duty WWII" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Grand theft Auto V.jpg" alt="Grand theft Auto V" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/For Honor.jpg" alt="For Honor" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Hitman (2016).jpg" alt="Hitman (2016)" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Detroit Become Human.jpg" alt="Detroit Become Human" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Infamous.jpg" alt="Infamous Second Son" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/unch.jpg" alt="Uncharted 4" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/God of War 4.jpg" alt="God of War 4" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Red Dead Redemption 2.jpg" alt="Red Dead Redemption 2" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/Spider-Man PS4.jpg" alt="Spider-Man PS4" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
            <img src="./pictures/games/The Last of US 2.jpg" alt="The Last of US 2" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail">
        </div>
        <?php
        if(@$_POST['game'] != ''){
            $db->gamePage($_POST['game']);
        }
        ?>
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
</body>
</html>