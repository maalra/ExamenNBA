<?php

class dbNBA
{
//variable private
 private $conexion;

 //constructor
 function __construct(){
  $this->conexion = new mysqli("localhost", "root", "","nba");
  //prueba de conexion a la base de datos
  if($this->conexion->connect_errno) {
  echo "False (" . $this->conexion->connect_errno . ") " . $conexion->connect_error;
}else {
echo "True";
 }
 }
 //FUNCION MOSTRAR TODOS LOS EQUIPOS
 function mostrarequipos(){
   $resultado = $this->conexion->query("SELECT nombre, ciudad, conferencia, division FROM equipos");
   return $resultado;
 }
  //FUNCION CONFERENCIA ESTE
  function mostrarconfeste(){
     $resultado = $this->conexion->query("SELECT nombre, ciudad, division FROM equipos WHERE conferencia='east'");
     return $resultado;
 }
  //FUNCION TEMPORADA
  function mostrartemporada(){
     $resultado = $this->conexion->query("SELECT equipo_local, equipo_visitante, puntos_local, puntos_visitante FROM partidos WHERE temporada='99/00'");
     return $resultado;
  }
}
 ?>
