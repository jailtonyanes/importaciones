<?php
 include('../config/conf_postgre.php');
 include('../classes/con_postgre.php');
 include('../classes/crud_postgre.php');

 $con = new Connection($server,$port,$dbname,$user,$password);

 $con->conectar();


  $crud2 = new Crud();
 
  //insertamos el orden
    $campos = "fecha_captu";
  $tabla = "orden_captu";
  $mensaje = "ok";
  $valores = date('Y-m-d');
  //------------
$crud2->insertar($valores,$campos,$tabla,$con->getConnection(),$mensaje,'captura_id'); 

  $crud = new Crud();
  $campos = "contenido,orden_capturas";
  $tabla = "capturas";
  $mensaje = "Captura(s) guardada(s) con exito.";

   $i=1;$valores='';$ult_id= $crud2->getLastid();
  while($i<= $_POST['control'])
  {
    if(isset($_POST['sel'.$i]))
    {
       //$valores = $_POST['vaso'.$i];
         $valores = $valores."('".$_POST['vaso'.$i]."',$ult_id),";
       
    }
    $i++;
    //$crud->insertar2($valores,$campos,$tabla,$con->getConnection(),$mensaje); 
  }

  $valores = trim($valores, ',');
  $crud->insertar2($valores,$campos,$tabla,$con->getConnection(),$mensaje); 

  echo $crud2->getLastid();


 $con->desconectar();


?>

