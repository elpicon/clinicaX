<?php
include('../../dist/includes/dbcon.php');
$listSI;
$listNO;
$filas=0;
$bufferNO="";
$bufferSI="";
$codigoServicio;
$grupo=$_REQUEST["grupo"];

   $a=0;
   $b=0;
$datoFlag;
   if(isset($_REQUEST['medico'])&&isset($_REQUEST['seleccionados'])){
       
       if(strcmp($_REQUEST['medico'],"")&&strcmp($_REQUEST['seleccionados'],"")){
      
            mysqli_query($con,"UPDATE `usuario` SET `grupo_cups".$grupo."`='".$_REQUEST['seleccionados']."'  WHERE id='".$_REQUEST['medico']."'")or die(mysqli_error());
       }
   }
   
    
 if(mysqli_affected_rows($con)){
            $filas=1;
        }
//$con->query("UPDATE `servicios_h` SET`AMBULATORIO`='NO' WHERE `CODIGO_DE_SERVICIO`='129'");
//echo "Affected rows (UPDATE): %d\n", $con->affected_rows;


if($filas==1){
       echo "Exitoso"; 
}else{
    echo "Fallido";
}

?>