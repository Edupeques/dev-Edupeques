<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <TITLE> Login peques </TITLE>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../css/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <script>
                var images_route = "../images/";
                var codigo1 = 1, codigo2 = 1, codigo3 = 1;
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
				document.location='password.php?Pos=2&Codigo='+Codigo;
			}	  
		</script>
    </head>

    <body id="ninos">

        <?php
session_start();
include("conexion.php");
if (!isset($_GET["id"])) header("location:index.html");
if (isset($_POST["cod"]))
{
    foreach($fsql->execute("SELECT * FROM alumns WHERE entry = ? AND pwd = ?",array($_GET["id"], $_POST["cod"])) as $result)
    {
        $_SESSION["entry"] = $result["entry"];
        header("location:game.php");
    }
    header("location:password.php");
}
        ?>
        <div id="cabecera">
            <p>EDUPEQUES Educaci&oacute;n Infantil</p>
        </div>
        <div name="cuerpo" class="ninos" id="nin">
            <form method='post' action='password.php'>
                <table align="center" style="padding:1%;margin-left:15%;" cellspacing="10">

                    <TR>
                        <TD width='30%'><a id="siguiente1" onclick="siguiente1()"><img src="../images/up.png"/></a></TD>
                        <TD width='30%'><a id="siguiente2" onclick="siguiente2()"><img src="../images/up.png"/></a></TD>
                        <TD width='30%'><a id="siguiente3" onclick="siguiente3()"><img src="../images/up.png"/></a></TD>
                    </TR>
                    <TR>
                        <TD class="ninos"><img src="../images/buho.png" class="visor" id="visor1" name="visor1"></TD>
                        <TD class="ninos"><img src="../images/perro.png" class="visor" id="visor2" name="visor2"></TD>
                        <TD class="ninos"><img src="../images/perro.png" class="visor" id="visor3" name="visor3"></TD>
                    </TR>
                    <TR>
                        <TD width='30%'><a id="anterior1" onclick="anterior1()"><img src="../images/down.png"/></a></TD>
                        <TD width='30%'><a id="anterior2" onclick="anterior2()"><img src="../images/down.png"/></a></TD>
                        <TD width='30%'><a id="anterior3" onclick="anterior3()"><img src="../images/down.png"/></a></TD>
                    </TR>
                    <TR>
                        <TD COLSPAN=3 ALIGN='CENTER'>
                            <a onClick="Enviar()" href=""><img src="../images/tiki.png" id="send"></a>
                        </TD>
                    </TR>

                </table>
            </form>
        </div>

    </body>

</html>
