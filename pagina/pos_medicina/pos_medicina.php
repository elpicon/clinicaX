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

<link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/post-medicina.css" type="text/css">

  <?php
     if(isset($_REQUEST['cid']))
            {
              $cid=$_REQUEST['cid'];
            }
            else
            {
            $cid=$_POST['cid'];
          }

    $id_sesion=$_SESSION['id']; 
?>


    <style type="text/css">
      #myInput {
  background-image: url('../pos_medicina/css/buscador.png'); /* Add a search icon to input */
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
span{
  color: black;
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
  <div class="container body">
    <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
            <?php include '../layout/top_nav.php';?> 
                  <?php    
        if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
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
      <div class="right_col" role="main">
      <div class="box-body">
                  <h3 class="htitle">Post-Medicina</h3>
                </div><!-- /.box-header -->
        <div class="row">
              <!-- left column -->

          
          
          <div class="col-md-12">
                        <!-- Horizontal Form -->
            <div class="box-body box1">
                            <!-- form start -->
                      <form  class="form-inline" name="f1" action="./terminarVenta.php" method="POST">
                        <input name="total" type="hidden" value="<?php echo $granTotal;?>">
                        <input name="id_cliente" type="hidden" value="<?php echo $cid;?>">
                        <input name="id_sesion" type="hidden" value="<?php echo $id_sesion;?>">
                        <input name="tipo_venta" type="hidden" value="Contado">
                        <div class="row">
                          <div class="col-md-3 btn-print">
                            <div class="form-group">
                              <span for="date" >Médico</span>
                            </div><!-- /.form group -->
                          </div>
                          <div class="col-md-12 btn-print">
                            <br>
                            <div class="form-group">
                              <select class="form-control select2" name="id_medico" required style="width: 100%;">
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
                        <input name="cliente" id="cliente" type="hidden"  required>
                          
                      </form>

                      <div class="row">
                        <br>
                        <div class="box-body">
                          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar producto..">
                          <ul id="myUL">
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
                                          <form class="form-horizontal" method="post" action="../pos_medicina/agregar_carrito.php" >
                                            <div class="row">
                                              <div class="col-md-7 btn-print">
                                                <div class="form-group">
                                                  <input type="hidden" class="form-control" id="id_procedimiento_pago" name="id_procedimiento_pago" value="<?php echo $row['id_procedimiento_pago'];?>" required>
                                                  <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="<?php echo $cid;?>" required>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-7 btn-print">
                                                <div class="form-group">
                                                  <label style="color: black;" >Cantidad</label>
                                                    <input  class="form-control" id="cantidad" name="cantidad" type="number"  min="0"  id="cantidad" 
                                                    value="1" placeholder="cantidad" style="width: : 100%;" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  required>
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
                                          </form>
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
                        </div>
                      </div>
                      <div class="row" style="text-align: center;">
                        <button type="submit" class="btn btn-plantilla">Terminar venta</button>
                              </div>
                  </div><!--row-->
              
            </div><!-- /.box -->
                    <!-- general form elements disabled -->
          </div><!--/.col (right) -->


          <div class="col-md-12">
                  <!-- general form elements -->
            
                    <!-- form start -->
              <form role="form" id="frmAcceder" name="frmAcceder">
                <div class="box-body box2">
                  <div class="row">
                    <div class="col-xs-12">
                        <br><br>
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
                          <?php foreach($_SESSION["carrito"] as $indice => $medicina){ 
                              $granTotal += $medicina->total;


                            ?>
                          <tr>
                            <td><?php echo $medicina->nombre ?></td>
                            <td><?php echo $medicina->precio_venta ?></td>
                            <td><?php echo $medicina->cantidad ?></td>
                            <td><?php echo $medicina->total ?></td>
                            <td><a class="btn btn-danger" href="../pos_medicina/<?php  echo "quitarDelCarrito.php?cid=$cid&indice=$indice";?>"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>

                      <h2> Total: <?php echo $granTotal; ?></h2>
                    </div>
                  </div> 
                </div><!-- /.box-body -->
              </form>
          </div><!--/.col (left) -->
                      <!-- right column -->
        </div>   <!-- /.row -->
      </div>

      

  </diiv>
</div>
<style>

span{
  color: black;
}
  </style>
<?php include '../layout/datatable_script.php';?>
      <?php include '../layout/footer.php';?>
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
