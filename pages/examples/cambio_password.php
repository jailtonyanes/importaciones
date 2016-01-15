<?php
session_start();
 if(!isset($_SESSION['user_authorized']))
 { 
  header("Location: ../../index.php"); 
 }
 



?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cambio de password</title>
    <!-- Tell the browser to be responsive to screen width -->
        <link href='../../imagenes/favicon-16x16.png' rel='icon' type='image/x-icon'/>
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
            Cambio de password
           
            </h1>
         
        </section>

          <!-- Main content -->
        
        
          <section class="content">
                      
                  <div class="col-md-12">
                        <form action="" method="post" name="captu" id="captu">
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">Información a cambiar</h3>
                            <div class="box-tools pull-right">
                            <!--   <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                         -->

                                   
                             </div>
                          </div>
                          <div class="box-body">
                                  <div class="row">
                                     <div class="col-md-12">
                                           <div id="error_p" class="alert alert-danger alert-dismissable" style="display:none" >
                                              <button type="button" class="close" id="close_error">&times;</button>
                                                Verifique lo siguiente:
                                                <ul id="valid">
                                                      <li id="input1">El campo Password anterior no debe estar en blanco.</li>
                                                       <li id="input2">El campo Nuevo password no debe estar en blanco.</li>
                                                       <li id="input3">El campo Repita el nuevo password no debe estar en blanco.</li>
                                                       <li id="input4">El campo Nuevo password y el campo Repita el nuevo password no coinciden.</li>
                                                  
                                                </ul>                
                                           </div>
                                     </div>
                                  </div>
                                  <div class="row"><!-- una fila -->
                                         <input type="hidden"  class="form-control" id="idocul" name="idocul" placeholder="Nombre" value="<?php echo $_SESSION['id'] ?>">
    
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="password_ant">Password anterior:</label>
                                               <input type="password"  class="form-control" id="password_ant" name="password_ant" placeholder="Password Anterior">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                  <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="nuevo_password">Nuevo password:</label>
                                               <input type="password"  class="form-control" id="nuevo_password" name="nuevo_password" placeholder="Nuevo Password">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                     <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="retype">Repita el nuevo password:</label>
                                               <input type="password"  class="form-control" id="retype" name="retype" placeholder="Repita el nuevo password">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                            </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                                     <div class="col-md-12 text-right"> 
                                       <input type="button"  name="ingreso_pac" id="ingreso_pac"  class="btn btn-success" value="Cambiar Password" onclick="guardar()">
                                      
                                       
                                     </div>
                          </div><!-- /.box-footer-->
                         
                        </div><!-- /.box -->
                      </form>
                  </div>






          </section>

          <!-- /.content -->
          
       
        
    
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
    <!-- data tables -->
     <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>

     <script type="text/javascript">
          
          
          function validar_campos()
            {
              if($("#password_ant").val()=="" || $("#nuevo_password").val()=="" || $("#retype").val()=="")
              {
                $('html,body').animate({scrollTop:'0px'}, 1000);
                $("#error_p").fadeIn("medium");
                $('#valid').children().fadeOut("medium"); 

                if($("#password_ant").val()=="")
                {
                  $("#input1").fadeIn("medium");
                } 
                 if($("#nuevo_password").val()=="")
                {
                  $("#input2").fadeIn("medium");
                }
                 if($("#retype").val()=="")
                {
                  $("#input3").fadeIn("medium");
                }
              }
              else
              {
                if($("#nuevo_password").val() != $("#retype").val() )
                {
                   $('html,body').animate({scrollTop:'0px'}, 1000);
                    $("#error_p").fadeIn("medium");
                    $('#valid').children().fadeOut("medium"); 
                    $("#input4").fadeIn("medium");
                }
                else
                {
                  //
                        $("#error_p").fadeOut("medium");
                        $("#ingreso_pac").val('Cambiando Password...');
                            $("#ingreso_pac").attr("disabled", "disabled");
                            var form= $("#captu").serialize();
                            $.post('../../admin/change_pass.php',form,
                            function(data)
                             {
                                alert(data);
                               if(jQuery.trim(data)=='Password cambiado exitosamente.')
                               {
                                         $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Guardar");
                                         //limpio campos
                                         $("#password_ant").val("");
                                         $("#nuevo_password").val("");
                                         $("#retype").val("");
                                        
                               }
                               else
                               {
                                      $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Cambiar Password");

                               }

                              });
                   
                  //
                }
              }
              
            }

        

           function guardar()
           {
              if(confirm('Desea guardar los datos ingresados anteriormente?')) 
                 {     
                       validar_campos();     
                 }
           } 


            $(document).ready(function(){
             
                 

                  $("#close_error").bind('click',function(){
                     $("#error_p").fadeOut('medium');
                  });
              //  sacar_usuarios();
                // para guardar los usuarios
                


                //


            });
     </script>
  </body>
</html>
