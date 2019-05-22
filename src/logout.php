<?php 

require('logout.php');

class Logout extends conexion{

        function salir(){

            if(session_destroy()){
            header("Location: login.php");
            }
        }
}