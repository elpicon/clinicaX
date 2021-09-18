<?php
include('../../dist/includes/dbcon.php');
session_start();
$codigo="";
$buffer="";
if(isset($_REQUEST['codigo'])){
    $codigo=$_REQUEST['codigo'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM aseguradoras WHERE codigo ='$codigo'" )or die( mysqli_error() );

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer.utf8_encode($row['codigo'])."#$".$row['tipoadministradora']."#$".$row['identificacion']."#$".$row['direccion']."#$".$row['latitud']."#$".$row['longitud']."#$".$row['correoelectronico']."#$".$row['telefono']."#$".$row['regimen']."#$".$row['cuentacxc']."#$".$row['generarripspor']."#$".$row['cuentaorden']."#$".$row['codigopararips']."#$".$row['auditor']."#$".$row['cobertura']."#$".$row['rcmp_descaf']."#$".$row['rrch_sedefact']."#$"." ".utf8_encode($row['nombre']);
    $x++;
    if($x>19){
        break;
    }
}
}
echo $buffer;
?>