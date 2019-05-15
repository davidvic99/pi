<?php

require('conexion.php');

class Login extends conexion{

    public function iniciarSesion($conn,$post){

        if (isset($post['usuario'])) {

            $usuario = $_REQUEST['usuario'];
            $password = sha1($_REQUEST['password']);
            $result = mysqli_query($conn,"SELECT * FROM `users` WHERE usuario='$usuario'and password='$password'") or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){

                session_start();

                $_SESSION['usuario'] = $usuario;
                header( "refresh:0.001;url=main.php" );

                return $_SESSION['usuario'];

            }else{
              echo "<div class='error' style='display:inherit;'>";
            }

        }else{
            "Tienes que rellenar todos los campos";
        }


    }

}
