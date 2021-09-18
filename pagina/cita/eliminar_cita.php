<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
date_default_timezone_set('America/Lima');
endif;

include('../../dist/includes/dbcon.php');
$hoy=date("Y-m-d H:m");

          if(isset($_REQUEST['id_cita']))
            {
                $idpag=$_REQUEST['idpag'];
              $id_cita=$_REQUEST['id_cita'];
              $observaciones=$_REQUEST['observaciones'];
            }
            else
            {
                $idpag=$_POST['idpag'];
            $id_cita=$_POST['id_cita'];
            $observaciones=$_POST['observaciones'];
          }


	mysqli_query($con,"update cita set estado_cita='cancelado',observaciones='$observaciones',ultima_modificacion='$hoy' where id_cita='$id_cita'")or die(mysqli_error());
   
 if(!strcmp($idpag, "agregar")){
     echo "<script>document.location='../cita/cita_agregar.php'</script>"; 
 }else{
   echo "<script>document.location='../cita/cita.php'</script>"; 
}
     // header('Location:../usuario.php');
?>