<?php
   include('../_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);
   mysql_query("SET NAMES 'utf8'");

 $query = "	SELECT
		    `cliente`.`id` AS cliente
	    , `cliente`.`nombre`
	    , `cliente`.`apellido`
	    ,cliente.`direccion`
	    ,cliente.`provincia`
	    ,cliente.`distrito`
	    ,cliente.`telefono1`
	    ,cliente.`telefono2`
	    ,cliente.`email`
	    ,cliente.`cip_ruc`
	    ,cotizacion.fecha_creacion
	    ,cotizacion.id AS cot_id
	    ,(SELECT COUNT(id) FROM items WHERE cotizacion_id ='$_GET[ocul]')AS cantidad
	     ,(SELECT SUM(total)  FROM items WHERE cotizacion_id = '$_GET[ocul]')AS total
	    ,(SELECT SUM(flete_smi) * 0.07 FROM items WHERE cotizacion_id = '$_GET[ocul]')AS f_smi
	

	FROM
	  `cliente`
	    INNER JOIN `cotizacion` 
		ON (`cliente`.`id` = `cotizacion`.`cliente_id`)
	    INNER JOIN `items` 
		ON (`cotizacion_id` = `cotizacion`.`id`) WHERE cotizacion.`id` ='$_GET[ocul]'
		GROUP BY cliente.id
		";
$result = mysql_query($query,$connection);
$row = mysql_fetch_array($result);

mysql_close($connection);

header("Content-Type: text/html;charset=utf-8");
echo '<?xml version="1.0" encoding="iso-8859-1"?>
<user>
<id>'.$row['cliente'].'</id>
<cip_ruc>'.$row['cip_ruc'].'</cip_ruc>
<nombre>'.$row['nombre'].'</nombre>
<apellido>'.$row['apellido'].'</apellido>
<direccion>'.$row['direccion'].'</direccion>
<provincia>'.$row['provincia'].'</provincia>
<distrito>'.$row['distrito'].'</distrito>
<telefono1>'.$row['telefono1'].'</telefono1>
<telefono2>'.$row['telefono2'].'</telefono2>
<email>'.$row['email'].'</email>
<fecha_creacion>'.$row['fecha_creacion'].'</fecha_creacion>
<cot_id>'.$row['cot_id'].'</cot_id>
<contador>'.$row['cantidad'].'</contador>
<total>'.$row['total'].'</total>
<f_smi>'.number_format($row['f_smi'],2,".",",").'</f_smi>
<t_pagar>'.number_format(($row['total']+$row['f_smi']),2,".",",").'</t_pagar>

</user>';
?>