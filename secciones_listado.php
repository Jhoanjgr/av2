<?php
require_once "Controladores/Secciones.php";
$seccion = listarSecciones();
if(isset($_REQUEST['operacion']) && $_REQUEST['operacion']=='eliminar'){
  eliminarSecciones();
}
 ?>	
 <html>
 
 

<?php 
        include_once "menu.php";
        include_once "cabecera.php";
         ?>




<section class="p-t-20">
<div class="container">
<div class="row">
<div class="col-md-12">
<center><h3 class="title-5 m-b-35">Listado de secciones</h3></center>
<div class="table-data__tool">
<div class="table-data__tool-left">
<div class="rs-select2--light rs-select2--md">
  
    <div class="dropDownSelect2"></div>
</div>


</div>
<input class="form-control col-md-3 light-table-filter" data-table="table table-data3" type="text" placeholder="Buscar Secciones">

</div>
<div class="table-responsive table-responsive-data2">
<table class="table table-data3">
	<thead>
    <tr>
        <th>
            <label class="au-checkbox">
                <input type="checkbox">
                <span class="au-checkmark"></span>
            </label>
        </th>
     
	<th>Año</th>
	<th>Nombre</th>
	<th >Capacidad </th>
	<th>Acciones</th>
    </tr>
</thead>
<tbody>
	<?php 
$resultados = listarSecciones();
foreach ($resultados as $key => $r){ ?>
    <tr class="tr-shadow">
        <td>
            <label class="au-checkbox">
                <input type="checkbox">
                <span class="au-checkmark"></span>
            </label>
        </td>
        
        <td><?php echo $r['anio_seccion']; ?></td>
       <td><?php echo $r['nombre_seccion']; ?></td>
		<td><?php echo $r['capacidad_seccion']; ?></td>
        
        <td>

            <div class="table-data-feature">
                <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                    <i class="zmdi zmdi-mail-send"></i>
                </button>
                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="zmdi zmdi-edit"></i>
                </button>
                <button class="item"  data-placement="top" title="Delete" onclick="javascript:eliminar('<?=$r['id']?>')" data-toggle="modal" data-target="#smallmodal1">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                    <i class="zmdi zmdi-more"></i>
                </button>
            </div>
        </td>
    </tr><?php } ?>
    <tr class="spacer"></tr>
    <tr class="tr-shadow">
        

    </tr>
    <tr class="spacer"></tr>
    <tr class="tr-shadow">
        

    </tr>
    <tr class="spacer"></tr>
    <tr class="tr-shadow">
        


            </tr>
           </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
 </section>
<!--  modal small -->
         <div class="modal fade" id="smallmodal1" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
             <div class="modal-dialog modal-sm" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                       
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">
                         <div class="modal-body">
                           <form action="secciones_listado.php?operacion=eliminar" method="post" accept-charset="utf-8">
                
              <div class="modal-body">
                <center><h3>Seguro desea eliminar la sección?</h3></center>
                <input type="hidden" name="id" id="id_seccion" value="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-secondary mb-1">Eliminar</button>
              </div>
                
              </form>
                        </div>
                     </div>
                    <!--  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Confirm</button>
                    </div> -->
                 </div>
             </div>
         </div>
           <!--  modal small -->






 <script>
  function eliminar(id_seccion) {
    //console.log(id_cita+"--------");
    $("#id_seccion").val(id_seccion);
  }
</script>

 <script type="text/javascript">
    (function(document) {
      'use strict';

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
    </script>

            <!-- END DATA TABLE-->
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