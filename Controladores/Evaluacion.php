<?php 

require_once("clasedb.php");

 function registrarEvaluacion(){
  global $db;
  $nombre = $_REQUEST['nombre'];
  $ponderacion = $_REQUEST['ponderacion'];

  mysqli_query($db,"INSERT INTO evaluaciones VALUES (NULL,'".$nombre."','".$ponderacion."')");
  $_SESSION['creada']=1;
 
}

 function eliminarEvaluacion(){ 
  global $db;
  mysqli_query($db,"DELETE FROM evaluaciones WHERE id=$_REQUEST[id]");
  $_SESSION['eliminada']=1;


}

 function listarEvaluacion(){
  global $db;
  $resultados = [];
  $r = mysqli_query($db,"SELECT * FROM evaluaciones");
  while($temporal = mysqli_fetch_assoc($r) ) $resultados[] = $temporal;
  return $resultados;

}

 function modificarEvaluacion(){
  global $db;
  mysqli_query($db,"UPDATE evaluaciones SET nombre='$_REQUEST[nombre]',ponderacion='$_REQUEST[ponderacion]' WHERE id='$_REQUEST[id]'");

 
  
}

 function buscarEvaluacion(){
  global $db;
 $r = mysqli_query($db,"SELECT * FROM evaluaciones WHERE id=$_REQUEST[id]");
    $temporal = mysqli_fetch_assoc($r);
  return $temporal;

}



 ?>