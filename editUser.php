<?php
/**
 * Created by PhpStorm.
 * User: edp1
 * Date: 08.02.2018
 * Time: 15:51
 */
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galvenā</title>
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
            <a class="navbar-brand" href="./index.php"><img src="./images/logo.png" class="logo" alt=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
            <li><a href="./index.php">Galvenā</a></li>
            <li><a href="./gamesList.php">Spēles</a></li>
            <li><a href="./gallery.php">Galerija</a></li>
            <li><a href="./prices.php">Cenas</a></li>
            <?php if(!isset($_SESSION['nick'])){
                echo '<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profils<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./registration.php">Reģistrēties</a></li>
                        <li><a href="./login.php">Pieslēgties</a></li>
                    </ul>
                </li>';
            }
            else{
                echo '<li><a href="./profile.php">'.$_SESSION['username'].'</a></li>
                        <li><form action="" method="post"><button class="btn btn-primary" name="i">Iziet</button></form></li>';
                if(isset($_POST['i'])){
                    session_destroy();
                    header('location:index.php');
                }
                if($_SESSION['role']==4){
                    echo '<li><a href="./usrList.php">Lietotāji</a></li>';
                }
            }?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./contacts.php">Kontakti</a></li>
                    <li><a href="./contactus.php">Saziņa</a></li>
                </ul>
            </li>
            <li><a href="./aboutus.php">Par Mums</a></li>
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
            <form action="usrList.php" method="post">
                <?php $db->editUsrForm($_GET["user"]); ?>
                <button type="submit" class="btn btn-primary" name="savedata">Saglabāt</button>
            </form>
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