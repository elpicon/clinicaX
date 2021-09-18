<?php
include('../../dist/includes/dbcon.php');
session_start();
$codigo="";
$buffer="";
if(isset($_REQUEST['cuenta'])){
    $cuenta=$_REQUEST['cuenta'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM plan_unico_cuentas WHERE Cuenta like '$cuenta%'" )or die( mysqli_error() );

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
   
    $buffer= $buffer."<option data-value'".utf8_encode($row['Cuenta'])."' >".$row['Cuenta']." ".utf8_encode($row['Nombre de la Cuenta'])."</option>";

    $x++;
    if($x>19){
        break;
    }
}
}
echo $buffer;
?>