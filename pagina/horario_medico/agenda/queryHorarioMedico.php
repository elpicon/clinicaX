<?php
include('../../../dist/includes/dbcon.php');
 include '../../layout/session.php';
 @session_start();
date_default_timezone_set('America/Lima');
 
 if(isset($_REQUEST['comando'])&&isset($_REQUEST['id_medico'])){
    $id_medico=$_REQUEST['id_medico'];
$buffer="";
 $query=mysqli_query($con,"SELECT * FROM horario_medico WHERE id_medico='$id_medico' ORDER BY id DESC LIMIT 1")or die(mysqli_error());
 $x=0;
        $row=mysqli_fetch_array($query);
                 $buffer=$row['fecha_inicio']."#$,#".$row['fecha_fin']
                  ."#$,#".$row['cita_duracion']."#$,#".$row['tiempo_entre_consultas']."#$,#".$row['pacientes_paralelo']
                  ."#$,#NA#$,#".$row['hora_inicio']."#$,#".$row['hora_fin']
                  ."#$,#".$row['hora_inicio2']."#$,#".$row['hora_fin2']
                  ."#$,#".$row['hora_inicio3']."#$,#".$row['hora_fin3']
                  ."#$,#".$row['trabaja_domingos']."#$,#NA";
               
                 
                 
           
                 
                 echo $buffer;
                 
                 /*
                 if($row_cnt){
                    echo $buffer;
                 }else{
                      echo "false";
                 }*/
                
 }
                
  ?>