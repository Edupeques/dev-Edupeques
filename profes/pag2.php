<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <TITLE> Login Profes </TITLE>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script>
            $(function(){

            });
        </script>
    </HEAD>
    <BODY id="loginninos">
        <div id="cabecera">
            <H1 align="center">Area de profes</H1>
            <?php
include("conexion.php");
session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION["entry"]))
{
    header("location:index.html");
}
$name = $_SESSION['login'];
echo " <h4 align='center'>Bienvenid@: $name &nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'> Desconectar</a> </h4>";
            ?> 
        </div>
        <table border=2 align="center">
            <?php
$classes = $fsql->execute("SELECT entry, class FROM classes WHERE teacher = ?",array($_SESSION["entry"]));
foreach($classes as $class)
{
    echo("<tr>
            <td colspan=5>".$class["class"]."</td>
         </tr>");
    $students = $fsql->execute("SELECT * FROM alumns WHERE class = ?",array($class["entry"]));
    foreach($students as $student)
    {
        echo("<tr>
                <td><strong>".$student["matricula"]."</strong></td>
                <td>".$student["name"]."</td>
                <td>".$student["subname"]."</td>
                <td>".$student["birthday"]."</td>
                <td>".$student["photo"]."</td>
             </tr>");
        $results = $fsql->execute("SELECT * FROM results INNER JOIN games ON results.game = games.entry WHERE alumn = ?",array($student["entry"]));
        foreach($results as $result)
        {
            echo("<tr>
                    <td>".$result["game"]. "</td>
                    <td colspan=2>Aciertos: ".$result["success"]."</td>
                    <td colspan=2>Fallos".$result["failed"]. "</td>
                 </tr>");
        }
    }
}

            ?>
        </table>
    </BODY>
</HTML>
