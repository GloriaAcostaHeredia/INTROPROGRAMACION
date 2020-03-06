<!DOCTYPE hyml>
<html>
<head>
<title>Hola profe como esta segundo dia</title>
</head>
<body bgcolor="pink">
<center> <h1> CALIFICACIONES </h1></center>
<form>
Nombre:
<input type="text" name="Nombre" required>
<br>
Calificaiones:
<input type="number" name="Cali" required>
<input type="number" name="Cali2" required>
<br>
<input type="submit" name="Enviar!">
<?php
for ($col=0; $col <8 ; $col++) { 
    echo"<li>" $_POST['Nombre'] "</li>";
    echo"<li>" $_POST['Cali'] "</li>";
    echo"<li>" $POST['Cali2'] "</li>";
}

?>


