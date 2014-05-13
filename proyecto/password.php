<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>

 </HEAD>

 <BODY>
  <?php


	$conexion = mysql_connect("localhost","root","") or die ("Error en la conexión con el servidor <a href='alumnos.php'> Pulse aqui para continuar </a>");
	$Posicion = $_GET['Pos'];
	if($Posicion=='') $Posicion=1;
	
	$Codigo= $_GET['Codigo'];


  session_start();
  //Recuperar datos del formulario



if($Posicion==2){

	//Consulta SQL:
		$SQL="SELECT * FROM alumns WHERE pwd=".$_POST['pwd']." AND entry=".$Codigo;
echo $SQL;


	//Ejecutar la consulta
	$registros=mysql_query($SQL,$conexion);
	$row=mysql_fetch_assoc($registros);

	if ($row['pwd']=$_POST['pwd']) //para ver si hay gente metida o no, sería uno de los fallos
		{
	
				//si es correcto lo enviaremos al formsugerencias

				header("location:formSugerencias.php");
		}
		else
	{
		header("location:password.php?Codigo=".$Codigo."&Pos=".$Pos);
	}
	

}
if($Posicion==1){
	?>



 	<div name="cabecera" id="cabecera"><H1 align="center">Identificación</H1></div>
	<div name="cuerpo" id="cuerpo">
	<?php
   echo"<form name='sugerencia' method='post' action='password.php?Pos=2&Codigo=".$Codigo."'>";
?>


  <table align="center" border="1">


	<tr>
		<td>Clave </td>
<td><input type="password" name="pwd" id="pwd" maxlength="12" size="12"></td>
		
			
	</tr>

	<tr>
	
		<td colspan="2" align="center"><input type="submit" value="Enviar"><input type="reset" value="Borrar">
		 </td></tr>
	<!-- el submit ejecuta dos atributos que lleva el formulario: method (enviara los datos que tiene el formulario),action(lo conectara) -->

	

	</table>
	</form>
	</DIV>
	</DIV>

	<?php
}
	?>


 </BODY>

</HTML>
