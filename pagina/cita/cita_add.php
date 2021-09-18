<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];

date_default_timezone_set('America/Lima');
$hoy=date("Y-m-d H:m");
	$id_medico = $_REQUEST['id_medico'];
$id_paciente = $_REQUEST['paciente'];
$observaciones = $_REQUEST['observaciones'];
$fecha = $_REQUEST['fecha'];
$horario = $_REQUEST['horario'];

$estado_cita = "reservado";
//$caja=0;


$id_usuario=$_SESSION['id'];
//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO cita(id_paciente,id_medico,fecha,estado_cita,observaciones,horario,ultima_modificacion)
				VALUES('$id_paciente','$id_medico','$fecha','$estado_cita','$observaciones','$horario','$hoy')")or die(mysqli_error($con));

			
//echo $id_paciente;
	echo "<script>document.location='../cita/cita_agregar.php'</script>";	

?>
