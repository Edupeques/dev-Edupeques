var curColor = 0;
var aciertos = 0, fallos = 0;
var components = [], gameID = 0, lang = "EN"; // OVERRIDE THIS
var miscSounds = "../../../sounds/Misc/";
var mainLocation = "../../../proyecto/";
var sounds = 
    {
        "NO" : [ "_No.mp3", "_NotLikeThis.mp3" ],
        "YES" : [ "_Perfect.mp3", "_VeryWell.mp3" ],
        "DONE" : [ "_YouDoneIt.mp3" ]
    }
function pintar(id, color)
{
    if (isGameCompleted()) { alert("Juego terminado"); return; }
    if (color == curColor && document.getElementById(id).style.display != "")
    {
        document.getElementById(id).style.display = "";
        aciertos++;
    }
    else if(document.getElementById(id).style.display!="" && color != curColor)
    {
        new Audio(miscSounds + lang + sounds["NO"][Math.floor(Math.random()*(sounds["NO"].length))]).play();
        fallos++;
    }
    if (isGameCompleted())
    {
        new Audio(miscSounds + lang + sounds["DONE"][0]).play();
        setTimeout(function(){
            parent.location = mainLocation + "sendResults.php?g="+gameID+"&s="+aciertos+"&f="+fallos;
        },1500);
    }
}

function isGameCompleted()
{
    var res = true;
    for(var i in components) res = isShown(components[i]) ? res : false;
    return res;
}

function setColor(num) { curColor = num; constructCursor(num); }

function isShown(id) { return document.getElementById(id).style.display == ''; }

function constructCursor(num)
{
    var cursor = document.createElement("canvas");
    var ptr = cursor.getContext("2d");
    cursor.width=16;
    cursor.height=16;
    ptr.strokeStyle = document.defaultView.getComputedStyle(document.getElementsByClassName("ctype"+num)[0],null).getPropertyValue('background-color');
    ptr.lineWidth=3;
    ptr.moveTo(2,10);
    ptr.lineTo(2,2);
    ptr.lineTo(10,2);
    ptr.moveTo(2,2);
    ptr.lineTo(30,30);
    ptr.stroke();
    document.body.style.cursor = "url(" + cursor.toDataURL() + "), auto";
}
