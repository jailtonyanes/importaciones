<?php
   include('../_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);
   mysql_query("SET NAMES 'utf8'");

 $query = "SELECT
    `sucursal`.`nombre` AS sucursal
    , `distrito`.`nombre` AS distrito
    , `provincia`.`nombre` AS provincia
    ,sucursal.`direcion`
    ,sucursal.`email`
    ,sucursal.`telefono`
    ,sucursal.id
      ,provincia.id AS prov_id
    ,distrito.id AS dist_id
FROM
    `provincia`
    INNER JOIN `sucursal` 
        ON (`provincia`.`id` = `sucursal`.`provincia_id`)
    INNER JOIN `distrito` 
        ON (`distrito`.`id` = `sucursal`.`distrito_id`)
        WHERE sucursal.id ='$_GET[ocul]'
        ";
$result = mysql_query($query,$connection);
$row = mysql_fetch_array($result);

mysql_close($connection);

header("Content-Type: text/html;charset=utf-8");
echo '<?xml version="1.0" encoding="UTF8"?>
<user>
<id>'.$row['id'].'</id>
<nombre>'.$row['sucursal'].'</nombre>

<direccion>'.$row['direcion'].'</direccion>
<provincia>'.$row['provincia'].'</provincia>
<distrito>'.$row['distrito'].'</distrito>
<telefono>'.$row['telefono'].'</telefono>
<provincia_id>'.$row['prov_id'].'</provincia_id>
<distrito_id>'.$row['dist_id'].'</distrito_id>

<email>'.$row['email'].'</email>
</user>';
?>