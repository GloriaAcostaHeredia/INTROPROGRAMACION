11/2/2020
<!DOCTYPE html>
<html>
<head>
	<title> C A M B I O   Y  F U E R A </title>
</head>
<BODY>
	<H2>
	  Ingresando una cantidad, que sea menor o igual a 100 dolares realice el tipo de cambio a pesos
	</H2>
	<?php
	$Cant=99;
	if ($Cant<=100) {
		$T=$Cant/18.66;
		echo "Su cambio es de $T";
	}
	if ($Cant>100) {
		echo"Su cambio es de $Cant";
	}
	?>
</BODY>
</html>