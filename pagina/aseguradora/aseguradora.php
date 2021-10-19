
<?php include '../layout/header.php';
function _convert($content) {
    if(!mb_check_encoding($content, 'UTF-8')
        OR !($content === mb_convert_encoding(mb_convert_encoding($content, 'UTF-32', 'UTF-8' ), 'UTF-8', 'UTF-32'))) {

        $content = mb_convert_encoding($content, 'UTF-8');

        if (mb_check_encoding($content, 'UTF-8')) {
            // log('Converted to UTF-8');
        } else {
            // log('Could not converted to UTF-8');
        }
    }
    return $content;
}
?>

  <link rel="stylesheet" type="text/css" href="css/alertify.css">
	<link rel="stylesheet" type="text/css" href="css/themes/default.css">

	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/alertify.js"></script>
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/aseguradora.css" type="text/css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
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

                  <div class="box-header">
                  <h3 class="htitle">Listado Aseguradoras</h3>
                </div><!-- /.box-header -->
                 <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
                <a class="btn-plantilla btn"  role="button" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i>  Registrar</a>

                <div class="box-body">
                
      

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <label class="modal-title" id="myModalLabel">Agrega Aseguradora</label>
      </div>
      <div class="modal-body">
          

      <?php
      ?>   
      <table >
        <tr>
          <th style="width:15%;"></th>
          <th style="width:30%;"></th>
          <th style="width:15%;"></th>
          <th style="width:100%;"></th>
        </tr>
        <tr>
          <td><br><label for="" >Código:</label></td>
          <td ><br>
              <input autocomplete="off" list="list_codigo" id="codigoaseg" type="text" class="form-control">
                          <datalist id="list_codigo" >
                      
                          </datalist>
                          
          </td>
          <td><br> <label for="">&nbsp;&nbsp;Identificación:&nbsp;</label></td>
          <td><br><input autocomplete="off" type="text" list="list_identifi" id="identificacion" class="form-control">
                          <datalist id="list_identifi" >
                      
                          </datalist>
                          </td>
        </tr>
        <tr>
        <td ><br><label for="" style="
    width: 145px;">Tipo Administradora:</label></td>
        <td colspan="3"><br><select type="text" id="tipoAdministradora" class="form-control" >
          <option value=''>Seleccione</option>

                      <option value='ENTIDAD PRESTADORA SALUD'>ENTIDAD     PRESTADORA SALUD</option>
                        <option value='FONDO DE CESANTIAS'>FONDO DE CESANTIAS</option>
                        <option value='FONDO DE PENSIONES'>FONDO DE PENSIONES</option>
                        <option value='CAJA COMPENSACION FAMILIAR'>CAJA COMPENSACION FAMILIAR</option>
                        <option value='RIESGOS PROFESIONALES'>RIESGOS PROFESIONALES</option>
                        <option value='ENTIDADES PARAFISCALES'>ENTIDADES PARAFISCALES</option>
        </select></td>
      </tr>
      <tr>
        <td ><br><label for="">Nombre:</label></td>
        <td colspan="3"><br><input id="nombre" type="text" class="form-control"></td>
      </tr>
      <tr>
        <td ><br><label for="">Dirección:</label></td>
        <td colspan="3"><br><input id="direccion" type="text" class="form-control"></td>
        
      </tr>
      <tr  >
        <td><br><label for="" >Latitud:</label></td>
        <td ><br><input id="latitud" type="text" class="form-control" ></td>
        <td><br> <label for="">&nbsp;&nbsp;Longitud:&nbsp;</label></td>
        <td><br><input id="longitud" type="text" class="form-control"></td>
      </tr>
        <tr>
        <td ><br><label for="">E-mail:</label></td>
        <td colspan="3"><br><input id="correoelectronico" type="text" class="form-control"></td>
      </tr>
      <tr  >
        <td><br><label for="" >Teléfono:</label></td>
        <td ><br><input id="telefono" type="text" class="form-control"></td>
        <td ><br><label for="">Régimen :</label></td>
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
  
   <tr >
    <td><br><label for="" >Cuenta CxC:</label></td>
       <td ><br>
           
                   <input autocomplete="off" list="list_cxc" id="cuentascxc" type="text" class="form-control">
                    <datalist id="list_cxc" >
                
                    </datalist>
     </td>
    <td><br> <label for="">&nbsp;&nbsp;RIPS Por:&nbsp;</label></td>
      <td><br><select type="text" id="generarripspor" class="form-control">
        <option value='' selected>Seleccione</option>
               <option value='Codigo ATC'>Código ATC</option>
               <option value='Codigo CUM'>Código CUM</option>";  
       </select></td>
  </tr>
  
    <tr  >
    <td><br><label for="" >Cuenta Orden:</label></td>
        <td ><br>
        <input autocomplete="off" list="list_orden" id="cuentaorden" type="text" class="form-control">
                    <datalist id="list_orden" >
                        
                    </datalist>
                    </td>
    <td><br> <label for="">&nbsp;&nbsp;Código RIPS :&nbsp;</label></td>
        <td><br><input type="text" id="codigopararips" class="form-control"></td>
  </tr>

     <tr>
    <td ><br><label for="">Cobertura:</label></td>
    <td colspan="3"><br>
       <select  type="text" id="cobertura" class="form-control">
       <option value="">Seleccione</option>
      <option value="Plan de Beneficios en Salud Financiado por UPC">Plan de Beneficios en Salud Financiado por UPC</option>
      <option value="Presupuesto Máximo">Presupuesto Máximo</option>
      <option value="Prima EPS / EOC, No Asegurados SOAT">Prima EPS / EOC, No Asegurados SOAT</option>
      <option value="Cobertura ARL">Cobertura ARL</option>
      <option value="Cobertura Póliza SOAT">Cobertura Póliza SOAT</option>
      <option value="Cobertura ADRES">Cobertura ADRES</option>
      <option value="Cobertura Salud Pública">Cobertura Salud Pública</option>
      <option value="Cobertura Entidad Territorial, Recursos de Oferta">Cobertura Entidad Territorial, Recursos de Oferta</option>
       </select></td>
  </tr>
   <tr>
    <td  colspan="4"><br><input id="rcmp_descaf"  type="checkbox" class="" ><label for=""> &nbsp;&nbsp; Reportar Cuota Moderadora de procedimientos como descuentos AF.</label></td>
  </tr>
   <tr>
    <td  colspan="4"><br><input  type="checkbox" id="rrch_sedefact" class="" ><label for=""> &nbsp;&nbsp; Reportr en RIPS el código de habilitación por sede de la factura.</label></td>
  </tr>
</table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="guardarCambios" onclick="guardarCambios();" class="btn btn-plantilla">Guardar</button>
      </div>
    </div>
  </div>
</div>

                        
            

      <script>
        function guardarCambios(){
            var datoSave="codigo="+$('#codigoaseg').val()+"&nombre="+$('#nombre').val().trim()+"&direccion="+$('#direccion').val()+"&identificacion="+$('#identificacion').val()+"&latitud="+$('#latitud').val()+"&longitud="+ $('#longitud').val()+"&correoelectronico="+$('#correoelectronico').val()+"&telefono="+$('#telefono').val()+"&regimen="+$('#regimen').val()+"&cobertura="+$('#cobertura').val()+"&generarripspor="+$('#generarripspor').val()+"&tipoAdministradora="+$('#tipoAdministradora').val()+"&codigopararips="+$('#codigopararips').val()+"&cuentascxc="+$("#cuentascxc").val()+"&cuentaorden="+$('#cuentaorden').val()+"&rcmp_descaf="+ $('#rcmp_descaf').prop('checked')+"&rrch_sedefact="+$('#rrch_sedefact').prop('checked');
              $.ajax({
                        type: "POST",
                        url: "queryAseguradora.php",
                        data: datoSave,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_orden.innerHTML = respuesta;
                            if(respuesta.trim()=="Existente"){
                                alertify.warning("Codigo Existente, se Actualizaron Datos.");
                            } 
                            if(respuesta.trim()=="Exitoso"){
                                alertify.success("Se ha Creado con Exito.");
                            }
                            if(respuesta.trim()=="Fallido"){
                                alertify.error("Hubo una Falla al Crear.");
                            }
                            if(respuesta.trim()=="FallidoG"){
                                alertify.error("No se detecto Cambios.");
                            }
                        }
                    });
        
           console.log(datoSave);
       }
       
       
        const codigoaseg = document.getElementById('codigoaseg');
        const list_codigo = document.getElementById('list_codigo');
        const identificacion = document.getElementById('identificacion');
        const list_identifi = document.getElementById('list_identifi');
        const phpCodigo = document.getElementById('phpCodigo');
        const list_cxc = document.getElementById('list_cxc');
        const cuentascxc = document.getElementById('cuentascxc');
        const list_orden = document.getElementById('list_orden');
        const cuentaorden = document.getElementById('cuentaorden');
        
        
        
           const inHandlerOrden = function(e) {
              descripcion = e.target.value;
             if (descripcion.charAt(0) == '1') {
                
             
              var dataOrden= 'cuenta='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "getCXC.php",
                        data: dataOrden,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_orden.innerHTML = respuesta;
                        }
                    });
                 }else{
                     $('#cuentaorden').val("");
                     alertify.error("El Primer numero debe ser 1.");
                 }
         }
        
        $('#cuentaorden').change(function(){
             var value = $('#cuentaorden').val();
           var codigoSplit=value.split(" ");
           var codigoS= codigoSplit[0];//1
            $('#cuentaorden').val(codigoS);
             
        });  
        
        
         const inHandlerCXC = function(e) {
              descripcion = e.target.value;
             if (descripcion.charAt(0) == '1') {
                
             
              var dataCXC= 'cuenta='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "getCXC.php",
                        data: dataCXC,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_cxc.innerHTML = respuesta;
                        }
                    });
                 }else{
                       $('#cuentaorden').val("");
                     alertify.error("El Primer numero debe ser 1.");
                 }
         }
         $('#cuentascxc').change(function(){
             var value = $('#cuentascxc').val();
           var codigoSplit=value.split(" ");
           var codigoS= codigoSplit[0];//1
            $('#cuentascxc').val(codigoS);
             $('#cuentaorden').val("1");
        });
        
        $('#codigoaseg').change(function(){
             var value = $('#codigoaseg').val();
           var codigoSplit=value.split(" ");
           var  codigoS= codigoSplit[0];//1
            $('#codigoaseg').val(codigoS);
            var datacod = 'codigo='+codigoS;
            
              $.ajax({
                        type: "POST",
                        url: "getAsegAll.php",
                        data: datacod,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log("All "+respuesta.trim());
                          
                            if(respuesta.trim()!==""){
                                list_codigo.innerHTML = respuesta;
                            var dataAll=respuesta.split("#$");
                            var codigoX= dataAll[0];//1
                            var tipoAdministradora=  dataAll[1].trim().toUpperCase();
                            var identificacion=  dataAll[2];
                            var direccion=  dataAll[3].trim();
                            var latitud=  dataAll[4];
                            var longitud=  dataAll[5];
                            var correoelectronico=  dataAll[6].trim();
                            var telefono=  dataAll[7];
                            var regimen=  dataAll[8].trim();
                            var cuentacxc=  dataAll[9];
                            var generarripspor=  dataAll[10];
                            var cuentaorden=  dataAll[11];
                            var codigopararips=  dataAll[12];
                           // var auditor=  dataAll[13];
                            var cobertura=  dataAll[14];
                            var rcmp_descaf=  dataAll[15];
                            var rrch_sedefact=  dataAll[16];
                            var nombre=  dataAll[17].trim();
                            
                            $('#nombre').val(nombre);
                            $('#direccion').val(direccion);
                            $('#identificacion').val(identificacion);
                            $('#latitud').val(latitud);
                            $('#longitud').val(longitud);
                            $('#correoelectronico').val(correoelectronico);
                            $('#telefono').val(telefono);
                            $('#regimen').val(regimen);
                            $('#cobertura').val(cobertura);
                            $('#generarripspor').val(generarripspor);
                            $('#tipoAdministradora').val(tipoAdministradora);
                            $('#codigopararips').val(codigopararips);
                            $('#cuentascxc').val(cuentacxc);
                            $('#cuentaorden').val(cuentaorden);
                            var rcmp = document.getElementById("#rcmp_descaf");
                            if(convertString(rcmp_descaf))
                                {
                                  $("#rcmp_descaf").prop("checked", true);
                                }
                                else
                                {
                                  $("#rcmp_descaf").prop("checked", false);
                                }
                            
                            var rrch = document.getElementById("#rrch_sedefact");
                            if(convertString(rrch_sedefact))
                                {
                                  $("#rrch_sedefact").prop("checked", true);
                                }
                                else
                                {
                                  $("#rrch_sedefact").prop("checked", false);
                               }
                           
                            }else{
                                console.log("xxx "+codigoS);
                                console.log("xxx "+ codigoS == undefined);
                                 console.log("xxx ");
                                if( codigoS == ""){
                                    $('#nombre').val("");
                                    $('#direccion').val("");
                                    $('#identificacion').val("");
                                    $('#latitud').val("");
                                    $('#longitud').val("");
                                    $('#correoelectronico').val("");
                                    $('#telefono').val("");
                                    $('#regimen').val("");
                                    $('#cobertura').val("");
                                    $('#generarripspor').val("");
                                    $('#tipoAdministradora').val("");
                                    $('#codigopararips').val("");
                                    $('#cuentascxc').val("");
                                    $('#cuentaorden').val("");
                                }else{ alertify.alert("Se Guardara Como un Nuevo Seguro."+codigoS);}
                        }
                        }
                        });
            
        });
                              
          const convertString = (word) =>{
                       if(word!=undefined){
                        switch(word.toLowerCase().trim()){
                            case "yes": case "true": case "1": return true;
                            case "no": case "false": case "0": case null: return false;
                            default: return Boolean(word);
                        }
                        }
                    }
              
            const inHandlerCodigo = function(e) {
            var sresult;
              descripcion = e.target.value;
              var dataString = 'codigo='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "getAseguradora.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_codigo.innerHTML = respuesta;
                        }
                        });
                    }
                 
            
            $('#identificacion').change(function(){
             var value = $('#identificacion').val();
           var codigoSplit=value.split(" ");
           var codigoS= codigoSplit[0];//1
            $('#identificacion').val(codigoS);
        });
              
            
            const inHandlerIdentificacion = function(e) {
            var sresult;
              descripcion = e.target.value;
              var dataString = 'identificacion='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "getIdentificacion.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                            list_identifi.innerHTML = respuesta;
                        }
                    });
                 }
            codigoaseg.addEventListener('input', inHandlerCodigo);
            codigoaseg.addEventListener('propertychange', inHandlerCodigo); identificacion.addEventListener('input', inHandlerIdentificacion);
            identificacion.addEventListener('propertychange', inHandlerIdentificacion);  
            cuentascxc.addEventListener('input', inHandlerCXC);
            cuentascxc.addEventListener('propertychange', inHandlerCXC); 
            cuentaorden.addEventListener('input', inHandlerOrden);
            cuentaorden.addEventListener('propertychange', inHandlerOrden); 
          </script>
 <!--end of modal-->



                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class="encabezado">

                        <th>#</th>
                        <th >Código</th>
                        <th>Aseguradora</th>
                        <th>Nit</th>
                        <th>Tipo Entidad</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th style="width: 75px">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                            <?php
                                  $query=mysqli_query($con,"select * from aseguradoras where 1 ")or die(mysqli_error());
                                $i=0;
                                while($row=mysqli_fetch_array($query)){      
                                    
                                $codigo=$row['codigo'];
                                $estado=$row['estado'];
                                $transacciones=$row['transacciones'];
                                $i++;
                                    
                                    if(!strcmp($estado,"activo")){
                                        echo "<tr ";
                                    }else{
                                        echo "<tr";
                                    }
                            ?>

                              <tr style="background: white;">

<td ><?php echo $i;?></td>
<td><?php echo $row['codigo'];?></td>
<td><?php echo $row['nombre'];?></td>
<td><?php echo $row['identificacion'];?></td>
<td><?php echo $row['tipoadministradora'];?></td>
<td><?php echo $row['direccion'];?></td>    
<td><?php echo $row['telefono'];?></td>  
                                  

<td>
<a class="btn-plantilla btn" href="<?php  echo "editar_medico.php?cid=$codigo";?>"  role="button"><i class="glyphicon glyphicon-pencil"></i></a>
  <a class="btn btn-delete"  href="<?php  
        if(!strcmp($transacciones,"1")){
            if(!strcmp($estado,"activo")){
                  echo "eliminar_aseguradora.php?codigo=".$codigo."&comando=desactivar";
                }else{
                if(!strcmp($estado,"inactivo")){
                  echo "eliminar_aseguradora.php?codigo=".$codigo."&comando=activar";
                }
              }
            
            
        }else{
            if(!strcmp($estado,"activo")){
                  echo "eliminar_aseguradora.php?codigo=".$codigo."&comando=eliminar";
                }else{
                if(!strcmp($estado,"inactivo")){
                  echo "eliminar_aseguradora.php?codigo=".$codigo."&comando=activar";
                }
            }
        }
       //<i class='bx bx-block'></i>  <i class='bx bx-check' ></i> glyphicon glyphicon-remove

    ?>" onClick="return confirm('¿Está seguro de que quieres eliminar medico??');"><i class="<?php  
         if(!strcmp($transacciones,"1")){
            if(!strcmp($estado,"activo")){
                  echo "bx bx-block";
                }else{
                if(!strcmp($estado,"inactivo")){
                  echo "bx bx-check";
                 }
               }
            
            
        }else{
            if(!strcmp($estado,"activo")){
                  echo "glyphicon glyphicon-trash";
                }else{
                if(!strcmp($estado,"inactivo")){
                  echo "bx bx-check";
                }
              }
        }
      ?>" ></i></a>

            <?php
        //}
?></td>
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

<style>
.myButton {
	box-shadow:inset 0px 1px 3px 0px #91b8b3;
	background:linear-gradient(to bottom, #768d87 5%, #6c7c7c 100%);
	background-color:#768d87;
	border-radius:4px;
	border:1px solid #566963;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:2px 1px;
	text-decoration:none;
	text-shadow:0px -1px 0px #2b665e;
}
.myButton:hover {
	background:linear-gradient(to bottom, #6c7c7c 5%, #768d87 100%);
	background-color:#6c7c7c;
}
.myButton:active {
	position:relative;
	top:1px;
}

        
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
		padding:2px 1px;
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
