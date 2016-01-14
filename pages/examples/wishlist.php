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
<div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4>Iinfo del cliente</h4>
         </div>
         <div class="modal-body">
                               
                                <div class="row"> 
                                  <div class="col-md-12">       
                                            <div class="form-group">
                                                <label for="provincia">Seleccione Cliente:</label>
                                               <select   class="form-control" id="cliente" name="cliente">
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
                      <div class="col-md-12">
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Cotizacion Nro: </h3>&nbsp;
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
                                         <table class="table table-bordered table-striped table-condensed">
                                           <thead>
                                               <tr>
                                                   <th class="text-center">ITEM</th>
                                                   <th class="text-center">TIPO DE SERVICIO</th>
                                                     <th class="text-center">DESCRIPCIÓN</th>
                                                   <th class="text-center">WEB-LINK</th>
                                                   <th class="text-center">PRECIO ARTÍCULO</th>
                                                   <th class="text-center">CANTIDAD</th>
                                                 
                                                   
                                                   <th class="text-center">SHIPPING</th>
                                                   <th class="text-center">PESO</th>
                                                   <th class="text-center">STATE TAX</th>
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
                                              </select>
                                             </td>
                                             <td align="left"><textarea class="form-control"   rows="2" id="descrip_ar_1" name="descrip_ar_1"></textarea></td>
                                             <td align="left"><textarea class="form-control"   rows="2" id="web_link_1" name="web_link_1"></textarea></td>
                                                         <td align="right"><input type="text"  class="form-control" id="precio_1" name="precio_1" ></td>
                                             <td align="right"><input type="text"  class="form-control" id="cantidad_1" name="cantidad_1" ></td>
                                            
                                
                                             <td align="right"><input type="text"  class="form-control" id="costo_ship_1" name="costo_ship_1" ></td>
                                             <td align="right"><input type="text"  class="form-control" id="peso_1" name="peso_1" ></td>
                                              <td align="left"> 
                                              <select   class="form-control" id="state_tax_1" name="state_tax_1" onchange="costo_traida(1)" >
                                                 <option value="Escoja opción">Escoja opción</option>
                                                 <option value="SI">SI</option>
                                                 <option value="NO">NO</option>
                                              </select>
                                             </td>
                                             <td align="right"><input type="text"  class="form-control" id="pa_1" name="pa_1" readonly ></td>
                                              
                                           
                                             <td align="right"><input type="text"  class="form-control" id="flete_1" name="flete_1" readonly ></td>
                                             <td align="right"><input type="text"  class="form-control" id="subtotal_1" name="subtotal_1" readonly ></td>

                                             <td align="center"><a style="cursor:pointer" class="fa  fa-plus-square-o" title="Añadir" onclick="agrega()"></a>&nbsp;&nbsp;
                                               <a style="cursor:pointer" class="fa fa-minus-circle" title="Eliminar" onclick="elimina(this.id)">
                                             </td>
                                             
                                           </tr>
                                            
                                         </tbody>

                                         </table>
                                        </div>  

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
        
       
         //recorrer los hijos de la tabla
         
         function recorrido()
         {
               //inicio funcion

                  $("table tr").each(function (index) 
                    { 
                        alert(index);
                    }) 

               //fin funcion


         }


         //fin recorrer los hijos de la tabla


       //para manejar los items del grid
          
          function agrega()//agregar elementos al grid
          {
            $("#contador").val(parseInt($("#contador").val())+1);
            var control = parseInt($("#contador").val());

            //elementos para añadir a la tabla por medio del append
             var tr_abre = "<tr id=f_"+control+">";
             var td1="<td align='right'><input type='text' readonly class='form-control' id='item_"+control+"' name='item_"+control+"' value='"+control+"' ></td>"+
             "<td align='left'><select class='form-control id='tipo_serv"+control+"' name='tipo_serv"+control+"' >"+
                                                 "<option value='Escoja opción'>Escoja opción</option>"+
                                                 "<option value='Compras por internet'>Compras por internet</option>"+
                                                 "<option value='Transporte de carga aérea'>Transporte de carga aérea</option>"+
                                              "</select></td>";
             var td2="<td align='left'><textarea class='form-control'   rows='2' id='descrip_ar"+control+"' name='descrip_ar"+control+"'></textarea></td>"+
                                             "<td align='left'><textarea class='form-control'   rows='2' id='web_link"+control+"' name='web_link"+control+"'></textarea></td>"+
                                              "<td align='right'><input type='text'  class='form-control' id='precio_"+control+"' name='precio_"+control+"' ></td>"+
                                             "<td align='right'><input type='text'  class='form-control' id='cantidad_"+control+"' name='cantidad_"+control+"' ></td>"+
                                            
                                             "<td align='right'><input type='text'  class='form-control' id='costo_ship_"+control+"' name='costo_ship_"+control+"' ></td>"+
                                             "<td align='right'><input type='text'  class='form-control' id='peso_"+control+"' name='peso_"+control+"' ></td>"+

                                                "<td align='left'>"+ 
                                              "<select   class='form-control' id='state_tax"+control+"' name='state_tax"+control+"' onchange='costo_traida("+control+")'>"+
                                                 "<option value='Escoja opción'>Escoja opción</option>"+
                                                 "<option value='SI'>SI</option>"+
                                                 "<option value='NO'>NO</option>"+
                                              "</select>"+
                                             "</td>"+

                                             "<td align='right'><input type='text'  class='form-control' id='pa_"+control+"' name='pa_"+control+"' ></td>"+
                                             "<td align='right'><input type='text'  class='form-control' id='flete_"+control+"' name='flete_"+control+"' ></td>"+
                                             "<td align='right'><input type='text'  class='form-control' id='subtotal_"+control+"' name='subtotal_"+control+"' ></td>"+
                                              "<td align='center'><a style='cursor:pointer' class='fa  fa-plus-square-o' title='Añadir' onclick='agrega()'>&nbsp;&nbsp;"+
                                               "<a style='cursor:pointer' class='fa fa-minus-circle' title='Eliminar' onclick='elimina("+control+")'>"+
                                             "</td>";                                 

             var tr_cierra = "</tr>";

            $("#cont_list").append(tr_abre+td1+td2+tr_cierra);
           
             
          }

          function elimina(user)//elimina elementos del grid
          {
             if(parseInt($("#contador").val())>1)
             {
                $( "#f_"+user).remove();
                $("#contador").val(parseInt($("#contador").val())-1);
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
               var precio = parseFloat($("#precio_"+user).val());
               var st_t =0;
               var ship = parseFloat($("#costo_ship_"+user).val());
               if($("#state_tax_"+user).val()=='SI')
               {
                 var st_t = 0.07;
               }
               //var precio_web = parseFloat($("#costo_ship_"+user).val());

               $("#pa_"+user).val( ( (q*precio+ship)*st_t)+ (q*precio+ship) );

               //alert($("#pa_"+user).val());
              fletesmi(user);
              recorrido();

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

                //itbms
                 var itbms = parseFloat($("#flete").val()* 0.07);
                
                  $("#itbms").val(Math.round(itbms * 100)/100 );
                //fin itbms

                //total a pagar
                   var neto_pag = parseFloat($("#subtotal").val()) + parseFloat($("#itbms").val());

                   $("#neto_pag").val(Math.round(neto_pag*100)/100);
                //fin total a pagar
            }
          
//fin elementos calc


            $(document).ready(function(){
                  
         
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
