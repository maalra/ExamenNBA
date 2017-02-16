<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NBA</title>
  </head>
  <body>
  <center><h1>TODOS LOS EQUIPOS NBA</h1></center>
<table border="3">
  <tr>
      <td><a href="confeste.php">CONFERENCIA ESTE</a></td>
      <td><a href="xxx.php">CONFERENCIA OESTE</a></td>
      <td><a href="temporada.php">TEMPORADA 99/00A</a></td>
  </tr>
</table>
<?php
//conexion base de datos y datos de todos los equipos NBA
include 'dbNBA.php';
    $basket = new dbNBA();
    $resultado=$basket->mostrarequipos();
    while($fila=$resultado->fetch_assoc()){
    echo "<br>";
    echo "NOMBRE DEL EQUIPO: ".$fila["nombre"];
    echo "<br>";
    echo "CIUDAD: ".$fila["ciudad"];
    echo "<br>";
    echo "CONFERENCIA: ".$fila["conferencia"];
    echo "<br>";
    echo "DIVISION: ".$fila["division"];
    echo "<hr>";
    }
?>

  </body>
</html>
