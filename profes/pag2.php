<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
     <TITLE> Login Profes </TITLE>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
function Seleccion(numero,ctrl){


if(ctrl[0].checked==false && ctrl[1].checked==false){
	alert('Debe seleccionar una letra');
	return;
	}

	document.location.href='alumnos.php?ref='+numero+((ctrl[0].checked)?'1':'2');
}
$(document).ready(function(){
		$("#tres").mouseenter(function(){
			$("#tres").animate({height:120,width:120},200);
		});
		$("#cuatro").mouseenter(function(){
			$("#cuatro").animate({height:120,width:120},200);
		});
		$("#cinco").mouseenter(function(){
			$("#cinco").animate({height:120,width:120},200);
		});
		 $("#tres").mouseleave(function(){
			 $("#tres").animate({height:100,width:100},200);
		 });
		 $("#cuatro").mouseleave(function(){
			 $("#cuatro").animate({height:100,width:100},200);
		 });
		 $("#cinco").mouseleave(function(){
			 $("#cinco").animate({height:100,width:100},200);
		 });
  });
</script>
</HEAD>
 <BODY id="loginninos">
    <div id="cabecera">
	 <H1 align="center">Area de profes</H1>
	<?php
	  session_start();
	  if (!isset($_SESSION['login']))
	  {
       header("location:index.html");
	  }
	  $name = $_SESSION['name'];
	  echo " <h4 align='center'>Bienvenid@: $name &nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'> Desconectar</a> </h4>";
	?> 
	</div>
        <p>EDUPEQUES Educaci&oacute;n Infantil</p>
    </div>
    <div style="position:absolute;position:absolute;width:50%;left:23%;top:25%;">
        <form name=formulario>
            <TABLE width="60%" align=center>
				<TR class="grupo" style="position:absolute;top:0;left:42%;font-size:30px" cellspacing=20>
                    <td colspan=2><INPUT TYPE="radio" NAME="selector" value="a">a</td>
                    <td><INPUT TYPE="radio" NAME="selector" value="b">b</td>
                </TR>
                <TR class="edad">
                    <TD><img src="img/3.png" width="100" onClick="Seleccion(3,document.formulario.selector)" class="edad" id="tres"></TD>
                    <TD><img src="img/4.png" width="100" onClick="Seleccion(4,document.formulario.selector)" class="edad" id="cuatro"></TD>
                    <TD><img src="img/5.png" width="100" onClick="Seleccion(5,document.formulario.selector)" class="edad" id="cinco"></TD>
                </TR>
            </TABLE>
        </form>  
    </div>
 </BODY>
</HTML>
