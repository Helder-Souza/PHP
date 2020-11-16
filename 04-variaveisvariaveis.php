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
<img id="icone" src="assets/img/variavel.png"/>
</header>
	<?php
		$x = "abc";
		$$x = "def";
		echo "O conteúdo da variavel x é $x";
		echo "<br/>A variavel ABC criada recebeu o valor $abc";
	?>
</div>
</body>
</html>