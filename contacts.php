<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kontakti</title>
    <?php Template_class::getLibs(); ?>
    <script>
        $(function () {
            $("#7").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation() ?>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2">
            <p><a href="#">Navi</a></p>
            <p><a href="#">Gācija</a></p>
            <p><a href="contacts.php">Kontakti</a></p>
            <p><a href="contactus.php">Saziņa</a></p>
        </div>
        <div class="col-sm-8 text-center">
            <p>SIA “Spēļu fans”</p>
            <p>Robežu 2, Rīga, LV-1111</p>
            <p>Tālrunis: +37126164798</p>
            <p>E-pasts: sfans@gmail.com</p>
            <p>Darba laiks:</p>
            <p>P. 14-18</p>
            <p>O. 14-18</p>
            <p>T. 14-18</p>
            <p>C. 14-18</p>
            <p>Pk. 14-16</p>
            <p>S. Slēgts</p>
            <p>Sv. Slēgts</p>
            <div class="col-sm-12 text-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.04546185604!2d24.084808641941976!3d56.91999789730693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eed04bb9242559%3A0x8e8cfbf89fce73d8!2zUm9iZcW-dSBpZWxhIDIsIFplbWdhbGVzIHByaWVrxaFwaWxzxJN0YSwgUsSrZ2EsIExWLTEwMDQ!5e0!3m2!1sru!2slv!4v1511623771854" width="1080" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
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