<?php

include "db/conexion.php";

if (session_status() != 2) {session_start();}
$query = "SELECT count(*) as total, id, concat(nombre,' ',apaterno,' ',amaterno) as nombre FROM usuario WHERE usuario='".$_REQUEST['Usuario']."' and password='".$_REQUEST['Contrasena']."'";
$usuario = mysql_fetch_array(mysql_query($query,$conn));

if($usuario['total']=='1'){
	$_SESSION['idUsuario']=$usuario['id'];
	$_SESSION['nombreUsuario']=$usuario['nombre'];
	echo '<script>window.location="src/home.php";</script>';
}else{
	echo '<script>window.location="index.php?error=1";</script>';
}
?>