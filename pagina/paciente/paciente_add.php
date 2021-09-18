<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
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
$municipio = $_POST['municipio'];//.
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
$contrasena = $_POST['contrasena'];//.
$contrasenaconfirma = $_POST['contrasenaconfirma'];
$telefono = $_POST['telefono'];//.

	$tipo = $_POST['tipo'];
	

$hash = password_hash($contrasena, PASSWORD_DEFAULT, [15]);
	
	$celular=$telefono;
$ciudad = $departamento.",".$municipio;
$primerapellido = strtoupper($primerapellido);
$segundoapellido = strtoupper($segundoapellido);
$primernombre = strtoupper($primernombre);
$segundonombre = strtoupper($segundonombre);

$hoy = date("Y-m-d");
$theDate    = new DateTime($hoy);
$stringDate = $theDate->format('Y-m-d');
$date1 = new DateTime("$fechanto");
$date2 = new DateTime("$stringDate");
$diff = $date1->diff($date2);
echo $diff->y . ' Years ';

		$total = 0;

		
		if ($contrasena==$contrasenaconfirma) {
	$query2=mysqli_query($con,"select * from usuario where usuario='$numerodedocumento'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('usuario ya existe!');</script>";
		//	header('Location:../usuario.php');
	echo "<script>document.location='../paciente/paciente.php'</script>";		
		}
		else
		{

if (!empty($_FILES['imagen']['name'])){
    
 $path ="../usuario/subir_us/".$numerodedocumento."/";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}   
      
$target_dir = "../usuario/subir_us/".$numerodedocumento."/";
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
	if($_FILES["imagen"]["size"]>1000000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	
//encriptando contraseña
		///finzalizo encriptacion 38
			mysqli_query($con,"INSERT INTO u_pacientes(tipodedocumento,numerodedocumento,idbdua,contrasena,imagen,primernombre,segundonombre,primerapellido,segundoapellido,celular,genero,codigoeps,ocupacion,nivel,grupopoblacional,fechanto,direccion,zona,	fechasgss,regimen,tipodecontrato,numerodecontrato,estadodelafiliado,tipodesangre,barrio,correoelectronico,grupoempresarial,departamento,municipio,fecha_registro) VALUES('$tipodedocumento','$numerodedocumento','$idbdua','$hash','$img','$primernombre','$segundonombre','$primerapellido','$segundoapellido','$telefono','$genero','$codigoeps','$ocupacion','$nivel','$grupopoblacional','$fechanto','$direccion','$zona','$fehcasgss','$regimen','$tipodecontrato','$numerodecontrato','$estadodelfiliado','$tipodesangre','$barrio','$correoelectronico'
            ,'$grupo_empresa','$departamento','$municipio','".date('Y-m-ds H:i:s', time())."')")or die(mysqli_error($con));
	echo "<script>document.location='../paciente/paciente.php'</script>";	
	//header('Location:../usuario.php');

		} else{
			echo "No se pudo subir.";
		}



   
}
else{
		$pass=md5($contrasena);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;

mysqli_query($con,"INSERT INTO u_pacientes(tipodedocumento,numerodedocumento,idbdua,contrasena,imagen,primernombre,segundonombre,primerapellido,segundoapellido,celular,genero,codigoeps,ocupacion,nivel,grupopoblacional,fechanto,direccion,zona,	fechasgss,regimen,tipodecontrato,numerodecontrato,estadodelafiliado,tipodesangre,barrio,correoelectronico,grupoempresarial,departamento,municipio,fecha_registro) VALUES('$tipodedocumento','$numerodedocumento','$idbdua','$hash','',$primernombre','$segundonombre','$primerapellido','$segundoapellido','$telefono','$genero','$codigoeps','$ocupacion','$nivel','$grupopoblacional','$fechanto','$zona','$fehcasgss','$regimen','$tipodecontrato','$numerodecontrato','$estadodelfiliado','$tipodesangre','$direccion','$barrio','$correoelectronico'
            ,'$grupo_empresa','$departamento','$municipio','".date('Y-m-ds H:i:s', time())."')")or die(mysqli_error($con));
			
		echo "<script>document.location='../paciente/paciente.php'</script>";	
			//	header('Location:../usuario.php');
}









}



}
else{
			echo "<script type='text/javascript'>alert('Error Las contraseñas no coinciden registre de nuevo!');</script>";
			echo "<script>document.location='../paciente.php'</script>";	
		//	header('Location:../usuario.php');
}

?>
