<?php
session_start();
include('../../dist/includes/dbcon.php');

$codigo="";
$buffer="";
if(isset($_POST['codigo'])&&isset($_POST['entidad'])){
    $codigo=$_POST['codigo'];
    $entidad=$_POST['entidad'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM contratos WHERE codigo like '%".$codigo."%' AND entidad='".$entidad."'" )or die( mysqli_error() );

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
        
      
    