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

function setColor(num) { curColor = num; }

function isShown(id) { return document.getElementById(id).style.display == ''; }