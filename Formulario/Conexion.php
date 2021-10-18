<?php
If(!empty($_POST)){
$serverName = "(local)"; //serverName\instanceName
$connectionInfo = array( "Database"=>"RetoPostobon");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

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

$insertar= "INSERT into empresa(nombre,identificacion,nombre_representante,telefono,direccion_camara,cargo_responsable,correo,fecha,tipo_de_empresa,ciudad)values('$Nom','$Ide','$Nomr','$Tel','$Dir','$Car','$Cor','$Fec','$Tip','$Ciu')";      
$recurso=sqlsrv_prepare($conn,$insertar); 
if(sqlsrv_execute($recurso)){
      header("location:Registrar.html");
} 
    else{
      echo"No Agregado";
}
}
?>