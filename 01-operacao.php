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
<img id="icone" src="assets/img/resultado.png"/>
</header>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "Os valores passados foram $n1 e $n2<br/>";
		$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
		echo "O resultado será $r<br/>";
		
		//diferença entre igual e identico abaixo //
		
		$a = 3;
		$b = "3";
		$r = ($a === $b)?"Sim":"Não";
		echo "As variaveis A e B são identicas? $r<br/>";
	?>
</div>
</body>
</html>