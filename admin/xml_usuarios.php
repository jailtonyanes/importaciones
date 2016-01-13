<?php
   include('../_include/configuration.php');
  $connection=mysql_connect($server,$user,$password);
  mysql_select_db($dbname);

$query = "select * from usuario  where id= '$_GET[ocul]'";
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
</user>';
?>