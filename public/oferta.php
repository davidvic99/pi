<?php


require_once('../src/infoUsuario.php');
require_once('../src/usarOferta.php');

$conexion = new Conexion();
$bbdd = $conexion->conectar();
$session = $conexion->comprobarSession($_SESSION["usuario"]);

$infou = new InfoUsuario();
$setInfo = $infou -> usuarioInfo($bbdd, $_SESSION["usuario"]);

$usarO = new UsarOferta();
$datos = $usarO->comprarOferta($bbdd,$_GET['id'],$_SESSION["usuario"], $setInfo[9], $setInfo[5]);

    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/estiloOferta.css">
    <title>Oferta</title>
  </head>
</html>
