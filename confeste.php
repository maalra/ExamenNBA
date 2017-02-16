<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CONFERENCIA ESTE</title>
  </head>
  <body>
  <center><h1>CONFERENCIA ESTE</h1></center>
<table border="3">
  <tr>
    <td><a href="index.php">INICIO</a></td>
    <td><a href="xxx.php">CONFERENCIA OESTE</a></td>
    <td><a href="temporada.php">TEMPORADA 99/00A</a></td>
  </tr>
</table>
  <?php
  //conexion y equipos conferencia este
include 'dbNBA.php';
    $basket = new dbNBA();
    $resultado=$basket->mostrarconfeste();
    while($fila=$resultado->fetch_assoc()){
    echo "<br>";
    echo "NOMBRE DEL EQUIPO: ".$fila["nombre"];
    echo "<br>";
    echo "CIUDAD: ".$fila["ciudad"];
    echo "<br>";
    echo "DIVISION: ".$fila["division"];
    echo "<hr>";
    }

   ?>
  </body>
</html>
