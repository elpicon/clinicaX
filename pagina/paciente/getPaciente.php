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
if(is_numeric($paciente)){
    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM u_pacientes WHERE numerodedocumento like '".$paciente."%'" )or die( mysqli_error() );
}else{
    if(is_string($paciente)){
        //echo "String <br>";
     $query = mysqli_query( $con, "SELECT * FROM u_pacientes WHERE primerapellido like '".$paciente."%'" )or die( mysqli_error() ); 
     }
    }
    
  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer."
    <option data-value='".utf8_encode($row['numerodedocumento'])."' >".$row['numerodedocumento']." ".utf8_encode($row['primernombre'])." ".utf8_encode($row['segundonombre'])." ".utf8_encode($row['primerapellido'])." ".utf8_encode($row['segundoapellido'])."</option>"."$#$".$row['genero'].",".$row['nivel'].",".$row['fechanto'];
    $x++;
    if($x>19){
        break;
    }
}
}
echo $buffer;
?>