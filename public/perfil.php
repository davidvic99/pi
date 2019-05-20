<?php
require_once('../src/infoUsuario.php');


$conexion = new Conexion();
$bbdd = $conexion->conectar();
$session = $conexion->comprobarSession($_SESSION["usuario"]);

$infou = new InfoUsuario();
$setInfo = $infou -> usuarioInfo($bbdd, $_SESSION["usuario"]);
?>


<!DOCTYPE html>
<html lang="es" dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="./css/estiloPerfil1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
  </head>
  <body>
    <img id="perfil" src="./img/user.jpg" alt="">
    <div class="info"><b>Usuario: </b> <?php echo$_SESSION["usuario"];?>    <br>
    <i><b>DNI:</b><?php echo $setInfo[8]?></i>
    </div>
    <br>

    <a href="http://localhost/Programaci%c3%b3nPHP/PI/public/editarPerfil.php"><input class="boton1" type="submit" name="editarPerfil" value="Editar Perfil"></a>
    <img id="nivel" src="./img/bronce.png" alt="">
    <div class="nivel"><b>Nivel</b><br>
    <?php echo $setInfo[7]?></div>
    <div class="puntosAc"><b>Puntos Actuales</b><br>
    <?php echo $setInfo[6]?></</div>
    <div class="puntosNe"><b>Puntos necesarios siguiente nivel</b><br>
    <?php $diferencia=$setInfo[10]-$setInfo[6]; echo $diferencia; ?></div>
    <div class="ProcesoNivel"><b>Proceso de nivel:</b><br><?php  $total = $setInfo[6]*100/$setInfo[10]; echo $total; ?>%</div>
    <progress max="100" value="<?php echo $total ?>"></progress><br>
  <a href="http://localhost/Programaci%c3%b3nPHP/PI/public/main.php"><input class="boton2" type="submit" name="volver" value="Volver"></a>
  <br>
  <div class="adInfo"><b>Información Adicional</b><br></div>
  <div id="centro">
  <p>
    </p><p><b>Nombre</b>: Ejemplo</p>
    <p><b>Apellidos</b>: Ejemplo</p>
    <p><b>DNI</b>: Ejemplo</p>
    <p><b>Estudios</b>: DAW</p>
    <p><b>Correo</b>: yomismo@yomismo.cat</p>
    <p><b>Ciudad</b>: Valencia</p>

    <p></p>
    </div>


</body></html>
