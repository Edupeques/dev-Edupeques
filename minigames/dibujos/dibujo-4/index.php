<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>4</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            .draw
            {    
                width:494px;
                height:550px;
            }
            .ctype1 { background-color:#d10000; }
            .ctype2 { background-color:#00a0fb; }
            .ctype3 { background-color:#f3fb00; }
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
            components = ["papada","pata1","pata2","pico","ala","cresta","cuerpo"];
            gameID = 4;
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
        <img src="images/base.png" width="494" height="550" usemap="#gallina" class="draw"/>
        <img src="images/papada.png" class="draw" id="papada" usemap="#gallina" style="display:none;"/>
        <img src="images/pata1.png" class="draw" id="pata1" usemap="#gallina" style="display:none;"/>
        <img src="images/pata2.png" class="draw" id="pata2" usemap="#gallina" style="display:none;"/>
        <img src="images/pico.png" class="draw" id="pico" usemap="#gallina" style="display:none;"/>
        <img src="images/ala.png" class="draw" id="ala" usemap="#gallina" style="display:none;"/>
        <img src="images/cresta.png" class="draw" id="cresta" usemap="#gallina" style="display:none;"/>
        <img src="images/cuerpo.png" class="draw" id="cuerpo" usemap="#gallina" style="display:none;"/>
        
        <map name="gallina">
            <area shape="poly" coords="211,115,171,103,181,148" onClick="pintar('pico',3);" alt="Pico">
            <area shape="poly" coords="172,98,148,84,113,90,98,104,94,129,107,156,127,174,153,171,163,185,156,211,161,237,178,254,205,247,215,231,224,222,227,199,211,184,187,166,172,137,168,116" onClick="pintar('papada',1);" alt="Papada">
            <area shape="poly" coords="171,88,147,62,85,61,40,79,15,119,17,165,34,220,42,258,47,304,58,344,80,383,104,404,130,420,159,436,189,450,223,474,253,479,274,475,298,478,330,469,366,447,395,420,414,377,424,334,434,298,451,266,470,231,482,202,481,175,477,154,468,148,457,155,454,139,442,136,412,151,390,168,348,163,314,160,279,158,252,160,225,168,210,171,225,182,235,189,269,193,287,194,304,187,321,192,338,194,350,189,357,203,374,207,384,208,397,212,407,228,404,246,403,272,396,292,387,320,373,341,362,357,338,375,312,388,278,396,240,393,207,384,182,368,169,353,155,328,151,306,149,272,157,247,152,230,154,211,156,190,158,178,148,173,122,176,111,171,96,148,91,134,90,121,98,101,116,87,134,82,158,80" onClick="pintar('cuerpo',2);" alt="Cuerpo">
            <area shape="poly" coords="159,250,149,294,162,334,180,365,218,387,276,393,325,384,368,351,389,314,405,272,403,234,396,213,373,218,351,200,323,203,308,192,289,200,237,195,233,218,216,234,204,253,184,258" onClick="pintar('ala',2);" alt="Ala">
            <area shape="poly" coords="283,480,273,506,282,524,301,530,313,531,330,540,346,532,342,521,328,515,332,498,346,490,361,491,376,489,383,477,373,464,356,459,320,476" onClick="pintar('pata1',3);" alt="Pata1">
            <area shape="poly" coords="235,481,232,492,193,489,163,484,141,493,139,506,156,513,162,520,204,515,234,538,242,527,231,511,251,498,263,499,263,485,263,481" onClick="pintar('pata2',3);" alt="Pata2">
            <area shape="poly" coords="152,57,162,31,144,24,121,36,86,14,72,35,47,37,30,50,35,70,41,76,95,59" onClick="pintar('cresta',1);" alt="Cresta">
        </map>
        
    </body>
</html>
