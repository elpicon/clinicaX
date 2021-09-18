<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
$filas=0;
 $codigoS= $_POST['codigo'];//1
                            $tipoAdministradora=  $_POST['tipoAdministradora'];
                            $identificacion=  $_POST['identificacion'];
                            $direccion=  $_POST['direccion'];
                            $latitud=  $_POST['latitud'];
                            $longitud=  $_POST['longitud'];
                            $correoelectronico=  $_POST['correoelectronico'];
                            $telefono=  $_POST['telefono'];
                            $regimen=  $_POST['regimen'];
                            $cuentacxc=  $_POST['cuentascxc'];
                            $generarripspor=  $_POST['generarripspor'];
                            $cuentaorden=  $_POST['cuentaorden'];
                            $codigopararips=  $_POST['codigopararips'];
                           // $auditor=  $_POST[''];
                            $cobertura=  $_POST['cobertura'];
                            $rcmp_descaf=  $_POST['rcmp_descaf'];
                            $rrch_sedefact=  $_POST['rrch_sedefact'];
                            $nombre=  $_POST['nombre'];

$query=mysqli_query($con,"select * from aseguradoras where codigo='$codigoS'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query);

		if ($count>0)
		{
mysqli_query($con,"UPDATE `aseguradoras` SET `tipoAdministradora`='$tipoAdministradora',`direccion`='$direccion',`latitud`='$latitud',`longitud`='$longitud',`correoelectronico`='$correoelectronico',`telefono`='$telefono',`regimen`='$regimen',`cuentacxc`='$cuentacxc',`cuentaorden`='$cuentaorden',`generarripspor`='$generarripspor',`cobertura`='$cobertura',`rcmp_descaf`='$rcmp_descaf',`rrch_sedefact`='$rrch_sedefact',`nombre`='$nombre'  WHERE `codigo`='$codigoS'")or die(mysqli_error());
			
            if(mysqli_affected_rows($con)){
            $filas=1;
            }
            if($filas==1){
               echo "Existente";
                }else{
                    echo "FallidoG";
                } 	
        }else{
            
mysqli_query($con,"INSERT INTO aseguradoras(codigo,tipoadministradora,identificacion,direccion,latitud,longitud,correoelectronico,telefono,regimen,cuentacxc,generarripspor,cuentaorden,codigopararips,cobertura,rcmp_descaf,rrch_sedefact,nombre,estado,transacciones) VALUES('$codigoS','$tipoAdministradora','$identificacion','$direccion','$latitud','$longitud','$correoelectronico','$telefono','$regimen','$cuentacxc','$generarripspor','$cuentaorden','$codigopararips','$cobertura','$rcmp_descaf','$rrch_sedefact','$nombre','inactivo','0')")or die(mysqli_error($con));
			
 if(mysqli_affected_rows($con)){
            $filas=1;
        }
if($filas==1){
       echo "Exitoso"; 
}else{
    echo "Fallido";
}
}

?>
