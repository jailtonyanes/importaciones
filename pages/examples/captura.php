<?php
session_start();
 if(!isset($_SESSION['user_authorized'])) header("Location: ../../index.php"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Captura de imágenes diagnósticas</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
       <?php include('../../includes/header.php') ?>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
       <?php include('../../includes/aside.php') ?>
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      

        <!-- Main content -->
      
  <form action="" method="post" name="captu" id="captu">
        <section class="content">

          <!-- Default box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inspección y toma de fotos. Procedimiento: <?php if($_GET['uid']=='1'){echo 'Colonoscopia';}else{echo'Esofagogastroduodenoscopia (EGD)';} ?></h3>
              <input type="hidden" id="oculto" name="oculto">
              <input type="hidden" id="tipo_proc" name="tipo_proc" value="<?php echo $_GET['uid'] ?>">
              <div class="box-tools pull-right">
               <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
 -->          

                     
               </div>
            </div>
            <div class="box-body">
                      <input type="text" id="control" name="control" value="0" style="display:none">
                      <input type="text" id="sw" name="sw" value="0" style="display:none">
                    <div class="row">
                      
                       <div class="col-md-12 text-center"> 
                         <input type="button"  name="botonIniciar" id="botonIniciar" class="btn btn-primary" value="Iniciar Captura">
                         <input type="button" id="botonFoto" name="botonFoto" class="btn btn-success" value="Tomar Fotos"> 
                         <input type="button" id="singlebutton" name="singlebutton" class="btn btn-warning" value="Guardar Imágenes"> 
                         
                       </div>

                    </div>
                   
                       
            </div>





            <!-- /.box-body -->
            <div class="box-footer">
               <div id="error_p" class="alert alert-danger alert-dismissable" style="display:none">
                  <button type="button" class="close" id="close_error">&times;</button>
                  <strong>¡Error!</strong> Verifique que haya capturado al menos una imágen y que estén seleccionadas para guardar.
                </div>


                 <div id="error_p2" class="alert alert-danger alert-dismissable" style="display:none">
                  <button type="button" class="close" id="close_error2">&times;</button>
                  <strong>¡Error!</strong> Verifique que haya accedido a la cámara.
                </div>

                <div id="sucessfull" class="alert alert-success alert-dismissible" style="display:none" >
                  <button type="button" class="close" id="close_suc" onclick="javscript:cerrar_alert('sucessfull')" >&times;</button>
                  Captura(s) guardada(s) con éxito.
                </div>

                <div id="error_p3" class="alert alert-danger alert-dismissable" style="display:none">
                  <button type="button" class="close" id="close_error_c" onclick="javscript:cerrar_alert('error_p3')">&times;</button>
                  <strong>¡Error en proceso de guardado. Contacte al administrador del sistema!</strong> 
                </div>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        
           <!-- capturas -->
            <div class="row" id="contenidos">
                      
                       <div class="col-md-6">
                                   <!-- -->
                                <!-- Default box -->
                                          <div class="box box-primary">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Cámara</h3>
                                              <div class="box-tools pull-right">
                                               <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                               --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                 -->          

                                                     
                                               </div>
                                            </div>
                                            <div class="box-body">
                                                      
                                                    <div class="row">
                                                      
                                                       <div class="col-md-12 text-center"> 
                                                         <video id="camara" class="col-md-12 text-center img-responsive"  autoplay controls></video>                                                       </div>

                                                    </div>
                                                 
                                                       
                                            </div>





                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                              Inicio
                                            </div><!-- /.box-footer-->
                                          </div><!-- /.box -->
                                   <!-- -->

                       </div>
                        <div class="col-md-3">
                                          <div class="box box-primary">
                                            <div class="box-header with-border">
                                              <h3 class="box-title">Foto # 1</h3>
                                              <div class="box-tools pull-right">
                                            
                                               </div>
                                            </div>
                                            <div class="box-body">
                                                      
                                                    <div class="row">
                                                      
                                                       <div class="col-md-12 text-center"> 
                                                         <canvas id="foto1" class="col-md-12 text-center img-responsive" width="200" height="100" ></canvas>
                                                       </div>

                                                    </div>
                                                   
                                                       
                                            </div>





                                          
                                            <div class="box-footer text-center">
                                              <label for="sel1">
                                                Seleccionar para guardar&nbsp;
                                              </label>
                                               <input type="checkbox" name="sel1" id="sel1">
                                              
                                            </div>
                                          </div>
                                   

                       </div>


            </div> 
           
           <!-- fin capturas -->



        </section>

        <!-- /.content -->
        
        <div id="contenidos2">
             <textarea id="vaso1" name="vaso1" rows="4" cols="50" style="display:none">
             </textarea> 
        </div>
      </div>
</form>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
       <?php include('../../includes/footer.php') ?>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <?php include('../../includes/control_aside.php') ?>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
      <script type="text/javascript" src="../../javascript/captura.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
