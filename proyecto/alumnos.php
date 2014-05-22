<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <TITLE> New Document </TITLE>
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
    <BODY>
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
        echo "<img src='img/".$row['photo']."' width=100 title='".$row['entry']."' class='imageFace'/>";
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

        <form>
            <input type="hidden" id="entry" name="entry" value="">
            <input type="submit" id="entrySubmit">
        </form>
    </BODY>
</HTML>
