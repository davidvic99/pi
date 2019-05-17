<?php

require_once('../src/registro.php');

if (!empty($_POST)) {
    $conexion = new Conexion();
    $conexion = $conexion->conectar();

    $registro = new Registro();
    $registro = $registro->registrar($conexion,$_POST);


}else{
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/estiloRegistro.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
  </head>
  <body>
    <a href="index.php"><img src="./img/florida.png"></a>
    <form class="" action="" method="post">
    <div class="texto">
        <p><label>Usuario:</label></p>
        <input type="text" name="usuario" value="" required>
        <p><label>Nombre:</label></p>
        <input type="text" name="nombre" value="" required>
        <p><label>Apellidos:</label></p>
        <input type="text" name="apellido" value="" required>
        <p><label>DNI:</label></p>
        <input type="text" name="dni" value="" required>
        <p><label>E-mail:</label></p>
        <input type="email" name="email" value="" required>
        <p><label>Estudios:</label></p>
        <select name="estudios" required>
          <option selected>DAW</option>
          <option>3D</option>
          <option>ASIR</option>
          <option>DAM</option>
        </select><br>
        <p><label>Contraseña:</label></p>
        <input type="password" name="contraseña" value="" required>
        <p><label>Repetir contraseña:</label></p>
        <input type="password" name="contraseña2" value="" required>
        <input class="boton" type="submit" name="button" value="Enviar">
    </form></div>
</form>
  </body>
</html>
<?php }  ?>
