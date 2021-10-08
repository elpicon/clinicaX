<?php include '../layout/header.php';
include('../../dist/includes/dbcon.php');

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="css/horario.css" type="text/css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<link href="modalise.css" rel="stylesheet">
    <script src="modalise.js" type="text/javascript"> </script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

        <style type="text/css">
      .demo { position: relative; }
      .demo i {
        position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer;
      }
      </style>
    
  <body class="nav-md">
    <?php 

   // if ($alumnos=="si") {
      # code...
    
?>
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
      <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
      <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}


.myButtonx {
	box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #b39d59 5%, #ebb11e 100%);
	background-color:#b39d59;
	border-radius:7px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:1px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButtonx:hover {
	background:linear-gradient(to bottom, #ebb11e 5%, #b39d59 100%);
	background-color:#ebb11e;
}
.myButtonx:active {
	position:relative;
	top:1px;
}

  .myButton1 {
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	background-color:#77b55a;
	border-radius:7px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:1px 4px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton1:hover {
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	background-color:#72b352;
}
.myButton1:active {
	position:relative;
	top:1px;
}

.datagridx {
        font: normal 12px/150% Arial,
        Helvetica,
        sans-serif; 
        background: #fff; 
        overflow: hidden; 
        border: 1px solid #006699;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px; 
        border-radius: 3px; 
        }
        .datagrid table td,
        .datagrid table th {
        padding: 3px 10px; 
        }
        .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}
  

.myButton2 {
	box-shadow: 0px 10px 14px -7px #707327;
	background:linear-gradient(to bottom, #b39a59 5%, #ebe236 100%);
	background-color:#b39a59;
	border-radius:4px;
	border:1px solid #7b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:1px 15px;
	text-decoration:none;
	text-shadow:0px 1px 0px #d6d645;
}
.myButton2:hover {
	background:linear-gradient(to bottom, #ebe236 5%, #b39a59 100%);
	background-color:#ebe236;
}
.myButton2:active {
	position:relative;
	top:1px;
}

.myButton3 {
	box-shadow: 0px 10px 14px -7px #735527;
	background:linear-gradient(to bottom, #d94f04 5%, #f596a6 100%);
	background-color:#d94f04;
	border-radius:7px;
	border:1px solid #e8a079;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
    padding:1px 11px;
	text-decoration:none;
	text-shadow:0px 1px 0px #f2beb1;
}
.myButton3:hover {
	background:linear-gradient(to bottom, #f596a6 5%, #d94f04 100%);
	background-color:#f596a6;
}
.myButton3:active {
	position:relative;
	top:1px;
}

.fondotabla {
	box-shadow: 0px 10px 14px -7px #276873;
  background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
	background-color:#ffc477;

	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;

}

.hijo {
    padding:10px 30px;
  width: 300px;
  height: 400px;
  vertical: left;
  background-color: none;
  /* centrado vertical */
  position: relative;
  top: 100%;
}

table,th {
	border: 1px solid black;
}
td {
  margin: 3px;
  padding: 3px;
}
       </style>
  <?php
     if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_REQUEST['cid'];
          }


?>
        <!-- page content -->
        <div class="right_col" role="main">

                    <?php
                    $id_usuario=$_SESSION['id'];
                            $fecha = date('Y-m-d');
                

                //  if ($guardar=="si") {
                    
                      ?>


<div class="box-header">
                  <h3 class="htitle" >Horario Médico</h3>
                  </div><!-- /.box-header -->
    
          <a class="btn-regresar" aria-hidden="true"  href="../medico/medico.php"    role="button"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>


  <br>
  <br>
      
        <a class = "btn-plantilla2 btn" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
              <a class = "btn btn-plantilla " href = "agenda/agenda.php?cid=<?php echo $_REQUEST['cid'];?>" id="myButtonx" name="myButtonx" role="button"><i class ="glyphicon glyphicon-plus"></i>Agendar <a/>


              <br>



<!--
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <div class="box-body">
                 
                  <form method="post" action="horario_medico_add.php" enctype="multipart/form-data" class="form-horizontal">
                      <input type="hidden" class="form-control" id="id_medico" name="id_medico" value="<?php echo $cid;?>" required>
   
                  
   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Dia laborable</label>
                        <div class="input-group col-sm-8">
                          <select class="form-control select2" name="dia_laborable" required>

                  <option value="lunes">lunes</option>
                       <option value="martes">martes</option>
               <option value="miercoles">miercoles</option>
                <option value="jueves">jueves</option>
                <option value="viernes">viernes</option>
                  <option value="sabado">sabado</option>
        <option value="domingo">domingo</option>
              </select>
                        </div>
                      </div>
                    </div>

         <div class="col-md-4 col-md-offset-2 demo">
            <h4>Your Date Range Picker</h4>
            <center>
              <input type="text" id="config-demo" class="form-control">
            </center>
          </div>
        
   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Hora de incio</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="hora_inicio" name="hora_inicio" required >
                        </div>
                      </div>
                    </div>


   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Hora final</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="hora_fin" name="hora_fin" required >
                        </div>
                      </div>

     </div>

        <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Cita duracion</label>
                        <div class="input-group col-sm-8">
                          <select class="form-control select2" name="cita_duracion" required>

                  <option value="15 minutos">15 minutos</option>
                       <option value="20 minutos">20 minutos</option>
               <option value="30 minutos">15 minutos</option>
                <option value="45 minutos">45 minutos</option>
                <option value="60 minutos">60 minutos</option>
      
              </select>
                        </div>
                      </div>
                    </div>
                    

                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg myButtonx btn-print" id="daterange-btn"  name="">Agregar</button>
                          <button type="button" class="myButton3" data-dismiss="modal">Cerrar</button>
                         </div>

                    </div>

          </form>

          </div>
      </div>
   
    </div>
  </div>
</div>-->
 <!--end of modal-->




     <?php
                 //     }
                      ?>




<br>
<form class = "btn btn-white btn-print">
                      Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />
                      
  

</form>

  
                  <div class="box-header btn btn-primary" >
                  <h3 class="box-title"> LISTA HORARIO</h3>
                </div><!-- /.box-header -->

                
                      <table id="example22" class="table table-bordered table-striped">
                        <thead>
                          <tr class="encabezado">

                              
                      <th> Fecha inicio</th>
                      <th> Fecha fin </th>
                      <th> Día laborable </th>
                      <th> Hora inicio </th>
                      <th> Hora finalización </th>
                      <th> Duración </th>
                          <th class="btn-print">Eliminar</th>

                          </tr>
                        </thead>
                        <tbody>
<?php

//ULTIMO HORARIO DE MEDICO SELECCIONADO
                        
   // $branch=$_SESSION['branch'];
                        
                        
    $query=mysqli_query($con,"select * from horario_medico where id_medico='$cid' ")or die(mysqli_error());
    $i=1;
    while($row1=mysqli_fetch_array($query)){

$id_horario_medico=$row1['id'];

?>
                      <tr >
            <td><?php echo $row1['fecha_inicio'];?></td>
             <td><?php echo $row1['fecha_fin'];?></td>
              <td><?php echo $row1['dia_laborable'];?></td>
            <td><?php echo $row1['hora_inicio'];?></td>
                  <td><?php echo $row1['hora_fin'];?></td>
      <td><?php echo $row1['cita_duracion'];?></td>
      

                        <td style="text-align: center;">
                                   <?php
                    //  if ($eliminar=="si") {
                    
                      ?>
   <a class="btn btn-danger"  href="<?php  echo "../horario_medico/eliminar_horario_medico.php?id_horario_medico=$id_horario_medico&cid=$cid";?>" onClick="return confirm('¿Está seguro de que quieres eliminar horario medico??');"><i class="glyphicon glyphicon-trash" ></i></a>
   <?php
                  //    }
                      ?>
                               <?php
                 //     if ($editar=="si") {
                    
                      ?>

            <?php
                  //    }
        
  

                      ?>

            </td>
                      </tr>
       
 
 <!--end of modal-->

<?php $i++;}?>
                    </tbody>

                  </table>


     <script type="text/javascript">// < ![CDATA[
         
         
         
         
         
function Eliminar (i) {
    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
    document.getElementById("tableid").deleteRow(i);
}
function Buscar() {
            var tabla = document.getElementById('example22');
            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
            for (var i = 1; i < tabla.rows.length; i++) {
                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tabla.rows[i].style.display = '';
                } else {
                    tabla.rows[i].style.display = 'none';
                }
            }
        }
// ]]></script>



            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
                  <a href="#">.. Sys</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>

        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
              
              
            $(function () {
            $('#datetimepicker1').datepicker({
            });
            });
        
        
 }
              
            
        </script>
<style>
  .datepicker{z-index:1151 !important;}
</style>
    <?php 
          # code...
   // }
?>
    <!-- /gauge.js -->
  </body>
</html>
