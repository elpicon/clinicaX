


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

	$grupo_empresa = $_POST['grupo_empresa'];//.
$idbdua=$_POST['idbdua'];//.
$codigoeps = $_POST['eps'];//.
$tipodedocumento = $_POST['tipodedocumento'];//.
$numerodedocumento = $_POST['numerodedocumento'];//.
$primerapellido = $_POST['primerapellido'];//.
$segundoapellido = $_POST['segundoapellido'];//.
$primernombre = $_POST['primernombre'];//.
$segundonombre = $_POST['segundonombre'];//.
$fechanto = $_POST['fecha_nacimiento'];//.
$genero = $_POST['genero'];//.
$nivel = $_POST['nivel'];// FALTA.
$departamento = $_POST['departamento'];//.
$municipio = $_POST['municipios'];//.
$grupopoblacional = $_POST['grupopoblacional'];//
$zona = $_POST['zona'];///FALTA
$fehcasgss = $_POST['fehcasgss'];//
$regimen = $_POST['regimen'];//
$tipodecontrato = $_POST['tipodecontrato'];//
$numerodecontrato = $_POST['numerodecontrato'];//
$estadodelfiliado = $_POST['estadodelafiliado'];//
$tipodesangre = $_POST['tipodesangre'];//
$direccion = $_POST['direccion']; //
$barrio = $_POST['barrio'];//
$correoelectronico = $_POST['correoelectronico'];//
$ocupacion = $_POST['ocupacion'];//
$telefono = $_POST['telefono'];//.
	$tipo = $_POST['tipo'];



$hoy = date("Y-m-d");
/*$theDate    = new DateTime($hoy);
$stringDate = $theDate->format('Y-m-d');
$date1 = new DateTime("$fechanto");
$date2 = new DateTime("$stringDate");
$diff = $date1->diff($date2);
echo $diff->y . ' Years ';*/

/*
if (!empty($_FILES['imagen']['name'])){
	# code...

$target_dir ="../usuario/subir_us/".$numerodedocumento."/";
	$target_file = $target_dir.basename($_FILES["imagen"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["imagen"]["tmp_name"]);
	if($check!==false) {
		echo "archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "el archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "lo siento, el archivo ya existe.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["imagen"]["size"]>900000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	*/



            
            
	mysqli_query($con,"update u_pacientes set tipodedocumento='$tipodedocumento', numerodedocumento='$numerodedocumento', idbdua='$idbdua',imagen='perfilimg.jpeg',primernombre='$primernombre',segundonombre='$segundonombre',primernombre='$primernombre',segundoapellido='$segundoapellido',celular='$telefono',genero='$genero',codigoeps='$codigoeps',ocupacion='$ocupacion',nivel='$nivel',grupopoblacional='$grupopoblacional',fechanto='$fechanto',direccion='$direccion',zona='$zona',fechasgss='$fehcasgss',regimen='$regimen',tipodecontrato='$tipodecontrato',numerodecontrato='$numerodecontrato',estadodelafiliado='$estadodelfiliado',tipodesangre='$tipodesangre',barrio='$barrio',correoelectronico='$correoelectronico',grupoempresarial='$grupo_empresa', departamento='$departamento',municipio='$municipio',fecha_registro='".date('Y-m-ds H:i:s', time())."'  where numerodedocumento='$numerodedocumento'")or die(mysqli_error($con));
            
            
            

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
echo "<script>document.location='../paciente/paciente.php'</script>";	
	//	header('Location:../usuario.php');	
	/*
		} else{
			echo "No se pudo subir.";
		}

}
else
{

	mysqli_query($con,"update u_pacientes set tipodedocumento='$tipodedocumento', numerodedocumento='$numerodedocumento', idbdua='$idbdua',imagen='',primernombre='$primernombre',segundonombre='$segundonombre',primernombre='$primernombre',segundoapellido='$segundoapellido',celular='$telefono',genero='$genero',codigoeps='$codigoeps',ocupacion='$ocupacion',nivel='$nivel',grupopoblacional='$grupopoblacional',fechanto='$fechanto',direccion='$direccion',zona='$zona',fechasgss='$fehcasgss',regimen='$regimen',tipodecontrato='$tipodecontrato',numerodecontrato='$numerodecontrato',estadodelafiliado='$estadodelfiliado',tipodesangre='$tipodesangre',barrio='$barrio',correoelectronico='$correoelectronico',grupoempresarial='$grupo_empresa', departamento='$departamento',municipio='$municipio',fecha_registro='".date('Y-m-ds H:i:s', time())."'  where numerodedocumento='$numerodedocumento'")or die(mysqli_error($con));

	echo "<script type='text/javascript'>alert(' actualizado correctamente!');</script>";
   echo "<script>document.location='../paciente/paciente.php'</script>";		

}
	*/


?>
