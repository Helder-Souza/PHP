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
<img id="icone" src="assets/img/calendario.png"/>
</header>
	<?php
		$a = 3;
		$b = &$a;
		$b += 5;
		echo "<br/>A variavel A vale $a";
		echo "<br/>A variavel B vale $b<br/>";
		
		//operador logico//
		
		$ano = $_GET["an"];
		$idade = 2020 - $ano;
		echo "Quem nasceu em $ano tem idade de $idade anos.";
		$tipo = ($idade>=18 && $idade<65)?"Obrigatorio":"Não Obrigatorio<br/>";
		echo "E dessa forma seu voto é $tipo";
	?>
</div>
</body>
</html>