 <?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
?>


 <table id="table_id" class="display">
                                          <thead>
                                            <tr>
                                              <th>SUCURSAL</th>
                                              <th>PROVINCIA</th>
                                              <th>DISTRITO</th>
                                              <th>TÉLEFONO</th>
                                            
                                              
                                              <th>Acciones</th>
                                              
                                              
                                            </tr>
                                          </thead>
                                          <tbody id="cuerpo">
                                            <?php
                                             $crud->setConsulta("SELECT
    `sucursal`.`nombre` AS sucursal
    , `distrito`.`nombre` AS distrito
    , `provincia`.`nombre` AS provincia
    ,sucursal.`direcion`
    ,sucursal.`email`
    ,sucursal.`telefono`
    ,sucursal.id
FROM
    `provincia`
    INNER JOIN `sucursal` 
        ON (`provincia`.`id` = `sucursal`.`provincia_id`)
    INNER JOIN `distrito` 
        ON (`distrito`.`id` = `sucursal`.`distrito_id`)
        
        ORDER BY sucursal.`nombre` ASC ");
                                             $datos1 = $crud->seleccionar($con->getConection());
                                             $i=0;
                                             while ($i<sizeof($datos1))
                                             {   
                                            ?>
                          <tr>
                            <td><?php echo $datos1[$i]['sucursal'] ?></td>
                            <td><?php echo $datos1[$i]['provincia'] ?></td>
                            <td><?php echo $datos1[$i]['distrito'] ?></td>
                            <td><?php echo $datos1[$i]['telefono'] ?></td>
                   
                            <td align="center"><a style="cursor:pointer" class="fa fa-pencil" title="Edit" onclick="edit_user(<?php echo $datos1[$i]['id'] ?>)"></a> &nbsp;<a style="cursor:pointer" class="fa fa-trash" title="Remove" onclick="delete_user(<?php echo $datos1[$i]['id'] ?>)"></a>
                            </td>
                          </tr>
  <?php
    $i++;
   }
  ?>


<?php
 $con->desconectar();


?>
                                          </tbody>
                                        </table> 