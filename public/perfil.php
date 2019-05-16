<?php


require_once('../src/infoUsuario.php');

$conexion = new Conexion();
$bbdd = $conexion->conectar();
$session = $conexion->comprobarSession($_SESSION["usuario"]);

$infou = new InfoUsuario();
$setInfo = $infou -> usuarioInfo($bbdd, $_SESSION["usuario"]);  

?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/estiloPerfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
  </head>
  <body>
    <img id="perfil" src="./img/user.jpg" alt="">
    <div class="info">Nombre y Apellido:   EJEMPLO EJEMPLO <br>
    <i>DNI: 2102301302W</i>
    </div>
    <br>

    <a href="editarPerfil.php   "><input type="submit" name="editarPerfil" value="Editar Perfil"></a>
    <img id="nivel" src="./img/bronce.png" alt="">
    <div class="nivel"><b>Nivel</b><br>
    Bronce</div>
    <div class="puntosAc"><b>Puntos Actuales</b><br>
    45</div>
    <div class="puntosNe"><b>Puntos necesarios siguiente nivel</b><br>
    55</div>
    <div class="ProcesoNivel"><b>Proceso de nivel:</b></div>
    <div id="barraPro"><div class="w3-container">
    <div class="w3-light-grey">
    <div class="w3-container w3-blue" style="width:45%">45%</div>
    </div><br>
  </div></div>
  <a href="main.php   "><input type="submit" name="volver" value="Volver"></a>
  <br>
  <div class="adInfo"><b>Información Adicional</b><br></div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
  <div id="centro">
  <p>
    <p><b>Información:</b></p>
    <p>Nombre: <?php echo $setInfo[0]?></p>
    <p>Apellidos: <?php echo $setInfo[1]?></p>
    <p>DNI: <?php echo $setInfo[8]?></p>
    <p>Estudios: <?php echo $setInfo[3]?></p>
    <p>Correo: <?php echo $setInfo[5]?></p>

    </p>
    </div>

  </body>
</html>
