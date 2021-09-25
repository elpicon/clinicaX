<?php
session_start();
include('../../dist/includes/dbcon.php');
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
if(isset($_POST['grupoServicio'])){
    $grupoServicio=$_POST['grupoServicio'];
    
}
$buffer;
$x=0;
 $query = mysqli_query( $con, "SELECT * FROM cupspyp WHERE grupo='$grupoServicio' AND contratado='SI' " )or die( mysqli_error() );
 
$html="<div class='form-group'>";
   $row;
     
                        $row_cnt = mysqli_num_rows($query);
             while ( $row = mysqli_fetch_array( $query ) ) {
                 
            
                        $html=$html."
                 <div class='col-lg-12 col-md-12 col-ssm-12 col-xs-12'>
                 <input class='form-check-input' type='checkbox' value='".$row['cups']."' name='chequeoSM' id='sm".$row['cups']."'>".$row['nombrecups']."</input>
                 </div>";
                   
                
                     
                        $x++;
                    }
                    $jsvars=$html."</div></br>" ;
                    echo _convert($jsvars);
                    
?>