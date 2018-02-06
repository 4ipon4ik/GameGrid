<?php
    require_once("./classes/autoload.php");
    $main = new Main_class();
    $template = new Template_class();
    $db = new DB_class();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
				<li class="active"><a href="index.php">Galvenā</a></li>
				<li><a href="games.php">Spēles</a></li>
				<li><a href="gallery.php">Galerija</a></li>
				<li><a href="prices.php">Cenas</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="contacts.php">Kontakti</a></li>
						<li><a href="contactus.php">Saziņa</a></li>
					</ul>
				</li>
				<li><a href="aboutus.php">Par Mums</a></li>
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
			<div class="col-sm-2 sidenav">
				<p><a href="#">Ziņas</a></p>
				<p><a href="#">Navi</a></p>
				<p><a href="#">Gācija</a></p>
                <p><a href="#">Visādi jaukumi</a></p>
			</div>
			<div class="col-sm-8 text-left">
				<h1>Laipni lūgti spēļu fanu portālā!</h1>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="./pictures/index/a.png" alt=":)">
						</div>

						<div class="item">
							<img src="./pictures/index/b.png" alt=":)">
						</div>

						<div class="item">
							<img src="./pictures/index/c.png" alt=":)">
						</div>

						<div class="item">
							<img src="./pictures/index/d.jpg" alt=":)">
						</div>

						<div class="item">
							<img src="./pictures/index/e.jpg" alt=":)">
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<hr>
				<p>Pakalpojumi:</p>
				<ul>
					<li>Ziņas un aktuāla informācija par konkrētu spēli mūsu mājaslapā</li>
					<li>Spēļu iegāde/noma</li>
					<li>Konsoļu noma mūsu veikalā</li>
				</ul>
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