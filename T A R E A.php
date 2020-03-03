T A R E A
Desarrollar un formulario donde se capture de entrada: Nombre del alumno, matrícula, edad, carrera, email, telefono y tutor; almacenar los valores en un array y mostrarlos si la matricula se encuentra entre 100 y 1000.
 <form>
Nombre:
<input type="text" name="info[Nombre]" required>
<br>
Matricula:
<input type="text" name="info[Matricula]" required>
<br>
Edad:
<input type="number" name="info[Edad]" required>
<br>
Carrera:
<input type="text" name="info[Carrera]" required>
<br>
Email:
<input type="text" name="info[Email]" required>
<br>
Telefono:
<input type="text"  name="info[Telefono]" required>
<br>
Tutor:
<input type="text" name="info[Tutor]" required>
<br>
<input type="submit" name="Enviar!">
</form>
<?php
echo "NOMBRE:"; echo $Nombre;
echo"<br>";
if ($info[Matricula]>=100 and $info[Matricula]<=1000) {
	echo "MATRICULA"; echo $Matricula;
	echo"<br>";
}else {
	echo "MATRICULA FUERA DE RANGO";
	echo"<br>";
}
echo"EDAD: "; echo $Edad;
echo"<br>";
echo "Carrera: "; echo $Carrera;
echo"<br>";
echo "Email"; echo $Email;
echo"<br>";
echo "TELEFONO  DE EMERGENCIA: "; echo$telefono;
echo"<br>";
echo "TUTOR: "; echo $Tutor;
?>