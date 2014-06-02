<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <?php
include("conexion.php");
session_start();
$usu=$_SESSION["entry"];
    ?>
    <HEAD>
        <TITLE> Menu </TITLE>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../css/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script>
            $(function(){
                $(".imageFace").click(function(){
                    $("#entry").attr("value",$(this).attr("title"));
                    $("#entrySubmit").submit();
                });
            });
        </script>
    </HEAD>
    <BODY id="ninos">
        <div id="cabecera">
            <p>EDUPEQUES Educaci&oacute;n Infantil <?php echo $usu;?></p>
        </div>	  
        <div class="ninos">
            <center><table style="padding:2%;">
                <?php

// obtenemos la edad recomendada del chaval a partir de su clase, no de su fecha de nacimiento
$edad = $fsql->execute("SELECT classes.class FROM classes INNER JOIN alumns ON alumns.class = classes.entry WHERE alumns.entry = ?",array($usu)) 
    or die("El alumno no existe o la clase no tiene una edad asignada");
$ed = ($edad[0][0]==1 || $edad[0][0]==2) ? 3 : (($edad[0][0]==3 || $edad[0][0]==4) ? 4 : (($edad[0][0]==5 || $edad[0][0]==6) ? 5 : 0));
foreach($fsql->execute("SELECT categories.* FROM categories INNER JOIN games ON games.category = categories.entry WHERE games.age = ? GROUP BY categories.entry", array($ed)) as $categoria)
{
    $i = 0;
    echo "<tr><td colspan=5 align=center>".$categoria['name']."</td></tr>";
    foreach($fsql->execute("SELECT * FROM games WHERE age = ? AND category = ?",array($ed, $categoria["entry"])) as $juego)
    {

        if($i%5==0){echo "</tr><tr>"; $i = 0; }
        echo "<td><a href='".$juego['url']."'>".$juego['game']."</td>";
        //<img src='".$juego['image']."' width=100 onClick='parent.location=\"".$juego['url']."\"' alt='".$juego["game"]."' title='".$juego["game"]."' class='imageFace, ninos'/>"
        $i++;
    }


}
                ?>
                </table></center>
        </div>
    </BODY>
</HTML>
