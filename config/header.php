
<header class="header">
            <a href="dashboard.php" class="logo">
                SIFO 2.0
                
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn    sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Notifications: style can be found in dropdown.less -->

                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span> <?php $nombre ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->

                                <center>  
                                <img src="../images/avatar.png" height="75" width="75" class="img-circle" alt="User Image" border="2" />
                                <!--<img src="../images/avatar.png" class="img-circle" alt="User Image" style="width:'150' height='150'"> -->
                                    <p>
                                        ADMINISTRADOR
                                        <!-- <small>Member since Nov. 2012</small> -->
                                    </center>
                                    </p>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li> 
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div> 
                                    <div class="pull-right">
                                        <a href="../destruction.php" class="btn btn-default btn-flat">Cerrar sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>