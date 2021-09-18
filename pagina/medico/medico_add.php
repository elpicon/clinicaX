<?php
include '../layout/session.php';
//session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$tipo = $_POST['tipo'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];
    $registromedico = $_POST['registromedico'];
	



		$total = 0;

		
		if ($password==$password2) {
            
	$query2=mysqli_query($con,"select * from usuario where usuario='$usuario'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query2);

		if ($count>0)
		{
			echo "<script type='text/javascript'>alert('usuario ya existe!');</script>";
		//	header('Location:../usuario.php');
	echo "<script>document.location='../usuario/usuario.php'</script>";		
		}
		else
		{








if (!empty($_FILES['imagen']['name'])){
    
      
$target_dir = "../usuario/subir_us/";
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
	if($_FILES["imagen"]["size"]>500000){
		echo "lo siento, tu archivo es demasiado grande.";
		$uploadok=0;
	}
	
	

		if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)){
			
	$img=basename($_FILES["imagen"]["name"]);
	
//encriptando contraseña
	$pass=md5($password);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;
		///finzalizo encriptacion


			mysqli_query($con,"INSERT INTO usuario(usuario,registromedico,password,imagen,tipo,nombre,apellido,telefono,correo,ciudad,fecha_nacimiento,edad,
			tipo_sangre,genero,direccion,celular,ocupacion,eps_ars,id_grupo_empresa,id_sede,fecha_registro,toma_medicamentos,antecedentes,antecedentes_familiares)
				VALUES('$usuario','$registromedico','$pass','$img','$tipo','$nombre','$apellido','$telefono','$correo','','','','','','','','','',
				'$id_grupo_empresa','$id_sede','".date('d-m-Y')."','','','')")or die(mysqli_error($con));

            
		
	echo "<script>document.location='../medico/medico.php?registro=1'</script>";	
	//header('Location:../usuario.php');

	
	
		} else{
			echo "No se pudo subir.";
		}



   
}
else{
		$pass=md5($password);
		$salt="a1Bz20ydqelm8m1wql";
		$pass=$salt.$pass;


			mysqli_query($con,"INSERT INTO usuario(usuario,registromedico,password,imagen,tipo,nombre,apellido,telefono,correo,ciudad,fecha_nacimiento,edad,
			tipo_sangre,genero,direccion,celular,ocupacion,eps_ars,id_grupo_empresa,id_sede,fecha_registro,toma_medicamentos,antecedentes,antecedentes_familiares)
				VALUES('$usuario','$registromedico','$pass','','$tipo','$nombre','$apellido','$telefono','$correo','','','','','','','','','',
				'$id_grupo_empresa','$id_sede','".date('d-m-Y')."','','','')")or die(mysqli_error($con));

			
		echo "<script>document.location='../medico/medico.php?registro=1'</script>";	
			
}









}



}
else{
			echo "<script type='text/javascript'>alert('Error Las contraseñas no coinciden registre de nuevo!');</script>";
			echo "<script>document.location='../usuario.php'</script>";	
		//	header('Location:../usuario.php');
}

?>
