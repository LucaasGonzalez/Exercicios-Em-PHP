<!doctype HMTL>
<html lang = "pt-br">
	<head>
		<title> Calculadora </title>
		<meta charset = "utf-8">
	</head>
	<body>
		<?php
			$num1 = 15; $num2 = 10;
			$soma = 0; $subtracao = 0;
			$divisao = 0; $multiplicacao = 0;
			$restoNum1 = 0; $restoNum2 = 0;
			echo ":::::::: Calculadora para operações básicas :::::::::";
			echo "</br>";
			echo "</br>";
			$soma =  $num1 + $num2;
			echo "</br> A soma dos valores " . $num1 . " e " . $num2 . " é = " . $soma . ".";
			echo "</br>";
			$subtracao =  $num1 - $num2;
			echo "</br> A subtração dos valores " . $num1 . " e " . $num2 . " é = " . $subtracao . ".";
			echo "</br>";
			$divisao =  $num1 / $num2;
			echo "</br> A divisão dos valores " . $num1 . " e " . $num2 . " é = " . $divisao . ".";
			echo "</br>";
			$multiplicacao =  $num1 * $num2;
			echo "</br> A multiplicação dos valores " . $num1 . " e " . $num2 . " é = " . $multiplicacao . ".";
			echo "</br>";
			$multiplicacao =  $num1 % $num2;
			echo "</br> O resto da divisão dos valores " . $num1 . " e " . $num2 . " é = " . $restoNum1 . ".";
			echo "</br>";
		?>
	</body>
</html>