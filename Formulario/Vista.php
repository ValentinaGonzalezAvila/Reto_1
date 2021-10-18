<?php include("PHP/Link.php")?>
<html lang="es">
<link rel="stylesheet" href = "CSS/bootstrap.min.css">
<link rel="stylesheet" href = "CSS/StylesV.css">
<head>
    <title>Reto Postobon</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
    <body>
	<div class="container">

        <ul class="menu">
            <li><a href= "Registrar.html"><button type="button" class="btn btn-secondary btn-lg">REGISTRAR</button></a></li>
            <li><a href= "Vista.php"><button type="button" class="btn btn-secondary btn-lg">VISUALIZAR</button></a></li>
        </ul>
	<center>


  <h1 class='form__tvisualizar'>Bienvenido a Postobon</h1>
  <div class="contenido">
	<h2> A continuación encontraras los proveedores disponibles en el momento </h2>
  <br>

	<table class="a" border = "3">
			<th>Nombre</th>
			<th>Representante</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Ciudad</th>
	<?php
		$query = "SELECT nombre, nombre_representante, telefono, correo, ciudad FROM empresa";
		$res=sqlsrv_query($conn,$query);
		while ($row=sqlsrv_fetch_array($res)) {
	?>
		<tr>
			<td><?=$row[0]?></td>
			<td><?=$row[1]?></td>
			<td><?=$row[2]?></td>
			<td><?=$row[3]?></td>
			<td><?=$row[4]?></td>
		</tr>
	<?php
		}
	?>
	</table>
	<br></br>

<h2> Información Técnica</h2>

  <table class="a"  border = "2" >
    <thead>
      <tr>
        <th rowspan="2">Identificación</th>
        <th rowspan="2">Dirección</th>
        <th rowspan="2">Tipo de Material</th>
        <th colspan="4"><center>Tipo de tranformación (ton/año)</center></th>
        <th colspan="4"><center>Eficiencia del Proceso (%)</center></th>
      </tr>
      <tr>
        <th>Reciclaje</th>
        <th>Valorización</th>
        <th>Coprocesamiento</th>
        <th>Otro</th>
        <th>Reciclaje</th>
        <th>Valorización</th>
        <th>Coprocesamiento</th>
        <th>Otro</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $query = "SELECT * FROM transformadora";
        $res=sqlsrv_query($conn,$query);
        while ($row=sqlsrv_fetch_array($res)) {
      ?>
      <tr>
        <td><?=$row[0]?></td>
  			<td><?=$row[1]?></td>
  			<td><?=$row[2]?></td>
  			<td><?=$row[3]?></td>
  			<td><?=$row[4]?></td>
  			<td><?=$row[5]?></td>
  			<td><?=$row[6]?></td>
  			<td><?=$row[7]?></td>
  			<td><?=$row[8]?></td>
  			<td><?=$row[9]?></td>
  			<td><?=$row[10]?></td>
      </tr>
    </tbody>
    <?php
      }
    ?>
  </table>
  <br></br>

	</div>
  </div>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="Script.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    </body>
    </head>
</html>
