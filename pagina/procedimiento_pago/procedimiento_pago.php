
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/procedimiento.css" type="text/css">
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

 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="htitle">Procedimiento Pago</h3>

                </div><!-- /.box-header -->
                 <a class="btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
                <a class="btn btn-plantilla" href="procedimiento_pago_agregar.php"  role="button"> <i class="glyphicon glyphicon-plus"></i> Registrar</a>



                <div class="box-body">


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class="encabezado">

                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio venta</th>
                        <th> Acciones </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from procedimiento_pago where estado='a' ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $id_pro=$row['id_procedimiento_pago'];
    $i++;
?>
                      <tr >



              <td><?php echo $row['nombre'];?></td>
<td><?php echo $row['descripcion'];?></td>


 <td><?php echo $row['precio_venta'];?></td>
>
                          <td>
                                 <?php
                   
                    
                      ?>
  <a class="small-box-footer btn-print"  href="<?php  echo "eliminar_procedimiento_pago.php?id_pro=$id_pro";?>" onClick="return confirm('¿Está seguro de que quieres eliminar procedimiento de pago??');"><i class="glyphicon glyphicon-remove" ></i></a>
    
<a class="btn btn-danger btn-print" href="<?php  echo "editar_procedimiento_pago.php?id_pro=$id_pro";?>"  role="button">Editar</a>

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
                  "searching": false,



  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
