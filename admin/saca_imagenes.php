<?php
 include('../config/conf_postgre.php');
 include('../classes/con_postgre.php');
 include('../classes/crud_postgre.php');

 $con = new Connection($server,$port,$dbname,$user,$password);

 $con->conectar();

  $crud = new Crud();

 
 /* $crud->setConsulta("select * from capturas");
  $datos = $crud->seleccionar($con->getConnection());
  echo $datos[0]['contenido'];*/


 $con->desconectar();


?>