<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/estiloLogin.css">
  </head>
  <body>

    <div id="fondo">
        <div class="div1">
        <a href="index.html" ><img src="./img/florida.png"></a>
        </div>
        <div class="div1">
          <form method="post">
            <p><label id="dni">Usuario   o DNI</label></p>
            <p><input id="dni_txt" type="text"></p>
            <p><label id="psw">Contraseña</label></p>
            <p><input id="psw_txt" type="text"></p>
            <div class="div2">
            <a href="recuperarContraseña.php" id="fr_pw">¿Has olvidado tu contraseña?</a>
           <a href="main.php"> <input class="button" type="button" value="Login"></a>
            </div>
          </form>
        </div>
    </div>
    </body>
</html>
