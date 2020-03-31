<?php 

require_once("clasedb.php");

 function registrarProfesor(){
    global $db;
 $ci = $_REQUEST['ci'];  
$nombre = $_REQUEST['nombre']; 
$especialidad = $_REQUEST['especialidad']; 
$correo = $_REQUEST['correo'];
$telefono =$_REQUEST['telefono'];  
$direccion = $_REQUEST['direccion'];    



$cl =  mysqli_query($db, "SELECT * FROM profesores WHERE ci='$ci'" );
$c = mysqli_fetch_assoc($cl);
if($c){
  die('Cedula Duplicada');
}else {
  

  mysqli_query($db,"INSERT INTO profesores VALUES (NULL,'".$ci."','".$nombre."','".$especialidad."','".$correo."','".$telefono."','".$direccion."'");
  
}
}

 function eliminarProfesor(){ 
  global $db;
  mysqli_query($db,"DELETE FROM profesores WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;


}

 function listarProfesor(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM profesores");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;

}

 function modificarProfesor(){
  global $db;
  mysqli_query($db,"UPDATE profesores SET ci='$_REQUEST[ci]',nombre='$_REQUEST[nombre]',especialidad='$_REQUEST[especialidad]',correo='$_REQUEST[correo]',telefono='$_REQUEST[telefono]',direccion='$_REQUEST[direccion]' WHERE id='$_REQUEST[id]'");

 
  
}

 function buscarProfesor(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM profesores WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}



 ?>