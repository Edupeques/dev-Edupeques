 var acierto=0, cont=1,ran1,ran2,ran3, elemento;

	
	 numeros=new Array();
	 numeros[0]="./images/N.png";
	 numeros[1]="./images/R.png";
	

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
		if (acierto==20 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/N1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/P1.png")
		{
			
		}
        if(acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/P1.png")
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
		if (acierto==11 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/Q1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
		
}
if (acierto==13 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/R1.png")
		{
			
		}
        if(acierto==13 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/R1.png")
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
		if (acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/S1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}

}
if (acierto==8 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/T1.png")
		{

		}
        if(acierto==8 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/T1.png")
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
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/V1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}

}
if (acierto==21 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/W1.png")
		{

		}
        if(acierto==21 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/W1.png")
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
		if (acierto==11 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/X1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}

}
if (acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/Y1.png")
		{

		}
        if(acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/Y1.png")
        {

			window.alert("muy bien");
			acierto=0;
        }
}
function rellenar7(part)
{      
		//rellenamos poco a poco la matriz    
		if(cont==part.substr(3))
        {
            document.getElementById(part).style.visibility = "visible";
            cont=cont+1;
            acierto=acierto+1;
        }
		//condicionales del numero 1
		if (acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/Z1.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}

}
if (acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/Z1.png")
		{

		}
        if(acierto==10 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/Z1.png")
        {

			window.alert("muy bien");
			acierto=0;
        }
}