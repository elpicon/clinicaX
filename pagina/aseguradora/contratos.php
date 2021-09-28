
<?php include '../layout/header.php';
include('../../dist/includes/dbcon.php');
 include '../layout/session.php';
                             
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
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/aseguradora.css" type="text/css">
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


 
 <!--end of modal-->
            <input hidden id="tipoU" value="<?php echo $tipo; ?>" >

                  <div class="box-header">
                  <h3 class="htitle">Contratos</h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i>Imprimir</a>
                <a class="btn btn-plantilla"   role="button" data-toggle="modal" data-target="#myModal">Registrar</a>


                <!-- Button trigger modal -->

<!-- Modal -->









                <div class="box-body">
                
      

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <label class="modal-title" id="myModalLabel">Agrega Contrato</label>
      </div>
      <div class="modal-body">
          
   
      
      <?php
                    
                  
   // $branch=$_SESSION['branch'];
   
      ?>   
       <table >
  <tr>
    <th style="width:15%;"></th>
    <th style="width:30%;"></th>
     <th style="width:15%;"></th>
    <th style="width:100%;"></th>
  </tr>
  <tr>
    <td><br><label for="" >Contrato #:</label></td>
    <td ><br>
        <input autocomplete="off" list="list_codigo" id="codigocontrato" type="text" class="form-control">
                    <datalist id="list_codigo" >
                
                    </datalist>
                    
    </td>
    <td><br> <label for="">&nbsp;&nbsp;Entidad:&nbsp;</label></td>
    <td><br><input autocomplete="off" type="text" list="list_entidad" id="entidad" class="form-control">
            <datalist id="list_entidad" >
                
            </datalist>
            </td>
  </tr>
  
    <tr>
     <td ><br><label for="">&nbsp;&nbsp;Valor :</label></td>
    <td colspan=""><br><input id="valorcontrato"  type="money_format" placeholder="$0.00" class="form-control">
    </td>           
    <td><br> <label for="">&nbsp;&nbsp;Ciudad:&nbsp;</label></td>
    <td><br><input autocomplete="off" type="text" list="list_ciudad" id="in_ciudad" class="form-control">
    <datalist id="list_ciudad" >
                
    </datalist>
    </td>
  </tr>
  
  <tr>
   <td ><br><label for="">Fecha Inicio:</label></td>
    <td colspan=""><br><input id="fechainicio" type="date" placeholder="Digita El numero de contrato" class="form-control"></td>   
   <td ><br><label for="">&nbsp;&nbsp;Fecha Fin:</label></td>
    <td colspan=""><br><input id="fechafin" type="date" placeholder="Digita El numero de contrato" class="form-control"></td>
  </tr>
  
  
  <tr> 

   <td ><br><label for="">&nbsp;&nbsp;Objeto :</label></td>
  <td colspan="3">
  <br>
  <textarea id="objeto" name="Objeto" rows="3" style="width:100%;" >

</textarea>
 </td>
   </tr>
  <tr>
    <td ><br><label for="">Cobertura:</label></td>
    <td colspan="3"><br><select type="text" id="coberturas" class="form-control" >
      <option value=''>Seleccione</option>
       <?php
         $query=mysqli_query($con,"SELECT * FROM coberturas ")or die(mysqli_error());
        $x=0;
        while($row=mysqli_fetch_array($query)){
            echo"<option value=".$row['codigo'].">".$row['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td>
    <td ></td>
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
    
    <td ><br><label for="">&nbsp;&nbsp;Alcance :</label></td>
   <td ><br><select type="text" id="alcancecontrato" class="form-control" >
      <option value=''>Seleccione</option>
       <?php
         $query=mysqli_query($con,"SELECT * FROM alcance_contrato ")or die(mysqli_error());
        $x=0;
        while($row=mysqli_fetch_array($query)){
            echo"<option value=".$row['codigo'].">".$row['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td>
    
       
  </tr>
   <tr> 
   <td ><br><label for="">&nbsp;&nbsp;Nievel :</label></td>
   <td ><br><select type="text" id="nivel" class="form-control" >
      <option value=''>Seleccione</option>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
      <option value='4'>4</option>
                  
    </select></td>
    
     <td ><br><label for="">&nbsp;&nbsp;Tipo &nbsp;Contrato :</label></td>
   <td ><br><select type="text" id="tipocontrato" class="form-control" >
      <option value=''>Seleccione</option>
      <option value='1'>Capitado</option>
      <option value='2'>Por Evento</option>
                  
    </select></td>
   </tr>
   <tr>
    <td ><br><label for="">&nbsp;&nbsp;Modalidad :</label></td>
   <td colspan="3" ><br><select type="text" id="modalidad" class="form-control" >
      <option value=''>Seleccione</option>
       <?php
         $query=mysqli_query($con,"SELECT * FROM modalidades_contrato ")or die(mysqli_error());
        $x=0;
        while($row=mysqli_fetch_array($query)){
            echo"<option value=".$row['codigo'].">".$row['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td>   
   </tr>
   <tr>
       <td ><br><label for="">&nbsp;&nbsp;Manual Tarifario:</label></td>
   <td ><br><select type="text" id="tarifacup" class="form-control" >
          <option value=''>Seleccione</option>
       <?php
         $query2=mysqli_query($con,"SELECT * FROM manuales_tarifarios ")or die(mysqli_error());
        $x=0;
        while($row2=mysqli_fetch_array($query2)){
            echo"<option value=".$row2['codigo'].">".$row2['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td> 
        <td ><br><label for="">&nbsp;&nbsp;Porcentaje:</label></td>
   <td ><br><input id="porcentajecup" type="number" max="100" min="0" class="form-control"></td> 
    
   </tr>
   
      <tr>
      
      <td ><br><label for="">&nbsp;&nbsp;Tarifa CUM:</label></td>
   <td ><br><select type="text" id="tarifacum" class="form-control" >
          <option value=''>Seleccione</option>
       <?php
         $query2=mysqli_query($con,"SELECT * FROM manuales_tarifarios ")or die(mysqli_error());
        $x=0;
        while($row2=mysqli_fetch_array($query2)){
            echo"<option value=".$row2['codigo'].">".$row2['nombre']."</option>";
                $x++;
        }
        
        ?>
                  
    </select></td>
      
       <td ><br><label for="">&nbsp;&nbsp;Porcentaje:</label></td>
   <td ><br><input id="porcentajecum" type="number" max="100" min="0" class="form-control"></td> 
    
   </tr>
   
   
 <tr>
 <td colspan="4">
 <br>
<div class="warpper">
    <input class="radio" id="one" name="group" type="radio"  checked/>
  <input class="radio" id="two" name="group" type="radio" />
  <input class="radio" id="three" name="group" type="radio">
  <div class="tabs">
  <label class="tab" id="one-tab" for="one">Cubrimiento</label>
  <label class="tab" id="two-tab" for="two">Cobro / Autorizacion</label>
  <!-- <label class="tab" id="three-tab" for="three"></label>-->
    </div>
  <div class="panels">
  <div class="panel" id="one-panel">
    <div class="panel-title"></div>
    
          <div class="row text-left">
          
            <table>
           <th style="width:30%;"></th>
    <th style="width:20%;"></th>
     <th style="width:20%;"></th>
    <th style="width:35%;"></th>
    <tbody>
    <tr>
        
        <td colspan="2"> <br><input id="ct_procedimientos"  onclick="desactivarPorcentajectp()" type="checkbox" class="" ><span for=""> Cubre todos los Procedimientos.</span></td>
        <td></td>
        <td><label for="">&nbsp;&nbsp;Porcentaje:</label>
           <input id="porcentajectp" type="number" max="100"  min="0" value="0" class="form-control"></td>
        <script>
            function desactivarPorcentajectp(){
                if($('#ct_procedimientos').prop('checked')){
                  $("#porcentajectp").prop('disabled', false);

                }else{
                  $("#porcentajectp").prop('disabled', true);  
                }
            }
        </script>
    </tr>
    <tr>
        
        <td colspan="2"> <br><input  type="checkbox"  onclick="desactivarPorcentajectm()"  id="ct_medicamentos" class="" ><span for=""> Cubre todos los Medicamentos.</span></td>
        <td></td>
        <td> <label for="">&nbsp;&nbsp;&nbsp;Porcentaje:</label>
           &nbsp;&nbsp;<input id="porcentajectm" type="number" max="100" min="0" value="0" class="form-control"></td>
        <td></td>
        <script>
            function desactivarPorcentajectm(){
                if($('#ct_medicamentos').prop('checked')){
                  $("#porcentajectm").prop('disabled', false);

                }else{
                  $("#porcentajectm").prop('disabled', true);  
                }
            }
        </script>
        
    </tr>
    <tr>
        <td colspan="2"><br><input  type="checkbox"  onclick="desactivarPorcentajectma()" id="ct_materiales" class="" ><span for=""> Cubre todos los Materiales</span></td>
       
        <td></td>
        <td><label for="">&nbsp;&nbsp;&nbsp;Porcentaje:</label>
           &nbsp;&nbsp;<input id="porcentajectma" type="number" max="100" min="0" value="0" class="form-control"></td>
           <script>
            function desactivarPorcentajectma(){
                if($('#ct_materiales').prop('checked')){
                  $("#porcentajectma").prop('disabled', false);

                }else{
                  $("#porcentajectma").prop('disabled', true);  
                }
            }
        </script>
    </tr>
    
    <tr>
        <td colspan="2"><br><input  type="checkbox" id="cs_ambulatiorio_hospitalizacion" ><span for=""> Cubre Servicios Ambulatorios y de Hospitalización.</span></td>
        <td colspan="2">
           &nbsp;&nbsp;<input  id="pm_copago"  type="checkbox" ><label for="">&nbsp;&nbsp;&nbsp;Permite Modificar Copago.</label></td>
    </tr>
    
    </tbody>
</table>
           
            </div>
      
  </div>
  <div class="panel" id="two-panel">
 <div class="panel-title"></div>
    
          <div class="row text-left">
          
          <table>
           <th style="width:25%;"></th>
    <th style="width:25%;"></th>
     <th style="width:25%;"></th>
    <th style="width:25%;"></th>
    <tbody>
    <tr>
        
        <td colspan="2"> <br><input id="cc_moderadora"  type="checkbox"  ><span for=""> Se cobra cuota Moderadora.</span></td>
        
        <td colspan="2"> <br>&nbsp;&nbsp;<input id="cc_recuperacion"  type="checkbox"  ><span for="">Se cobra cuota de Recuperación.</span></td>
       
    </tr>
    <tr>
        
        <td colspan="4"> <br><input id="raapf_serv" type="checkbox" ><span for=""> Se Requiere Autorización para la Atención de Pacientes / Facturacion de Servicios.</span></td>
        
    </tr>
    <tr>
        <td colspan="2"> <br><input id="rnv_prep"  type="checkbox"  ><span for=""> Requiere número de Vale(Prepagada).</span></td>
        
        <td colspan="2"> <br><input id="rc_validacion"  type="checkbox" ><span for="">Requiere Codigo de Validación.</span></td>
    </tr>
    
    
    </tbody>
</table>
   
        </div>
  </div>
  <div class="panel" id="three-panel">
      
       
  </div>
   
  </div>
 
</div>
           </td>
 </tr>  
  
  <style>
    
#menu ul li {
    background-color:#2e518b;
}

#menu ul {
  list-style:none;
  margin:0;
  padding:0;
}

#menu ul a {
  display:block;
  color:#fff;
  text-decoration:none;
  font-weight:400;
  font-size:15px;
  padding:10px;
  font-family:"HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform:uppercase;
  letter-spacing:1px;
}

#menu ul li {
  position:relative;
  float:left;
  margin:0;
  padding:0;
}

#menu ul li:hover {
  background:#5b78a7;
}

#menu ul ul {
  display:none;
  position:absolute;
  top:100%;
  left:0;
  padding:0;
}

#menu ul ul li {
  float:none;
  width:150px
}

#menu ul ul a {
  line-height:120%;
  padding:10px 15px;
}

#menu ul li:hover > ul {
  display:block;
}
    
    
    @import url('https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap');
body{
  background:#444444;
  font-family: 'Arimo', sans-serif;
}
h2{
  color:#000;
  text-align:center;
  font-size:2em;
}
.warpper{
  display:flex;
  flex-direction: column;
  align-items: center;
}
.tab{
  cursor: pointer;
  padding:10px 20px;
  margin:0px 2px;
  background:#907DA9;
  display:inline-block;
  color:#fff;
  border-radius:3px 3px 0px 0px;
  box-shadow: 0 0.5rem 0.8rem #00000080;
}
.panels{
  background:#fffffff6;
  box-shadow: 0 2rem 2rem #00000080;
  min-height:200px;
  width:100%;
  max-width:500px;
  border-radius:3px;
  overflow:hidden;
  padding:20px;  
}
.panel{
  display:none;
  animation: fadein .8s;
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
.panel-title{
  font-size:1.5em;
  font-weight:bold
}
.radio{
  display:none;
}
#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel{
  display:block
}
#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab{
  background:#fffffff6;
  color:#666;
  border-top: 3px solid #666;
}</style>   
  
  
</table>
      
   
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="guardarCambios" onclick="guardarCambios();" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

                        
<script src="numeral.min.js"></script>            

   <script>
       
       
       
       
       
      function validaVacio(valor) {
        valor = valor.replace("&nbsp;", "");
        valor = valor == undefined ? "" : valor;
        if (!valor || 0 === valor.trim().length) {
            return true;
            }
        else {
            return false;
            }
        }
       
//const inHandlerVlc = function(e) {
        $('#valorcontrato').change(function(){
             var number = document.getElementById('valorcontrato').value;
var myNumeral = numeral (number);
var currencyString = myNumeral.format("$0,0.00");
console.log(currencyString);
          

     document.getElementById('valorcontrato').value=currencyString; 
            //console.log(numeroForm);
      
  });
//valorcontrato.addEventListener('input', inHandlerVlc);
//valorcontrato.addEventListener('propertychange', inHandlerVlc); 
    
       
       function guardarCambios(){
           var a=true;
           var b=true;
           var c=true;
           
if($('#ct_materiales').prop('checked')){
                   if(validaVacio($('#porcentajectma').val())){
                       a=false;
                   }
                  }
if($('#ct_procedimientos').prop('checked')){
                   if(validaVacio($('#porcentajectp').val())){
                       b=false;
                   }
                  }
if($('#ct_medicamentos').prop('checked')){
                   if(validaVacio($('#porcentajectm').val())){
                       c=false;
                   }
                  }
           
          

           
        if ( validaVacio($('#codigocontrato').val()) || validaVacio($('#entidad').val()) || validaVacio($('#valorcontrato').val()) || validaVacio($('#in_ciudad').val()) || validaVacio($('#fechainicio').val()) || validaVacio($('#fechafin').val())|| validaVacio($('#objeto').val())|| validaVacio($('#coberturas').val())|| validaVacio($('#regimen').val())|| validaVacio($('#alcancecontrato').val())|| validaVacio($('#nivel').val())|| validaVacio($('#tipocontrato').val())|| validaVacio($('#modalidad').val())|| validaVacio($('#tarifacup').val())|| validaVacio($('#porcentajecup').val())|| validaVacio($('#tarifacum').val())|| validaVacio($('#porcentajecum').val())||!a||!b||!c) { 
            alert("Los campos no pueden quedar vacios");
        datoSave="codigocontrato="+$('#codigocontrato').val()+"&entidad="+$('#entidad').val().trim()+"&valorcontrato="+$('#valorcontrato').val()+"&in_ciudad="+$('#in_ciudad').val()+"&fechainicio="+$('#fechainicio').val()+"&fechafin="+ $('#fechafin').val()+"&objeto="+$('#objeto').val()+"&coberturas="+$('#coberturas').val()+"&regimen="+$('#regimen').val()+"&alcancecontrato="+$('#alcancecontrato').val()+"&nivel="+$('#nivel').val()+"&tipocontrato="+$('#tipocontrato').val()+"&modalidad="+$('#modalidad').val()+"&tarifacup="+$("#tarifacup").val()+"&porcentajecup="+$('#porcentajecup').val()+"&tarifacum="+$('#tarifacum').val()+"&porcentajecum="+$('#porcentajecum').val()+"&porcentajectp="+$('#porcentajectp').val()+"&ct_procedimientos="+$('#ct_procedimientos').prop('checked')+"&porcentajectm="+$('#porcentajectm').val()+"&porcentajectma="+$('#porcentajectma').val()+"&ct_medicamentos="+$('#ct_medicamentos').prop('checked')+"&ct_materiales="+$('#ct_materiales').prop('checked')+"&cs_ambulatiorio_hospitalizacion="+$('#cs_ambulatiorio_hospitalizacion').prop('checked')+"&pm_copago="+$('#pm_copago').prop('checked')+"&cc_moderadora="+$('#cc_moderadora').prop('checked')+"&cc_recuperacion="+$('#cc_recuperacion').prop('checked')+"&raapf_serv="+$('#raapf_serv').prop('checked')+"&rnv_prep="+$('#rnv_prep').prop('checked')+"&rc_validacion="+$('#rc_validacion').prop('checked');
            
            console.log(validaVacio($('#codigocontrato').val())+" "+validaVacio($('#entidad').val())+" "+!a+" "+!b+" "+!c);
            
            return false;
        }else{     
           
           var datoSave="codigocontrato="+$('#codigocontrato').val()+"&entidad="+$('#entidad').val().trim()+"&valorcontrato="+$('#valorcontrato').val()+"&in_ciudad="+$('#in_ciudad').val()+"&fechainicio="+$('#fechainicio').val()+"&fechafin="+ $('#fechafin').val()+"&objeto="+$('#objeto').val()+"&coberturas="+$('#coberturas').val()+"&regimen="+$('#regimen').val()+"&alcancecontrato="+$('#alcancecontrato').val()+"&nivel="+$('#nivel').val()+"&tipocontrato="+$('#tipocontrato').val()+"&modalidad="+$('#modalidad').val()+"&tarifacup="+$("#tarifacup").val()+"&porcentajecup="+$('#porcentajecup').val()+"&tarifacum="+$('#tarifacum').val()+"&porcentajecum="+$('#porcentajecum').val()+"&porcentajectp="+$('#porcentajectp').val()+"&ct_procedimientos="+$('#ct_procedimientos').prop('checked')+"&porcentajectm="+$('#porcentajectm').val()+"&porcentajectma="+$('#porcentajectma').val()+"&ct_medicamentos="+$('#ct_medicamentos').prop('checked')+"&ct_materiales="+$('#ct_materiales').prop('checked')+"&cs_ambulatiorio_hospitalizacion="+$('#cs_ambulatiorio_hospitalizacion').prop('checked')+"&pm_copago="+$('#pm_copago').prop('checked')+"&cc_moderadora="+$('#cc_moderadora').prop('checked')+"&cc_recuperacion="+$('#cc_recuperacion').prop('checked')+"&raapf_serv="+$('#raapf_serv').prop('checked')+"&rnv_prep="+$('#rnv_prep').prop('checked')+"&rc_validacion="+$('#rc_validacion').prop('checked');
           
            
              $.ajax({
                        type: "POST",
                        url: "queryContratos.php?"+datoSave,
                        data: "",
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                            // list_orden.innerHTML = respuesta;
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
        
        }
                     
           console.log(datoSave);
       }
       
       
        const codigocontrato = document.getElementById('codigocontrato');
        const list_codigo = document.getElementById('list_codigo');
        const entidad = document.getElementById('entidad');
        const list_entidad = document.getElementById('list_entidad');
        const phpCodigo = document.getElementById('phpCodigo');
        const list_orden = document.getElementById('list_orden');
        const cuentaorden = document.getElementById('cuentaorden');
       const list_ciudad = document.getElementById('list_ciudad');
        const in_ciudad = document.getElementById('in_ciudad');
        
           const inHandlerCiudad = function(e) {
            var sresult;
              descripcion = e.target.value;
              var dataString = 'in_ciudad='+descripcion;
               console.log("yesss");
              $.ajax({
                        type: "POST",
                        url: "getMunicipios.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_ciudad.innerHTML = respuesta;
                        }
                    });
                 }
           
           
           in_ciudad.addEventListener('input', inHandlerCiudad);
            in_ciudad.addEventListener('propertychange', inHandlerCiudad); 
        
       
       $('#in_ciudad').change(function(){
             var value = $('#in_ciudad').val();
           var codigoSplit=value.split(" ");
           var codigoS= codigoSplit[0];//1
            $('#in_ciudad').val(codigoS);
             
        });
       
       
     
        
        
         const inHandlerEntidad = function(e) {
              descripcion = e.target.value;
              var dataCXC= 'codigo='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "getEntidad.php",
                        data: dataCXC,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_entidad.innerHTML = respuesta;
                        }
                    });
                 
         }
         $('#entidad').change(function(){
             var value = $('#entidad').val();
           var codigoSplit=value.split(" ");
           var codigoS= codigoSplit[0];//1
            $('#entidad').val(codigoS);
            
        });
        
        $('#codigocontrato').change(function(){
             var value = $('#codigocontrato').val();
           var codigoSplit=value.split(" ");
           var  codigoS= codigoSplit[0];//1
            $('#codigocontrato').val(codigoS);
           
            
            mostrarDatos(codigoS);
           
        });
       
       function mostrarDatos(codigoS){
            var datacod = 'codigo='+codigoS;
              $.ajax({
                        type: "POST",
                        url: "getContratoAll.php",
                        data: datacod,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log("All "+respuesta.trim());
                          
                            if(respuesta.trim()!==""){
                                list_codigo.innerHTML = respuesta;
                            var dataAll=respuesta.split("#&$");
                            var codigoX= dataAll[0];//1
                            var entidad=  dataAll[1].trim();
                            var ciudad=  dataAll[2];
                            var fechainicio=  dataAll[3].trim();
                            var fechafin=  dataAll[4];
                            var valorcontrato=  dataAll[5];
                            var objeto=  dataAll[6].trim();
                            var regimen=  dataAll[7];
                            var alcance=  dataAll[8].trim();
                            var cobertura=  dataAll[9];
                            var nivel=  dataAll[10];
                            var tipocontrato=  dataAll[11];
                            var modalidad=  dataAll[12];
                            var tarifacup=  dataAll[13];
                            var porcentajecup=  dataAll[14];
                            var tarifacum=  dataAll[15];
                            var porcentajecum=  dataAll[16];
                            var ct_procedimientos=  dataAll[17].trim();
                            var ct_medicamentos=  dataAll[18].trim();
                            var ct_materiales=  dataAll[19].trim();
                            var csamyh=  dataAll[20].trim();
                            var porcentajectp=  dataAll[21];
                            var porcentajectm=  dataAll[22];
                            var porcentajectma=  dataAll[23];
                            var pm_copago=  dataAll[24].trim();
                            var cc_moderadora=  dataAll[25].trim();
                            var cc_recuperacion=  dataAll[26].trim();
                            var raapf_serv=  dataAll[27].trim();
                            var rnv_prep=  dataAll[28].trim();
                            var rc_validacion=  dataAll[29].trim();
                           
                            $('#codigocontrato').val(codigoX);
                            $('#in_ciudad').val(ciudad);
                            $('#entidad').val(entidad);
                            $('#fechainicio').val(fechainicio);
                            $('#fechafin').val(fechafin);
                            $('#fechafin').val(fechafin);
                            $('#valorcontrato').val(valorcontrato);
                            $('#objeto').val(objeto);
                           $('#regimen').val(regimen);
                            $('#alcancecontrato').val(alcance);
                            $('#coberturas').val(cobertura);
                            $('#nivel').val(nivel);
                            $('#tipocontrato').val(tipocontrato);
                            $('#modalidad').val(modalidad);
                            $('#tarifacup').val(tarifacup);
                            $('#porcentajecup').val(porcentajecup);
                            $('#tarifacum').val(tarifacum);
                            $('#porcentajecum').val(porcentajecum);
                            $('#ct_procedimientos').val(ct_procedimientos);
                            $('#ct_medicamentos').val(ct_medicamentos);
                            $('#ct_materiales').val(ct_materiales);
                            $('#cs_ambulatiorio_hospitalizacion').val(csamyh);
                            $('#porcentajectp').val(porcentajectp);
                            $('#porcentajectm').val(porcentajectm);
                            $('#porcentajectma').val(porcentajectma);
                            //$('#pm_copago').val(pm_copago);
                            //$('#cc_moderadora').val(cc_moderadora);
                            //$('#cc_recuperacion').val(cc_recuperacion);
                            //$('#raapf_serv').val(raapf_serv);
                            //$('#requiere_aut').val(requiere_aut);
                            //$('#rnv_prep').val(rnv_prep);
                            //$('#rc_validacion').val(rc_validacion);
                            
                                var rcmp = document.getElementById("#ct_procedimientos");
                            if(convertString(ct_procedimientos))
                               {
                                  $("#ct_procedimientos").prop("checked", true);
                                    $("#porcentajectp").prop('disabled', false);  
                               }
                                else
                               {
                                  $("#ct_procedimientos").prop("checked", false);
                                   $("#porcentajectp").prop('disabled', true); 
                               }
                                
                                var rcmp = document.getElementById("#ct_medicamentos");
                            if(convertString(ct_medicamentos))
                               {
                                  $("#ct_medicamentos").prop("checked", true);
                                    $("#porcentajectm").prop('disabled', false); 
                               }
                                else
                               {
                                  $("#ct_medicamentos").prop("checked", false);
                                   $("#porcentajectm").prop('disabled', true)
                               }
                            
                            var rrch = document.getElementById("#ct_materiales");
                            if(convertString(ct_materiales))
                               {
                                  $("#ct_materiales").prop("checked", true);
                                    $("#porcentajectma").prop('disabled', false); 
                               }
                                else
                               {
                                 $("#ct_materiales").prop("checked", false);
                                    $("#porcentajectma").prop('disabled', true); 
                               }
                                
                            var rrch = document.getElementById("#pm_copago");
                            if(convertString(pm_copago))
                               {
                                  $("#pm_copago").prop("checked", true); 
                               }
                                else
                               {
                                 $("#pm_copago").prop("checked", false);
                               }   
                                
                               var rrch = document.getElementById("#cc_moderadora");
                            if(convertString(cc_moderadora))
                               {
                                  $("#cc_moderadora").prop("checked", true); 
                               }
                                else
                               {
                                 $("#cc_moderadora").prop("checked", false);
                               }   
                                
                             var rrch = document.getElementById("#cc_recuperacion");
                            if(convertString(cc_recuperacion))
                               {
                                  $("#cc_recuperacion").prop("checked", true); 
                               }
                                else
                               {
                                 $("#cc_recuperacion").prop("checked", false);
                               }    
                                
                                var rrch = document.getElementById("#raapf_serv");
                            if(convertString(raapf_serv))
                               {
                                  $("#raapf_serv").prop("checked", true); 
                               }
                                else
                               {
                                 $("#raapf_serv").prop("checked", false);
                               }   
                         
                                
                                var rrch = document.getElementById("#rnv_prep");
                            if(convertString(rnv_prep))
                               {
                                  $("#rnv_prep").prop("checked", true); 
                               }
                                else
                               {
                                 $("#rnv_prep").prop("checked", false);
                               }
                                
                                var rrch = document.getElementById("#rc_validacion");
                            if(convertString(rc_validacion))
                               {
                                  $("#rc_validacion").prop("checked", true); 
                               }
                                else
                               {
                                 $("#rc_validacion").prop("checked", false);
                               }
                           
                                console.log("tipoU "+$('#tipoU').val());
                            if($('#tipoU').val().trim()!="administrador"){     
                           console.log("tipoU "+$('#tipoU').val());
                            $('#in_ciudad').prop("readonly", true);
                            $('#entidad').prop("readonly", true);
                            $('#fechainicio').prop("readonly", true);
                            $('#fechafin').prop("readonly", true);
                            $('#fechafin').prop("readonly", true);;
                            $('#valorcontrato').prop("readonly", true);
                            $('#objeto').attr("disabled", true) ;
                           $('#regimen').attr("disabled", true) ;
                            $('#alcancecontrato').attr("disabled", true) ;
                            $('#coberturas').attr("disabled", true) ;
                            $('#nivel').attr("disabled", true) ;
                            $('#tipocontrato').attr("disabled", true) ;
                            $('#modalidad').attr("disabled", true) ;
                            $('#tarifacup').attr("disabled", true) ;
                            $('#porcentajecup').prop("readonly", true);
                            $('#tarifacum').attr("disabled", true) ;
                            $('#porcentajecum').prop("readonly", true);
                            $('#ct_procedimientos').prop("readonly", true);
                            $('#ct_medicamentos').prop("readonly", true);
                            $('#ct_materiales').prop("readonly", true);
                            $('#cs_ambulatiorio_hospitalizacion').prop("readonly", true);
                            $('#porcentajectp').prop("readonly", true);
                            $('#porcentajectm').prop("readonly", true);
                            $('#porcentajectma').prop("readonly", true);
                       document.getElementById("ct_procedimientos").disabled = true;
                       document.getElementById("ct_medicamentos").disabled = true;
                       document.getElementById("ct_materiales").disabled = true;
                       document.getElementById("cs_ambulatiorio_hospitalizacion").disabled = true;
                       document.getElementById("pm_copago").disabled = true;
                       document.getElementById("cc_moderadora").disabled = true;
                       document.getElementById("cc_recuperacion").disabled = true;
                       document.getElementById("raapf_serv").disabled = true;
                       document.getElementById("rnv_prep").disabled = true;
                       document.getElementById("rc_validacion").disabled = true;
                                
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
                                }else{ alertify.alert("Se Guardara Como un Nuevo Seguro."+codigoS);
                                    $('#in_ciudad').prop("readonly", false);
                            $('#entidad').prop("readonly", false);
                            $('#fechainicio').prop("readonly", false);
                            $('#fechafin').prop("readonly", false);
                            $('#fechafin').prop("readonly", false);;
                            $('#valorcontrato').prop("readonly", false);
                            $('#objeto').attr("disabled", false) ;
                           $('#regimen').attr("disabled", false) ;
                            $('#alcancecontrato').attr("disabled", false) ;
                            $('#coberturas').attr("disabled", false) ;
                            $('#nivel').attr("disabled", false) ;
                            $('#tipocontrato').attr("disabled", false) ;
                            $('#modalidad').attr("disabled", false) ;
                            $('#tarifacup').attr("disabled", false) ;
                            $('#porcentajecup').prop("readonly", false);
                            $('#tarifacum').attr("disabled", false) ;
                            $('#porcentajecum').prop("readonly", false);
                            $('#ct_procedimientos').prop("readonly", false);
                            $('#ct_medicamentos').prop("readonly", false);
                            $('#ct_materiales').prop("readonly", false);
                            $('#cs_ambulatiorio_hospitalizacion').prop("readonly", false);
                            $('#porcentajectp').prop("readonly", false);
                            $('#porcentajectm').prop("readonly", false);
                            $('#porcentajectma').prop("readonly", false);
                       document.getElementById("ct_procedimientos").disabled = false;
                       document.getElementById("ct_medicamentos").disabled = false;
                       document.getElementById("ct_materiales").disabled = false;
                       document.getElementById("cs_ambulatiorio_hospitalizacion").disabled = false;
                       document.getElementById("pm_copago").disabled = false;
                       document.getElementById("cc_moderadora").disabled = false;
                       document.getElementById("cc_recuperacion").disabled = false;
                       document.getElementById("raapf_serv").disabled = false;
                       document.getElementById("rnv_prep").disabled = false;
                       document.getElementById("rc_validacion").disabled = false;
                                     
                                     }
                               
                             
                            
                        }
                        }
                        });
       }
                              
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
                        url: "getContrato.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_codigo.innerHTML = respuesta;
                            
                            
                        }
                        });
                    }
            
             codigocontrato.addEventListener('input', inHandlerCodigo);
            codigocontrato.addEventListener('propertychange', inHandlerCodigo); 
                 
            
           
       
              
            
       
            entidad.addEventListener('input', inHandlerEntidad);
            entidad.addEventListener('propertychange', inHandlerEntidad);  
            cuentascxc.addEventListener('input', inHandlerCXC);
            cuentascxc.addEventListener('propertychange', inHandlerCXC); 
            cuentaorden.addEventListener('input', inHandlerOrden);
            cuentaorden.addEventListener('propertychange', inHandlerOrden); 
            
          </script>
 <!--end of modal-->
              


                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                     <th>#</th>
                        <th >Código</th>
                        <th>Entidad</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th class="btn-print">Editar </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
      $query=mysqli_query($con,"select * from contratos where 1 ")or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){      
        
 
    $i++;
        
       
?>
                     
                      
 <tr>

<td ><?php echo $i;?></td>
<td><?php echo $row['codigo'];?></td>
<td><?php echo $row['entidad'];?></td>
<td><?php echo $row['fechainicio'];?></td>
<td><?php echo $row['fechafin'];?></td>  
                                  

<td>
  
<a class="myButtonx" data-toggle="modal" data-target="#myModal"  onclick="mostrarDatosSel(<?php echo "'".$row['codigo']."'"; ?>);"  role="button"><i class='bx bx-edit-alt'></i></a>
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
            
   function mostrarDatosSel(dato){
        mostrarDatos(dato);
       console.log(dato);
    }        
            
            
            
        $(document).ready( function() {
             $("#porcentajectma").prop('disabled', true); 
             $("#porcentajectp").prop('disabled', true); 
             $("#porcentajectm").prop('disabled', true); 
            
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
