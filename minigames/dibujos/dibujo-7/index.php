<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>5</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            .draw
            {    
                width:587px;
                height:550px;
            }
            .ctype1 { background-color:#ff0000; }
            .ctype2 { background-color:#0068f5; }
            .ctype3 { background-color:#f5f300; }
            .ctype4 { background-color:#686868; }
            .ctype5 { background-color:#9f6100; }
        </style>
        <script type="text/javascript" src="../script.js"></script>
        <script type="text/javascript">
			var sonidos = 
            {
                /*
                ID:new Audio(FILENAME),  <- remember to use comma
                */
                0:new Audio("../../../sounds/Colours/ES_Red.mp3"),
				1:new Audio("../../../sounds/Colours/ES_Blue.mp3"),
				2:new Audio("../../../sounds/Colours/ES_Yellow.mp3"),
				3:new Audio("../../../sounds/Colours/ES_Grey.mp3"),
					4:new Audio("../../../sounds/Colours/ES_Brown.mp3"),
				}
            components = 
            ["manillar","marco","marco2","marco3","rueda1","rueda2","asiento","delantera","faro","faro2","faro3","guardabarro","llanta1","llanta2"];
            gameID = 7;
            lang = "<?php echo(isset($_SESSION["lang"]) ? $_SESSION["lang"] : "EN"); ?>";
        </script>
    </head>
    <body>
        <div class="colorSelector">
            <div class="circle ctype1" onClick="setColor(1);sonidos[0].play()">ROJO</div>
            <div class="circle ctype2" onClick="setColor(2);sonidos[1].play()">AZUL</div>
            <div class="circle ctype3" onClick="setColor(3);sonidos[2].play()">AMARILLO</div>
            <div class="circle ctype4" onClick="setColor(4);sonidos[3].play()"><font color="#FFFFFF">GRIS</font></div>
            <div class="circle ctype5" onClick="setColor(5);sonidos[4].play()">MARRON</div>
        </div>
        <img src="images/base.png"          class="draw" usemap="#moto"/>
        <img src="images/manillar.png"      class="draw" style="display:none;" usemap="#moto" id="manillar"/>
        <img src="images/marco.png"         class="draw" style="display:none;" usemap="#moto" id="marco"/>
        <img src="images/marco2.png"        class="draw" style="display:none;" usemap="#moto" id="marco2"/>
        <img src="images/marco3.png"        class="draw" style="display:none;" usemap="#moto" id="marco3"/>
        <img src="images/rueda1.png"        class="draw" style="display:none;" usemap="#moto" id="rueda1"/>
        <img src="images/rueda2.png"        class="draw" style="display:none;" usemap="#moto" id="rueda2"/>
        <img src="images/asiento.png"       class="draw" style="display:none;" usemap="#moto" id="asiento"/>
        <img src="images/delantera.png"     class="draw" style="display:none;" usemap="#moto" id="delantera"/>
        <img src="images/faro.png"          class="draw" style="display:none;" usemap="#moto" id="faro"/>
        <img src="images/faro2.png"         class="draw" style="display:none;" usemap="#moto" id="faro2"/>
        <img src="images/faro3.png"         class="draw" style="display:none;" usemap="#moto" id="faro3"/>
        <img src="images/guardabarro.png"   class="draw" style="display:none;" usemap="#moto" id="guardabarro"/>
        <img src="images/llanta1.png"       class="draw" style="display:none;" usemap="#moto" id="llanta1"/>
        <img src="images/llanta2.png"       class="draw" style="display:none;" usemap="#moto" id="llanta2"/>
        <map name="moto">
            <area shape="poly" coords="120,13,98,21,93,45,84,76,87,114,85,138,101,163,120,169,134,155,145,127,150,102,153,75,148,49,145,32,134,22" onClick="pintar('faro',3);">
            <area shape="poly" coords="136,14,150,41,154,68,154,104,144,149,127,174,147,175,163,169,184,131,187,91,187,58,178,28,169,14" onClick="pintar('faro2',4);">
            <area shape="poly" coords="176,14,191,72,192,115,180,157,170,172,226,154,260,114,239,96,232,73,242,59,245,50,225,32,204,24" onClick="pintar('faro3',2);">
            <area shape="poly" coords="262,52,245,62,236,75,240,88,253,103,269,111,276,105,276,97,286,98,299,104,322,108,346,102,361,93,364,79,350,65,318,63,295,66,281,68,276,53" onClick="pintar('manillar',1);">
            <area shape="poly" coords="198,170,153,200,120,250,110,299,155,299,190,315,201,318,208,294,224,239,225,189,226,163" onClick="pintar('delantera',2);">
            <area shape="poly" coords="10,368,44,326,102,300,147,302,194,319,234,354,249,399,254,448,223,437,152,404,94,383" onClick="pintar('guardabarro',2);">
            <area shape="poly" coords="80,390,64,412,68,444,81,469,104,477,138,484,168,463,179,443,184,419,141,400,104,390" onClick="pintar('llanta1',1);">
            <area shape="poly" coords="34,378,19,410,17,462,31,495,60,526,109,541,155,536,196,512,218,479,226,443,202,428,193,427,184,450,167,468,137,486,105,486,78,471,67,446,61,422,67,398,74,390,72,383" onClick="pintar('rueda1',4);">
            <area shape="poly" coords="217,303,292,362,367,374,388,373,405,401,363,402,300,408,260,405,248,376,237,355,219,334,205,323,210,311" onClick="pintar('marco',2);">
            <area shape="poly" coords="337,247,310,289,305,341,310,366,388,371,383,348,393,305,413,276,441,245,464,232,399,235" onClick="pintar('marco2',2);">
            <area shape="poly" coords="469,239,428,262,395,315,389,358,403,385,429,402,547,404,577,372,579,316,562,264,510,238" onClick="pintar('marco3',2);">
            <area shape="poly" coords="392,411,399,434,428,449,463,449,483,433,494,411" onClick="pintar('llanta2',1);">
            <area shape="poly" coords="339,414,347,440,358,466,380,479,407,493,460,499,495,489,524,469,538,439,547,419,541,411,496,414,486,436,464,447,430,451,405,441,393,426,391,410" onClick="pintar('rueda2',4);">
            <area shape="poly" coords="335,242,395,231,472,232,536,246,548,249,552,209,532,179,476,159,412,158,366,170,341,184,328,209,325,228" onClick="pintar('asiento',5);">
        </map>
    </body>
</html>
