<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
  $crud3 = new Crud();

  $cadena = "cotizacion_id = '$_POST[refe];'";
  $crud3->eliminar("items",$con->getConection(),"$cadena","");


     $i=1;
     $valores ='';
     while($i<= $_POST['contador'])
     {
       $tipo_serv=$_POST['tipo_serv_'.$i];
       $descrip= $_POST['ocul_descr_'.$i];
       $weblink= $_POST['ocul_link_'.$i];
        $crud->moneda_dec($_POST['precio_'.$i]);
        $precio= $crud->getValor();

       $cantidad= $_POST['cantidad_'.$i];
       $crud->moneda_dec($_POST['costo_ship_'.$i]);
       $shipping=$crud->getValor();
       $peso= $_POST['peso_'.$i];
       $state=$_POST['state_tax_'.$i];
       $crud->moneda_dec($_POST['pa_'.$i]);
       $precio_web=$crud->getValor();
       $crud->moneda_dec($_POST['flete_'.$i]);
       $flete = $crud->getValor();
       $crud->moneda_dec($_POST['subtotal_'.$i]);
       $total =$crud->getValor();
       $cotizacion_id = $_POST['refe'];


          //quitar las "," de los numeros para guardarlos en la base de datos.

        



       $valores= $valores."('".$tipo_serv."','".$descrip."','".$weblink."','".$precio."','".$cantidad."','".$shipping."','".$precio_web."','".$flete."','".$total."','".$peso."','".$state."','".$cotizacion_id."'),";     
       
       $i++;
     }	 
    $valores =trim($valores,",");


		      $array[0] = $valores;
    		  $campos = "tipo_servicio,descripcion,weblink,precio_articulo,cantidad,shipping,precio_web,flete_smi,total,peso,state_tax,cotizacion_id";
    		  $tabla = "items";
    		  $mensaje = "Datos guardados con exito.";
    		  $crud->insertar2($array,$campos,$tabla,$con->getConection(),$mensaje); 




 $con->desconectar();


?>



