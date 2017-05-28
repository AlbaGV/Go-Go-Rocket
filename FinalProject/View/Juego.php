
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Go!Go!Rocket</title>
<link rel="icon" type="image/svg" href="img/logoRocket.svg" />
<link href="../View/Style_Admin/CssWebPage.css" rel="stylesheet">
<script type="text/javascript" src="phaser.js"></script>
<script type="text/javascript">
var nickname = "<?php print($_GET['nickname']) ?>";
</script>
<script type="text/javascript" src="../Controller/game.js"></script>

</head>
<body>

	
	<div class="container">
		<header>

			<img alt="logo" src="img/logoRocket.svg"> 
		</header>

		<nav>
			<ul>
				<li><a href="indexApp.php">Inicio</a></li>
				<li><a href="rankingView.php">Ranking</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="multimedia.php">Multimedia</a></li>
			</ul>
		</nav>
		
		<aside>	
		<p>Player: <?php print($_GET['nickname']) ?></p></aside>

		<section id="game" style="background-image: url('img/starrysky.jpg');">
				

		</section>

		<footer>
			<p>
				<a href="../Controller/index.php">Admin</a>
				<br>Puedes ver el código fuente en <a href="http://lwp-l.com/s2694">http://lwp-l.com/s2694</a>
			</p>

		</footer>

	</div>
</body>

</html>
