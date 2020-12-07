<?php
require_once 'config.php';
  $conn = mysql_connect($host,$username,$password);
  mysql_select_db($dbname, $conn);
	mysql_query('SET NAMES UTF8');

  // Check connection
    if (!$conn || !$dbname) {
      die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";



    // $query= "SELECT * FROM `usuario`";
    // echo 'hello'.mysql_query($query);
    // return $conn;

// if (session_status() != 2) {session_start();}
// function ejecutarConsulta($select,$txt){
// 	@mysql_connect("localhost", "root", "");
// 	@mysql_select_db("castorena");
// 	mysql_query('SET NAMES UTF8');
// 	$resultado=mysql_query($select) or die($select.' <br> '.mysql_error());
// 	@mysql_close();
// 	if($txt!=''){
// fwrite(fopen('../../txt/'.$txt.date('Y').'.txt', 'a'),' 
// '.$select.'
// '.date('d-m-Y H:i:s').', empleado '.$_SESSION['publicIdempleado'].'
// ************************************************************');
// @fclose('../../txt/catalogosCuotas.txt');
// 	}
// 	return $resultado;
// }
// function ejecutarConsultaRaiz($select,$txt){
// 	@mysql_connect("localhost", "root", "");
// 	@mysql_select_db("castorena");
// 	mysql_query('SET NAMES UTF8');
// 	$resultado=mysql_query($select) or die($select.' <br> '.mysql_error());
// 	@mysql_close();
// 	if($txt!=''){
// fwrite(fopen('txt/'.$txt.date('Y').'.txt', 'a'),' 
// '.$select.'
// '.date('d-m-Y H:i:s').', empleado '.$_SESSION['publicIdempleado'].'
// ************************************************************');
// @fclose('txt/catalogosCuotas.txt');
// 	}
// 	return $resultado;
// }
// function ejecutarConsultaId($select,$txt){
// 	@mysql_connect("localhost", "root", "");
// 	@mysql_select_db("castorena");
// 	mysql_query('SET NAMES UTF8');
// 	$resultado=mysql_query($select) or die($select.' <br> '.mysql_error());
// 	$idClave=mysql_insert_id();
// 	@mysql_close();
// 	if($txt!=''){
// fwrite(fopen('../../txt/'.$txt.date('Y').'.txt', 'a'),' 
// '.date('d-m-Y H:i:s').',  empleado '.$_SESSION['publicIdempleado'].'
// '.$select.'
// ************************************************************');
// @fclose('../../txt/catalogosCuotas.txt');
// 	}
// 	return $idClave;
// }
?>