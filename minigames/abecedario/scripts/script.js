 var acierto=0, cont=1,ran1,ran2,ran3, elemento;

	
	 numeros=new Array();
	 numeros[0]="./images/c.png";
	 numeros[1]="./images/L.png";

/*REPASO DE CONTORNOS DE LOS NUMEROS*/
function rellenar(part)
{      
		//rellenamos poco a poco la matriz    
		if(cont==part.substr(3))
        {
            document.getElementById(part).style.visibility = "visible";
            cont=cont+1;
            acierto=acierto+1;
        }
		//condicionales del numero 1
		if (acierto==12 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/c1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/D1.png")
		{
			
		}
        if(acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/D1.png")
        {
		
			window.alert("muy bien");
			acierto=0;
        }
}

 function rellenar2(part)
{      
		//rellenamos poco a poco la matriz    
		if(cont==part.substr(3))
        {
            document.getElementById(part).style.visibility = "visible";
            cont=cont+1;
            acierto=acierto+1;
        }
		//condicionales del numero 1
		if (acierto==8 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/L1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/F1.png")
		{
			
		}
        if(acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/F1.png")
        {
		
			window.alert("muy bien");
			acierto=0;
        }
}
function rellenar4(part)
{      
		//rellenamos poco a poco la matriz    
		if(cont==part.substr(3))
        {
            document.getElementById(part).style.visibility = "visible";
            cont=cont+1;
            acierto=acierto+1;
        }
		//condicionales del numero 1
		if (acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/G1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/H1.png")
		{
			
		}
        if(acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/H1.png")
        {
		
			window.alert("muy bien");
			acierto=0;
        }
}
function rellenar5(part)
{      
		//rellenamos poco a poco la matriz    
		if(cont==part.substr(3))
        {
            document.getElementById(part).style.visibility = "visible";
            cont=cont+1;
            acierto=acierto+1;
        }
		//condicionales del numero 1
		if (acierto==11 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/J1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/K1.png")
		{
			
		}
        if(acierto==14 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/K1.png")
        {
		
			window.alert("muy bien");
			acierto=0;
        }
}
function rellenar6(part)
{      
		//rellenamos poco a poco la matriz    
		if(cont==part.substr(3))
        {
            document.getElementById(part).style.visibility = "visible";
            cont=cont+1;
            acierto=acierto+1;
        }
		//condicionales del numero 1
		if (acierto==20 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/M1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==18 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/B1.png")
		{
			
		}
        if(acierto==18 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/B1.png")
        {
		
			window.alert("muy bien");
			acierto=0;
        }
}
