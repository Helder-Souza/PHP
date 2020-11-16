<!DOCTYPE html>
<html>
<head>
	<?php
		$txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
		$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
	?>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="assets/css/style.css">
	<title></title>
	<style>
		span.texto {
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
</head>
<body>
<div id="interface">
<header id="cabeçalho">
<img id="image" src="assets/img/icone.jpg"/>
</header>
	<?php
		echo "<span class='texto'>$txt</span><br/>";
	?>
	<a href="03exercicio.html">Voltar</a>
</div>
</body>
</html>