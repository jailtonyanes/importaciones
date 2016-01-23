<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();


  $pieces = explode('.', $_POST['suc']);
  $sucursal = $pieces[0]; 

	 if($_POST['idocul']=='')
	 { 
		  $array[0] = "'$_POST[nombre]','$_POST[apellido]','$_POST[nick]','$_POST[password]','$_POST[estado]','$_POST[perfil]','1','$sucursal'";
		  $campos = "nombre,apellido,nick,password,estado,perfil,cambio_password,sucursal";
		  $tabla = "usuario";
		  $mensaje = "Usuario Guardado con exito.";
		  $crud->insertar($array,$campos,$tabla,$con->getConection(),$mensaje); 
     }
    else
    {
         $crud->update("update usuario set nombre = '$_POST[nombre]', apellido = '$_POST[apellido]',nick ='$_POST[nick]',
         	password = '$_POST[password]',estado = '$_POST[estado]', perfil ='$_POST[perfil]', cambio_password ='1',sucursal='$sucursal' where id = '$_POST[idocul]'",'Usuario actualizado exitosamente.',$con->getConection());  
    } 


 $con->desconectar();


?>



