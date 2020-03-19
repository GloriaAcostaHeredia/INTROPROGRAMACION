<?php
include("conexion.php");
if(isset($_POST['Enviar!'])){
    if(strlen($_POST['nombreM'])>=1 ){
        $nombreM = trim($_POST['nombreM']);
        $emailM = trim($_POST['emailM']);
        $Nemplado = trim($_POST['Nemplado']);
        $Area = trim($_POST['Area']);
        $grupos = trim($_POST['grupos']);
        $capacidad = trim($_POST['capacidad']);
        $consulta = "INSERT INTO maestros(nombreM, emailM, Nemplado, Area, grupos, capacidad) VALUES ('$nombreM','$emailM','$Nemplado','$Area','$grupos','$capacidad')"
        $resultado = mysqli_query($conex , $consulta);
    if ($resultado) {
        ?>
        <h3> Te has guardado su informacion correctamente </h3>
    } else{
        <h3> Ups error </h3>
    }
    }

}