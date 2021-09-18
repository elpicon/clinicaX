<?php
include('../../dist/includes/dbcon.php');
session_start();
$CUPS="";
$buffer="";
if(isset($_REQUEST['cups'])){$CUPS=$_REQUEST['cups'];}
$numero=false;
if(is_numeric($CUPS)){
    echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM cups WHERE CUPS like '".$CUPS."%'" )or die( mysqli_error() );
}else{
    if(is_string($CUPS)){
        echo "String <br>";
     $query = mysqli_query( $con, "SELECT * FROM cups WHERE DESCRIPCION like '".$CUPS."%'" )or die( mysqli_error() ); 
     }
    }
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