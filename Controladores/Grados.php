<?php 

require_once("clasedb.php");

 function registrarGrados(){
  global $db;
  $nombre = $_REQUEST['nombre'];

  mysqli_query($db,"INSERT INTO grados VALUES (NULL,'".$nombre."')");
  $_SESSION['creada']=1;
 
}

 function eliminarGrados(){ 
  global $db;
  mysqli_query($db,"DELETE FROM grados WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;


}

 function listarGrados(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM grados");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;

}

 function modificarGrados(){
  global $db;
  mysqli_query($db,"UPDATE grados SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");

 
  
}

 function buscarGrados(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM grados WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}



 ?>