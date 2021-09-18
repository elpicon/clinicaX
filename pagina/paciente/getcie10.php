<?php
include('../../dist/includes/dbcon.php');

$clave=$_REQUEST['clave'];
     
  $x = 0;
  $result = mysqli_query( $con, "SELECT * FROM categoriasCie10 WHERE clave LIKE '$clave%' " )or die( mysqli_error() );
  $bufer;

while ($row = mysqli_fetch_assoc($result)) {
     //var_dump($row);
     
$bufer=$bufer.'<option data-value='.utf8_encode($row['clave']).'>'.utf8_encode($row['clave']).'__'.utf8_encode($row['descripcion']).'</option>';
$x++;
}



echo $bufer;

      
         

        
      
      ?>  