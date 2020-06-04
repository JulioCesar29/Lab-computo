<!--PARTE QUE SE INCLUYE EN LAS PAGINAS PARA CONECTAR A LA BASE DE DATOS-->
<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "laboratorio";

$con=mysqli_connect($server,$user,$pass);

mysqli_select_db($con,$db);

?>
