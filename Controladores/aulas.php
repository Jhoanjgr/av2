<?php 

require_once("clasedb.php");

 function registrarAulas(){
  global $db;
  $nombre = $_REQUEST['nombre'];

  mysqli_query($db,"INSERT INTO aulas VALUES (NULL,'".$nombre."')");
}

 function eliminarAulas(){ 
  global $db;
  mysqli_query($db,"DELETE FROM aulas WHERE id=$_REQUEST[id]");

}

 function listarAulas(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM aulas");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;
}

 function modificarAulas(){
  global $db;
  mysqli_query($db,"UPDATE aulas SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");
}

 function buscarAulas(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM aulas WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}

 ?>