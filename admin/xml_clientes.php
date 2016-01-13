<?php
   include('../_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);
   mysql_query("SET NAMES 'utf8'");

echo $query = "select * from cliente  where id= '$_GET[ocul]'";
$result = mysql_query($query,$connection);
$row = mysql_fetch_array($result);

mysql_close($connection);

header("Content-Type: text/html;charset=utf-8");
echo '<?xml version="1.0" encoding="iso-8859-1"?>
<user>
<id>'.$row['id'].'</id>
<cip_ruc>'.$row['cip_ruc'].'</cip_ruc>
<nombre>'.$row['nombre'].'</nombre>
<apellido>'.$row['apellido'].'</apellido>
<direccion>'.$row['direccion'].'</direccion>
<provincia>'.$row['provincia'].'</provincia>
<distrito>'.$row['distrito'].'</distrito>
<telefono1>'.$row['telefono1'].'</telefono1>
<telefono2>'.$row['telefono2'].'</telefono2>
<email>'.$row['email'].'</email>
</user>';
?>