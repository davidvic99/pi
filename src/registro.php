<?php

require_once('conexion.php');
class Registro extends Conexion{

      
    function __construct(){

    }

    function registrar($conn, $post){

        
        if ((isset($post['nombre']))&&(isset($post['usuario']))&&(isset($post['apellido']))&&(isset($post['dni']))&&(isset($post['estudios']))&&(isset($post['contraseña']))&&(isset($post['contraseña2']))) {

            $contraseña = $post['contraseña'];
            $contraseña2 = $post['contraseña2'];
                if ($contraseña == $contraseña2) {
                    $nombre = $post['nombre'];
                    $usuario = $post['usuario'];
                    $apellido = $post['apellido'];
                    $dni = $post['dni'];
                    $estudios = $post['estudios'];
                    $email = $post['email'];
                    $contraseña = sha1($contraseña);
                 
                    if($insertar =  mysqli_query($conn, "INSERT INTO `users` (`id`, `nombre`, `apellido`, `usuario`, `email`, `estudios`, `password`, `nivel`, `puntos`, `Registro`, `rango`, `nivelExp`, `dni`) VALUES (NULL, '$nombre', '$apellido', '$usuario', '$email', '$estudios', '$contraseña', '1', '0', CURRENT_TIMESTAMP, 'Bronce', '1', '$dni')")){
                        echo "<h2>Tu cuenta se ha creado correctamente.</h2>";
                    }else{
                        echo "<h2>Una cuenta con este nombre de usuario/dni ya existe.</h2>";
                    }
       
                  
                   
                }else{

                    echo "Las contraseñas no coinciden.";
                }
               

            }else{

                echo "Fallo en el proceso de Registro. Verifica todos los campos";
            }

    }


}