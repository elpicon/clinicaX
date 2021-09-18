<?php
session_start();
//include('../dbcon.php');
include('../../dist/includes/dbcon.php');
 include '../layout/session.php';
 @session_start();
$filas=0;

                            $codigocontrato=  $_REQUEST['codigocontrato'];
                            $entidad=  $_REQUEST['entidad'];
                            $valorcontrato=  $_REQUEST['valorcontrato'];
                            $in_ciudad=  $_REQUEST['in_ciudad'];
                            $fechainicio=  $_REQUEST['fechainicio'];
                            $fechafin=  $_REQUEST['fechafin'];
                            $objeto=  $_REQUEST['objeto'];
                            $coberturas=  $_REQUEST['coberturas'];
                            $regimen=  $_REQUEST['regimen'];
                            $alcancecontrato=  $_REQUEST['alcancecontrato'];
                            $nivel=  $_REQUEST['nivel'];
                            $tipocontrato=  $_REQUEST['tipocontrato'];
                            $modalidad=  $_REQUEST['modalidad'];
                            $tarifacup=  $_REQUEST['tarifacup'];
                            $porcentajecup=  $_REQUEST['porcentajecup'];
                            $tarifacum=  $_REQUEST['tarifacum'];
                            $porcentajecum=  $_REQUEST['porcentajecum'];
                            $porcentajectp=  $_REQUEST['porcentajectp'];
                            $ct_procedimientos=  $_REQUEST['ct_procedimientos'];
                            $porcentajectm=  $_REQUEST['porcentajectm'];
                            $ct_medicamentos=  $_REQUEST['ct_medicamentos'];
                            $porcentajectma=  $_REQUEST['porcentajectma'];
                            $ct_materiales=  $_REQUEST['ct_materiales'];
                        $cs_ambulatiorio_hospitalizacion=  $_REQUEST['cs_ambulatiorio_hospitalizacion'];
                            $pm_copago=  $_REQUEST['pm_copago'];
                            $cc_moderadora=  $_REQUEST['cc_moderadora'];
                            $cc_recuperacion=  $_REQUEST['cc_recuperacion'];
                            $raapf_serv=  $_REQUEST['raapf_serv'];
                            $rnv_prep=  $_REQUEST['rnv_prep'];
                            $rc_validacion=  $_REQUEST['rc_validacion'];






$query=mysqli_query($con,"select * from contratos where codigo='$codigocontrato'")or die(mysqli_error($con));
		$count=mysqli_num_rows($query);

		if ($count>0)
		{
mysqli_query($con,"UPDATE `contratos` SET `codigo`='$codigocontrato',`entidad`='$entidad',`ciudad`='$in_ciudad',`fechainicio`='$fechainicio',`fechafin`='$fechafin',`valorcontrato`='$valorcontrato',`objeto`='$objeto',`regimen`='$regimen',`alcance`='$alcancecontrato',`coberturas`='$coberturas',`nivel`='$nivel',`tipocontrato`='$tipocontrato',`modalidad`='$modalidad',`tarifacups`='$tarifacup',`porcentajecup`='$porcentajecup',`tarifacum`='$tarifacum',`porcentajecum`='$porcentajecum',`ctlp`='$ct_procedimientos',`ctlm`='$ct_medicamentos',`ctlma`='$ct_materiales',`csamyh`='$cs_ambulatiorio_hospitalizacion',`ctlp_cubrimiento`='$porcentajectp',`ctlm_cubrimiento`='$porcentajectm',`ctlma_cubrimiento`='$porcentajectma',`permite_fijar_copago`='$pm_copago',`cobra_cm`='$cc_moderadora',`cobra_cr`='$cc_recuperacion',`requiere_aut`='$raapf_serv',`requiere_vale`='$rnv_prep',`requiere_codigo_validacion`='$rc_validacion' WHERE `codigo`='$codigocontrato'")or die(mysqli_error());
            
            
            
            
			
            if(mysqli_affected_rows($con)){
            $filas=1;
            }
            if($filas==1){
               echo "Existente";
                }else{
                    echo "Fallido";
                } 	
        }else{
            
            

    
mysqli_query($con,"INSERT INTO contratos(codigo,entidad,valorcontrato,ciudad,fechainicio,fechafin,objeto,coberturas,regimen,alcance,nivel,tipocontrato,modalidad,tarifacups,porcentajecup,tarifacum,porcentajecum,ctlp_cubrimiento,ctlp,ctlm_cubrimiento,ctlm,ctlma_cubrimiento,ctlma,csamyh,permite_fijar_copago,cobra_cm,cobra_cr,requiere_aut,requiere_vale,requiere_codigo_validacion)VALUES('$codigocontrato','$entidad','$valorcontrato','$in_ciudad','$fechainicio','$fechafin','$objeto','$coberturas','$regimen','$alcancecontrato','$nivel','$tipocontrato','$modalidad','$tarifacup','$porcentajecup','$tarifacum','$porcentajecum','$porcentajectp','$ct_procedimientos','$porcentajectm','$ct_medicamentos','$porcentajectma','$ct_materiales','$cs_ambulatiorio_hospitalizacion','$pm_copago','$cc_moderadora','$cc_recuperacion','$raapf_serv','$rnv_prep','$rc_validacion')")or die(mysqli_error($con));
			
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
