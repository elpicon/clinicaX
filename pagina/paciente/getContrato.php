<?php
include('../../dist/includes/dbcon.php');
session_start();
$codigo="";
$buffer="";
if(isset($_REQUEST['codigo'])&&isset($_REQUEST['entidad'])){
    $codigo=$_REQUEST['codigo'];
    $entidad=$_REQUEST['entidad'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM contratos WHERE codigo like '%".$codigo."%' AND entidad=".$entidad )or die( mysqli_error() );

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer."<option data-value'".utf8_encode($row['codigo'])."' >".$row['codigo']." ".utf8_encode($row['objeto'])."</option>";
    $x++;
    if($x>19){
        break;
    }
}
}
echo $buffer;
?>
        
      
    