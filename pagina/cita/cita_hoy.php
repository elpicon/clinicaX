
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/cita.css" type="text/css">
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


                  <div class="box-body">
                  <h3 class="htitle">Lista de Citas</h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i>Imprimir</a>
                <a class="btn btn-plantilla" href="cita_agregar.php"  role="button"> <i class="glyphicon glyphicon-plus"></i>Registrar</a>



                <div class="box-body">
                


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" encabezado">
                          <th>Paciente</th>
                          <th>Médico</th><th>Fecha</th>
                          <th>Observaciones</th>
                          <th>Estado</th>
                          <th> Acciones </th>
                      </tr>
                    </thead>
                    <tbody>
<?php

    $fecha = date('Y-m-d');


   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select m.nombre as  medico,p.nombre as  paciente,c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join usuario m on c.id_medico = m.id inner join usuario p on p.id = c.id_paciente and c.fecha='$fecha' ")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){

$id_cita=$row['id_cita'];


    $i++;
?>
                      <tr >

        <td><?php echo $row['medico'];?></td>              
         <td><?php echo $row['paciente'];?></td>     
           <td><?php echo $row['fecha'];?></td>    
            <td><?php echo $row['observaciones'];?></td>  
              <td><?php echo $row['estado_cita'];?></td>                                      

                          <td>
                                 <?php
                   
                      ?>

<a class="btn btn-danger btn-print" href="<?php  echo "../cita/editar_cita.php?id_cita=$id_cita";?>"    role="button">Editar</a>
<a class="btn btn-primary btn-print" href="<?php  echo "../cita/eliminar_cita.php?id_cita=$id_cita";?>"  onClick="return confirm('¿Está seguro de que quieres eliminar??');"  role="button">Eliminar</a>
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
        <?php include '../layout/footer.php';?>
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
    </script>




    <!-- /gauge.js -->
  </body>
</html>
