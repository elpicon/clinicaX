
<?php include '../layout/header.php';

 header('Content-Type: text/html; charset=UTF-8'); 
?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                <a class = "btn btn-success btn-print myButton2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
                <!--<a class="btn btn-warning btn-print myButtonx" href="paciente_agregar.php"    style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR</a>-->
                      <button type="button" class="btn btn-warning btn-print myButtonx" data-toggle="modal" data-target="#myModal">
                      Registrar
                    </button>

                    </div>
                    <?php include '../layout/datatable_script.php';?>
                    <footer>
          <div class="pull-right">
                <a href="https://ventadecodigofuente.com/">hospital tusulutionweb Sys</a>
          </div>
          <div class="clearfix"></div>
        </footer>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Creacion del Usuario</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="post" action="paciente_add.php" enctype='multipart/form-data'>

       <input type="hidden" class="form-control" id="tipo" name="tipo" value="paciente" required>



<div class="row" >
                  
                       <div class="col-md-12 btn-print">
                      <div class="form-group">
                       <label for="grupo_empresa" >Grupo Empresarial</label>
                     <input type="text" class="form-control pull-right" id="grupo_empresa" name="grupo_empresa"  readonly='readonly'   value="<?php echo $id_grupo_empresa; ?>" >
                      </div>
                    </div>
                   
                  
                       <div class="col-md-6 btn-print">
                      <div class="form-group">
                       <label for="date" >Foto</label>
            <input type="file" class="form-control" id="imagen" name="imagen" required >
                      </div>
                    </div>
                       
                 
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                           <label for="eps_ars" >Aseguradora</label>
                          <select name="eps" id="eps" required>
                                <option value="">Seleccione</option>
                              <!--ANTECEDENTES DEL PACIENTE -->
<?php
    
      
      $x = 0;

   
          $query = mysqli_query( $con, "SELECT * FROM aseguradoras WHERE true " )or die( mysqli_error() );
          $i = 0;

          while ( $row2 = mysqli_fetch_array( $query ) ) {
             
              $eps = $row2[ 'nombre' ];
               $i++;
              if(!strcmp($row2[ 'codigo' ],$row[ 'codigoeps' ])){
                  echo " <option selected value='".$row2[ 'codigo' ]."'>".$eps."</option>";
              }else{
            echo " <option value='".$row2[ 'codigo' ]."'>".$eps."</option>";
             }
          }
         
         
      ?>
      
                              
                            </select>
                      </div>
                    </div>
           </div>   
                  
                   <div class="row">
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="primerapellido" >Primer Apellido</label>
                          <input type="text" class="form-control pull-right" id="primerapellido" name="primerapellido" required >
                      </div>
                    </div>
                        
                   
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="segundoapellido" >Segundo Apellido</label>
                          <input type="text" class="form-control pull-right" id="segundoapellido" name="segundoapellido"  >
                      </div>
                    </div>
                            
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="primernombre" >Primer Nombre</label>
                          <input type="text" class="form-control pull-right" id="primernombre" name="primernombre" required >
                      </div>
                    </div>
                        
                   
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="segundonombre" >Segundo Nombre</label>
                          <input type="text" class="form-control pull-right" id="segundonombre" name="segundonombre"  >
                      </div>
                    </div>
                          
                    </div>


 <div class="row">
 
  
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="tipodedocumento " >Tipo DI</label>
                          <select id="tipodedocumento" name="tipodedocumento">
                              <option value="RC">RC</option>
                              <option value="TI">TI</option>
                              <option value="CC">CC</option>
                              <option value="CE">CE</option>
                              <option value="SC">SC</option>
                              <option value="PA">PA</option>
                              <option value="CD">CD</option>
                          </select>
                      </div>
                    </div>
                  
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="date" >Usuario/DI</label>
                          <input type="text" class="form-control pull-right" id="numerodedocumento" name="numerodedocumento"  placeholder="ID" required>
                      </div>
                    </div>
                          
                      <div class="col-md-6 btn-print">
                      <div class="form-group">
                         <label for="date" >IDBDUA</label>
                          <input type="text" class="form-control pull-right" id="idbdua" name="idbdua"  placeholder="idbdua" required>
                      </div>
                    </div>
  
                    
                    <div class="col-md-7 btn-print">
                          <div class="form-group">
                           <label for="date" >Departamento</label>
                          <select id="departamento" name="departamento" required>
                                <option value="">Seleccione</option>
                               //ANTECEDENTES DEL PACIENTE 
<?php
                              
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
      $x = 0;
          $query = mysqli_query( $con, "SELECT * FROM departamentos WHERE true " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
              $departamentos = $row[ 'departamento' ];
              $id_departamento = $row[ 'id_departamento' ];
                $departamentos = _convert($departamentos);
               $i++;
            echo "     <option value='$id_departamento'>".$departamentos."</option>";
             
          }
      ?>
      
                            </select>
                          </div>
                    </div>
                   <div class="col-md-5 btn-print" id="municipios">
                     
                    </div>
                            
                   
                      
                  </div>   
                          
                
                    
                        
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
                  
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <label for="sangre" >Fecha de Nacimiento</label>
                          <input type="date" class="form-control pull-right" id="fnacimiento" name="fecha_nacimiento"  placeholder="Fecha de nacimiento" required>
                      </div>
                    </div>
                     
                    


                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                         <label for="tipodesangre" >Tipo de Sangre</label>
                          <select name="tipodesangre" required>
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
                           
                
  
                   
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="genero" >Genero</label>
                          <select name="genero">
                             <option value="">Seleccione</option>
                            <option>M</option>
                            <option>F</option>
                            <option>Sin Especificar</option>
                            </select>
                      </div>
                    </div>
                          
                          
                      
                           
                    </div>
                    



       <style>
         .marco-grupo1 { background-color: #DFFFB6; }
       </style>
            <br>     <br>
 <div class="row marco-grupo1">

                   
                   
                    <div class="col-md-2 btn-print">
                      <div class="form-group">
                          <label for="nivel" >Nivel</label>
                          <select name="nivel">
                             <option value="">Seleccione</option>
                             
                             
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            <option value="A5">A5</option>
                            
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="B3">B3</option>
                            <option value="B4">B4</option>
                            <option value="B5">B5</option>
                            <option value="B6">B6</option>
                            <option value="B7">B7</option>
                            
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                            <option value="C3">C3</option>
                            <option value="C4">C4</option>
                            <option value="C5">C5</option>
                            <option value="C4">C6</option>
                            <option value="C7">C7</option>
                            <option value="C8">C8</option>
                            <option value="C9">C9</option>
                            <option value="C10">C10</option>
                            <option value="C11">C11</option>
                            <option value="C12">C12</option>
                            <option value="C13">C13</option>
                            <option value="C14">C14</option>
                            <option value="C15">C15</option>
                            <option value="C16">C16</option>
                            <option value="C17">C17</option>
                            <option value="C18">C18</option>
                            
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="D5">D5</option>
                            <option value="D4">D6</option>
                            <option value="D7">D7</option>
                            <option value="D8">D8</option>
                            <option value="D9">D9</option>
                            <option value="D10">D10</option>
                            <option value="D11">D11</option>
                            <option value="D12">D12</option>
                            <option value="D13">D13</option>
                            <option value="D14">D14</option>
                            <option value="D15">D15</option>
                            <option value="D16">D16</option>
                            <option value="D17">D17</option>
                            <option value="D18">D18</option>
                            <option value="D10">D19</option>
                            <option value="D20">D20</option>
                            <option value="D21">D21</option>
                            <option value="D22">D22</option>
                            
                            </select>
                      </div>
                    </div>
                    
                     <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <label for="grupopoblacional" >Grupo Poblacional</label>
                          <select name="grupopoblacional">
                             <option value="">Seleccione</option>
                            <option value="1">Habitante de la calle</option>
                            <option value="2">ICBF</option>
                            <option value="18">Indígenas</option>
                            <option value="2">Rrom (Gitano)</option>
                            <option value="3">Raizal (San Andrés y Providencia)</option>
                            <option value="4">Palenguero de San Basilio de palenque</option>
                            <option value="5">SISBEN.</option>
                            <option value="8">Desmovilizados</option>
                            <option value="9">Desplazados</option>
                            <option value="22">INPEC</option>
                            </select>
                      </div>
                    </div>
                   
                  <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="regimen" >Regimen</label>
                          <select name="regimen">
                             <option value="">Seleccione</option>
                            <option value="contributivo">Contributivo</option>
                            <option value="subcidiado">Subcidiado</option>
                            <option value="excepcionyespecial">Excepción y Especial</option>
                             <option value="PVS">PVS</option>
                             <option value="INPEC">INPEC</option>
                            </select>
                      </div>
                    </div>
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="tipodecontrato" >Tipo de Contrato</label>
                          <select name="tipodecontrato">
                             <option value="">Seleccione</option>
                            <option>ARS</option>
                            <option>ARL</option>
                            <option>EPS</option>
                            <option>SOAT</option>
                            </select>
                      </div>
                    </div> 
                   
                     <input  type="hidden" class="form-control" id="numerodecontrato"  hidden name="numerodecontrato"  >
                     
                      <div class="col-md-12 btn-print">
                      <div class="form-group">
                   
                   
                     
                     <div class="containerT">
                       <label for="numerodecontrato" >Numero de Contrato</label>
                      <br />
                      <div class="tag-container">
                          <input list='lista_contrato' id='in_contrato'  value=''  class='form-control' >
                            <datalist id='lista_contrato'  >
                            </datalist>
                         </div>
                       </div> 
                      </div>
                    </div>
                   

         
<script>
const in_contrato = document.getElementById('in_contrato');
const lista_contrato = document.getElementById('lista_contrato');
var E;
const in_paciente = document.getElementById('in_paciente');
const listapaciente = document.getElementById('listapaciente');
const tagContainer = document.querySelector('.tag-container');
const input = document.querySelector('.tag-container input');
    
 
const contratoHandler = function(e) {
  var sresult;
     

    var entidad=document.getElementById("eps").value;
    //alert(entidad);
  datoin = e.target.value;
  var dataString = 'codigo='+datoin+'&entidad='+entidad;
  //console.log(dataString);
  $.ajax({
            type: "POST",
            url: "getContrato.php?"+dataString,
            data: "",
            success: function(res2) {
                 //$('.result').html(res);
                  console.log("Z ".res2);
                 lista_contrato.innerHTML = res2;
              
            }
        });
}   
    
in_contrato.addEventListener('input', contratoHandler);
in_contrato.addEventListener('propertychange', contratoHandler);
        

let tags = [];

function createTag(label) {
  const div = document.createElement('div');
  div.setAttribute('class', 'tag');
  const span = document.createElement('span');
  span.innerHTML = label;
  const closeIcon = document.createElement('i');
  closeIcon.innerHTML = 'close';
  closeIcon.setAttribute('class', 'material-icons');
  closeIcon.setAttribute('data-item', label);
  div.appendChild(span);
  div.appendChild(closeIcon);
  return div;
}

function clearTags() {
  document.querySelectorAll('.tag').forEach(tag => {
    tag.parentElement.removeChild(tag);
  });
}

function addTags() {
  clearTags();
  tags.slice().reverse().forEach(tag => {
    tagContainer.prepend(createTag(tag));
  });
}

	$('.tag-container input').change(function(){
        
        var value = $('#in_contrato').val();
                    var codigoSplit=value.split(" ");
                    var  codigoS= codigoSplit[0];//1
                    $('#in_contrato').val(codigoS);
                    
        
		E.target.value.split(',').forEach(tag => {
        var rep=0;
            
        for (var i = 0; i < tags.length; i++) {
          if(tags[i].trim()===tag.trim()){
            //tags[i] = precioDescuento
              rep=1;
          }
         }
         if(rep!==1){tags.push(tag);}
        console.log(tags.toString());
        $('#numerodecontrato').val(tags.toString());
      });
      
      addTags();
      input.value = '';
		});    
    
input.addEventListener('keyup', (e) => {
    E=e;
    
    if (e.key === 'Enter') {
      e.target.value.split(',').forEach(tag => {
        tags.push(tag);  
      });
      
      addTags();
      input.value = '';
    }
});
document.addEventListener('click', (e) => {
  console.log(e.target.tagName);
    
  
    
  if (e.target.tagName === 'I') {
    const tagLabel = e.target.getAttribute('data-item');
    const index = tags.indexOf(tagLabel);
    tags = [...tags.slice(0, index), ...tags.slice(index+1)];
    addTags();    
  }
})

input.focus();
</script>     



<style>
@import url('https://kodhus.com/kodhus-ui/kodhus-0.1.0.min.css');
body {
  background: #eee;
}
.containerT {
  width: 100%;
  margin: 30px auto;
}
.tag-container {
  border: 2px solid #ccc;
  border-radius: 3px;
  background: #fff;
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
  padding: 6px;
  overflow-x: scroll;
}
.tag-container .tag {
  height: 30px;
  margin: 5px;
  padding: 5px 6px;
  border: 1px solid #ccc;
  border-radius: 3px;
  background: #eee;
  display: flex;
  align-items: center;
  color: #333;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.2), inset 0 1px 1px #fff;
  cursor: default;
}
.tag i {
  font-size: 16px;
  color: #666;
  margin-left: 5px;
}
.tag-container input {
  padding: 5px;
  font-size: 16px;
  border: 0;
  outline: none;
  font-family: 'Rubik';
  color: #333;
  flex: 1;
}

             </style>         
                     
        
                    
              
                    
                    
               <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="estadodelafiliado" >Estado de Afiliacion</label>
                          <select name="estadodelafiliado">
                             <option value="">Seleccione</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                            <option>Trasladado</option>
                            <option>NA</option>
                            </select>
                      </div>
                    </div>    
                     <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="zona" >Zona</label>
                          <select name="zona">
                             <option value="">Seleccione</option>
                            <option>Urbana</option>
                            <option>Rural</option>
                            </select>
                      </div>
                    </div>     
                  </div>
                    
               
            <div class="row">
                     <div class="col-md-6 btn-print">
                      <div class="form-group">
                      <label for="telefono" >Telefono o Celular</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  required>
                      </div>
                    </div>
                          
               <div class="col-md-6 btn-print">
                      <div class="form-group">
                          <label for="sangre" >fehcasgss</label>
                          <input type="date" class="form-control pull-right" id="fehcasgss" name="fehcasgss"  placeholder="Fecha de nacimiento" required>
                      </div>
                    </div>       
                    
                    </div>
                    
                <div class="row">  
                      
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="direccion" >Direccion</label>
                         <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion"  required>
                      </div>
                    </div>
                    
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="barrio" >Barrio</label>
                         <input type="text" class="form-control" id="barrio" name="barrio" placeholder="barrio"  required>
                      </div>
                    </div>
                    
                    
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="correoelectronico" >Correo</label>
                        <input type="text" class="form-control" id="correoelectronico" name="correoelectronico" placeholder="correoelectronico"  required>
                      </div>
                    </div>
           </div>

<div class="row">
                   <div class="col-md-4 btn-print">
                      <div class="form-group">
                          <label for="contrasena" >Contraseña</label>
                          <input type="password" class="form-control pull-right" id="password" name="contrasena" placeholder="Contraseña " required>
                      </div>
                    </div>
                           
                        <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="date" >Repita contraseña</label>
                        <input type="password" class="form-control pull-right" id="password2" name="contrasenaconfirma" placeholder="Repite Password " required>
                      </div>
                      </div>
          
                      
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                      <label for="ocupacion" >Ocupacion</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ocupacion"  required>
                         </div>
                      </div>    
                      </div>
                      
                        
              

     

                    

             
               <br>
               <br>  
    <button type="submit" class="btn btn-primary" id="btn_enviar">Guardar cambios</button>
              
<script>
        const password2 = document.getElementById('password2');
        const password = document.getElementById('password');
        
    $('#password2').change(function(){
      // $('#password2').css("background-color", "#B1F39D");

    });
        
const inHandlerPasswor = function(e) {

  console.log($("#password").val()+"  "+$("#password2").val());
     if($("#password").val() === $("#password2").val()){
         
    $('#password2').css("background-color", "#B1F39D");
    $('#password').css("background-color", "#B1F39D");
        $('#btn_enviar').show();
         
    }else{
         $('#password2').css("background-color", "#FFFFFF");
    $('#password').css("background-color", "#FFFF");
         $('#btn_enviar').hide();
    }
    }
 const inHandlerPasswor2 = function(e) {

  console.log($("#password").val()+"  "+$("#password2").val());
     if($("#password").val() === $("#password2").val()){
          $('#btn_enviar').show();
         $('#password2').css("background-color", "#B1F39D");
         $('#password').css("background-color", "#B1F39D");
         
    }else{
         $('#btn_enviar').hide();
         $('#password2').css("background-color", "#FFFFFF");
         $('#password').css("background-color", "#FFFF");
         
    }
    
  
    }
    
password2.addEventListener('input', inHandlerPasswor);
password2.addEventListener('propertychange', inHandlerPasswor); 
password.addEventListener('input', inHandlerPasswor2);
password.addEventListener('propertychange', inHandlerPasswor2); 
    </script>


        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>  
            

          
      






      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> LISTA PACIENTES</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                <div class="datagrid">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                    <th>#</th>
                        <th>Foto</th>
                        <th>Nombre y apellidos</th>
                        <th>Telefono</th>
                        <th style="width:6%;">Usuario</th>
                        <th style="width:7%;">Correo</th>
                        <th class="btn-print" style="width:15%;"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
        <?php
           // $branch=$_SESSION['branch'];
            $query=mysqli_query($con,"select * from u_pacientes where 1 ")or die(mysqli_error());
            $i=0;
            while($row=mysqli_fetch_array($query)){
            $cid=$row['numerodedocumento'];
            $i++;
                
        ?>
                      <tr  >

<td ><?php echo $i;?></td>
 <td><IMG src="../usuario/subir_us/<?php echo $cid."/".$row['imagen'];?>" style="height:40px;width:40px;" /></td>
              <td><?php echo $row['primernombre'].'  '.$row['primerapellido'];?></td>
<td><?php echo $row['celular'];?></td>
<td><?php echo $row['numerodedocumento'];?></td>
    
    <td><?php echo $row['correoelectronico'];?></td>                                      

                          <td>
                                 <?php
                   
                    
                      ?>
                      <a class="btn btn-danger myButtonx" href="<?php  echo "editar_paciente.php?cid=$cid";?>"  role="button" ><i class='bx bx-edit-alt'></i></a>
                    <?php
                     if ($tipo!="recepcionista" ) {
                       ?>
                       <a class="btn btn-success  myButton2" href="<?php  echo "registros_ingreso.php?cid=$cid";?>"  role="button"><i class='bx bx-list-ul' ></i></a>
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
        $(document).ready( function() {
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
