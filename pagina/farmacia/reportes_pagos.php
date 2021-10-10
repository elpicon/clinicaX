
<?php include '../layout/header.php';
      $id_usuario=$_SESSION['id'];
//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/farmacia.css" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="box-body">
                  <h3 class="htitle">Reporte Pagos</h3>
                </div><!-- /.box-header -->

    <div class="container">
           <div class="col-md-12 colFecha">
             <form method="post" action="../farmacia/reportes_pagos_por_fecha.php" enctype="multipart/form-data"      class="form-horizontal">
                    
                    <div class="col-md-6 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label labelFecha">Fecha inicio</label>
                        <div class="input-group col-sm-8 inputFecha" >
                          <input type="date" class="form-control pull-right " id="date" name="fecha_inicio"  required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
                    
                  <div class="col-md-6 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label labelFecha">Fecha final</label>
                        
                          <div class="input-group col-sm-8 inputFecha">
                            <input type="date" class="form-control pull-right " id="date" name="fecha_final"  required >
                          </div><!-- /.input group -->
                      
                    </div>
                    <button class="btn btn-plantilla" id="daterange-btn"  name="buscar_fechas">Buscar</button>

          </form>
           </div>
       </div>

 <!--end of modal-->

            <div class="col-md-12">
              

                        <div class="box-header">
                        <h2 class="htitle2">Ganacias</h2>
                      </div><!-- /.box-header -->
                      <div class="box-body boxCuadros">

              <?php
              $simbolo_moneda="";


                    $query=mysqli_query($con,"select * from empresa  ")or die(mysqli_error());
                  $i=1;
                  while($row=mysqli_fetch_array($query)){
              //   $porcentaje_impuesto=$row['impuesto'];
                  $simbolo_moneda=$row['simbolo_moneda'];
              }
                  $fecha = date('Y-m-d');
              ?>

                    
              <?php
              $lucro=0;
              $num=0;
              $precio_venta=0;
              $precio_compra=0;
                  $query=mysqli_query($con,"select * from pedidos ")or die(mysqli_error());

    
            while($row=mysqli_fetch_array($query)){

          $id_pedido=$row['id_pedido'];

              $query1=mysqli_query($con,"select * from detalles_pedido_medicina d inner join producto p on d.id_producto = p.id_pro 
          where   id_pedido='$id_pedido' ")or die(mysqli_error());
              $i=0;
              while($row1=mysqli_fetch_array($query1)){

                      $num=$num+$row1['precio_venta']*$row1['cantidad'];
                      $lucro=$lucro+$row1['precio_venta']-$row1['precio_compra'];
                      $precio_compra=$precio_compra+$row1['precio_compra'];
                      $precio_venta=$precio_venta+$row1['precio_venta'];
            }
          ?>
<?php
}
?>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
      
      


              <h4><?php
echo 'PRECIO COMPRA=  '.$simbolo_moneda.'  '.$precio_compra;
?></h4>

            </div>
       
          </div>
        </div>

<br>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
      
      


              <h4><?php
echo 'PRECIO VENTA=  '.$simbolo_moneda.'  '.$precio_venta;
?></h4>

            </div>
       
          </div>
        </div>
<br>

<br>
<br><br><br>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
      
      


              <h4><?php
echo 'VENTAS=  '.$simbolo_moneda.'  '.$num;
?></h4>

            </div>
       
          </div>
        </div>

<br>


                          <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                              <div class="inner">

                                <h4><?php
                                echo 'GANANCIAS=  '.$simbolo_moneda.'  '.$lucro;
                                ?></h4>

                            </div>
                        </div>
                        <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
          </div>
        </div>


    </div>

  <?php include '../layout/datatable_script.php';?>
    <!-- /gauge.js -->



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


                }

              );
              } );
    </script>
  </body>
</html>
