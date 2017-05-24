
<?php
# conecta a la base de datos
require_once '../Model/Ranking.php';
//si es igual a ajax

	// Obtiene todas las propiedades
$data['ranking'] = Ranking::getAllListRanking();
	include '../View/rankingView.php';



