<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>5</title>
        <link rel="stylesheet" href="../style.css">
        <style type="text/css">
            .draw
            {    
                width:401px;
                height:550px;
            }
            .ctype1 { background-color:#d300e0; }
            .ctype2 { background-color:#00f0f8; }
            .ctype3 { background-color:#fcff00; }
            .ctype4 { background-color:#000000; }
        </style>
        <script type="text/javascript" src="../script.js"></script>
        <script type="text/javascript">
		var sonidos = 
            {
                /*
                ID:new Audio(FILENAME),  <- remember to use comma
                */
                0:new Audio("../../../sounds/Colours/ES_Purple.mp3"),
				1:new Audio("../../../sounds/Colours/ES_Blue.mp3"),
				2:new Audio("../../../sounds/Colours/ES_Yellow.mp3"),
				3:new Audio("../../../sounds/Colours/ES_Black.mp3"),
				}
            components = ["cara","raya1","raya2","raya3","ala1","ala2","antena1","antena2"];
            gameID = 7;
            lang = "<?php echo(isset($_SESSION["lang"]) ? $_SESSION["lang"] : "EN"); ?>";
        </script>
    </head>
    <body>
        <div class="colorSelector">
            <div class="circle ctype1" onClick="setColor(1);sonidos[0].play()">MORADO</div>
            <div class="circle ctype2" onClick="setColor(2);sonidos[1].play()">AZUL</div>
            <div class="circle ctype3" onClick="setColor(3);sonidos[2].play()">AMARILLO</div>
            <div class="circle ctype4" onClick="setColor(4);sonidos[3].play()"><font color="#FFFFFF">NEGRO</font></div><br><br><br><br><br>
			<a href="game.php"><img src="../iconos/atras.png" width="70" height="70"></a>
        </div>
        <img src="images/base.png"      class="draw" usemap="#abeja"/>
        <img src="images/cara.png"      class="draw" style="display:none;" usemap="#abeja" id="cara"/>
        <img src="images/raya1.png"     class="draw" style="display:none;" usemap="#abeja" id="raya1"/>
        <img src="images/raya2.png"     class="draw" style="display:none;" usemap="#abeja" id="raya2"/>
        <img src="images/raya3.png"     class="draw" style="display:none;" usemap="#abeja" id="raya3"/>
        <img src="images/ala1.png"      class="draw" style="display:none;" usemap="#abeja" id="ala1"/>
        <img src="images/ala2.png"      class="draw" style="display:none;" usemap="#abeja" id="ala2"/>
        <img src="images/antena1.png"   class="draw" style="display:none;" usemap="#abeja" id="antena1"/>
        <img src="images/antena2.png"   class="draw" style="display:none;" usemap="#abeja" id="antena2"/>
        <map name="abeja">
            <area shape="circle" coords="207,183,79" onClick="pintar('cara',3);">
            <area shape="poly" coords="174,262,135,322,275,326,241,265" onClick="pintar('raya1',3);">
            <area shape="poly" coords="131,329,130,402,278,407,275,332" onClick="pintar('raya2',4);">
            <area shape="poly" coords="130,409,147,453,188,488,215,488,258,455,274,412" onClick="pintar('raya3',3);">
            <area shape="poly" coords="118,188,66,191,30,212,11,253,8,309,51,363,74,372,54,387,29,426,28,462,44,510,77,531,122,542,159,524,187,493,164,476,143,446,129,403,130,359,141,306,155,274,172,262,147,239,134,219" onClick="pintar('ala1',2);">
            <area shape="poly" coords="290,190,283,211,271,231,253,248,238,259,255,277,269,311,281,349,284,382,277,422,263,451,244,475,213,493,244,529,287,544,321,538,351,516,373,487,381,453,376,420,352,391,329,377,343,368,372,343,394,301,394,266,381,230,359,208,324,190" onClick="pintar('ala2',2);">
            <area shape="circle" coords="149,40,30" onClick="pintar('antena1',1);">
            <area shape="circle" coords="260,37,29" onClick="pintar('antena2',1);">
        </map>

    </body>
</html>
