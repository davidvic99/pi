<?php 
require_once('../src/addKey.php');
if(isset($_POST)){

    $username= "apok99";
    $conexion = new conexion();
    $conexion = $conexion->conectar();

    $AñadirCodigo = new AñadirCodigo();
    $AñadirCodigo = $AñadirCodigo->addKey($conexion,$_POST,$username);    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div id="userInfo">
    <div id="puntosUsuario">Puntos: 45🔥</div>
    <div id="nivel">Nivel: Bronce<img id="bronceM" src="img/bronce.png"></div>
    <a href="perfil.php"><img src="img/user.jpg" id="userimg"></a>
</div>  
<div id="form">
<form id="intCodigo" action="" method="POST" name="codigo" >
    <p class="tituloForm"><b>Introducir Código</b></p>
    <input type="text" name="codigo" placeholder="1eXs1d8Ya8aReJd" minlength="15" maxlength="18" required>
    <input type="submit" value="Validar">
    <div id="info">
    <p class="rojo">Hay algunos codigos que poseen caracteres diferentes, aquí puede copiarlo: ± , Ã <span class="verde"> -> El código es correcto</span></p>
</div>
</form>

</div>
<div id="ofertas">
<div id="ofertabronce">
    <h2>Ofertas Bronce 🔓</h2>
    <hr width="95%" />
    <br>
    <img id="oferta1" src="img/ejemplo.png"><p id="ofertas1txt">
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
<img id="oferta1" src="img/candado.png"><p id="ofertas1txt">
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
<img id="oferta1" src="img/candado.png"><p id="ofertas1txt">
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