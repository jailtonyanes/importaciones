<?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
  $crud2 = new Crud();

            $crud2->setConsulta("SELECT password  from usuario where id = '$_POST[idocul]'");
            $datos1 = $crud2->seleccionar($con->getConection());
            if($datos1[0]['password'] != $_POST['password_ant'])
            {
              echo 'Password anterior incorrecto, verifique.';
            }
            else
            {
               $crud->update("update usuario set password = '$_POST[nuevo_password]', cambio_password = '0' where id = '$_POST[idocul]'","Password cambiado exitosamente.",$con->getConection());
            }
 $con->desconectar();
?>

