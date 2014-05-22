<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <TITLE> New Document </TITLE>
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

                $("#anterior1") .click(function(){  $("#visor1").css("src", images_route + imagen[codigo1-- < 1 ? 24 : codigo1]); });
                $("#anterior2") .click(function(){  $("#visor2").css("src", images_route + imagen[codigo2-- < 1 ? 24 : codigo2]); });
                $("#anterior3") .click(function(){  $("#visor3").css("src", images_route + imagen[codigo3-- < 1 ? 24 : codigo3]); });

                $("#siguiente1").click(function(){  $("#visor1").css("src", images_route + imagen[codigo1++ > 24 ? 1 : codigo1]); });
                $("#siguiente2").click(function(){  $("#visor2").css("src", images_route + imagen[codigo2++ > 24 ? 1 : codigo2]); });
                $("#siguiente3").click(function(){  $("#visor3").css("src", images_route + imagen[codigo3++ > 24 ? 1 : codigo3]); });


            });
        </script>
    </head>

    <body>
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



        <div name="cabecera" id="cabecera"><H1 align="center">Identificaci&oacute;n</H1></div>
        <div name="cuerpo" id="cuerpo">
            <form method='post' action='password.php'>";
                <table align="center" border="1">

                    <tr>
                        <td width=30%>
                            <input id="siguiente1" type="button" value=" > "><br />
                            <img src="../images/buho.png" height="70" id="visor1" name="visor1"><br />
                            <input id="anterior1" type="button" value=" < "><br />
                        </td>


                        <td width=30%>
                            <input id="siguiente2" type="button" value=" > "><br />
                            <img src="../images/perro.png" height="70" id="visor2" name="visor2"><br />
                            <input id="anterior2" type="button" value=" < "><br />
                        </td>

                        <td width=30%>
                            <input id="siguiente3" type="button" value=" > "><br />
                            <img src="../images/perro.png" height="70" id="visor3" name="visor3"><br />
                            <input id="anterior3" type="button" value=" < "><br />
                        </td>

                    </tr>
                    <tr>
                        <td COLSPAN=3 ALIGN=CENTER>
                            <input id="send" type="submit" value='Enviar'>
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </div>

</body>

</html>
