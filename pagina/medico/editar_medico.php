
<?php include '../layout/header.php';

//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->

    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
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
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->

 </div>
  <?php
     if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_POST['cid'];
          }


?>

                           <?php
                         
             //         if ($guardar=="si") {
                    
                      ?>

                  <?php
               //       }
                      ?>

                  <!-- Date range -->
               

      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> MODIFICAR MEDICO</h3>
                </div><!-- /.box-header -->
              
              <a class="btn btn-warning btn-print" href="medico.php"    style="height:25%; width:15%; font-size: 12px " role="button">Regresar</a>

                <div class="box-body">
                

<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario where id= '$cid' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id'];

       $tipo=$row['tipo'];
        
?>
      
        <form class="form-horizontal" method="post" action="medico_actualizar.php" enctype='multipart/form-data'>
            <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $row['id'];?>" required>
    




     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >IMAGEN ANTIGUA</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                 <IMG src="../usuario/subir_us/<?php echo $row['imagen'];?>" style="height:50PX" />
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

     <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >IMAGEN NUEVA</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                  <input type="file" class="form-control" id="imagen" name="imagen"  >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


                <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombres</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" readonly class="form-control" id="nombre"  name="nombre"  value="<?php echo $row['nombre'];?>"   required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    
                    
                <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Apellido</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" readonly class="form-control" id="apellido"  name="apellido"  value="<?php echo $row['apellido'];?>"   required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                    </div>
                    </div>



          
               <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Usuario</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" readonly class="form-control" id="usuario"  name="usuario"  value="<?php echo $row['usuario'];?>"   required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    
                    
                    
                    <div class="row">
                           <div class="col-md-3 btn-print">
                         <div class="form-group">
                        <label for="rh" >RH</label>
                               </div>
                        </div>
                          
                          <div class="col-md-4 btn-print">
                      <div class="form-group">
                           <select name="rh" required>
                             <option value="">Seleccione</option>
                             <?php 
                    if(!strcmp($row['tipo_sangre'],"O+")){
                        echo "<option value='O+' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='O+' >O+</option>";
                    }
                    if(!strcmp($row['tipo_sangre'],"O-")){
                        echo "<option value='O-' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='O-' >O-</option>";
                    }
                    if(!strcmp($row['tipo_sangre'],"A+")){
                        echo "<option value='A+' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='A+' >A+</option>";
                    }
                    if(!strcmp($row['tipo_sangre'],"A-")){
                        echo "<option value='A-' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='A-' >A-</option>";
                    }
        
                    if(!strcmp($row['tipo_sangre'],"B+")){
                        echo "<option value='B+' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='B+' >B+</option>";
                    }
                    if(!strcmp($row['tipo_sangre'],"B-")){
                        echo "<option value='B-' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='B-' >B-</option>";
                    }
                    if(!strcmp($row['tipo_sangre'],"AB+")){
                        echo "<option value='AB+' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='AB+' >AB+</option>";
                    }
                    if(!strcmp($row['tipo_sangre'],"AB-")){
                        echo "<option value='AB-' selected>".$row['tipo_sangre']."</option>";
                                }else{
                        echo "<option value='AB-' >AB-</option>";
                    }
                               
                               
                               ?>
                           
                            </select>
                      </div>
                    </div>
                    </div>
                    
                    
                    
               
 <div class="row">
                
                           <div class="col-md-3 btn-print">
                <div class="form-group">
                        <label for="genero" >GENERO</label>
                               </div>
     </div>
                          <div class="col-md-4 btn-print">
                      <div class="form-group">
                          
                           <select  name="genero" required>
                                <option value="">Seleccione</option>
                             <?php 
                    if(!strcmp($row['genero'],"MASCULINO")){
                        echo "<option value='MASCULINO' selected>".$row['genero']."</option>";
                                }else{
                        echo "<option value='MASCULINO' >MASCULINO</option>";
                    }
                    if(!strcmp($row['genero'],"FEMENINO")){
                        echo "<option value='FEMENINO' selected>".$row['genero']."</option>";
                                }else{
                        echo "<option value='FEMENINO' >FEMENINO</option>";
                    }
                               
                               
                               ?>
                          
                            </select>
                      </div>
                    </div>
                    </div>
     
                    
                    

             <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Registro Medico</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="registromedico"  value="<?php echo $row['registromedico'];?>" name="registromedico" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



               <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Telefono</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="telefono"  name="telefono"  value="<?php echo $row['telefono'];?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>




       <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Correo</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">

            <input type="text" class="form-control" id="correo"  name="correo" value="<?php echo $row['correo'];?>" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>



        
          
 








  


     
                
          
    <button type="submit" class="btn btn-primary">GUARDAR</button>          
  
                   
            <br><br><br><hr>
              <div class="modal-footer">


              </div>
        </form>
            
 <!--end of modal-->

<?php }?>

                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

        
        <!-- /page content -->

        <!-- footer content -->
       <footer>
          <div class="pull-right">
                    <a href="https://ventadecodigofuente.com/">hospital tusulutionweb Sys</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
     
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
