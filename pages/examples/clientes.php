<?php
 include("../../includes/permisions.php");

 //me conecto para sacar las provincias
  include('../../_include/configuration.php');
  include('../../_classes/conectar.php');
  include('../../_classes/crud.php');

  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clientes</title>
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
           Clientes
           
            </h1>
         
        </section>

          <!-- Main content -->
        
        
          <section class="content">
                      <div class="col-md-9">
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Lista de clientes en el sistema</h3>
                            <div class="box-tools pull-right">
                             <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                             --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
               -->          

                                   
                             </div>
                          </div>
                          <div class="box-body">
                                  <div class="row"><!-- una fila -->
                                     <div class="col-sm-12" id="camello">
                                        
                                      </div>   
                                  </div> <!-- fin de una fila -->
                           </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                                   <!--   <div class="col-md-12 text-right"> 
                                       <input type="button"  name="ingreso_pac" id="ingreso_pac"  class="btn btn-success" value="Siguiente">
                                      
                                       
                                     </div> -->
                          </div><!-- /.box-footer-->
                        </div><!-- /.box -->

                  </div>
                  <div class="col-md-3">
                        <form action="" method="post" name="captu" id="captu">
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">Información de registro</h3>
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
                                                      <li id="input1">El campo CIP/RUC no debe estar en blanco.</li>
                                                       <li id="input2">El campo Nombre no debe estar en blanco.</li>
                                                       <li id="input3">El campo Apellido no debe estar en blanco.</li>
                                                       <li id="input4">El campo Dirección no debe estar en balnco.</li>
                                                       <li id="input5">Debe elegir una provincia.</li> 
                                                       <li id="input6">Debe elegir un distrito.</li>
                                                       <li id="input7">El campo teléfono 1 no debe ir en blanco.</li>
                                                       <li id="input8">El campo teléfono 2 no debe ir en blanco.</li> 
                                                       <li id="input9">El campo E-mail no debe ir en blanco.</li>  
                                                </ul>                
                                           </div>
                                     </div>
                                  </div>
                                  <div class="row"><!-- una fila -->
                                         <input type="hidden"  class="form-control" id="idocul" name="idocul" placeholder="Nombre">
    
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="cip_ruc">CIP/RUC:</label>
                                               <input type="text"  class="form-control" id="cip_ruc" name="cip_ruc" placeholder="CIP/RUC">
                                            </div> 
                                        </div> 
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="nombre">Nombre:</label>
                                               <input type="text"  class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                  <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="apellido">Apellido:</label>
                                               <input type="text"  class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                     <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="direccion">Dirección:</label>
                                               <input type="text"  class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                     <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="provincia">Provincia:</label>
                                               <select   class="form-control" id="provincia" name="provincia" onchange="sacar_distrito()">
                                                     <option value="Escoja opción" slected="selected">Escoja opción</option>
                                                    <?php
                                                         $crud->setConsulta("select nombre from provincia order by nombre asc");
                                                         $datos1 = $crud->seleccionar($con->getConection());
                                                         $i=0;
                                                         while ($i<sizeof($datos1))
                                                         {   
                                                     ?>
                                                          <option value="<?php echo $datos1[$i]['nombre'] ?>"><?php echo $datos1[$i]['nombre'] ?></option>
                                                     <?php
                                                           $i++;
                                                          $con->desconectar();
                                                         } 
                                                     ?>

                                               </select>
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                           <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="distrito">Distrito:</label>
                                               <select   class="form-control" id="distrito2" name="distrito2">
                                               </select>
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                    <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="telefono1">Teléfono 1:</label>
                                               <input type="text"  class="form-control" id="telefono1" name="telefono1" placeholder="Teléfono 1">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                    <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="direccion">Teléfono 2:</label>
                                               <input type="text"  class="form-control" id="telefono2" name="telefono2" placeholder="Teléfono 2">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                   <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="email">E-mail:</label>
                                               <input type="text"  class="form-control" id="email" name="email" placeholder="E-mail">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                  
                                  




                           </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                                     <div class="col-md-12 text-right"> 
                                       <input type="button"  name="ingreso_pac" id="ingreso_pac"  class="btn btn-success" value="Guardar" onclick="guardar()">
                                      
                                       
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
              if($("#cip_ruc").val()=="" ||  $("#nombre").val()=="" || $("#apellido").val()=="" || $("#direccion").val()=="" || $("#provincia").val()=="Escoja opción" || $("#distrito").val()=="Escoja opción" || $("#telefono1").val()==""  || $("#telefono2").val()==""  || $("#email").val()==""   )
              {
                $('html,body').animate({scrollTop:'0px'}, 1000);
                $("#error_p").fadeIn("medium");
                $('#valid').children().fadeOut("medium"); 

                if($("#cip_ruc").val()=="")
                {
                  $("#input1").fadeIn("medium");
                } 
                if($("#nombre").val()=="")
                {
                  $("#input2").fadeIn("medium");
                }
                 if($("#apellido").val()=="")
                {
                  $("#input3").fadeIn("medium");
                }
                 if($("#direccion").val()=="")
                {
                  $("#input4").fadeIn("medium");
                }
                   if($("#provincia").val()=="Escoja opción")
                {
                  $("#input5").fadeIn("medium");
                } 
                 if($("#distrito").val()=="Escoja opción")
                {
                  $("#input6").fadeIn("medium");
                }
                 if($("#telefono1").val()=="")
                {
                  $("#input7").fadeIn("medium");
                }
                  if($("#telefono2").val()=="")
                {
                  $("#input8").fadeIn("medium");
                }
                  if($("#email").val()=="")
                {
                  $("#input9").fadeIn("medium");
                }
              

              }
              else
              {
                   $("#error_p").fadeOut("medium");
                   $("#ingreso_pac").val('Guardando Datos...');
                            $("#ingreso_pac").attr("disabled", "disabled");
                            var form= $("#captu").serialize();
                            $.post('../../admin/guarda_clientes.php',form,
                            function(data)
                             {
                                alert(data);
                               if(jQuery.trim(data)=='Cliente Guardado con exito.')
                               {
                                         $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Guardar");
                                         //limpio campos
                                          $("#cip_ruc").val("")
                                         $("#nombre").val("");
                                         $("#apellido").val("");
                                         $("#direccion").val("");
                                         $("#provincia").val("Escoja opción");
                                         $("#distrito").val("Escoja opción");
                                         $("#telefono1").val("");
                                         $("#telefono2").val("");
                                         $("#email").val("");
                                         

                                         sacar_usuarios();

                                        
                               }
                               else
                               {
                                    if(jQuery.trim(data)=='Cliente actualizado exitosamente.')
                                    {
                                         $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Guardar");
                                         //limpio campos
                                         $("#cip_ruc").val("")
                                         $("#nombre").val("");
                                         $("#apellido").val("");
                                         $("#direccion").val("");
                                         $("#provincia").val("Escoja opción");
                                         $("#distrito").val("Escoja opción");
                                         $("#telefono1").val("");
                                         $("#telefono2").val("");
                                         $("#email").val("");
                                         

                                         sacar_usuarios();
                                    } 
                                    else
                                    {
                                         $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Guardar");
                                    }   
                               

                               }

                              });
              }
              
            }

         function edit_user(user){
          
          $.get('../../admin/xml_clientes.php?ocul='+user,{
            type: 'xml'
          },
          function(xml){
             $("#idocul").val($(xml).find('id').text());
           $("#cip_ruc").val($(xml).find('cip_ruc').text());
           $("#nombre").val($(xml).find('nombre').text());
           $("#apellido").val($(xml).find('apellido').text());
           $("#direccion").val($(xml).find('direccion').text());
           $("#provincia").val($(xml).find('provincia').text());
           $("#distrito2").val($(xml).find('distrito').text());
           $("#telefono1").val($(xml).find('telefono1').text());
           $("#telefono2").val($(xml).find('telefono2').text());
           $("#email").val($(xml).find('email').text());
           $("#ingreso_pac").val('Actualizar');
          // alert($(xml).find('distrito').text());
           
          });
         
        }

        function delete_user(users)
          {
            

              if(confirm('Desea eliminar el cliente seleccionado?'))
              { 

                $.post('../../admin/eliminar_clientes.php',{

                    condition: users

                  },

                  function(data){

                         sacar_usuarios();

                  }

                );
              }
          }

          
         function sacar_distrito()
         {
           $("#distrito").load("../../admin/saca_distrito.php?uid="+$("#provincia").val(),function(){
                 
                  $(this).fadeIn("medium");
                  });
         }

          function sacar_distrito2()
         {
           $("#distrito2").load("../../admin/saca_distrito2.php",function(){
                 
                  $(this).fadeIn("medium");
                  });
         }

          function sacar_usuarios()
          {
                $("#camello").load("../../admin/saca_clientes.php",function(){
                  $('#table_id').DataTable();
                  $(this).fadeIn("medium");
                  });
                
  
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
                sacar_usuarios();
                 sacar_distrito2();
                // para guardar los usuarios
                


                //


            });
     </script>
  </body>
</html>
