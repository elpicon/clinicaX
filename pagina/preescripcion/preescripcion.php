
<?php include '../layout/header.php';
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/preinscripcion.css" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
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

                  <div class="box-header">
                  <h3 class="htitle">Preinscripción</h3>

                </div><!-- /.box-header -->
                <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
                <a class="btn btn-plantilla" href="preescripcion_agregar.php"    role="button"><i class="glyphicon glyphicon-plus"></i> Registrar</a>

                <div class="box-body">
                
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr class="encabezado">
                        <th>Paciente</th>
                        <th>Médico</th>
                        <th>Fecha</th>
                        <th>Historia</th>
                        <th> Acciones </th>
                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.historia,c.id_preescripcion from preescripcion c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_cliente ")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){

$id_preescripcion=$row['id_preescripcion'];


    $i++;
?>
                      <tr >


        <td><?php echo $row['medico'];?></td>              
         <td><?php echo $row['paciente'];?></td>     
           <td><?php echo $row['fecha'];?></td>    
            <td><?php echo $row['historia'];?></td>  
                                          

                          <td>
                                 <?php
                   




                    
                      ?>
<a class="btn btn-danger btn-print" href="<?php  echo "../boleta_preescripcion/generar_boleta.php?id_preescripcion=$id_preescripcion";?>"  target="_blank"  role="button">Ver</a>

<a class="btn btn-primary btn-print" href="<?php  echo "../preescripcion/eliminar_preescripcion.php?id_preescripcion=$id_preescripcion";?>"  onClick="return confirm('¿Está seguro de que quieres eliminar??');"  role="button">Eliminar</a>
      <?php
                      
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
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
                      <a href="https://ventadecodigofuente.com/">hospital tusulutionweb Sys</a>
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
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
