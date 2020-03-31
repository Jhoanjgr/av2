<?php 

require_once("clasedb.php");

 function registrarSecciones(){
  global $db;
  $nombre = $_REQUEST['nombre'];

  mysqli_query($db,"INSERT INTO secciones VALUES (NULL,'".$nombre."')");
  $_SESSION['creada']=1;
 
}

 function eliminarSecciones(){ 
  global $db;
  mysqli_query($db,"DELETE FROM secciones WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;


}

 function listarSecciones(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM secciones");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;

}

 function modificarSecciones(){
  global $db;
  mysqli_query($db,"UPDATE secciones SET nombre='$_REQUEST[nombre]' WHERE id='$_REQUEST[id]'");

 
  
}

 function buscarSecciones(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM secciones WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}



 ?>