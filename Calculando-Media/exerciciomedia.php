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
		$n1 = isset($_GET["n1"])?$_GET["n1"]:00;
		$n2 = isset($_GET["n2"])?$_GET["n2"]:00;
		$m = ($n1+$n2)/2;
		
		if($m <5) {
			$notaFinal = " Reprovado";
			echo"Sua média foi: $m e situação <font color='#FF0000'>$notaFinal</font>";
		}
		elseif($m>=5&&$m<7){
			$notaFinal = " Recuperação";
			echo"Sua média foi: $m e situação <font color='#D7DF01'>$notaFinal</font>";
		}
		else {
			$notaFinal = " Aprovado";
			echo"Sua média foi: $m e situação <font color='##0000FF'>$notaFinal</font>";
		}
	?>
	<a href="exercicioa.html">Voltar</a>
</div>
</body>
</html>