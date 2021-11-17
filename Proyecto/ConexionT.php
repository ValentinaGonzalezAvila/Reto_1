<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_retoadmin";
$password = "J<HY8lIU)pfX&=+C";
$mysqli = new mysqli($serverName, $username, $password,"id17908676_retopostobon");
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

$Nomt=$_POST['nitt'];
$Camt=$_POST['camarat'];
$Selt=$_POST['seleccionart'];    
$Tonr=$_POST['tonrec'];  
$Tonv=$_POST['tonval'];   
$Efir=$_POST['efirec'];  
$Efiv=$_POST['efival']; 
$Tonc=$_POST['tonco']; 
$Tono=$_POST['tonotro']; 
$Efic=$_POST['efico'];
$Efio=$_POST['efiotro'];

$mysqli ->query("INSERT into transformadora(identificacion,direccion,tipo_de_material,reciclaje,valorizacion,coprocesamiento,otro,eficiencia_reciclaje,eficiencia_valo,eficiencia_co,eficiencia_otro)values('$Nomt','$Camt','$Selt','$Tonr','$Tonv','$Tonc','$Tono','$Efir','$Efiv','$Efic','$Efio')");   
    header("location:index.php");
?>