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
                var imagen = 
                    [
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
                    ]
                var codigo1 = Math.floor(Math.random()*imagen.length), 
                    codigo2 = Math.floor(Math.random()*imagen.length),
                    codigo3 = Math.floor(Math.random()*imagen.length);

                $("#visor1").attr("src", images_route + imagen[codigo1]);
                $("#visor2").attr("src", images_route + imagen[codigo2]);
                $("#visor3").attr("src", images_route + imagen[codigo3]);

                $("#anterior1") .click(function(){ codigo1 = codigo1 <= 0 ? imagen.length-1 : codigo1-1; $("#visor1").attr("src", images_route + imagen[codigo1]); });
                $("#anterior2") .click(function(){ codigo2 = codigo2 <= 0 ? imagen.length-1 : codigo2-1; $("#visor2").attr("src", images_route + imagen[codigo2]); });
                $("#anterior3") .click(function(){ codigo3 = codigo3 <= 0 ? imagen.length-1 : codigo3-1; $("#visor3").attr("src", images_route + imagen[codigo3]); });

                $("#siguiente1").click(function(){ codigo1 = codigo1 >= imagen.length-1 ? 0 : codigo1+1; $("#visor1").attr("src", images_route + imagen[codigo1]); });
                $("#siguiente2").click(function(){ codigo2 = codigo2 >= imagen.length-1 ? 0 : codigo2+1; $("#visor2").attr("src", images_route + imagen[codigo2]); });
                $("#siguiente3").click(function(){ codigo3 = codigo3 >= imagen.length-1 ? 0 : codigo3+1; $("#visor3").attr("src", images_route + imagen[codigo3]); });

                $("#send").click(function(){
                    document.location='password.php?id='+<?php if(isset($_GET["id"])) echo "'".$_GET["id"]."'"; else echo "''"; ?>+'&cod='+codigo1+''+codigo2+''+codigo3;
                });

            });

        </script>
    </head>

    <body id="ninos">

        <?php
session_start();
include("conexion.php");
if (!isset($_GET["id"]) || $_GET["id"]==="") header("location:index.html");
if (isset($_GET["cod"]))
{
    $students = $fsql->execute("SELECT * FROM alumns WHERE entry = ? AND pwd = ?",array($_GET["id"], $_GET["cod"])) or header("location:password.php?id=".$_GET["id"]);
    foreach($students as $result)
    {
        $_SESSION["entry"] = $result["entry"];
        header("location:game.php");
    }
}
        ?>
        <div id="cabecera">
            <p>EDUPEQUES Educaci&oacute;n Infantil</p>
        </div>
        <div name="cuerpo" class="ninos" id="nin">
            <!--<form method='post' action='password.php'>-->
            <table align="center" style="padding:1%;margin-left:15%;" cellspacing="10">

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
                    <TD COLSPAN=3 ALIGN='CENTER'>
                        <img src="../images/tiki.png" id="send">
                    </TD>
                </TR>

            </table>
            <!--</form>-->
        </div>

    </body>

</html>
