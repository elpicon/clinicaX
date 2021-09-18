<?php
include('../../dist/includes/dbcon.php');
session_start();
$medico="";
$buffer="";
if(isset($_REQUEST['medico'])&&isset($_REQUEST['grupo'])){
    if(strcmp($_REQUEST['grupo'],"")){
    $medico=$_REQUEST['medico'];
    $grupo=$_REQUEST['grupo'];

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM usuario WHERE id like '".$medico."'" )or die( mysqli_error() );

    
  $x=0;
$row = mysqli_fetch_assoc($query);
  
$buffer=$row["grupo_cups".$grupo];

echo $buffer;
    }
}else{
    echo "error";
}

?>