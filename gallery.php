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
    <script>
        $(function () {
            $("#3").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation() ?>
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