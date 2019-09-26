<?php
  function guardarDatos($datos) {
    $json = json_encode($datos);
    file_put_contents("usuarios.json", $json, FILE_APPEND | LOCK_EX);
  }

  $personas = array();
  if ($_POST) {
    $personas["nombre"] = $_POST["nombre"];
    $personas["apellido"] = $_POST["apellido"];
    $personas["usuario"] = $_POST["usuario"];
    $personas["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $personas["confirmar"] = password_hash($_POST["confirmar"], PASSWORD_DEFAULT);
    $personas["ciudad"] = $_POST["ciudad"];
    $personas["provincia"] = $_POST["provincia"];
    $personas["codigopostal"] = $_POST["codigopostal"];
    $personas["terminos"] = $_POST["terminos"];
    guardarDatos($personas);
  }
?>
