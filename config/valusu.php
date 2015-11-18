<?php
session_start();
include("../includes/conf_postgre.php");
include("../_classes2/con_postgre.php");
include("../_classes2/crud_postgre.php");
$con = new Connection($server,$port,$dbname,$user,$password);
$con->conectar();
$crud = new Crud();

$nit=$_POST['emp_nombres'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$array[0] = "'$user','$pass','$nom','$ape','1','i','TRUE','$nit'";
$campos="usuario_nick,usuario_password,usuario_nombre,usuario_apellido,usuario_tipo,usuario_login,usuario_activo,usuario_empr_nit,usuario_empr";
$tabla= "usuario";
$crud->insertar($array,$campos,$tabla,$con->getConnection(),'Usuario Ingresado Exitosamente.');
$con->desconectar();
header("location:../views/dashboard.php");
?>