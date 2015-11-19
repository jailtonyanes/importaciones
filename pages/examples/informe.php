<?php
session_start();
 if(!isset($_SESSION['user_authorized'])) header("Location: ../../index.php"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Informe de Colonoscopia</title>
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
    <link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css">

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
        <section class="content-header">
            <h1>
           Resultados del procedimiento Colonoscopia
           
            </h1>
         
        </section>

          <!-- Main content -->
        
        <form action="" method="post" name="captu" id="captu">
          <section class="content">
              
            <!-- Default box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <!-- <h3 class="box-title"></h3> -->
                <input type="hidden" value="<?php echo $_GET['uid'] ?>" name="ocul" id="ocul">
                <div class="box-tools pull-right">
                 <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                 --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
   -->          

                       
                 </div>
              </div>
              <div class="box-body">
             
                    
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-12"> 
                                   
                                <img src="../../imagenes/clinica_gw_logo.jpg" height="160" width="280" class="img-thumbnail img-responsive center-block" /> 
                             </div>
                             
                           
                      

                      </div> <!-- fin de una fila -->
                       <fieldset class="fsStyle">
                              <legend>Datos del  paciente</legend>
                      <div class="row"><!-- una fila -->
                       
                             <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Nombre: Jailton Yanes</label>
                                   <!--  <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento" value="Particular"> -->
                                    
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Cédula: 72260404</label>
                                   
                                    <!-- <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad" value="<?php echo date("Y/m/d") ?>"> -->
                                    
                                  </div> 
                             </div>
                            <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Diagnóstico: Ninguno</label>
                                   <!--  <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento" value="Particular"> -->
                                    
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Premedicación: Ninguna</label>
                                   
                                    <!-- <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad" value="<?php echo date("Y/m/d") ?>"> -->
                                    
                                  </div> 
                             </div> 
                          
                      

                      </div> <!-- fin de una fila -->
                       </fieldset>
                        
                       <div class="row"><!-- una fila -->
                        
                             <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Fecha: <?php echo date('Y-m-d'); ?></label>
                                   <!--  <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento" value="Particular">
                                    --> 
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Número  de la orden: 23423479812</label>
                                   
                                   <!--  <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad" value="Juan Rico">
                                    --> 
                                  </div> 
                             </div>
                                    <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Médico: Juan Rico</label>
                                   <!--  <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento" value="Particular">
                                    --> 
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Procedencia: Particular</label>
                                   
                                   <!--  <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad" value="Juan Rico">
                                    --> 
                                  </div> 
                             </div>
                              
                              
                          
                      

                      </div> <!-- fin de una fila -->
                   
                      




               </div>
              <!-- /.box-body -->

            <!--   <div class="box-footer">
                         <div class="col-md-12 text-right"> 
                           <input type="button"  name="botonIniciar" id="botonIniciar" class="btn btn-primary" value="Siguiente">
                          
                           
                         </div>
              </div> --><!-- /.box-footer-->
            </div><!-- /.box -->
           
               <!-- Default box -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Imágenes Halladas</h3>
              
              </div>
              <div class="box-body">
                   <div class="row" id="volcar"><!-- una fila -->
                <?php
                   include('../../config/conf_postgre.php');
                   include('../../classes/con_postgre.php');
                   include('../../classes/crud_postgre.php');

                   $con = new Connection($server,$port,$dbname,$user,$password);
                   $con->conectar();
                   $crud = new Crud();


                    $crud->setConsulta("select * from capturas where orden_capturas = '$_GET[uid]' and enviar_informe ='si'");
                    $datos = $crud->seleccionar($con->getConnection());
                       $i=0;
                     while ($i<sizeof($datos))
                     {
                  ?>     
                       <div class="col-md-3">
                         
                                   <img src="<?php echo $datos[$i]['contenido'] ?>" height="100" width="200" class="img-thumbnail img-responsive center-block" alt="imgcolono">
                            
                       </div>
                  <?php
                       $i++; 
                     }   


                    $con->desconectar();
                ?>             

            </div> <!-- fin de una fila -->               
              </div>
              <!-- /.box-body -->
              <div class="box-footer ">
               
                    <fieldset class="fsStyle">
                       <legend>Comentarios</legend>
                     <div class="row" id="volcar"><!-- una fila -->
                       <div class="col-md-12"> 
                           <label >Sedación: <?php echo $_GET['uid2'] ?></label>
                       </div>
                        <div class="col-md-12"> 
                           <label >Inspección</label>
                       </div>
                        <div class="col-md-12"> 
                           <label >Tacto Rectal</label>
                       </div>
                        <div class="col-md-12"> 
                           <label >Colon</label>
                       </div>
                        <div class="col-md-12"> 
                           <label >Ciego</label>
                       </div>
                        <div class="col-md-12"> 
                           <label >Diagnóstico Endoscópico</label>
                       </div>

                     </div>
                     </fieldset>   
              </div><!-- /.box-footer-->
            </div><!-- /.box -->








          </section>

          <!-- /.content -->
          
       
        
     </form>
  </div>
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
      <script type="text/javascript" src="../../javascript/colono.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>

    <script type="text/javascript" src="../../plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>
   
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
