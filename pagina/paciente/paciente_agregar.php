
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">

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
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>


                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->
    <?php
                    $id_usuario=$_SESSION['id'];
                      
                

                //  if ($guardar=="si") {
        $id_usuario=$_SESSION['id'];      
            
            
            
                      ?>

                <a class="btn btn-dark btn-print fa fa-chevron-left" aria-hidden="true" href="paciente.php"    style="height:25%; width:15%; font-size: 12px " role="button"></a>
                
                


                <div class="box-body">
                

        <form class="form-horizontal" method="post" action="paciente_add.php" enctype='multipart/form-data'>

       <input type="hidden" class="form-control" id="tipo" name="tipo" value="paciente" required>



<div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="grupo_empresa" >Grupo Empresarial</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                     <input type="text" class="form-control pull-right" id="grupo_empresa" name="grupo_empresa"  readonly='readonly'   value="<?php echo $id_grupo_empresa; ?>" >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


                   <div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Foto</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
            <input type="file" class="form-control" id="imagen" name="imagen" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>




 <div class="row">
  
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="eps_ars" >EPS / ERP</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <select name="eps_ars" required>
                                <option value="">Seleccione</option>
                               //ANTECEDENTES DEL PACIENTE 
<?php
    
      
      $x = 0;

   
          $query = mysqli_query( $con, "SELECT * FROM EPS WHERE true " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
             
              $eps = $row[ 'nombre_eps' ];
               $i++;
            echo "     <option value='$i'>".$eps."</option>";
             
          }
         
         
      ?>
      
                              
                            </select>
                      </div>
                    </div>
                        
                    </div>



                   <div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Nombre</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">

                          <input type="text" class="form-control pull-right" id="nombre" name="nombre" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
       
            <div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Apellido</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="apellido" name="apellido" required >
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


 <div class="row">
  
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Usuario</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <input type="text" class="form-control pull-right" id="usuario" name="usuario"  placeholder="usuario" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    
                    
            <div class="row">
  
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="departamento" >Departamento</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <select id="departamento" name="departamento" required>
                                <option value="">Seleccione</option>
                               //ANTECEDENTES DEL PACIENTE 
<?php
      $x = 0;
          $query = mysqli_query( $con, "SELECT * FROM departamentos WHERE true " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
              $departamentos = $row[ 'departamento' ];
              $id_departamento = $row[ 'id_departamento' ];
                $departamentos = utf8_encode($departamentos);
               $i++;
            echo "     <option value='$id_departamento'>".$departamentos."</option>";
             
          }
      ?>
      
                            </select>
                          </div>
                    </div>
                 </div>   
                            
			                 <div id="municipios"></div>
                            
                      
                    
                          
                
                    
                        
      <script type="text/javascript">
	$(document).ready(function(){
		$('#departamento').val(1);
		recargarLista();

		$('#departamento').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"getciudades.php",
			data:"id_departamento=" + $('#departamento').val(),
			success:function(r){
				$('#municipios').html(r);
			}
		});
	}
</script>               
                    
        <div class="row">
  
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="fecha_nacimiento" >Fecha de Nacimiento</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <input type="date" class="form-control pull-right" id="fnacimiento" name="fecha_nacimiento"  placeholder="Fecha de nacimiento" required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    
                    
                           <div class="row">
  
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="sangre" >Tipo de Sangre</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <select name="sangre" required>
                             <option value="">Seleccione</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    

 <div class="row">
  
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="genero" >Genero</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <select name="genero">
                             <option value="">Seleccione</option>
                            <option>M</option>
                            <option>F</option>
                            <option>Sin Especificar</option>
                            </select>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    




 <div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Telefono o Celular</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    
<div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="direccion" >Direccion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion"  required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>


<div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="ocupacion" >Ocupacion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
            <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupacion"  required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

     
<div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Correo</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo"  required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
                    
 <div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Contraseña</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <input type="password" class="form-control pull-right" id="date" name="password" placeholder="password " required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

 <div class="row">
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                        <label for="date" >Repita contraseña</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
<input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="Repite Password " required>
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
             
                 
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
              










              <div class="modal-footer">


              </div>
        </form>

 



                </div><!-- /.box-body -->


            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

         
        
        <!-- /page content -->

        <!-- footer content -->
       <footer>
          <div class="pull-right">
                 <a href="https://beatifullshop.co/app/clinica/pagina/layout/inicio.php">DOCTORPRJ IPS</a>
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



<script type="text/javascript">
  $(document).ready(function(){
    $("#id_clase").change(function(){
      $.get("get_tipo.php","id_clase="+$("#id_clase").val(), function(data){
        $("#id_tipo").html(data);
        console.log(data);
      });
    });


  });
</script>

    <!-- /gauge.js -->
  </body>
</html>
