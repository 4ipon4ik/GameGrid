<?php
/**
 * Created by PhpStorm.
 * User: edp1
 * Date: 08.02.2018
 * Time: 10:21
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
            <li class="active"><a href="registration.php">Reģistrācija</a></li>
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
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label for="email">E-pasta adrese:</label>
                        <input type="email" class="form-control" id="email" placeholder="peteris@mail.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Parole:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                    </div>
                    <div class="form-group">
                        <label for="nick">Sauklis:</label>
                        <input type="text" class="form-control" id="nick" name="nick">
                    </div>
                    <div class="form-group">
                        <label for="fname">Vārds:</label>
                        <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="lname">Uzvārds:</label>
                        <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                    <div class="form-group">
                        <label for="stm">Steam profils:</label>
                        <input type="text" class="form-control" id="stm" name="stm">
                    </div>
                    <div class="form-group">
                        <label for="cty">Pilsēta:</label>
                        <input type="text" class="form-control" id="cty" name="cty">
                    </div>
                    <div class="form-group">
                        <label for="ctry">Valsts:</label>
                        <select class="form-control" id="ctry" name="ctry">
                            <option value="Latvija">Latvija</option>
                            <option value="Krievija">Krievija</option>
                            <option value="ASV">ASV</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bthdy">Dzimšanas datums:</label>
                        <input type="date" class="form-control" id="bthdy" name="bthdy">
                    </div>
                    <button type="submit" class="btn btn-default" name="saveUsr">Submit</button>
                </form>
                <?php
                if(isset($_POST['saveUsr'])){
                    $db->saveUsr($_POST['nick'],$_POST['email'],md5($_POST['pwd']),$_POST['fname'],$_POST['lname'],$_POST['stm'],$_POST['cty'],$_POST['ctry'],$_POST['bthdy']);
                    echo "Dati  saglabāti";
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
            <div>
                <a href="usrList.php">Lietotāji</a>
            </div>
            <div>
                <a href="login.php">Pieslēgties</a>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
</body>
</html>