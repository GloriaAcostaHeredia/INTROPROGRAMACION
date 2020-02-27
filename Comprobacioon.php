<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<h1>Resultados</h1>
	<?php
    echo $_POST['Multi'];echo " "; echo "X";echo " "; echo $_POST['a']; 
    echo "<h3>Resultado</h3><br>";
    echo $_POST['a']*$_POST['Multi'];
?>
<p>Volver a consultar: <a href="index.php">VOLVER</a>