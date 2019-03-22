<?php
/**
 * Jugador
 */
class Jugador
{
private $conexion=null;
  function __construct()
  {
    echo "Nuevo Jugador";
  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["codigo"])||!isset($post["nombre"])||!isset($post["peso"])){
      $error="";
    }elseif($post["codigo"]==""){
      $error="No has introducido el codigo";
    }elseif($post["nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["peso"]==""){
      $error="No has introducido el Peso";
    }else {
      $error=false;
    }
    return $error;
    }
    public function conectar(){
      $this->conexion = new mysqli("localhost", "root", "", "nba");
      if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
      }
  }
    public function insertar($post){
      $codigo = $post['codigo'];
      $nombre = $post['nombre'];
      $peso = $post['peso'];
      $consulta="INSERT INTO jugadores ('codigo', 'Nombre', 'Procedencia', 'Altura', 'Peso', 'Posicion', 'Nombre_equipo')
                  VALUES ('$codigo', '$nombre', NULL, NULL, '$peso', NULL, NULL)";
      $this->conexion->query($consulta);
  }
}
 ?>
