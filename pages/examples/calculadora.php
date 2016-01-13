<?php
 include("../../includes/permisions.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
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
            Calculadora
           
            </h1>
         
        </section>

          <!-- Main content -->
        
        
          <section class="content">
                      
                  <div class="col-md-12">
                        <form action="" method="post" name="captu" id="captu">
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Información a digitar</h3>
                            <div class="box-tools pull-right">
                            <!--   <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                         -->
                        
                                   
                             </div>
                          </div>
                          <div class="box-body">
                               <div class="col-md-4"> <!-- columna de 1/3 -->
                             
                                  <div class="row"><!-- una fila -->
                                         
    
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="precio">Precio del artículo (USD):</label>
                                               <input type="text"  class="form-control" id="precio" name="precio" placeholder="Precio" tabindex="10">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                  <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                                <div class="form-group">
                                                <label for="state_tax">State Tax:</label>
                                               <select name="state_tax" id="state_tax" class="form-control" tabindex="50">
                                                 <option value="Escoja Opción">Escoja Opción</option>
                                                 <option value="SI">SI</option>
                                                 <option value="NO">NO</option>
                                               </select>
                                            </div>


                                              
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                     <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                            <div class="form-group">
                                                <label for="itbms">ITBMS (USD):</label>
                                               <input type="text" readonly  class="form-control" id="itbms" name="itbms" placeholder="ITBMS">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                               </div> <!-- fin columna de 1/3 -->

                                 <div class="col-md-4"> <!-- columna de 1/3 -->
                                 
                                   <div class="row"><!-- una fila -->
                                        <div class="col-md-6"> 
                                           <div class="form-group">
                                                <label for="cantidad">Cantidad:</label>
                                               <input type="text"  class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" tabindex="20">
                                            </div>


                                        </div> 
                                         <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="costo_ship">Costo shipping (USD):</label>
                                               <input type="text"  class="form-control" id="costo_ship" name="costo_ship" placeholder="Costo shipping" tabindex="30">
                                            </div> 

                                           
                                        </div>
                                  </div> <!-- fin de una fila -->
                                  <div class="row"><!-- una fila -->
                                         
                                         <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="pa">Precio web (USD):</label>
                                               <input type="text" readonly  class="form-control" id="pa" name="pa" placeholder="Precio artículo">
                                            </div> 
                                        </div>
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="flete">Flete SMI (USD):</label>
                                               <input type="text" readonly class="form-control" id="flete" name="flete" placeholder="Flete SMI">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                 
                                     <div class="row"><!-- una fila -->
                                        <div class="col-md-12"> 
                                           <div class="form-group">
                                                <label for="neto_pag">Total (USD):</label>
                                               <input type="text" readonly  class="form-control" id="neto_pag" name="neto_pag" placeholder="Total (USD)">
                                            </div>  
                                        </div> 
                                  </div> <!-- fin de una fila -->
                               </div> <!-- fin columna de 1/3 -->

                                 <div class="col-md-4"> <!-- columna de 1/3 -->
                                
                                  <div class="row"><!-- una fila -->
                                         
    
                                        <div class="col-md-12"> 
                                            
                                            <div class="form-group">
                                                <label for="peso">Peso (LBS):</label>
                                               <input type="text"  class="form-control" id="peso" name="peso" placeholder="Peso" tabindex="40">
                                            </div> 
                                           
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                   <div class="row"><!-- una fila -->
                                         
    
                                        <div class="col-md-12"> 
                                            
                                             
                                             <div class="form-group">
                                                <label for="subtotal">Subtotal (USD):</label>
                                               <input type="text" readonly class="form-control" id="subtotal" name="subtotal" placeholder="Subtotal">
                                            </div>

                                            
                                        </div> 
                                  </div> <!-- fin de una fila -->
                                   <div class="row"><!-- una fila -->
                                         
    
                                        <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="porcentaje">(%) de abono :</label>
                                               <select    class="form-control" id="porcentaje" name="porcentaje" onchange="porcentual()" >
                                                      <option value="0">0</option>
                                                     <?php
                                                       $i =5;
                                                       while ($i<=100)
                                                       {
                                                     ?> 
                                                      <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                     <?php
                                                          $i= $i+5;
                                                       }
                                                     ?> 
                                               </select>
                                            </div> 
                                        </div> 
                                          <div class="col-md-6"> 
                                            <div class="form-group">
                                                <label for="va_cancel">Valor a abonar (USD):</label>
                                               <input type="text"  readonly class="form-control" id="va_cancel" name="va_cancel" placeholder="Valor a cancelar">
                                            </div> 
                                        </div> 
                                  </div> <!-- fin de una fila -->
                       
                                    
                               </div> <!-- fin columna de 1/3 -->

                            

                            </div>

                          <!-- /.box-body -->
                          <div class="box-footer">
                                     <div class="col-md-12 text-right"> 
                                       <input type="button"  name="ingreso_pac" id="ingreso_pac"  class="btn btn-success" value="Calcular" onclick="costo_traida()">
                                      
                                       
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
          
          function porcentual()
          {
              var va_cancel = parseFloat($("#neto_pag").val())*parseFloat($("#porcentaje").val())/100;

            $("#va_cancel").val(Math.round(va_cancel * 100)/100 );
          }


          function costo_traida()
            {
               var q= parseInt($("#cantidad").val());
               var precio = parseFloat($("#precio").val());
               var st_t =0;
               var ship = parseFloat($("#costo_ship").val());
               if($("#state_tax").val()=='SI')
               {
                 var st_t = 0.07;
               }
               //var precio_web = parseFloat($("#costo_ship").val());

               $("#pa").val( ( (q*precio+ship)*st_t)+ (q*precio+ship) );

               //alert($("#pa").val());
              fletesmi();
            }

            function fletesmi()
            {
                var pa = parseFloat($("#pa").val());
                var peso = parseFloat($("#peso").val());
                var se =0;
                var sc = 6;

                //calcular servicio de entrega
                  if(peso < 2)
                  {
                    se =0;
                  }
                  else
                  {
                    if(peso == 2)
                    {
                        se = 6.5;
                    }
                    else
                    {
                      if(peso > 2 && peso < 100 )
                      {
                          se = peso * 2.75;
                      }
                      else 
                      {
                         if(peso > 100)
                         {
                            se = peso * 2.55;
                         }
                      }
                    }
                  }

                //fin calcular servicio de entrega


                //tramite de manejo
            
                 var tm =0;
                  if( pa < 50 )
                  {
                     tm = 2
                  }
                  else
                  {
                     if(pa >= 50)
                      {
                         tm = (pa * 0.102);
                      } 
                  }
                //fin tramite de manejo

                if( pa < 50 && peso <= 1  )
                {
                   $("#flete").val(12);
                }
                else
                {
                   var  manejo_miami = (pa * 0.053);
                   $("#flete").val(se + sc+ manejo_miami+ tm);
                  

                   $("#flete").val(Math.round ($("#flete").val() * 100) / 100);

                }

                //subtotal
                  var sub_t = parseFloat($("#pa").val()) + parseFloat($("#flete").val()); 

                  $("#subtotal").val(Math.round (sub_t * 100) / 100);
                //

                //itbms
                 var itbms = parseFloat($("#flete").val()* 0.07);
                
                  $("#itbms").val(Math.round(itbms * 100)/100 );
                //fin itbms

                //total a pagar
                   var neto_pag = parseFloat($("#subtotal").val()) + parseFloat($("#itbms").val());

                   $("#neto_pag").val(Math.round(neto_pag*100)/100);
                //fin total a pagar
            }

                   

           function guardar()
           {
              if(confirm('Desea guardar los datos ingresados anteriormente?')) 
                 {     
                       validar_campos();     
                 }
           } 


            $(document).ready(function(){
             
                 

                  /*$("#close_error").bind('click',function(){
                     $("#error_p").fadeOut('medium');
                  });*/
              //  sacar_usuarios();
                // para guardar los usuarios
                


                //


            });
     </script>
  </body>
</html>
