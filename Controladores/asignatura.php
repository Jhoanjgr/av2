<?php 

require_once("clasedb.php");

 function registrarAsignaturas(){
  global $db;
  $nombre = $_REQUEST['nombre'];

  mysqli_query($db,"INSERT INTO asignaturas VALUES (NULL,'".$nombre."')");
}

 function eliminarAsignaturas(){ 
  global $db;
  mysqli_query($db,"DELETE FROM asignaturas WHERE id=$_REQUEST[id]");

}

 function listarAsignaturas(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM asignaturas ");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarAsignaturas(){
  global $db;
  mysqli_query($db,"UPDATE asignaturas SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");
}

 function buscarAsignaturas(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM asignaturas WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}

 ?>