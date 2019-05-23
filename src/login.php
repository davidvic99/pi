<?php

require('conexion.php');

class Login extends Conexion{


    public function iniciarSesion($conn,$post){

        $adServer = "ldap://10.2.72.43";    

        $ldap = ldap_connect($adServer);
        $username = 'Administrador';    
        $pass = '123uni2.M';
                
        $ldaprdn = 'vicentewin2012' . "\\" . $username;
                
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
                
        $bind = @ldap_bind($ldap, $ldaprdn, $pass);


        if (isset($post['usuario'])) {

            $usuario = $2['usuario'];
            $password = sha1($_REQUEST['password']);
            $result = mysqli_query($conn,"SELECT * FROM `users` WHERE usuario='$usuario'and password='$password'") or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){


                $_SESSION['usuario'] = $usuario;
                header( "refresh:0.001;url=main.php" );

                return $_SESSION["usuario"];



            }else if ($bind) {  
                
                    $usuario = $_REQUEST['usuario'];
                    $password = $_REQUEST['password'];

                    if ($pass == $password) {

                        $result = mysqli_query($conn,"SELECT * FROM `users` WHERE usuario='$username'") or die(mysql_error());
                        $rows = mysqli_num_rows($result);

                        if($rows==1){

                            $_SESSION['usuario'] = $usuario;
                            header( "refresh:0.001;url=main.php" );
        
                            return $_SESSION["usuario"];
                        }
                    } else {
                        $msg = "Credenciales incorrectos";
                        echo $msg;   
                    }

                }else {

                    $msg = "Usuario o contraseña incorrectos"; 
                    echo $msg;   
                
                }

        }else{
            "Tienes que rellenar todos los campos";
        }


    }

}


