<?php 
require_once "sidebar.php";
require_once "controladores/usuario.php";
$usuario = listarUsuario(); ?>
    
        
              <form  method="POST" name="form"  action="usuario_guardar.php" >
 <div>
    <!-- Content Header (Page header) -->
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" >
                <h3 class="card-title">Usuario Nuevo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label><i class="fa fa-user" ></i><span> *Cédula</span></label>
                  <input type="number" title="Ingrese la Cedula" name="ci" class="form-control" id="ci" placeholder="28277929" required="required">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-user" ></i><span> *Nombre y Apellido</span></label>
                  <input type="text" name="nombre" maxlength="20" title="Ingrese el Nombre" class="form-control" id="nombre" placeholder="Maritza Torres"required="required">
                  </div>
                  <div class="form-group">
                    <label><i class="fa fa-user" ></i><span> *Contraseña</span></label>
                  <input type="password" maxlength="8" title="Ingrese la Contraseña" name="clave" class="form-control" id="clave" placeholder="01234"required="required">
                  </div>
                  <div class="form-group">
                     <label><i class="fa fa-user" ></i><span> *Correo</span></label>
                  <input type="email" name="correo" maxlength="30" title="Ingrese el Correo" class="form-control" id="correo" placeholder="Yovani@gmail.com"required="required">
                  </div>
                  <div class="form-group">
                     <label> *Tipo de Usuario</label>
                <select class="form-control select2" required="required" title="Ingrese el Tipo de Usuario" name="tipo_usuario" style="width: 100%;">
                  <option selected="selected">Seleccione</option>
                   <option value="estudiante" title="Nivel Socia">Estudiante</option>
                  <option value="profesor" title="Nivel Asistente">Profesor</option>
                  <option value="representante" title="Nivel Asistente">Representante</option>
                  <option value="admin" title="Nivel Asistente">Admin</option>


                </select>
                  </div>
                  <div class="form-group">
                    <label> *Pregunta</label>
                <select class="form-control select2" title="Ingrese la Pregunta" required="required" name="pregunta" style="width: 100%;">
                  <option selected="selected">Seleccione</option>
                  <option value="Nombre de su primera mascota" title="Nombre de su primera mascota">Nombre de su primera mascota</option>
                  <option value="Pelicula favorita" title="Pelicula favorita">Pelicula favorita</option>
                  <option value="Nombre de tu abuelo" title="Nombre de tu abuelo">Nombre de tu abuelo</option>
                  <option value="Pasatiempo favorito" title="Pasatiempo favorito">Pasatiempo favorito</option>
                </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail"> *Respuesta</label>
                  <input type="text" name="respuesta" maxlength="20" title="Ingrese la Respuesta" class="form-control" id="respuesta" placeholder="Chocolate,Perro..." required="required">
                  </div>
                  
                <!-- /.card-body -->

                <div class="box-footer">
              <p align="center">(*) Campos Obligatorios</p>
               <p align="center"><button type="submit" name="guardar" title="Guardar" value="Cargar datos" class="btn bg-green"><i class="fa fa-send"></i> <span>Guardar</span> </button>
                <input type="hidden" name="operacion" value="guardar">
                 <button type="reset" class="btn bg-red" title="Eliminar"><i class="fa  fa-remove"></i><span> Eliminar</span> </button></p>
              </div>
</form>

<script>
  jQuery(function () { 
    jQuery('.select2').select2();
});
</script>
<?php /*require_once "piedepagina.php";*/ ?>
<?php require_once "footer.php"; ?>







 
