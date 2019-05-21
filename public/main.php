<?php
require_once('../src/addKey.php');
$conexion = new Conexion();
$bbdd = $conexion->conectar();
$session = $conexion->comprobarSession($_SESSION["usuario"]);




if(isset($_POST)){
    $AñadirCodigo = new AñadirCodigo();
    $AñadirCodigo = $AñadirCodigo->addKey($bbdd,$_POST,$_SESSION["usuario"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/estiloMain.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

<div id="userInfo">

<div id="exp"><div class="expinfousuario">Nivel:<?php echo  $setInfo[4]." Exp: ".$setInfo[6] ?>  </div></div>  
    <div id="puntosUsuario"><div class="InUsuario">Puntos: <?php echo $setInfo[5]?>🔥</div></div>
     
    <div id="nivel"><div class="inNivel">Rango:<?php echo $setInfo[9] ?>    </div><img id="bronceM" src="./<?php echo $setInfo[11]?>"></div>
    <a href="perfil.php"><img class="userimgR" src="img/user.jpg" id="userimg"></a>
</div>
<div id="form">
<form id="intCodigo" action="" method="POST" name="codigo" >
    <p class="tituloForm"><b>Introducir Código</b></p>
    <input type="text" class="codigoInput" name="codigo" placeholder="1eXs1d8Ya8aReJd" required>
    <input type="submit" class="validarInput" value="Validar">
    <div id="info">
    <p class="rojo">El codigo fue usado/ no es valido. <span class="verde">El codigo es correcto</span></p>
</div>
</form>

</div>
<div id="ofertas">
<div id="ofertabronce">
    <h2>Ofertas Bronce 🔓</h2>
    <hr width="95%" />
    <br>
    <img id="oferta1" src="./img/ejemplo.png"><p id="ofertas1txt">
        <ul id="ofertas1txt">
            <li>Nombre: Ejemplo</li>
            <li>Descripcion: ejemplo</li>
            <li>Precio: 15 💸</li>
            <a href="oferta1.php">Usar</a>

        </ul></p>
</div>
<div id="ofertasplata">
<h2>Ofertas Plata 🔒 </h2>
<hr width="95%" />
<br>
<img id="oferta1" src="./img/candado.png"><p id="ofertas1txt">
<ul id="ofertas1txt">
            <li>Nombre: Ejemplo</li>
            <li>Descripcion: ejemplo</li>
            <li>Precio: 7 💸</li>
            <a href="oferta1.php">Bloqueado</a>

        </ul></p>
</div>

<div id="ofertasoro">
<h2>Ofertas Oro 🔒</h2>
<hr width="95%" />
<br>
<img id="oferta1" src="./img/candado.png"><p id="ofertas1txt">
<ul id="ofertas1txt">
            <li>Nombre: Ejemplo</li>
            <li>Descripcion: ejemplo</li>
            <li>Precio: 4 💸</li>
            <a href="oferta1.php">Bloqueado</a>

        </ul></p>
</div>

</div>
</body>
</html>
