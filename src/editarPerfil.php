<?php

require_once('conexion.php');

Class editPerfil extends Conexion {

        public function editarPerfil($conn, $post, $usuario){

            if ((!isset($post['nombre']))&&(!isset($post['apellidos']))&&(!isset($post['email']))&&(!isset($post['dni']))&&(!isset($post['estudios']))) {

              var_dump($nombre);
              var_dump($apellidos);

              $nombre = $post['nombre'];
              $apellidos = $post['apellidos'];
              $email = $post['email'];
              $dni = $post['dni'];
              $estudios = $post['estudios'];

              if ($actualizar = mysqli_query($conn, "UPDATE users SET nombre='$nombre', apellidos='$apellidos', email='$email', dni='$dni', estudios='$estudios' WHERE usuario='$usuario'")) {
                echo "AAAAAAAAAAAAH YA VA JODER";
              } else {
                echo "NO VA. ME QUIERO MORIR";
              }
              
            }
        }
}

