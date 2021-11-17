<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_retoadmin";
$password = "J<HY8lIU)pfX&=+C";
//$mysqli = new mysqli($serverName, $username, $password,"id17908676_retopostobon");
$mysqli = mysqli_connect($serverName, $username, $password, "id17908676_retopostobon");
?>
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
    <div class="row align-items-start">
    <nav class="col navbar navbar-light bg-light">
    <form class="form-inline">
    <li><a href= "index.php"><button type="button" class="btn btn-secondary btn-lg">FORMULARIOS</button></a></li>
    <li><a href= "Vista.php"><button type="button" class="btn btn-secondary btn-lg">DATOS REGISTRADOS</button></a></li>
    </form>
    <div class="col-md-4">
    <img src="IMAGENES/logopostobon.png"/>
    </div>
    </nav>
    </div>
	<center>
  <h1 class='form__tvisualizar'>Información Registrada En Tiempo Real</h1>
  <div class="contenido">

  <br>
  
  <h1>Empresa</h1>

  <table class="default">
    <tr class="t">
      <td >Identificación</td>
      <td >Nombre</td>
      <td >Representante</td>
      <td >Telefono</td>
      <td >Correo</td>
      <td >Ciudad</td>
    </tr>
  <?php
    $sql = "SELECT nombre, identificacion, nombre_representante, telefono, correo, ciudad FROM empresa";
    //$mysqli ->query("SELECT nombre, nombre_representante, telefono, correo, ciudad FROM empresa");
    $result = mysqli_query($mysqli, $sql);
    while ($row=mysqli_fetch_array($result)) {
  ?>
    <tr>
        <td><?=$row[1]?></td>
        <td><?=$row[0]?></td>
        <td><?=$row[2]?></td>
        <td><?=$row[3]?></td>
        <td><?=$row[4]?></td>
        <td><?=$row[5]?></td>
    </tr>
  <?php
    }
  ?>
  </table>
	<br></br>
<h1>Transformadora</h1>
      <form method="post">
        <select name="xmaterial">
          <option value="">Tipo de material</option>
          <option value='Vidrio'>Vidrio</option>
          <option value='Metales Ferrosos'>Metales Ferrosos</option>
          <option value='Metales Rigido'>Metales Rigido</option>
          <option value='Plastico Rigido'>Plastico Rigido</option>
          <option value='Plastico Flexible'>Plastico Flexible</option>
          <option value='Papel'>Papel</option>
          <option value='Cartón'>Cartón</option>
          <option value='Multimateriales'>Multimateriales</option>
        </select>
        <button name="buscar" type="submit">Buscar</button>
      </form>
  <table class="default" >
    <thead>
      <tr class="t1">
        <th rowspan="2">Identificación</th>
        <th rowspan="2">Dirección</th>
        <th rowspan="2">Tipo de Material</th>
        <th colspan="4"><center>Tipo de tranformación (ton/año)</center></th>
        <th colspan="4"><center>Eficiencia del Proceso (%)</center></th>
      </tr>
      <tr class="t">
        <th  >Reciclaje</th>
        <th >Valorización</th>
        <th >Coprocesamiento</th>
        <th >Otro</th>
        <th >Reciclaje</th>
        <th >Valorización</th>
        <th >Coprocesamiento</th>
        <th >Otro</th>
      </tr>
    </thead>

    <tbody>
      <?php
        $where = "";
        $material = $_POST['xmaterial'];

        if (isset($_POST['buscar']))
          {
          if (empty($_POST['material']))
          {
            $where="where tipo_de_material like '".$material."%'";
          }
        }

        $sql = "SELECT * FROM transformadora $where";
        $result = mysqli_query($mysqli, $sql);
        if(mysqli_num_rows($result)==0)
          {
            $mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
          }
        while ($row=mysqli_fetch_array($result)) {
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
    <center>
  <footer >
    <p><img src="IMAGENES/pstobon.JPG"/></p>
  </footer>
  </center>
</html>
