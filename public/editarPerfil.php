<?php

require_once('../src/editarPerfil.php');
require_once('../src/infoUsuario.php');

  $conexion = new Conexion();
  $bbdd = $conexion->conectar();
  $session = $conexion->comprobarSession($_SESSION["usuario"]);

  $infou = new InfoUsuario();
  $setInfo = $infou -> usuarioInfo($bbdd, $_SESSION["usuario"]);
  
  if(isset($_POST)){
   
    $editar = new editPerfil();
    $setEditar = $editar->editarPerfil($)

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="./css/editarPerfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div id="xdddsaxcs" >

      <img id="fotoPerfil" src="./img/FotoPerfil.png" />
      <p> <button id="buttonfoto" type="button">Subir Archivo</button>


    <div>
    <form class="" action="" method="post">
      <p> Nombre 
      <input type="text" name="nombre" value=<?php echo $setInfo[0]?> /> </p>
      <p> Apellidos 
      <input type="text" name="apellidos" value=<?php echo $setInfo[1]?>/> </p>
      <p> Correo 
      <input type="email" name="email" value=<?php echo $setInfo[3]?> /> </p>
      <p> DNI 
      <input type="text" name="dni" value=<?php echo $setInfo[8]?> /> </p>
      <p> Estudios 
      <input type="text" name="estudios" value=<?php echo $setInfo[2]?> /> </p>
      <input type="submit" value="Guardar" />
        <a href="perfil.php"> <input type="button" value="Volver" /></a>
    </form>
    </div>
  </body>
</html>
