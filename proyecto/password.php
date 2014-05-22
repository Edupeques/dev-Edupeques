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
            $(function(){
                var images_route = "../images/";
                var codigo1 = 1, codigo2 = 1, codigo3 = 1;
                var imagen = 
                    {
                        "ardilla.png",
                        "avion.png",
                        "arbol.png",
                        "ballena.png",
                        "buho.png",
                        "burro.png",
                        "canguro.png",
                        "casa.png",
                        "cocodrilo.png",
                        "conejo.png",
                        "fresa.png",
                        "gato.png",
                        "leon.png",
                        "mariposa.png",
                        "loro.png",
                        "mano.png",
                        "buho.png",
                        "paloma.png",
                        "pajaro.png",
                        "mono.png",
                        "moto.png",
                        "pato.png",
                        "perro.png"
                    }
				$(function(){
					$("#visor1").attr("src", imagenes[Math.floor(Math.random()*imagenes.length)]);
					$("#visor2").attr("src", imagenes[Math.floor(Math.random()*imagenes.length)]);
					$("#visor3").attr("src", imagenes[Math.floor(Math.random()*imagenes.length)]);
				});
                $("#anterior1") .click(function(){  $("#visor1").css("src", images_route + imagen[codigo1-- < 1 ? 24 : codigo1]); });
                $("#anterior2") .click(function(){  $("#visor2").css("src", images_route + imagen[codigo2-- < 1 ? 24 : codigo2]); });
                $("#anterior3") .click(function(){  $("#visor3").css("src", images_route + imagen[codigo3-- < 1 ? 24 : codigo3]); });

                $("#siguiente1").click(function(){  $("#visor1").css("src", images_route + imagen[codigo1++ > 24 ? 1 : codigo1]); });
                $("#siguiente2").click(function(){  $("#visor2").css("src", images_route + imagen[codigo2++ > 24 ? 1 : codigo2]); });
                $("#siguiente3").click(function(){  $("#visor3").css("src", images_route + imagen[codigo3++ > 24 ? 1 : codigo3]); });


            });
        </script>
    </head>

    <BODY id="ninos">

        <?php
session_start();
include("conexion.php");
if (isset($_POST["cod"]) && isset($_SESSION["face"]))
{
    //Consulta SQL:
    if($stmt=$mysqli->prepare("SELECT * FROM alumns WHERE pwd=?"))
    {
        $stmt->bind_param("i",$cod);
        $result = $stmt->execute();

        if ($result->num_rows)
        {
            $_SESSION["entry"] = $result["entry"];
            header("location:game.php");
        }
        else
        {	
            header("location:password.php");
        }
    }
}
        ?>



        <div id="cabecera">
        <p>EDUPEQUES Educaci&oacute;n Infantil</p>
    </div>
	<div name="cuerpo" class="ninos" id="nin">
            <form method='post' action='password.php'>";
                <table align="center" style="padding:2%;margin-left:15%;">

<TR>
	<TD width=30%><a id="siguiente1"><img src="../images/up.png"/></a></TD>
	<TD width=30%><a id="siguiente2"><img src="../images/up.png"/></a></TD>
	<TD width=30%><a id="siguiente3"><img src="../images/up.png"/></a></TD>
</TR>
<TR>
	<TD class="ninos"><img src="../images/buho.png" class="ninos" id="visor1" name="visor1"></TD>
	<TD class="ninos"><img src="../images/perro.png" class="ninos" id="visor2" name="visor2"></TD>
	<TD class="ninos"><img src="../images/perro.png" class="ninos" id="visor3" name="visor3"></TD>
</TR>
<TR>
	<TD width=30%><a id="anterior1"><img src="../images/down.png"/></a></TD>
	<TD width=30%><a id="anterior2"><img src="../images/down.png"/></a></TD>
	<TD width=30%><a id="anterior3"><img src="../images/down.png"/></a></TD>
</TR>
<TR>
	<TD COLSPAN=3 ALIGN=CENTER>
	<img onClick='Enviar()' src="../images/tiki.png" id="send">
	</td>
</tr>

</table>
            </form>
        </div>
    </div>

</body>

</html>
