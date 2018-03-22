<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 25.02.2018
 * Time: 20:14
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
           $("[name='setU']").on("click",function (){
               var el = $(this).parent().siblings().eq(1);
               var cont = el.text();
               var nel = $("<input>").attr("type","text").val(cont);
               el.html(nel);
               $(this).attr("name","setU1").text("Saglabāt");
           });
            $("[name='setU1']").on("click",function (){
                var el = $(this).parent().siblings().eq(1);
                var val = el.children().val();
                alert(val);
                el.children().remove();
                el.text(val);
                $(this).attr("name","setU");
            });
            $("[name='delfav'").on("click",function () {
                $("#fav").slideToggle(500);
            })
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
            <?php $db->getProfile($_SESSION['userID']);
            $db->getFavorites($_SESSION['userID']);
            if(isset($_POST['delfav'])){
                $db->delFavorite($_POST['GameID']);
            }?>
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