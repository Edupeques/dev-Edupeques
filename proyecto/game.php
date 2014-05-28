<?php
include("conexion.php");
session_start();
if(!isset($_SESSION["entry"])) header("location:alumnos.php");
// In construction
die("SESION INICIADA");


?>