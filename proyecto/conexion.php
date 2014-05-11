<?php
$conexion = mysql_connect("localhost","root","") or die ("Error en la conexión con el servidor <a href='formSugerencia.php'> Pulse aqui para continuar </a>");
/* la funcion or die, es para cortar el proceso, sera lo que va a devolver, es como un echo */

$base=mysql_select_db("edupeques",$conexion)  or die ("Error al seleccionar la base de datos <a href='formSugerencia.php'> Pulse aqui para continuar </a>");

  ?>