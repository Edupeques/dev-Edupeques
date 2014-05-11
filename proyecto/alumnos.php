

<?php
 $indice=$_GET['ref'];
$conexion = mysql_connect("localhost","root","") or die ("Error en la conexión con el servidor <a href='pag2.html'> Pulse aqui para continuar </a>");
/* la funcion or die, es para cortar el proceso, sera lo que va a devolver, es como un echo */

mysql_select_db("edupeques",$conexion)  or die ("Error al seleccionar la base de datos <a href='pag2.html'> Pulse aqui para continuar </a>");





  ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>


 </HEAD>

 <BODY>

  
<?php



		$SQL="SELECT * FROM alumns WHERE class='".$indice."'";
		echo $SQL;


		$registros=mysql_query($SQL,$conexion);
			


		while(mysql_num_rows($registros)){

				echo "<img src='".$row['photo']."'>";

		}

mysql_close($conexion);


?>




 </BODY>
</HTML>
