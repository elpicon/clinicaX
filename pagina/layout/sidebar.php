<?php
$id = $_SESSION[ 'id' ];
?>
<?php

?>
<style>
    
    
    span { color: white; }
    h3 { color: white; }
    .side-menu a{
        
          background: linear-gradient(#002142, #002142);   
        }
     .left_col{
        background: #002142;
        }
    
    
    .child_menu a{
      
        background: linear-gradient(#002142, #002142);
        }
     .side-menu li{
        background: linear-gradient(#002142, #002142);   
        }
    .nav_title{
        background: linear-gradient(#002142, #002142);     
        }
    
.scrollp {
  width: 10px;
  height: 110px;
  overflow-y: auto;
  position: relative;
  max-width: 100%;
        overflow-x: hidden;
}

::-webkit-scrollbar {
    width: 12px;
}
    .menus a:active{
  background-color:#002142;
}
    
    .menus:hover{
        background: gray;
    } 
    </style>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
<div class="menu_section">
    <ul class="nav side-menu">
    <li><a href = "../layout/inicio.php"><i class="fa fa-dashboard"></i> Inicio <span class="fa fa-chevron-right"></span></a></li>

    <?php
    if ( $tipo == "administrador"
        or $tipo == "recepcionista"
        or $tipo == "medico" ) {

        ?>
    <li><a><i class="fa fa-users"></i> Pacientes<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../paciente/paciente.php"><span>Lista de pacientes</span></a></li>
        <li><a href="../paciente/pago_paciente_todos.php">Pagos</a></li>
      </ul>
    </li>
    <?php
    }
    ?>

    <?php
    if ( $tipo == "administrador" ) {

        ?>
    <li><a><i class="fa fa-user-md"></i> Médico<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../medico/medico.php">Médico</a></li>
        <li><a href="../medico/asignar_servicios.php">Asignación de Servicios</a></li>
        <li><a href="../medico/medico_historial.php">Historial  Médico</a></li>
        
      </ul>
    </li>
    <?php
    }
    ?>

    <?php
    if ( $tipo == "administrador" || $tipo == "contratacion"  ) {

        ?>
    <li><a><i class="fa fa-shield"></i> Aseguradora<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../aseguradora/aseguradora.php">Listado Aseguradoras</a></li>
        <li><a href="../aseguradora/contratos.php">Listado Contratos</a></li>
        
      </ul>
    </li>
    <?php
    }
    ?>



    <?php


    if ( $tipo == "administrador"
        or $tipo == "recepcionista"
        or $tipo == "medico" ) {

        ?>
    <li><a><i class="fa fa-tasks"></i> Programar<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../programar/horario_medico.php">Programar</a></li>
        <li><a href="../programar/vacaciones.php">Vacaciones</a></li>
      </ul>
    </li>
    <?php
    }
    ?>
    <?php
    if ( $tipo == "administrador"
        or $tipo == "recepcionista" ) {

        ?>
    <li><a><i class="fa fa-money"></i> Actividades financieras<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../actividades_financieras/pagos.php">Pagos</a></li>
        <li><a href="../actividades_financieras/pago_agregar.php">Agregar pago</a></li>
        <li><a href="../procedimiento_pago/procedimiento_pago.php">Procedimiento de pago</a></li>
        <li><a href="../gastos/gastos.php">Gastos</a></li>
        <li><a href="../gastos/gastos_agregar.php">Agregar gastos</a></li>
        <li><a href="../gastos/gastos_categoria.php">Categoria gastos</a></li>
      </ul>
    </li>
    <?php
    }
    ?>

    <?php
    if ( $tipo == "administrador"
        or $tipo == "recepcionista"
        or $tipo == "medico" ) {

        ?>
    <li><a><i class="fa fa-calendar-plus-o"></i> Citas<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../cita/cita.php">Lista de citas</a></li>
        <li><a href="../cita/cita_agregar.php">Agregar</a></li>
        <li><a href="../cita/cita_hoy.php">Hoy</a></li>
      </ul>
    </li>
    <?php
    }
    ?>
    <?php
    if ( $tipo == "administrador"
        or $tipo == "farmaceutico" ) {

        ?>
    <li><a><i class="fa fa-plus-square"></i> Medicinas<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../medicina/medicina.php">Lista de medicina</a></li>
        <li><a href="../medicina/medicina_agregar.php">Agregar medicina</a></li>
      </ul>
    </li>
    <?php
    }
    ?>
    <?php
    if ( $tipo == "administrador"
        or $tipo == "farmaceutico" ) {

        ?>
    <li><a><i class="fa fa-medkit"></i> Farmacia<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../farmacia/pagos.php">Lista de ventas</a></li>
        <li><a href="../farmacia/pago_agregar.php">Agraear farmacia</a></li>
        <li><a href="../gastos_farmacia/gastos_farmacia.php">Gastos</a></li>
        <li><a href="../gastos_farmacia/categoria.php">Gastos categoria</a></li>
        <li><a href="../farmacia/reportes_pagos.php">Pagos</a></li>
      </ul>
    </li>
    <?php
    }
    ?>
    <?php
    if ( $tipo == "administrador"
        or $tipo == "medico" ) {

        ?>
    <li><a href = "../preescripcion/preescripcion.php"><i class="fa fa-archive"></i> Preescripción<span class="fa fa-chevron-right"></span></a>
      <?php
      }
      ?>
      <?php
      if ( $tipo == "paciente" ) {

          ?>
    <li><a href = "../cita/cita_paciente.php"><i class="fa fa-archive"></i> Cita paciente<span class="fa fa-chevron-right"></span></a>
    <li><a href = "../preescripcion/preescripcion_paciente.php"><i class="fa fa-archive"></i>Preescripción paciente<span class="fa fa-chevron-right"></span></a>
    <li><a href = "../actividades_financieras/pagos_paciente.php"><i class="fa fa-archive"></i> Pagos atención<span class="fa fa-chevron-right"></span></a>
    <li><a href = "../farmacia/pagos_farmacia_paciente.php"><i class="fa fa-archive"></i> Pagos farmacia<span class="fa fa-chevron-right"></span></a>
      <?php
      }
      ?>
      <?php

      ?>
      <?php


      ?>
      <?php
      if ( $tipo == "administrador"  ) {

          ?>
    <li><a><i class="fa fa-user"></i> Recursos humanos<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../medico/medico.php">Médico</a></li>
        <li><a href="../farmaceutico/farmaceutico.php"> Farmaceutico</a></li>
        <li><a href="../recepcionista/recepcionista.php">Recepcionista</a></li>
      </ul>
    </li>
    <?php
    }
    ?>
    <?php

    ?>
    <li><a><i class="fa fa-gear"></i> Configuración<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <?php
        if ( $tipo == "administrador" || $tipo == "contratacion" ) {

            ?>
        <li><a href="../configuracion/configuracion.php">Empresa</a></li>
        <?php
        }
        ?>
        <?php
        if ( $tipo == "administrador" || $tipo == "contratacion" ) {

            ?>
        <li><a href="../configuracion/servicios.php">Servicios</a></li>
        <?php
        }
        ?>
        <li><a href="../otros/editar_password.php">Editar password</a></li>
      </ul>
    </li>
    <?php
    if ( $tipo == "administrador" ) {

        ?>
    <li><a><i class="fa fa-database"></i> Base de datos<span class="fa fa-chevron-down"></span></a>
      <ul class="nav child_menu">
        <li><a href="../otros/vaciar_bd.php" onClick="return confirm('¿Está seguro de que quieres vaciar la base de datos ??');">Vaciar base de datos</a></li>
        <li><a href="../otros/respaldo_add.php">Respaldo</a></li>
      </ul>
    </li>
    <?php
    }
    ?>

            <li>
            <a data-toggle="tooltip" data-placement="top" href = "logout.php" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a></li>

</div>
<!--- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>--->

</div>

