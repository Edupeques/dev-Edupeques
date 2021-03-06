<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            .draw
            {    
                width:557;
                height:500;
            }
            .ctype1 { background-color:#9a0808; }
            .ctype2 { background-color:#1dd4fb; }
            .ctype3 { background-color:#fbf91d; }
        </style>
        <script language="javascript" src="../script.js" type="text/javascript"></script>
        <script>
            var sonidos = 
                {
                    /*
                ID:new Audio(FILENAME),  <- remember to use comma
                */
                    0:new Audio("../../../sounds/Colours/ES_Red.mp3"),
                    1:new Audio("../../../sounds/Colours/ES_Blue.mp3"),
                    2:new Audio("../../../sounds/Colours/ES_Yellow.mp3"),
                }
            components = ["pared","chimenea","techo","ventana","ventana2"];
            gameID = 3;
            lang = "<?php echo(isset($_SESSION["lang"]) ? $_SESSION["lang"] : "EN"); ?>";
        </script>
    </head>
    <body>        
        <div class="colorSelector">
            <div class="circle ctype1" onClick="setColor(1);sonidos[0].play()">ROJO</div>
            <div class="circle ctype2" onClick="setColor(2);sonidos[1].play()">AZUL</div>
            <div class="circle ctype3" onClick="setColor(3);sonidos[2].play()">AMARILLO</div><br><br><br><br><br><br><br><br><br>
			<a href="game.php"><img src="../iconos/atras.png" width="70" height="70"></a>
        </div>
        <img src="images/base.png" usemap="#casa" class="draw" >
        <img src="images/pared-1.png" usemap="#casa" class="draw" id="pared" style="display:none;"/>
        <img src="images/pared-2.png" usemap="#casa" class="draw" id="chimenea" style="display:none;"/>
        <img src="images/techo.png" usemap="#casa" class="draw" id="techo" style="display:none;"/>
        <img src="images/ventana-1.png" usemap="#casa" class="draw" id="ventana" style="display:none;"/>
        <img src="images/ventana-2.png" usemap="#casa" class="draw" id="ventana2" style="display:none;"/>
        <map name="casa">
            <area shape="poly" coords="176,80,123,114,69,170,28,222,10,273,24,301,49,298,87,251,143,210,174,212,203,241,226,279,244,319,268,349,316,353,516,288,550,253,544,219,414,65,392,58,307,74,203,73" alt="Techo" onClick="pintar('techo', 1);">
            <area shape="poly" coords="67,291,65,416,95,429,127,347,158,339,158,309,139,288,142,265,161,261,178,274,178,291,162,306,164,341,190,363,212,400,215,443,211,469,223,479,291,493,495,409,499,303,452,314,449,371,360,405,352,346,293,359,264,352,197,241,157,216,120,231,91,258,79,273" alt="Pared" onClick="pintar('pared', 2);">
            <area shape="poly" coords="357,346,360,397,445,370,448,323" alt="Ventana2" onClick="pintar('ventana2', 3);">
            <area shape="poly" coords="132,349,104,431,208,467,204,386,166,345" alt="Ventana" onClick="pintar('ventana', 3);">
            <area shape="circle" coords="160,280,14" alt="Ventana" onClick="pintar('ventana', 3);">
            <area shape="poly" coords="278,17,278,69,351,62,348,13" alt="Chimenea" onClick="pintar('chimenea', 2);">
        </map>


    </body>
</html>
