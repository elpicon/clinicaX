
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/medicina.css" type="text/css">
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
                  <h3 class="htitle">Agregar Médicina</h3>

                </div><!-- /.box-header -->
                <a class="btn btn-regresar" href="medicina.php"  role="button"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>
                <div class="box-body">
<div class="base">
        <form class="form-horizontal" method="post" action="medicina_add.php" enctype='multipart/form-data'>



                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Imagen</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">
            <input type="file" class="form-control" id="imagen" name="imagen"  >
                      </div>
                    </div>
                    </div>

                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombre</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="nombre_pro" name="nombre_pro" required >
                      </div>
                    </div>
                        
                    </div>
       
                          <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripción</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">
                        <textarea class="form-control" id="descripcion" name="descripcion" ></textarea>

                    
                      </div>
                    </div>
                    
                    </div>


                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Unidad</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="unidad" name="unidad" required >
                      </div>
                    </div>
                    
                    </div>
           <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Precio Compra</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="precio_compra" name="precio_compra" required >
                      </div>
                    </div>
                      
                    </div>
           <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Precio venta</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="precio_venta" name="precio_venta" required >
                      </div>
                    </div>
                    
                    </div>

                               <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Stock incial</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-9 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="stock" name="stock" required >
                      </div>
                    </div>
                    
                    </div>
<br>
    
    <button type="submit" class="btn btn-plantilla4">Guardar</button>


        </form>

</div> <!-- /.base -->




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
