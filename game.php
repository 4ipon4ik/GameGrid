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
            <?php $db->getGamepage($_GET['GameID']);
            if(isset($_POST['addfav'])){
                $db->setFavorite($_GET['GameID'],$_SESSION['userID']);
            }?>
            <div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary" name="setC">Atstāt kommentāru</button>
                    </div>
                </form>
            </div>
            <?php
                if(isset($_POST['setC'])){
                    $db->setComment($_SESSION['userID'],$_GET['GameID'],$_POST['comment'],date("y-m-d H:i:s",time()));
                }
                $db->getComment($_GET['GameID'])
            ?>
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