
<?php include '../layout/header.php';

 header('Content-Type: text/html; charset=UTF-8'); 
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/paciente.css" type="text/css">
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

span{
  color: black;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">


                  <div class="box-header">
                  <h3 class="htitle">Registro de Ingreso</h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>
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
  <div class="modal-dialog " role="document"  style="width:750px">
    <div class="modal-content" >
    <div class="modal-header">
        
        <label class="modal-title" id="myModalLabel">Editar Ingreso</label>
      </div>
      <div class="modal-body ">
      
        <input type="hidden" class="form-control" id="tipo" name="tipo" value="paciente" required>

    <table>
      <tr>
          <th style="width:15%;"></th>
          <th style="width:30%;"></th>
          <th style="width:16%;"></th>
          <th style="width:80%;"></th>
      </tr>
      <tr>
        <td colspan="4"><div id="datos_paciente1"></div> </td> 
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
        <td><br><label for="" style="margin-left: 23px;" >Código:</label></td>
        <td colspan="2"><br>
        
        <?php  if($selected==1){
                
                $query = mysqli_query( $con, " SELECT MAX(id_cita) AS id_cita, id_paciente, horario FROM cita WHERE `id_paciente`='".$cid."' AND estado_cita='reservado';" )or die( mysqli_error() );
                $row2 = mysqli_fetch_assoc($query);
                    
                echo " <input readonly id='in_codcita' class='form-control'></input>";}else{
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
      
        <td><br><label for="" class="labelForms">&nbsp;Tipo Ingreso:</label></td>
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
        <td > <br>
           <?php ini_set('date.timezone','America/Bogota'); ?>
            <input id="fechaingreso" type="date" value="<?php  echo date("Y-m-d");     ?>" />
        </td> 
        <td > <br><input id="horaingreso" type="time" value="<?php  echo date("H:i:s");     ?>" /></td>                                  
        </tr>
        
        <tr>
        <td><br><label for="" >&nbsp;Dierección:</label></td>
        <td ><br>
          <input type="text" class="form-control" id="direccion" name="tipo" value="" required>
        </td>  
        
        <td><br><label for=""  class="labelForms">&nbsp;Teléfono:</label></td>
        <td ><br>
          <input type="tel" class="form-control" id="telefono" name="tipo" value="" required>
        </td>   
        </tr>
         <tr>
        <td><br><label for="" >&nbsp;Tipo Atención:</label></td>
        <td ><br>
         <select id="tipo_atencion" name="tipo_atencion" class="form-control">
            <option value="1">Sin Contrato</option>   
            <option value="2">Con Contrato</option>  
            <option value="2">Particular</option>  
         </select>
        </td>  
        

        <td><br><label for=""  class="labelForms">&nbsp;Aseguradora:</label></td>
        <td ><br>
        <input autocomplete="off" list="list_codigo" id="codigoaseg" type="text" class="form-control">
                    <datalist id="list_codigo" >
                
                    </datalist>
        </td> 
        </tr>
        <tr>
        
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
         
       <td ><br><label for=""  class="labelForms">&nbsp;Programa:</label></td>
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
     <br>
     <br>
<div class="warpper">
    <input class="radio" id="one" name="group" type="radio" onclick="procedimiento()" checked/>
  <input class="radio" id="two" name="group" type="radio" onclick="medicamento()"/>
  <input class="radio" id="three" name="group" type="radio">
  <div class="tabs">
  <label class="tab" id="one-tab" for="one">Procedimientos</label>
  <label class="tab" id="two-tab" for="two">Medicamentos</label>
  <!-- <label class="tab" id="three-tab" for="three"></label>-->
    </div>
  <div class="panels panelAgregar">
  <div class="panel" id="one-panel">
    <div class="panel-title">Cargar Procedimiento</div>
    
          <div class="row text-left">
          
              <div class='col-lg-6 col-sm-6 form-group' > 
               <label>Indicio de Proceder </label>
                <input list="list_cups" id="input_cups" value="" class="form-control" autocomplete='off'>
                    <datalist id="list_cups" >
                    </datalist>
              </div>
                <div class='col-lg-6 col-sm-6 form-group' >
               <label>Unidades </label> 
                <input required class="form-control" list="unidadesCups" type="number" min="1" max="100" id="unidadesCups" value="1" class="form-control" autocomplete='off'>
              </div>
                <div class='col-lg-12 col-sm-12 form-group' > 
               <label size="30" type="text" id="nombre_procedimiento" name="nombre_procedimiento" readonly> </label>
              </div>
            </div>
      
  </div>
  <div class="panel" id="two-panel">
 <div class="panel-title">Cargar Medicamentos</div>
    
          <div class="row text-left">
         
              <div class='col-lg-3 col-sm-3 form-group' > 
               <label>Medicamento  </label>
                <input required list="list_medic" id="input_medic" value="" class="form-control" autocomplete='off'>
                    <datalist id="list_medic" >
                    </datalist>
              
              </div>

              <div class='col-lg-2 col-sm-2 form-group' >
               <label>Unidades </label> 
                <input required class="form-control" list="unidades" type="number" min="1" max="100" id="unidades" value="1" class="form-control" autocomplete='off'>
              </div>
              
              <div class='col-lg-4 col-sm-4 form-group' >
                <label>Posologia </label> 
                <input required class="form-control" list="posologia" type="text" id="posologia" value="" placeholder="Describa la medicacion" class="form-control" >
              </div>
              
              <div class='col-lg-8 col-sm-8 form-group' > 
                <label size="30" type="text" id="nombre_medicamento" name="nombre_medicamento" readonly> </label>
              </div>
              <div class='col-lg-4 col-sm-4 form-group' > 
               <label size="30" type="text" id="nombre_via_adm" name="nombre_via_adm" readonly> </label>
              </div>
              
   
        </div>
  </div>
  <div class="panel" id="three-panel">
      
       
  </div>
   <div class=" text-right">
  <button type="button"  class="btn  myButton2 " onclick="agregarPM()"><i class='bx bx-book-add'></i></button>
  </div>
  </div>
 
</div>
     <br>
       <br> 
  <div class="tablax" id="tablax" name="tablax">
  
  </div> 
  <div class="tablax2" id="tablax2" name="tablax2">
     
  </div> 

      
  <div class="tablax" id="tablax" name="tablax">
  
  </div> 
  <div class="tablax2" id="tablax2" name="tablax2">
     
  </div> 
          
      <div class="modal-footer">
      <button type="button" id="guardarCambios"  class="btn btn-plantilla">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>
    </div>
  </div>
</div>  
</div> 

<script> 
  var head2="<div class='datagrid'>"+
          "<table border='2px'> "+
          "<thead><tr><th>Codigo</th><th>Procedimiento </th><th>Unidad</th><th>Accion</th></tr></thead>"+
          "<tbody>";
var foot2="</tbody>"+
        "</table>"+
        "</div>";
var formula="";
var codigocie;

const input_cups = document.getElementById('input_cups');
const list_cups = document.getElementById('list_cups');
const tablax2 = document.getElementById('tablax2');    
$('#input_cups').change(function(){
    var value = $('#input_cups').val();
   var dato= document.getElementById("input_cups").value;
// alert(dato);
   var datoSplit= dato.split(" ");
   var cup=datoSplit[0]+"";
   dato= dato.replace(cup, '')
    datoCupGlobal=dato;
    cupGlobal=cup;
    $('#input_cups').val(cup);
    document.querySelector('#nombre_procedimiento').innerText = dato;
//document.getElementById("nombre_procedimiento").value=dato;
    });
    
    
function eventoCups(comando,datoc){
         console.log("comando="+comando+datoc);
        $.ajax({
            type: "POST",
            url: "ztempPP.php",
            data: "comando="+comando+datoc,
            success: function(respuesta) {
                      if(respuesta.trim()=='existe'){
                          alertify.error("Algo no esta bien :(");
                             }else{
                              crearTablaCups(respuesta);
                             } 
               
           
               console.log(respuesta);
                
            }
        });
}    
    
    
        var filasG=[];
    function crearTablaCups(respuesta){
        bufferGlobal="";
       var indexControl=respuesta.split("??_$");
            var filasSplit= indexControl[0].split("#_#");
                filasG=filasSplit;
                                  for(var i=0;i<filasSplit.length;i++){
                                   var colSplit=filasSplit[i].split("#$");
                                bufferGlobal=bufferGlobal+ "<tr>"+
                                              "<td> "+colSplit[0]+"</td>"+
                                              "<td> "+colSplit[1]+"</td>"+
                                              "<td> "+colSplit[2]+"</td>"+
                                              "<td><button class='btn btn-primary btn-print myButton3'  onClick=\"eliminarFilaCups(\'"+colSplit[0].trim()+"\')\"><i class='glyphicon glyphicon-remove' ></i></button> </td>"+
                                          "</tr>" ;
                                  }
           // alert(indexControl[1]);
        if(indexControl[1]!=0){
            tablax2.innerHTML = head2+bufferGlobal+foot2;
        }else{
             tablax2.innerHTML = "";
        }                           
    }
    
    function eliminarFilaCups(fila){

      $.ajax({
            type: "POST",
            url: "ztempPP.php",
            data: "comando=eliminar&cups="+fila,
            success: function(respuesta) {
              if(respuesta.trim()!="existe"){
                  crearTablaCups(respuesta);
              }  else{
                 alertify.error("No se pudo Borrar.");
              }
            }
      });
}
    
function limpiarTCups() {
    
   $.ajax({
            type: "POST",
            url: "ztempPP.php",
            data: "comando=limpiar",
            success: function(respuesta) {
              if(respuesta.trim()!="existe"){
                  crearTablaCups(respuesta);
              }  else{
                 alertify.error("No se pudo Borrar.");
              }
            }
      });
} 
    
const inHandlerCups = function(e) {
var sresult;
  descripcion = e.target.value;
  var dataString = 'cups='+descripcion;
  $.ajax({
            type: "POST",
            url: "getCUPS.php",
            data: dataString,
            success: function(respuesta) {
                 //$('.result').html(res);
            
                 list_cups.innerHTML = respuesta;
            }
        });
}
input_cups.addEventListener('input', inHandlerCups);
input_cups.addEventListener('propertychange', inHandlerCups); 

    
    </script>           
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
  background:#002142;
  display:inline-block;
  color:#fff;
  border-radius:3px 3px 0px 0px;
  box-shadow: 0 0.5rem 0.8rem #00000080;
}
.panels{
  background:#fffffff6;
  border-bottom: 1px solid #002142;
  border-left: 1px solid #002142;
  border-right: 1px solid #002142;
  border-top: 0;
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
  color:#002142;
  border-top: 3px solid #002142;
}</style>          

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
<script>   
//MEDICAMENTOS   
var MedProc=0;
var atcGlobal;
var datoGlobal;
var expedienteCGlobal;
var consecutivoCGlobal;
var productoGlobal;
var principioAGlobal;
var unidadGlobal;
var cupGlobal;
var datoCupGlobal;
var posologiaGlobal;
var formaFGlobal;
var vAdminGlobal;
var descATCGlobal;
var bufferGlobal="";
var  contAdd=0;
var arrayData=[];
var head="<div class='datagrid'>"+
          "<table border='2px'> "+
          "<thead><tr><th>Codigo</th><th>Medicamento</th><th  style='width:10%'>V/Adm</th><th style='width:10%'>U</th><th>Posologia</th><th style='width:10%'>Accion</th></tr></thead>"+
          "<tbody>";
var foot="</tbody>"+
        "</table>"+
        "</div>";
   
 const tablax = document.getElementById('tablax');       

 function limpiarT() {
    
   $.ajax({
            type: "POST",
            url: "ztempPM.php",
            data: "comando=limpiar",
            success: function(respuesta) {
              if(respuesta.trim()!="existe"){
                  crearTabla(respuesta);
              }  else{
                 alertify.error("No se pudo Borrar.");
              }
            }
      });
}   
function procedimiento(){
    MedProc=0;
    console.log(MedProc);
} 
function medicamento(){
    MedProc=1;
      console.log(MedProc);
}
      
function agregarPM(){
$formafarmaceutica="";
   if(MedProc==1){
       var globalData="&expedientecum="+expedienteCGlobal+"&principioactivo="+principioAGlobal+"&consecutivocum="+consecutivoCGlobal+"&producto="+productoGlobal+"&unidad="+$('#unidades').val()+"&atc="+atcGlobal+"&descripcionatc="+descATCGlobal+"&viaadministracion="+vAdminGlobal+"&formafarmaceutica="+formaFGlobal+"&posologia="+$('#posologia').val();
       eventoCum("insertar",globalData);
        
        }
    
    //PERTENECE A PROCEDIMIENTOS
    
       if(MedProc==0){
            console.log( cupGlobal+" -- "+datoCupGlobal ) ;
           eventoCups("insertar","&cups="+cupGlobal+"&descripcion="+datoCupGlobal+"&unidad="+$('#unidadesCups').val());
        }
    }

function eventoCum(comando,datoc){
         console.log("comando="+comando+datoc);
        $.ajax({
            type: "POST",
            url: "ztempPM.php",
            data: "comando="+comando+datoc,
            success: function(respuesta) {
                      if(respuesta.trim()=='existe'){
                          alertify.error("Algo no esta bien :(");
                             }else{
                              crearTabla(respuesta);
                             } 
               
           console.log(head+bufferGlobal+foot);
           
                
                
            }
        });
}
        
function eliminarFila(fila){

      $.ajax({
            type: "POST",
            url: "ztempPM.php",
            data: "comando=eliminar&expedientecum="+fila,
            success: function(respuesta) {
              if(respuesta.trim()!="existe"){
                  crearTabla(respuesta);
              }  else{
                 alertify.error("No se pudo Borrar.");
              }
            }
      });
}
    var filasG=[];
    function crearTabla(respuesta){
        bufferGlobal="";
      var  indexControl=respuesta.split("??_$");
            var filasSplit= indexControl[0].split("#_#");
                filasG=filasSplit;
                                  for(var i=0;i<filasSplit.length;i++){
                                   var colSplit=filasSplit[i].split("#$");
                                bufferGlobal=bufferGlobal+ "<tr>"+
                                              "<td> "+colSplit[4]+"</td>"+
                                              "<td> "+colSplit[3]+"</td>"+
                                              "<td> "+colSplit[6]+"</td>"+
                                              "<td> "+colSplit[9]+" U </td>"+
                                              "<td> "+colSplit[8]+" </td>"+
                                              "<td><button class='btn btn-primary btn-print myButton3'  onClick=\"eliminarFila(\'"+colSplit[0].trim()+"\')\"><i class='glyphicon glyphicon-remove' ></i></button> </td>"+
                                          "</tr>" ;
                                  }
           // alert(indexControl[1]);
        if(indexControl[1]!=0){
            tablax.innerHTML = head+bufferGlobal+foot;
        }else{
             tablax.innerHTML = "";
        }                           
    }
    
   
    
const input_medic = document.getElementById('input_medic');
const list_medic = document.getElementById('list_medic');

$('#unidades').change(function(){

     document.querySelector('#nombre_medicamento').innerText = atcGlobal+" -- "+datoGlobal+" -- "+($('#unidades').val())+" U"  ;

});
    
$('#input_medic').change(function(){
   var value = $('#input_medic').val();
   var dato= document.getElementById("input_medic").value;
   var datoSplit= dato.split(" ");
   var cum=datoSplit[0]+"";
   dato= dato.replace(cum, '');
    $('#input_medic').val(cum);
    
   var val=$('#input_medic').val();
   var formula = $('#list_medic').find('option[name="'+val+'"]').data('cum');
    // console.log(formula);   
    var formulaSplit=formula.split("#$");
    var atc= formulaSplit[0];//1
   
     $('#input_medic').val(atc);
    atcGlobal=atc;
    dato=dato;
    vAdminGlobal=formulaSplit[3];//
    datoGlobal=dato;
    formaFGlobal=formulaSplit[4];//2
    expedienteCGlobal=formulaSplit[1];//2
    consecutivoCGlobal=formulaSplit[2];//3
    productoGlobal=formulaSplit[5];
    unidadGlobal=formulaSplit[6];
    principioAGlobal=formulaSplit[8];
    descATCGlobal=formulaSplit[7];
   // posologiaGlobal=formulaSplit[7];
    
    document.querySelector('#nombre_medicamento').innerText = atc[0]+" "+dato ;
    document.querySelector('#nombre_via_adm').innerText=vAdminGlobal;
      
//document.getElementById("nombre_procedimiento").value=dato;
    });
    
const inHandlerCum = function(e) {
var sresult;
  descripcion = e.target.value;
  var dataString = 'cum='+descripcion;
  $.ajax({
            type: "POST",
            url: "getMedic.php",
            data: dataString,
            success: function(respuesta) {
                 //$('.result').html(res);
                    // var T1 = respuesta.match(/\[(.*)\]/).pop();
                
                console.log(respuesta);

                 list_medic.innerHTML = respuesta;
            }
        });
    }

input_medic.addEventListener('input', inHandlerCum);
input_medic.addEventListener('propertychange', inHandlerCum); 
    
    
    function kmpSearch(pattern, text) {
    if (pattern.length == 0)
        return 0;  // Coincidencia inmediata

    // Calcula la tabla más larga de sufijo-prefijo
    var lsp = [0];  // Caso base
    for (var i = 1; i < pattern.length; i++) {
        var j = lsp[i - 1];  // Comienza asumiendo que estamos extendiendo el LSP previo
        while (j > 0 && pattern.charAt(i) != pattern.charAt(j))
            j = lsp[j - 1];
        if (pattern.charAt(i) == pattern.charAt(j))
            j++;
        lsp.push(j);
    }

    // camina a través de la cadena de texto
    var j = 0;  // Número de caracteres combinados en el patrón
    for (var i = 0; i < text.length; i++) {
        while (j > 0 && text.charAt(i) != pattern.charAt(j))
            j = lsp[j - 1];  // Retrocede en el patrón
        if (text.charAt(i) == pattern.charAt(j)) {
            j++;  // Siguiente char emparejado, incrementa la posición
            if (j == pattern.length)
                return i - (j - 1);
        }
    }
    return -1;  // No encontrado
}
</script>                
      






      
 <!--end of modal-->

                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class="encabezado">

                      <th>#</th>
                        <th style="width:7%;">Cita</th>
                        <th>Medico</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th style="width:6%;">Estado</th>
                        <th class="btn-print" style="width:23%;"> Accion </th>
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
                      <tr  style="background: white;">

<td ><?php echo $i;?></td>
<td><?php echo $row3['id_cita'];?></td>
<td><?php echo $rowM['nombre'].'  '.$rowM['apellido'];?></td>
<td><?php echo $row3['fecha'];?></td>
<td><?php echo $rowH['nombre_horario'];?></td>
    
    <td><?php echo $row3['estado_cita'];?></td>                                      

                          <td>
                                <?php
                      ?>
                      <a class="btn btn-plantilla" onclick="registrarIngreso(<?php echo "'".$row3['id_cita']."'";?>);" role="button" ><i class='glyphicon glyphicon-pencil'></i></a>
                    <?php
                    if ($tipo!="recepcionista" ) {
                    ?>
                    <a class="btn btn-ver" href="<?php  echo "historial_paciente.php?cid=$cid";?>"  role="button"><i class='bx bx-history' ></i></a>
                    <?php
                    }
                        ?>
  <a class="btn btn-cama" href="<?php  echo "pago_paciente.php?cid=$cid";?>"  role="button"><i class='bx bx-money' ></i></a>

  <a class="btn btn-delete"  href="<?php  echo "eliminar_paciente.php?cid=$cid";?>" onClick="return confirm('¿Está seguro de que quieres eliminar usuario??');"><i class="glyphicon glyphicon-trash" ></i></a>
    

            <?php
            //          }
                      ?>

            </td>
                      </tr>
<?php }?>
                    </tbody>

                  </table>
            </div>
            </div><!-- /.col -->


          </div><!-- /.row -->

                </div><!-- /.box-body -->

            </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include '../layout/footer.php';?>

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
                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>
    
    

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
