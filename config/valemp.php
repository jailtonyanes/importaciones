<?php
include("conf_postgre.php");
include("../_classes2/con_postgre.php");
include("../_classes2/crud_postgre.php");


$con = new Connection($server,$port,$dbname,$user,$password);
$con->conectar();
$crud = new Crud();
$nit=$_POST['nit'];
$nom=$_POST['nom'];
$dir=$_POST['dir'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$cel=$_POST['cel'];
$ema=$_POST['ema'];
$pag=$_POST['pag'];
$reg=$_POST['reg'];
$array[0] = "'$nit','$nom','$dir','$tel2','tel1','$cel','$ema','$pag'";
$campos="nit,emp_nombre,emp_direccion,emp_tel_1,emp_tel_2,emp_celular,emp_email,emp_pag_web";
$tabla= "info_emp";
$crud->insertar($array,$campos,$tabla,$con->getConnection());
$crud2= new Crud();
$array2[0] = "'$nit','$reg'";
$campos2="nit_emp,id_regimen";
$tabla2= "info_emp_regimen";
$crud2->insertar($array2,$campos2,$tabla2,$con->getConnection(),'Empresa Registrada Exitosamente.');
$con->desconectar();
?>