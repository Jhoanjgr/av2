<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<html>

<?php 
        include_once "menu.php";
        include_once "cabecera.php";
         ?>

<body>
<?php
include("header.php");
extract($_POST);

?>

<br>
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 1px 2px #CCCCCC;text-align:center;">
<div style="margin-left:30%;margin-right: 30%; padding-top:5%">
<center><h3 class="head1">Crear evaluaciones </h3> </center>
<br>

<center>  <button type="button" class="au-btn au-btn--block au-btn--blue2 m-b-10 " style="border-radius: 10px;" 
                                        data-toggle="modal" data-target="#small-modal-tema">Añadir tema</button></center>
                                       


<br>

<center>  <button type="button" class="au-btn au-btn--block au-btn--blue2 m-b-10" style="border-radius: 10px;" 
                                        data-toggle="modal" data-target="#mediumModal-prueba">Añadir prueba</button></center> <br>


<center>  <button type="button" class="au-btn au-btn--block au-btn--blue2 m-b-10" style="border-radius: 10px;" 
                                        onclick="location.href='questionadd.php'">Agregar pregunta</button></center>


<p align="center" class="head1">&nbsp;</p>
</div>
</div>

  <!--  modal small -->
         <div class="modal fade" id="small-modal-tema" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
             <div class="modal-dialog modal-sm" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                       <center>  <h5 class="modal-title" autocomplete="off" id="smallmodalLabel">Ingrese el nombre del tema</h5></center>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <div class="modal-body">
                           <?php
session_start();
require("database.php");
include("header.php");
error_reporting(1);
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php

extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2><div  class=head1>No has iniciado sesión. Ingresa para acceder a esta página.</div></h2>";
	echo "<a href=index.php><h3 align=center>Haga clic aquí para iniciar sesión</h3></a>";
	exit();
}


echo "<table width=100%>";
echo "<tr><td align=center></table>";
if($submit=='submit' || strlen($subname)>0 )
{


      $sql = "SELECT * FROM mst_subject WHERE sub_name='$subname'";
  $rs=mysqli_query($con,$sql);
  $row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
    $count = mysqli_num_rows($rs);
  if($count>0)
  {
    echo "<br><br><br><div class=head1>El sujeto ya existe
</div>";
  exit;
  }
$query="insert into mst_subject(sub_name) values ('$subname')";
$rs2=mysqli_query($con,$query)or die("No se pudo realizar la consulta");
echo "<p align=center>Subject  <b> \"$subname \"</b> Agregado exitosamente.</p>";
$submit="";


}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Por favor ingrese el nombre del sujeto");
document.form1.subname.focus();
return false;
}
return true;
}
</script>


<title>Add Subject</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
    <tr>
     <strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        
    <tr>
        <td height="26"> </td>
        <input class="au-input au-input--full"name="subname" autocomplete="off"placeholder="Nombre del contenido" type="text" id="subname">
 <center><input type="submit" name="submit" class="au-btn au-btn--block au-btn--green m-b-20" value="Agregar" >     </center>
       
    </tr>
  
    <td></td>
  </table>
</form>
<p>&nbsp; </p>


                              </table>
                        </div>
                     </div>
                    <!--  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div> -->
                 </div>
             </div>
         </div>
   

 <!-- modal medium -->
            <div class="modal fade" id="mediumModal-prueba" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                           <center> <h5 style="right: 50px;" class="modal-title" id="mediumModalLabel">Añadir Prueba</h5></center>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body">
                            <?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>No has iniciado sesión. Ingresa para acceder a esta página.</h2>";
	echo "<a href=index.php><h3 align=center>Haga clic aquí para iniciar sesión</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
require("database.php");

include("header.php");



if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
$query3="insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')";
$rs3=mysqli_query($con,$query3)or die("no se registro error error");
echo "<p align=center>Test <b>\"$testname\"</b> Agregado exitosamente.</p>";

unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Por favor introduzca el nombre de la prueba");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Por favor ingrese la pregunta total");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<form name="form1" method="post"  onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Seleccione el tema</strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select class="form-control select2" name="subid">
<?php

$query2="SELECT * FROM mst_subject order by  sub_name";
$rs2=mysqli_query($con,$query2)or die("Could Not Perform the Query");

	  while($row=mysqlI_fetch_array($rs2))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Introduzca el nombre de la prueba </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" autocomplete="off" class="au-input au-input--full" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Ingrese la pregunta total </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" autocomplete="off" class="au-input au-input--full" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" class="au-btn au-btn--block au-btn--green m-b-20" name="submit" value="Agregar" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- end modal medium -->

<!-- Jquery JS-->
<script>
  jQuery(function () { 
    jQuery('.select2').select2();
});
</script>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>


