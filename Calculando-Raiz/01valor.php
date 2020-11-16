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
<img id="icone" src="assets/img/mun.png"/>
</header>
	<?php
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de $valor é igual a ". number_format($rq, 2);
	?>
	<a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>