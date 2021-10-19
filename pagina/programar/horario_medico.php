

<?php include '../layout/header.php';


//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="css/programar.css" type="text/css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
          folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <?php 

   // if ($alumnos=="si") {
      # code...
    
?>
    <div class="container body">
      <div class="main_container">
      <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
      <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
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

        <!-- page content -->
        <div class="right_col" role="main">

                    <?php
                    $id_usuario=$_SESSION['id'];
                            $fecha = date('Y-m-d');
                

                //  if ($guardar=="si") {
                    
                      ?>
 <div class="box-header">
                  <h3 class="htitle" > Programar</h3>

                </div><!-- /.box-header -->

                
<a class = "btn  btn-plantilla2" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Imprimir</a>

<a class = "btn btn-plantilla " href = "#" id="myButtonx" name="myButtonx" role="button"><i class ="glyphicon glyphicon-plus"></i> Agendar</a>



<br>
<form class = "btn btn-white btn-print">
                      Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />

</form>


                <div class="box-body ">
                    <table id="example22" class="table table-bordered table-striped">
                    <thead>
                      <tr class="encabezado">
                          <th> Rango fecha </th>
                          <th> Hora inicio </th>
                          <th> Hora finalización </th>
                          <th> Duración </th>
                          <th class="btn-print"> Acciones </th>
                      </tr>
                    </thead>
                    <tbody>
<?php

   // $branch=$_SESSION['branch'];
   $hi;
   $hf;
   $fi;
   $ff;
    $query=mysqli_query($con,"SELECT * FROM horario_medico WHERE id_medico='$id' ORDER BY id DESC LIMIT 1 ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
        
          $query2=mysqli_query($con,"SELECT * FROM horario".$row['cita_duracion']." WHERE id_horario='".$row['hora_inicio']."' OR id_horario='".$row['hora_fin']."' ")or die(mysqli_error());
             $x=0;
             while($row2=mysqli_fetch_array($query2)){
                if($x==0){$hi=explode(" a ", $row2['nombre_horario']);}
                if($x==1){$hf=explode(" a ", $row2['nombre_horario']);}
               
                $x++;
             }
             $ff=explode(" ", $row['fecha_fin']);
             $fi=explode(" ", $row['fecha_inicio']);
            $id_horario_medico=$row['id_horario_medico'];
          
?>
                    <tr >
                      <td><?php echo $fi[0]." a ".$ff[0]; ?></td>
                      <td><?php echo $hi[0]; ?></td>
                      <td><?php echo $hf[1]; ?></td>
                      <td><?php echo $row['cita_duracion']; ?></td>
                    <td class="btn-print">
                                  
   <a class="small-box-footer btn-print"  href="<?php  echo "../programar/eliminar_horario_medico.php?id_horario_medico=$id_horario_medico";?>" onClick="return confirm('¿Está seguro de que quieres eliminar horario medico??');"><i class="glyphicon glyphicon-remove"></i></a>


            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_empresas'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ACCION DETALLES EMPRESA</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="empresa_update.php" enctype='multipart/form-data'>

        <div class="form-group">
          <div class="col-lg-9">
            <input type="hidden" class="form-control" id="id" name="id_empresas" value="<?php echo $row['id_empresas'];?>" required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">cuenta</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="cuenta" value="<?php echo $row['cuenta'];?>"   required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Ruc/Nit/Id fiscal</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="ruc_nit" name="ruc_nit" value="<?php echo $row['ruc_nit'];?>"   required>
          </div>
        </div>
                      <div class="form-group">
          <label class="control-label col-lg-3" for="price">Razon Social</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="razon_social" name="razon_social" value="<?php echo $row['razon_social'];?>"   required>
          </div>
        </div>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">GUARDAR</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

<?php $i++;}?>
                    </tbody>

                  </table>


                                   <script type="text/javascript">// < ![CDATA[
function Eliminar (i) {
    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
    document.getElementById("tableid").deleteRow(i);
}
function Buscar() {
            var tabla = document.getElementById('example22');
            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
            for (var i = 1; i < tabla.rows.length; i++) {
                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tabla.rows[i].style.display = '';
                } else {
                    tabla.rows[i].style.display = 'none';
                }
            }
        }
// ]]></script>
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content --><?php include '../layout/footer.php';?>
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>

    <?php 
          # code...
   // }
?>
    <!-- /gauge.js -->
  </body>
</html>
