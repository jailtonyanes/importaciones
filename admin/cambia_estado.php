<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
  $mensaje = "Estado cambiado con exito.";

  $crud->update("update cotizacion set estado = 'PEDIDO' where id = '$_POST[condition]'",$mensaje,$con->getConection());



 $con->desconectar();


?>



