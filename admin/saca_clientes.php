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
                                              <th>SMI</th>
                                              <th>CIP/RUC</th>
                                              <th>Nombre</th>
                                              <th>Apellido</th>
                                              <th>e-mail</th>
                                              <th>Tel 1</th>
                                              <th>Tel 2</th>
                                              
                                              <th>Acciones</th>
                                              
                                              
                                            </tr>
                                          </thead>
                                          <tbody id="cuerpo">
                                            <?php
                                             $crud->setConsulta("SELECT * from cliente order by nombre asc, apellido asc ");
                                             $datos1 = $crud->seleccionar($con->getConection());
                                             $i=0;
                                             while ($i<sizeof($datos1))
                                             {   
                                            ?>
                          <tr>
                            <td><?php echo 'SMI-'.$datos1[$i]['id'] ?></td>
                            <td><?php echo $datos1[$i]['cip_ruc'] ?></td>
                            <td><?php echo $datos1[$i]['nombre'] ?></td>
                            <td><?php echo $datos1[$i]['apellido'] ?></td>
                            <td><?php echo $datos1[$i]['email'] ?></td>
                              <td><?php echo $datos1[$i]['telefono1'] ?></td>
                            <td><?php echo $datos1[$i]['telefono2'] ?></td>
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