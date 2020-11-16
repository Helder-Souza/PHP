<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="assets/css/estilom.css">
	<title></title>
</head>
<body>
<div id="interface">
<header id="cabeçalho">
<img id="icone" src="assets/img/porcent.png"/>
</header>
	<?php
		$preco = $_GET["p"];
		echo "<br/>O preço do produto é R$ ". number_format($preco, 2);
		$preco += ($preco*10/100);
		echo "<br>O novo preço com 10% de aumento será R$ ". number_format($preco, 2);
	?>
</div>
</body>
</html>