<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
    <HEAD>
        <?php
            include("conexion.php");
            session_start();
            if (!isset($_SESSION['login']) || !isset($_SESSION["entry"]))
            {
                header("location:index.html");
            }
            $name = $_SESSION['login'];
        ?>
        <TITLE> Login Profes </TITLE>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/jquery-1.11.0.min.js"></script>
        <script>
            tabContents = {
                <?php
                    $students = $fsql->execute("SELECT * FROM alumns WHERE class = ?",array($class["entry"]));
                    foreach($students as $student)
                    {
                        echo("Tab".$student["entry"].": 'div".$student["entry"]."',");
                    }
                ?>
            };
            $(function(){
                $('table#menu td')
                .click(function(){
                    if($(this).attr("class") == "inactiveTab") 
                    {

                        /* Swap classes on the clicked item */
                        $(this).addClass('activeTab').removeClass('inactiveTab');
                        /* Swap classes on the other LI */
                        $(this).siblings('.activeTab').removeClass('activeTab').addClass('inactiveTab');

                        /* Change the float of the previous element */
                        $(this).prev().css("float", "left");

                        for(var key in tabContents)
                        {
                            if(key==$(this).prop("id"))
                            {
                                $("#"+tabContents[key]).slideDown("slow");
                            }
                            else
                            {
                                $("#"+tabContents[key]).slideUp("slow");
                            }
                        }

                    }

                });
            });
        </script>
    </HEAD>
    <BODY id="profes">
        <div id="cabecera">
            <p>EDUPEQUES Educaci&oacute;n Infantil</p>
            <H1 style="position:Absolute; top:10%; right:10%;">Area de profesores</H1>
            <?php
                echo " <h4 style='margin-left:69%;'>Bienvenid@: $name &nbsp;&nbsp;<a href='logout.php'>Desconectar</a> </h4>";
            ?> 
            </div>
            <table border='1' class="datosAlumno" id="menu">
                <?php
                    $classes = $fsql->execute("SELECT entry, class FROM classes WHERE teacher = ?",array($_SESSION["entry"]));
                    foreach($classes as $class)
                    {
                        echo("<tr class='datosAlumno'>
                                <td colspan=3 class='datosAlumno'>".$class["class"]."</td>
                             </tr>");
                        $students = $fsql->execute("SELECT * FROM alumns WHERE class = ?",array($class["entry"]));
                        foreach($students as $student)
                        {
                            echo("<tr class='datosAlumno,inactiveTab' id='Tab".$student["entry"]."'>
                                    <td class='datosAlumno'><img src='".$student["photo"]."' width=50/></td>
                                    <td class='datosAlumno' colspan=2>".$student["name"]." ".$student["subname"]."</td>
                                    
                                 </tr>");
                            $results = $fsql->execute("SELECT * FROM results INNER JOIN games ON results.game = games.entry WHERE alumn = ?",array($student["entry"]));
                            foreach($results as $result)
                            {
                                echo("<tr class='datosAlumno,toggleDiv' id='div".$student["entry"]."'>
                                        <td class='datosAlumno'>".$result["game"]. "</td>
                                        <td class='datosAlumno'>Aciertos: ".$result["success"]."</td>
                                        <td class='datosAlumno'>Fallos: ".$result["failed"]. "</td>
                                     </tr>");
                            }
                        }
                    }
            ?>
        </table>
    </BODY>
</HTML>