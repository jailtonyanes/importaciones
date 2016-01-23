<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();


  
     
	 if($_POST['idocul']=='')
	 { 
		   
      $array[0] = "'$_POST[cip_ruc]','$_POST[nombre]','$_POST[apellido]','$_POST[direccion]','$_POST[provincia]','$_POST[distrito2]','$_POST[telefono1]','$_POST[telefono1]','$_POST[email]'";
		  $campos = "cip_ruc,nombre,apellido,direccion,provincia,distrito,telefono1,telefono2,email";
		  $tabla = "cliente";
		  $mensaje = "Cliente Guardado con exito.";
		  $crud->insertar($array,$campos,$tabla,$con->getConection(),$mensaje); 
     }
    else
    {
         

         $crud->update("update cliente set cip_ruc = '$_POST[cip_ruc]',nombre = '$_POST[nombre]',apellido = '$_POST[apellido]',direccion = '$_POST[direccion]',provincia = '$_POST[provincia]',distrito = '$_POST[distrito2]',telefono1 = '$_POST[telefono1]',telefono2 = '$_POST[telefono2]',email = '$_POST[email]' where id = '$_POST[idocul]'",'Cliente actualizado exitosamente.',$con->getConection());  
    } 


 $con->desconectar();


?>

