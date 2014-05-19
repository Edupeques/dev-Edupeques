<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
<script type="text/javascript">
imagenes = new Array();
imagenes[1] = "../images/ardilla.png";
imagenes[2] = "../images/avion.png";
imagenes[3] = "../images/arbol.png";
imagenes[4] = "../images/ballena.png";
imagenes[5] = "../images/buho.png";
imagenes[6] = "../images/burro.png";
imagenes[7] = "../images/canguro.png";
imagenes[8] = "../images/casa.png";
imagenes[9] = "../images/cocodrilo.png";
imagenes[10] = "../images/conejo.png";
imagenes[11] = "../images/fresa.png";
imagenes[12] = "../images/gato.png";
imagenes[13] = "../images/leon.png";
imagenes[14] = "../images/mariposa.png";
imagenes[15] = "../images/loro.png";
imagenes[16] = "../images/mano.png";
imagenes[17] = "../images/buho.png";
imagenes[18] = "../images/mariposa.png";
imagenes[19] = "../images/paloma.png";
imagenes[20] = "../images/pajaro.png";
imagenes[21] = "../images/mono.png";
imagenes[22] = "../images/moto.png";
imagenes[23] = "../images/pato.png";
imagenes[24] = "../images/perro.png";

var Codigo1=1;
var Codigo2=1;
var Codigo3=1;

function siguiente1()
{


	document.getElementById('visor1').src=imagenes[Codigo1];

	++Codigo1;
	if (Codigo1 > 24)
		Codigo1 = 1;

}
function anterior1()
{

	document.getElementById('visor1').src=imagenes[Codigo1];
	--Codigo1;
	if(Codigo1<1)
		Codigo1=24;

 }

function siguiente2()
{


	document.getElementById('visor2').src=imagenes[Codigo2];

	++Codigo2;
	if (Codigo2 > 24)
		Codigo2 = 1;

}
function anterior2()
{

	document.getElementById('visor2').src=imagenes[Codigo2];
	--Codigo2;
	if(Codigo2<1)
		Codigo2=24;

 }
 function siguiente3()
{


	document.getElementById('visor3').src=imagenes[Codigo3];

	++Codigo3;
	if (Codigo3 > 24)
		Codigo3 = 1;

}
function anterior3()
{

	document.getElementById('visor3').src=imagenes[Codigo3];
	--Codigo3;
	if(Codigo1<3)
		Codigo3=24;

 }


function Enviar()
{
	var Codigo=''+Codigo1+''+Codigo2+''+Codigo3;
	alert(Codigo);
	document.location='password.php?Pos=2&Codigo='+Codigo;
}


</script>
 </HEAD>

 <BODY>
  <?php
	include("conexion.php");

	$Posicion = $_GET['Pos'];
	if($Posicion=='') $Posicion=1;
	
	$Codigo= $_GET['Codigo'];


  session_start();
  //Recuperar datos del formulario



if($Posicion==2){

	//Consulta SQL:
		$SQL="SELECT * FROM alumns WHERE pwd=".$Codigo;
//echo $SQL;


	//Ejecutar la consulta
	$registros = mysql_query($SQL);

	if (mysql_num_rows($registros)==0) 
		
			header("location:password.php?Pos=1&Codigo=".$Codigo);

	else
			//si es correcto 
			header("location:Juego.php?Codigo=".$Codigo);	

	

	}

if($Posicion==1){
	?>



 	<div name="cabecera" id="cabecera"><H1 align="center">Identificación</H1></div>
	<div name="cuerpo" id="cuerpo">
	<?php
  // echo"<form name='sugerencia' method='post' action='password.php?Pos=2&Codigo=".$Codigo."'>";
?>


<table align="center" border="1">

<TR>
	<TD width=30%><input type="button" value=" > " onclick="siguiente1()"><BR>
<img src="../images/buho.png" height="70" id="visor1" name="visor1"><br>
<input type="button" value=" < " onclick="anterior1()"><BR></TD>


	<TD width=30%>&nbsp;<input type="button" value=" > " onclick="siguiente2()"><BR>
&nbsp;<img src="../images/perro.png" height="70" id="visor2" name="visor2"><br>
<input type="button" value=" < " onclick="anterior2()"><BR></TD>

	<TD width=30%>&nbsp;<input type="button" value=" > " onclick="siguiente3()"><BR>
&nbsp;<img src="../images/perro.png" height="70" id="visor3" name="visor3"><br>
<input type="button" value=" < " onclick="anterior3()"><BR></TD>

</TR>
<TR>
	<TD COLSPAN=3 ALIGN=CENTER>
	<input type=button value='Enviar' onClick='Enviar()'>
	</td>
</tr>

</table>
	</form>
	</DIV>
	</DIV>

	<?php
}
	?>


 </BODY>

</HTML>
