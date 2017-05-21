
<html>
<head>
<meta charset="utf-8" />
<title>Juego</title>
<script type="text/javascript" src="phaser.js"></script>
<script type="text/javascript">
var nickname = "<?php print($_GET['nickname']) ?>";
</script>
<script type="text/javascript" src="../Controller/game.js"></script>

</head>

<body>
 	<p><?php print($_GET['nickname']) ?></p>
	<div id="game"></div>
</body>

</html>
