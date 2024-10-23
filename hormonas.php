<?php
session_start();

  $nombrePaciente = $_POST['nombrePaciente'];
  $identificador = $_POST['identificador'];
  $edad = $_POST['edad'];
  $nivelHormonas = $_POST['hormonas'];
  $resultado = "";

  if  (
      (($edad >= 12) && ($edad <= 14) && ($nivelHormonas < 14) && ($nivelHormonas < 27)) ||
      (($edad >= 15) && ($edad <= 16) && ($nivelHormonas < 11) && ($nivelHormonas < 19)) ||
      (($edad >= 17) && ($edad <= 20) && ($nivelHormonas < 11) && ($nivelHormonas < 15)) ||
      (($edad >= 21) && ($edad <= 24) && ($nivelHormonas < 11.5) && ($nivelHormonas < 15)) ||
      (($edad >= 25) && ($edad <= 33) && ($nivelHormonas < 13.6) && ($nivelHormonas < 16.5))
  ) {
      $resultado = "Estas embarazada";

  }else{
      $resultado = "No Estas embarazada";
  }

  //creamos array y le guardamos unos valores
  //$items = array($nombrePaciente,$identificador,$edad,$nivelHormonas,$resultado);
  $items = array(
  "nombrePaciente" => $nombrePaciente,
  "tipoDocumento"=>$identificador,
  "edad" =>$edad,
  "Hormonas" => $nivelHormonas,
  "Resultado" =>$resultado);

  if (empty($_SESSION['respuesta'])) {
    //creamos variable de session y le decimos que va a tener el array
    $_SESSION['respuesta'] = $items;
  }

  //Redireccionamos al index de la página con la respuesta
  header("location: http://localhost:8080/hormonas/");
?>