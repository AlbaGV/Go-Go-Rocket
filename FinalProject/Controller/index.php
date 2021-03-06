<!DOCTYPE html>
<html lang="en">
   <?php
			session_start ();
			if (@$_SESSION ['userid']) {
				?>
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ranking Administrator</title>
<link rel="icon" type="image/svg" href="../View/img/logoRocket.svg" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css"
	href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"
	integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
	crossorigin="anonymous"></script>
<script
	src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"
	type="text/javascript"></script>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript">
//Buscador
function buscar_ajax(cadena){
	$.ajax({
	type: 'POST',
	url: 'buscar.php',
	data: 'cadena=' + cadena,
	success: function(respuesta) {
		//Copiamos el resultado en #mostrar
		$('#mostrar').html(respuesta);
   }
});
}
</script>
<link href="../View/Style_Admin/Css.css" rel="stylesheet">
<link href="../View/Style_Admin/tableCss.css" rel="stylesheet">

<style>
.dialogo {
	display: none;
}

table {
	text-align: center;
}

#seleccion, h4 {
	float: right;
	margin-top: 10px;
	margin-right: 10px;
}
</style>
</head>
<body>

	<h1>Ranking</h1>

	<div id="select">
		<b id="ordenarPor">Order by</b> <select name="campos" id="campos">
			<option value="1">Id</option>
			<option value="2">Date</option>


			<option value="3">Nickname</option>
			<option value="4">Score</option>

		</select> <select name="forma" id="forma">
			<option value="ASC">Asc</option>
			<option value="DESC">Desc</option>

		</select>
	</div>
	<br>




	<div class="container-fluid">

			<div id="controles">
			<b id="new" 
				title="New Score">new</b> - 
							<a href="logout.php"><b>logout</b></a> - 
							<a href="../View/indexApp.php"><b>inicio</b></a>
			</div>	

		<hr>

		<div class="row">
			<div class="col-xs-12">

				<div id="loader" class="text-center"></div>
				<div class="outer_div"></div>
				<!-- Datos ajax Final -->
			</div>

		</div>


		<div id="dialogueDelete" class="dialogue" title="Delete Score">
			<p>Delete this score?</p>
		</div>

		<div id="dialogueUpdate" class="dialogue" title="Update Score">
        <?php
				
				include "../View/FormUpdate.php";
				?>
      </div>


		<div id="dialogueNew" class="dialogue" title="New Score">
        <?php
				
				include "../View/FormNew.php";
				?>
      </div>

	</div>
	<script>

    </script>
</body>
  <?php
			} else {
				echo "Acceso denegado";
			}
			?>
</html>
