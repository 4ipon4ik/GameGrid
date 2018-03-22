<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 19.03.2018
 * Time: 6:28
 */
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <?php Template_class::getLibs();
    if(!isset($_SESSION['userID'])){
        header("location:login.php");
    } ?>
    <script>
        $(function () {
            $("#5").attr("class","active");
        });
        $(function () {
           $(".setU").on("click",function (){
               $(this).parent().siblings().eq(1).html("<form method='post'><input type='text'><button class='btn btn-danger' name='set'>:)</button></form>");
           });
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation()?>
<div class="container-fluid text-center main">
    <div class="row content">
        <aside class="col-sm-2">
            <p><a href="#">Navi</a></p>
            <p><a href="#">Gācija</a></p>
            <p><a href="./contacts.php">Kontakti</a></p>
            <p><a href="./contactus.php">Saziņa</a></p>
        </aside>
        <div class="col-sm-8">
            <?php $db->getProfileEditForm($_SESSION['userID']);
                if(isset($_POST['saveData'])){
                    $db->editProfile($_SESSION['userID'], $_POST['mail'], $_POST['fname'],$_POST['lname'], $_POST['steam'],$_POST['ctry'], $_POST['cty'],$_POST['bday']);
                }
            ?>
        </div>
        <aside class="col-sm-2">
            <div class="well">
                <p>Reklāma</p>
            </div>
            <div class="well">
                <p>Reklāma</p>
            </div>
        </aside>
    </div>
</div>
<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
</body>
</html>