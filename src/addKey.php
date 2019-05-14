<?php

require('conexion.php');

class AñadirCodigo extends conexion {


    public function addKey($conn, $post, $usuario){

        if (isset($post['codigo'])) {
            
            $codigo = $_POST['codigo'];
            utf8_decode ($codigo);
          
            $codigoExiste = mysqli_query($conn,"SELECT * from codigo where `nombre` = '$codigo'");
            while($codigoExiste1 = mysqli_fetch_assoc($codigoExiste)){
                $codigoID = $codigoExiste1['id'];
                $codigoUs = $codigoExiste1['usado'];
                $codigoPt = $codigoExiste1['puntos'];
             }

             if (empty($codigoUs)) {

                echo "<h5><p class='codigo'>El código introducido es incorrecto</p></h5>";
                
             }elseif($codigoUs==="no"){

                
                $usuarioTodo = mysqli_query($conn,"SELECT * from users where `usuario` = '$usuario'");
                while($usuarioTodo1 = mysqli_fetch_assoc($usuarioTodo)){
                    $usuarioID = $usuarioTodo1['id'];
                    $usuarioNV= $usuarioTodo1['nivel'];
                    $usuarioPT = $usuarioTodo1['puntos'];
                    $usuarioRG = $usuarioTodo1['rango'];
                    $usuarioExp = $usuarioTodo1['nivelExp'];
                    
                 }

                 $rangoTodo = mysqli_query($conn,"SELECT * from rango where `nombre` = '$usuarioRG'");
                while($rangoTodo1 = mysqli_fetch_assoc($rangoTodo)){
                    $rangoNombre= $rangoTodo1['nombre'];
                    $rangoPM = $rangoTodo1['puntosMinimos'];
    
                 }

                 $puntos =  $usuarioPT + $codigoPt;

               
                 $Update_usu = mysqli_query($conn, "UPDATE `users` SET `puntos` = '$puntos' WHERE `usuario` = '$usuario'");

                 if ($puntos >= $rangoPM) {
                     
                  
                    if ($rangoNombre == "Bronce") {

                        mysqli_query($conn, "UPDATE `users` SET `rango` = 'Plata', `puntos` = 0   WHERE `usuario` = '$usuario'");

                    }if ($rangoNombre == "Plata") {
                        mysqli_query($conn, "UPDATE `users` SET `rango` = 'Oro', `puntos` = 0 WHERE `usuario` = '$usuario'");

                   
                    }else {
                        
                    }
                 }
    
                 mysqli_query($conn, "INSERT INTO `codxusuario` (`id`, `idcodigo`, `idusuario`) VALUES (NULL, '$codigoID', '$usuarioID')");
                 


                 $nivelTodo = mysqli_query($conn,"SELECT * from nivel where `nivel` = '$usuarioNV'");
                 while($nivelTodo1 = mysqli_fetch_assoc($nivelTodo)){
                    $expNecesaria = $nivelTodo1['exp'];
                  }

                  $expAhora = $usuarioExp + 1;
           
                if ($expAhora >= $expNecesaria) {
                
                    $usuarion1 =  $usuarioNV +1;

                        if ($usuarion1>10) {
                            
                        } else{

                            mysqli_query($conn, "UPDATE `users` SET `nivel` = $usuarion1, nivelExp = '0'   WHERE `usuario` = '$usuario'");     
                        }                  

                    }else{
                            mysqli_query($conn, "UPDATE `users` SET `nivelExp` = $expAhora   WHERE `usuario` = '$usuario'");
                }
                   echo "<h5> <p class='codigo'>Codigo Correcto</p></h5>";
                 

            }else{
                echo "<h5> <p class='codigo'>El código introducido ya esta usado.</p></h5>";
            }
        }
        

    }


}