<?php


error_reporting(E_ALL ^ E_NOTICE);
require_once '../Model/Ranking.php';


$gameAdd = new Ranking("","",$_POST[nicknameNew],$_POST[scoreNew]);

$gameAdd->insertGame();