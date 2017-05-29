<?php
session_start();
include_once "../Model/Connection.php";

function verificar_login($user,$password,&$result) {
	$connection = game::conect();
	$consulta2 = $connection->query("SELECT * FROM pass WHERE usuario = '$user' and password = '$password'");
	$count = 0;
	//$pass = $consulta2->fetchObject()
	while($row = $consulta2->fetchObject())
	{
		$count++;
		$result = $row;
	}
	
	if($count == 1)
	{
		return 1;
	}
	
	else
	{
		return 0;
	}
}

if(!isset($_SESSION['userid']))
{
	if(isset($_POST['login']))
	{
		if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
		{
			$_SESSION['userid'] = $result->idusuario;
			header("location:login.php");
		}
		else
		{
			echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
		}
	}
	?>
<title>Go!Go!Rocket</title>  
<link rel="icon" type="image/svg" href="img/logoRocket.svg" />
<link href="../View/Style_Admin/login.css" rel="stylesheet">
  
<form action="" method="post" class="login"> 
    <div><label>Username</label><input name="user" type="text" ></div> 
    <div><label>Password</label><input name="password" type="password"></div> 
    <div><a href="indexApp.php">Volver</a><input name="login" type="submit" value="Login"></div> 
</form> 
<?php 
} else { 
    echo 'Su usuario ingreso correctamente.'; 
    header("Refresh: 0; url=../Controller/index.php", true, 303); // recarga la página
} 
?>