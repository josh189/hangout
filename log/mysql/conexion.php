<?php
######### VALORES LOCALHOST ###########

$host = "127.0.0.1";
$user = "root";
$pass = "123456789";
$dbname = "test";

######### VALORES DEL SERVIDOR #########
// $host = "77.81.230.219";
// $user = "root";
// $pass = "Fc2018**";
// $dbname = "fc";
############ ---------------- ##########
$conexion = mysqli_connect($host,$user,$pass,$dbname) or die ("error al conectarse a la base de datos");
mysqli_set_charset($conexion,'utf8'); // tipo de codificacion
?>
