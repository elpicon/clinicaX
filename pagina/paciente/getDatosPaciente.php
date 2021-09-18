<?php
include('../../dist/includes/dbcon.php');
session_start();
$codigo="";
$buffer="";
if(isset($_REQUEST['paciente'])){
    $paciente=$_REQUEST['paciente'];
$numero=false;

    //echo "Numero <br>";
    $numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM u_pacientes WHERE numerodedocumento = '".$paciente."'" )or die( mysqli_error() );

    }
    
  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    
            $firstDate  = new DateTime($row['fechanto']);
            $secondDate = new DateTime(date("Y-m-d"));
            $intvl = $firstDate->diff($secondDate);
    
    $buffer= $buffer.$row['genero'].",".$row['nivel'].",".$row['fechanto'].",".$intvl->y.",".$intvl->m.",".$intvl->d.",".$row['direccion'].",".$row['celular'];
    $x++;
    if($x>19){
        break;
    }
}

echo $buffer;
?>