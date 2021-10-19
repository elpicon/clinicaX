<?php
include '../layout/header.php';
//$branch_id = $_GET['id'];
?>

<!-- Font Awesome -->
<!-- JavaScript Bundle with Popper -->
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

        <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="css/paciente.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link href="../layout/build/css/custom.min.css" rel="stylesheet">
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--ALERTIFY--> 
    <link rel="stylesheet" type="text/css" href="css/alertify.css">
	  <link rel="stylesheet" type="text/css" href="css/themes/default.css">

	  <script src="jquery-3.2.1.min.js"></script>
	  <script src="js/alertify.js"></script>
      <link href="../layout/build/css/custom.min.css" rel="stylesheet">
    <body class="nav-md">
  
  <?php
//    if ($usuario=="si") {
# code...

?>
<div class="container body ">
  <div class="main_container">

    <?php include '../layout/main_sidebar.php';?>
    
    <!-- top navigation -->
    <?php include '../layout/top_nav.php';?>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
    <div class="box-body">
      <h3 class="htitle" > Historial Paciente </h3>
    </div><!-- /.box-header -->
      <?php
      if ( isset( $_REQUEST[ 'cid' ] ) ) {
          $cid = $_REQUEST[ 'cid' ];
      } else {
          $cid = $_POST[ 'cid' ];
      }

      ?>

  <div class="row">
    <div class="col-lg-6 ">
        <div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-plantilla3" data-target="#" href="/page.html">
                Servicios <span class="caret"></span>
            </a>
    	  <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#">Urgencia</a></li>
              <li><a href="#">Consulta Especializada</a></li>
              <li><a href="#">Prevencion y Promoción</a></li>
              <li><a href="#">Hospitalizacion</a></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Apoyo Diagnostico</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Laboratorios</a></li>
                  <li><a href="#">Radiografias</a></li>
                  <li><a href="#">Ecografias</a></li>
                  <li><a href="#">Electros</a></li>
                </ul>
              </li>
            
              <li class="divider"></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Consulta Externa</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Medicina General</a></li>
                  <li><a href="#">Odontologia General</a></li>
                  <li><a href="#">Enfermeria</a></li>
                  <li><a href="#">Nutricion y Dietetica</a></li>
                  <li><a href="#">Optometria</a></li>
                  <li><a href="#">Psicologia</a></li>
                  <li><a href="#">Trabajo Social</a></li>
                  <li><a href="#">Fonoaudiologia</a></li>
                  <li><a href="#">Fisioterapia</a></li>
                  <li><a href="#">Nutricion y Dietetica</a></li>
                  <li><a href="#">Terapia Respiratoria</a></li>
                  <li><a href="#">Terapia Ocupcional</a></li>
                  
                </ul>
              </li>
            </ul>
        </div>

<br>


</div>


<div class="col-lg-6 ">

  <div class="text-right">
      <a type="button" class="btn btn-cama float-right"  onclick="limpiarT();limpiarTCups();" data-toggle="modal" data-target="#exampleModal">
  Plan de Manejo
</a>

  </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Plan de Manejo</h5>
        <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
    

 <h2>Elije una Opcion</h2>
<div class="warpper">
    <input class="radio" id="one" name="group" type="radio" onclick="procedimiento()" checked/>
  <input class="radio" id="two" name="group" type="radio" onclick="medicamento()"/>
  <input class="radio" id="three" name="group" type="radio">
  <div class="tabs">
  <label class="tab" id="one-tab" for="one">Procedimientos</label>
  <label class="tab" id="two-tab" for="two">Medicamentos</label>
  <!-- <label class="tab" id="three-tab" for="three"></label>-->
    </div>
  <div class="panels">
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
  
    
    


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="limpiarT();limpiarTCups();" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>



<div class="row">

<div class='col-lg-12  text-white menux colMenu' >
      <ul class="nav nav-tabs navBorde " id="myTab" role="tablist">
    
  <li class="nav-item  " id="xx" >
      <a class="nav-link active btn-ver" id="home-tab" data-toggle="tab" href="#datosconsulta" role="tab" aria-controls="home" aria-selected="true"><span class="text-dark" >Datos Consulta</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link btn-ver apartado1" id="antecedentes-tab" data-toggle="tab" href="#antecedentes" role="tab" aria-controls="antecedentes" aria-selected="false"><span class="text-dark" >Antecedentes Personales</span></a>
  </li>
  <!--URGENCIAS-->
    <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1" id="datospaciente-tab" data-toggle="tab" href="#datospaciente" role="tab" aria-controls="datospaciente" aria-selected="false"><span class="text-dark" >Datos Paciente</span></a>
  </li>
  <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1" id="atenciontriage-tab" data-toggle="tab" href="#atenciontriage" role="tab" aria-controls="atenciontriage" aria-selected="false"><span class="text-dark" >Atención Trieage</span></a>
  </li>
  <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1" id="orden_salida-tab" data-toggle="tab" href="#orden_salida" role="tab" aria-controls="orden_salida" aria-selected="false"><span class="text-dark" ">Orden de Salida</span></a>
  </li>
  <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1" id="vigilancia_nutricional-tab" data-toggle="tab" href="#vigilancia_nutricional" role="tab" aria-controls="vigilancia_nutricional" aria-selected="false"><span class="text-dark">Vigilancia Nutricional</span></a>
  </li>
  <!--x-->
  <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1" id="antecedentesf-tab" data-toggle="tab" href="#antecedentesf" role="tab" aria-controls="antecedentesf" aria-selected="false"><span class="text-dark" >Antecedentes Familiares</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  btn-ver apartado1" id="examenfisico-tab" data-toggle="tab" href="#examenfisico" role="tab" aria-controls="messages" aria-selected="false"><span class="text-dark ">Examen Físico</span></a>
  </li>
  <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1" id="rsistema-tab" data-toggle="tab" href="#rsistema" role="tab" aria-controls="rsistema" aria-selected="false"><span class="text-dark " >Revisió n Sistema</span></a>
  </li>
   <li class="nav-item  ">
    <a class="nav-link  btn-ver apartado1"  id="diagnostico-tab" data-toggle="tab" href="#diagnostico" role="tab" aria-controls="diagnostico" aria-selected="false"><span class="text-dark ">Diagnóstico</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  btn-ver apartado1" id="resumenservicio-tab" data-toggle="tab" href="#resumenservicio" role="tab" aria-controls="resumenservicio" aria-selected="false"><span class="text-dark " >Resumen Servicio</span></a>
  </li>
  
</ul>
</div>
</div>

<div class="row">
<div class='col-md-3 col-lg-3 colDatos'> 
<ul class="nav nav-tabs  navBorde justify-content-left">
        <h3 class="htitle2">Datos Personales</h3>
    <?php

    $query = mysqli_query( $con, "SELECT * FROM `u_pacientes` WHERE `numerodedocumento`='$cid';" )or die( mysqli_error() );
    
    

    /*  $query = mysqli_query( $con, "select m.nombre as  medico,p.nombre as  paciente,p.id as  documento,p.apellido as apellido,p.telefono as telefono,
            p.correo as correo,p.u_pacientes as u_pacientes,p.fecha_nacimiento,p.edad,p.tipo_sangre,p.genero,p.celular,p.ocupacion,p.eps_ars,p.ciudad,p.direccion,p.toma_medicamentos,
            p.antecedentes,p.antecedentes_familiares,
            c.fecha,c.observaciones,c.estado_cita,c.id_cita from cita c inner join u_pacientes m on c.id_medico = m.id inner join u_pacientes p on p.id = $cid " )or die( mysqli_error() );
*/
     $correo = '';
     $documento = '';
    $fecha_nacimiento='';
    $epsnombre ='';
      $i = 0;



      while ( $row = mysqli_fetch_array( $query ) ) {

       
          
         /* $medico = $row[ 'medico' ];
          $apellido = $row[ 'primerapellido' ];
          $paciente = $row[ 'paciente' ];

         
          $direccion = $row[ 'direccion' ];

          $toma_medicamentos = $row[ 'toma_medicamentos' ];
          $antecedentes = $row[ 'antecedentes' ];
          $antecedentes_familiares = $row[ 'antecedentes_familiares' ];
*/
           $nivel = $row[ 'nivel' ];
          $nombre = $row[ 'primernombre' ];
           $tipo_sangre = $row[ 'tipodesangre' ];
          $genero = $row[ 'genero' ];
           $documento = $row[ 'numerodedocumento' ];
           $fecha_nacimiento = $row[ 'fechanto' ];
           $celular = $row[ 'celular' ];
           $telefono = $row[ 'celular' ];
          $numerocontrato = $row[ 'numerodecontrato' ];
           $ocupacion = $row[ 'ocupacion' ];
          $eps = $row[ 'codigoeps' ];
          $ciudad = $row[ 'municipio' ];
          $i++;

      }


    $queryx = mysqli_query( $con, "SELECT * FROM `eps` WHERE `id`='$eps';" )or die( mysqli_error() );
     while ( $row2 = mysqli_fetch_array( $queryx ) ) {
         $epsnombre = $row2[ 'nombre_eps' ];
     }
    
    $hoy = date("Y-m-d");
$theDate    = new DateTime($hoy);
$stringDate = $theDate->format('Y-m-d');
$date1 = new DateTime("$fecha_nacimiento");
$date2 = new DateTime("$stringDate");
$diff = $date1->diff($date2);
    
      echo "
  <div class='row horizontal-scroll-contenedor'> 
   
      <table class='table   ' style='width:85%; margin-left: 20px;';>
        <thead>
            <tr>
              <th style='width:15%';></th>
              <th style='width:80%';></th>
            </tr>
          </thead>
  
        <tbody>
          <tr class='btn-info' >
            <th scope='row'>Nombre</th>
            <td style='background:white;color:black;' >$nombre</td>
          </tr>
          <tr class='btn-info' >
            <th scope='row'>Apellido</th>
            <td style='background:white;color:black;'>$apellido</td>
          </tr>
          <tr class='btn-info' >
            <th scope='row'>Documento</th>
            <td  style='background:white;color:black;'>$documento</td>
          </tr >
            <tr class='btn-info' >
          <th scope='row'><small>F/Nacimiento</small></th>
            <td  style='background:white;color:black;' ><font size=1>$fecha_nacimiento<font></td>
            </tr>
            <tr class='btn-info' >
            <th scope='row'>Teléfono</th>
            <td  style='background:white;color:black;'>$telefono</td>
            </tr>
            <tr class='btn-info' >
            <th scope='row'>Edad</th>
            <td  style='background:white;color:black;'>$diff->y</td>
          </tr>
        </tbody>
      </table>
  
  
  <table class='table' style='width:85%; margin-left: 20px;';>
 
      <thead overflow-x: auto;>
        <tr>
          <th style='width:15%';></th>
          <th style='width:80%';></th>
        </tr>
      </thead>
        
      <tbody>
          <tr class='btn-info' >
          <th scope='row'>Tipo/Sangre</th>
          <td  style='background:white;color:black;'>$tipo_sangre</td>
        </tr>
        <tr class='btn-info' >
          <th scope='row'>Genero</th>
          <td  style='background:white;color:black;' >$genero</td>
        </tr>
        <tr class='btn-info' >
          <th scope='row'>Celular</th>
          <td  style='background:white;color:black;'>$celular</td>
        </tr>
        <tr class='btn-info ' >
          <th scope='row'>Ocupacion</th>
          <td  style='background:white;color:black;'>$ocupacion</td>
        </tr>
        <tr class='btn-info' >
          <th scope='row'>EPS</th>
          <td  style='background:white;color:black;'>$epsnombre</td>
        </tr>
        <tr class='btn-info' >
          <th scope='row'>Ciudad</th>
          <td  style='background:white;color:black;'>$ciudad</td>
        </tr>
      </tbody>
    </table>
  

  </div>
    

";

      //ANTECEDENTES DEL PACIENTE 

     /* echo "<div><h2 class='bg-green'>Antecedentes del Paciente</h2></div>";

      $v = explode( ",", $antecedentes );
      $descripcion="";
      $x = 0;

      while ( $x < count( $v ) ) {
          $query = mysqli_query( $con, "SELECT * FROM categoriasCie10
WHERE clave = '$v[$x]' " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
             
              $descripcion = $row[ 'descripcion' ];

              $i++;
          }
          $descripcion = utf8_encode($descripcion);
          echo "     <div align='left' font size=7> " . " *" . $descripcion . "</div>";

          $x++;
      }
      
      
       //ANTECEDENTES FAMILIARES 
      
      echo "<div><h2 class='bg-green'>Antecedentes del Familiares</h2></div>";

      $v = explode( ",", $antecedentes_familiares );
      $descripcion;
      $x = 0;

      while ( $x < count( $v ) ) {
          $query = mysqli_query( $con, "SELECT * FROM categoriasCie10
WHERE clave = '$v[$x]' " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
              $descripcion = $row[ 'descripcion' ];

              $i++;
          }
           $descripcion = utf8_encode($descripcion);
          echo "     <div align='left' font size=7> " . " *" . $descripcion . "</div>";

          $x++;
      }
      
      
      
       echo "<div><h2 class='bg-blue'>Toma de medicamentos</h2></div>";
if(strcmp($toma_medicamentos,"")){
    
      $v = explode( ",", $toma_medicamentos );
      
      $result="";
      $x = 0;

      while ( $x < count( $v ) ) {
            $eyc = explode( "-",  $v[$x] );
          $query = mysqli_query( $con, "SELECT * FROM cum
WHERE expediente = '$eyc[0]' AND consecutivocum = '$eyc[1]' " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
              $result = $row[ 'principioactivo' ];

              $i++;
          }
           $result = utf8_encode($result);
          echo "     <div align='left' font size=7> " . " *" . $result . "</div>";

          $x++;
      }
      
      }*/
      
      ?>
      <script>
            $(".horizontal-scroll-contenedor").scrollLeft(10)  ;
    </script>
  
      
</ul>
</div>

<div class='col-md-9 col-lg-9 offset-md-1' style="
    padding-bottom: 2%;">
  <div class="tab-content tabPanel2">
    <div class="tab-pane active" id="datosconsulta" role="tabpanel" aria-labelledby="home-tab">
   <div class="row ">
    <div class="col-lg-12 form-group " >

        <label class=" text-left ">Finalidad de la Consulta</label>
    <select id="finalidadconsulta" class="form-select form-control" aria-label="Default select example">
        <?php
        $nombre_finalidad;
        $query = mysqli_query( $con, "SELECT * FROM finalidad_cita WHERE 1 " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
              $nombre_finalidad = $row[ 'nombre_finalidad' ];
              $nombre_finalidad = utf8_encode($nombre_finalidad);
            if(!strcmp($nombre_finalidad, "No Aplica")){
               echo "     <option selected> " . $nombre_finalidad . "</option>";  
            }else{
          echo "     <option > " . $nombre_finalidad . "</option>";
            }
              $i++;
          }
           
          $x++;
        ?>
    </select>
       </div>
        </div>
 
        
  <div class="row form-group">
         <br>
    <div class="col-lg-12">
    <label  class=" text-left ">Causa Externa Consulta</label>
    <select id="causaexternaconsulta" class="form-select form-control" aria-label="Default select example">
        <?php
      
        $query = mysqli_query( $con, "SELECT * FROM causa_externa_cita WHERE 1 " )or die( mysqli_error() );
          $i = 0;
          while ( $row = mysqli_fetch_array( $query ) ) {
              $nombre_causa_cita = $row[ 'nombre_causa_cita' ];
            $nombre_causa_cita = utf8_encode($nombre_causa_cita);
            if(!strcmp($nombre_causa_cita, "Otra Causa")){
               echo "     <option selected> " . $nombre_causa_cita . "</option>";  
            }else{
          echo "     <option > " . $nombre_causa_cita . "</option>";
            }
              $i++;
          }
           
          $x++;
        ?>
    </select>
       </div>
        <div class="col-lg-12">
    
    </div>
       </div>
        
        <div class="row ">
         <br>
   <div class="col-lg-12 form-group">
   <label  class=" text-left ">Estado de Conciencia *</label>
    <textarea class="form-control text-alert form-control" rows="5" id="estadoconciencia"></textarea>
    </div>
    </div>
    
     <div class="row ">
         <br>
          <div class="col-lg-12">
    <label  class=" text-left ">Motivos de la Consulta *</label>
    <textarea class="form-control" rows="5" id="motivoconsulta"></textarea>
    </div>
    </div>
    
     <div class="row ">
         <br>
          <div class="col-lg-12">
    <label  class=" text-left ">Enfermedad Actual</label>
    <textarea class="form-control" rows="5" id="enfermedadactual"></textarea>
    </div>
    </div>
    
     <div class="row ">
         <br>
          <div class="col-lg-12">
     <label  class=" text-left ">Praclinicos</label>
    <textarea class="form-control" rows="5" id="paraclinicos"></textarea>
    </div>
    </div>
    
  </div>
 
    
     <div class="tab-pane" id="antecedentes" role="tabpanel" aria-labelledby="settings-tab">
        <br>
<div class="form-group row">
  <div class="col-xs-6">
  <label class=" subt" for="antc_ginecologicos">Ginecológicos</label>
  <textarea class="form-control" rows="5" id="antc_ginecologicos"></textarea>
  </div>

  <div class="col-xs-6">
  <label class="subt" for="antc_quirurgicos">Quirurgicos</label>
  <textarea class="form-control" rows="5" id="antc_quirurgicos"></textarea>
  </div>
</div> 

<div class="form-group row">
  <div class="col-xs-6">
  <label class="subt" for="antc_traumaticos">Traumaticos</label>
  <textarea class="form-control" rows="5" id="antc_traumaticos"></textarea>
  </div>

  <div class="col-xs-6">
  <label class="subt" for="antc_transfusionales">Transfusionales</label>
  <textarea class="form-control" rows="5" id="antc_transfusionales"></textarea>
  </div>
</div> 

       <button id="" onclick="vervars();">Ver</button>
    
<div class="form-group row">
  <div class="col-xs-6">
  <label class=" subt" for="antc_alergicos">Alergicos</label>
  <input type="radio" name="chk_alergicos" value="1"  value="1" onclick="mostrarArea2()" ><span>SI</span>
  <input type="radio" name="chk_alergicos" value="0" id="chk_abdomen" checked onclick="ocultarArea2()" value="0" onclick=""><span>NO</span>
      
         
  <textarea class="form-control" rows="5" id="antc_alergicos"></textarea>
  </div>

  <div class="col-xs-6">
  <label class="subt" for="antc_hospitalizaciones">Hospitalizaciones</label>
  <textarea class="form-control" rows="5" id="antc_hospitalizaciones"></textarea>
  </div>
</div> 


<div class="form-group row">
  <div class="col-xs-6">
  <label class="subt" for="antc_patologicos">Patológicos</label>
  <textarea class="form-control" rows="5" id="antc_patologicos"></textarea>
  </div>

  <div class="col-xs-6">
  <label class="subt" for="antc_toxicologicos">Toxicológicos</label>
  <textarea class="form-control" rows="5" id="antc_toxicologicos"></textarea>
  </div>
</div> 

<div class="form-group row">
  <div class="col-xs-6">
  <label class="subt" for="antc_familiares">Familiares </label>
  <textarea class="form-control" rows="5" id="antc_familiares"></textarea>
  </div>

  <div class="col-xs-6">
  <label class="subt" for="antc_farmacologicos">Farmacológicos</label>
  <textarea class="form-control" rows="5" id="antc_farmacologicos"></textarea>
  </div>
</div> 
  </div>

   
   <div class="tab-pane" id="datospaciente" role="tabpanel" aria-labelledby="settings-tab">
        <br>
    <div class='row'>
        
     <div class='col-lg-6 col-sm-6 form-group' > 
    <label class="subt">Fecha Ingreso *:</label>
        <input size="30" type="date" id="facha_ingreso" name="fecha_ingreso" class="form-control"> 
    </div> 
    <?php   
            $firstDate  = new DateTime($fecha_nacimiento);
            $secondDate = new DateTime(date("Y-m-d"));
            $intvl = $firstDate->diff($secondDate);
          
        ?>
     <div class='col-lg-6 col-sm-6 ' > 
    <span class="subt">Sexo : </span><span id="txt_sexo"><label ><?php if(!strcmp($genero,"M")){echo "&nbsp;Masculino&nbsp;";}if(!strcmp($genero,"F")){echo "&nbsp;Femenino&nbsp;";}?></label></span><label class="subt"> Nivel : </label><span id="txt_sexo"><label><?php echo "&nbsp;".$nivel."&nbsp;"; ?></label></span><br>
    <span class="subt">Edad : </span><span id="txt_sexo"><label><?php echo $intvl->y . " Años, " . $intvl->m." Meses y ".$intvl->d." Dias";  ?></label></span>     
    </div> 
        
     <div class='col-lg-2' >  
         <span size="20">Paciente *:</span>
        </div> 
        <div class='col-lg-4 col-sm-4 form-group'> 
            <input list="list_id" id="id_paciente" value="<?php echo $documento; ?>" class="form-control" readonly>    
        </div>
   
    
    <div class='col-lg-6 col-sm-6 form-group' > 
    <span>Acompañamte *:</span>
        <input size="30" type="text" id="nombre_acompañante" name="nombre_acompañante" class="form-control"> 
    </div>
  
    
    <div class='col-lg-6 col-sm-6 form-group' > 
    <span>Tipo Atencion :*</span>
        <select id="tipo_atencion" name="tipo_atencion" class="form-control">
            <option value="1">Sin Contrato</option>   
            <option value="2">Con Contrato</option>  
            <option value="2">Particular</option>  
         </select>
         
    </div>
    <div class='col-lg-6 col-sm-6 form-group' > 
    
         <span>Aseguradora :*</span>
      <input autocomplete="off"  id="codigoaseg" type="text" value="<?php echo $numerocontrato;  ?>" class="form-control" readonly>   
        
    </div>
    
    <script>
        const codigoaseg = document.getElementById('codigoaseg');
        const list_codigo = document.getElementById('list_codigo');
        
          $('#codigoaseg').change(function(){
             var value = $('#codigoaseg').val();
           var codigoSplit=value.split(" ");
           var  codigoS= codigoSplit[0];//1
            $('#codigoaseg').val(codigoS);
            var datacod = 'codigo='+codigoS;
          });
        
        const inHandlerCodigo = function(e) {
            var sresult;
              descripcion = e.target.value;
              var dataString = 'codigo='+descripcion;
              $.ajax({
                        type: "POST",
                        url: "../aseguradora/getAseguradora.php",
                        data: dataString,
                        success: function(respuesta) {
                             //$('.result').html(res);
                            console.log(respuesta);
                             list_codigo.innerHTML = respuesta;
                            
                            
                        }
                        });
                    }
        
        codigoaseg.addEventListener('input', inHandlerCodigo);
        codigoaseg.addEventListener('propertychange', inHandlerCodigo); 
    </script>
    
     <div class='col-lg-6 col-sm-6 form-group' > 
    
         <span>Regimen :*</span>
        <select id="regimen" name="regimen" class="form-control">
            <option value="1">NA</option>   
            <option value="2">NA</option>  
         </select>
    </div>
  
    
   <div class='col-lg-6 col-sm-6 form-group' > 
    <span>Remitidos : </span> <input type="checkbox" id="remitido_Si"><span> SI</span> <input type="checkbox" id="remitido_NO"><span>NO</span>
    </div>
    
     <div class="col-lg-12">
             <div class="form">
             <label for="txt_motivo_ingreso"><big>Motivo de Ingreso :</big></label><br>
            <textarea class="form-control" id="txt_motivo_ingreso" cols="100"  rows="5"></textarea>
            </div>
            </div>
            
            
          <div class="col-lg-12">
             <div class="form">
             <label for="txt_motivo_ingreso"><big>Observacion General :</big></label><br>
            <textarea class="form-control" id="txt_observacion_general" cols="100"  rows="5"></textarea>
            </div>
            </div>  
            
   
         <div class="col-lg-12">
             <div class="form">
            
            <input type="checkbox" id="excl_trieage"/><span> Excluir TRIAGE</span>
            </div>
            </div>
</div>
 </div> 

   <div class="tab-pane" id="atenciontriage" role="tabpanel" aria-labelledby="settings-tab">
        <br>
        <div class='row'>
    <div class='col-lg-6 col-sm-6 form-group' > 
    <span>Fecha del Triage *:</span>
        <input  type="date" id="facha_triage" name="fecha_trieage" class="form-control"> 
    </div>
   </div>
     <div class="row ">
         <br>
   <div class="col-lg-4 form-group">
   <label  class=" text-left">Motivo de Ingreso :*</label>
    <textarea class="form-control text-alert form-control" rows="5" id="comentestadoc"></textarea>
    </div>
     <div class="col-lg-4 form-group">
   <label  class=" text-left">Observacion Geneal :*</label>
    <textarea style="width:100%" class="form-control text-alert form-control" rows="5" id="comentestadoc"></textarea>
    </div>
     <div class="col-lg-4 form-group">
   <label  class=" text-left">Motivo de Trieage :*</label>
    <textarea class="form-control text-alert form-control" rows="5" id="comentestadoc"></textarea>
    </div>
    </div> 
      
        <div class="row ">
       
         <div class="col-xs-12 "> 
          <div class="alert alert-primary" role="alert">
            Signos Vitales.
        </div>
        </div>
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Peso Kg *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">IMC (kg/m2)</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" readonly>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Frecuencia Cardiaca *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Presion Arterial Sistole *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Presion Arterial Diastole *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
   <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Talla (cms)</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Frecuencia Respiratioria</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    
      <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Temperatura *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    
  
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Saturacion de Oxigeno</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
      <div class="col-lg-7">  
    <div class="form-group">
    <span class="form-check-label" for="defaultCheck1">
        Paciente sin Signos Vitales.
    </span>
     <input type="checkbox" name="chk_vivo" value="1" id="cv" value="1"  onclick="ocultar('desc_respiratorio');">
   </div>
   </div>
 
    <div class="form-group">
    <div class="col-lg-12">
       <span class="form-check-label" for="defaultCheck1">
            <label>Paciente con sintomas respiratorios.</label>
       </span>
           <input type="radio" name="chk_sint_resp" value="1" id="cv" value="1" checked onclick="ocultar('desc_respiratorio')"><span>SI</span>
           <input type="radio" name="chk_sint_resp" value="0" id="cv" value="0" onclick="mostrar('desc_respiratorio')"><span>NO</span>
       </div>  
 
  <div class="col-lg-12">
       <span class="form-check-label" for="defaultCheck1">
             <label> Pulso.</label>
       </span>
        <input type="radio" name="chk_pulsoRoI" value="1" id="cv" value="0" checked><label for="">Regular</label> 
        <input type="radio" name="chk_pulsoRoI" value="0" id="cv" value="0" ><label for="">Irregular</label> 
  </div>

  </div>
    </div>  
     <div class="col-lg-6 form-group">
   <label  class=" text-left">Antecedentes Relevantes :</label>
    <textarea class="form-control text-alert form-control" rows="5" id="antecedentes_reelevantes"></textarea>
    </div>
     <div class="col-lg-6 form-group">
   <label  class=" text-left">Conducta Tomada :</label>
    <textarea style="width:100%" class="form-control text-alert form-control" rows="5" id="conducta_tomada"></textarea>
    </div>     
     
      <div class="col-lg-12 form-group alert alert-secondary ">
          <div class="alert alert-primary  col-lg-12">
             <span><label class=" text-left">Prioridad *</label></span>
          </div>
        <div class="row " > 
          <div class="col-lg-4"> <input  type="radio" name="chk_prioridad" value="1" id="cv"  checked ><label class="bg-red">  I-Resucitar </label> </div>
           <div class="col-lg-4"><input class="bg-orange" type="radio" name="chk_prioridad" value="2" id="cv"  ><label class="bg-orange"> II-Emergencia </label> </div>
           <div class="col-lg-4"><input type="radio" name="chk_prioridad" value="3" id="cv"  > <label class="bg-warning ">III-Urgente </label></div>
           <div class="col-lg-4"><input type="radio" name="chk_prioridad" value="4" id="cv"  ><label class="bg-green "> IV-Prioritaria </label></div>
           <div class="col-lg-4"><input type="radio" name="chk_prioridad" value="6" id="cv"  ><label class="bg-blue "> V-No Urgente </label></div>
        </div>
        
</div> 
 
          //err
          <div class='col-lg-12 col-sm-12 form-group'> 
<label  class=" text-left ">Profecional Sugerido :</label>

            <select list="list_id" id="id_paciente" value="" class="form-control">
                  <?php
                $nombre_medico="";
                $id_medico="";
                $buffer="";
                $query = mysqli_query( $con, "SELECT * FROM horario_medico " )or die( mysqli_error() );
                  $i = 0;
        
                  while ( $row = mysqli_fetch_array( $query ) ) {
                       $id_medico= $row[ 'id_medico' ];
                       //echo  "<option>".$id_medico."</option>";
                         $query2 = mysqli_query( $con, "SELECT * FROM usuario WHERE id='$id_medico' " )or die( mysqli_error() );
                             while ( $row2 = mysqli_fetch_array( $query2 ) ) {
                             
                               $posicion_coincidencia = strpos($buffer, "<option value='".$row2[ 'nombre' ]."'> ".$row2[ 'nombre' ]." ".$row2[ 'apellido' ]."</option>");
                               //echo "<option>".$posicion_coincidencia."</option>";
                               if($posicion_coincidencia===false){
                                   $buffer=$buffer."<option value='".$row2[ 'nombre' ]."'> ".$row2[ 'nombre' ]." ".$row2[ 'apellido' ]."</option>";
                               }else{
                                  str_replace("<option value='".$row2[ 'nombre' ]."'> ".$row2[ 'nombre' ]." ".$row2[ 'apellido' ]."</option>", "<option value='".$row2[ 'nombre' ]."'> ".$row2[ 'nombre' ]." ".$row2[ 'apellido' ]."</option>", $buffer);  
                               }
                               
                           
                                    //
                                
                                 
                                
                             }
                            
                      $i++;
                  }
                  echo "$buffer";
                   
               
        ?>
            </select>
        </div>         
          
           
    </div> 
 
  
  <script>
        function vervars(){
             var finalidadconsulta=  $("#finalidadconsulta").val();
            alert(finalidadconsulta);
             }
    
        
       var finalidadconsulta=  $("#finalidadconsulta").val();
       var causaexternaconsulta=$("#causaexternaconsulta").val();
       var estadoconciencia=$("#estadoconciencia").val();
       var motivoconsulta=$("#motivoconsulta").val();
       var enfermedadactual =$("#enfermedadactual").val();
       var paraclinicos =$("#paraclinicos").val();

       var antc_ginecologicos=$("#antc_ginecologicos").val();
       var antc_quirurgicos=$("#antc_quirurgicos").val();
       var antc_traumaticos=$("#antc_traumaticos").val();
       var antc_transfusionales=$("#antc_transfusionales").val();
       var antc_alergicos=$("#antc_alergicos").val();
       var antc_hospitalizaciones=$("#antc_hospitalizaciones").val();
       var antc_patologicos =$("#antc_patologicos").val();
       var antc_toxicologicos=$("#antc_toxicologicos").val();
        var antc_familiares=$("#antc_familiares").val();
        var antc_farmacologicos=$("#antc_farmacologicos").val();
        var fecha_ingreso=$("#fecha_ingreso").val();
       var id_paciente var nombreyapellidopaciente var acopanante var direccion var tipodeatencion var aseguradora var reginmen var telefono var remitidoSN var motivoingreso var observaciongeneral var excluyetrieage var fechatriage var motivotriage var pesokg var cinturacm var munecacm var perimetrocefalico var frecuenciacardiacafetal var frecuenciacardiaca var presionarterialsistole var presionarterialdiastole var frecuenciarespiratoria var temperatura var saturaciondeoxigeno var pacientesinsignosvitales var sintomasrespiratorios var pulso var antecedentesrelevantes var conductatomada var prioridad var profesionalsugerido var tipodediagnosticoprincipal var diagnosticoprincipal var diagnosticosecundario1 var diagnosticosecundario2 var destinopaciente var condicionsalida var discapacitado var fugado var programasan var micronutrientes var ordencomplementosnutricionales var educacionnutricional var actividadfisica var gestacionsemanas var prematuro var lactanciamaterna var diaslactanciamaterna var af_enfermedadmental var af_convulsiones var af_alcoholismo var af_tabaquismo var af_drogadiccion var af_trastornometabolismolipidos var af_hiperlipidemias var af_infartoamenores50 var ac_seno var ac_utero var ac_ovario var ac_cevix var ac_prostata var ac_estomago var ac_piel var ac_pulmonar var ac_colorectal var otros_ac var teleconsulta var abdomen var genitourinario var osteoarticular var sistemaervioso var piel var musculoesqueletico var neurologiaesferamental var cardiopulmonar var s_respiratorio var s_neuropsiquiatrico var organosdelossentidos var s_cardiovascular var s_cardiopulmonar var s_circulatorio var s_hematicopoyeticolinfatico var s_endocrinologico var s_gastrointestinal var s_renal var s_pielyfaneras var s_osteomuscular var diagnosticomedico var analisis var profesionalresponsable var fecha_salida

   </script>
  
   <!--URGENCIAS-->
  
 

 <div class="tab-pane" id="orden_salida" role="tabpanel" aria-labelledby="settings-tab">
        <br>
        <br>
    <div class='row'>
        
        
 <div class="col-lg-4 form-group">
    <span><label class=" text-left ">Finalidad de la Consulta</label></span>
 </div>
        
 <div class="col-lg-8  form-group" >
     
         
    <select id="fconsulta" class="form-select form-control" aria-label="Default select example">
        <?php
        $nombre_finalidad;
        $query = mysqli_query( $con, "SELECT * FROM finalidad_cita WHERE 1 " )or die( mysqli_error() );
          $i = 0;

          while ( $row = mysqli_fetch_array( $query ) ) {
              $nombre_finalidad = $row[ 'nombre_finalidad' ];
            $nombre_finalidad = utf8_encode($nombre_finalidad);
            if(!strcmp($nombre_finalidad, "No Aplica")){
               echo "     <option selected> " . $nombre_finalidad . "</option>";  
            }else{
          echo "     <option > " . $nombre_finalidad . "</option>";
            }
              $i++;
          }
           
          $x++;
        ?>
    </select>
       </div>
    
         <br>
    <div class="col-lg-4 form-group">
    <span><label class=" text-left">Causa Externa Consulta</label></span>
    </div>
    <div class="col-lg-8  text-left form-group">
    <select id="ceconsulta" class="form-select form-control" aria-label="Default select example">
        <?php
      
        $query = mysqli_query( $con, "SELECT * FROM causa_externa_cita WHERE 1 " )or die( mysqli_error() );
          $i = 0;
          while ( $row = mysqli_fetch_array( $query ) ) {
              $nombre_causa_cita = $row[ 'nombre_causa_cita' ];
            $nombre_causa_cita = utf8_encode($nombre_causa_cita);
            if(!strcmp($nombre_causa_cita, "Otra Causa")){
               echo "     <option selected> " . $nombre_causa_cita . "</option>";  
            }else{
          echo "     <option > " . $nombre_causa_cita . "</option>";
            }
              $i++;
          }
           
          $x++;
        ?>
    </select>
       </div>
    
   </div>

  
<p><strong>Nota:</strong> Puedes buscar la patologia por codigo o por la descripcion</p>
  <div class="form-group">
  <div class='row'>
     <div class='col-lg-12'>  
        <big>Diagnostico Principal</big>
        </div> <br> <br>
        <div class='col-lg-6 col-sm-6'> 
            <input list="result4" id="in_cie104" value="" class="">
                <datalist id="result4" >
                </datalist>
        </div>
    <div class='col-lg-6 col-sm-6 form-group'> 
        <input size="30" type="text" id="diagprincipal4"  name="diagprincipal4" readonly> 
    </div>
</div>

  <div class='row'>
        <div class='col-lg-6 form-group'>  
        <big>Tipo Diagnostico Principal</big>
        </div> <br> <br>
        <div class='col-lg-6  form-group' > 
            <select class="form-control">
                <option value="impresionD">Impresion Diagnóstica</option>
                <option value="confirmadoN">Confirmado Nuevo</option>
                <option value="confirmadoR">Confirmado Repetido</option>
            </select>
        </div>
    
</div>





 <div class='row'>
        <div class='col-lg-12 col-sm-12'> 
        <br>
        <big>Diagnostico Secundario 1</big>
        </div>
           <br> 
          <br>
<br>
        <div class='col-lg-6 col-sm-6'> 
                <input list="result5" id="in_cie105" value="" class="">
                    <datalist id="result5" >
                    </datalist>
        </div>

        <div class='col-lg-6 col-sm-6'> 
                <input size="30" type="text" id="diagprincipal5" name="diagprincipal5" readonly> 
        </div>
<br>
</div>
<br>


    <div class='row'>
            <div class='col-lg-12 col-sm-12'> 
            <br>
                <big>Diagnostico Secundario 2</big>
            </div>
               <br> 
              <br>
    <br>
    <div class='col-lg-6 col-sm-6'> 
            <input list="result6" id="in_cie106" value="" class="">
                <datalist id="result6" >
                </datalist>
    </div>
    
    <div class='col-lg-6 col-sm-6'> 
    <input size="30" type="text" id="diagprincipal6" name="diagprincipal6" readonly> 
    </div>
    <br>
    </div>
<br><br>


    <div class="row">
        <div class="alert alert-secondary form-group">
 <div class="alert alert-primary  col-lg-12">
 <span><label class=" text-left">Condicion de Salida</label></span>
</div>
    <div class="col-lg-6">
   <span><label class=" text-left">Destino de Paciente</label></span>
   </div>
    <div class="col-lg-6">
   <select class="form-control">
       <option value="alta">Alta de la Atencion</option>
       <option value="baja">Fallecido</option>
   </select>
   </div>
   
    <div class="col-lg-6">
   <span><label class=" text-left">Condicion Salida</label></span>
   </div>
    <div class="col-lg-6">
   <select  class="form-control">
       <option value="vivo">Vivo(a)</option>
       <option value="muerto">Fallecido(a)</option>
   </select>
   </div>
</div>

        <div class='col-lg-6 form-group'>  
            <input class="chk" type="checkbox" id="chk_discapacitado"><span> Discapacitado</span> 
        </div> 
         <div class='col-lg-6 form-group'>  
            <input class="chk" type="checkbox" id="chk_fugado"><span> Fugado</span>
        </div> 
    

<div class="col-lg-12">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>
</div>
</div>  

<script>

var codigocie;

const in_cie104 = document.getElementById('in_cie104');
const result4 = document.getElementById('result4');
const in_cie105 = document.getElementById('in_cie105');
const result5 = document.getElementById('result5');
const in_cie106 = document.getElementById('in_cie106');
const result6 = document.getElementById('result6');

var cod;
var descripcion;

     $('#in_cie104').change(function(){
     var value = $('#in_cie104').val();
    document.getElementById("diagprincipal4").value = document.getElementById("in_cie104").value;
    });
    
const inputHandler4 = function(e) {
var sresult;
  descripcion = e.target.value;
  var dataString = 'descripcion='+descripcion;
  $.ajax({
            type: "POST",
            url: "getcie102.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 result4.innerHTML = res2;
            }
        });
}



   $('#in_cie105').change(function(){
     var value = $('#in_cie105').val();
    document.getElementById("diagprincipal5").value = document.getElementById("in_cie105").value;
    });
    
const inputHandler5 = function(e) {
  var sresult;
  descripcion = e.target.value;
  var dataString = 'descripcion='+descripcion;
  $.ajax({
            type: "POST",
            url: "getcie102.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 result5.innerHTML = res2;
                 console.log(res2);
            }
        });
}



 $('#in_cie106').change(function(){
     var value = $('#in_cie106').val();
    document.getElementById("diagprincipal6").value = document.getElementById("in_cie106").value;
    });
    
const inputHandler6 = function(e) {
  var sresult;
  descripcion = e.target.value;
  var dataString = 'descripcion='+descripcion;
  $.ajax({
            type: "POST",
            url: "getcie102.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 result6.innerHTML = res2;
            }
        });
}

in_cie104.addEventListener('input', inputHandler4);
in_cie104.addEventListener('propertychange', inputHandler4); 
in_cie105.addEventListener('input', inputHandler5);
in_cie105.addEventListener('propertychange', inputHandler5); 
in_cie106.addEventListener('input', inputHandler6);
in_cie106.addEventListener('propertychange', inputHandler6); 
// Firefox/Edge18-/IE9+ don’t fire on <select><option>
// source.addEventListener('change', inputHandler); 



</script>
    
 
 <div class="tab-pane" id="vigilancia_nutricional" role="tabpanel" aria-labelledby="settings-tab">
        <br>
        <br>
    <div class='row alert alert-secondary'>
         <div class="col-lg-12 form-group alert alert-primary">
            <span><label class=" text-left ">Mayor de Edad</label></span>
         </div>
         
         <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Programa SAN :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <select>
                <option value="1">Ninguno</option>
            </select>
         </div>
         <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Micronutrientes :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <select required>
                <option value="">Seleccione</option>
                <option value="1">SI</option>
                <option value="0">NO</option>
            </select>
         </div>
         <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Ordena Complementos Nutricionales :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <input class="" type="radio" name="complementos_nutri"  onclick="mostrarArea()" value="1"> <span>SI</span>
            <input class="" type="radio" name="complementos_nutri" checked onclick="ocultarArea()" value="0"> <span>NO</span>
         </div>
         
         <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Cuales :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <textarea class="" type="text" id="cuales_complementos" value="" rows="5"> </textarea>
           
         </div>
         
            <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Educacion Nutricional :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <input class="" type="radio" name="educacion_nutri" value="1"> <span>SI</span>
            <input class="" type="radio" name="educacion_nutri" value="0" checked> <span>NO</span>
         </div>
          <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Actividad Fisica :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <select required>
                <option value="">Seleccione</option>
                <option value="1">Ninguna</option>
                <option value="0">Otras</option>
            </select>
         </div>
    </div>
    
    
    <div class='row alert alert-secondary'>
         <div class="col-lg-12 form-group alert alert-primary">
            <span><label class=" text-left ">Menor de 2 Años</label></span>
         </div>
         
         <div class="col-lg-4 form-group ">
            <span><label class=" text-left ">Gestacion  :</label></span>
         </div>
         <div class="col-lg-6 form-group text-right">
            <input type="number" max="50" min="0" id="dis_gestacion" value="0" >
         </div>
         <div class="col-lg-2 form-group ">
            <span class=" text-left ">Semanas</span>
         </div>
         <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Prematuro :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <input class="" type="radio" name="chk_prematuro"  value="1"> <span>SI</span>
            <input class="" type="radio" name="chk_prematuro" checked  value="0"><span>SI</span>
         </div>
         
         <div class="col-lg-6 form-group ">
            <span><label class=" text-left ">Lactancia Materna :</label></span>
         </div>
         <div class="col-lg-6 form-group ">
            <input class="" type="radio" name="lactancia_materna"  value="0"> <span>Exclusiva</span>
            <input class="" type="radio" name="lactancia_materna" checked  value="0"> <span>Complementaria</span>
         </div>
         
         
         <div class="col-lg-4 form-group ">
            <span><label class=" text-left ">Dias  :</label></span>
         </div>
         <div class="col-lg-6 form-group text-right">
            <input type="number" max="50" min="0" id="dis_lactancia" value="0">
         </div>
        
       
        
    </div>
    
    <script>
  $(document).ready( function() {
      
        $("#cuales_complementos").prop( "disabled", true ); 
        $("#antc_alergicos").prop( "disabled", true );
       $("#cuales_complementos").val( "" ); 
        $("#antc_alergicos").val( "" ); 
      
  });
     

function ocultarArea(){
$("#cuales_complementos").prop( "disabled", true );
    $("#cuales_complementos").val( "" ); 
}


function mostrarArea(){
$("#cuales_complementos").prop( "disabled", false );
}
        
        
function ocultarArea2(){
$("#antc_alergicos").prop( "disabled", true );
     $("#antc_alergicos").val( "" )
}


function mostrarArea2(){
$("#antc_alergicos").prop( "disabled", false );
}
    </script>
  </div>
 
 
  <div class="tab-pane" id="antecedentesf" role="tabpanel" aria-labelledby="profile-tab">
  <br>     <br>  
     <div class ='row'>
         
         	    <div class="col-md-6">
     <div class="form-group">
         	<h2><font size=3>Antecedentes Familiares</font></h2>
         	
         	
         	 <div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Enfermedades Mentales</span>
					</label> 
				</div>
     
			
			 <div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Convulciones</span>
					</label> 
				</div>
     
			
			 <div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Alcoholismo</span>
					</label> 
				</div>
     
			
			 <div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Tabaquismo</span>
					</label> 
				</div>
     
			
			 <div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Drogadicción</span>
					</label> 
				</div>
				
             <div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Trastornos Metabolismos Lipidos</span>
					</label> 
				</div>
     
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Hiperlipidemias</span>
					</label>
				</div>
				
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Infarto a menores de 50 años</span>
					</label>
				</div>
				
			</div>
</div>
		
		
		
		
	
		
		
		<div class="col-md-6">
			<form>
				<h2><font size=3>Antecedentes Cancer</font></h2>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Seno</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="text-success label-text">Útero</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="text-success label-text">Ovario</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Cervíx</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Próstata</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Estomago</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Colo rectal</span>
					</label>
				</div>
				
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class="text-success label-text">Piel</span>
					</label>
				</div>
				
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" > <span class=" text-success label-text">Pulmonar</span>
					</label>
				</div>
			</form>

		</div>
		
    </div>
			<form>
			<br>
			
			<div class="col-lg-8">
             <div class="form-group">
             <label for="exampleFormControlTextarea1"><big>Otros Antecedentes Familiares</big></label>
            <textarea class="form-control" id="ant_farmacologicos" rows="5"></textarea>
            </div>
            </div>
			</form>

		
  </div>
  <div class="tab-pane" id="examenfisico" role="tabpanel" aria-labelledby="messages-tab">
       <br>     <br>
    <div class="row">
        
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Peso Kg *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Cintura (cm)</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0">
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Frecuencia Cardiaca *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Presion Arterial Sistole *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Presion Arterial Diastole *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Talla (cm)*</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
     <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">muñeca (cm)</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Frecuencia Respiratioria</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
      <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">IMC (kg/m2)</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" readonly required>
    </div>
    </div>
    
      <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Temperatura *</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
      <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Frecuencia cardiaca Fetal</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Perimetro cefalico</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
    
    <div class="col-lg-3">  
    <div class="form-group">
    <label for="inputsm">Saturacion de Oxigeno</label>
    <input class="form-control input-sm" id="inputsm" type="number" value="0" required>
    </div>
    </div>
      <div class="col-lg-7">  
    <div class="form-group">
    <label class="form-check-label" for="defaultCheck1">
   Tele Consulta.
  </label>
    <input class="checkbox" type="checkbox" value="" id="defaultCheck1">
   <label class="form-check-label" for="defaultCheck1">
   No se Toman Signos Vitales.
  </label>
  </div>
    </div>
</div>

<hr size="5" width="60%" align="center" noshade color="red">




  <div class="radios">
<table class="table  table-hover table-striped ">
    <thead>
      <tr class="bg-blue">
        <th style="width:450px"></th>
        <th>Normal</th>
        <th></th>
        <th style="width:450px"></th>
      </tr>
    </thead>
    <tbody class="table table-bordered">
         
        <tr class="bg-blue">
        <td align="center">Zona</td>
        <td>SI</td>
        <td>NO</td>
            <td align="center">Anotación</td>
      </tr>  
        <tr class="bg-muted">
        <td align="right">Abdomen</td>
        <td><input type="radio" name="chk_abdomen" value="1"  value="1" checked onclick="ocultar('desc_abdomen')"></td>
        <td><input type="radio" name="chk_abdomen" value="0" id="chk_abdomen" value="0" onclick="mostrar('desc_abdomen')"></td>
        <td><input type='text' class='' id='desc_abdomen' name='desc_abdomen' style="width:90%" placeholder='Explique Aqui....'  required>
     </td>
      </tr>  
       <tr>
        <td align="right">Genitourinario</td>
        <td><input type="radio" name="chk_genitourinario" value="1" id="chk_genitourinario" checked onclick="ocultar('desc_genitourinario')"></td>
        <td><input type="radio" name="chk_genitourinario" value="0" id="chk_genitourinario" onclick="mostrar('desc_genitourinario')" ></td>
        <td><input type='text' class='' id='desc_genitourinario' name='desc_genitourinario' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>      
      <tr class="bg-muted">
        <td align="right">Osteoarticular</td>
        <td><input type="radio" name="chk_osteoarticular" value="1" checked onclick="ocultar('desc_osteoarticular')"></td>
        <td><input type="radio" name="chk_osteoarticular" value="0" onclick="mostrar('desc_osteoarticular')" ></td>
        <td><input type='text' class='' id='desc_osteoarticular' name='desc_osteoarticular' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr >
        <td align="right">Sistema Nervioso</td>
        <td><input type="radio" name="chk_snervioso" value="1" checked onclick="ocultar('desc_snervioso')"></td>
        <td><input type="radio" name="chk_snervioso" value="0" onclick="mostrar('desc_snervioso')"></td>
        <td><input type='text' class='' id='desc_snervioso' name='desc_snervioso' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr class="bg-muted">
        <td align="right">Piel</td>
        <td><input type="radio" name="chk_piel" value="1" checked onclick="ocultar('desc_piel')"></td>
        <td><input type="radio" name="chk_piel" value="0" onclick="mostrar('desc_piel')"></td>
        <td><input type='text' class='' id='desc_piel' name='desc_piel' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr >
        <td align="right">Músculo - Esqueletico</td>
        <td><input type="radio" name="chk_musculo_esqueleto" value="1" checked onclick="ocultar('desc_musculo_esqueleto')"></td>
        <td><input type="radio" name="chk_musculo_esqueleto" value="0" onclick="mostrar('desc_musculo_esqueleto')"></td>
        <td><input type='text' class='' id='desc_musculo_esqueleto' name='desc_musculo_esqueleto' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr class="bg-muted">
        <td align="right">Neurologia - Esfera Mental</td>
       <td><input type="radio" name="chk_neurologia" value="1" checked onclick="ocultar('desc_neurologia')"></td>
       <td><input type="radio" name="chk_neurologia" value="0" onclick="mostrar('desc_neurologia')"></td>
        <td><input type='text' class='' id='desc_neurologia' name='desc_neurologia' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr>
        <td align="right">Cardio Pulmonar</td>
        <td><input type="radio" name="chk_cardiopulmonar" value="1" checked onclick="ocultar('desc_cardiopulmonar')"></td>
        <td><input type="radio" name="chk_cardiopulmonar" value="0" onclick="mostrar('desc_cardiopulmonar')"></td>
        <td><input type='text' class='' id='desc_cardiopulmonar' name='desc_cardiopulmonar' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
    </tbody>
  </table>
  <div visible="none" id="contenido" style="width:10px"></div>
  </div> 
      </div>
  <div class="tab-pane" id="rsistema" role="tabpanel" aria-labelledby="rsistema-tab">
   <br>
          
       <div class="radios">
<table class=" table table-hover table-striped ">
    <thead>
      <tr class="bg-blue">
        <th style="width:450px"></th>
        <th>Normal</th>
        <th></th>
        <th style="width:450px"></th>
      </tr>
    </thead>
    <tbody class="table table-bordered">
         
        <tr class="bg-blue">
        <td align="center">Sistema</td>
        <td>SI</td>
        <td>NO</td>
        <td align="center">Anotación</td>
      </tr>  
        <tr class="bg-muted">
        <td align="right">Respiratorio</td>
        <td><input type="radio" name="chk_respiratorio" value="1" id="cv" value="1" checked onclick="ocultar('desc_respiratorio')"></td>
        <td><input type="radio" name="chk_respiratorio" value="0" id="cv" value="0" onclick="mostrar('desc_respiratorio')"></td>
        <td><input type='text' class='' id='desc_respiratorio' name='desc_respiratorio' style="width:90%" placeholder='Explique Aqui....'  required></td>
    
      </tr>  
       <tr>
        <td align="right">NeuroPsiquiatrico</td>
        <td><input type="radio" name="chk_neuro" value="1" checked onclick="ocultar('desc_neuro')"></td>
        <td><input type="radio" name="chk_neuro" value="0" onclick="mostrar('desc_neuro')" ></td>
        <td><input type='text' class='' id='desc_neuro' name='desc_neuro' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>      
      <tr class="bg-muted">
        <td align="right">Organos de los Sentidos</td>
        <td><input type="radio" name="chk_sentidos" value="1" checked onclick="ocultar('desc_sentidos')"></td>
        <td><input type="radio" name="chk_sentidos" value="0" onclick="mostrar('desc_sentidos')" ></td>
        <td><input type='text' class='' id='desc_sentidos' name='desc_sentidos' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr >
        <td align="right">Cardiovascular</td>
        <td><input type="radio" name="chk_cardiovascular" value="1" checked onclick="ocultar('desc_cardiovascular')"></td>
        <td><input type="radio" name="chk_cardiovascular" value="0" onclick="mostrar('desc_cardiovascular')"></td>
        <td><input type='text' class='' id='desc_cardiovascular' name='desc_cardiovascular' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr class="bg-muted">
        <td align="right">CardioPulmonar</td>
        <td><input type="radio" name="chk_cardiopulmonar2" value="1" checked onclick="ocultar('desc_cardiopulmonar2')"></td>
        <td><input type="radio" name="chk_cardiopulmonar2" value="0" onclick="mostrar('desc_cardiopulmonar2')"></td>
        <td><input type='text' class='' id='desc_cardiopulmonar2' name='desc_cardio' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr >
        <td align="right">Neurologico</td>
        <td><input type="radio" name="chk_neurologico" value="1" checked onclick="ocultar('desc_neurologico')"></td>
        <td><input type="radio" name="chk_neurologico" value="0" onclick="mostrar('desc_neurologico')"></td>
        <td><input type='text' class='' id='desc_neurologico' name='desc_neurologico' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr class="bg-muted">
        <td align="right">Circulatorio</td>
       <td><input type="radio" name="chk_circulatorio" value="1" checked onclick="ocultar('desc_circulatorio')"></td>
       <td><input type="radio" name="chk_circulatorio" value="0" onclick="mostrar('desc_circulatorio')"></td>
        <td><input type='text' class='' id='desc_circulatorio' name='desc_circulatorio' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      <tr>
        <td align="right">Hematopoyetico y Linfatico</td>
        <td><input type="radio" name="chk_linfatico" value="1" checked onclick="ocultar('desc_linfatico')"></td>
        <td><input type="radio" name="chk_linfatico" value="0" onclick="mostrar('desc_linfatico')"></td>
        <td><input type='text' class='' id='desc_linfatico' name='desc_linfatico' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
      <tr>
        <td align="right">Endocrinológico</td>
        <td><input type="radio" name="chk_endocrino" value="1" checked onclick="ocultar('desc_endocrino')"></td>
        <td><input type="radio" name="chk_endocrino" value="0" onclick="mostrar('desc_endocrino')"></td>
        <td><input type='text' class='' id='desc_endocrino' name='desc_endocrino' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
       <tr>
        <td align="right">GastroIntestinal</td>
        <td><input type="radio" name="chk_gastro" value="1" checked onclick="ocultar('desc_gastro')"></td>
        <td><input type="radio" name="chk_gastro" value="0" onclick="mostrar('desc_gastro')"></td>
        <td><input type='text' class='' id='desc_gastro' name='desc_gastro' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
       <tr>
        <td align="right">Renal</td>
        <td><input type="radio" name="chk_renal" value="1" checked onclick="ocultar('desc_renal')"></td>
        <td><input type="radio" name="chk_renal" value="0" onclick="mostrar('desc_renal')"></td>
        <td><input type='text' class='' id='desc_renal' name='desc_renal' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
      <tr>
        <td align="right">GenitoUrinario</td>
        <td><input type="radio" name="chk_urinario" value="1" checked onclick="ocultar('desc_urinario')"></td>
        <td><input type="radio" name="chk_urinario" value="0" onclick="mostrar('desc_urinario')"></td>
        <td><input type='text' class='' id='desc_urinario' name='desc_urinario' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
      <tr>
        <td align="right">Piel y Faneras</td>
        <td><input type="radio" name="chk_piel2" value="1" checked onclick="ocultar('desc_piel2')"></td>
        <td><input type="radio" name="chk_piel2" value="0" onclick="mostrar('desc_piel2')"></td>
        <td><input type='text' class='' id='desc_piel2' name='desc_piel2' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
      <tr>
        <td align="right">OsteoMuscular</td>
        <td><input type="radio" name="chk_muscular" value="1" checked onclick="ocultar('desc_muscular')"></td>
        <td><input type="radio" name="chk_muscular" value="0" onclick="mostrar('desc_muscular')"></td>
        <td><input type='text' class='' id='desc_muscular' name='desc_muscular' style="width:90%" placeholder='Explique Aqui....'  required>
      </tr>
      
    </tbody>
  </table>
  
  </div>
  </div>
  <div class="tab-pane" id="diagnostico" role="tabpanel" aria-labelledby="settings-tab">
  <br> 

<p><strong>Nota:</strong> Puedes buscar la patologia por codigo o por la descripcion</p>
  <div class="form-group">
  <div class='row'>
     <div class='col-lg-12'>  
        <big>Diagnostico Principal</big>
        </div> <br> <br>
        <div class='col-lg-6 col-sm-6'> 
            <input list="result" id="in_cie10" value="" class="">
                <datalist id="result" >
                </datalist>
        </div>
    <div class='col-lg-6 col-sm-6'> 
        <input size="30" type="text" id="diagprincipal" name="diagprincipal" readonly> 
    </div>
</div>

 <div class='row'>
<div class='col-lg-12 col-sm-12'> 
<br>
        <big>Diagnostico Secundario 1</big>
        </div>
           <br> 
          <br>
<br>
        <div class='col-lg-6 col-sm-6'> 
                <input list="result2" id="in_cie102" value="" class="">
                    <datalist id="result2" >
                    </datalist>
        </div>

        <div class='col-lg-6 col-sm-6'> 
                <input size="30" type="text" id="diagprincipal2" name="diagprincipal2" readonly> 
        </div>
<br>
</div>
<br>


    <div class='row'>
            <div class='col-lg-12 col-sm-12'> 
            <br>
                <big>Diagnostico Secundario 2</big>
            </div>
               <br> 
              <br>
    <br>
    <div class='col-lg-6 col-sm-6'> 
            <input list="result3" id="in_cie103" value="" class="">
                <datalist id="result3" >
                </datalist>
    </div>
    
    <div class='col-lg-6 col-sm-6'> 
    <input size="30" type="text" id="diagprincipal3" name="diagprincipal3" readonly> 
    </div>
    <br>
    </div>
<br><br>
<div class='row'>
        <div class="col-lg-8">
             <div class="form">
             <label for="exampleFormControlTextarea1"><big>Diagnostico Medico</big></label><br>
            <textarea class="form-control" id="ant_ginecologicos" cols="100"  rows="5"></textarea>
            </div>
            </div>
        
            
            <div class="col-lg-8">
                <br>
                <br>
             <div class="form">
             <label for="exampleFormControlTextarea1"><big>Análisis</big></label><br>
            <textarea  class="form-control" id="ant_ginecologicos" cols="100" rows="5"></textarea>
            </div>
            </div>
    </div>
<br>
<div class="col-lg-12">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>

<script>

var codigocie;

const in_cie10 = document.getElementById('in_cie10');
const result = document.getElementById('result');
const in_cie102 = document.getElementById('in_cie102');
const result2 = document.getElementById('result2');
const in_cie103 = document.getElementById('in_cie103');
const result3 = document.getElementById('result3');

var cod;
var descripcion;

     $('#in_cie10').change(function(){
     var value = $('#in_cie10').val();
    document.getElementById("diagprincipal").value = document.getElementById("in_cie10").value;
    });
    
const inputHandler = function(e) {
var sresult;
  descripcion = e.target.value;
  var dataString = 'descripcion='+descripcion;
  $.ajax({
            type: "POST",
            url: "getcie102.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 result.innerHTML = res2;
            }
        });
}



   $('#in_cie102').change(function(){
     var value = $('#in_cie102').val();
    document.getElementById("diagprincipal2").value = document.getElementById("in_cie102").value;
    });
    
const inputHandler2 = function(e) {
  var sresult;
  descripcion = e.target.value;
  var dataString = 'descripcion='+descripcion;
  $.ajax({
            type: "POST",
            url: "getcie102.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 result2.innerHTML = res2;
            }
        });
}



 $('#in_cie103').change(function(){
     var value = $('#in_cie103').val();
    document.getElementById("diagprincipal3").value = document.getElementById("in_cie103").value;
    });
    
const inputHandler3 = function(e) {
  var sresult;
  descripcion = e.target.value;
  var dataString = 'descripcion='+descripcion;
  $.ajax({
            type: "POST",
            url: "getcie102.php",
            data: dataString,
            success: function(res2) {
                 //$('.result').html(res);
                 result3.innerHTML = res2;
            }
        });
}

in_cie10.addEventListener('input', inputHandler);
in_cie10.addEventListener('propertychange', inputHandler); 
in_cie102.addEventListener('input', inputHandler2);
in_cie102.addEventListener('propertychange', inputHandler2); 
in_cie103.addEventListener('input', inputHandler3);
in_cie103.addEventListener('propertychange', inputHandler3); 
// Firefox/Edge18-/IE9+ don’t fire on <select><option>
// source.addEventListener('change', inputHandler); 



</script>
  </div>
  <div class="tab-pane" id="resumenservicio" role="tabpanel" aria-labelledby="settings-tab">
       <br>
    
 <div class='row'>
     <div class='col-lg-12'>  
        <big>Profesional Responsable</big>
        </div> <br> <br>
<div class='col-lg-6 col-sm-6'> 
<input list="result" id="in_profesional_r" value="" class="">
<datalist id="result" >
</datalist>
</div>
<div class='col-lg-6 col-sm-6'> 
<input size="30" type="text" id="profesional_r" name="profesional_r"> 
</div>
</div>
    
 <div class='row'>
     <div class='col-lg-12'>  
        <big>Registrado Por:</big>
        </div> <br> <br>
        <div class='col-lg-6 col-sm-6'> 
        <input list="registroprof" id="in_registradoPor" value="" class="">
        <datalist id="result" >
        </datalist>
        </div>
        <div class='col-lg-6 col-sm-6'> 
        <input size="30" type="text" id="registrado_por" name="registrado_por"> 
        </div>
</div>   
  </div>
    
    
    

</div>

</div>
</div>   

<!-- /footer content -->
</div>
</div>
</div>


<?php include '../layout/footer.php';?>
<?php include '../layout/datatable_script.php';?>

<style>
  
</style>
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
<script>//ZONAS EXAMEN FISICO

$(document).ready(function(){
   ocultarInicial();
});

function ocultarInicial(){
document.getElementById('desc_abdomen').style.display = 'none';
document.getElementById('desc_genitourinario').style.display = 'none';
document.getElementById('desc_osteoarticular').style.display = 'none';
document.getElementById('desc_snervioso').style.display = 'none';
document.getElementById('desc_piel').style.display = 'none';
document.getElementById('desc_musculo_esqueleto').style.display = 'none';
document.getElementById('desc_neurologia').style.display = 'none';
document.getElementById('desc_cardiopulmonar').style.display = 'none';


document.getElementById('desc_respiratorio').style.display = 'none';
document.getElementById('desc_neuro').style.display = 'none';
document.getElementById('desc_sentidos').style.display = 'none';
document.getElementById('desc_cardiovascular').style.display = 'none';
document.getElementById('desc_cardiopulmonar2').style.display = 'none';
document.getElementById('desc_neurologico').style.display = 'none';
document.getElementById('desc_circulatorio').style.display = 'none';
document.getElementById('desc_linfatico').style.display = 'none';
document.getElementById('desc_endocrino').style.display = 'none';
document.getElementById('desc_gastro').style.display = 'none';
document.getElementById('desc_renal').style.display = 'none';
document.getElementById('desc_urinario').style.display = 'none';
document.getElementById('desc_piel2').style.display = 'none';
document.getElementById('desc_muscular').style.display = 'none';
}

function ocultar(nombre){
document.getElementById("contenido").style.display = 'none';
document.getElementById("contenido").innerHTML = nombre;
document.getElementById(nombre+"").style.display = 'none';
}


function mostrar(nombre){
document.getElementById("contenido").style.display = 'none';
document.getElementById("contenido").innerHTML = nombre;
document.getElementById(nombre+"").style.display = 'block';
}


</script>

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

<style>
.datagrid table { border-collapse: collapse; text-align: left; width: 100%; } .datagrid {font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }.datagrid table td, .datagrid table th { padding: 3px 10px; }.datagrid table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; color:#FFFFFF; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8; } .datagrid table thead th:first-child { border: none; }.datagrid table tbody td { color: #00496B; border-left: 1px solid #E1EEF4;font-size: 12px;font-weight: normal; }.datagrid table tbody .alt td { background: #E1EEF4; color: #00496B; }.datagrid table tbody td:first-child { border-left: none; }.datagrid table tbody tr:last-child td { border-bottom: none; }.datagrid table tfoot td div { border-top: 1px solid #006699;background: #E1EEF4;} .datagrid table tfoot td { padding: 0; font-size: 12px } .datagrid table tfoot td div{ padding: 2px; }.datagrid table tfoot td ul { margin: 0; padding:0; list-style: none; text-align: right; }.datagrid table tfoot  li { display: inline; }.datagrid table tfoot li a { text-decoration: none; display: inline-block;  padding: 2px 8px; margin: 1px;color: #FFFFFF;border: 1px solid #006699;-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #006699), color-stop(1, #00557F) );background:-moz-linear-gradient( center top, #006699 5%, #00557F 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#006699', endColorstr='#00557F');background-color:#006699; }.datagrid table tfoot ul.active, .datagrid table tfoot ul a:hover { text-decoration: none;border-color: #006699; color: #FFFFFF; background: none; background-color:#00557F;}       
        
label{

color: black;
}

span{
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

<style>
    #home-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
         
}
    #antecedentes-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
    #datospaciente-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
   #atenciontriage-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
    #orden_salida-tab{
   border:2px solid #f36613;
   border-radius:22px; 
   margin-top: 10px;
   margin-right: 10px;
    }
    #vigilancia_nutricional-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
    #antecedentesf-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
    #examenfisico-tab{
   border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    } 
    
    #rsistema-tab{
      border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
     #diagnostico-tab{
      border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
     #resumenservicio-tab{
      border:2px solid #f36613;
   border-radius:22px;
   margin-top: 10px;
   margin-right: 10px;
    }
    </style>       
       
       
       <style>
     .dropdown-submenu {
    position: relative;
}
 
.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}
 
.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}
 
.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}
 
.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}
 
.dropdown-submenu.pull-left {
    float: none;
}
 
.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
     </style>
       
<style type="text/css">





#suggestions {
    box-shadow: 2px 2px 8px 0 rgba(0,0,0,.2);
    height: auto;
    position: absolute;
    top: 45px;
    z-index: 9999;
    width: 206px;
}
 
#suggestions .suggest-element {
    background-color: #EEEEEE;
    border-top: 1px solid #d6d4d4;
    cursor: pointer;
    padding: 8px;
    width: 100%;
    float: left;
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
	padding:4px 5px;
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





.myButton {
	box-shadow: 0px 1px 0px 0px #1c1b18;
	background:linear-gradient(to bottom, #eae0c2 5%, #ccc2a6 100%);
	background-color:#eae0c2;
	border-radius:5px;
	border:2px solid #333029;
	display:inline-block;
	cursor:pointer;
	color:#505739;
	font-family:Arial;
	
	font-size:13px;
	font-weight:bold;
	padding:5px 5px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:linear-gradient(to bottom, #ccc2a6 5%, #eae0c2 100%);
	background-color:#ccc2a6;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>
<!-- /gauge.js -->
</body>
</html>