<?php
   session_start();
   include('../_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);
   mysql_query("SET NAMES 'utf8'");

 $query = "SELECT MAX(id) AS cotizacion FROM cotizacion WHERE creada_por = '$_SESSION[id]'";
$result = mysql_query($query,$connection);
$row = mysql_fetch_array($result);

mysql_close($connection);

header("Content-Type: text/html;charset=utf-8");
echo '<?xml version="1.0" encoding="iso-8859-1"?>
<user>
<id>'.$row['cotizacion'].'</id>

</user>';
?>