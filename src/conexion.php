<?php  


class conexion{

        function __construct(){
        }

        public function conectar(){

        $conexion = new mysqli('127.0.0.1','root','','proyectointegrado');

        return $conexion;
        
    }

    public function comprobarSession($session){

        if(!isset($session['usuario'])){
            //header("Location: login.php");
            exit();
             }
        
    }


}