<?php
$serverName = "localhost"; //serverName\instanceName
$username = "id17908676_retoadmin";
$password = "J<HY8lIU)pfX&=+C";
$conn = new mysqli($serverName, $username, $password,"id17908676_retopostobon");
?>
<html lang="es">
<link rel="stylesheet" href = "CSS/bootstrap.min.css">
<link rel="stylesheet" href = "CSS/Styles.css">
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
      <h2 class="display-4"></h2>
      <div class="row align-items-start">
          
<div class="col"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
      <br> 
      <br>
      <br> 
      <br>
      <br>
      <h1 class='form__tvisualizar'>Conoce todos los materiales que puedes reciclar</h1>

      <br> 
    <div class="carousel-item active">
      <img class="d-block w-100" src="IMAGENES/TODOS.JPG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/OTROS-PLASTICOS.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/OTROS-MATERIALES.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/ICOPOR.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/ELEMENTOS-SANITARIOS.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/ORGANICOS.jpg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/PET.png" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/ALUMINIO.jpg" alt="Eighth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/vidrio.JPG" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGENES/TETRA-PAK.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>

    <div class="col">
    <center>
          <ul class="menu">
              <li><button type="button" id="Ez" class="btn btn-outline-success">Transformadora</button></li>
              <li><button type="button" id="Em" class="btn btn-outline-warning">Empresa</button></li>
          </ul>
    <div id ="ttest"></div>
</div>
</div>

<br>

  <footer>

    <p>  <img src="IMAGENES/pstobon.JPG"/></p>

  </footer>
  </div>


    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="Script.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    </body>
    </head>
</html>