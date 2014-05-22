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

include("conexion.php");

$indice=$_GET['ref'];
if($stmt=$mysqli->prepare("SELECT * FROM alumns WHERE class=?"))
{
    $stmt->bind_param("i",$indice);
    $result = $stmt->execute();
    $i = 0;
    while ($row = $result->fetch_assoc()) 
    {
		if($row['entry']%5==0)
		{
				echo "<tr></tr>";
		}
        echo "<img src='img/".$row['photo']."' width=100 title='".$row['entry']."' class='imageFace' class='ninos'/>";
        if($i==1)
        {
            $i = 0;
            echo("<br />");
        }
        $i++;
    }
    $result->free();
    $stmt->close();

}
            ?>
		</tr>
    	</table>
        <form>
            <input type="hidden" id="entry" name="entry" value="">
            <input type="submit" id="entrySubmit">
        </form>
		</div>
    </BODY>
</HTML>
