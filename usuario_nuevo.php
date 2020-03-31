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



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="#">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
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
<!-- end document-->






 
