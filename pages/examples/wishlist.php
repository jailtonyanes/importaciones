<?php
 include("../../includes/permisions.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wishlist</title>
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
           Wishlist
           
            </h1>
         
        </section>

          
<!-- Ventana modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>
<!-- fin ventana modal -->

          <!-- Main content -->

           <section class="content">
                      <div class="col-md-12">
                        <div class="box box-success">
                          <div class="box-header with-border">
                            <h3 class="box-title">Información del pedido</h3>
                            <div class="box-tools pull-right">
                            <!--   <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                            -->  <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                         -->
                             
                                   
                             </div>
                          </div>
                          <div class="box-body">
                               <form action="" method="post" name="captu" id="captu">
                                  <div class="row"><!-- una fila -->
                                      <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">SMI:</label>
                                               <input type="text"  class="form-control" id="smi" name="smi" placeholder="SMI">
                                            </div> 
                                      </div>  
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">CIP/RUC:</label>
                                               <input type="text"  class="form-control" id="cip_ruc" name="cip_ruc" placeholder="CIP/RUC">
                                            </div> 
                                      </div> 
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">A NOMBRE DE:</label>
                                               <input type="text"  class="form-control" id="cliente" name="cliente" placeholder="A nombre de">
                                            </div> 
                                      </div> 

                                  </div> <!-- fin de una fila -->
                                    <div class="row"><!-- una fila -->
                                      <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">DIRECCIÓN:</label>
                                               <input type="text"  class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                                            </div> 
                                      </div>  
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">PROVINCIA:</label>
                                               <input type="text"  class="form-control" id="provincia" name="provincia" placeholder="Provincia">
                                            </div> 
                                      </div> 
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">DISTRITO:</label>
                                               <input type="text"  class="form-control" id="distrito" name="distrito" placeholder="Distrito">
                                            </div> 
                                      </div> 
                                       
                                  </div> <!-- fin de una fila -->
                                    <div class="row"><!-- una fila -->
                                      <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">TELÉFONO 1</label>
                                               <input type="text"  class="form-control" id="tel1" name="tel1" placeholder="Telefono 1">
                                            </div> 
                                      </div>  
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">TELÉFONO 2</label>
                                               <input type="text"  class="form-control" id="tel2" name="tel2" placeholder="Telefono 2">
                                            </div> 
                                      </div> 
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">E-MAIL:</label>
                                               <input type="text"  class="form-control" id="email" name="email" placeholder="E-mail">
                                            </div> 
                                      </div> 
                                       
                                  </div> <!-- fin de una fila -->

                                </form>  
                           </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                                     <div class="col-md-12 text-right"> 
                                       <input type="button"  name="cotizar" id="cotizar"  class="btn btn-primary" value="Generar Cotización">
                                      
                                       
                                     </div>
                          </div><!-- /.box-footer-->
                        </div><!-- /.box -->

                  </div>
                  






          </section>
        
        
          <section class="content">
                      <div class="col-md-12">
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Lista de items</h3>
                            <div class="box-tools pull-right">
                             <!--  <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                             --> <!--  <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
               -->          
                             
                                   
                             </div>
                          </div>
                          <div class="box-body">
                                  <div class="row"><!-- una fila -->
                                     <div class="col-sm-12">
                                        <!-- tabla -->
                                         

                                         <table class="table table-bordered table-striped table-condensed">
                                           <tr>
                                             <th class="text-center">FECHA</th>
                                             <th class="text-center">SMI</th>
                                             <th class="text-center">TIPO DE SERVICIO</th>
                                             <th class="text-center">CANTIDAD</th>
                                             <th class="text-center">DESCRIPCIÓN</th>
                                             <th class="text-center">WEB-LINK</th>
                                             <th class="text-center">PRECIO (USD)</th>
                                             <th class="text-center">SHIPPING (USD)</th>
                                             <th class="text-center">ACCIONES</th>


                                             
                                             
                                           </tr>
                                           <tr>
                                             <td align="left">2016-01-23</td>
                                             <td align="left">SMI-1</td>
                                             <td align="left">Compras por internet</td>
                                             <td align="right">2</td>
                                             <td align="left">Winterforce LT Winter Radial Tire</td>
                                             <td align="left">http://www.pricemachine.com/FIRE-STONE-Winterforce-LT-6118730757/psmus/prices-html</td>
                                             <td align="right">196</td>
                                             <td align="right">0</td>
                                             <td align="center"><a style="cursor:pointer" class="fa  fa-plus-square-o" title="Nuevo">&nbsp;&nbsp;<a style="cursor:pointer" class="fa fa-pencil-square-o" title="Editar"></a>&nbsp;&nbsp;
                                               <a style="cursor:pointer" class="fa fa-minus-circle" title="Eliminar">
                                             </td>
                                             
                                           </tr>
                                            <tr>
                                             <td align="left">2016-01-23</td>
                                             <td align="left">SMI-1</td>
                                             <td align="left">Compras por internet</td>
                                             <td align="right">1</td>
                                             <td align="left">Nitrus bottle (10 lbs)</td>
                                             <td align="left">http://www.summitracing.com/int/search/product-line/nos-nitrous-bottles?N=301170%2B4294886498</td>
                                             <td align="right">234.95</td>
                                             <td align="right">0</td>
                                                     <td align="center"><a style="cursor:pointer" class="fa  fa-plus-square-o" title="Nuevo" onclick="modal_show()">&nbsp;&nbsp;<a style="cursor:pointer" class="fa fa-pencil-square-o" title="Editar"></a>&nbsp;&nbsp;
                                               <a style="cursor:pointer" class="fa fa-minus-circle" title="Eliminar">
                                             </td>
                                             
                                           </tr>
                                         </table>


                                        <!-- fin tabla -->
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
              if($("#nombre").val()=="" || $("#apellido").val()=="" || $("#nick").val()=="" || $("#password").val()=="" || $("#estado").val()=="Escoja opción" || $("#perfil").val()=="Escoja opción"  )
              {
                $('html,body').animate({scrollTop:'0px'}, 1000);
                $("#error_p").fadeIn("medium");
                $('#valid').children().fadeOut("medium"); 

                if($("#nombre").val()=="")
                {
                  $("#input1").fadeIn("medium");
                } 
                 if($("#apellido").val()=="")
                {
                  $("#input2").fadeIn("medium");
                }
                 if($("#nick").val()=="")
                {
                  $("#input3").fadeIn("medium");
                }
                 if($("#password").val()=="")
                {
                  $("#input4").fadeIn("medium");
                }
                 if($("#estado").val()=="Escoja opción")
                {
                  $("#input5").fadeIn("medium");
                } 
                 if($("#perfil").val()=="Escoja opción")
                {
                  $("#input6").fadeIn("medium");
                }

              }
              else
              {
                   $("#error_p").fadeOut("medium");
                   $("#ingreso_pac").val('Guardando Datos...');
                            $("#ingreso_pac").attr("disabled", "disabled");
                            var form= $("#captu").serialize();
                            $.post('../../admin/guarda_usuarios.php',form,
                            function(data)
                             {
                                alert(data);
                               if(jQuery.trim(data)=='Usuario Guardado con exito.')
                               {
                                         $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Guardar");
                                         //limpio campos
                                         $("#nombre").val("");
                                         $("#apellido").val("");
                                         $("#nick").val("");
                                         $("#password").val("");
                                         $("#estado").val("Escoja opción");
                                         $("#perfil").val("Escoja opción");
                                         

                                         sacar_usuarios();

                                        
                               }
                               else
                               {
                                    if(jQuery.trim(data)=='Usuario actualizado exitosamente.')
                                    {
                                         $("#ingreso_pac").attr("disabled", false);
                                         $("#ingreso_pac").val("Guardar");
                                         //limpio campos
                                         $("#nombre").val("");
                                         $("#apellido").val("");
                                         $("#nick").val("");
                                         $("#password").val("");
                                         $("#estado").val("Escoja opción");
                                         $("#perfil").val("Escoja opción");
                                         

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
         
          $.get('../../admin/xml_usuarios.php?ocul='+user,{
            type: 'xml'
          },
          function(xml){
           $("#nombre").val($(xml).find('nombre').text());
           $("#apellido").val($(xml).find('apellido').text());
           $("#nick").val($(xml).find('nick').text());
           $("#password").val($(xml).find('password').text());
           $("#idocul").val($(xml).find('id').text());
           $("#perfil").val($(xml).find('perfil').text());
           $("#estado").val($(xml).find('estado').text());
           $("#ingreso_pac").val('Actualizar');
           

          });
        }

        function delete_user(users)
          {
            

              if(confirm('Desea eliminar el usuario seleccionado?'))
              { 

                $.post('../../admin/eliminar_usuarios.php',{

                    condition: users

                  },

                  function(data){

                         sacar_usuarios();

                  }

                );
              }
          }

          function sacar_usuarios()
          {
                $("#camello").load("../../admin/saca_usuarios.php",function(){
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
               // sacar_usuarios();
                // para guardar los usuarios
                


                //


            });
     </script>
  </body>
</html>
