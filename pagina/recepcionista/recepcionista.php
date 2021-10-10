
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/recepcionista.css" type="text/css">
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
                  <h3 class="htitle">Recepcionistas</h3>

                </div><!-- /.box-header -->
                <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i>Imprimir</a>
                <a class="btn btn-plantilla" href="recepcionista_agregar.php"   role="button"><i class="glyphicon glyphicon-plus"></i> Registrar</a>


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
                    <th> Acciones </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario where tipo='recepcionista' ")or die(mysqli_error());
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
                      <a class="btn btn-plantilla" href="<?php  echo "editar_recepcionista.php?cid=$cid";?>"  role="button"><i class="	glyphicon glyphicon-pencil"></i></a>


  <a class="btn-danger btn"  href="<?php  echo "eliminar_recepcionista.php?cid=$cid";?>" onClick="return confirm('¿Está seguro de que quieres eliminar usuario??');"><i class="glyphicon glyphicon-trash" ></i></a>
    

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
                      "previous": "Anterior",
                      "next": "Siguiente"
                    },
                    "search": "Buscar:",


                  },
                  "info": false,
                  "lengthChange": false,
                
                  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
