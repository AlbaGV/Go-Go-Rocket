<?php

require_once '../Model/Ranking.php';
$rankingDelete = new Ranking($_GET['id']);
$rankingDelete->delete();
