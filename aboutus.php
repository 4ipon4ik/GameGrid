<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galvenā</title>
    <?php Template_class::getLibs(); ?>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="./images/logo.png" class="logo" alt=""></a>
		    </div>
		    <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
				<li><a href="index.php">Galvenā</a></li>
				<li><a href="gamesList.php">Spēles</a></li>
				<li><a href="gallery.php">Galerija</a></li>
				<li><a href="prices.php">Cenas</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="contacts.php">Kontakti</a></li>
						<li><a href="contactus.php">Saziņa</a></li>
					</ul>
				</li>
                <?php if(!isset($_SESSION['nick'])){
                    echo '<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profils<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="registration.php">Reģistrēties</a></li>
                        <li><a href="login.php">Pieslēgties</a></li>
                    </ul>
                </li>';
                }
                else{
                    echo '<li><a href="#">'.$_SESSION['username'].'</a></li>
                        <li><form action="" method="post"><button class="btn btn-primary" name="i">Iziet</button></form></li>
                        <li><a href="usrList.php">Lietotāji</a></li>';
                    if(isset($_POST['i'])){
                        session_destroy();
                        header('location:index.php');
                    }
                }?>
				<li class="active"><a href="aboutus.php">Par Mums</a></li>
		    </ul>
			<form class="navbar-form navbar-right" action="#">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Meklēt">
					<div class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<i class="glyphicon glyphicon-search"></i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</nav>
	<div class="container-fluid text-center main">
		<div class="row content">
			<div class="col-sm-2">
				<p><a href="#">Ziņas</a></p>
				<p><a href="#">Navi</a></p>
				<p><a href="#">Gācija</a></p>
                <p><a href="#">Visādi jaukumi</a></p>
			</div>
			<div class="col-sm-8 text-left">
				<h1>Laipni lūgti spēļu fanu portālā!</h1>
				<p>Spelufans.lv  ir veidots kā platforma gan spēļu cienītājiem, gan to izstrādātājiem. Resurss agrīnā stadijā tika veidots ar ideju sakļaut populārāko spēļu cienītājus, izvietojot spēļu serverus, kur tie var satikties un spēlēt kopā. Šoreiz mērķis ir nedaudz mainīts - dot uzsvaru uz kopienas informētību un tās saliedētību.</p>
				<p>Šodien, svinot vietnes atklāšanu, spēļu cienītāji var viens ar otru komunicēt un dalīties ar atgadījumiem spēlēs, publicēt ekrānšāviņus, pārdomas, mūziku, vai diskutēt par spēlēm. Spēļu izstrādātāji var dalīties ar izstrādātajām spēlēm, informāciju par to izstrādes procesu un apmainīties pieredzē ar citiem izstrādātājiem.</p>
				<p>Papildus kopienas sajūtai biedriem tiek dota iespēja uzzināt par jaunumiem spēļu industrijā, atvieglot nākošās spēles izvēli, sekojot līdzi redakcijas veidotajiem spēļu apskatiem. Arī Strike redakcija ir entuziastiski spēļu cienītāji, kas saprot mūsdienu spēlētāju problēmas, piemēram, nepieciešamību atrast spēļu biedrus. Tieši sādam nolūkam tiek aktīvi izstrādāta sistēma, kas sapulcina spēlēt gribētājus, dod iespēju spēlēt kopā ar spelufans.lv biedriem.</p>
				<p>Portāls atblastīs pašmāju lietotāju Twitch un YouTube kanālus, atvēlot atsevišķu sadaļu, veidos regulārus konkursus, kur varēs piedalīties un iegūt dažādas balvas ikviens gribētājs. Izlemjot atbalstīt Strike.lv portāla darbību, lietotāji var iegādāties PRO konta abonamentu un iegūt papildus privilēģijas, dalību pasākumos, katru mēnesi piedalīties izlozē ar iespēju papildināt savu krāšņo spēļu tematikas T-kreklu kolekciju.</p>
				<p>Aktuālākie jaunumi atspoguļosies arī podkāstu un Twitch raidījumu formātā. Skatītājiem tiks dota iespēja piedalīties izlozēs un laimēt arī vērtīgas balvas raidījuma norises laikos. Tiem, kas nepaspēs noskatīties tiešraides, raidījumu ieraksti tiks publicēti spelufans.lv YouTube kanālā.</p>
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