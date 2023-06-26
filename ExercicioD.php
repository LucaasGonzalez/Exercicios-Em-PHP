<!doctype HMTL>
<html lang = "pt-br">
	<head>
		<title> Calculadora </title>
		<meta charset = "utf-8">
	</head>
	<body>
		<?php
			$peso = 30;
			if ($peso<= 18.5) {
			echo "</br>Seu IMC é de " . $peso . ". Você está abaixo do peso normal.";
			echo "</br>";
			echo "</br>Cuide sempre da sua saúde. Procure um médico especialista.";
			}
			
			else if ($peso >= 18.5 && $peso <= 25.0) {
			echo "</br>Seu IMC é de " . $peso . ". Você está com o peso normal.";
			echo "</br>";
			echo "</br>Cuide sempre da sua saúde.";
			}
			
			else if ($peso >= 25.0 && $peso <= 30.0) {
			echo "</br>Seu IMC é de " . $peso . ". Você está acima do peso normal.";
			echo "</br>";
			echo "</br>Cuide sempre da sua saúde. Pratique mais atividades físicas.";
			}
			
			else if ($peso >= 30.0) {
			echo "</br>Seu IMC é de " . $peso . ". Você está com obesidade.";
			echo "</br>";
			echo "</br>Cuide sempre da sua saúde. Procure um médico especialista.";
			
			}
		?>
	
	</body>

</html>