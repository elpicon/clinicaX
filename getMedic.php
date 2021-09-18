<?php
include('../../dist/includes/dbcon.php');
session_start();
$cum="";
$buffer="";
if(isset($_REQUEST['cum'])){$CUPS=$_REQUEST['cum'];}
$numero=false;
if(is_numeric($cum)){
    echo "Numero <br>";
     $query = mysqli_query( $con, "SELECT `expedientecum`, `consecutivocum`,`producto`, `unidad`, `atc`, `descripcionatc`, `viaadministracion`, `formafarmaceutica` FROM cum WHERE expedientecum like '".$cum."%'" )or die( mysqli_error() ); 
}else{
    if(is_string($cum)){
       // echo "String <br>";
     $query = mysqli_query( $con, "SELECT `expedientecum`, `consecutivocum`,`producto`, `unidad`, `atc`, `descripcionatc`, `viaadministracion`, `formafarmaceutica` FROM cum WHERE producto like '".$cum."%'" )or die( mysqli_error() ); 
     }
    }
SELECT  FROM `desubir_1` WHERE 1;
  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer."<option data-value'".utf8_encode($row['DESCRIPCION'])."' >".$row['CUPS']." ".utf8_encode($row['DESCRIPCION'])."</option><br>";
    $x++;
    if($x>19){
        break;
    }
}

echo $buffer;
?>