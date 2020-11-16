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
		$atual = $_GET["aa"]; //essa linha vai pegar o ano na url
		echo "<br/>O ano atual é $atual e o ano anterior é ". --$atual;
	?>
</div>
</body>
</html>