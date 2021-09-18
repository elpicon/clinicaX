<?php

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
function check_in_range($date_start, $date_end, $date_now) {
   $date_start = strtotime($date_start);
   $date_end = strtotime($date_end);
   $date_now = strtotime($date_now);
   if (($date_now >= $date_start) && ($date_now <= $date_end)){
      return true; 
   }else{
      return false;
   }
	   
  
}

if(isset($_REQUEST['numeroservicio'])){
    $numeroservicio=$_REQUEST['numeroservicio'];
    
}
if(isset($_SESSION['tipo'])){
    $tipo=$_SESSION['tipo'];
    
}
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
    
}
if(isset($_REQUEST['fechasel'])){
    $fecha=$_REQUEST['fechasel'];
    
}

    $queryc=mysqli_query($con,"select * from usuario  where tipo='medico' AND (grupo_cups1 LIKE '%".$numeroservicio."%'  OR grupo_cups2 LIKE '%".$numeroservicio."%' OR grupo_cups3 LIKE '%".$numeroservicio."%' OR grupo_cups4 LIKE '%".$numeroservicio."%' OR grupo_cups5 LIKE '%".$numeroservicio."%' OR grupo_cups6 LIKE '%".$numeroservicio."%' OR grupo_cups7 LIKE '%".$numeroservicio."%' OR grupo_cups8 LIKE '%".$numeroservicio."%' OR grupo_cups9 LIKE '%".$numeroservicio."%' OR grupo_cups10 LIKE '%".$numeroservicio."%' OR grupo_cups11 LIKE '%".$numeroservicio."%')")or die(mysqli_error());

  $buffer="<option value=''>Seleccione</option>";
                while($rowc=mysqli_fetch_array($queryc)){
                                  
                      if(!strcmp($tipo,'medico'))  {
                                     if(!strcmp($rowc['id'],$id)) {
                            $buffer= $buffer."<option value=".$rowc['id'].
                                      "selected>".
                                      "<small>".
                                      strtoupper($rowc['nombre']).'  '.strtoupper($rowc['apellido'])."</small></option> ";
                                     }
                                    
                      }else{
                         
                        $queryHM=mysqli_query($con,"select * from horario_medico  where id_medico='".$rowc['id']."' ORDER BY id DESC LIMIT 1")or die(mysqli_error());
                          $rowHM=mysqli_fetch_array($queryHM);
                          
                          if(mysqli_num_rows($queryHM)){
                              $fechaI=explode(" ", $rowHM['fecha_inicio']);
                              $fechaF=explode(" ", $rowHM['fecha_fin']);
                              
                              $rango= check_in_range($fechaI[0], $fechaF[0], $fecha);
                             // echo $fechaI[0]." rangos desde ".$fechaF[0]." --".$rango."  <br>";
                              
                              if($rango){
                               $queryE=mysqli_query($con,"select * from eventos  where idprofesional='".$rowc['id']."' AND start like '%".$fecha."%' ")or die(mysqli_error());
                               $rowE=mysqli_fetch_array($queryE);
                              if(mysqli_num_rows($queryE)){
                                  //echo "Registros encontrados ".mysqli_num_rows($queryE)." Habil ".$rowE['habil']."<br>";
                                  
                                   if(!strcmp($rowE['habil'],"true")){
                                   $buffer= $buffer. "<option value=".$rowc['id'].">".
                                      "<small>".
                                      strtoupper($rowc['nombre']).'  '.strtoupper($rowc['apellido'])."</small></option>";
                                        }
                                  
                                }else{
                                  $buffer= $buffer. "<option value=".$rowc['id'].">".
                                      "<small>".
                                      strtoupper($rowc['nombre']).'  '.strtoupper($rowc['apellido'])."</small></option>";
                                  
                                }
                                  
                                  
                              }
                          }
                          
                            
                       
                          
                          
                            
                      }
 }
 echo $buffer;

?>