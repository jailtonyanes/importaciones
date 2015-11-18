<?php
 include('../config/conf_postgre.php');
 include('../classes/con_postgre.php');
 include('../classes/crud_postgre.php');

 $con = new Connection($server,$port,$dbname,$user,$password);

 $con->conectar();

  $crud = new Crud();

 
  $campos = "contenido";
  $tabla = "capturas";
  $mensaje = "Captura(s) guardada(s) con exito.";

   $i=1;
  while($i<= $_POST['control'])
  {
    if(isset($_POST['sel'.$i]))
    {
       $valores = $_POST['vaso'.$i];
       
       $crud->insertar($valores,$campos,$tabla,$con->getConnection(),$mensaje);	
    }
    $i++;
  }





 $con->desconectar();


?>