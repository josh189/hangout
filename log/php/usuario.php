<?php
session_start(); 
require_once("../mysql/conexion.php");
$name = $_POST["name"];
$mail = $_POST["mail"];
$sql = "SELECT * FROM clientes WHERE mail = '$mail'";
$qry = mysqli_query($conexion,$sql);
$num = mysqli_num_rows($qry);
if ($num == 1) {
	$sql_n = "SELECT * FROM clientes WHERE name = '$name' AND mail = '$mail'";
	$qry_n = mysqli_query($conexion,$sql);
	$num_n = mysqli_num_rows($qry_n);
	if ($num == 0) {
		$update = "UPDATE clientes SET name = '$name' WHERE mail = '$mail'";
		$query  = mysqli_query($conexion,$update);
	}
	$_SESSION["mail"] = $mail;
	?>
	<script type="text/javascript">
		$("#contenido").html('<div align="center"><img src="log/img/load.gif"></div>');
    	$("#contenido").fadeIn(1000).load('log/views/asesores.php');
	</script>
	<?php
}
else{
	$insert = "INSERT INTO clientes(id,name,mail) VALUES(NULL,'$name','$mail')";
	$query = mysqli_query($conexion,$insert);
	$_SESSION["mail"] = $mail;
	?>
	<script type="text/javascript">
		$("#contenido").html('<div align="center"><img src="log/img/load.gif"></div>');
    	$("#contenido").fadeIn(1000).load('log/views/asesores.php');
	</script>
	<?php
}
?>