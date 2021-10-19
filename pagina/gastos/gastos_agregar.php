
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/gastos.css" type="text/css">
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
                  <h3 class="htitle">Registrar Gastos</h3>

                </div><!-- /.box-header -->
                <a class="btn btn-regresar" href="gastos.php"    role="button"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>


                <div class="base justify-content-center d-flex">
                

        <form class="form-horizontal" method="post" action="gastos_add.php" enctype='multipart/form-data'>

                  <div class="row">
                      <div class="col-md-3 btn-print">
                        <div class="form-group">
                          <label for="date" >Cantidad</label>
                  
                        </div><!-- /.form group -->
                      </div>
                      <div class="col-md-9 btn-print">
                        <div class="form-group">

                            <input type="text" class="form-control pull-right" id="cantidad" name="cantidad" required >
                        </div>
                      </div>
                    </div>
    

                  <div class="row">
                      <div class="col-md-3 btn-print">
                        <div class="form-group">
                          <label for="date" >Nota</label>
                  
                        </div><!-- /.form group -->
                      </div>
                        <div class="col-md-9 btn-print">
                        <div class="form-group">

                            <input type="text" class="form-control pull-right" id="nota" name="nota" required >
                        </div>
                      </div>
                            
                    </div>

                  <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Categoria</label>
                
                      </div><!-- /.form group -->
                    </div>
                      <div class="col-md-9 btn-print">
                      <div class="form-group">
            <select class="form-control select2" name="id_categoria" id="id_categoria" required>
                  <option value="0">SELECCIONE CATEGORIA</option>           
                            <?php

              $queryc=mysqli_query($con,"select * from categoria_gastos  ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id_categoria'];?>"><?php echo $rowc['descripcion'];?></option>
                            <?php }?>
                          </select>
                      </div>
                    </div>
                    </div>

                    <br>
          
    <button type="submit" class="btn btn-plantilla4">Guardar</button>
                


        </form>


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
