<?php
include('../../dist/includes/dbcon.php');
session_start();
$identificacion="";
$buffer="";
if(isset($_REQUEST['identificacion'])){
    $identificacion=$_REQUEST['identificacion'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM aseguradoras WHERE identificacion like '%".$identificacion."%'" )or die( mysqli_error() );

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer."<option data-value'".utf8_encode($row['identificacion'])."' >".$row['identificacion']." ".utf8_encode($row['nombre'])."</option>";
    $x++;
    if($x>19){
        break;
    }
}
}
echo $buffer;
?>