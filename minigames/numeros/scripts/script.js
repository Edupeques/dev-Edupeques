 var acierto=0, cont=1,ran1,ran2,ran3, elemento;

	 imagenes=new Array();
	 imagenes[0]="./images/gatocolor.png";
	 imagenes[1]="./images/cangurocolor.png";
	 imagenes[2]="./images/conejocolor.png";
	 imagenes[3]="./images/leoncolor.png";
	 imagenes[4]="./images/perrocolor.png";
	 imagenes[5]="./images/pollito.png";	
	 numeros=new Array();
	 numeros[0]="./images/uno.png";
	 numeros[1]="./images/dos.png";
	 numeros[2]="./images/tres.png";

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
		if (acierto==9 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/uno01.png")
		{
			if(document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
			else
			{
				document.getElementById('gato').innerHTML="Gato";
				gatoimg.src="./images/gatocolor.png"
			}	
		}
		if (acierto==18 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/uno01.png")
		{
			document.getElementById('perro').innerHTML="Perro";
			perroimg.src="./images/perrocolor.png"
		}
        if(acierto==27 &&
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/uno01.png")
        {
			document.getElementById('conejo').innerHTML="Conejo";
			conejoimg.src="./images/conejocolor.png";
			window.alert("muy bien");
			acierto=0;
        }
		//condicionales de los numeros 2 y 3
		if (acierto==11 && 
			(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png"	 ||
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/dos01.png"))
		{
			if((document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png"	 ||
				document.getElementById("ele1").getAttribute("src")==	"./images/contornos/dos01.png") &&
				document.getElementById("ele1").getAttribute("class")==	"invisible")
			{
				 window.alert("muy bien");
				acierto=0;
				return;
			}
			if(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png" &&
				document.getElementById("ele1").getAttribute("class")!=	"invisible")
			{
				document.getElementById('gato').innerHTML="Gatos";
				gatoimg1.src="./images/gatocolor.png"
				gatoimg2.src="./images/gatocolor.png"
				gatoimg3.src="./images/gatocolor.png"
			}
			if(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/dos01.png" &&
				document.getElementById("ele1").getAttribute("class")!=	"invisible")
			{
				document.getElementById('gato').innerHTML="Gatos";
				gatoimg1.src="./images/gatocolor.png"
				gatoimg2.src="./images/gatocolor.png"
			}
		}
		if (acierto==22 && 
			(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png"	 ||
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/dos01.png"))
		{
			if(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png")
			{
				document.getElementById('perro').innerHTML="Perros";
				perroimg1.src="./images/perrocolor.png"
				perroimg2.src="./images/perrocolor.png"
				perroimg3.src="./images/perrocolor.png"
			}
			else
			{
				document.getElementById('perro').innerHTML="Perros";
				perroimg1.src="./images/perrocolor.png"
				perroimg2.src="./images/perrocolor.png"
			}
		}
        if(acierto==33 && 
			(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png"	 ||
			document.getElementById("ele1").getAttribute("src")==	"./images/contornos/dos01.png"))
        {
			if(document.getElementById("ele1").getAttribute("src")==	"./images/contornos/tres01.png")
			{
				document.getElementById('conejo').innerHTML="Conejos";
				conejoimg1.src="./images/conejocolor.png";
				conejoimg2.src="./images/conejocolor.png";
				conejoimg3.src="./images/conejocolor.png";
				window.alert("muy bien");
				acierto=0;
			}
			else
			{
				document.getElementById('conejo').innerHTML="Conejos";
				conejoimg1.src="./images/conejocolor.png";
				conejoimg2.src="./images/conejocolor.png";
				window.alert("muy bien");
				acierto=0;
			}
        }
}
/*VERIFICACION DE CANTIDADES*/
	 //CANTIDADES INVERSO
	 function vista1()
	 {
		 if(document.getElementById("a").getAttribute("name")=="a1")
		 {
			a1.src = a2.src = a3.src = a4.src = a5.src = a6.src = imagenes[Math.round(Math.random()*5)];
			num.src=numeros[Math.round(Math.random()*2)];
		 }
	 }
	function comprobar1(elemento)
	{
		if (document.getElementById("num").getAttribute("src") == "./images/tres.png" 
		&& elemento=="tres" ){ window.alert("CORRECTO"); }

		else if  (document.getElementById("num").getAttribute("src") == "./images/dos.png" 
		&& elemento=="dos"){ window.alert("CORRECTO"); }

		else if (document.getElementById("num").getAttribute("src") == "./images/uno.png" 
		&& elemento=="uno"){ window.alert("CORRECTO"); }

		else { window.alert("ERROR"); }
	}
	//CANTIDADES
	function vista2()
	{
		ran1 = Math.round(Math.random()*5);
		 //decidimos si vamos a mostrar o no
		 mostrar=new Array();
		 mostrar[0]=imagenes[ran1];
		 mostrar[1]="./images/sero.png";
		 //generar 2º y 3º random
		 ran2 = Math.round(Math.random()*1);
		 ran3 = Math.round(Math.random()*1);
		 //asignamos a las imagenes sus valores aleatorios
		 aimg.src=imagenes[ran1];
		 bimg.src=mostrar[ran2];
		 if(ran2==1)
		 {
			ran3=1;
		 }
		 cimg.src=mostrar[ran3];
	}
	function comprobar2(NUM)
    {
            //comprobar num 1
           if(document.getElementById("b").getAttribute("src") == "./images/sero.png" && 
              document.getElementById("c").getAttribute("src") == "./images/sero.png" && 
              NUM=="1")
           {
               window.alert("CORRECTO!");
           }
           else if( document.getElementById("b").getAttribute("src") != "./images/sero.png" && 
                   document.getElementById("c").getAttribute("src") == "./images/sero.png" && 
                   NUM=="2")       //comprobar num 2
           {
               window.alert("CORRECTO!");
           }
           else if(document.getElementById("b").getAttribute("src") != "./images/sero.png" && 
                   document.getElementById("c").getAttribute("src") != "./images/sero.png" && 
                    NUM=="3")  //comprobar num 3
           {
               window.alert("CORRECTO!");
           }
           else
           {
                  window.alert("ERROR!");
           }
    }
