<?php
   include('../_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);
mysql_query("SET NAMES 'utf8'");
$query = "SELECT
    `usuario`.`id`
    , `usuario`.`nombre`
    , `usuario`.`apellido`
    , `usuario`.`nick`
    , `usuario`.`password`
    , `usuario`.`estado`
    , `usuario`.`perfil`
    , `usuario`.`cambio_password`
    , `usuario`.`sucursal`
    , `sucursal`.`nombre`
FROM
  `usuario` JOIN sucursal ON(sucursal.`id`= usuario.`sucursal`) WHERE usuario.id ='$_GET[ocul]'";
$result = mysql_query($query,$connection);
$row = mysql_fetch_array($result);

mysql_close($connection);

header('Content-Type: text/xml'); 
echo '<?xml version="1.0" encoding="iso-8859-1"?>
<user>
<id>'.$row['id'].'</id>
<nombre>'.$row['nombre'].'</nombre>
<apellido>'.$row['apellido'].'</apellido>
<nick>'.$row['nick'].'</nick>
<perfil>'.$row['perfil'].'</perfil>
<estado>'.$row['estado'].'</estado>
<password>'.$row['password'].'</password>
<sucursal>'.$row['sucursal'].'. '.$row['nombre'].'</sucursal>
</user>';
?>
