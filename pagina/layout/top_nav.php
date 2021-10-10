
              <?php

?>
 <div class="top_nav text-right">
          <div class="nav_menu" style="background: white;">
            <nav>
              <div class="nav toggle ">
                <a id="menu_toggle" ><i class=" fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
              <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="collapse" aria-expanded="false">
                    <img  src="../usuario/subir_us/<?php echo $imagen; ?>" alt=""><?php echo $nombre; ?>

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                
                    <li><a href="../layout/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>

                  </ul>
                </li>   

              </ul>
            </nav>
          </div>
 </div>