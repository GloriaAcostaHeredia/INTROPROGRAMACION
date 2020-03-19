<!DOCTYPE html>
<html>
<head>
<title>Alumnos</title> 
</head>
<form action="COMP.php" method="post"/>
<center> <h1> Bienvenido a continuacion el menu para alumnos </h1></center>
<body bgcolor="pink">

<p>Nombre Completo: <input type="text" name="nombre"required/>   
   e-mail: <input type="email" name="email" required/>
   Matricula <input type="text" name="matricula"required></p>
<table>
   <tr>
   <td>
   Carrera;<br/>
   <input type="radio" name="carrera" value="Ingenieria en Sistemas Automotrices"/> 
   Ingenieria en Sistemas Automotrices<br/>
   <input type="radio" name="carrera" value="Ingenieria en Tecnologias de Manufactura"checked="checked"/> 
   Ingenieria en Tecnologias de Manufactura <br/>
   <input type="radio" name="carrera" value="Ingenieria en Mecatronica"/> 
   Ingenieria en Mecatronica<br/>
   <input type="radio" name="carrera" value="Ingenieria en Tecnologias de la Informacion"/> 
   Ingenieria en Tecnologias de la Informacion<br/>
   </td>
</table>
<p>Seleccine cutrimestre:</p>
<select name="cuatri"required>
    <option>Cuatrimestre:</option> 
    <option value="0">0</option> 
    <option value="1">1</option> 
    <option value="2">2</option> 
    <option value="3">3</option> 
    <option value="4">4</option> 
    <option value="5">5</option> 
    <option value="6">6</option> 
</select>
</p>
<p><input type="submit" value="Enviar!"> 
   <input type="reset" value="borrar todo"></p>
</form>
</body>
</html>