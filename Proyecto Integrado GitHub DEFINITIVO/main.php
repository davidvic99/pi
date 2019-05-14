<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/estiloMain.css">

</head>
<body>

<div id="userInfo">
    <div id="puntosUsuario">Puntos: 45🔥</div>
    <div id="nivel"><div class="inNivel">Nivel: Bronce</div><img id="bronceM" src="./img/bronce.png"></div>
    <a href="perfil.php"><img src="img/user.jpg" id="userimg"></a>
</div>
<div id="form">
<form id="intCodigo" action="hola.php" method="POST" name="codigo" >
    <p class="tituloForm"><b>Introducir Código</b></p>
    <input type="text" class="codigoInput" name="codigo" placeholder="0123-4567-8901-2345" pattern="[0-9&-]{19}" required>
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
