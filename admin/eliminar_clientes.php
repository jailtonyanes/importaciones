<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
?>
<?php
  
 $cadena = "id = '$_POST[condition]'";


$crud->eliminar("cliente",$con->getConection(),"$cadena","Cliente eliminado exitosamente.");



 $con->desconectar();


?>

