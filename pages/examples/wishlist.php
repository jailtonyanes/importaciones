<?php
 include("../../includes/permisions.php");
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cotización</title>
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
           Cotización
           
            </h1>
         
        </section>

 


<!-- Ventana modal -->
<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4>Info del cliente</h4>
         </div>
         <div class="modal-body">
                               
                                <div class="row" style="margin-left:28%"> 
                                  <div class="col-md-12">       
                                            <div class="form-group">
                                                <label for="provincia">Seleccione Cliente:</label>
                                                <br/>
                                               <select   class="selectpicker form-group"  data-live-search="true" id="cliente" name="cliente">
                                                     <option value="Escoja opción" slected="selected">Escoja opción</option>
                                                    <?php
                                                         $crud->setConsulta("SELECT id,nombre,apellido,cip_ruc FROM cliente ORDER BY nombre ASC, apellido ASC");
                                                         $datos1 = $crud->seleccionar($con->getConection());
                                                         $i=0;
                                                         while ($i<sizeof($datos1))
                                                         {   
                                                     ?>
                                                          <option value="<?php echo $datos1[$i]['cip_ruc'].'**'.$datos1[$i]['nombre'].' '.$datos1[$i]['apellido'] ?>"><?php echo $datos1[$i]['cip_ruc'].'**'.$datos1[$i]['nombre'].' '.$datos1[$i]['apellido'] ?></option>
                                                     <?php
                                                           $i++;
                                                          $con->desconectar();
                                                         } 
                                                     ?>
                                               </select>
                                            </div> 
                                   </div>         
                               </div>             
                                        
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-primary" onclick="sacar_info_cli()">Aceptar</button>
         </div>
      </div>
    </div>                                       
</div>
<!-- fin ventana modal -->

<!-- Ventana modal link -->
<div class="modal fade" id="milink" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4>Cotización</h4>
         </div>
         <div class="modal-body">
                               
                             
                                       <div class="row"> 
                                          <div class="col-md-12">       
                                            
                                            <input type="hidden" id="referencia" name="referencia">
                                            <div class="form-group">
                                                <label>Web link</label>
                                                <textarea class="form-control" id="lk" name="lk" placeholder="Web link" rows="3"></textarea>
                                            </div> 
                                         </div>         
                                      </div>
                                          
                                        
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-primary" onclick="cierro_link()">Aceptar</button>
         </div>
      </div>
    </div>                                       
</div>
<!-- fin ventana modal link -->
<!-- Ventana modal descrip -->
<div class="modal fade" id="midescri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4>Cotización</h4>
         </div>
         <div class="modal-body">
                               
                                <div class="row"> 
                                  <div class="col-md-12"> 
                                  <input type="hidden" id="referencia2" name="referencia2">      
                                      <div class="form-group">
                                          <label>Descripción</label>
                                          <textarea class="form-control" id="descri_t" name="descri_t" placeholder="Descripción" rows="3"></textarea>
                                      </div> 
                                   </div>         
                               </div>             
                                        
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-primary" onclick="cierro_descrip()">Aceptar</button>
         </div>
      </div>
    </div>                                       
</div>
<!-- fin ventana modal descrip -->



          <!-- Main content -->

           <section class="content">
                      <div class="col-md-12">
                        <div class="box box-success">
                          <div class="box-header with-border">
                            <h3 class="box-title">Información del cliente</h3>
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
                                                <label for="smi">SMI (Click en este campo):</label>
                                               <input type="text" readonly  class="form-control" id="smi" name="smi" placeholder="SMI" data-toggle="modal" data-target="#miventana">
                                            </div> 
                                      </div>  
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cip_ruc">CIP/RUC:</label>
                                               <input type="text" readonly  class="form-control" id="cip_ruc" name="cip_ruc" placeholder="CIP/RUC">
                                            </div> 
                                      </div> 
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="cliente2">A NOMBRE DE:</label>
                                               <input type="text" readonly  class="form-control" id="cliente2" name="cliente2" placeholder="A nombre de">
                                            </div> 
                                      </div> 

                                  </div> <!-- fin de una fila -->
                                    <div class="row"><!-- una fila -->
                                      <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="direccion">DIRECCIÓN:</label>
                                               <input type="text" readonly  class="form-control" id="direccion" name="direccion" placeholder="Dirección">
                                            </div> 
                                      </div>  
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="provincia">PROVINCIA:</label>
                                               <input type="text" readonly  class="form-control" id="provincia" name="provincia" placeholder="Provincia">
                                            </div> 
                                      </div> 
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="distrito">DISTRITO:</label>
                                               <input type="text" readonly  class="form-control" id="distrito" name="distrito" placeholder="Distrito">
                                            </div> 
                                      </div> 
                                       
                                  </div> <!-- fin de una fila -->
                                    <div class="row"><!-- una fila -->
                                      <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="tel1">TELÉFONO 1</label>
                                               <input type="text" readonly  class="form-control" id="tel1" name="tel1" placeholder="Telefono 1">
                                            </div> 
                                      </div>  
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="tel2">TELÉFONO 2</label>
                                               <input type="text" readonly  class="form-control" id="tel2" name="tel2" placeholder="Telefono 2">
                                            </div> 
                                      </div> 
                                          <div class="col-sm-4">
                                           <div class="form-group">
                                                <label for="email">E-MAIL:</label>
                                               <input type="text" readonly  class="form-control" id="email" name="email" placeholder="E-mail">
                                            </div> 
                                      </div> 
                                       
                                  </div> <!-- fin de una fila -->

                                </form>  
                           </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                                     <div class="col-md-12 text-right"> 
                                       <button class="btn btn-primary" onclick="crea_cotizacion()"> Crear cotización </button>
                                      
                                       
                                     </div>
                                     

                          </div><!-- /.box-footer-->
                        </div><!-- /.box -->

                  </div>
                  






          </section>
        
        
          <section class="content">
                <form action="" method="post" name="captu2" id="captu2">
                      <div class="col-md-12">
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Referencia Nro: </h3>&nbsp;
                            <input type="text" id="refe" name="refe"  readonly placeholder="Nro de cotización">
                            &nbsp;&nbsp;&nbsp;&nbsp;<h3 class="box-title">Fecha: </h3>
                            <input type="text" id="fech" name="fech"  readonly placeholder="Fecha de la cotización">
                             &nbsp;&nbsp;&nbsp;&nbsp;<h3 class="box-title">Cantidad de items: </h3>
                            <input type="text" id="contador" name="contador"  readonly value="1" >
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
                                         
                                       <div style="">
                                         <form action="" method="post" name="captu" id="captu">
                                         <table class="table table-bordered table-striped table-condensed">
                                           <thead>
                                               <tr>
                                                   <th class="text-center">ITEM</th>
                                                   <th class="text-center">*TIPO DE SERVICIO</th>
                                                     <th class="text-center">*DESCRIP</th>
                                                   <th class="text-center">*URL</th>
                                                   <th class="text-center">*PRECIO ARTÍCULO</th>
                                                   <th class="text-center">*CANTIDAD</th>
                                                 
                                                   
                                                   <th class="text-center">*SHIPPING</th>
                                                   <th class="text-center">*PESO</th>
                                                   <th class="text-center">*STATE TAX</th>
                                                   <th class="text-center">PRECIO WEB</th>

                                                   <th class="text-center">FLETE SMI</th>
                                                   <th class="text-center">TOTAL</th>
                                                   <th class="text-center">ACCIONES</th>
                                               </tr>
                                            </thead>   
                                          <tbody id="cont_list"> 
                                           <tr id="f_1">
                                             <td align="right"><input type="text" readonly class="form-control" id="item_1" name="item_1" value="1" ></td>
                                             <td align="left"> 
                                              <select   class="form-control" id="tipo_serv_1" name="tipo_serv_1" >
                                                 <option value="Escoja opción">Escoja opción</option>
                                                 <option value="Compras por internet">Compras por internet</option>
                                                 <option value="Transporte de carga aérea">Transporte de carga aérea</option>
                                                 <option value="Servicio especial">Servicio especial</option>
                                                 
                                              </select>
                                             </td>
                                             <td align="center"><input type="hidden" id="ocul_descr_1" name="ocul_descr_1"><a style="cursor:pointer" class="fa fa-info" id="d_1" name="d_1" title="Descripción" data-param="1"  data-toggle="modal" data-target="#midescri"></td>
                                             <td align="center"><input type="hidden" id="ocul_link_1" name="ocul_link_1"> <a style="cursor:pointer"  class="fa fa-link" id="l_1" name ="l_1" title="Web link"  data-toggle="modal" data-target="#milink" data-param="1"></td>
                                                         <td align="right"><input type="text" data-number-to-fixed="2" class="form-control currency" id="precio_1" name="precio_1" onKeyPress="return validarnum(event)" ></td>
                                             <td align="right"><input type="text"  class="form-control" id="cantidad_1" name="cantidad_1"  onKeyPress="return validarnum(event)"></td>
                                            
                                
                                             <td align="right"><input type="text"  class="form-control currency" id="costo_ship_1" name="costo_ship_1" onKeyPress="return validarnum(event)" ></td>
                                             <td align="right"><input type="text"  class="form-control" id="peso_1" name="peso_1" ></td>
                                              <td align="left"> 
                                              <select   class="form-control" id="state_tax_1" name="state_tax_1" onchange="costo_traida(1)" >
                                                 <option value="Escoja opción">Escoja opción</option>
                                                 <option value="SI">SI</option>
                                                 <option value="NO">NO</option>
                                              </select>
                                             </td>
                                             <td align="right"><input type="text"  class="form-control currency" id="pa_1" name="pa_1" readonly  ></td>
                                              
                                           
                                             <td align="right"><input type="text"  class="form-control currency" id="flete_1" name="flete_1" readonly ></td>
                                             <td align="right"><input type="text"  class="form-control currency" id="subtotal_1" name="subtotal_1" readonly ></td>

                                             <td align="center"><a style="cursor:pointer" class="fa  fa-plus-square-o" title="Añadir" onclick="agrega()"></a>&nbsp;&nbsp;
                                               <a style="cursor:pointer" class="fa fa-minus-circle" title="Eliminar" onclick="elimina(this.id)">
                                             </td>
                                             
                                           </tr>
                                            
                                         </tbody>

                                         </table>
                                           </form>
                                        </div>  

                                        <!-- fin tabla -->
                                      </div>   
                                  </div> <!-- fin de una fila -->
                           </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                                  
                              
                                      <div class"col-md-6">
                                              Subtotal: &nbsp;
                            <input type="text"  id="sub_t_fact" name="sub_t_fact"  class="currency" readonly placeholder="Subtotal">
                            &nbsp;&nbsp;&nbsp;&nbsp;ITBMS:&nbsp;
                            <input type="text"  id="itbms_t" name="itbms_t" class="currency"  readonly placeholder="ITBMS">
                              &nbsp;&nbsp;&nbsp;&nbsp;NETO A PAGAR:&nbsp;
                            <input type="text"  id="neto_pg" name="neto_pg"  class="currency" readonly placeholder="Neto a pagar">
                                      </div>
                                      <div class="col-md-6 text-right" style="margin-left: 51%;margin-top: -2.5%;"> 
                                       <input type="button"  name="mail_env" id="mail_env" onclick="envio_mail()"  class="btn btn-warning" value="Enviar por e-mail">
                                       <input type="button"  name="print" id="print" onclick="imprint()"  class="btn btn-danger" value="Imprimir">
                                      
                                       <input type="button"  name="g_coti" id="g_coti" onclick="save_coti()"  class="btn btn-success" value="Guardar Cotización">
                                      
                                       
                                     </div>
                             </div>        
                          </div><!-- /.box-footer-->
                        </div><!-- /.box -->
                     
                  </div>
                  

               </form>




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

     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/i18n/defaults-*.min.js"></script>
<script type="text/javascript" src="../../javascript/jquery.formatCurrency-1.4.0.js"></script>




<!-- para asegurar los valores numéricos --> 


<script type="text/javascript">
  function envio_mail()
  {
     
       var form= $("#captu2").serialize();
                                  $.post('../../mailer/archivo_para_envio.php',form,
                                  function(data)
                                   {
                                    alert(data);
                                  });
   

  }

</script>

<script type="text/javascript">
  function imprint()
  {
     
      window.location.href = "../../cotiz_pdf.php";   

  }

</script>
<script type="text/javascript">
    $('#milink').on('show.bs.modal', function(e) {
       var parameter = e.relatedTarget.dataset.param;
       $("#referencia").val(parameter);
       $("#lk").val($("#ocul_link_"+parameter).val());
      });
</script>

<script type="text/javascript">
    $('#midescri').on('show.bs.modal', function(e) {
       var parameter = e.relatedTarget.dataset.param;
       $("#referencia2").val(parameter);
       $("#descri_t").val($("#ocul_descr_"+parameter).val());
      });
</script>
<script type="text/javascript">
   function validarnum(e)
    { // 1
      tecla = (document.all) ? e.keyCode : e.which; // 2
      if (tecla==0) return true; // 3
      if (tecla==8) return true;
      patron = /[0123456789.-]/; 
      te = String.fromCharCode(tecla); // 5
      return patron.test(te); // 6
    }



      function moneda_dec(valor)
      {
           var currency = valor; 
           var number = Number(currency.replace(/[^0-9\.]+/g,"")); 
           return number;
      }

</script>


     <script type="text/javascript">
        

 function totalizar()
 {
       var ci = 1;
       var acum =0;
       var acum_it =0;
       while(ci <= parseInt($("#contador").val()))
       {
         acum = acum + parseFloat(moneda_dec($("#subtotal_"+ci).val()));  

         acum_it = acum_it + parseFloat(moneda_dec($("#flete_"+ci).val() ));
         
        ci++;
       }
       $("#sub_t_fact").val(Math.round(acum*100)/100);

        var itb= acum_it*0.07;
       $("#itbms_t").val(Math.round(itb*100)/100);
         var npg = acum+itb;
       $("#neto_pg").val( Math.round(npg*100)/100);
       $('.currency').formatCurrency();


 }
       
         //recorrer los hijos de la tabla
         
         function reajuste()
         {
            var i=0; var k=1;
              while(i < $("table tr").length)
              {
                
                
                var filas = $('table').find('tr ');
               
                 if(i>=1)
                 {
                   var sep = filas[i].id.split("_"); 
                   var input = $('table tr#f_'+sep[1]).find('input');
                   var select = $('table tr#f_'+sep[1]).find('select'); 
                  // var textarea =  $('table tr#f_'+sep[1]).find('textarea');
                    var aes =  $('table tr#f_'+sep[1]).find('a');
                    
                   

                   //cambio el name de los aes
                   $("#"+aes[0].id).attr("name","d_"+k);
                   $("#"+aes[1].id).attr("name","l_"+k);
                   //fin cambio el name de los aes
                   //cambio el id de los aes
                   $("#"+aes[0].id).attr("id","d_"+k);
                   $("#"+aes[1].id).attr("id","l_"+k);
                   //fin cambio el id de los aes

                   //cambio los data-params
                      $("#"+aes[0].id).attr("data-param",k);
                      $("#"+aes[1].id).attr("data-param",k);
                   //fin cambio los dataparams
                   
                   //cambio los names de los inputs
                   
                   $("#"+input[0].id).attr("name","item_"+k);
                   $("#"+input[1].id).attr("name","ocul_descr_"+k);
                   $("#"+input[2].id).attr("name","ocul_link_"+k);
                   $("#"+input[3].id).attr("name","precio_"+k);
                   $("#"+input[4].id).attr("name","cantidad_"+k);
                   $("#"+input[5].id).attr("name","costo_ship_"+k);
                   $("#"+input[6].id).attr("name","peso_"+k);
                   $("#"+input[7].id).attr("name","pa_"+k);
                   $("#"+input[8].id).attr("name","flete_"+k);
                   $("#"+input[9].id).attr("name","subtotal_"+k);
                   
                   //cambio los id's de los inputs
                   
                   $("#"+input[0].id).attr("id","item_"+k);
                   $("#"+input[1].id).attr("id","ocul_descr_"+k);
                   $("#"+input[2].id).attr("id","ocul_link_"+k);
                   $("#"+input[3].id).attr("id","precio_"+k);
                   $("#"+input[4].id).attr("id","cantidad_"+k);
                   $("#"+input[5].id).attr("id","costo_ship_"+k);
                   $("#"+input[6].id).attr("id","peso_"+k);
                   $("#"+input[7].id).attr("id","pa_"+k);
                   $("#"+input[8].id).attr("id","flete_"+k);
                   $("#"+input[9].id).attr("id","subtotal_"+k);
                   
                   //cambio los values de los items
                   
                     $("#"+input[0].id).attr("value",k);
                   
                   //cambiamos los name de los selects
                   
                 $("#"+select[0].id).attr("name","tipo_serv_"+k);
                 $("#"+select[1].id).attr("name","state_tax_"+k);
                   
                   
                   //cambiamos el evento onchange del select state_tax
                   
                   $("#"+select[1].id).attr("onchange","costo_traida("+k+")");
                   
                   
                   //cambiamos los id's de los selects
                   
                   
                    $("#"+select[0].id).attr("id","tipo_serv_"+k);
                    $("#"+select[1].id).attr("id","state_tax_"+k);
                   
                   //cambiamos los names de los text areas
                   
                 
                   
                    //cambiamos los id's de los text areas
                   
               
                   
                   //cambiamos los id's de las filas
                   $("#"+filas[i].id).attr("id","f_"+k);
                   
                   k++; 
                   
                 } 

                
                i++;      
              }

         }

         //
          
          function agrega()//agregar elementos al grid
          {
              
              if($("#tipo_serv_"+$("#contador").val()).val()!='Escoja opción'&&  $("#ocul_descr_"+$("#contador").val()).val()!=''&&  $("#ocul_link_"+$("#contador").val()).val()!=''&&  $("#precio_"+$("#contador").val()).val()!=''&& $("#cantidad_"+$("#contador").val()).val()!=''&& $("#costo_ship_"+$("#contador").val()).val()!=''&& $("#peso_"+$("#contador").val()).val()!=''&& $("#state_tax_"+$("#contador").val()).val()!='Escoja opción')
               {
                         

                      $("#contador").val(parseInt($("#contador").val())+1);
                      var control = parseInt($("#contador").val());

                      //elementos para añadir a la tabla por medio del append
                       var tr_abre = "<tr id=f_"+control+">";
                       var td1="<td align='right'><input type='text' readonly class='form-control' id='item_"+control+"' name='item_"+control+"' value='"+control+"' ></td>"+
                       "<td align='left'><select class='form-control' id='tipo_serv_"+control+"' name='tipo_serv_"+control+"'>"+
                                                           "<option value='Escoja opción'>Escoja opción</option>"+
                                                           "<option value='Compras por internet'>Compras por internet</option>"+
                                                           "<option value='Transporte de carga aérea'>Transporte de carga aérea</option>"+
                                                           "<option value='Servicio especial'>Servicio especial</option>"+
                                                        "</select></td>";

                       var td2="<td align='center'><input type='hidden' id='ocul_descr_"+control+"' name='ocul_descr_"+control+"'><a  id='d_"+control+"' name='d_"+control+"' style='cursor:pointer' class='fa fa-info' title='Descripción' data-param='"+control+"'  data-toggle='modal' data-target='#midescri'></td>"+
                                                       "<td align='center'><input type='hidden' id='ocul_link_"+control+"' name='ocul_link_"+control+"'> <a style='cursor:pointer' id='l_"+control+"'  name='l_"+control+"'   class='fa fa-link' title='Web link'  data-toggle='modal' data-target='#milink' data-param='"+control+"'></td>"+
                                                        "<td align='right'><input type='text'  class='form-control currency' id='precio_"+control+"' name='precio_"+control+"' onKeyPress='return validarnum(event)' ></td>"+
                                                       "<td align='right'><input type='text'  class='form-control' id='cantidad_"+control+"' name='cantidad_"+control+"' ></td>"+
                                                      
                                                       "<td align='right'><input type='text'  class='form-control currency' id='costo_ship_"+control+"' name='costo_ship_"+control+"' onKeyPress='return validarnum(event)' ></td>"+
                                                       "<td align='right'><input type='text'  class='form-control' id='peso_"+control+"' name='peso_"+control+"' ></td>"+

                                                          "<td align='left'>"+ 
                                                        "<select   class='form-control' id='state_tax_"+control+"' name='state_tax_"+control+"' onchange='costo_traida("+control+")'>"+
                                                           "<option value='Escoja opción'>Escoja opción</option>"+
                                                           "<option value='SI'>SI</option>"+
                                                           "<option value='NO'>NO</option>"+
                                                        "</select>"+
                                                       "</td>"+

                                                       "<td align='right'><input type='text' readonly  class='form-control currency' id='pa_"+control+"' name='pa_"+control+"' ></td>"+
                                                       "<td align='right'><input type='text'  readonly class='form-control currency' id='flete_"+control+"' name='flete_"+control+"' ></td>"+
                                                       "<td align='right'><input type='text'  readonly class='form-control currency' id='subtotal_"+control+"' name='subtotal_"+control+"' ></td>"+
                                                        "<td align='center'><a style='cursor:pointer' class='fa  fa-plus-square-o' title='Añadir' onclick='agrega()'>&nbsp;&nbsp;"+
                                                         "<a style='cursor:pointer' class='fa fa-minus-circle' title='Eliminar' onclick='elimina("+control+")'>"+
                                                       "</td>";                                 

                                var tr_cierra = "</tr>";

                           
                     $("#cont_list").append(tr_abre+td1+td2+tr_cierra);
               }
               else
               {
                 alert('Los campos con * son obligatorios.');
               }
             
          }

          function elimina(user)//elimina elementos del grid
          {
             
                 if(parseInt($("#contador").val())>1)
                 {
                   
                       if(confirm('Eliminar la fila seleccionada?') )
                       {
                          $( "#f_"+user).remove();
                          $("#contador").val(parseInt($("#contador").val())-1);
                          reajuste();


                          //
                              totalizar();
                                 

                          //
                       }
                 
                 }
          }
       
       //fin para manejar los items del grid

          function crea_cotizacion()
          {
                 if($("#smi").val()=='')
                 {
                    alert('Debe escoger el SMI del cliente.');
                 }
                 else
                 { 
                     var users = $("#smi").val().split("-",2);


                      if(confirm('Desea crear la cotizaci\u00f3n?'))
                      { 

                        $.post('../../admin/crear_cotizaciones.php',{

                            condition: users[1]

                          },

                          function(data){

                                 if(jQuery.trim(data)=='Solicitud creada con exito.')
                                 {
                                     //xml para sacar el número de la cotización
                                             $.get('../../admin/xml_num_cot.php',{
                                              type: 'xml'
                                            },
                                            function(xml){
                                             
                                             // sacar la fecha
                                              var f = new Date();
                                            
                                             // fin de la fecha
 

                                             $("#refe").val($(xml).find('id').text());
                                             $("#fech").val(f.getFullYear()+'-'+(f.getMonth()+1)+'-'+f.getDate());
                                            // $("#ingreso_pac").val('Actualizar');
                                             

                                            });   

                                     //
                                 }
                                            

                          }

                        );
                      }
                  }    
          }


        function sacar_info_cli()
        {
           var user= $("#cliente").val().split("**",1);
          

           $.get('../../admin/xml_clientes_ced.php?ocul='+user,{
            type: 'xml'
          },
          function(xml){
             $("#smi").val('SMI-'+$(xml).find('id').text());
           $("#cip_ruc").val($(xml).find('cip_ruc').text());
           $("#cliente2").val($(xml).find('nombre').text()+' '+$(xml).find('apellido').text());
          
           $("#direccion").val($(xml).find('direccion').text());
           $("#provincia").val($(xml).find('provincia').text());
           $("#distrito").val($(xml).find('distrito').text());
           $("#tel1").val($(xml).find('telefono1').text());
           $("#tel2").val($(xml).find('telefono2').text());
           $("#email").val($(xml).find('email').text());
          // $("#ingreso_pac").val('Actualizar');
           

          });
           $('#miventana').modal('hide');
        }

        function cierro_link()
        {
          var user = $("#referencia").val();
          $("#ocul_link_"+user).val($("#lk").val());
          $('#milink').modal('hide');

        }
           function cierro_descrip()
        {
          
          var user = $("#referencia2").val();
          $("#ocul_descr_"+user).val($("#descri_t").val()); 
          $('#midescri').modal('hide'); 
        }

       function volcar()
       {
         $('#miventana').modal('hide');  
       }

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



//elementos de la calculadora
            function costo_traida(user)
            {
               var q= parseInt($("#cantidad_"+user).val());

               var precio = moneda_dec($("#precio_"+user).val());
             
               var st_t =0.00;
               var ship = moneda_dec($("#costo_ship_"+user).val());
               if($("#state_tax_"+user).val()=='SI')
               {
                 var st_t = 0.07;
               }
               //var precio_web = parseFloat($("#costo_ship_"+user).val());

               var pweb = ( (q*precio+ship)*st_t)+ (q*precio+ship); 

               $("#pa_"+user).val( Math.round(pweb*100)/100 );
               //$("#pa_"+user).maskMoney();


               //alert($("#pa_"+user).val());
              fletesmi(user);
             // recorrido();



            }

            function fletesmi(user)
            {
                var pa = parseFloat($("#pa_"+user).val());
                var peso = parseFloat($("#peso_"+user).val());
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
                   $("#flete_"+user).val(12);
                }
                else
                {
                   var  manejo_miami = (pa * 0.053);
                   $("#flete_"+user).val(se + sc+ manejo_miami+ tm);
                  

                   $("#flete_"+user).val(Math.round ($("#flete_"+user).val() * 100) / 100);

                }

                //subtotal
                  var sub_t = parseFloat($("#pa_"+user).val()) + parseFloat($("#flete_"+user).val()); 

                  $("#subtotal_"+user).val(Math.round (sub_t * 100) / 100);
                //

                         //
                                 totalizar();
                                 

                          //

                $('.currency').formatCurrency();

            
            }



            function save_coti()
            {
                          
                   if(confirm('Desea guardar la cotizaci\u00f3n?'))
                   {
                         if($("#refe").val()=='')
                         {
                           alert('Verfique que haya creado la cotización.');
                         }
                         else
                         {
                            
                             var i = 1;
                             var sw=0;
                             while(i<= parseInt($("#contador").val()))
                             {
                                   if($("#tipo_serv_"+$("#contador").val()).val()!='Escoja opción'&&  $("#ocul_descr_"+$("#contador").val()).val()!=''&&  $("#ocul_link_"+$("#contador").val()).val()!=''&&  $("#precio_"+$("#contador").val()).val()!=''&& $("#cantidad_"+$("#contador").val()).val()!=''&& $("#costo_ship_"+$("#contador").val()).val()!=''&& $("#peso_"+$("#contador").val()).val()!=''&& $("#state_tax_"+$("#contador").val()).val()!='Escoja opción')
                                   {
                                     sw=0; 
                                   }
                                   else
                                   {
                                     sw =1;
                                     i= parseInt($("#contador").val());
                                   }
                              i++;
                             }
                             if(sw==0)
                             {
                                  $('#g_coti').val("Guardando...");
                                  $('#g_coti').attr("disabled", true);
                                  var form= $("#captu2").serialize();
                                  $.post('../../admin/guarda_quotes.php',form,
                                  function(data)
                                   {
                                      alert(data);
                                     if(jQuery.trim(data)=='Datos guardados con exito.')
                                     {
                                           var pivote = parseInt($("#contador").val());
                                           var tx = 2;
                                           while(tx <= pivote)
                                           {
                                             $( "#f_"+tx).remove(); 
                                             tx++;
                                           }

                                           document.getElementById("captu").reset();
                                           document.getElementById("captu2").reset();
                                           $('#ocul_descr_1').val('');
                                           $('#ocul_link_1').val('');

                                           $('#g_coti').attr("disabled", false);
                                           $('#g_coti').val("Guardar Cotización");

                                     }
                                     else
                                     {
                                      alert(data);
                                      $('#g_coti').attr("disabled", false);
                                      $('#g_coti').attr("disabled", false);
                                      $('#g_coti').val("Guardar Cotización");
                                     }
                                  });
                             }
                             else
                             {
                               alert('Verifique que los campos del grid est\u00e9n diligenciados en su totalidad.');
                             }
                            }
                }            

            }
          
//fin elementos calc


            $(document).ready(function(){
                   
              
      /*        $('.currency').blur(function()
                {
                    $('.currency').formatCurrency();
                });*/
                 
                   //fin mostrar
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
