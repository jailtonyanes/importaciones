 <?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
?>
                                              <option value="Escoja opción" slected="selected">Escoja opción</option>
                                            <?php
                                             $crud->setConsulta("select d.nombre from provincia p join distrito d on (p.id=d.provincia_id) where p.nombre ='$_GET[uid]'");
                                             $datos1 = $crud->seleccionar($con->getConection());
                                             $i=0;
                                             while ($i<sizeof($datos1))
                                             {   
                                            ?>
                                                <option value="<?php echo $datos1[$i]['nombre'] ?>"><?php echo $datos1[$i]['nombre'] ?></option>
  

                                            <?php
                                              $i++;
                                             }
                                            ?>


<?php
 $con->desconectar();


?>
                                        