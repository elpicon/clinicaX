
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/medico.css" type="text/css">
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
                  <h3 class="htitle">Historial Médico</h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>

                <div class="box-body">
                

      
 <!--end of modal-->



                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class="encabezado">

                        <th>#</th>
                        <th>Foto</th>
                        <th>Nombre y apellidos</th>
                        <th>Telefono</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th class="btn-print">Detalle</th>
                      </tr>
                    </thead>
                    <tbody>
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

                          <td style="text-align: center;" >
 <?php
                      ?>

<a class="btn btn-plantilla" href="../medico/<?php  echo "historial_cita.php?cid=$cid";?>"  role="button"><i class='glyphicon glyphicon-eye-open' ></i></a>

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
        <!-- /page content -->
        <?php include '../layout/footer.php';?>
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



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
