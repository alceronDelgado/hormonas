<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hormonas</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navList">
    <ul class="itemList">
      <li><a href="">Agenda tu cita</a></li>
      <li>|</li>
      <li><a href="">Laboratorio</a></li>
      <li>|</li>
      <li><a href="">Resultados</a></li>
      <li>|</li>
      <li><a href="">Contacto</a></li>
    </ul>
  </nav>
  <header class="header">
    <div class="logo">
      <img src="assets/img/viva1a.png" alt="" id="logotipo" class="" width="100%" height="">
    </div>
    <div class="title">
      <h1 id="textTitle">SALUD</h1>
    </div>
  </header>

  <div class="container">
    <div class="items">
      <div class="img">
        <img src="assets/img/pregnatEdit.svg" alt="" id="pregnant">
      </div>
      <div class="form ">
        <form action="hormonas.php" method="post" class="form1">
          <div class="grupo1">
            <input type="text" name="nombrePaciente" id="" placeholder="Nombre Paciente: " class="item form-control">
            <select name="identificador" id="" class="item form-select">
              <option value="---" selected>--</option>
              <option value="CC">CC</option>
              <option value="TI">TI</option>
            </select>
          </div>
          <div class="grupo2">
            <input type="number" name="edad" id="" placeholder="Edad paciente: " min="0" max="100" class="item form-control">
            <input type="number" name="hormonas" id="" placeholder="Nivel Hormonas: " min="0" max="100" class="item form-control">
          </div>
          <div class="grupo3">
            <button id="btn" class="btn btn-outline-info">Consultar</button>
          </div>
        </form>
      </div>
    </div>


  </div>

  <div class="result">
    <?php
    if (isset($_SESSION['respuesta'])) {
      for ($i=0; $i < count($_SESSION['respuesta']); $i++) {
        echo $_SESSION['respuesta'][$i]."\n";
      }
      session_destroy();
    }else{
      echo "";
    }
    ?>
  </div>
</body>
</html>