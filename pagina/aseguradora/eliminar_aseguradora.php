<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['codigo']))
            {
              $codigo=$_REQUEST['codigo'];
            }
            else
            {
            $codigo=$_POST['codigo'];
          }



  mysqli_query($con,"delete from aseguradoras where codigo='$codigo'")or die(mysqli_error());
    echo "<script type='text/javascript'>alert('Eliminado correctamente!');</script>";
  echo "<script>document.location='../aseguradora/aseguradora.php'</script>";  
     // header('Location:../usuario.php');
?>