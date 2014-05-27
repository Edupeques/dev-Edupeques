<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <TITLE> Alumnos </TITLE>
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
        <p>EDUPEQUES Educaci&oacute;n Infantil</p>
    </div>	  
	<div class="ninos">
  		<table style="padding:2%;">
        	<tr> 
            <?php
session_start();
if(!isset($_GET["ref"])) header("location:index.html");
if(isset($_GET["m"]) && $_GET["m"]==1) header("location:password.php?id=".$_GET["ref"]);

$ref = $_GET["ref"];
switch($ref)
{
    case 31: $ref = 1; break;
    case 32: $ref = 2; break;
    case 41: $ref = 3; break;
    case 42: $ref = 4; break;
    case 51: $ref = 5; break;
    case 52: $ref = 6; break;
    default: $ref = 1; break;
}
$i = 0;
include("conexion.php");
foreach($fsql->execute("SELECT * FROM alumns WHERE class = ?",array($ref)) as $row)
{
    if($row['entry']%5==0)
    {
            echo "<tr></tr>";
    }
    echo "<td><img src='img/".$row['photo']."' width=100 onClick='parent.location=\"alumnos.php?ref=".$row['entry']."&m=1\"' alt='".$row["name"]."' title='".$row["name"]."' class='imageFace, ninos'/></td>";
    if($i==1)
    {
        $i = 0;
        echo("<br />");
    }
    $i++;
}
            ?>
		</tr>
    	</table>
		</div>
    </BODY>
</HTML>
