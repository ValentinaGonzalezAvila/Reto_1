<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_retoadmin";
$password = "J<HY8lIU)pfX&=+C";
$mysqli = new mysqli($serverName, $username, $password,"id17908676_retopostobon");
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

$Nom=$_POST['nombre'];
$Ide=$_POST['identificacion'];
$Nomr=$_POST['nombre_representante'];    
$Tel=$_POST['telefono'];  
$Dir=$_POST['direccion_camara'];   
$Car=$_POST['cargo_responsable'];  
$Cor=$_POST['correo']; 
$Fec=$_POST['fecha']; 
$Tip=$_POST['tipo_de_empresa']; 
$Ciu=$_POST['ciudad'];

$mysqli ->query("INSERT into empresa(nombre,identificacion,nombre_representante,telefono,direccion_camara,car_responsable,correo,fecha,tipo_de_empresa,ciudad)values('$Nom','$Ide','$Nomr','$Tel','$Dir','$Car','$Cor','$Fec','$Tip','$Ciu')");   
    header("location:index.php");
?>