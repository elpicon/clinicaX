
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/medico.css" type="text/css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <body class="nav-md">
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
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
  
 
 <!--end of modal-->
                  <div class="box-header">
                  <h3 class="htitle" > Listado de Médicos</h3>
                  </div><!-- /.box-header -->

                <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
                <a class="btn  btn-plantilla" href="medico_agregar.php"  role="button"> <i class="glyphicon glyphicon-plus"></i> Registrar</a>

                <br>
                <br>


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class="encabezado">

                                <th>#</th>
                                <th>Foto</th>
                                <th>Nombre completo</th>
                                <th>Teléfono</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                              <th class="acciones"> Acciones </th>
                        </tr>
                    </thead>
                    <tbody style="background: white;">
                      <?php
                        // $branch=$_SESSION['branch'];
                          $query=mysqli_query($con,"select * from usuario where tipo='medico' ")or die(mysqli_error());
                          $i=0;
                          while($row=mysqli_fetch_array($query)){
                          $cid=$row['id'];
                          $i++;
                      ?>
                                            <tr style="background: white;">

                      <td ><?php echo $i;?></td>
                      <td><IMG src="../usuario/subir_us/<?php echo $row['imagen'];?>" style="height:50PX" /></td>
                                    <td><?php echo $row['nombre'].'  '.$row['apellido'];?></td>
                      <td><?php echo $row['telefono'];?></td>
                      <td><?php echo $row['usuario'];?></td>
                        
                          <td><?php echo $row['correo'];?></td>                                      

                                                <td>
                                                      <?php
                                            ?>
                      <a class="btn btn-horario btn-print" href="../horario_medico/<?php  echo "horario_medico.php?cid=$cid";?>"  role="button">Horario</a>
                      <a class="btn btn-vaca btn-print" href="../vacaciones/<?php  echo "vacaciones.php?cid=$cid";?>"  role="button">Vacaciones</a>
                      <a class="btn btn-plantilla " href="<?php  echo "editar_medico.php?cid=$cid";?>"  role="button"><i class="	glyphicon glyphicon-pencil"></i></a>

                      <a class="small-box-footer btn btn-danger btn-print"  href="<?php  echo "eliminar_medico.php?cid=$cid";?>" onClick="return confirm('¿Está seguro de que quieres eliminar medico??');"><i class="glyphicon glyphicon-trash" ></i></a>
                                  <?php
                                  //          }
                                            ?>

                                  </td>
                                            </tr>

                      <!--end of modal-->

                      <?php }?>
                    </tbody>

                  </table>
                  
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->
                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>

        <?php include '../layout/datatable_script.php';?>
        <!-- /page content -->

        <!-- footer content -->
        <!-- /footer content -->
      </div>
    </div>
         <style>

.myButtonx {
	box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #b39d59 5%, #ebb11e 100%);
	background-color:#b39d59;
	border-radius:4px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
		padding:0px 0px;
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


.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden;  -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#ffffff; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}

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
  
  
  .myButton1 {
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	background-color:#77b55a;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:0px 0px;
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




.myButton3 {
	box-shadow: 0px 10px 14px -3px #735527;
	background:linear-gradient(to bottom, #d94f04 3%, #f596a6 100%);
	background-color:#d94f04;
	border-radius:4px;
	border:1px solid #e8a079;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:0px 0px;
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
</style>

        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "Anterior",
                      "next": "Siguiente"
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
    </script>


    <!-- /gauge.js -->
  </body>
</html>
