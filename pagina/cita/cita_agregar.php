<?php include '../layout/header.php';?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/cita.css" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
    
<body class="nav-md">
      
  <div class="container body">

    <div class="main_container">
    
      <?php include '../layout/main_sidebar.php';?>

            <!-- top navigation -->
      <?php include '../layout/top_nav.php';?>  

      <div class="right_col" role="main">
        <div class="box-body">
          <h3 class="htitle">Agregar Cita</h3>
        </div><!-- /.box-header -->
        <a class="btn-regresar" aria-hidden="true"  href="../cita/cita.php"    role="button"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>

        <div class="modal fade" id="Employee">  
          <div class="modal-dialog">  
            <div class="modal-content" id="aviso1">  
              <form id="needs-validation" novalidate>  
                <div class="modal-header">  
                  <h5 class="modal-title text-uppercase text-center">Terminemos de Agendar</h5>  
                </div>  
                <div class="modal-body">  
                  <div class="form-row">  
                    <div class="row">
                      <div class="col-sm-12 col-md-8 col-xs-12">  
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea oninput="cambioDesc()" class="form-control" id="descripcion_cita" rows="3"></textarea>
                      </div>  
                    </div>
                  </div>  
                </div>  
                <div class="modal-footer" id="btn_add">  
                  <button type='button' class='btn btn-danger rounded-0' data-dismiss='modal'>Cancel</button>
                </div>  
              </form>  
            </div>  
          </div>  
        </div>  
        
        
      

        <div class="row rowDatos" >
          <div class="col-lg-12 col-sm-12">
            <div class="row">
              <div class="col-lg-3 col-sm-12">
              <label for='paciente'>Fecha</label>  
                <div class="list-group-item list-group-item-action d-flex" style="
    padding: 0;">
                  <div class="p-2 flex-grow-1 ">
                    <input id="datepicker" class="form-control" value="<?php  echo date("Y-m-d");     ?>" />
                  </div>
                </div>
              </div>
              <div class="col-lg-9 col-sm-6">
              
                <label for='paciente'>Paciente</label>  
                <input list='listapaciente' id='in_paciente' autocomplete='off' value='' placeholder='Paciente' class='form-control' aria-describedby='inputGroupPrepend' >
                <datalist id='listapaciente' disable ></datalist>
              </div>     
              <div class="col-lg-12 col-sm-12">
                <div class="row">
                  <div class="col-lg-6 form-group">
                  <br>
                    <label>Grupo Servicio : </label>
                    <select id="grupo_serv" class="form-control" style="width:80%">
                      <option value="">Seleccionar</option> 
                        <?php
                          $queryS=mysqli_query($con,"select * from servicios_grupos where habilitacion_citas='1'")or die(mysqli_error());
                          $i=0;
                          while($rowS=mysqli_fetch_array($queryS)){
                            echo "<option style='display: none;' value='".$rowS['codigo']."'>".$rowS['nombre']."</option> ";
                            $i++;
                          }
                      ?>
                    </select>
                  </div>
              
              <div class="modal " id="myModal" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Servicios</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <div class="col-lg-12 form-group">
                        <br>
                        <label>Seleccione una opcion Porfavor </label>
                        <br> <br>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" onclick="DesplegaMedicos();">Guardar Cambios</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-sm-12">
              <br>
                <label>Con el Profesional :</label>
                <div class="form-group">
                  <select class="form-control select2 " name="id_medico" id="sel_medico"  required>
                  </select>
                </div>
              </div>
            </div>
              <script>
                  const ciclos = document.getElementById('ciclos');
            
            var bsModal = $.fn.modal.noConflict();
            const result2 = document.getElementById('res');
            const div_ciclos = document.getElementById('div_ciclos');
            const sel_medico = document.getElementById('sel_medico'); 
            const nombre_servicio = document.getElementById('nombre_servicio');
                
        function DesplegaMedicos(){
            var fechasel = $("#datepicker").val();
            var      datoS= datoS="numeroservicio="+$('input:radio[name=chequeo]:checked').val()+"&fechasel="+fechasel+"&id_medico="+med_cod+"&tipo_usuario=";
            console.log(datoS);
          
            let texto = $('input:radio[name=chequeo]:checked').parent().text();

            nombre_servicio.innerHTML = texto.trim()+"";
            
            $.ajax({
                      type: "POST",
                      url: "getMedicoServicio.php?"+datoS,
                      data: "",
                      success: function(res2) {
                          sel_medico.innerHTML = res2;
                         //obtenerServiciosHMedico(codigoM);

                      });
        }             
              $('#grupo_serv').change(function(){
          
            console.log($('#grupo_serv').val());
          
                  if($('#grupo_serv').val()=='9'){
                div_ciclos.innerHTML   = " <label>Ciclos : </label> <select id='ciclos' class='form-control'"+ "style='width:80%' onchange='if (this.selectedIndex) doSomething(this.value);'>"+
                  "<option value=''>Seleccionar</option>"+
                  "<option value='PM001'>PRIMERA INFANCIA</option>"+ 
                  "<option value='PM002'>INFANCIA</option>"+ 
                  "<option value='PM003'>ADOLESCENCIA</option>"+ 
                  "<option value='PM004'>JOVEN</option>"+ 
                  "<option value='PM005'>ADULTO</option>"+ 
                  "<option value='PM006'>VEJEZ</option> "+
                  "<option value='PM007'>PAI</option> "+
                  "<option value='PM008'>ATENCION PRECONCEPCIONAL</option> "+
                  "<option value='PM009'>CONTROL PRENATAL</option> "+
                  "<option value='PM010'>ATENCION DEL PARTO</option>"+ 
                  "<option value='PM011'>ATENCION POSPARTO</option>"+ 
                  "<option value='PM012'>RECIEN NACIDO</option> "+
                  "<option value='PM013'>DEMANDA INDUCIDA</option>"+ 
                  "<option value='PM014'>SALUD PUBLICA</option> "+
              "</select>";
                      
                  }else{
                      div_ciclos.innerHTML   = "";
                      var dataString = 'grupoServicio='+$('#grupo_serv').val();
            $.ajax({
                      type: "POST",
                      url: "getserviciosh.php",
                      data: dataString,
                      success: function(res) {
                          //	console.log(res);                           
                          result2.innerHTML = res;
                         //obtenerServiciosHMedico(codigoM);                            
                          $('#myModal').modal('toggle')
                            
                      }
                      });
                  }
          });  
          function doSomething(dato){
              console.log("consultara serv pyp "+dato); 
      
            var dataString = 'grupoServicio='+$('#ciclos').val();
                   console.log("consultara serv pyp");  
                      
             $.ajax({
                      type: "POST",
                      url: "getServiciosPYP.php",
                      data: dataString,
                      success: function(res) {
                            console.log(res);
                          
                          result2.innerHTML = res;
                         //obtenerServiciosHMedico(codigoM);
                          
                          $('#myModal').modal('toggle')
                            
                      }
                      });
          }
        
                  
                </script>
                <br>
          </div>  <!-- col -->
        </div>  <!-- rowDatos -->
      </div>
      
</div>
          <br>
          <div class="row rowDatos2" >
            <div class="col-lg-12 col-sm-10">
              <br>
                
                  <table class="table table-bordered table-striped dataTable no-footer">
                    <thead>
                        <tr class="encabezado">
                            <th style="width:25%;">Nombre de Asignado</th>
                            <th style="width:23%;">Hora de Cita</th>
                            <th style="width:25%;">Médico Asignado</th>
                            <th>Estado</th>
                            <th style="width:6%;">Acciones</th>
                        </tr>
                    </thead>
                    
                    <tbody id="tabla_horarios">
                      <!-- <tr>
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                            <td>d</td>
                            <td><button class="btn btn-sm myButton1 " style="background-color:transparent"><div style='text-align:left;'><i class="fa fa-check"></i></div>  </button>
                            <button class="btn btn-sm myButton2 " style="background-color:transparent"><div style='text-align:left;'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg></div></button>
                            <button class="btn btn-sm myButton3 " style="background-color:transparent"><div style='text-align:left;'><i class="fa fa-trash"></i></div>  </button>
                            </td>
                        </tr>-->
                        
                      </tbody>
                  </table>
                
            </div> 
          </div> 
          
        </div>   

        

          </div>
  </div>

</div>

<?php include '../layout/footer.php';?>
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



  <script>
  var fecha_sel;
  var cod_medico_sel;
  var cod_paciente_sel;
  var horarioseleccionado;
  var estado_cita;
var datoin;
const in_paciente = document.getElementById('in_paciente');
const listapaciente = document.getElementById('listapaciente');
const btn_add = document.getElementById('btn_add');
const descripcioncita = document.getElementById('descripcioncita');

function cambioDesc(){
    //result.innerHTML = input.value;
 
     registraCita();
      console.log("desc "+$("#descripcion_cita").val());
 };



//SELECCIONAMOS EL HORARIO POR CODIGO Y LO GUARDAMOS EN VAR GLOBAL


function registraCita(){
    estado_cita="reservado";
    console.log("Codigo Paciente"+cod_paciente_sel);
    console.log("Horario "+horarioseleccionado);
    console.log("Codigo Medico "+cod_medico_sel);
    console.log("Fecha Cita "+$("#datepicker").val());
    console.log("Estado Cita "+estado_cita);
    console.log($("#descripcion_cita").val());
    
    
$(document).ready( function() {   
    
$('#grupo_serv').change(function(){
      med_cod = $("#grupo_serv").val();
      
     cod_medico_sel= med_cod;   
      var fechasel = $("#datepicker").val();
     fecha_sel=fechasel;
   dataString = 'fechasel='+fechasel+'&id_medico='+med_cod+'&tipo_usuario='+'<?php echo $tipo_usuario;?>';
   console.log("Tabla "+dataString);

          
});
    });
    /*
    $id_medico = $_POST['id_medico'];
$id_paciente = $_POST['paciente'];
$observaciones = $_POST['observaciones'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];
    */
    
    var datoCita = "<button type='button' class='btn btn-danger rounded-0' data-dismiss='modal'>Cancel</button>"+  
    " <a class='btn-print btn btn-primary rounded-0' href='../cita/cita_add.php?id_medico="+cod_medico_sel+"&paciente="+cod_paciente_sel+"&observaciones="+$("#descripcion_cita").val()+"&fecha="+ $("#datepicker").val()+"&horario="+horarioseleccionado+"'  role='button'></li>Registrar</a>";
    

     btn_add.innerHTML = datoCita;
  console.log("Datocita "+datoCita);
   /*  $.ajax({
            type: "POST",
            url: "cita_add.php",
            data: datoCita,
            success: function(res2) {
                 //$('.result').html(res);
                 listapaciente.innerHTML = res2;
            }
        });*/
    
}




function horarioSeleccionado(horario){
     horarioseleccionado=horario;
    console.log("Horario "+horarioseleccionado);
    
    
}

 $('#in_paciente').change(function(){
    
     
       var value = $('#in_paciente').val();
                    var codigoSplit=value.split(" ");
                    var  codigoS= codigoSplit[0];//1
                    $('#in_paciente').val(codigoS);
                    
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
                    console.log(buffer);
                    document.getElementById("lbl_nombrepaciente").innerHTML=buffer;
                    $('#lbl_nombrepaciente').val(buffer);
                    var datacod = 'paciente='+codigoS;
     
     
     
     
   var proName=$("#in_paciente").val();
   var value = $('#listapaciente option').filter(function() {
     return this.value == proName;
   }).data('value');
    var msg = value;
       console.log("Paciente "+codigoS);
    cod_paciente_sel=codigoS;
    registraCita();
  var dataString = 'codigo='+codigoS;
    $.ajax({
            type: "POST",
            url: "getPacientesAll.php",
            data: dataString,
            success: function(res2) {
                         $("#grupo_serv option[value='3']").hide();// consulta externa ver
                         $("#grupo_serv option[value='7']").hide();// apoyo diagnostico ver
                         $("#grupo_serv option[value='8']").hide();// otros servicios ver
                         $("#grupo_serv option[value='9']").hide();// consulta externa ver
                
                 var respSplit=res2.trim().split("#$#");
                 var alcances=respSplit[3];
                 var alcanceSplit=alcances.split(',');
                 console.log("nn "+alcances);
                 //$('.result').html(res);
                 //listapaciente.innerHTML = res2;
                for(var i=0;i<alcanceSplit.length;i++){
                    if(alcanceSplit[i]=='1'){
                         $("#grupo_serv option[value='3']").show();// consulta externa ver
                         $("#grupo_serv option[value='7']").show();// apoyo diagnostico ver
                         $("#grupo_serv option[value='8']").show();// otros servicios ver
                    }
                    
                    if(alcanceSplit[i]=='2'){
                         $("#grupo_serv option[value='9']").show();// consulta externa ver
                    }
                    if(alcanceSplit[i]=='3'){
                         $("#grupo_serv option[value='3']").show();// consulta externa ver
                         $("#grupo_serv option[value='7']").show();// apoyo diagnostico ver
                         $("#grupo_serv option[value='8']").show();// otros servicios ver
                         $("#grupo_serv option[value='9']").show();// consulta externa ver
                    }
                    
                    
                     
                   }
            }
        });
    });


const inputHandler = function(e) {
  var sresult;
  datoin = e.target.value;
  var dataString = 'datopaciente='+datoin;
  //console.log(dataString);
  $.ajax({
            type: "POST",
            url: "getPacientes.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 listapaciente.innerHTML = res2;
                console.log("Z ".res2);
            }
        });
}

in_paciente.addEventListener('input', inputHandler);
in_paciente.addEventListener('propertychange', inputHandler); 

</script>  
  
<script>
 var med_cod="";
 var dataString;
 const tabla_horarios = document.getElementById('tabla_horarios'); 
 $('#datepicker').datepicker({
  format: 'yyyy-mm-dd'
});



$('#sel_medico').change(function(){
      med_cod = $("#sel_medico").val();
      
     cod_medico_sel= med_cod;   
      var fechasel = $("#datepicker").val();
     fecha_sel=fechasel;
   dataString = 'fechasel='+fechasel+'&id_medico='+med_cod+'&tipo_usuario='+'<?php echo $tipo_usuario;?>';
   console.log("Tabla "+dataString);
 getCita()
          
});

   $('#datepicker').change(function(){
  var fechasel = $("#datepicker").val();
  const tabla_horarios = document.getElementById('tabla_horarios');      
  dataString = 'fechasel='+fechasel+'&id_medico='+med_cod+'&id='+'&tipo_usuario='+'<?php echo $tipo_usuario;?>';
  console.log("Tabla "+dataString);
   if($('input:radio[name=chequeo]:checked').val()){
       DesplegaMedicos();
       console.log("Medicos Desplegados");
   }
   //  getCita();
  
     });


    
  function getCita(){
      $.ajax({
            type: "POST",
            url: "getCita.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 tabla_horarios.innerHTML = res2;
                 // console.log(res2);
            }
        });
  }  
</script>


  </body>



