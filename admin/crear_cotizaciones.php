<?php
session_start();
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
?>
<?php
   $fecha = date('Y-m-d');
  
  $array[0] = "'COTIZADO','$fecha','$_SESSION[id]','$_POST[condition]'";
  $campos = "estado,fecha_creacion,creada_por,cliente_id";
  $tabla = "cotizacion";
  $mensaje = "Solicitud creada con exito.";
  $crud->insertar($array,$campos,$tabla,$con->getConection(),$mensaje); 

?>

