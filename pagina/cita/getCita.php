<?php
session_start();
include('../../dist/includes/dbcon.php');



//$horario = array();
//echo("This is an empty array.\n");



$fechasel="";
$tipo_usuario=$_POST['tipo_usuario'];
$fechasel=$_POST['fechasel'];
$id_medico=$_POST['id_medico'];   
//echo $id_medico." ".$fechasel;
     $id_paciente;
   
     $fecha;
     $horario=array();
     $estadocita;
     $id_horario=0;
     $nombre_horario;
     $bufferhorario;
     $nombre_paciente;
     $apellido_paciente;
     $nombre_medico;
     $apellido_medico;
     $z;
     
         
     $alt=0;
  $x = 0;
  $result2 = mysqli_query( $con, "SELECT * FROM cita WHERE id_medico='$id_medico' AND fecha = '$fechasel' AND estado_cita = 'reservado' " )or die( mysqli_error() );
while ($row2 = mysqli_fetch_assoc($result2)) {
   $id_cita[$x] =$row2['id_cita'];
     $id_paciente =$row2['id_paciente'];
     $observaciones[$x] =$row2['observaciones'];
     $id_medico=$row2['id_medico'];
     $fecha=$row2['fecha'];
     $horario[$x]=$row2['horario'];
     $estadocita[$x]=$row2['estado_cita'];
     
      // echo "<br><br>Horario ".$horario[$x]." Fecha ".$fecha." Paciente ".$id_paciente." Medico ".$id_medico;
       
       $result3 = mysqli_query( $con, "SELECT * FROM u_pacientes WHERE numerodedocumento = '$id_paciente' " )or die( mysqli_error() );
                    while ($row3 = mysqli_fetch_assoc($result3)) {
                        $nombre_paciente[$x]=$row3['primernombre'];
                        $apellido_paciente[$x]=$row3['primerapellido']." ".$row3['segundoapellido'];
                    }
                       // echo "<br>Nombre Paciente ".$nombre_paciente[$x]."Apellido Paciente ".$apellido_paciente[$x];
                    
       $result4 = mysqli_query( $con, "SELECT * FROM usuario WHERE id = '$id_medico' " )or die( mysqli_error() );
                    while ($row4 = mysqli_fetch_assoc($result4)) {
                        $nombre_medico[$x]=$row4['nombre'];
                        $apellido_medico[$x]=$row4['apellido'];
                          
                    }
                   // echo "<br>Nombre Medico ".$nombre_medico[$x]."Apellido Medico ".$apellido_medico[$x];
                    
                 
                    
                    
   $x++;
}

 $query = mysqli_query( $con, "SELECT * FROM horario15 WHERE 1 " )or die( mysqli_error() );
          $i = 0;
        
          while ( $row = mysqli_fetch_array( $query ) ) {
              $id_horario = $row[ 'id_horario' ];
              $nombre_horario = $row[ 'nombre_horario' ];
              $bufferhorario = $row[ 'nombre_horario' ];
              
            //  echo "<br>ID Horario DB ".$id_horario."Horario Cita ".$horario[$i]."<br>";
              
              $row_cnt = mysqli_num_rows($query);
            
           
             if(count($horario)==0){
                    $z=1;
                }else{
                 for ($j = 0; $j <= $row_cnt; $j++) {
                
               
               
                 for ($i = 0; $i < count($horario); $i++) {
                     
                     if($horario[$i]===$id_horario){
                    //echo $id_horario."__".$horario[$i]." ".count($horario);
                    // echo "<br>".$id_horario." ---".$horario[$i]." " ;
                    $j=$row_cnt;
                    $confirma="¿Está seguro de que quieres eliminar??";
                    if($alt==1){
                    echo "<tr class='alt'>
                            <td><small>".strtoupper($nombre_paciente[$i])." ".strtoupper($apellido_paciente[$i])."</small></td>
                            <td>$nombre_horario</td>
                            <td><small>".strtoupper($nombre_medico[$i])." ".strtoupper($apellido_medico[$i])."</small></td>
                            <td>".strtoupper($estadocita[$i])."</td>
                            <td>
                            <a class='btn btn-sm myButton2 ' style='background-color:transparent'><div style='text-align:left;'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg></div></a>
                            <a class='btn btn-sm myButton3  btn-print' role='button' style='background-color:transparent'  href='../cita/eliminar_cita.php?id_cita=".$id_cita[$i]."&idpag=agregar&observaciones=".$observaciones[$i]."__Cancelado por: ".$tipo_usuario.":' onClick=\"return confirm('$confirma')\"><div style='text-align:left;'><i class='fa fa-trash'></i></div>  </a>
                            </td>
                        </tr>";
                        }else{
                     echo "<tr >
                            <td><small>".strtoupper($nombre_paciente[$i])." ".strtoupper($apellido_paciente[$i])."</small></td>
                            <td>$nombre_horario</td>
                            <td><small>".strtoupper($nombre_medico[$i])." ".strtoupper($apellido_medico[$i])."</small></td>
                            <td>".strtoupper($estadocita[$i])."</td>
                            <td><a class='btn btn-sm myButton2 ' style='background-color:transparent'><div style='text-align:left;'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg></div></a>
                             <a class='btn btn-sm myButton3  btn-print' role='button' style='background-color:transparent'  href='../cita/eliminar_cita.php?id_cita=".$id_cita[$i]."&idpag=agregar&observaciones=".$observaciones[$i]."__Cancelado por: ".$tipo_usuario.":' onClick=\"return confirm('".$confirma."')\"><div style='text-align:left;'><i class='fa fa-trash'></i></div>  </a>
                             </td>
                        </tr>"; 
                      
                  }
                  $z=0;
                  break;
                }else{
                    $z=1;
                }
                
                 }
            }
            }
            
         // echo "<br>NAnananana" ;  
            
            // Imprime 4
           
              
              if($z==1){
                  if($alt==1){
                  echo "<tr class='alt'>
                            <td>-------------  -------------</td>
                            <td>".$nombre_horario."</td>
                            <td>-------------  -------------</td>
                            <td>LIBRE</td>
                            <td>
                            <button type='button' class='btn btn-sm myButton1' data-toggle='modal' data-target='#Employee' onclick='horarioSeleccionado(".$id_horario." )'><i class='fa fa-check'></i>".$id_horario."</button>  
                           </td>
                        </tr>";
                        
                        
                   
                  }else{
                      echo "<tr>
                            <td>-------------  -------------</td>
                            <td>".$nombre_horario."</td>
                            <td>-------------  -------------</td>
                            <td>LIBRE</td>
                            <td>
                           <button type='button' class='btn btn-sm myButton1' data-toggle='modal' data-target='#Employee' onclick='horarioSeleccionado(".$id_horario." )'><i class='fa fa-check'></i>".$id_horario."</button>  
                           </td>
                        </tr>";
                       
                      
                  }
                  $z=0;
              }
              
              $alt++;
              if($alt==2){$alt=0;}
               $i++;
          }
           



      ?>  