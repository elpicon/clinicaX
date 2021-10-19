<?php include '../../layout/header.php';
?>

    <link rel="stylesheet" href="../../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/agenda.css" type="text/css">
    
      <link rel="stylesheet" type="text/css" href="css/alertify.css">
      <link rel="stylesheet" type="text/css" href="css/themes/default.css">

      <script src="jquery-3.2.1.min.js"></script>
      <script src="js/alertify.js"></script>
          
      <script src="js/jquery.min.js"></script>
      <script src="js/moment.min.js"></script>
      <link rel="stylesheet" href="css/fullcalendar.min.css">
      <script src="js/fullcalendar.min.js"></script>
      <script src="js/es.js"></script>
      <!-- CSS only -->

      <style>

    .fc-nonbusiness {
  background: #838E48  
    }

    .bgall {
        background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
      background-color:#ededed;
        padding:90px 10px;
    }
    </style>


<body class="nav-md">
  

<div class="container body">
<div class="main_container">
      <?php include '../../layout/main_sidebar.php';?>
        <!-- top navigation -->
      <?php include '../../layout/top_nav.php';?>   
      
      <div class="right_col" role="main">

        
            <input id="codigo_medico_inicial" value="<?php echo $_REQUEST['cid'];?>" hidden>

        
        
            <div class="box-body">
            <h3  class="htitle2"> Programación de agenda </h3>

    
            </div>
  
  <style>
      td {
          margin: 15px;
          padding: 15px;
        }
  </style>  
 


  <!--  
    <div class="col-lg-6 form-group">
            <label>Servicio : </label>
                <select id="results" class="form-control">
                  <option value="1">INTERNACION</option> 
                  <option value="2">QUIRURGICOS</option> 
                  <option value="3">CONSULTA EXTERNA</option> 
                  <option value="5">URGENCIAS</option> 
                  <option value="6">TRANSPORTE ASISTENCIAL</option> 
                  <option value="7">APOYO DIAGNOSTICO Y TERAPEUTICO</option> 
                  <option value="8">OTROS SERVICIOS</option> 
                  <option value="9">P&P</option> 
                  <option value="10">PROCESOS</option> 
                  <option value="11">ATENCION INMEDIATA</option> 
                </select>
        </div>  
-->

<div class="row rowDatos">



    <div class="col-md-12 colDatos">
      <div class="row">  
      <div class="col-md-6">
        <input hidden id="id_medico_in" value="<?php echo $_REQUEST['cid'];  ?>">
          <input type="hidden"  id="id_empresa" value="<?php echo $id_sede;  ?>" /><input type="hidden"  id="tipo" value="<?php echo $tipo;  ?>" />
          <label >Sede : </label>
          <input type="number" onkeypress="validarSede(event)" id="sede" min="1" max="99" step="1" value="1" class="form-control" style="width:80px" />
      </div>
      <div class="col-md-6">
      <label style="width:95px">Profesional : </label>
        <div class="form-group">
          <select class="form-control select2 " name="id_medico" id="id_medico" required>
            <option value="">Selecciona</option> 
              <?php
              $queryc=mysqli_query($con,"select * from usuario  where id_grupo_empresa='$id_grupo_empresa' AND id_sede like '%1%' AND tipo='medico'")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                      if(!strcmp($tipo,'medico'))  {
                                    if(!strcmp($rowc['id'],$id)) {
                                     echo "<option value=".$rowc['id'];
                                     echo "selected>"; 
                                     echo "<small>"; 
                                     echo strtoupper($rowc['nombre']).'  '.strtoupper($rowc['apellido'])."</small></option>";
                                     }
                                    
                      }else{
                            echo "<option value=".$rowc['id'].">";
                            echo "<small>"; 
                            echo strtoupper($rowc['nombre']).'  '.strtoupper($rowc['apellido'])."</small></option>";              }}?>
          </select>
        </div>
                      </div>

</div>

    <div class="row">  
      <div class="col-md-6">
          
        <label style="width:100px" >Fecha Inicio : </label> 
        <input type="date" id="fechaInicio" class="form-control" style="">
                      </div>
      <div class="col-md-6">
        <label >Fecha Fin : </label> 
        <input type="date" id="fechaFin" class="form-control" style="">
                      </div>
                      </div>

        <div class="row">  
          <div class="col-md-12">
              <br>
      <label >Tiempo de Atencion: </label> 
      <input type="number" id="tiAtencion" min="5" max="20" step="5" class="form-control" style="width:80px">
    
      <label >Tiempo entre Consultas: </label>
      <input type="number" id="tiEntreConsultas" min="1" max="10" step="1" class="form-control" style="width:80px">
    
      <label >Pacientes Atendidos a la Vez: </label>
      <input type="number" id="atencionParalela" min="1" max="10" step="1" class="form-control" style="width:80px">

                      </div>
 
    </div>



 
    </div>

  <div class="row ">
    <div class="col-lg-5">
      <br>
    <div class="doming">
      <input style="transform: scale(1.5);" type="checkbox" id="trabajadomingos"   style="width:80px"><label class="text-right">&nbsp;&nbsp; ¿Trabaja domingos? </label>
    </div>
      <table class="default" >
      

  <tr>

    <th></th>
    

    <th style="width:120px;">Hora Inicio</th>

    <th style="width:120px;">Hora Fin</th>

  </tr>

  <tr style="padding: 10px 50px 20px;">

    <td>Primer Turno</td>

    <td><div class="input-group " data-autoclose="trie">
                    <select type="text" id="h1t1" value="" class="form-control">
                        
                    </select>
                    <br>
                </div></td>

    <td><div class="input-group " data-autoclose="trie">
                    <select type="text" id="h2t1" value="" class="form-control">
                        
                    </select>
                    <br>
                </div></td>

  </tr>

  <tr>

    <td>Segundo Turno</td>

    <td><div class="input-group " data-autoclose="trie">
                   <select type="text" id="h1t2" value="" class="form-control">
                        
                    </select><br>
                </div></td>

            <td><div class="input-group " data-autoclose="trie">
                    <select type="text" id="h2t2" value="" class="form-control">
                        
                    </select><br>
                </div></td>
  </tr>

  <tr>

    <td>Tercer Turno</td>

    <td><div class="input-group clockpicker" data-autoclose="trie">
                    <select type="text" id="h1t3" value="" class="form-control">
                        
                    </select><br>
                </div></td>

    <td><div class="input-group " data-autoclose="trie">
                    <select type="text" id="h2t3" value="" class="form-control">
                        
                    </select><br>
                </div>
                </td>
 <br>
    <br>
    <br>
  </tr>

</table>
    </div>
   
  
    <div class="col-lg-7">
      <br>
      <div class="col-lg-12 form-group">
             <div id="calendario"></div>
        </div>
    </div>
  </div>

        <script>
            var splDiasDeshabilitados;
            var bufferGlobalCal;
            var bufferGlobalCalJSON;
           /* var idMedicoGlobal;//ok
            var fechaInicioGlobal;//ok
            var fechaFinGlobal;
            var tiempoAtencion;
            var tiempoEntreConsultas;
            var pacientesPorVez;
            var trabajaDomingos;
            var primerTHI;
            var primerTHF;
            var segundoTHI;
            var segundoTHF;
            var tercerTHI;
            var tercerTHF;
            */
            
            
            
        $(document).ready(function(){
        var id_ini=document.getElementById('codigo_medico_inicial').value;
        $('#id_medico > option[value='+ id_ini +']').attr('selected',true);
        
		recoleccionGeneral(id_ini);
                
	       });
       // codigo_medico_inicial
            
         $("#id_medico").change(function(){
                var id=document.getElementById('id_medico').value;
                 $('#id_medico_in').val(id);
             
             events = 'eventos.php?accion=lee&idprofesional='+id;
            calendar = jQuery("#calendario").fullCalendar({ events: events });
             calendar.fullCalendar('removeEvents');
             calendar.fullCalendar('addEventSource', events);
             //calendar.fullCalendar('refetchEvents', events);
             
                recoleccionGeneral(id);
               
          });
 
           function recoleccionGeneral(id){
               const rl1_1 = document.getElementById('h1t1');
               const rl2_1 = document.getElementById('h2t1');
               const rl1_2 = document.getElementById('h1t2');
               const rl2_2 = document.getElementById('h2t2');
               const rl1_3 = document.getElementById('h1t3');
               const rl2_3 = document.getElementById('h2t3');
               
               console.log(id);
               idMedicoGlobal=id;
              
                               var comando="id_medico="+id+"&comando=x";
                        	 $.ajax({
                                type: "POST",
                                url: "queryHorarioMedico.php",
                                data: comando,
                                success: function(res) {
                                    //	console.log(res);
                                     
                                     msg=res.trim();
                                     if(msg=="false"){
                                         
                                     }else{   
                                      
                                    var arregloGen = msg.split("#$,#");    
                                    
                                    var fi=arregloGen[0].split(" ");
                                         console.log('__fecha inicial '+fi[0]);
                                    var ff=arregloGen[1].split(" ");
                                     $('#fechaInicio').val(fi[0]);   
                                     $('#fechaFin').val(ff[0]); 
                                     $('#tiAtencion').val(arregloGen[2]); 
                                     $('#tiEntreConsultas').val(arregloGen[3]);
                                     $('#atencionParalela').val(arregloGen[4]);
                                     var comando2="temporalidad="+arregloGen[2]+"&comando=x";
                                     
                                         
                                         
                             const miCheckbox = document.querySelector("#trabajadomingos");
                                         miCheckbox.checked=convertString(arregloGen[12]);
                                         
                                      $.ajax({
                                        type: "POST",
                                        url: "getTiempos.php",
                                        data: comando2,
                                        success: function(res2) {
                                            //console.log(res2.trim()); 
                                             rl1_1.innerHTML = res2;
                                             rl2_1.innerHTML = res2;
                                             rl2_1.innerHTML = res2;
                                             rl1_2.innerHTML = res2;
                                             rl2_2.innerHTML = res2;
                                             rl1_3.innerHTML = res2;
                                             rl2_3.innerHTML = res2;
                                             if(arregloGen[6]>0){$('#h1t1 > option[value='+ arregloGen[6] +']').attr('selected',true);}
                                              if(arregloGen[7]>0){$('#h2t1 > option[value='+ arregloGen[7] +']').attr('selected',true);}
                                              if(arregloGen[8]>0){$('#h1t2 > option[value='+ arregloGen[8] +']').attr('selected',true);}
                                              if(arregloGen[9]>0){$('#h2t2 > option[value='+ arregloGen[9] +']').attr('selected',true);}
                                              if(arregloGen[10]>0){$('#h1t3 > option[value='+ arregloGen[10] +']').attr('selected',true);}
                                              if(arregloGen[11]>0){$('#h2t3 > option[value='+ arregloGen[11] +']').attr('selected',true);}
                                              
                                              console.log(arregloGen[10]+"x");
                                            
                                             
                                              
                                        }   
                                    
                                      });
                                     
                                      //$("#h1t1 option[value="+ arregloGen[6] +"]").attr("selected",true);
                                      //$("#h2t1 option[value="+ arregloGen[7] +"]").attr("selected",true);
                                     //$('#h1t1').val(arregloGen[6]).selected;
                                     //$('#h2t1').val(arregloGen[7]);
                                     
                                     }
                                     
                                     
                                }
                         });  
                        }
                        
                        
                        
              function validarSede(e) {
                  	const result = document.getElementById('id_medico');
                  	const result2 = document.getElementById('label_sede');
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla==13){
                     var sede = document.getElementById("sede").value; 
                     var id_empresa  = document.getElementById("id_empresa").value;
                     var tipo  = document.getElementById("tipo").value;
                     
                    var dato="id_sede="+sede+"&id_empresa="+id_empresa+"&tipo="+tipo+"&accion=medico";
                    	$.ajax({
                        type: "POST",
                        url: "getDoctores.php",
                        data: dato,
                        success: function(res) {
                            	console.log(res);
                                        result.innerHTML = res;
                        }
                         });
                         
                         var dato="id_sede="+sede+"&id_empresa="+id_empresa+"&tipo="+tipo+"&accion=label";
                    	$.ajax({
                        type: "POST",
                        url: "getDoctores.php",
                        data: dato,
                        success: function(rex) {
                            	console.log(rex);
                                        result2.innerHTML = rex;
                        }
                         });
                         
                } 
              }
        
                    $(document).ready(function(){
                          $("#calendario").fullCalendar({
                              businessHours:{ 
                                            start: '00:00:00+02:00',
                                            end: '08:00:00+02:00',
                                            color: '#F0D8AA',
                                            backgroundColor:'#F0D8AA',
                                            rendering: 'background',
                                            dow: [1,2,3,4,5,6]
                                                                      
                                },
                            //events:'getNoHabiles.php?id='+8+'',
                            events:'eventos.php?accion=lee&idprofesional='+document.getElementById("id_medico_in").value,
                            
                    dayRender: function( date, cell ) {
                             // MostrarNoHabiles()
                         cell.css("background-color", "#AAB7F0");
                                    $('.fc-bg-event').prop('disabled', true);
                                    //$('.fc-bg-event').css('opacity', 0.1);
                                    cell.addClass('disabled');
                                },
                    
                            header:{
                                left:'today, prev,next',  //,miBoton
                                center:'title' ,
                                right:'month, basicWeek , agendaWeek, agendaDay'
                            },/*
                            
                            
                            customButtons:{
                                miBoton:{
                                    text:"Mi Boton",
                                    click:function(){
                                        
                                        alert("xxxx");
                                    }
                               
                                }
                               
                                
                                },*/
                            
                           dayClick:function(date,jsEvent,view){
                               var tipo  = document.getElementById("tipo").value;
                               console.log(tipo);
                              //alert("Dia Seleccionado : "+date.format());
                              // alert("View Seleccionado : "+view.name);
                              //$(this).css('background-color','blue')
                                limpiarFormulario();
                               var nl=0;
                                             $.ajax({
                                                 type:'POST',
                                                 url:'getHabiles.php?comando=x',
                                                 data:"",
                                                 success:function(msg){
                                                    msg=msg.trim();
                                                   
                                                    arrNohabiles = msg.split(",");
                                                    
                                                    for (var i=0; i < arrNohabiles.length; i++) {    
                                                         
                                                       if(arrNohabiles[i]!=undefined){
                                                           
                                                           var sfecha=   arrNohabiles[i].split(" ");
                                                            
                                                            //if(date.format())
                                                            
                                                            if(sfecha[0]==date.format()){
                                                              
                                                                $("[data-date="+sfecha[0]+"]").css("background-color ", "gray");
                                                                $("[data-date="+sfecha[0]+"]").css("background-color", "gray");
                                                                nl=1;
                                                                
                                                            }
                                                            
                                                            console.log(sfecha[0]+" -------"+date.format());
                                                       } 
                                                        
                                                    }
                                                      if(nl==0){
                                                        if(date.day()!=0){
                                                                $("#txtFecha").val(date.format());
                                                                $("#modalEventos").modal();
                                                         }else{
                                                             console.log(tipo);
                                                             if(tipo=='administrador'){
                                                                $("#txtFecha").val(date.format());
                                                                $("#modalEventos").modal();
                                                             }
                                                             alertify.error("Has seleccionado dia no Laboral");
                                                         }
                                                        }else{
                                                            if(tipo=='administrador'){
                                                                $("#txtFecha").val(date.format());
                                                                $("#modalEventos").modal();
                                                                alertify.error("Has seleccionado dia no Laboral");
                                                             }
                                                        }
                                                 }
                                             });
                                            
                             
                                                       
                                                        
                               
                            },
                                 
                                 
                    
                                eventClick:function(calEvent,jsEvent,view){
                                    
                                    
                                $('#tituloEvento').html(calEvent.title);
                               // console.log(calEvent.descripcion);
                                $('#txtDescripcion').val(calEvent.descripcion);
                                $('#txtColor').val(calEvent.color);
                                $('#txtTitulo').val(calEvent.title);
                                $('#txtID').val(calEvent.id);
                                
                                FechaHora=calEvent.start._i.split(" ");
                                $('#txtFecha').val(FechaHora[0]);
                               $('#txtHora').val(FechaHora[1]);
                               // $('#txtHora').val(fechaHora[1]);
                                $('#swHabil').prop('checked', convertString(calEvent.habil));
                                //  MostrarNoHabiles()
                               if(!convertString(calEvent.habil)) {
                                $("[data-date="+FechaHora[0]+"]").css("background-color", "gray");
                                   if(document.getElementById("tipo").value=='administrador'){
                                        $("#modalEventos").modal();
                                        alertify.error("Has seleccionado dia no Laboral");
                                   }
                                }else{
                                console.log("------"+calEvent.habil);
                                $("#modalEventos").modal();
                               
                               }
                            },
                            //editable:true,
                            eventDrop:function(calEvent){
                                
                               
                                
                                $('#txtDescripcion').val(calEvent.descripcion);
                                $('#txtColor').val(calEvent.color);
                                $('#txtTitulo').val(calEvent.title);
                                $('#txtID').val(calEvent.id);
                                
                                 var fechaHora=calEvent.start.format().split("T");
                                $('#txtFecha').val(fechaHora[0]);
                                $('#txtHora').val(fechaHora[1]);
                                $('#swHabil').prop('checked', calEvent.habil);
                                
                              
                                
                                RecolectarDatosGUI();
                                EnviarInformacion('modificar',NuevoEvento,true);
                            }
                           
                        
                        });
                       
                    });
            
            function accionarFullCalendar(){
               
            }
                    const convertString = (word) =>{
                       if(word!=undefined){
                        switch(word.toLowerCase().trim()){
                            case "SI": case "yes": case "true": case "1": return true;
                            case "NO": case "no": case "false": case "0": case null: return false;
                            default: return Boolean(word);
                        }
                       }
                    }
                </script>
        
        
        
        
        
        
         <div class="row">
          <div class="col-lg-6">
      
           
 
<div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloEvento"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<style type="text/css" media="screen">
            :root {
                --color-green: #00a878;
                --color-red: #fe5e41;
                --color-button: #fdffff;
                --color-black: #000;
            }
            .switch-button {
                display: inline-block;
            }
            .switch-button .switch-button__checkbox {
                display: none;
            }
            .switch-button .switch-button__label {
                background-color: var(--color-black);
                width: 5rem;
                height: 3rem;
                border-radius: 3rem;
                display: inline-block;
                position: relative;
            }
            .switch-button .switch-button__label:before {
                transition: .2s;
                display: block;
                position: absolute;
                width: 3rem;
                height: 3rem;
                background-color: var(--color-button);
                content: '';
                border-radius: 50%;
                box-shadow: inset 0px 0px 0px 1px var(--color-black);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label {
                background-color: var(--color-green);
            }
            .switch-button .switch-button__checkbox:checked + .switch-button__label:before {
                transform: translateX(2rem);
            }
        </style>
<div class="modal-body">
    

      <input type="hidden" id="txtID" name="txtID"/>
    <input type="hidden" id="txtFecha" name="txtFecha"/>
    
     <div class="form-row">
         <div class="form-group col-md-8">
             <label>Dia Habil:</label><br>
           <div class="switch-button">
            <input type="checkbox" name="switch-button" id="swHabil"  class="switch-button__checkbox form-control">
            <label for="swHabil" class="switch-button__label"></label>
        </div>
         <input type="button" onclick="ok()">
        <script>
            function ok(){
             // $('#swHabil').prop('checked', true);
               console.log(document.getElementById('swHabil').checked);
            }
        </script>
        
       </div>   
           <div class="form-group col-md-8">
               <label>Titulo:</label>
                   <input type="text" id="txtTitulo" class="form-control" /><br>
           </div>
          <div class="form-group col-md-4">
              <label>Hora:</label>
                <div class="input-group clockpicker" data-autoclose="trie">
                    <input type="text" id="txtHora" value="" class="form-control"/><br>
                </div>
           </div>
           
     </div>
          <div class="form-group ">
                <label>Descripcion:</label>  
                <textarea type="text" id="txtDescripcion" rows="3" class="form-control"></textarea>
          </div>
          <div class="form-group">
                 Color: <input type="color" value="#ff0000" id="txtColor" class="form-control" style="height:35px;"/>
          </div>
      <div class="modal-footer">
         <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
         <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
        <button type="button" id="btnModificar" class="btn btn-info">Modificar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12">
      <button type="button" class="btn btn-plantilla" onclick="guardarTodo();">Crear Nueva Agenda</button>
    </div>
</div>
  </div>
  
  
    
            </div>
            </div>

            <?php include '../../layout/footer.php';?>

<script>
var NuevoEvento;

 function guardarTodo(){
            var idProfesional=$('#id_medico_in').val();
            var fechaInicioGlobal=$('#fechaInicio').val();
            var fechaFinGlobal=$('#fechaFin').val();
            var tiempoAtencion=$('#tiAtencion').val();
            var tiempoEntreConsultas=$('#tiEntreConsultas').val();
            var pacientesPorVez=$('#atencionParalela').val();
            var trabajaDomingos=$('#trabajadomingos').is(":checked");
            var primerTHI=$('#h1t1').val();
            var primerTHF=$('#h2t1').val();
            var segundoTHI=$('#h1t2').val();
            var segundoTHF=$('#h2t2').val();
            var tercerTHI=$('#h1t3').val();
            var tercerTHF=$('#h2t3').val();
     
     console.log("fechainicio="+fechaInicioGlobal+"&id_profesional="+idProfesional+"&fechafin="+fechaFinGlobal+"&tiempoatencion="+tiempoAtencion+"&tiempoentreconsultas="+tiempoEntreConsultas+"&pacienteporvez="+pacientesPorVez+"&trabajadomingos="+trabajaDomingos+"&h1t1="+primerTHI+"&h2t1="+primerTHF+"&h1t2="+segundoTHI+"&h2t2="+segundoTHF+"&h1t3="+tercerTHI+"&h2t3="+tercerTHF);
     
       var dato="id_sede="+sede+"&id_empresa="+id_empresa+"&tipo="+tipo+"&accion=label";
            $.ajax({
                 type: "POST",
                 url: "creaNuevaAgenda.php",
                 data: dato,
                 success: function(rex) {
                    console.log(rex);
                    result2.innerHTML = rex;
                }
            });
     
 }

 $("#btnAgregar").click(function(){
      RecolectarDatosGUI();
      EnviarInformacion('agregar',NuevoEvento);
      
      
    
      
 });    
 
  $("#btnEliminar").click(function(){
      RecolectarDatosGUI();
      EnviarInformacion('eliminar',NuevoEvento);
 });  
 
  $("#btnModificar").click(function(){
      RecolectarDatosGUI();
      EnviarInformacion('modificar',NuevoEvento);
 }); 
 
 
 
 
 
                           /*  function MostrarNoHabiles(){
                                  var msgG;
                                   if(i==0){
                                             $.ajax({
                                                 type:'POST',
                                                 url:'getHabiles.php?comando=x',
                                                 data:"",
                                                 success:function(msg){
                                                    msg=msg.trim();
                                                    msgG=msg;
                                                    arrNohabiles = msg.split(",");
                                                    
                                                    for (var i=0; i < arrNohabiles.length; i++) {    
                                                         console.log(arrNohabiles[i]+" ....."+arrNohabiles.length);
                                                       if(arrNohabiles[i]!=undefined){
                                                           var sfecha=   arrNohabiles[i].split(" ");
                                                           // $("[data-date="+sfecha[0]+"]").css("background-color", "gray");
                                                       } 
                                                        
                                                    }
                                                     
                                                 }
                                             });
                                             i=1;
                            }
                            return msgG;
                         }*/
 
 function RecolectarDatosGUI(){
     var titulo;
     var colorEst;
     if(!document.getElementById('swHabil').checked){
         titulo="Deshabilitado.";
            colorEst="#E11125";
     }else{
         colorEst="#449B1A";
         titulo="Habilitado";
     }
      NuevoEvento={
                id:$('#txtID').val(),
                title:titulo+"",
                start:$('#txtFecha').val()+" "+$('#txtHora').val(),
                descripcion:$('#txtDescripcion').val() ,
                color:colorEst,
                end:$('#txtFecha').val()+" 23:59:00",
                habil:document.getElementById('swHabil').checked+"",
                idprofesional:document.getElementById('id_medico').value,
                textColor:"#FFFFFF"
     };
     
 }
 
 function EnviarInformacion(accion,objEvento,modal){
    console.log(objEvento);
     $.ajax({
         type:'POST',
         url:'eventos.php?accion='+accion,
         data:objEvento,
         success:function(msg){
             
             if(msg){
                
                 var id=document.getElementById('id_medico').value;
             events = 'eventos.php?accion=lee&idprofesional='+id;
            calendar = jQuery("#calendario").fullCalendar({ events: events });
             calendar.fullCalendar('removeEvents');
             calendar.fullCalendar('addEventSource', events);
                  
                  if(!modal){
                   $('#modalEventos').modal('toggle');
                  }
             }else{
                alert("FALSE."); 
             }
         },
         error:function(){
             alert(Error+" Hay un Error. "+accion);
         }
     })
 }
 
 $('.clockpicker').clockpicker();

 function limpiarFormulario(){
               $('#txtDescripcion').val('');
               $('#txtColor').val('');
               $('#txtTitulo').val('');
               $('#txtID').val('');
               $('#swHabil').prop('checked', true);
             //  habil:document.getElementById('swHabil').checked
 }
    
</script>

<script>
        $(document).ready( function() {
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

 </body>
</html>