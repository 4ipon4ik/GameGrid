<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>List</title>
    <?php Template_class::getLibs();
    if(($_SESSION['role']!=4)){
        header("location:login.php");
    } ?>
    <script>
        $(function () {
            $("#6").attr("class","active");
        });
    </script>
</head>
<body>
<?php Template_class::getNavigation()?>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2">
            <p><a href="#">Navi</a></p>
            <p><a href="#">Gācija</a></p>
            <p><a href="contacts.php">Kontakti</a></p>
            <p><a href="contactus.php">Saziņa</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <?php $db->getUsers()?>
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
<?php
if(@$_POST['userID'] != ''){
    $db->editUsr($_POST['fname'], $_POST['lname'], $_POST['mail'], $_POST['userID']);
}
if(isset($_POST['deleteUser'])){
    $db->deleteUsr($_POST['delUserID']);
}
?>
<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
</body>
</html>