<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ejemplo web responsive</title>
<meta name="title" content="Ejemplo web responsive">
<meta name="keywords" content="código,css,css3,web,responsive">
<link href="../View/Style_Admin/CssWebPage.css" rel="stylesheet">


</head>

<body>

	<div class="container">
		<header>

			<h1>Ejemplo web responsive</h1>
		</header>

		<nav>
			<ul>
				<li><a href="indexApp.php">Inicio</a></li>
				<li><a href="rankingView.php">Ranking</a></li>
			</ul>
		</nav>

		<section>

			<table class="table table-bordered" id="tabladatos">
    <?php
    require_once '../Model/Ranking.php';
    //si es igual a ajax
    
    // Obtiene todas las propiedades
    		$data['ranking'] = Ranking::getAllListRanking();
				foreach ( $data ['ranking'] as $allRanking ) {
					?>
      <tr id="ranking_<?= $allRanking->getId() ?>" align="center"
					data-id="<?= $allRanking->getId() ?>">


					<td class="date"><?= $allRanking->getDate() ?></td>
					<td class="nickname"><?= $allRanking->getNickname() ?></td>
					<td class="score"><?= $allRanking->getScore() ?></td>



				</tr>


      <?php
				}
				?>
  </table>
		</section>

		<footer>
			<p>
				<a href="http://www.lawebdelprogramador.com">http://www.lawebdelprogramador.com</a>
				<br>Puedes ver el código fuente en <a href="http://lwp-l.com/s2694">http://lwp-l.com/s2694</a>
			</p>

		</footer>

	</div>
</body>
</html>