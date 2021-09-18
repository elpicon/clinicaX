<?php
header("Content-Type: text/html; charset=utf-8");
include('../../dist/includes/dbcon.php');
session_start();
$cum="";
$buffer='';
if(isset($_REQUEST['cum'])){$cum=$_REQUEST['cum'];}
$numero=false;
if(is_numeric($cum)){
   // echo "Numero <br>";
    


     $query = mysqli_query( $con, "SELECT `expedientecum`,`principioactivo`, `consecutivocum`,`producto`, `unidad`, `atc`, `descripcionatc`, `viaadministracion`, `formafarmaceutica` FROM cum WHERE expedientecum like '%".$cum."%'" )or die( mysqli_error() ); 
}else{
    if(is_string($cum)){
       // echo "String <br>";
     $query = mysqli_query( $con, "SELECT `expedientecum`,`principioactivo`, `consecutivocum`,`producto`, `unidad`, `atc`, `descripcionatc`, `viaadministracion`, `formafarmaceutica` FROM cum WHERE producto like '".$cum."%' OR principioactivo like '%".$cum."%'" )or die( mysqli_error() ); 
     }
    }

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    
    $buffer= $buffer."<option name='".$row['expedientecum']."-".$row['consecutivocum']."' data-cum='".$row['atc']."#$".$row['expedientecum']."#$".$row['consecutivocum']."#$".$row['viaadministracion']."#$".$row['formafarmaceutica']."#$".utf8_encode($row['producto'])."#$".utf8_encode($row['unidad'])."#$".utf8_encode($row['descripcionatc'])."#$".utf8_encode($row['principioactivo'])."' >".$row['expedientecum']."-".$row['consecutivocum']." ".utf8_encode($row['producto'])." ".utf8_encode($row['principioactivo'])."</option>";
    
    $x++;
    if($x>50){
        break;
    }
}
$buffer = str_replace( ')', ']', $buffer );
$buffer = str_replace( '(', '[', $buffer );
echo $buffer;
?>