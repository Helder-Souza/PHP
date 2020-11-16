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
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade = date("Y") - $ano;
		echo "$nome é do $sexo e tem $idade anos";
	?>
	<a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>