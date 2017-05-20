<?php



error_reporting(E_ALL ^ E_NOTICE);
require_once '../Model/Ranking.php';


$rankingAdd = new Ranking("",$_POST[formatDateNew],$_POST[nicknameNew],$_POST[scoreNew]);

$rankingAdd->insert();
