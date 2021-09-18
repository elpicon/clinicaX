<?php

header('Content-Type: application/json');
include('dbcon.php');
$bufferGlobalCal;
$splDiasDeshabilitados=[];
$id_medico;
if(isset($_REQUEST['id'])){
    $id_medico=$_REQUEST['id'];
    
}

$query=mysqli_query($con,"SELECT * FROM horario_medico WHERE id_medico='$id_medico' ORDER BY id DESC LIMIT 1")or die(mysqli_error());
 $x=0;
        $row=mysqli_fetch_array($query);
                
                     
                     $splDiasDeshabilitados=  explode(",",$row['dias_deshabilitados']);  
                                     $bufferGlobalCal='';   

                            for($i=0;$i<count($splDiasDeshabilitados);$i++){
                                 if($i==0){
                                     $bufferGlobalCal=$bufferGlobalCal.'{ "id":"'.$id_medico.'","title":"Habilitar o Deshabilitar Dia","descripcion":"No Laboral","color":"#000000", "textColor":"#FFFFFF","start":"'.$splDiasDeshabilitados[$i].' 00:00:00","end":"'.$splDiasDeshabilitados[$i].' 23:59:00","habil":"false"}'; 
                                }else{
                                 $bufferGlobalCal=$bufferGlobalCal.',{ "id":"'.$id_medico.'","title":"Habilitar o Deshabilitar Dia","descripcion":"No Laboral","color":"#000000", "textColor":"#FFFFFF","start":"'.$splDiasDeshabilitados[$i].' 00:00:00","end":"'.$splDiasDeshabilitados[$i].' 23:59:00","habil":"false"}'; 
                                }
                                                            
                               
                               
                            }
               
                 
                 
           
                 
                 echo "[".$bufferGlobalCal."]";
                 
                 /*
                 if($row_cnt){
                    echo $buffer;
                 }else{
                      echo "false";
                 }*/
                
 

?>