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
    <div class="menutitle">
      <!-- <h1 >SALUD</h1> -->
      <ul class="menuHeader" id="textTitle">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Programas</a></li>
        <li><a href="#">Pqrs</a></li>
      </ul>
    </div>
  </header>

  <div class="container">
    <div class="items">
      <div class="img">
        <img src="assets/img/pregnatEdit.svg" alt="" id="pregnant">
      </div>
      <div class="element">
        <div class="info">
          <span class="h3 center text-center">Digite su nivel de hormona y determina si está embarazada</span>
        </div>
        <div class="form">
          <form action="hormonas.php" method="post" class="form1">
            <div class="grupo1">
              <div class="form-group item">
                <label for="">Nombre paciente: </label>
                <input type="text" name="nombrePaciente" id="" placeholder="" class="item form-control">
              </div>
              <div class="form-group item">
                <label for="">Tipo de documento:</label>
                  <select name="identificador" id="" class="item form-select">
                    <option value="---" selected>--</option>
                    <option value="CC">CC</option>
                    <option value="TI">TI</option>
                </select>
              </div>
            </div>
            <div class="grupo2">
              <div class="from-group item">
                <label for="">Edad paciente:</label>
                <input type="number" name="edad" id="" placeholder="" min="0" max="100" class="item form-control" required>
              </div>
              <div class="form-group item">
                <label for="">Nivel Hormonas:</label>
                <input type="number" name="hormonas" id="" placeholder="" min="0" max="100" class="item form-control" required>
              </div>
            </div>
            <div class="grupo3">
              <button id="btn" class="btn btn-outline-info">Consultar</button>
            </div>
          </form>
          <hr>
        </div>
        <div class="result">
          <?php
            if (isset($_SESSION['respuesta'])) {
              for ($i=0; $i < count($_SESSION['respuesta']); $i++) { ?>
              <?php echo $_SESSION['respuesta'][$i].'<br>';?>
            <?php
              }
              session_destroy();
            }else{
              echo "";
            }
          ?>
        </div>
      </div>
    </div>
  </div>

</body>
</html>