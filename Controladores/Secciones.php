<?php 

require_once("clasedb.php");

 function registrarSecciones(){
  global $db;
  $anio_seccion = $_REQUEST['anio_seccion'];
  $nombre_seccion = $_REQUEST['nombre_seccion'];
  $capacidad_seccion = $_REQUEST['capacidad_seccion'];

  mysqli_query($db,"INSERT INTO secciones VALUES (NULL,'".$anio_seccion."','".$nombre_seccion."','".$capacidad_seccion."')");
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
  $r = mysqli_query($db,"SELECT * FROM secciones ORDER BY anio_seccion ASC " );
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