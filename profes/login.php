<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> login.php </title>
 
 </head>

  <body>
  <?php
 session_start();


$name=$_POST['name'];
$pwd=$_POST['pwd'];



include("conexion.php");



$sql="SELECT * FROM teachers WHERE name='$name'";



$registros = mysql_query($sql);
if (mysql_num_rows($registros)==0)
{
  echo "Usuario NO EXISTE <a href='index.html'>pulse aqui para continuar</a>";
}
else
{
  while($linea=mysql_fetch_array($registros))
	{
  if($linea['pwd']!=($pwd))
	{
	echo "Clave INCORRECTA <a href='index.html'>pulse aqui para continuar</a>";
	}
  else
    {
	   $_SESSION['name']= $name;
	   header("location:pg2.php");
	}
	}
}
  ?>
 </body>
</html>
