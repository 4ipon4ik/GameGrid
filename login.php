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
        if(isset($_SESSION['userID'])){
        $db->header("index.php");
    } ?>
    <script>
        $(function () {
            $("#5").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation()?>
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