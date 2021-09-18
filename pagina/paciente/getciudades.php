<?php 

$id_departamento=$_REQUEST['id_departamento'];
include('../../dist/includes/dbcon.php');


function _convert($content) {
    if(!mb_check_encoding($content, 'UTF-8')
        OR !($content === mb_convert_encoding(mb_convert_encoding($content, 'UTF-32', 'UTF-8' ), 'UTF-8', 'UTF-32'))) {

        $content = mb_convert_encoding($content, 'UTF-8');

        if (mb_check_encoding($content, 'UTF-8')) {
            // log('Converted to UTF-8');
        } else {
            // log('Could not converted to UTF-8');
        }
    }
    return $content;
}

	$sql="SELECT id_municipio,
			 municipio
		from municipios 
		where departamento_id='$id_departamento'";

	$result=mysqli_query($con,$sql);

	$cadena="
	 <div class='row'>
                    
                    <div class='col-md-6 btn-print'>
                      <div class='form-group'>
                      <label for='municipio'>Municipios</label>
                      <select id='municipio' name='municipio' required>
                      <option value=''>Seleccione</option>";
            
	while ($ver=mysqli_fetch_row($result)) {
	 
	 //echo $ver[0]." ".$ver[1];  
		$cadena=$cadena.'<option value='.$ver[0].'>'._convert($ver[1]).'</option>';
	}

	echo  $cadena."</select>	
	                    </div>
	                    </div>";
	

?>