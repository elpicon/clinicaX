 <?php
echo "<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />";
include('../../dist/includes/dbcon.php');
session_start();

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

$codigo="";
$buffer="";
if(isset($_REQUEST['in_ciudad'])){
    $in_ciudad=$_REQUEST['in_ciudad'];
$numero=false;

    //echo "Numero <br>";
   $query = mysqli_query( $con, " SELECT * FROM `dymdane` WHERE `CODIGO_DPTO` LIKE '%".$in_ciudad."%' OR `NOMBRE_MPIO` LIKE '%".$in_ciudad."%' OR `NOMBRE_MPIO` LIKE '".$in_ciudad."%'" )or die( mysqli_error() );
    
    
  // " SELECT * FROM `dymdane` WHERE `CODIGO_DPTO` LIKE '91'"

  $x=0;
while ($row = mysqli_fetch_assoc($query)) {
    $buffer= $buffer."<option data-value'".$row['CODIGO_DPTO']."-".$row['CODIGO_MUNICIPIO']."' >".$row['CODIGO_DPTO']."-".$row['CODIGO_MUNICIPIO']." "._convert($row['NOMBRE_MPIO'])."</option>";
    $x++;
    if($x>60){
        break;
    }
}
}
echo "".$buffer;
?>