
<?php include '../layout/header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->

    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/otros.css" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
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
$cid=$_SESSION['id'];

?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->


                  <div class="box-body">
                  <h3 class="htitle"> Cambiar Contraseña</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario where id= '$cid' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id'];
     $tipo=$row['tipo'];
?>
      
        <form class="form-horizontal formContra" method="post" action="actualizar_password.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $row['id'];?>" required>
   <div class="row">
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                        <label for="date" >Contraseña</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-8 btn-print">
                      <div class="form-group">
                          <input type="password" class="form-control pull-right" id="date" name="password" placeholder="*********" required>
                      </div>
                    </div>
                          
                    </div>

 <div class="row">
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                        <label for="date" >Repita contraseña</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-8 btn-print">
                      <div class="form-group">
<input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="********* " required>
                      </div>
                    </div>
                        
                    </div>     
          <div class="row" style="text-align: center;">
          <br>
    <button type="submit" class="btn btn-plantilla">Guardar</button>  
    </div>        

        </form>
            
 <!--end of modal-->

<?php }?>

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
                                         <?php 
 // }    
?>



    <!-- /gauge.js -->
  </body>
</html>
