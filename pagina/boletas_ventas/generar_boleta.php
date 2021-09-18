<?php session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />



  <link rel='stylesheet' type='text/css' href='../layout/css/style.css' />
  <link rel='stylesheet' type='text/css' href='../layout/css/print.css' media="print" />
  <script type='text/javascript' src='../layout/js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='../layout/js/example.js'></script>


<style>

.left{
    float: left;

}
.right{
    float: right;

}
.center{

   display:inline-block
}
@media print {
    .btn-print {
      display:none !important;
    size:30px;
    }

}
th, td {
font-size: 15px;
text-align: center;
}

</style>
</style>
</head>

<body>

  <?php
   @session_start();

      if(isset($_REQUEST['id_pedido']))
            {
              $id_pedido=$_REQUEST['id_pedido'];
            }
            else
            {
            $id_pedido=$_POST['id_pedido'];
          }


 


           include ('../layout/dbcon.php');
//$branch_id = $_GET['id'];




require_once "ajax/Letras.php";


//$branch_id = $_GET['id'];




$nombre_cliente="";






    $query3=mysqli_query($con,"select * from pedidos p inner join usuario c on c.id = p.id_cliente where id_pedido= '$id_pedido' ")or die(mysqli_error($con));

   while($row3=mysqli_fetch_array($query3)){
$nombre_cliente=$row3['nombre'];
         $correo_cliente=$row3['correo'];
          $telefono_cliente=$row3['telefono'];

$monto_pagado=$row3['monto_pagado'];
$total=$row3['total'];

$fecha=$row3['fecha'];
          
      }



       $query11=mysqli_query($con,"select * from empresa ")or die(mysqli_error($con));

   while($row11=mysqli_fetch_array($query11)){
        $empresa=$row11['empresa'];
// $impuesto_producto=$row11['impuesto'];

  $telefono_empresa=$row11['telefono'];
  $direccion_empresa=$row11['direccion'];
  $simbolo_moneda=$row11['simbolo_moneda'];
    $tipo_moneda=$row11['tipo_moneda'];
     $imagen=$row11['imagen'];
    
      }



       












//echo $logo;
      $sum=0;
   $igv=0;   
   $sub=0;   
   $sub_igv=0;
    $query5=mysqli_query($con,"select * from detalles_pedido d inner join procedimiento_pago p on d.id_producto = p.id_procedimiento_pago 
 where  id_pedido='$id_pedido'  ")or die(mysqli_error($con));

   while($row5=mysqli_fetch_array($query5)){
      //   $total=$row['cantidad']*$row['precio_venta'];
                $sub=$sub+$row5['precio_venta']*$row5['cantidad'];
        
     



// $igv=$igv+($row5['precio_venta']*$row5['cantidad'])*$impuesto_producto/100;
     $sum=$sum+$row5['precio_venta']*$row5['cantidad'];







      }

 //      $sum=$sum+$precio_estimado+($precio_estimado*$impuesto_producto/100);
$color= '#f5f5f5';
 $V=new EnLetras(); 
 $con_letra=strtoupper($V->ValorEnLetras($sub,$tipo_moneda)); 


?>
   <br>

       <center>                       
    <br>
   <br>
   







<a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> imprimir </a>
  </center>
  <div id="page-wrap">

    <textarea id="header">Boleta</textarea>

    <div id="identity">

 

                            <br>
   <br>
      <br>









    <div id="identity">
            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp" >
                <input id="imageloc" type="text" size="50" value="" /><br />
                (width: 150px,  height: 150px)
              </div>

            </div>

    </div>


    <div style="clear:both"></div>



    <div class="container">
   <div class="left">


   <img id="image" src="../configuracion/images/<?php echo $imagen;?>" alt="logo" width="100" height="100" /><br /><br />
       </div>

   <div class="right">

     <div id="customer">


<h1>N° id <?php echo $id_pedido;?> </h1>

     </div>

       </div>

   <div class="center">

       </div>
   </div>

<br><br><br><br><br><br>
<center><h1> DATOS GENERALES</h1></center>

             <table id="header3"  style="width:100%" >
                 <tr>
                      <td>Empresa</td>
    <td>Direccion empresa</td>
     
                 </tr>
                 <tr>
    <td><?php echo $empresa;?></td>
<td><?php echo $direccion_empresa;?></td>
     
          
                 
                 </tr>


             </table>

<center><h1> CLIENTE </h1></center>
             <table id="header3"  style="width:100%" >
                 <tr>
                      <td>Nombre</td>
                           <td >fecha </td>
               
                   <td >total </td>
              
             
                 </tr>
                 <tr>

    
                     <td class="meta-head"><?php echo $nombre_cliente;?></td>
                               <td class="meta-head"><?php echo $fecha;?></td>
                      <td class="meta-head"><?php echo $total;?></td>
          
         

                 </tr>


             </table>


<center><h1> Productos</h1></center>
                                    <table id="header3" style="width:100%"  >
                    <thead>
                      <tr>


            <th>Descripcion</th>
            <th>Precio unitario</th>
            <th>Cantidad</th>

    <th>Sub total</th>


        


                      </tr>
                    </thead>
                    <tbody>
<?php
$valor_total=0;
    $query=mysqli_query($con,"select * from detalles_pedido d inner join procedimiento_pago p on d.id_producto = p.id_procedimiento_pago 
 where  id_pedido='$id_pedido'  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

       
?>
                      <tr >
  <td><?php echo $simbolo_moneda;?> <?php echo $row['nombre'];?></td>
              <td><?php echo $simbolo_moneda;?> <?php echo number_format($row['precio_venta'],2);?></td>
                        <td><?php echo $simbolo_moneda;?> <?php echo number_format($row['cantidad'],2);?></td>

              <td><?php echo $simbolo_moneda;?> <?php echo number_format($row['cantidad']*$row['precio_venta'],2);?></td>

     
                        

                       

          
      

                      </tr>


 <!--end of modal-->

<?php 
}?>
                    </tbody>

                  </table>
                  <?php 

                  ?>
   

    <div class="container">
   <div class="left">
<CENTER>


   </CENTER>
       </div>
   <div class="right">

    <h3>: <?php echo $simbolo_moneda;?> <?php echo number_format($sum,2);?></h3>
 <h3>: <?php echo $con_letra;?> </h3>

     <div id="customer">




     </div>

       </div>

      

    </div>

<br><br><br><br><br><br>  
  <H5>Agente : <?php echo '';?></H5>
    <div >
<br><br><br><br>
    <div class="container">
   <div class="left">
<CENTER>
-----------------------------------------------------------<br />
   <h3>FIRMA COMPROMISO EMPRESA</h3>
   </CENTER>
       </div>
   <div class="right">
-----------------------------------------------------------<br />
    <h3>FIMRA COMPROMISO CLIENTE</h3>

     <div id="customer">




     </div>

       </div>

      

    </div>


  </div>

</body>

</html>
