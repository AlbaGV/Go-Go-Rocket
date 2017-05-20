<?php

error_reporting(E_ALL ^ E_NOTICE); //Que me notifique de todos los errores menso de la notice
// Conexión a la base de datos
require_once '../Model/Ranking.php';

$originalDate = "$_POST[formatDateUpdate]"; //Cambio el formato de la fecha para que se pueda almacenar el BD
$newDate = date("Y-m-d", strtotime($originalDate));

$rankingUpdate = new Ranking($_POST[idUpdate], $newDate, $_POST[nicknameUpdate],$_POST[scoreUpdate]);

$rankingUpdate->update();

