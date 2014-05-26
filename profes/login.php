<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title> login.php </title>

    </head>

    <body>
        <?php

session_start();


$email=$_POST['email'];
$pwd=$_POST['pwd'];

include("conexion.php");

$result = $fsql->execute("SELECT * FROM teachers WHERE email = ? and pwd = ?",array($email, $pwd));
if(!$result)

    echo "Usuario NO EXISTE <a href='index.html'>pulse aqui para continuar</a>".$email.":".$pwd;
else
    foreach($result as $row)
    {
        $_SESSION['login']= $row["name"];
        $_SESSION['entry']= $row["entry"];
        header("location:pag2.php");
    }
        ?>
    </body>
</html>
