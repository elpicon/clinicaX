 <?php

include('../../../dist/includes/dbcon.php');
 include '../../layout/session.php';
 @session_start();
date_default_timezone_set('America/Lima');
 
 if(isset($_REQUEST['id_empresa'])&&isset($_REQUEST['id_sede'])&&isset($_REQUEST['tipo'])&&isset($_REQUEST['accion'])){
     $id_empresa=$_REQUEST['id_empresa'];
     $id_sede=$_REQUEST['id_sede'];
     $tipo=$_REQUEST['tipo'];
     $accion=$_REQUEST['accion'];
     
$buffer="";

if(!strcmp($accion,'label')){
            $query=mysqli_query($con,"select * from empresa  where id_empresa='$id_grupo_empresa' AND id_sede = '$id_sede'")or die(mysqli_error());
                while($row=mysqli_fetch_array($query)){
              
              $buffer=$row['nombre_sede'];
                      
                     
                }
                 echo $buffer;
}

if(!strcmp($accion,'medico')){
              $queryc=mysqli_query($con,"select * from usuario  where id_grupo_empresa='$id_grupo_empresa' AND id_sede like '%$id_sede%' AND tipo='medico'")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
              
                      if(!strcmp($tipo,'medico'))  {
                                     if(!strcmp($rowc['id'],$id)) {
                                     $buffer= $buffer."<option value=".$rowc['id']." selected><small>
                                     ".strtoupper($rowc['nombre'])."  ".strtoupper($rowc['apellido'])."</small></option>";
                        }
                                    
                      }else{
                             $buffer= $buffer."<option value=".$rowc['id']." ><small>
                                     ".strtoupper($rowc['nombre'])."  ".strtoupper($rowc['apellido'])."</small></option>";
                      }
                      
                     
 }
 echo $buffer;
 }
 
 }
 ?>