<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
  $crud2 = new Crud();
  $crud3 = new Crud();



  
  //sacar la provincia
   $crud2->setConsulta("SELECT id,nombre FROM provincia WHERE nombre ='$_POST[provincia]' ");
                                             $datos1 = $crud2->seleccionar($con->getConection());
  //

  //sacar el distrito
   $crud3->setConsulta("SELECT id,nombre FROM distrito WHERE nombre ='$_POST[distrito2]' ");
                                             $datos2 = $crud3->seleccionar($con->getConection());
  //

  $prov= $datos1[0]['id'];
  $dist =$datos2[0]['id'];

     
	 if($_POST['idocul']=='')
	 { 
		   
      $array[0] = "'$_POST[nombre]','$prov','$dist','$_POST[direccion]','$_POST[email]','$_POST[telefono]'";
		  $campos = "nombre,provincia_id,distrito_id,direcion,email,telefono";
		  $tabla = "sucursal";
		  $mensaje = "Sucursal Guardada con exito.";
		  $crud->insertar($array,$campos,$tabla,$con->getConection(),$mensaje); 
     }
    else
    {
         

         $crud->update("update sucursal set nombre = '$_POST[nombre]',provincia_id = '$prov',distrito_id = '$dist',direcion = '$_POST[direccion]',email = '$_POST[email]',telefono = '$_POST[telefono]' where id = '$_POST[idocul]'",'Sucursal actualizada exitosamente.',$con->getConection());  
    } 


 $con->desconectar();


?>

