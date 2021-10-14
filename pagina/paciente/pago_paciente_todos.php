
<?php include '../layout/header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->

    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/paciente.css" type="text/css">
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
<?php 
//    if ($usuario=="si") {
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
              </style>

                <!-- page content -->
                <div class="right_col" role="main">

          <?php
        ?>

                          <?php
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <div class="box-body">
                  <h3 class="htitle">Pagos</h3>
                </div><!-- /.box-header -->

                <div class="box-body" style="width:900px; margin-left: 40px;" >
                  <table id="example2" class="table table-bordered table-striped tablaPagos">
                    <thead>
                        <tr class="encabezado">
                          <th>ID</th>
                          <th>Fecha</th>
                          <th>Total</th>
                          <th style="width: 80px;"> Factura </th>
                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from pedidos  ")or die(mysqli_error());

    
    while($row=mysqli_fetch_array($query)){

$id_pedido=$row['id_pedido'];

      $sum=0;
      $igv=0;   
      $sub=0;   
      $sub_igv=0;

    $query1=mysqli_query($con,"select * from detalles_pedido d inner join procedimiento_pago p on d.id_producto = p.id_procedimiento_pago 
 where  id_pedido='$id_pedido' ")or die(mysqli_error());

    
    while($row1=mysqli_fetch_array($query1)){
                $sub=$sub+$row1['precio_venta']*$row1['cantidad'];

    }
?>
                      <tr style="background: white;">
                        <td><?php echo $row['id_pedido'];?></td>              
                        <td><?php echo $row['fecha'];?></td>     
                        <td><?php echo $sub;?></td> 
                                        <td>
                                  <?php
                      ?>

<a class="btn btn-plantilla" href="<?php  echo "../boletas_ventas/generar_boleta.php?id_pedido=$id_pedido";?>"  target="_blank"  role="button">Factura</a>

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
                    <a href="https://beatifullshop.co/app/clinica/pagina/layout/inicio.php">DOCTORPRJ IPS</a>
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
    </script><?php 
 // }    
?>
  </body>
</html>
