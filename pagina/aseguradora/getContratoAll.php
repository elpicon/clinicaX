<?php
include('../../dist/includes/dbcon.php');
session_start();
$codigo="";
$buffer="";
if(isset($_REQUEST['codigo'])){
    $codigo=$_REQUEST['codigo'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM contratos WHERE codigo = '".$codigo."'" )or die( mysqli_error() );

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer.$row['codigo']."#&$".$row['entidad']."#&$".$row['ciudad']."#&$".$row['fechainicio']."#&$".$row['fechafin']."#&$".$row['valorcontrato']."#&$".$row['objeto']."#&$".$row['regimen']."#&$".$row['alcance']."#&$".$row['coberturas']."#&$".$row['nivel']."#&$".$row['tipocontrato']."#&$".$row['modalidad']."#&$".$row['tarifacups']."#&$".$row['porcentajecup']."#&$".$row['tarifacum']."#&$".$row['porcentajecum']."#&$".$row['ctlp']."#&$".$row['ctlm']."#&$".$row['ctlma']."#&$".$row['csamyh']."#&$".$row['ctlp_cubrimiento']."#&$".$row['ctlm_cubrimiento']."#&$".$row['ctlma_cubrimiento']."#&$".$row['permite_fijar_copago']."#&$".$row['cobra_cm']."#&$".$row['cobra_cr']."#&$".$row['requiere_aut']."#&$".$row['requiere_vale']."#&$".$row['requiere_codigo_validacion'];
    $x++;
    if($x>19){
        break;
    }
}
}

echo $buffer;
?>