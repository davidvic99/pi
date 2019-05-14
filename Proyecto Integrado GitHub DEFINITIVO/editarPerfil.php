<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="./css/editarPerfil.css">
  </head>
  <body>
    <div id="xdddsaxcs" >

      <img id="fotoPerfil" src="./img/FotoPerfil.png" />
      <p> <button id="buttonfoto" type="button">Subir Archivo</button>


    <div>
    <form id="editar">
      <p> Nombre <input type="text" id="nombre" /> </p>
      <p> Apellidos <input type="text" id="apellidos" /> </p>
      <p>  Contraseña <input type="password" id="contraseña" /> </p>
      <p>  Correo <input type="email" id="correo" /> </p>
      <p> Ciudad <select id="ciudad"> </p>
              <option value="Valencia">
                Valencia
              </option>
              <option value="Barcelona">
                Barcelona
              </option>
              <option value="Madrid">
                Madrid
              </option>
            </select>
      <p> Edad <input type="text" id="edad" maxlength="99" minlength="15" size="10" /> </p>

      <p> Fecha nacimiento </p>
                    <p>    Dia <select id="dia">
                        <option value="1">
                          1
                        </option>
                        <option value="2">
                          2
                        </option>
                        <option value="3">
                          3
                        </option>
                        <option value="4">
                          4
                        </option>
                        <option value="5">
                          5
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="7">
                          7
                        </option>
                        <option value="8">
                          8
                        </option>
                        <option value="9">
                          9
                        </option>
                        <option value="10">
                          10
                        </option>
                        <option value="11">
                          11
                        </option>
                        <option value="12">
                          12
                        </option>
                        <option value="13">
                          13
                        </option>
                        <option value="14">
                          14
                        </option>
                        <option value="15">
                          15
                        </option>
                        <option value="16">
                          16
                        </option>
                        <option value="17">
                          17
                        </option>
                        <option value="18">
                          18
                        </option>
                        <option value="19">
                          19
                        </option>
                        <option value="20">
                          20
                        </option>
                        <option value="21">
                          21
                        </option>
                        <option value="22">
                          22
                        </option>
                        <option value="23">
                          23
                        </option>
                        <option value="24">
                          24
                        </option>
                        <option value="25">
                          25
                        </option>
                        <option value="26">
                          26
                        </option>
                        <option value="27">
                          27
                        </option>
                        <option value="28">
                          28
                        </option>
                        <option value="29">
                          29
                        </option>
                        <option value="30">
                          30
                        </option>
                        <option value="31">
                          31
                        </option>
                        </select>
                       Mes  <select id="mes">
                          <option value="1">
                            1
                          </option>
                          <option value="2">
                            2
                          </option>
                          <option value="3">
                            3
                          </option>
                          <option value="4">
                            4
                          </option>
                          <option value="5">
                            5
                          </option>
                          <option value="6">
                            6
                          </option>
                          <option value="7">
                            7
                          </option>
                          <option value="8">
                            8
                          </option>
                          <option value="9">
                            9
                          </option>
                          <option value="10">
                            10
                          </option>
                          <option value="11">
                            11
                          </option>
                          <option value="12">
                            12
                          </option>
                        </select>
                  Año   <select id="anyo">
                          <option value="1995">
                            1995
                          </option>
                          <option value="1996">
                            1996
                          </option>
                          <option value="1997">
                            1997
                          </option>
                          <option value="1998">
                            1998
                          </option>
                          <option value="1999">
                            1999
                          </option>
                        </select> </p>
          <input type="submit" value="Guardar" />
         <a href="perfil.php"> <input type="button" value="Volver" /></a>
         </div>

    </form>
    </div>
  </body>
</html>
