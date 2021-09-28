
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/asignacion.css" type="text/css">
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
                  <h3 class="htitle" >Asignación de Servicios</h3>
                  <h3 class="htitle" >Asignación de Servicios</h3>
                </div><!-- /.box-header -->
                <a class = "btn btn-plantilla2 btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>

              



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
                                          <th > Accion </th>
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
                                                          <tr >

                                    <td ><?php echo $i;?></td>
                                    <td><IMG src="../usuario/subir_us/<?php echo $row['imagen'];?>" style="height:50PX" /></td>
                                                  <td><?php echo $row['nombre'].'  '.$row['apellido'];?></td>
                                    <td><?php echo $row['telefono'];?></td>
                                    <td><?php echo $row['usuario'];?></td>
                                      
                                        <td><?php echo $row['correo'];?></td>                                      

                                                              <td>
                                                                    <?php
                                                      
                                                        
                                                          ?>

                                    <a class="btn btn-primary btn-print" href="../medico/<?php  echo "historial_cita.php?cid=$cid";?>"  role="button">Detalles</a>

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

        <!-- footer content -->
      
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
