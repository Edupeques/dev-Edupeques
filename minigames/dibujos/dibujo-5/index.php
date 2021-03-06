<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>5</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            .draw
            {    
                width:445px;
                height:550px;
            }
            .ctype1 { background-color:#bc0000; }
            .ctype2 { background-color:#0031bc; }
            .ctype3 { background-color:#ffd200; }
            .ctype4 { background-color:#00b909; }
        </style>
        <script type="text/javascript" src="../script.js"></script>
        <script type="text/javascript">
            components = ["cara","cuerpo","pata1","pata2","pico1","pico2","ala"];
            gameID = 5;
            lang = "<?php echo(isset($_SESSION["lang"]) ? $_SESSION["lang"] : "EN"); ?>";
        </script>
    </head>
    <body>
        <div class="colorSelector">
            <div class="circle ctype1" onClick="setColor(1);"><font color="#FFFFFF">ROJO</font></div>
            <div class="circle ctype2" onClick="setColor(2);"><font color="#FFFFFF">AZUL</font></div>
            <div class="circle ctype3" onClick="setColor(3);">AMARILLO</div>
            <div class="circle ctype4" onClick="setColor(4);">VERDE</div><br><br><br><br><br>
			<a href="game.php"><img src="../iconos/atras.png" width="70" height="70"></a>
        </div>
        
        <img src="images/base.png"   class="draw" usemap="#loro"/>
        <img src="images/cara.png"   id="cara"   class="draw" style="display:none;" usemap="#loro"/>
        <img src="images/cuerpo.png" id="cuerpo" class="draw" style="display:none;" usemap="#loro"/>
        <img src="images/pata1.png"  id="pata1"  class="draw" style="display:none;" usemap="#loro"/>
        <img src="images/pata2.png"  id="pata2"  class="draw" style="display:none;" usemap="#loro"/>
        <img src="images/pico1.png"  id="pico1"  class="draw" style="display:none;" usemap="#loro"/>
        <img src="images/pico2.png"  id="pico2"  class="draw" style="display:none;" usemap="#loro"/>
        <img src="images/ala.png"    id="ala"    class="draw" style="display:none;" usemap="#loro"/>
        
        <map name="loro">
            <area shape="poly" coords="235,207,212,248,191,301,167,341,170,370,181,387,203,396,237,391,280,376,312,345,329,308,338,263,328,232,307,205,279,192,259,195" onClick="pintar('ala',2);">
            <area shape="poly" coords="344,55,315,47,283,50,261,73,261,108,279,144,313,157,348,156,359,145,349,102" onClick="pintar('cara',1);">
            <area shape="poly" coords="348,37,351,88,375,96,415,88,431,96,433,85,423,56,406,35,377,36" onClick="pintar('pico1',3);">
            <area shape="poly" coords="351,100,363,143,408,101,379,101,358,96" onClick="pintar('pico2',3);">
            <area shape="poly" coords="345,52,345,33,296,13,261,21,223,43,204,79,206,113,215,159,201,195,159,271,137,361,134,383,100,413,16,439,12,449,27,462,42,473,30,489,27,504,66,514,98,512,127,498,163,473,193,423,221,435,271,441,310,431,347,409,377,376,400,335,407,289,403,242,386,196,368,159,359,151,338,158,317,159,288,153,265,129,256,92,266,59,296,45,328,48" onClick="pintar('cuerpo',4);">
            <area shape="poly" coords="264,446,260,473,266,488,295,500,330,514,341,522,296,532,242,531,203,526,223,488,240,444" onClick="pintar('pata1',3);">
            <area shape="poly" coords="268,446,264,474,269,495,320,508,355,510,348,500,303,489,285,477,286,442" onClick="pintar('pata2',3);">
        </map>
        
    </body>
</html>
