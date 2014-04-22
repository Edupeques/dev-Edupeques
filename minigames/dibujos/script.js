var curColor = 0;
var components = []; // OVERRIDE THIS
function pintar(id, color)
{
	if (isGameCompleted()) { alert("Juego terminado"); return; }
	if (color == curColor)
		document.getElementById(id).style.display = "";
	else
		alert("No, no!");
	if (isGameCompleted())
		alert("Bien!");
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
