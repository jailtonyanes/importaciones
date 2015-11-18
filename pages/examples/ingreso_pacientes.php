<?php
session_start();
 if(!isset($_SESSION['user_authorized'])) header("Location: ../../index.php"); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ingreso de pacientes</title>
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
            Ingreso de pacientes
           
            </h1>
         
        </section>

          <!-- Main content -->
        
        <form action="" method="post" name="captu" id="captu">
          <section class="content">
              
            <!-- Default box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Información básica</h3>
                <div class="box-tools pull-right">
                 <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                 --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
   -->          

                       
                 </div>
              </div>
              <div class="box-body">
             
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="input-group">
                                   
                                    <input type="text" class="form-control" placeholder="Identificación" name="identy" id="identy">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                  </div> 
                             </div>
                             <div class="col-md-6"> 
                                <div class="form-group">
                                   
                                        <select class="form-control" id="tipo_id" name="tipo_id">
                                          <option value="0" selected="selected">Seleccione documento</option>
                                          <option value="1">Cédula de ciudadanía</option>
                                          <option value="2">Tarjeta de identidad</option>
                                          
                                        </select>
                                    </div>
                               
                             </div>
                      

                      </div> <!-- fin de una fila -->
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="p_name" name="p_name" placeholder="Primer Nombre">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Segundo Nombre">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="p_apellido" name="p_apellido" placeholder="Primer Apellido">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-3"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" id="s_apellido" name="s_apellido" placeholder="Segundo Apellido">
                                    
                                  </div> 
                             </div>
                      

                      </div> <!-- fin de una fila -->
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text" readonly="readonly" class="form-control" id="f_nac" name="f_nac" placeholder="Fecha de nacimiento">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text" readonly="readonly" class="form-control" id="edad" name="edad" placeholder="Edad">
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4 "> 
                                   
                                  <div class="form-group">
                                   
                                     <select class="form-control" id="estado_civil" name="estado_civil">
                                          <option value="0" selected="selected">Estado Civil</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select>
                                    
                                  </div> 
                             </div>
                          
                      

                      </div> <!-- fin de una fila -->
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                     <label class="radio-inline"><input type="radio" name="optradio" id="masculino">Masculino</label>
                                     <label class="radio-inline"><input type="radio" name="optradio" id="femenino">Femenino</label>
                                      
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                   <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                                          <option value="0" selected="selected">Tipo de usuario</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select> 
                                  </div> 
                             </div>
                              <div class="col-md-4 "> 
                                   
                                  <div class="form-group">
                                   
                                     <select class="form-control" id="tipo_afiliado" name="tipo_afiliado">
                                          <option value="0" selected="selected">Tipo de afiliado</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select>
                                    
                                  </div> 
                             </div>
                          
                      

                      </div> <!-- fin de una fila -->
                      <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                     <select class="form-control" id="zona_res" name="zona_res">
                                          <option value="0" selected="selected">Zona Residencial</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select> 
                                      
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                   <select class="form-control" id="dpto" name="dpto">
                                          <option value="0" selected="selected">Departamento</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select> 
                                  </div> 
                             </div>
                              <div class="col-md-4 "> 
                                   
                                  <div class="form-group">
                                   
                                     <select class="form-control" id="ciudad" name="ciudad">
                                          <option value="0" selected="selected">Ciudad</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select>
                                    
                                  </div> 
                             </div>
                          
                      

                      </div> <!-- fin de una fila -->

                        <div class="row"><!-- una fila -->
                        
                             <div class="col-md-12"> 
                                   
                                  <div class="form-group">
                                   
                                     <select class="form-control" id="ocupacion" name="ocupacion">
                                          <option value="0" selected="selected">Ocupación</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select> 
                                      
                                    
                                  </div> 
                             </div>
                      
                             
                          
                      

                      </div> <!-- fin de una fila -->
                       <div class="row"><!-- una fila -->
                        
                             <div class="col-md-12"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="ocupacion" name="ocupacion" placeholder="Dirección">
                                      
                                    
                                  </div> 
                             </div>
                      
                             
                          
                      

                      </div> <!-- fin de una fila -->
                         <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                     <input type="text"  class="form-control" id="telefono" name="telefono" placeholder="Teléfono"> 
                                      
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                   <select class="form-control" id="estado" name="estado">
                                          <option value="" selected="selected">Estado</option>
                                          <option value="1">Activo(a)</option>
                                          <option value="2">Inactivo(a)</option>
                                         
                                          

                                          
                                        </select> 
                                  </div> 
                             </div>
                              <div class="col-md-4 "> 
                                   
                                  <div class="form-group">
                                   
                                     <select class="form-control" id="ciudad" name="ciudad">
                                          <option value="0" selected="selected">Grupo Atención</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select>
                                    
                                  </div> 
                             </div>
                      
                             
                          
                      

                      </div> <!-- fin de una fila -->
                       <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                       <select class="form-control" id="ciudad" name="ciudad">
                                          <option value="0" selected="selected">Grupo Atención</option>
                                          <option value="1">Soltero(a)</option>
                                          <option value="2">Casado(a)</option>
                                          <option value="1">Unión libre</option>
                                          <option value="2">Divorciado(a)</option>
                                          <option value="1">Viudo(a)</option>
                                          

                                          
                                        </select> 
                                      
                                    
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="email" name="email" placeholder="E-mail"> 
                                    
                                  </div> 
                             </div>
                          
                      </div> <!-- fin de una fila -->
                       <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                         <select class="form-control" id="acom" name="acom">
                                          <option value=" " selected="selected">Acompañante</option>
                                          <option value="1">Si</option>
                                          <option value="2">No</option>
                                   
                                          

                                          
                                        </select> 
                                      
                                    
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="nom_acom" name="nom_acom" placeholder="Teléfono"> 
                                    
                                  </div> 
                             </div>
                     
                          
                      </div> <!-- fin de una fila -->

                                 <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text"  class="form-control" id="parentezco" name="parentezco" placeholder="Parentezco"> 
                                 
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="dir_acom" name="dir_acom" placeholder="Dirección"> 
                                    
                                  </div> 
                             </div>
                           
                              

                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="teléfono" name="teléfono" placeholder="Teléfono"> 
                                    
                                  </div> 
                             </div>
                          
                          
                      </div> <!-- fin de una fila -->
                     <fieldset class="fsStyle">
                           <legend>Datos del responsable del paciente</legend>


                                 <div class="row"><!-- una fila -->
                        
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text"  class="form-control" id="apellidos_res" name="apellidos_res" placeholder="Apellidos"> 
                                 
                                    
                                  </div> 
                             </div>
                              <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="nombres_res" name="nombres_res" placeholder="Nombres"> 
                                    
                                  </div> 
                             </div>
                           

                          
                          
                      </div> <!-- fin de una fila -->

                               <div class="row"><!-- una fila -->
                        
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                    <input type="text"  class="form-control" id="parentezco_res" name="parentezco_res" placeholder="Parentezco"> 
                                 
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="direccion_res" name="direccion_res" placeholder="Dirección"> 
                                    
                                  </div> 
                             </div>
                              <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                  <input type="text"  class="form-control" id="telefono_res" name="telefono_res" placeholder="Teléfono"> 
                                    
                                  </div> 
                             </div>

                          
                          
                      </div> <!-- fin de una fila -->


                     </fieldset>
                         
              </div>





              <!-- /.box-body -->
<!--               <div class="box-footer">
                         <div class="col-md-12 text-right"> 
                           <input type="button"  name="botonIniciar" id="botonIniciar" class="btn btn-primary" value="Siguiente">
                          
                           
                         </div>
              </div> --><!-- /.box-footer-->
            </div><!-- /.box -->

               <!-- Default box -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title">Información Adicional</h3>
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
                                   
                                   <select class="form-control" id="procedencia" name="procedencia">
                                          <option value="" selected="selected">Procedencia</option>
                                          <option value="1">Activo(a)</option>
                                          <option value="2">Inactivo(a)</option>
                                         
                                          

                                          
                                        </select> 
                                  </div> 
                             </div>
                             <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                     <input type="text"  class="form-control" id="ncontrato" name="ncontrato" placeholder="Número de contrato"> 
                                      
                                    
                                  </div> 
                             </div>
                           
                               <div class="col-md-4"> 
                                   
                                  <div class="form-group">
                                   
                                     <input type="text"  class="form-control" id="fecha_ult_vis" name="fecha_ult_vis" placeholder="Fecha de última visita"> 
                                      
                                    
                                  </div> 
                             </div>
                      
                             
                          
                      

                      </div> <!-- fin de una fila -->
                                   <div class="row"><!-- una fila -->
                        
                                <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                   <select class="form-control" id="plan_salud" name="plan_salud">
                                          <option value="0" selected="selected">Plan Salud</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                         
                                          

                                          
                                        </select> 
                                  </div> 
                             </div>
                             <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                     <input type="text"  class="form-control" id="nhistoria" name="nhistoria" placeholder="Número de historia"> 
                                      
                                    
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
                <h3 class="box-title">Información Consulta/Porcedimiento</h3>
                <div class="box-tools pull-right">
                 <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                 --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
   -->          

                       
                 </div>
              </div>
              <div class="box-body">

                                   <div class="row"><!-- una fila -->
                        
                                   <div class="col-md-6"> 
                                   
                                    <select class="form-control" id="medico" name="medico">
                                          <option value="0" selected="selected">Médico</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                         
                                          

                                          
                                        </select> 
                                  </div>

                                <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                   <select class="form-control" id="consulta" name="consulta">
                                          <option value="0" selected="selected">Consulta/Procedimiento</option>
                                          <option value="1">Consulta</option>
                                          <option value="2">Procedimiento</option>
                                  </select> 
                                  </div> 
                             </div>
                         
                          
                      </div> <!-- fin de una fila -->
                       <div class="row"><!-- una fila -->
                        
                                   <div class="col-md-6"> 
                                   
                                    <select class="form-control" id="proc_consult" name="proc_consult">
                                          <option value="0" selected="selected">Escoja Procedimiento/consulta</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                         
                                          

                                          
                                        </select> 
                                  </div>

                                <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                   <select class="form-control" id="equipo" name="equipo">
                                          <option value="0" selected="selected">Escoja Equipo</option>
                                          <option value="1">Consulta</option>
                                          <option value="2">Procedimiento</option>
                                  </select> 
                                  </div> 
                             </div>
                         
                          
                      </div> <!-- fin de una fila -->
                       <div class="row"><!-- una fila -->
                        
                                   <div class="col-md-6"> 
                                   
                                    <select class="form-control" id="institucion" name="institucion">
                                          <option value="0" selected="selected">Escoja Institución</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                         
                                          

                                          
                                        </select> 
                                  </div>

                                <div class="col-md-6"> 
                                   
                                  <div class="form-group">
                                   
                                   <input type="text"  class="form-control" id="n_orden" name="n_orden" placeholder="Número de orden">
                                  </div> 
                             </div>
                         
                          
                      </div> <!-- fin de una fila -->
                      




               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                         <div class="col-md-12 text-right"> 
                           <input type="button"  name="ingreso_pac" id="ingreso_pac"  class="btn btn-success" value="Siguiente">
                          
                           
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
      <script type="text/javascript" src="../../javascript/info_pacientes.js"></script>

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
