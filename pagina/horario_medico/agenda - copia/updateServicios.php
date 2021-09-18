<?php
include('dbcon.php');
$listSI;
$listNO;
$filas=0;
$bufferNO="";
$bufferSI="";
$codigoServicio;
   $a=0;
   $b=0;
$datoFlag;
   if(isset($_REQUEST['listNO'])){
       if(strcmp($_REQUEST['listNO'],"")){
       $x=0;
       $listNO=$_REQUEST['listNO'];
        $NO =explode(",", $listNO);
       while($x<count($NO)){
  
          if($x<1){
               $bufferNO=$bufferNO. " `CODIGO_DE_SERVICIO`='". $NO[$x]."' ";
              $datoFlag=$NO[$x];
          }else{
               $bufferNO=$bufferNO."OR `CODIGO_DE_SERVICIO`='". $NO[$x]."' ";
          }
           
          $x++;  
        }
         //echo "NO ". $bufferNO;
      $a=1;
       }
   }
   
   
   
   
   
if(isset($_REQUEST['listSI'])){ 
    if(strcmp($_REQUEST['listSI'],"")){
       $x=0;
       $listSI=$_REQUEST['listSI'];
       $SI =explode(",", $listSI);
       while($x<count($SI)){
  
          if($x<1){
               $bufferSI=$bufferSI. " `CODIGO_DE_SERVICIO`='". $SI[$x]."' ";
          }else{
               $bufferSI=$bufferSI."OR `CODIGO_DE_SERVICIO`='". $SI[$x]."' ";
          }
  
  $x++;  
        }
       
//echo "\nSI ". $bufferSI;
      $b=1;
    }
   }
   
 //  echo "b= ". $b;
   if($b==0){
        mysqli_query($con,"UPDATE `servicios_grupos` SET `habilitacion_citas`='0'  WHERE codigo='".$datoFlag[0]."'")or die(mysqli_error());
       //echo "<br>entro b 0= ". $datoFlag[0];
   }else{
        mysqli_query($con,"UPDATE `servicios_grupos` SET `habilitacion_citas`='1'  WHERE codigo='".$datoFlag[0]."'")or die(mysqli_error());
        // echo "<br>entro b 1= ". $datoFlag[0];
   }
   
   
   
if($a==1){
     mysqli_query($con,"UPDATE `servicios_h` SET `AMBULATORIO`='NO'  WHERE $bufferNO")or die(mysqli_error());
               //echo "Affected rows NO(INSERT): %d\n", mysqli_affected_rows($link);

}
 if($b==1){
    mysqli_query($con,"UPDATE `servicios_h` SET `AMBULATORIO`='SI'  WHERE $bufferSI")or die(mysqli_error());
       // echo "Affected rows SI(INSERT): %d\n", mysqli_affected_rows($link);
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