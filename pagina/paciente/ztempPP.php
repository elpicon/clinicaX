<?php
header("Content-Type: text/html; charset=utf-8");
include('../../dist/includes/dbcon.php');
session_start();
$id_sesion="";
if(isset($_SESSION['id'])){$id_sesion=$_SESSION['id'];}
$descripcion="";
$comando="";
$unidad="";
$buffer='';
$existe=0;
$x=0;

if(isset($_REQUEST['cups'])){$cups=$_REQUEST['cups'];}
if(isset($_REQUEST['unidad'])){$unidad=$_REQUEST['unidad'];}
if(isset($_REQUEST['descripcion'])){$descripcion=$_REQUEST['descripcion'];}

    
if(isset($_REQUEST['comando'])){
  
    $comando=$_REQUEST['comando'];
   

 switch($comando){
 
     case 'insertar':
         
            $consulta = mysqli_query( $con, "SELECT * FROM `ztemporal_procedimiento` WHERE `cups`='".$cups."' AND id_sesion='".$id_sesion."'"  )or die( mysqli_error() );   
         
           $existe=0;
            if (mysqli_num_rows($consulta) == 0) 
                { 
               // echo "No existen registros en la base de datos."; 
                       $query = mysqli_query( $con, "INSERT INTO `ztemporal_procedimiento` (`cups`,`descripcion`,`id_sesion`,`unidad`) VALUES ( '".$cups."', '".$descripcion."', '".$id_sesion."', '".$unidad."');");
                }else{
                $existe=1;
            }

         break;
         
    case 'limpiar':
          $query = mysqli_query( $con, " DELETE FROM `ztemporal_procedimiento` WHERE `id_sesion`='".$id_sesion."'");
         break;
         
    case 'eliminar':
          $query = mysqli_query( $con, " DELETE FROM `ztemporal_procedimiento`  WHERE `cups`='".$cups."' AND  `id_sesion`='".$id_sesion."'");
         
         break;
        
     default:
           $query = mysqli_query( $con, "SELECT * FROM `ztemporal_procedimiento` WHERE `id_sesion`='".$id_sesion."'" )or die( mysqli_error() ); 
       
         break;
         
 }
   // echo "Numero <br>";
$query = mysqli_query( $con, "SELECT * FROM `ztemporal_procedimiento` WHERE `id_sesion`='".$id_sesion."'" )or die( mysqli_error() );     
    $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    
   if($x==0) {
   $buffer=$buffer.$row['cups']."#$".$row['descripcion']."#$".$row['unidad']."";
    $x++;
    if($x>25){
        break;
    }
}else{
       $buffer=$buffer."#_#".$row['cups']."#$".$row['descripcion']."#$".$row['unidad']."";
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