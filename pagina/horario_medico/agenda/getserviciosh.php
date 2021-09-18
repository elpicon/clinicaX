<?php

include('dbcon.php');
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
if(isset($_REQUEST['grupoServicio'])){
    $grupoServicio=$_REQUEST['grupoServicio'];
    
}
$buffer;
$x=0;
 $query = mysqli_query( $con, "SELECT * FROM servicios_h WHERE GRUPO_DE_SERVICIO='$grupoServicio' " )or die( mysqli_error() );
 
$html="<div class='form-group'>";
   $row;
     
                        $row_cnt = mysqli_num_rows($query);
             while ( $row = mysqli_fetch_array( $query ) ) {
                 
               if(!strcmp($row["AMBULATORIO"], "SI")){
                        $html=$html."
                 <div class='col-lg-12'>
                 <input class='form-check-input' type='checkbox' value='".$row['CODIGO_DE_SERVICIO']."' name='chequeo' id='s".$row['CODIGO_DE_SERVICIO']."(this)' checked>".$row['NOMBRE_DE_SERVICIO']."</input>
                 </div>";
                   }else{
                        $html=$html."
                 <div class='col-lg-12'>
                 <input class='form-check-input' type='checkbox' value='".$row['CODIGO_DE_SERVICIO']."' name='chequeo' id='s".$row['CODIGO_DE_SERVICIO']."(this)'>".$row['NOMBRE_DE_SERVICIO']."</input>
                 </div>";
                   }
                    
                        $x++;
                    }
                    $jsvars=$html."</div></br>" ;
                    echo _convert($jsvars);
                    
?>