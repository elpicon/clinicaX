
<?php include '../layout/header.php';

 header('Content-Type: text/html; charset=UTF-8'); 
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
   <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     
    
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

     <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> 
    
 

 
  
   <link href="../layout/build/css/custom.min.css" rel="stylesheet">
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
        <div class="col-md-8 col-sm-8 col-xs-8">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">

        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-success btn-print myButton2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
                <!--<a class="btn btn-warning btn-print myButtonx" href="paciente_agregar.php"    style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR</a>-->
                     <!-- <button type="button" class="btn btn-warning btn-print myButtonx" data-toggle="modal" data-target="#myModal">
                      Registrar Ingreso
                    </button>-->

                <div class="box-body">
                
         <?php  
         $selected=0;  
             $i=0;     
      if ( isset( $_REQUEST[ 'cid' ] ) ) {
          $cid=$_REQUEST[ 'cid' ];
          if(strcmp("",$_REQUEST["cid"])){
                $query = mysqli_query( $con, "SELECT * FROM u_pacientes WHERE numerodedocumento like '".$_REQUEST["cid"]."%'" )or die( mysqli_error() );
                $row = mysqli_fetch_assoc($query);
              
          $i++;
              
               //echo "<h1>" .$row["primernombre"]."</h1>";
              $selected=1;
            }
      } else {
          $cid = $_POST[ 'cid' ];
      }
                    
                    
          ?>
          
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar Ingreso</h4>
      </div>
      <div class="modal-body">
      
       <input type="hidden" class="form-control" id="tipo" name="tipo" value="paciente" required>
         
                  
                           
    <table >
      <tr>
        <th style="width:15%;"></th>
        <th style="width:30%;"></th>
         <th style="width:16%;"></th>
        <th style="width:80%;"></th>
      </tr>
      <tr>
       <td colspan="4"><div id="datos_paciente1"></div>  </td> 
      </tr>
      <tr>
        <td colspan="2"><br>
        
        
        <?php 
            
            
           
            if($selected==1){
                 $nivel = "";
          $nombre = "";
           $tipo_sangre = "";
          $genero = "";
           $documento = "";
           $fecha_nacimiento = "";
           $celular = "";
           $telefono ="";
          $numerocontrato = "";
           $ocupacion = "";
          $eps = "";
          $ciudad = "";
     
  
           
            $nivel = $row[ 'nivel' ];
           $tipo_sangre = $row[ 'tipodesangre' ];
          $genero = $row[ 'genero' ];
           $fecha_nacimiento = $row[ 'fechanto' ];
           $celular = $row[ 'celular' ];
           $telefono = $row[ 'celular' ];
           $ocupacion = $row[ 'ocupacion' ];
          $eps = $row[ 'codigoeps' ];
          $ciudad = $row[ 'municipio' ];
            
        
                $nombrecompleto=$row["primernombre"]." ".$row["segundonombre"]." ".$row["primerapellido"]." ".$row["segundoapellido"];
                 $nombrecompleto=str_replace("  ", " ", $nombrecompleto);
                echo " <label class='text-center' id='lbl_nombrepaciente' for='' >".$nombrecompleto."</label>";}else{
                echo "<label class='text-center' id='lbl_nombrepaciente' for='' ></label>";
                }
            
            ?>
       
        
        </td>
        
         <td colspan="2"><br>
        
        <?php 
            
            
           
            if($selected==1){
                
                $query = mysqli_query( $con, " SELECT MAX(id_cita) AS id_cita, id_paciente, horario FROM cita WHERE `id_paciente`='".$cid."' AND estado_cita='reservado';" )or die( mysqli_error() );
                $row2 = mysqli_fetch_assoc($query);
                    
                
                echo " <label class='text-center' id='lbl_nombrepaciente' for='' >Cita Asignada Codigo :</label><input readonly id='in_codcita'></input>";}else{
                echo "<label class='text-center' id='lbl_nombrepaciente' for='' ></label>
                        ";
            }
            
            ?>
       
        
        </td>
        </tr>
      <tr>
        <td><br><label for="" >Paciente:</label></td>
        <td ><br>
           <?php if($selected==1){echo "<input  readonly autocomplete='off' value='".$cid."' list='list_paciente' id='paciente' type='text' class='form-control'>";}else{
              echo "<input autocomplete='off' list='list_paciente' id='paciente' type='text' class='form-control'>
                        <datalist id='list_paciente' >

                        </datalist>";
            }
            
            ?>
          
        </td>
       
         <td><br><label for="" >&nbsp;Tipo Ingreso:</label></td>
        <td ><br>
            <select class="form-control">
                <option value="HOSPITALIZACION">HOSPITALIZACION</option>
                <option value="URGENCIA">URGENCIA</option>
                <option value="CONSULTA EXTERNA">CONSULTA EXTERNA</option>
                <option value="CIRUGIAS">CIRUGIAS</option>
                <option value="UCI">UCI</option>
            </select>
        </td>  
      </tr>
      <tr>
        <td><br><label for="" >&nbsp;Fecha Ingreso:</label></td>
        <td >
           <?php ini_set('date.timezone','America/Bogota'); ?>
            <input id="fechaingreso" type="date" value="<?php  echo date("Y-m-d");     ?>" />
        </td> 
        <td ><input id="horaingreso" type="time" value="<?php  echo date("H:i:s");     ?>" /></td>                                  
        </tr>
        
        <tr>
        <td><br><label for="" >&nbsp;Diereccion:</label></td>
        <td ><br>
          <input type="text" class="form-control" id="direccion" name="tipo" value="" required>
        </td>  
        
        <td><br><label for="" >&nbsp;Telefono:</label></td>
        <td ><br>
          <input type="tel" class="form-control" id="telefono" name="tipo" value="" required>
        </td>   
        </tr>
         <tr>
        <td><br><label for="" >&nbsp;Tipo Atencion:</label></td>
        <td ><br>
         <select id="tipo_atencion" name="tipo_atencion" class="form-control">
            <option value="1">Sin Contrato</option>   
            <option value="2">Con Contrato</option>  
            <option value="2">Particular</option>  
         </select>
        </td>  
        
         
        </tr>
        <tr>
         <td><br><label for="" >&nbsp;Aseguradora:</label></td>
        <td ><br>
         <input autocomplete="off" list="list_codigo" id="codigoaseg" type="text" class="form-control">
                    <datalist id="list_codigo" >
                
                    </datalist>
        </td>
        <td ><br><label  id="nombreAseguradora" for="">&nbsp;&nbsp;----------------------</label></td>    
        </tr>
        <tr>
        
        <td ><br><label for="">Regimen :</label></td>
   <td ><br><select type="text" id="regimen" class="form-control" >
      <option value=''>Seleccione</option>
       <?php
         $query=mysqli_query($con,"SELECT * FROM regimen ")or die(mysqli_error());
        $x=0;
        while($row=mysqli_fetch_array($query)){
            echo"<option value=".$row['codigo'].">".$row['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td>
         
       <td ><br><label for="">&nbsp;Programa :</label></td>
   <td ><br><select type="text" id="regimen" class="form-control" >
      <option value=''>Seleccione</option>
       <?php
         $query=mysqli_query($con,"SELECT * FROM regimen ")or die(mysqli_error());
        $x=0;
        while($row=mysqli_fetch_array($query)){
            echo"<option value=".$row['codigo'].">".$row['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td>   
          
        </tr>   
    </table>          
        
          <script>
              
              

        const codigoaseg = document.getElementById('codigoaseg');
        const list_codigo = document.getElementById('list_codigo');
              
           
               $('#codigoaseg').change(function(){
                   var value = $('#codigoaseg').val();
                   var codigoSplit=value.split(" ");
                   var  codigoS= codigoSplit[0];//1
                   $('#codigoaseg').val(codigoS);
                   
                   var datacod = 'codigo='+codigoS;
                 document.querySelector('#nombreAseguradora').innerText = value.replace(codigoS, '');
                   
               });
              
              const inHandlerOrden = function(e) {
              descripcion = e.target.value;
             if (descripcion.charAt(0) == '1') {
                 {
                     {}
                 }              var dataOrden= 'codigo='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "getAseguradora.php",
                        data: dataOrden,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_codigo.innerHTML = respuesta;
                        }
                    });
                 }else{
                     $('#cuentaorden').val("");
                     //alertify.error("El Primer numero debe ser 1.");
                 }
         }
              
                codigoaseg.addEventListener('input', inHandlerOrden);
            codigoaseg.addEventListener('propertychange', inHandlerOrden); 
              
              
          const paciente = document.getElementById('paciente');
          const list_paciente = document.getElementById('list_paciente');
          const datos_paciente1 = document.getElementById('datos_paciente1');
              
                $('#paciente').change(function(){
                    var value = $('#paciente').val();
                    var codigoSplit=value.split(" ");
                    var  codigoS= codigoSplit[0];//1
                    $('#paciente').val(codigoS);
                    
                    mostrarDatosPaciente(codigoS);
                    
                    var filtered = codigoSplit.filter(function (el) {
                      return el != null;
                    });
                    
                   
                    
                    var buffer="";
                 for(var i=0;i<filtered.length;i++){
                     if(i!=0){
                         if(i==1){
                             buffer=buffer+filtered[i].trim();
                         }else{
                             buffer=buffer+" "+filtered[i];
                         }
                         
                          buffer=buffer.trim();
                     }
                 }
                    console.log(""+buffer);
                    document.getElementById("lbl_nombrepaciente").innerHTML=buffer;
                   // $('#lbl_nombrepaciente').val(buffer);
                    var datacod = 'paciente='+codigoS;
                });
              
               const inHandlerPaciente = function(e) {
                var sresult;
                  descripcion = e.target.value;
                  var dataString = 'paciente='+descripcion;
                  $.ajax({
                        type: "POST",
                        url: "getPaciente.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                        console.log(respuesta);
                            var resSplit=respuesta.split("$#$");
                            list_paciente.innerHTML = resSplit[0];
                            
                        }
                        });
                    }
                paciente.addEventListener('input', inHandlerPaciente);
                paciente.addEventListener('propertychange', inHandlerPaciente); 
              
              
             function mostrarDatosPaciente(codigoS){
                  var dataString = 'paciente='+codigoS;
                  $.ajax({
                        type: "POST",
                        url: "getDatosPaciente.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                        
                            
                         var subSplit=   respuesta.split(",");
                            
             var datosP1 ="";         
             datosP1= datosP1+"<span class='subt'>Sexo : </span><span id='txt_sexo'><label>";
            
            if(subSplit[0].trim()=="M"){
                 datosP1= datosP1+ '&nbsp;Masculino&nbsp;';
            }
            if(subSplit[0].trim()=="F"){ 
                datosP1= datosP1+ "&nbsp;Femenino&nbsp;";
            }
           
                    datosP1= datosP1+  "</label></span><label class='subt'> Nivel : </label><span"+ "id='txt_nivel'><label>&nbsp;"+subSplit[1].trim()+"&nbsp;</label></span>"+
                        "<span class='subt'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edad : </span><span id='txt_edad'><label>"+subSplit[3].trim()+"  Años, "+subSplit[4].trim()+" Meses y "+subSplit[5].trim()+" Dias </label></span> "; 

                      $('#direccion').val(subSplit[6].trim());
                      $('#telefono').val(subSplit[7].trim());
                            
                         console.log(datosP1);           
                            
                         datos_paciente1.innerHTML = datosP1;
               
                            
                        }
                        });
              }
          </script>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>  
</div>           

          
      






      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> LISTA DE CITAS</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                <div class="datagrid">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                    <th>#</th>
                       <th style="width:7%;">Cita</th>
                        <th>Medico</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th style="width:6%;">estado</th>
                        <th class="btn-print" style="width:15%;"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
        <?php
           // $branch=$_SESSION['branch'];
            $query=mysqli_query($con,"select * from cita where id_paciente='".$cid."' AND estado_cita='reservado' ")or die(mysqli_error());
            $i=0;
            while($row3=mysqli_fetch_array($query)){
                //DATOS DEL MEDICO
                $queryM=mysqli_query($con,"select * from usuario where id='".$row3['id_medico']."'")or die(mysqli_error());
                $rowM=mysqli_fetch_array($queryM);
                
                // DATOS DE HORARIOS MEDICO
                 $queryHM=mysqli_query($con,"select * from horario_medico where id_medico='".$row3['id_medico']."'")or die(mysqli_error());
                $rowHM=mysqli_fetch_array($queryHM);
                
                // DATOS DE HORARIOS ESCALAS
                $queryHM=mysqli_query($con,"select * from horario where id_horario='".$row3['horario']."'")or die(mysqli_error());
                $rowH=mysqli_fetch_array($queryHM);
                
                
            $i++;
                
        ?>
                      <tr  >

<td ><?php echo $i;?></td>
<td><?php echo $row3['id_cita'];?></td>
<td><?php echo $rowM['nombre'].'  '.$rowM['apellido'];?></td>
<td><?php echo $row3['fecha'];?></td>
<td><?php echo $rowH['nombre_horario'];?></td>
    
    <td><?php echo $row3['estado_cita'];?></td>                                      

                          <td>
                                 <?php
                   
                    
                      ?>
                      <a class="btn btn-danger myButtonx" onclick="registrarIngreso(<?php echo "'".$row3['id_cita']."'";?>);" role="button" ><i class='bx bx-edit-alt'></i></a>
                    <?php
                     if ($tipo!="recepcionista" ) {
                       ?>
                       <a class="btn btn-success  myButton2" href="<?php  echo "historial_paciente.php?cid=$cid";?>"  role="button"><i class='bx bx-history' ></i></a>
                         <?php
                     }
                         ?>
  <a class="btn btn-primary  myButtonx" href="<?php  echo "pago_paciente.php?cid=$cid";?>"  role="button"><i class='bx bx-money' ></i></a>

  <a class="small-box-footer  myButton3"  href="<?php  echo "eliminar_paciente.php?cid=$cid";?>" onClick="return confirm('¿Está seguro de que quieres eliminar usuario??');"><i class="glyphicon glyphicon-remove" ></i></a>
    

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
            </div>
            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

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
    
  <?php include '../layout/datatable_script.php';?>



        <script>
            
            
        function  registrarIngreso(cita){
                jQuery.noConflict();
         $('#myModal').modal();
         $('#in_codcita').val(cita);

    
            }
            
            
        $(document).ready( function() {
             
              
              mostrarDatosPaciente($('#paciente').val());
            
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
    
    
<style>
    .subt{
        background: #BEE5D7;
    }    
</style>
<style>



.myButtonx {
	box-shadow: 0px 10px 14px -7px #276873;
	background:linear-gradient(to bottom, #b39d59 5%, #ebb11e 100%);
	background-color:#b39d59;
	border-radius:4px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
		padding:0px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #3d768a;
}
.myButtonx:hover {
	background:linear-gradient(to bottom, #ebb11e 5%, #b39d59 100%);
	background-color:#ebb11e;
}
.myButtonx:active {
	position:relative;
	top:1px;
}


.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#ffffff; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}

 .datagridx {
        font: normal 12px/150% Arial,
        Helvetica,
        sans-serif; 
        background: #fff; 
        overflow: hidden; 
        border: 1px solid #006699;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px; 
        border-radius: 3px; 
        }
        .datagrid table td,
        .datagrid table th {
        padding: 3px 10px; 
        }
        .datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}
  
  
  .myButton1 {
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	background-color:#77b55a;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:0px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton1:hover {
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	background-color:#72b352;
}
.myButton1:active {
	position:relative;
	top:1px;
}


.myButton2 {
	box-shadow: 0px 10px 14px -7px #3e7327;
	background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
	background-color:#77b55a;
	border-radius:4px;
	border:1px solid #4b8f29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:0px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #5b8a3c;
}
.myButton2:hover {
	background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
	background-color:#72b352;
}
.myButton2:active {
	position:relative;
	top:1px;
}

.myButton3 {
	box-shadow: 0px 10px 14px -3px #735527;
	background:linear-gradient(to bottom, #d94f04 3%, #f596a6 100%);
	background-color:#d94f04;
	border-radius:4px;
	border:1px solid #e8a079;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:0px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #f2beb1;
}
.myButton3:hover {
	background:linear-gradient(to bottom, #f596a6 5%, #d94f04 100%);
	background-color:#f596a6;
}
.myButton3:active {
	position:relative;
	top:1px;
}

.fondotabla {
	box-shadow: 0px 10px 14px -7px #276873;
  background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
	background-color:#ffc477;

	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	font-weight:bold;

}
</style>


    <!-- /gauge.js -->
  </body>
</html>
