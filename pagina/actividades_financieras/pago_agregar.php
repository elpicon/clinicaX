<?php include '../layout/dbcon.php';?>
<?php include '../layout/header.php';?>

<?php 
 @session_start();




//$idusuario=$_SESSION["idusuario"];
   $fechaactual = date('Y-m-d');

$porcentaje_impuesto=0;
$simbolo_moneda="";
       $query=mysqli_query($con,"select * from empresa  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
 //   $porcentaje_impuesto=$row['impuesto'];
      $simbolo_moneda=$row['simbolo_moneda'];
}

?>

  <?php


    $id_sesion=$_SESSION['id']; 
?>

  <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="../actividades_financieras/css/styles.css">
    <link rel="stylesheet" href="css/actividades.css" type="text/css">

      <script>
$(document).ready(function() {
    $('#key').on('keyup', function() {
        var key = $(this).val();        
        var dataString = 'key='+key;
    $.ajax({
            type: "POST",
            url: "ajax.php",
            data: dataString,
            success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
                $('#suggestions').fadeIn(1000).html(data);
                //Al hacer click en algua de las sugerencias
                $('.suggest-element').on('click', function(){
                        //Obtenemos la id unica de la sugerencia pulsada
                        var id = $(this).attr('id');
                    
                          var idlcliente      = $(this).attr('id').substring(7,10).match(/\d+/); 
                        //Editamos el valor del input con data de la sugerencia pulsada
                        $('#key').val($('#'+id).attr('data'));
                        //Hacemos desaparecer el resto de sugerencias
                        $('#suggestions').fadeOut(1000);
                        alert('Has seleccionado a '+' '+$('#'+id).attr('data'));
 document.f1.cliente.value = idlcliente;
                
 document.f1.clientenombre.value = $('#'+id).attr('data');
                        return false;
                });
            }
        });
    });
}); 



</script>        


  <body class="nav-md">
        <?php    
if(!isset($_SESSION["carrito_actividad"])) $_SESSION["carrito_actividad"] = [];
$granTotal = 0;
$impuTotal = 0;
?>

    <?php
      if(isset($_GET["status"])){
        if($_GET["status"] === "1"){
          ?>
            <div class="alert alert-success">
              <strong>¡Correcto!</strong> Venta realizada correctamente
            </div>
          <?php
        }else if($_GET["status"] === "2"){
          ?>
          <div class="alert alert-info">
              <strong>Venta cancelada</strong>
            </div>
          <?php
        }else if($_GET["status"] === "3"){
          ?>
          <div class="alert alert-info">
              <strong>Ok</strong> Producto quitado de la lista
            </div>
          <?php
        }else if($_GET["status"] === "4"){
          ?>
          <div class="alert alert-warning">
              <strong>Error:</strong> El producto que buscas no existe
            </div>
          <?php
        }else if($_GET["status"] === "5"){
          ?>
          <div class="alert alert-danger">
              <strong>Error: </strong>El producto está agotado
            </div>
          <?php
        }else{
          ?>
          <div class="alert alert-danger">
              <strong>Error:</strong> Algo salió mal mientras se realizaba la venta
            </div>
          <?php
        }
      }
    ?>

<div class="container body">
  <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
            <?php include '../layout/top_nav.php';?>  
            
            <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
      </style>

        <div class="right_col" role="main">
        <div class="box-body">
                <h3 class="htitle">Agregar Pago</h3>

                </div><!-- /.box-header -->
          <div class="row">

          <a class="btn btn-regresar" href="gastos.php"    role="button"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>
            <!-- left column -->
            
            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
                
                <div class="box-body" >
                  <div class="box box1" >
                    

  
                <form  class="form-inline" name="f1" action="../actividades_financieras/terminarVenta.php" method="POST">
                            <input name="total" type="hidden" value="<?php echo $granTotal;?>">
                      <input name="id_sesion" type="hidden" value="<?php echo $id_sesion;?>">
                      <input name="tipo_venta" type="hidden" value="Contado">
                    <div class="row">
                      <div class="col-md-6 btn-print">
                        <label>Seleccione cliente</label>
                        <br>
                        <div class="input-group input-group-sm" style=" width: 80%;">
                            <input class="search_query form-control" type="text" name="key" id="key" placeholder="Buscar..." required >
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                      </div>
                      <div class="col-md-6 btn-print">
                        
                          <label for="date" >Medico</label>   
                          <br>
                          <div class="form-group" style="
    width: 80%;">
                              <select class="form-control select2" name="id_medico" required style="
    width: 90%;">
                                              
                                              <?php

                                $queryc=mysqli_query($con,"select * from usuario where tipo='medico'  ")or die(mysqli_error());
                                  while($rowc=mysqli_fetch_array($queryc)){
                                  ?>
                                              <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['nombre'];?></option>
                                              <?php }?>
                            </select>
                        </div>
                    </div>

                  </div>

                  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar producto..">
                          <input name="cliente" id="cliente" type="hidden"  required>
                      <br>
                      <br>

                      <div class="row" style="text-align: center;">
                      <button type="submit" class="btn btn-plantilla">Terminar venta</button>
                                  </div>
                            
                </form>

<?php

  # code...

?>

                        <?php

                          $query=mysqli_query($con,"select * 
                      from procedimiento_pago where  estado='a' ")or die(mysqli_error());
                          $i=1;
                          while($row=mysqli_fetch_array($query)){
                          $id_procedimiento_pago=$row['id_procedimiento_pago'];

                            
                      
                      ?>

                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
               
                        <div class="small-box bg-white">
                          <div class="inner">

                    <li><a href="#updateordinance<?php echo $row['id_procedimiento_pago'];?>"  data-target="#updateordinance<?php echo $row['id_procedimiento_pago'];?>" data-toggle="modal" style="color:black;"  style="height:25%; width:75%; font-size: 12px " role="button"><?php echo $row['nombre'];?><br><?php echo $simbolo_moneda.' '.$row['precio_venta'];?><br></a></li>
           
                    </tr>
                        <div id="updateordinance<?php echo $row['id_procedimiento_pago'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content" style="height:auto">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true"></span></button>
  
                      </div>
                    <div class="modal-body">
                    <form class="form-horizontal" method="post" action="../actividades_financieras/agregar_carrito.php" >

                  <div class="row">

                    <div class="col-md-7 btn-print">
                      <div class="form-group">
                            <input type="hidden" class="form-control" id="id_procedimiento_pago" name="id_procedimiento_pago" value="<?php echo $row['id_procedimiento_pago'];?>" required>
                      </div>
                    </div>

                    </div>

                <div class="row">
                    <div class="col-md-7 btn-print">
                      <div class="form-group">
                        <label style="color: black;" >Cantidad</label>
                        <input  class="form-control" id="cantidad" name="cantidad" type="number"  min="0"  id="cantidad" value="1" placeholder="cantidad" style="width: : 100%;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  required>
 
                      </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-7 btn-print">
                      <div class="form-group">

                          <button type="submit" class="btn btn-primary">AGREGAR</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                      </div>
                    </div>
                </div>

              </div>

            </div>

        </div><!--end of modal-dialog-->
 </div>              
                          </div>

                   
                        </div>
                      </div><!-- ./col -->

 <?php
}
 ?>
</ul>

                  

                                        <?php
                      
                     
                      ?>


                  </div><!--row-->
                </div><!-- /.box-body -->

                  
              </div><!-- /.col -->

              <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box2" >

                <!-- form start -->
                    <form role="form" id="frmAcceder" name="frmAcceder">
                      <div class="box-body ">
                        <div class="row">
                          <div class="col-xs-12">
                            <table class="table table-bordered">
                              <thead>
                                <tr class="encabezado">
                                  <th>Descripción</th>
                                  <th>Precio de venta</th>
                                  <th>Cantidad</th>
                                  <th>Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($_SESSION["carrito_actividad"] as $indice => $producto1){ 
                                    $granTotal += $producto1->total;


                                  ?>
                                <tr>

                                  <td><?php echo $producto1->nombre ?></td>
                                  <td><?php echo $producto1->precio_venta ?></td>
                                  <td><?php echo $producto1->cantidad ?></td>
                                  <td><?php echo $producto1->total ?></td>
                                  <td><a class="btn btn-danger" href="../actividades_financieras/<?php  echo "quitarDelCarrito.php?indice=$indice";?>"><i class="fa fa-trash"></i></a>
                            
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>

                            <h3 class="htitle"> Total: <?php echo $granTotal; ?></h3>
                          </div>
                        </div> <!-- /.row -->
                      </div><!-- /.box-body -->

                    </form>
              </div><!-- /.box -->

              
            </div><!--/.col (left) -->
              <!-- general form elements disabled -->
                          </div><!--/.col (right) -->

                
          </div>   <!-- /.row -->
    </div><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include '../layout/footer.php';?>

      <?php include '../layout/datatable_script.php';?>
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}



/* Sumar dos números. */
function sumar (valor) {
 var impuTotal  = '<?php echo $impuTotal; ?>';
          var granTotal  = '<?php echo $granTotal; ?>';
        //  $granTotal=$granTotal*$porcentaje_impuesto/100+$granTotal;
    var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = document.getElementById('spTotal').innerHTML;
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
  
    /* Esta es la suma. */
    total = ( (valor) -(granTotal)-impuTotal);
  
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
</script>

    

  </body>
</html>
<?php


  
?>