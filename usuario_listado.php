<?php 
require_once "sidebar.php";
require_once "controladores/usuario.php";
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarUsuario();
}
 ?>
 
    <section class="content-header">
      <center><div class="card card-primary">
              <div class="card-header" >
               <h1 class="card-title">Listado de Usuarios</h1>
              </div></center>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
             <?php if(isset($_SESSION['eliminada'])): ?>
                <div id="mensaje" class="alert alert-success">
                  <p><strong>&Eacute;xito!</strong> USUARIO ELIMINADO</p>
                </div>
                <script type="text/javascript">
                  setTimeout(function(){
                    $('#mensaje').hide(500);
                  },10000);
                </script>
              <?php 
              unset($_SESSION['eliminada']);
            endif; ?>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>Cédula</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Tipo de Usuario</th>
    <th>Preguntas</th>
    <th>Respuestas</th>
  </tr>
  </thead>
    <tbody>
<?php 
$resultados = listarUsuario();
foreach ($resultados as $key => $r){ ?>
  <tr>
    
    <td><?php echo $r['ci']; ?></td>
    <td><?php echo $r['nombre']; ?></td>
    <td><?php echo $r['correo']; ?></td>
    <td><?php echo $r['tipo_usuario']; ?></td>
    <td><?php echo $r['pregunta']; ?></td>
    <td><?php echo $r['respuesta']; ?></td>

    <td>
            <button type="button" class="btn btn-danger" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#modal-danger">
                <i class="fa fa-times"></i>
              </button>

    </td>
    

    
  </tr>
<?php } ?>
  </tbody>
</table>
</div>
     <div>
                <p align="center"><a class="btn bg-green" href="usuario_nuevo.php"><i class="fa fa-plus"></i> Registrar Usuario</a >
                  <br><br>
               
          </div>

</div>
</div>
</div>
<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <form action="usuario_listado.php?operacion=eliminar" method="post" accept-charset="utf-8">
                
              <div class="modal-body">
                <p>Seguro desea eliminar el Usuario?</p>
                <input type="hidden" name="id" id="id_cita" value="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerar</button>
                <button type="submit" class="btn btn-outline">Enviar</button>
              </div>
                
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</section>
<script>
  function eliminar(id_cita) {
    //console.log(id_cita+"--------");
    $("#id_cita").val(id_cita);
  }
</script>
</section>

<?php require_once "piedepagina.php";
 require_once "footer.php";


?>