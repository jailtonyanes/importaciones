<?php
session_start();
//include ("conf_postgre.php");
//include ("../classes/con_postgre.php");
//include ("../classes/crud_postgre.php");
//$con = new Connection($server,$port,$dbname,$user,$password);
//$con->conectar();
echo $_SESSION['id_usuario'];
//echo $id." esto es ID";

$crud= new Crud();
//$crud->update("Update usuario set usuario_login= 'i' where usuario_id = '$id' ","ok",$con->getConnection());
//if(isset($_SESSION['user_authorized']))
{
	//session_destroy();
    //header("Location: ../index.php");
 }
?>