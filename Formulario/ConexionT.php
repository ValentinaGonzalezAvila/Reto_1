<?php
If(!empty($_POST)){
$serverName = "(local)"; //serverName\instanceName
$connectionInfo = array( "Database"=>"RetoPostobon");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$Nomt=$_POST['nombret'];
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

$insertar= "INSERT into transformadora(identificacion,direccion,tipo_de_material,reciclaje,valorizacion,coprocesamiento,otro,eficiencia_reciclaje,eficiencia_valo,eficiencia_co,eficiencia_otro)values('$Nomt','$Camt','$Selt','$Tonr','$Tonv','$Tonc','$Tono','$Efir','$Efiv','$Efic','$Efio')";      
$recurso=sqlsrv_prepare($conn,$insertar); 
if(sqlsrv_execute($recurso)){
      header("location:Registrar.html");
} 
    else{
      echo"No Agregado";
}
}
?>