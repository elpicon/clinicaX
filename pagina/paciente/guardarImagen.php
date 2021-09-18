<?php
$upload_dir="";
$path ="../usuario/subir_us/".$_POST['numerodedocumento']."/";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}   

$img = $_POST['imagenData']; 
$img = str_replace('data:image/jpeg;base64,', '', $img); 
$img = str_replace(' ', '+', $img); 
$data = base64_decode($img); 
$file = $path."perfilimg.jpeg"; 
$success = file_put_contents($file, $data);
if($success){
echo 'exitoso';
}else{
    echo 'error: no se pudo cargar la imagen.';
}

?>