<?php
/**
 * Created by PhpStorm.
 * User: edp1
 * Date: 15.02.2018
 * Time: 13:41
 */
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galvenā</title>
    <?php Template_class::getLibs();
        if(isset($_SESSION['nick'])){
        header("location:index.php");
    } ?>
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
            <li><a href="gallery.php">Galerija</a></li>
            <li><a href="prices.php">Cenas</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="contacts.php">Kontakti</a></li>
                    <li><a href="contactus.php">Saziņa</a></li>
                </ul>
            </li>
            <?php if(!isset($_SESSION['nick'])){
                echo '<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profils<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="registration.php">Reģistrēties</a></li>
                        <li><a href="login.php">Pieslēgties</a></li>
                    </ul>
                </li>';
            }
            else{
                echo '<li><a href="#">'.$_SESSION['username'].'</a></li>
                        <li><form action="" method="post"><button class="btn btn-primary" name="i">Iziet</button></form></li>
                        <li><a href="usrList.php">Lietotāji</a></li>';
                if(isset($_POST['i'])){
                    session_destroy();
                    header('location:index.php');
                }
            }?>
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
        <div class="col-sm-2 sidenav">
            <p><a href="#">Ziņas</a></p>
            <p><a href="#">Navi</a></p>
            <p><a href="#">Gācija</a></p>
            <p><a href="#">Visādi jaukumi</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Ievadi reģistrācijas datus:</h1>
            <div class="col-sm-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="nick">Sauklis:</label>
                        <input type="text" class="form-control" id="nick" name="nick">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Parole:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <button type="submit" class="btn btn-default" name="logIn">Pieslēgties</button>
                </form>
                <?php
                if(isset($_POST['logIn'])){
                    $db->getUsr($_POST['nick'],md5($_POST['pwd']));
                }
                ?>
            </div>
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
</body>
</html>