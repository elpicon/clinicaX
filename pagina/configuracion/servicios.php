
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
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   <link href="../layout/build/css/custom.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/alertify.css">
	<link rel="stylesheet" type="text/css" href="css/themes/default.css">

	<script src="jquery-3.2.1.min.js"></script>
	<script src="js/alertify.js"></script>
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
               
                   
<div class="box-body">
    
    <br>
    <br>
    <br>
    
    
    
    
    
    <div class="col-sm">
      <a  class="btn btn-primary btn-print " aria-hidden="true" href=""  data-toggle="modal" data-target="#modal1" role="button"><img src=""></img>SERVICIOS HABILITADOS</a>
    </div>
  
       
    </br>
   <div  style="width:100%" class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HABILITA Y DESHABILITA SERVICIOS PARA TODOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
            <label>Grupo Servicio : </label>
                <select id="grupo_serv" class="form-control">
                    <option value="">Seleccionar</option> 
                  <option value="1">INTERNACION</option> 
                  <option value="2">QUIRURGICOS</option> 
                  <option value="3">CONSULTA EXTERNA</option> 
                 <!-- <option value="4"></option> -->
                  <option value="5">URGENCIAS</option> 
                  <option value="6">TRANSPORTE ASISTENCIAL</option> 
                  <option value="7">APOYO DIAGNOSTICO Y TERAPEUTICO</option> 
                  <option value="8">OTROS SERVICIOS</option> 
                  <option value="9">P&P</option> 
                  <option value="10">PROCESOS</option> 
                  <option value="11">ATENCION INMEDIATA</option> 
                </select>
        </div> 
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
            <br> <br>
            <label>Servicio : </label>
                
                  <div class="form-check " id="res">
                  </div>
    
      </div>
          
        
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="guardarchk" class="btn btn-primary" >Guardar Cambios</button>
      </div>
    </div>
  </div>
</div> 



   <div class="col-sm">
      <a  class="btn btn-info btn-print " aria-hidden="true" href=""  data-toggle="modal" data-target="#modal2" role="button">Asignacion Servicios Medicos</a>
    </div>




  <div  style="width:100%" class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HABILITA Y DESHABILITA SERVICIOS PARA TODOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
           <label > Asignar servicios A Profesionales</label>
         </div>
            
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
           <input list='listamedico' id='in_medico' autocomplete='off' value='' placeholder='Medico' class='form-control' aria-describedby='inputGroupPrepend' >
                <datalist id='listamedico' disable >
                </datalist>
           </div>
           
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
              <label for="" id="lbl_medico"></label>
           </div>
          </div>   
          <div class="row">     
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
            <label>Grupo Servicio : </label>
                <select id="grupo_servMedico" class="form-control">
                    <option value="">Seleccionar</option> 
                  <option value="1">INTERNACION</option> 
                  <option value="2">QUIRURGICOS</option> 
                  <option value="3">CONSULTA EXTERNA</option> 
                 <!-- <option value="4"></option> -->
                  <option value="5">URGENCIAS</option> 
                  <option value="6">TRANSPORTE ASISTENCIAL</option> 
                  <option value="7">APOYO DIAGNOSTICO Y TERAPEUTICO</option> 
                  <option value="8">OTROS SERVICIOS</option> 
                  <option value="9">P&P</option> 
                  <option value="10">PROCESOS</option> 
                  <option value="11">ATENCION INMEDIATA</option> 
                </select>
        </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
         </div>
          
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
           <br>
            <label>Servicio : </label>
                  <div class="form-check " id="resMedico">
                  </div>
    
      </div>
         
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group">
          
          </div>
          
          </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="guardaCHKMedico" onclick="guardaCHKMedico();" class="btn btn-primary" >Guardar Cambios</button>
      </div>
    </div>
  </div>
</div> 


 </div>   
  </div> 
   
  <script>
var idmedico;
var codigoM;
 var listSI2=[];     
      function guardaCHKMedico(){
           var bufferSI2="";
                              
          var x=0;
                                $.each($("input[name='chequeoSM']:checked"), function(){
                                     listSI2[x]=$(this).val();
                                    bufferSI2=bufferSI2+","+listSI2[x];
                                     x++;
                                      
                                });
          
                            if(bufferSI2.charAt(0)==','){
                                bufferSI2= bufferSI2.slice(1); 
                              }
                            console.log(x+" xx : " + bufferSI2);
     var datoM="medico="+codigoM+"&grupo="+$('#grupo_servMedico').val()+"&seleccionados="+bufferSI2;
                  $.ajax({
                    type: "POST",
                    url: "updateServiciosM.php",
                    data: datoM,
                    success: function(res2) {
                         //$('.result').html(res);
                         listamedico.innerHTML = res2;
                        console.log("Z "+res2);
                        if(res2.trim()=="Exitoso"){
                            alertify.success("Cambios Guardados con Exito");
                        }else{
                            alertify.warning("No se han Hecho Cambios.");
                        }
                        
                    
                    }
                });
      }
      
      

    $('#in_medico').change(function(){
    $("input[name='chequeoSM']:checked").prop("checked", false);
   var value = $('#in_medico').val();
    idmedico=value;
   var dato= document.getElementById("in_medico").value;
   var datoSplit= dato.split(" ");
    codigoM=datoSplit[0]+"";
   value= value.replace(codigoM+" ", '');
    $('#in_medico').val(codigoM);
         //$('#lbl_medico').val(value);
        document.getElementById("lbl_medico").innerHTML=value;
                   
        console.log("lbl "+value.trim());
             obtenerServiciosHMedico(codigoM);
    });
      
      const in_medico = document.getElementById('in_medico');
      const listamedico = document.getElementById('listamedico');
      
      const inputHandler = function(e) {
          var sresult;
          datoin = e.target.value;
          var dataString = 'datomedico='+datoin;
          //console.log(dataString);
          $.ajax({
                    type: "POST",
                    url: "getMedicos.php",
                    data: dataString,
                    success: function(res2) {
                         //$('.result').html(res);
                         listamedico.innerHTML = res2;
                        console.log("Z "+res2);
                        
                    
                    }
                });
          
          
        }

in_medico.addEventListener('input', inputHandler);
in_medico.addEventListener('propertychange', inputHandler); 
      
      
      
    const result2 = document.getElementById('resMedico');
         	    $('#grupo_servMedico').change(function(){
        		
        			console.log($('#grupo_servMedico').val());
        		
        			var dataString = 'grupoServicio='+$('#grupo_servMedico').val();
        			 $.ajax({
                        type: "POST",
                        url: "getserviciosM.php",
                        data: dataString,
                        success: function(res) {
                            //	console.log(res);
                             
                             result2.innerHTML = res;
                           obtenerServiciosHMedico(codigoM);
                              
                        }
                         });
        			
        		});  
      
      function obtenerServiciosHMedico(codigoM){
             $.ajax({
                                    type: "POST",
                                    url: "getHabilitacionMedico.php",
                                    data: "medico="+codigoM+"&grupo="+$('#grupo_servMedico').val(),
                                    success: function(res3) {
                                     //$('.result').html(res);
                                        res3=res3.trim();
                                    var serviSplit= res3.split(",");
                                        
                                            
                                     for(var i=0;i<serviSplit.length;i++){
                                         $("#sm"+serviSplit[i]).prop("checked", true);
                                          console.log("sm "+serviSplit[i]);
                                     }
                                          
                                }
                                });
      }
  </script> 
   
    <script>

     var i=0;
                    var listNO=[],listSI=[];
                                var bufferNO;
                                var bufferSI;
    
            $("#guardarchk").click(function(){
                                   var x=0,y=0;
                                 bufferNO="";
                                 bufferSI="";
                                $.each($("input[name='chequeo']:checked"), function(){
                                     listSI[x]=$(this).val();
                                    bufferSI=bufferSI+","+listSI[x];
                                     x++;
                                      
                                });
                                $.each($("input[name='chequeo']"), function(){
                                   listNO[y]=$(this).val();
                                     
                                     bufferNO=bufferNO+","+listNO[y];
                                     
                                     y++;
                                      
                                });
                                
                                
                                                         
                                 
                                                      if(bufferNO.charAt(0)==','){
                                                         bufferNO= bufferNO.slice(1); 
                                                      }
                                                       if(bufferSI.charAt(0)==','){
                                                         bufferSI= bufferSI.slice(1); 
                                                      }
                                console.log(x+" xx : " + bufferSI);
                                console.log(y+" yy : " + bufferNO);
                                
                               // console.log("SI : " + listSI);
                                //console.log("NO : " + listNO);
                                guardarCheck()
                            });            
                        
                        


            function guardarCheck(){
                
               var dataStringx="listNO="+bufferNO+"&listSI="+bufferSI+"&grupo="+$('#grupo_serv').val();
                	 $.ajax({
                        type: "POST",
                        url: "updateServicios.php?"+dataStringx,
                        data: "",
                        success: function(res) {
                            //	console.log(res);
                            res=res.trim();
                             if(res=='Exitoso'){
                                 alertify.success("Registro exito ");
                                   
                             }else{
                                 alertify.error("Algo no esta bien :(");
                             }
                             console.log(res);
                        }
                        });
                        }


        
        
         const result = document.getElementById('res');
         	    $('#grupo_serv').change(function(){
        		
        			console.log($('#grupo_serv').val());
        		
        			var dataString = 'grupoServicio='+$('#grupo_serv').val();;
        			 $.ajax({
                        type: "POST",
                        url: "getserviciosh.php",
                        data: dataString,
                        success: function(res) {
                            //	console.log(res);
                             
                             result.innerHTML = res;
                        }
                         });
        			
        		});
        	    
        
 </script>
    
    
    
    
    
    
</div>

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
