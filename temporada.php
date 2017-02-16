<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONFERENCIA ESTE</title>
  </head>
  <body>
    <center><h1>TEMPORADA 99/00</h1></center>
<table border="3">
  <tr>
    <td><a href="index.php">INICIO</a></td>
    <td><a href="confeste.php">CONFERENCIA ESTE</a></td>
    <td><a href="XXX.php">CONFERENCIA OESTE</a></td>
  </tr>
</table>

<?php
//conexion y datos de de temporada
  include 'dbNBA.php';
      $basket = new dbNBA();
      $resultado=$basket->mostrartemporada();
      while ($fila=$resultado->fetch_assoc()){
      echo "<br>";
      echo "EQUIPO LOCAL: ".$fila["equipo_local"];
      echo "<br>";
      echo "EQUIPO VISITANTE: ".$fila["equipo_visitante"];
      echo "<br>";
      echo "PUNTOS LOCAL: ".$fila["puntos_local"];
      echo "<br>";
      echo "PUNTOS VISITANTE: ".$fila["puntos_visitante"];
      echo "<hr>";
      }
?>
  </body>
</html>
