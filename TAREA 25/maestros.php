<!DOCTYPE html>
<html>
<head>
<title>Maestros</title> 
</head>
<form action="COMP2.php" method="post"/>
<center> <h1> Bienvenido a continuacion el menu para maestros </h1></center>
<body bgcolor="pink">

<p>Nombre Completo: <input type="text" name="nombreM"/>   
   e-mail: <input type="email" name="emailM" /></p>
   Numero de empleado <input type="text" name="Nempleado">
   <td>
   <p>Seleccine tu area de trabajo:</p>
<select name="Area">
    <option>Area de trabajo:</option> 
    <option value="">Area de trabajo</option> 
    <option value="Docente">Docente</option> 
    <option value="Coordinación de Oficina Administrativa">Coordinación de Oficina Administrativa</option> 
    <option value="Área Económica">Área Económica</option> 
    <option value="Área de Colegiación y Comité de Ética">Área de Colegiación y Comité de Ética</option> 
    <option value="Área de Formación y Colegio Virtual">Área de Formación y Colegio Virtual</option> 
    <option value="Área de Comunicación y Formación">Área de Comunicación y Formación</option> 
</select>
</p>
   NOTA:LAS SIGUENTES PREGUNTAS(**) SON SOLO VALIDAD PARA DOCENTES
   **Cuantos grupos puede atender<input type="number" name="grupos">
   **Capacidad<input type="number" name="capacidad">


<p><input type="submit" value="Enviar!"> 
   <input type="reset" value="borrar todo"></p>
</form>
</body>
</html>