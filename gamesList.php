<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Spēles</title>
    <?php Template_class::getLibs(); ?>
    <script>
        $(function () {
            $("#2").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation() ?>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2">
            <p><a href="#">Katalogs</a></p>
            <p><a href="#">Bildes</a></p>
            <p><a href="#">Video</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <a href="./game.php?GameID=1"><img src="./pictures/games/Counter Strike.jpg" alt="Counter Strike GO" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
            <a href="./game.php?GameID=3"><img src="./pictures/games/Assassin's creed Origins.jpg" alt="Assassin's creed Origins" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
            <a href="./game.php?GameID=6"><img src="./pictures/games/Call of Duty WWII.jpg" alt="Call of Duty WWII" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
            <a href="./game.php?GameID=2"><img src="./pictures/games/Grand theft Auto V.jpg" alt="Grand theft Auto V" class="img-responsive col-md-4 col-lg-3 col-sm-6 img-thumbnail"></a>
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