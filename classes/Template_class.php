<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 07.02.2018
 * Time: 0:49
 */
class Template_class
{
    static function getLibs(){
        echo '<meta charset="UTF-8">
                <!--js files-->
                <script src="./libs/jquery/jquery-3.2.1.min.js"></script>
                <script src="./libs/bootstrap3/js/bootstrap.min.js"></script>
                <script src="./libs/fontawesome/js/fontawesome-all.min.js"></script>
                <script src="./js/main.js"></script>
                <!--css files-->
                <link rel="stylesheet" href="./libs/bootstrap3/css/bootstrap.min.css">
                <link rel="stylesheet" href="./css/main.min.css">
                <link rel="icon" type="image/vnd.microsoft.icon" href="./images/favicon-gamepad.ico"/>';
    }
    static function getNavigation(){
        echo '<nav class="navbar navbar-inverse">
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
                        <li id="1"><a href="./index.php">Galvenā</a></li>
                        <li id="2"><a href="./gamesList.php">Spēles</a></li>
                        <li id="3"><a href="./gallery.php">Galerija</a></li>
                        <li id="4"><a href="./prices.php">Cenas</a></li>';
        if(!isset($_SESSION['userID'])){
                echo '<li class="dropdown" id="5">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profils<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./registration.php">Reģistrēties</a></li>
                        <li><a href="./login.php">Pieslēgties</a></li>
                    </ul>
                </li>';
        }
        else{
            echo '<li id="5"><a href="./profile.php">'.$_SESSION['username'].'</a></li>
                 <li><form method="post"><button class="btn btn-primary" name="logOut">Iziet</button></form></li>';
            if(isset($_POST['logOut'])){
                session_destroy();
                header('location:index.php');
            }
            if($_SESSION['role']==4){
                echo '<li id="6"><a href="./usrList.php">Lietotāji</a></li>';
            }
        }
        echo '<li class="dropdown" id="7">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./contacts.php">Kontakti</a></li>
                                <li><a href="./contactus.php">Saziņa</a></li>
                            </ul>
                        </li>
                        <li id="8"><a href="./aboutus.php">Par Mums</a></li>
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
            </nav>';
    }
}