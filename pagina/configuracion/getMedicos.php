<?php
include('../../dist/includes/dbcon.php');
session_start();

if(isset($_REQUEST['datomedico'])){
$datomedico=$_REQUEST['datomedico'];
}
$length = strlen(utf8_decode($datomedico));

     
      $x = 0;
       $result = mysqli_query( $con, "SELECT * FROM usuario WHERE  (id LIKE '$datomedico%' OR nombre LIKE '$datomedico%' OR apellido LIKE '$datomedico%' ) AND tipo='medico'" )or die( mysqli_error() );
    $bufer="";

  while ($row = mysqli_fetch_assoc($result)) {
     //var_dump($row);
    
$bufer=$bufer.'<option data-value='.utf8_encode($row['id']).'>'.$row['id']." ".utf8_encode($row['nombre']).' '.utf8_encode($row['apellido']).'</option>';
if($x>26){break;}
      $x++;
   }

echo  trim($bufer);;
 

      
         

        
      
      ?>  