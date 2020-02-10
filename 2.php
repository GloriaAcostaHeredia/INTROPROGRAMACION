2
<!DOCTYPE html>
<html>
<head>
	<title> APRBADO O DESAPOVADO </title>
</head>
<BODY>
	<H2>
		Ingresada la nota de un alumno si esta es menor ó igual que 10 muestre DESAPROBADO.
	</H2>
	<?php
	//SE IMPRIME LOS PAREMETROS PARA UNA CALIFICACION
	echo"TOME EN  CUANTA QUE LA CALIFICACION MAXIMA PARA UIN ALUMNO ES 100";
	//SE INGRESA 3 CLAIFICACIOES
	$N1=100;
	$N2=100;
	$N3=60;
	/*SE SACA EL PROMEDIO*/
	$PROM=($N1+$N2+$N3)/3;
	//SI LA CALIFICACIONE ES MAYO IGUAL A 70 ES UNA CALIFICAICON APROBATORIA
	ECHO "SU PROMEDIO FINAL ES DE $PROM";
	if ($PROM>=70) {
		echo"Calificacion aprobatoria";
	}
	//SI NO CUMPLE ESA CONDICION LASEGUNDA ES SI ES MENOR IGUAL A 69 ES REPROBATORIA
	if ($PROM<=69) {
		echo "Calificacion reprobatoria";
	}
	?>
</BODY>
</html>