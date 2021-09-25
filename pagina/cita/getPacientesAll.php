<?php
session_start();
include('../../dist/includes/dbcon.php');

$codigo="";
$buffer="";
if(isset($_POST['codigo'])){
    $codigo=$_POST['codigo'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, "SELECT * FROM u_pacientes WHERE numerodedocumento = '".$codigo."'" )or die( mysqli_error() );

  $x=0;
      $row = mysqli_fetch_assoc($query);
    
      $query2 = mysqli_query( $con, "SELECT * FROM aseguradoras WHERE codigo = '".$row['codigoeps']."'" )or die( mysqli_error() );
    
    $row2 = mysqli_fetch_assoc($query2);
    
   $contratos= explode(",", $row['numerodecontrato']);
$bufferalcance="";
   for($i=0;$i< count($contratos);$i++){
       //echo "<br>".$i." ".$contratos[$i];
       $query3 = mysqli_query( $con, "SELECT * FROM contratos WHERE codigo ='".$contratos[$i]."'" )or die( mysqli_error() );
       $row3 = mysqli_fetch_assoc($query3) ;
         
       if($i==0){$bufferalcance=$bufferalcance.$row3['alcance'];}else{
           $bufferalcance=$bufferalcance.",".$row3['alcance'];
       }
   }
    //echo "<br> ".$bufferalcance;
    
    
    
    
    
   
      
        
    

   
}
$buffer= $row['numerodecontrato']."#$#".$row['codigoeps']."#$#".utf8_encode($row2['nombre'])."#$#".$bufferalcance;
echo $buffer;
?>
        
      
      