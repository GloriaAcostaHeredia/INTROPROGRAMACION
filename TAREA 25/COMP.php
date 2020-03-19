<?php
include("conexion.php");
if(isset($_POST['Enviar!'])){
    if(strlen($_POST['nombre'])>=1 ){
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $matricula = trim($_POST['matricula']);
        $carrera = trim($_POST['carrera']);
        $cuatri = trim($_POST['cuatri']);
        $consulta = "INSERT INTO alumnos(nombre, email, matricula, carrera, cuatri) VALUES ('$nombre','$email','$matricula','$carrera','$cuatri')"
        $resultado = mysqli_query($conex , $consulta);
    if ($resultado) {
        ?>
        <h3> Te has inscrito correctamente </h3>
    } else{
        <h3> Ups error </h3>
    }
    }

} 

