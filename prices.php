<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cenas</title>
    <?php Template_class::getLibs(); ?>
    <script>
        $(function () {
            $("#4").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation()?>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Cenas</a></p>
            <p><a href="#">Piegāde</a></p>
            <p><a href="#">Līgumi</a></p>
            <p><a href="#">U.c.</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <table class="table table-bordered table-striped">
                <tr><th>Pakalpojums</th><th>Cena</th></tr>
                <tr><td>PlayStation party</td><td>200€</td></tr>
                <tr><td>Konsole</td><td>50€</td></tr>
                <tr><td>Spēles</td><td>70€</td></tr>
                <tr><td>Bārs</td><td>20€</td></tr>
                <tr><td>VR</td><td>35€</td></tr>
            </table>
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