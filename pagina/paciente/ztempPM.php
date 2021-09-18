<?php
header("Content-Type: text/html; charset=utf-8");
include('../../dist/includes/dbcon.php');
session_start();
$cum="";
$comando="";
$buffer='';
$existe=0;
$expedientecum	="";
$principioactivo="";	
$consecutivocum	="";
$producto	="";
$unidad	="";
$atc	="";
$descripcionatc	="";
$viaadministracion	="";
$formafarmaceutica="";
$posologia="";
$x=0;
$id_sesion="";
if(isset($_SESSION['id'])){$id_sesion=$_SESSION['id'];}
if(isset($_REQUEST['id_sesion'])){$id_sesion=$_REQUEST['id_sesion'];}
if(isset($_REQUEST['posologia'])){$posologia=$_REQUEST['posologia'];}
if(isset($_REQUEST['expedientecum'])){$expedientecum=$_REQUEST['expedientecum'];}
if(isset($_REQUEST['principioactivo'])){$principioactivo=$_REQUEST['principioactivo'];}
if(isset($_REQUEST['consecutivocum'])){$consecutivocum=$_REQUEST['consecutivocum'];}
if(isset($_REQUEST['producto'])){$producto=$_REQUEST['producto'];}
if(isset($_REQUEST['unidad'])){$unidad=$_REQUEST['unidad'];}
if(isset($_REQUEST['atc'])){$atc=$_REQUEST['atc'];}
if(isset($_REQUEST['descripcionatc'])){$descripcionatc=$_REQUEST['descripcionatc'];}
if(isset($_REQUEST['viaadministracion'])){$viaadministracion=$_REQUEST['viaadministracion'];}
if(isset($_REQUEST['formafarmaceutica'])){$formafarmaceutica=$_REQUEST['formafarmaceutica'];}

    
if(isset($_REQUEST['comando'])){
  
    $comando=$_REQUEST['comando'];
   

 switch($comando){
 
            
        case 'insertar':
         
            $consulta = mysqli_query( $con, "SELECT * FROM `ztemporal_planmanejo` WHERE expedientecum='".$expedientecum."'" )or die( mysqli_error() );   
         
           $existe=0;
            if (mysqli_num_rows($consulta) == 0) 
                { 
               // echo "No existen registros en la base de datos."; 
                       $query = mysqli_query( $con, "INSERT INTO `ztemporal_planmanejo` (`expedientecum`, `principioactivo`, `consecutivocum`, `producto`, `unidad`, `atc`, `descripcionatc`, `viaadministracion`, `formafarmaceutica`, `posologia`, `id_sesion`) VALUES ( '".$expedientecum."', '".$principioactivo."', '".$consecutivocum."', '".$producto."', '".$unidad."', '".$atc."', '".$descripcionatc."', '".$viaadministracion."', '".$formafarmaceutica."', '".utf8_encode($posologia)."', '".$id_sesion."');");
                }else{
                $existe=1;
            }
         
  

         break;
     case 'actualizar':
      
         
          $query = mysqli_query( $con, "UPDATE `ztemporal_planmanejo` SET `principioactivo`='".$principioactivo."',`producto`='".$producto."',`unidad`='".$unidad."',`atc`='".$atc."',`descripcionatc`='".$descripcionatc."',`viaadministracion`='".$viaadministracion."',`formafarmaceutica`='".$formafarmaceutica."',`posologia`='".$posologia."',`id_sesion`='".$id."' WHERE `expedientecum`='".$expedientecum."' AND `id_sesion`='".$id_sesion."'");
         break;
         
    case 'limpiar':
          $query = mysqli_query( $con, " DELETE FROM `ztemporal_planmanejo` WHERE `id_sesion`='".$id_sesion."'");
         break;
         
    case 'eliminar':
          $query = mysqli_query( $con, " DELETE FROM `ztemporal_planmanejo`  WHERE `expedientecum`='".$expedientecum."' AND `expedientecum`='".$expedientecum."' AND `id_sesion`='".$id_sesion."'");
         
         break;
        
     default:
           $query = mysqli_query( $con, "SELECT * FROM `ztemporal_planmanejo` WHERE `id_sesion`='".$id_sesion."'" )or die( mysqli_error() ); 
       
         break;
         
 }
   // echo "Numero <br>";
$query = mysqli_query( $con, "SELECT * FROM `ztemporal_planmanejo` WHERE `id_sesion`='".$id_sesion."'" )or die( mysqli_error() );     
    $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    
   if($x==0) {
   $buffer=$buffer.$row['expedientecum']."#$".$row['principioactivo']."#$".$row['consecutivocum']."#$".$row['producto']."#$".$row['atc']."#$".utf8_encode($row['descripcionatc'])."#$".utf8_encode($row['viaadministracion'])."#$".utf8_encode($row['formafarmaceutica'])."#$".utf8_encode($row['posologia'])."#$".$row['unidad']."";
    $x++;
    if($x>25){
        break;
    }
}else{
       $buffer=$buffer."#_#".$row['expedientecum']."#$".$row['principioactivo']."#$".$row['consecutivocum']."#$".$row['producto']."#$".$row['atc']."#$".utf8_encode($row['descripcionatc'])."#$".utf8_encode($row['viaadministracion'])."#$".utf8_encode($row['formafarmaceutica'])."#$".utf8_encode($row['posologia'])."#$".$row['unidad'];
    $x++;
    if($x>25){
        break;
    }
   }
}
$buffer = str_replace( ')', ']', $buffer );
$buffer = str_replace( '(', '[', $buffer );
     $row_cnt = mysqli_num_rows($query);
    if($existe==1){
       echo "existe";
    }else{
         echo $buffer."??_$".$x;
    }

}
?>