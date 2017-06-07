<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Go!Go!Rocket</title>
<link rel="icon" type="image/svg" href="img/logoRocket.svg" />
<link href="../View/Style_Admin/CssWebPage.css" rel="stylesheet">



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
			<form action="Juego.php" method="GET" name="formNickname"
				id="formNickname">
				Nickname: <input type="text" name="nickname" value="" required><br>
				<input type="submit" value="   Play!!   ">
			</form>
		</aside>

		<section>
			<video width="320" height="180" controls>
				<source src="video/gameplay.mp4" type="video/mp4">
				<source src="video/gameplay.ogg" type="video/ogg">
				Your browser does not support the video tag.
			</video>

		</section>

		<footer>
			<p>
				<a href="https://github.com/AlbaGV/Go-Go-Rocket/raw/master/documentacion/Funcionalidades.pdf">Funcionalidades</a>---<a href="https://github.com/AlbaGV/Go-Go-Rocket">Codigo Completo</a> <br>© Alba Garcia Van der Sander
			</p>

		</footer>

	</div>
</body>
</html>