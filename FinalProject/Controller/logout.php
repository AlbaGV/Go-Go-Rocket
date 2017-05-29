<?php
session_start();
session_destroy();
echo "Sesión cerrada correctamente";
header('location: ../View/indexApp.php');
?>