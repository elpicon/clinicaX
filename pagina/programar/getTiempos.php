<?php
include('dbcon.php');
session_start();

 if(isset($_REQUEST['comando'])&&isset($_REQUEST['temporalidad'])){
     $temporalidad=$_REQUEST['temporalidad'];
if($temporalidad==20|$temporalidad==15|$temporalidad==5){
  

$query = mysqli_query( $con, "SELECT * FROM horario".$temporalidad." WHERE 1 " )or die( mysqli_error() );
          
         $row_cnt=0;
         $buffer="<option value=''>--:--</option>";
          while ( $row = mysqli_fetch_array( $query ) ) {
              $buffer=$buffer. "<option value='".$row['id_horario']."'>".$row['nombre_horario']."</option>";
              $row_cnt++;
          }
          echo($buffer);
 }   else{
    echo "false";
}
}
          
?>