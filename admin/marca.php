<?php
 include('../config/conf_postgre.php');
 include('../classes/con_postgre.php');
 include('../classes/crud_postgre.php');

 $con = new Connection($server,$port,$dbname,$user,$password);

 $con->conectar();


  $crud2 = new Crud();
 
  $valores = trim($_POST['condition'], 'sel');

  $crud2->update("update capturas set enviar_informe ='$_POST[condition2]' where id ='$valores'","actualizado",$con->getConnection());


 $con->desconectar();


?>

