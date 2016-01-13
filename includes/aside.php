       <section class="sidebar">
         
         
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
              <!-- <li>
                <a href="../examples/captura.php"><i class="fa fa-camera"></i> <span>Captura de imágenes</span></a>
              </li> -->
           <?php
     
            if($_SESSION['cambio']==0)
            {
           ?>   
              <li>
                <a href="../examples/usuarios.php"><i class="fa fa-user-plus"></i> <span>Ingreso de usuarios</span></a>
              </li>
           <?php
             }
           ?>   
               <li>
                <a href="../examples/cambio_password.php"><i class="fa fa-key"></i> <span>Cambio de contraseña</span></a>
              </li>
          <?php
               if($_SESSION['cambio']==0)
            {
           ?> 
               <li>
                <a href="../examples/clientes.php"><i class="fa fa-users"></i> <span>Clientes</span></a>
              </li>
               <li>
                <a href="../examples/calculadora.php"><i class="fa fa-calculator"></i> <span>Calculadora</span></a>
              </li>
              <li>
                <a href="../examples/wishlist.php"><i class="fa fa-list"></i> <span>Wish-list</span></a>
              </li>
                <?php
             }
           ?>   
               <li>
                <a href="../../includes/destroy.php"><i class="fa fa-sign-out"></i> <span>Salir</span></a>
              </li>
         

            <!--   <li class="treeview">
                <a href="#">
                  <i class="fa fa-file-text-o"></i>
                  <span>Exámenes</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="pages/UI/general.html"><i class="fa fa-circle-o text-red"></i> Examen 1</a></li>
                  <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o text-yellow"></i> Examen 2</a></li>
                  <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o text-blue"></i> Examen 3</a></li>
                
                </ul>
              </li> -->
               


              
            </ul>
          </section>