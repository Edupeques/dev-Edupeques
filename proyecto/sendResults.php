<?php
include_once("conexion.php");
if(!isset($_GET["g"]) || !isset($_GET["s"]) || !isset($_GET["f"] || !isset($_SESSION["entry"]))) header("location:game.php");
$fsql->execute("INSERT INTO results (alumn, game, success, failed, date) VALUES (?, ?, ?, ?, now());",
               array($_SESSION["entry"], $_GET["g"], $_GET["s"], $_GET["f"]));
?>