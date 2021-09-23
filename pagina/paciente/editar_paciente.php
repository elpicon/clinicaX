
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
                  <h3 class="box-title"> MODIFICAR PACIENTE</h3>
                </div><!-- /.box-header -->
              
                <a class="btn btn-dark btn-print fa fa-chevron-left" aria-hidden="true" href="paciente.php"    style="height:25%; width:15%; font-size: 12px " role="button"></a>
                
                <div class="box-body">
                
          
<?php
   // $branch=$_SESSION['branch'];
     $query = mysqli_query( $con, "SELECT * FROM `u_pacientes` WHERE `numerodedocumento`='$cid';" )or die( mysqli_error() );
    
    $i=1;
    while($row=mysqli_fetch_array($query)){
        $cid=$row['numerodedocumento'];    
        
?>
      
                   
     <div class="row">
                     <div class="col-md-4 ">
                      
                       <label for="date" >Foto Nueva</label>
                       
                        <img type="file" style="width:120px;height:120px;border: 1px solid; color: green;" class="form-control" id="img" name="imagen" required >
                       
                        <canvas hidden style="width:120px;height:120px;border: 1px solid; color: black;" id="c"></canvas>
                         </div>
                         <div class="col-md-4 ">
                         <button id="t">Capturar</button>
                        <br>
                         <video style="width:170px;height:120px;border: 1px solid; color: black;" id="v"></video>
                        
                      </div>   
                        
                        <div class="col-md-4 ">
                       <label for="date" >IMAGEN ANTIGUA</label>
                        <br>
                         <IMG autocomplete="off" style="width:150px;height:117px;border: 1px solid; color: red;" class="img-container" src="../usuario/subir_us/<?php echo $cid."/".$row['imagen'];?>?random="<?php echo date('Y-m-d H:m:s');?> style="height:90PX"/>
                      </div>
                     </div>
                    </div>
                          
<form class="form-horizontal" method="post" action="paciente_actualizar.php" id="#formulario" enctype='multipart/form-data'>

       <input type="hidden" class="form-control" id="tipo" name="tipo" value="paciente" required>

  


     <div class="row">
                       <div class="col-md-4 ">
                      <div class="form-group">
                      
                  
                  </div>
                    </div>
                          
            <style>
            .img-container{
              width: 70px;
              height: 50px;
                }    
            </style>
                        
    <script>
          var imagenData ;
       function enviarTodo(){
          
            var numerodedocumento= $('#numerodedocumento').val()
            $.ajax({
                  url: 'guardarImagen.php',
                  data: {
                    
                    imagenData: imagenData,
                    numerodedocumento: numerodedocumento
                  },
                  method: 'post',
                  success: function(data) {
                      if(data=="exitoso"){
                          
                      document.getElementById('#formulario').submit();
                      }else{
                          alert("error");
                      }
                      
                  }

                });
       } 
        
        
        
        
    window.addEventListener('load',init);
        function init(){
            var video=document.querySelector('#v'),canvas=document.querySelector('#c'),
                btn=document.querySelector('#t'),img=document.querySelector('#img');
            navigator.getUserMedia=(navigator.getUserMedia ||
                        navigator.webkitGetUserMedia||
                        navigator.mozGetUserMedia||
                        navigator.msGetUserMedia);
            if(navigator.getUserMedia){
                navigator.getUserMedia({video:true},function(stream){
                    
                    var binaryData = [];
                        binaryData.push(stream);
                   video.srcObject=stream;
                    video.play();
                },function(e){console.log(e);})
            }else{alert("Tienes un Navegador Obsoleto")}
            
            video.addEventListener('loadedmetadata', function(){canvas.width=video.videoWidth; canvas.height=video.videoHeight;},false);
            
            btn.addEventListener('click',function(){
                canvas.getContext('2d').drawImage(video,0,0);
                var imgData= canvas.toDataURL('image/jpeg');
                img.setAttribute('src',imgData);
                
                   imagenData = canvas.toDataURL('image/jpeg');
           // var imagenData = imagenData.replace(/^data:image\/jpeg;base64,/, "+"); //Quito data:image/jpeg;base64 para var 
                
           
            });
            
          
        }
    </script>
 </div>

<div class="row" >
                  
                       <div class="col-md-12 btn-print">
                      <div class="form-group">
                       <label for="grupo_empresa" >Grupo Empresarial</label>
                     <input type="text" class="form-control pull-right" id="grupo_empresa" name="grupo_empresa"  readonly='readonly'   value="<?php echo $id_grupo_empresa; ?>" >
                      </div>
                    </div>
                 
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                        <label for="eps_ars" >Aseguradora</label>
                        <select name="eps" required>
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
                          <input type="text" class="form-control pull-right" id="primerapellido" value="<?php echo $row["primerapellido"]; ?>" name="primerapellido" required >
                      </div>
                    </div>
                        
                   
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="segundoapellido" >Segundo Apellido</label>
                          <input type="text" class="form-control pull-right" id="segundoapellido" name="segundoapellido" value="<?php echo $row["segundoapellido"]; ?>" >
                      </div>
                    </div>
                            
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="primernombre" >Primer Nombre</label>
                          <input type="text" class="form-control pull-right" id="primernombre" name="primernombre" value="<?php echo $row["primernombre"]; ?>" required >
                      </div>
                    </div>
                        
                   
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="segundonombre" >Segundo Nombre</label>
                          <input type="text" class="form-control pull-right" id="segundonombre" name="segundonombre" value="<?php echo $row["segundonombre"]; ?>" >
                      </div>
                    </div>
                          
                    </div>


 <div class="row">
 
  
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="tipodedocumento " >Tipo DI</label><br>
                          <select id="tipodedocumento" name="tipodedocumento">
                              <option value="">Seleccione</option>
                                 
                               //TIPO ID
<?php
      $x = 0;
        $tipoid="";
           $query = mysqli_query( $con, "SELECT * FROM `u_pacientes` WHERE `numerodedocumento`='$cid';" )or die( mysqli_error() );
          $i = 0;
          while ( $row5 = mysqli_fetch_array( $query ) ) {
              $tipoid = $row5[ 'tipodedocumento' ];
               $i++;
              
                    $buf=     "<option value='RC'>RC</option>
                              <option value='TI'>TI</option>
                              <option value='CC'>CC</option>
                              <option value='CE'>CE</option>
                              <option value='SC'>SC</option>
                              <option value='PA'>PA</option>
                              <option value='CD'>CD</option> ";  
            
              
          }
        $bodytag = str_replace("'".$row['tipodedocumento']."'", "'".$row["tipodedocumento"]."'  selected='selected' ", $buf);
                              echo $bodytag;
      ?>
                          
                         
                         
                          </select>
                      </div>
                    </div>
                  
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                         <label for="date" >Usuario/DI</label>
                         <?php
                        if(!strcmp($tipo_usuario,"administrador")){
                            echo "<input type='text' class='form-control pull-right' id='numerodedocumento' value='".$row['numerodedocumento']."' name='numerodedocumento'   placeholder='ID' required>";
                        }else{
                             echo "<input type='text' class='form-control pull-right' id='numerodedocumento' value='".$row['numerodedocumento']."' name='numerodedocumento'  readonly placeholder='ID' >";
                        }
                        ?>
                         
                         
                         
                      </div>
                    </div>
                    
                     <div class="col-md-6 btn-print">
                      <div class="form-group">
                         <label for="idbdua" >IDBDUA</label>
                         <?php
                        if(!strcmp($tipo_usuario,"administrador")){
                            echo "<input type='text' class='form-control pull-right' id='idbdua' value='".$row['idbdua']."' name='idbdua'   placeholder='ID' required>";
                        }else{
                             echo "<input type='text' class='form-control pull-right' id='idbdua' value='".$row['idbdua']."' name='idbdua'  readonly placeholder='ID' >";
                        }
                        ?>
                      </div>
                    </div>
                    
                
                    <div class="col-md-7 btn-print">
                          <div class="form-group">
                           <label for="departamento" >Departamento</label>
                          <select id="departamento" name="departamento" required>
                                <option value="">Seleccione</option>
                             
<?php
 $fuferdep="";
      $x = 0;
          $query = mysqli_query( $con, "SELECT * FROM departamentos WHERE true " )or die( mysqli_error() );
          $i = 0;

          while ( $row4 = mysqli_fetch_array( $query ) ) {
              $departamentos = $row4[ 'departamento' ];
              $id_departamento = $row4[ 'id_departamento' ];
                $departamentos = _convert($departamentos);
               $i++;
              $fuferdep=$fuferdep." <option value='$id_departamento'>".$departamentos."</option>";
            
             
          }
        $bodytag2 = str_replace("value='".$row["departamento"]."'", "selected value='".$row["departamento"]."'", $fuferdep);
                              echo $bodytag2;
      ?>
      
                            </select>
                          </div>
                    </div>
                   <div class="col-md-5 btn-print" id="municipios">
                    <div class="form-group">
                    <label for="municipios" >Municipios</label>
                       <br>
                        <select id="municipio" name="municipios" required>
                            <option value="">Seleccione</option>
                                <?php
                      $bufermun="";
                      $x = 0;
                     $query = mysqli_query( $con, "SELECT * FROM municipios WHERE departamento_id=".$row["departamento"] )or die( mysqli_error() );
                      $i = 0;
                        $municipio="";
                        $idmunicipio="";
                        while ( $row6 = mysqli_fetch_array( $query ) ) {
                           $municipio=$row6[ 'municipio' ];
                           $idmunicipio=$row6[ 'id_municipio' ]; 
                            $bufermun=$bufermun." <option value='$idmunicipio'>".$municipio."</option>";
                        }
                        $bodytag6 = str_replace("value='".$row["municipio"]."'", "selected value='".$row["municipio"]."'", $bufermun);
                        echo $bodytag6;
                        ?>        
                                
                        </select>
                    </div> 
                    </div>
                            
                               
      <script type="text/javascript">
	$(document).ready(function(){
		

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
                      
                  </div>   
                          
                <?php 
        $fecha = $row['fechanto']." 15:20:40";
        $dt = new DateTime($fecha);
        $fechantox= $dt->format('Y-m-d'); // imprime 29/03/2018

        ?>
             
                    
        <div class="row">
                  
                       <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <label for="sangre" >Fecha de Nacimiento</label>
                    <input type="date" class="form-control pull-right" id="fnacimiento" value="<?php echo $fechantox;   
                         ?>" name="fecha_nacimiento"  placeholder="Fecha de nacimiento" required>
                      </div>
                    </div>
                     
                    


                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                         <label for="tipodesangre" >Tipo de Sangre</label>
                         <br>
                          <select name="tipodesangre" required>
                             <option value="">Seleccione</option>
                             
                             <?php
                              $bufer= "<option value='O+'>O+</option>
                            <option value='O-'>O-</option>
                            <option value='A+'>A+</option>
                            <option value='A-'>A-</option>
                            <option value='B+'>B+</option>
                            <option value='B-'>B-</option>
                            <option value='AB+'>AB+</option>
                            <option value='AB-'>AB-</option>";
                              
                              $bodytag = str_replace("'".$row['tipodesangre']."'", "'".$row["tipodesangre"]."'  selected='selected' ", $bufer);
                              echo $bodytag;
                              ?>
                            
                            </select>
                      </div>
                    </div>
                           
                
  
                   
                       <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="genero" >Genero</label>
                          <br>
                          <select name="genero">
                             <option value="">Seleccione</option>
                            <?php
                            if(!strcmp($row["genero"],"M")){echo "<option selected >M</option>";}else{echo "<option  >M</option>";}
                            if(!strcmp($row["genero"],"F")){echo "<option selected >F</option>";}else{echo "<option  >F</option>";}
                            ?>
                        
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
                             <?php
                              $bufer= "<option value='A1'>A1</option>
                            <option value='A2'>A2</option>
                            <option value='A3'>A3</option>
                            <option value='A4'>A4</option>
                            <option value='A5'>A5</option>
                            
                            <option value='B1'>B1</option>
                            <option value='B2'>B2</option>
                            <option value='B3'>B3</option>
                            <option value='B4'>B4</option>
                            <option value='B5'>B5</option>
                            <option value='B6'>B6</option>
                            <option value='B7'>B7</option>
                            
                            <option value='C1'>C1</option>
                            <option value='C2'>C2</option>
                            <option value='C3'>C3</option>
                            <option value='C4'>C4</option>
                            <option value='C5'>C5</option>
                            <option value='C6'>C6</option>
                            <option value='C7'>C7</option>
                            <option value='C8'>C8</option>
                            <option value='C9'>C9</option>
                            <option value='C10'>C10</option>
                            <option value='C11'>C11</option>
                            <option value='C12'>C12</option>
                            <option value='C13'>C13</option>
                            <option value='C14'>C14</option>
                            <option value='C15'>C15</option>
                            <option value='C16'>C16</option>
                            <option value='C17'>C17</option>
                            <option value='C18'>C18</option>
                            <option value='D1'>D1</option>
                            <option value='D2'>D2</option>
                            <option value='D3'>D3</option>
                            <option value='D4'>D4</option>
                            <option value='D5'>D5</option>
                            <option value='D4'>D6</option>
                            <option value='D7'>D7</option>
                            <option value='D8'>D8</option>
                            <option value='D9'>D9</option>
                            <option value='D10'>D10</option>
                            <option value='D11'>D11</option>
                            <option value='D12'>D12</option>
                            <option value='D13'>D13</option>
                            <option value='D14'>D14</option>
                            <option value='D15'>D15</option>
                            <option value='D16'>D16</option>
                            <option value='D17'>D17</option>
                            <option value='D18'>D18</option>
                            <option value='D10'>D19</option>
                            <option value='D20'>D20</option>
                            <option value='D21'>D21</option>
                            <option value='D22'>D22</option>";
                              
                              $bodytag = str_replace("'".$row['nivel']."'", "'".$row["nivel"]."'  selected='selected' ", $bufer);
                              echo $bodytag;
                              ?>
                             
                            </select>
                        
                      </div>
                    </div>
                    
                     <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <label for="grupopoblacional" >Grupo Poblacional</label>
                          <select name="grupopoblacional">
                             <option value="">Seleccione</option>
                             
                        <?php
                              $bufergp= "<option value='A1'>A1</option>     
			                <option value='1'>Habitante de la calle</option>
                            <option value='2'>ICBF</option>
                            <option value='18'>Indígenas</option>
                            <option value='2'>Rrom (Gitano)</option>
                            <option value='3'>Raizal (San Andrés y Providencia)</option>
                            <option value='4'>Palenguero de San Basilio de palenque</option>
                            <option value='5'>SISBEN.</option>
                            <option value='8'>Desmovilizados</option>
                            <option value='9'>Desplazados</option>
                            <option value='22'>INPEC</option>";
                $bodytag7 = str_replace("'".$row['grupopoblacional']."'", "'".$row["grupopoblacional"]."'  selected='selected' ", $bufergp);
                              echo $bodytag7;
        
        ?>
                            </select>
                      </div>
                    </div>
                      
                  <div class="col-md-5 btn-print">
                      <div class="form-group">
                          <label for="regimen" >Regimen</label>
                          <br>
                          <select name="regimen">
                             <option value="">Seleccione</option>
                              <?php
                              $buferreg= " <option value='contributivo'>Contributivo</option>
                            <option value='subcidiado'>Subcidiado</option>
                            <option value='excepcionyespecial'>Excepción y Especial</option>
                             <option value='PVS'>PVS</option>
                             <option value='INPEC'>INPEC</option>";
                             
                                 $bodytag8 = str_replace("'".$row['regimen']."'", "'".$row["regimen"]."'  selected='selected' ", $buferreg);
                              echo $bodytag8;
        ?>
                             
                             
                            </select>
                      </div>
                    </div>
                      
                   </div>
                    
               
            <div class="row">
                   
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="tipodecontrato" >Tipo de Contrato</label>
                          <br>
                          <select name="tipodecontrato">
                             <option value="">Seleccione</option>
                             
                              <?php
                              $bufercontr= " <option value='ARS'>ARS</option>
                            <option value='ARL'>ARL</option>
                            <option value='EPS'>EPS</option>
                            <option value='SOAT'>SOAT</option>";
                             
                                 $bodytag9 = str_replace("'".$row['tipodecontrato']."'", "'".$row["tipodecontrato"]."'  selected='selected' ", $bufercontr);
                              echo $bodytag9;
        ?>
                             
                            
                            </select>
                      </div>
                    </div> 
                    
                      <div class="col-md-4 btn-print">
                      <div class="form-group">
                     <label for="numerodecontrato" >Numero de Contrato</label>
                    <input type="text" class="form-control" id="numerodecontrato" value="<?php echo $row['numerodecontrato']; ?>" name="numerodecontrato" placeholder="Contrato"  required>
                      </div>
                    </div>
                   
        
               <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="estadodelafiliado" >Estado de Afiliacion</label>
                          <select name="estadodelafiliado">
                             <option value="">Seleccione</option>
                             
                             <?php
                              $bufereaf= "<option valor='Activo'>Activo</option>
                            <option valor='Inactivo'>Inactivo</option>
                            <option valor='Trasladado'>Trasladado</option>
                            <option valor='NA'>NA</option>";
                             
                                 $bodytag10 = str_replace("'".$row['estadodelafiliado']."'", "'".$row["estadodelafiliado"]."'  selected='selected' ", $bufereaf);
                              echo $bodytag10;
        ?>
                            
                            </select>
                      </div>
                    </div>    
                     
                  </div>
                    
               
            <div class="row">
                      <div class="col-md-3 btn-print">
                      <div class="form-group">
                          <label for="zona" >Zona</label>
                          <br>
                          <select name="zona">
                             <option value="">Seleccione</option>
                        <?php
        if(!strcmp("Urbana",$row["zona"])){ echo "<option selected value='Urbana'>Urbana</option>"; }else{echo "<option  value='Urbana'>Urbana</option>";}
         if(!strcmp("Rural",$row["zona"])){ echo "<option selected value='Rural'>Rural</option>"; }else{echo "<option  value='Rural'>Rural</option>";}
            
            ?>
    
                            </select>
                      </div>
                    </div>   
                     <div class="col-md-6 btn-print">
                      <div class="form-group">
                      <label for="telefono" >Telefono o Celular</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['celular']; ?>" placeholder="Telefono"  required>
                      </div>
                    </div>
                          
                          
                     <?php 
                        $fechax = $row['fechasgss']." 00:00:00";
                        $dtx = new DateTime($fechax);
                        $fechantox1= $dtx->format('Y-m-d'); // imprime 29/03/2018
                        //echo $fechantox1;
        ?>
                            
               <div class="col-md-6 btn-print">
                      <div class="form-group">
                          <label for="sangre" >fehcasgss</label>
                          <input type="date" class="form-control pull-right" id="fehcasgss" value="<?php echo $fechantox1; ?>" name="fehcasgss"  placeholder="Fecha de nacimiento" required>
                      </div>
                    </div>       
                    
                    </div>
                    
                <div class="row">  
                      
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="direccion" >Direccion</label>
                         <input type="text" class="form-control" value="<?php echo $row['direccion']; ?>" id="direccion" name="direccion" placeholder="Direccion"  required>
                      </div>
                    </div>
                    
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="barrio" >Barrio</label>
                         <input type="text" class="form-control" id="barrio" value="<?php echo $row['barrio']; ?>" name="barrio" placeholder="barrio"  required>
                      </div>
                    </div>
                    
                    
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                       <label for="correoelectronico" >Correo</label>
                        <input type="text" class="form-control" id="correoelectronico" value="<?php echo $row['correoelectronico']; ?>" name="correoelectronico" placeholder="correoelectronico"  required>
                      </div>
                    </div>
           </div>

<div class="row">
                 
          
                      
                    <div class="col-md-4 btn-print">
                      <div class="form-group">
                      <label for="ocupacion" >Ocupacion</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" value="<?php echo $row['ocupacion']; ?>" placeholder="Ocupacion"  required>
                         </div>
                      </div>    
                      </div>
                      
                        
              

     

                    

             
               <br>
               <br>  
    
              
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

              <div class="modal-footer">


              </div>
        </form>
<button  class="btn btn-primary" onclick="enviarTodo();" >Guardar cambios</button>
<?php } ?>

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
