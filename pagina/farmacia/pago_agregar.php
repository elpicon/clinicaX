<?php include '../layout/dbcon.php';?>
<?php include '../layout/header.php';?>

<link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/farmacia.css" type="text/css">

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


    <style type="text/css">

    label{
      color: black;
    }
      #myInput {
  background-image: url('../actividades_financieras/css/buscador.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

    </style>
  
  <body class="nav-md">
            <?php    
if(!isset($_SESSION["carrito_farmacia"])) $_SESSION["carrito_farmacia"] = [];
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

      

      <div class="right_col" role="main">
      <div class="box-body">
                  <h3 class="htitle">Agregar Pago Farmacia</h3>
                </div><!-- /.box-header -->
          <div class="row">

            <!-- right column -->
            <div class="col-md-12">
              <!-- Horizontal Form -->
              
                
                  <div class="box-body box1">
                  
                      <div class="row">
                        <div class="col-md-6">

  
                          <form  class="form-inline" name="f1" action="../farmacia/terminarVenta.php" method="POST">
                          <input name="total" type="hidden" value="<?php echo $granTotal;?>">
                          <input name="id_sesion" type="hidden" value="<?php echo $id_sesion;?>">
                            <input name="tipo_venta" type="hidden" value="Contado">
                          <label>Seleccione cliente</label>
                          <br>
                          <div class="input-group input-group-sm">
                              <input class="search_query form-control" type="text" name="key" id="key" placeholder="Buscar..." required>
                              <span class="input-group-btn">
                                  <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                              </span>
                        </div>
                        <br>

                        <br>

                        <input name="cliente" id="cliente" type="hidden"  required>
                    <br>
                        


                      </form>

                      
                                    </div>

                                    <div class="col-md-6">
                                 <label for="date" >Médico</label>
                                      <br>
                                <div class="col-md-4 btn-print">
                                  <div class="form-group">
                                      <select class="form-control select2" name="id_medico" required>
                                                
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

                                   
                                    </div>
                                    <button type="submit" class="btn btn-plantilla">Terminar venta</button>


                  <?php

                    # code...

                                ?>
                                                  <div class="row">
                                                        

                                                  <div class="box-body">
                              
                                      
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar producto..">

                                <ul id="myUL">
                                  <?php

                                    $query=mysqli_query($con,"select * 
                                from producto where  stock>0 and estado='a' ")or die(mysqli_error());
                                    $i=1;
                                    while($row=mysqli_fetch_array($query)){
                                    $id_pro=$row['id_pro'];

                                        $stock=$row['stock'];
                                
                                ?>

                          <div class="col-lg-4 col-xs-6">
                                      <!-- small box -->
                            
                                      <div class="small-box bg-white">
                                        <div class="inner">

  <li><a href="#updateordinance<?php echo $row['id_pro'];?>"  data-target="#updateordinance<?php echo $row['id_pro'];?>" data-toggle="modal" style="color:black;"  style="height:25%; width:75%; font-size: 12px " role="button"><?php echo $row['nombre_pro'];?><br><?php echo $simbolo_moneda.' '.$row['precio_venta'];?><br><IMG src="../producto/subir_producto/<?php  echo $row['imagen'];?>" width="100px" height="100px"></a></li>
          
            </tr>
        <div id="updateordinance<?php echo $row['id_pro'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span></button>
  
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="../farmacia/agregar_carrito.php" >

                <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">

                      </div><!-- /.form group -->
                    </div>
                      <div class="col-md-7 btn-print">
                      <div class="form-group">
                        
              <input type="hidden" class="form-control" id="id_producto" name="id_producto" value="<?php echo $row['id_pro'];?>" required>

                      </div>
                    </div>

                    </div>


                <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">

                      </div><!-- /.form group -->
                    </div>
                      <div class="col-md-7 btn-print">
                      <div class="form-group">
                        <label style="color: black;" >Cantidad</label>
                          <input  class="form-control" id="cantidad" name="cantidad" type="number"  min="0" max="<?php echo $row['stock_actual']; ?>" id="cantidad" placeholder="cantidad" style="width: : 100%;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  required>
 
                      </div>
                    </div>
                    </div>

              <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
      
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-7 btn-print">
                      <div class="form-group">

                     <button type="submit" class="btn btn-primary">AGREGAR</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                      </div>
                    </div>
                           <div class="col-md-1 btn-print">
                
                    </div>
                    </div>

              

              </div>
     
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>              
                          </div>
                          <div class="icon" style="margin-top:10px">
                   
                          </div>
                   
                        </div>
                      </div><!-- ./col -->

 <?php
}
 ?>
</ul>
                  
                          </div>
                        
                        </div>
                      </div><!-- ./col -->
                                        <?php
                                ?>

                            <?php

          ?>
                          </div><!-- /.box-body -->
                        

                            
                        
                        <!-- general form elements disabled -->
                                  <!-- left column -->
            <div class="col-md-12">
              
              <!-- general form elements -->
              
            
                <!-- form start -->
                  <form role="form" id="frmAcceder" name="frmAcceder">
                    <div class="box-body box1">
                    <div class="row">
                    <div class="col-xs-12">
                    <br>
                    <table class="table table-bordered">
                    <thead>
                    <tr class="encabezado">
                      <th>Descripción</th>
                      <th>Precio de venta</th>
                      <th>Cantidad</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($_SESSION["carrito_farmacia"] as $indice => $producto){ 
                      $granTotal += $producto->total;


                    ?>
                  <tr>

                  <td><?php echo $producto->nombre ?></td>
                  <td><?php echo $producto->precio_venta ?></td>
                  <td><?php echo $producto->cantidad ?></td>
                  <td><?php echo $producto->total ?></td>
                  <td><a class="btn btn-danger" href="../farmacia/<?php  echo "quitarDelCarrito.php?indice=$indice";?>"><i class="fa fa-trash"></i></a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
                    <h2 class="htitle"> Total: <?php echo $granTotal; ?></h2>

                    </div>
                  </div> 
                  </div><!-- /.box-body -->

                </form>
              

              
            </div><!--/.col (left) -->
                          </div><!--/.col (right) -->
                          
                          
          </div>   <!-- /.row -->

          
</div>
</div>
</div><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
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
    <!-- jQuery 2.1.4 -->
    <script src="../actividades_financieras/public/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../actividades_financieras/public/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../actividades_financieras/public/js/icheck.min.js"></script>
    

  </body>
</html>
<?php


  
?>