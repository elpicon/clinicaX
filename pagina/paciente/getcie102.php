<?php
include('../../dist/includes/dbcon.php');

$descripcion=$_REQUEST['descripcion'];
     $length = strlen(utf8_decode($descripcion));

     
      $x = 0;

    if($length>=7){
  $result = mysqli_query( $con, "SELECT * FROM categoriasCie10 WHERE descripcion LIKE '$descripcion%' OR descripcion LIKE '___' OR descripcion LIKE '____'  " )or die( mysqli_error() );
      
  $bufer;

  while ($row = mysqli_fetch_assoc($result)) {
     //var_dump($row);
    
$bufer=$bufer.'<option data-value='.utf8_encode($row['clave']).'>'.utf8_encode($row['clave']).'__'.utf8_encode($row['descripcion']).'</option>';

   }



echo $bufer;
}else{
    if($length<=3){
       $result = mysqli_query( $con, "SELECT * FROM categoriasCie10 WHERE   descripcion LIKE '___' OR clave LIKE '$descripcion%%%' " )or die( mysqli_error() );
    }else{
    $result = mysqli_query( $con, "SELECT * FROM categoriasCie10 WHERE descripcion LIKE '___' OR descripcion LIKE '____' OR descripcion LIKE '_____' OR descripcion LIKE '______' OR descripcion LIKE '_______'" )or die( mysqli_error() );
    }
  $bufer;

  while ($row = mysqli_fetch_assoc($result)) {
     //var_dump($row);
    
$bufer=$bufer.'<option data-value='.utf8_encode($row['clave']).'>'.utf8_encode($row['clave']).'__'.utf8_encode($row['descripcion']).'</option>';

   }

echo $bufer;
 
}
      
         

        
      
      ?>  