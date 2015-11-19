<?php
session_start();
 if(!isset($_SESSION['user_authorized'])) header("Location: ../../index.php"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Procedimiento:EGD</title>
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
            Esofagogastroduodenoscopia (EGD)
           
            </h1>
         
        </section>

          <!-- Main content -->
        
        <form action="" method="post" name="captu" id="captu">
          <section class="content">
              
            <!-- Default box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Información del paciente</h3>
                <input type="hidden" value="<?php echo $_GET['uid'] ?>" name="ocul" id="ocul">
                <div class="box-tools pull-right">
                 <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                 --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
   -->          

                       
                 </div>
              </div>
              <div class="box-body">
             
                    
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Cédula</label>
                                    <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Primer Nombre" readonly="readonly" value="72260404">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Nombres y Apellidos</label>
                                    <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Segundo Nombre" readonly="readonly" value="Jailton Joel Yanes Romero">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">#Orden</label>
                                    <input type="text" class="form-control" id="p_apellido" name="p_apellido" readonly="readonly" placeholder="Primer Apellido" value="9834728213">
                                    
                                  </div> 
                             </div>
                           
                      

                      </div> <!-- fin de una fila -->
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">#Empresa</label>
                                    <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento" value="Particular">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Fecha de captura</label>
                                   
                                    <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad" value="<?php echo date("Y/m/d") ?>">
                                    
                                  </div> 
                             </div>
                              
                          
                      

                      </div> <!-- fin de una fila -->
                       <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Procedencia</label>
                                    <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento" value="Particular">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Médico Remitente</label>
                                   
                                    <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad" value="Juan Rico">
                                    
                                  </div> 
                             </div>
                              
                          
                      

                      </div> <!-- fin de una fila -->
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Diagnóstico</label>
                                    <input type="text"  class="form-control" id="f_nac" name="f_nac" >
                                    
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   <label for="exampleInputEmail1">Premedicación</label>
                                   
                                    <input type="text"  class="form-control" id="edad" name="edad">
                                    
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
            <div class="row" id="volcar"><!-- una fila -->
                <?php
                   include('../../config/conf_postgre.php');
                   include('../../classes/con_postgre.php');
                   include('../../classes/crud_postgre.php');

                   $con = new Connection($server,$port,$dbname,$user,$password);
                   $con->conectar();
                   $crud = new Crud();


                    $crud->setConsulta("select * from capturas where orden_capturas = '$_GET[uid]'");
                    $datos = $crud->seleccionar($con->getConnection());
                       $i=0;
                     while ($i<sizeof($datos))
                     {
                  ?>     
                       <div class="col-md-3">
                          <div class="box box-primary">
                              <div class="box-header with-border">
                                <h3 class="box-title">Foto # <?php echo $i +1 ?></h3>
                              </div>
                              <div class="box-body">
                                <div class="row">
                                  <div class="col-md-12 text-center">
                                   <img src="<?php echo $datos[$i]['contenido'] ?>" height="100" width="200" class="img-responsive" alt="imgcolono">
                                  </div>
                                </div>
                              </div>
                              <div class="box-footer text-center">
                                <label for="sel1"> Seleccionar para el informe  </label>
                                <input id="sel<?php echo $datos[$i]['id'] ?>" name="sel<?php echo $datos[$i]['id'] ?>" value="<?php echo $datos[$i]['id'] ?>" type="checkbox" id="sel<?php echo $datos[$i]['id'] ?>" onclick=" javascript:marcar(this.id)">

                              </div>
                          </div>
                       </div>
                  <?php
                       $i++; 
                     }   


                    $con->desconectar();
                ?>             

            </div> <!-- fin de una fila -->
               <!-- Default box -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Observaciones</h3>
              
              </div>
              <div class="box-body">

                        <div class="row"><!-- una fila -->
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                     <label>Sedación</label>
                                     <textarea class="form-control" name="sedacion" id="sedacion"  placeholder="Escriba sus observaciones" rows="3"></textarea>
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                     <label>Esófago</label>
                                     <textarea class="form-control" name="esofago" id="esofago" placeholder="Escriba sus observaciones" rows="3"></textarea>
                                  </div> 
                             </div>
                       
                        </div> <!-- fin de una fila -->  
                         <div class="row"><!-- una fila -->
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                     <label>Estómago</label>
                                     <textarea class="form-control" name="estomago" id="estomago" placeholder="Escriba sus observaciones" rows="3"></textarea>
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                     <label>Diagnóstico</label>
                                     <textarea class="form-control" name="diag" id="diag" placeholder="Escriba sus observaciones" rows="3"></textarea>
                                  </div> 
                             </div>
                       
                        </div> <!-- fin de una fila -->  
                       
                       




               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                         <div class="col-md-12 text-right"> 
                           <input type="button"  name="ingreso_pac" id="ingreso_pac"  class="btn btn-success" value="Ver Infrome">
                          
                           
                         </div>
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
      <script type="text/javascript" src="../../javascript/egd.js"></script>

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
