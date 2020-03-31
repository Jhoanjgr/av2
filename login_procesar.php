<?php 
/*session_start();*/
require_once "Controladores/usuario.php"; 
/*require_once "controladores/auditoria.php";*/ 
$usu = buscarUsuarioLogin();
if(!$usu){

	header('location: login.php?error=1');
}
else{
	$_SESSION['admin']=$usu;
	//echo $_SESSION['admin']['tipo_usuario'];
	
header('location: home.php');

} 

?>