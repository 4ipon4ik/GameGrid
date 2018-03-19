<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saziņa</title>
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
        <div class="col-sm-8 text-left">
            <form action="contactus.php" method="post">
                <div class="form-group">
                    <label for="usr">Vārds:</label>
                    <input type="text" class="form-control" id="usr" placeholder="Ievadi vārdu" name="name">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadi e-pastu" name="email">
                </div>
                <div class="form-group">
                    <label for="comment">Ziņojums:</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Man garšo banāni" name="messege"></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="send">Sūtīt</button>
            </form>
            <?php
            if(isset($_POST['send'])){
                    $db->setMessege($_POST['name'],$_POST['email'],$_POST['messege']);
                    echo "Dati  saglabāti";
                }
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