 <?php
 include('../_include/configuration.php');
  include('../_classes/conectar.php');
  include('../_classes/crud.php');

 $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();
?>


                                            <?php
                                             $crud->setConsulta("SELECT * from items where cotizacion_id = '$_GET[uid]'");
                                             $datos1 = $crud->seleccionar($con->getConection());
                                             $i=0;
                                             while ($i<sizeof($datos1))
                                             {   
                                            ?>
                                           <tr id="f_<?php echo $i+1 ?>">
                          
                                            <td align="right"><input type="text" readonly class="form-control" id="item_<?php echo $i+1 ?>" name="item_<?php echo $i+1 ?>" value="<?php echo $i+1 ?>" ></td>
                                             <td align="left"> 
                                              <select   class="form-control" id="tipo_serv_<?php echo $i+1 ?>" name="tipo_serv_<?php echo $i+1 ?>" >
                                                 <option value="Escoja opción">Escoja opción</option>
                                                 <option value="Compras por internet" <?php if($datos1[$i]['tipo_servicio']=='Compras por internet'){echo 'selected';} ?>>Compras por internet</option>
                                                 <option value="Transporte de carga aérea" <?php if($datos1[$i]['tipo_servicio']=='Transporte de carga aérea'){echo 'selected';} ?>>Transporte de carga aérea</option>
                                              </select>
                                             </td>
                                             <td align="center"><input type="hidden" id="ocul_descr_<?php echo $i+1 ?>" name="ocul_descr_<?php echo $i+1 ?>" value="<?php echo $datos1[$i]['descripcion']  ?>"><a style="cursor:pointer" class="fa fa-info" title="Descripción" data-param="<?php echo $i+1 ?>" id="d_<?php echo $i+1 ?>" name="d_<?php echo $i+1 ?>"  data-toggle="modal" data-target="#midescri"></td>
                                             <td align="center"><input type="hidden" id="ocul_link_<?php echo $i+1 ?>" name="ocul_link_<?php echo $i+1 ?>" value="<?php echo $datos1[$i]['weblink']  ?>"> <a style="cursor:pointer"  class="fa fa-link" title="Web link"  data-toggle="modal" data-target="#milink" id="l_<?php echo $i+1 ?>" name="l_<?php echo $i+1 ?>" data-param="<?php echo $i+1 ?>"></td>
                                                         <td align="right"><input type="text" data-number-to-fixed="2" class="form-control currency" id="precio_<?php echo $i+1 ?>" name="precio_<?php echo $i+1 ?>" onKeyPress="return validarnum(event)" value="<?php echo $datos1[$i]['precio_articulo']  ?>" > </td>
                                             <td align="right"><input type="text"  class="form-control" id="cantidad_<?php echo $i+1 ?>" name="cantidad_<?php echo $i+1 ?>"  onKeyPress="return validarnum(event)" value="<?php echo $datos1[$i]['cantidad']  ?>"></td>
                                            
                                
                                             <td align="right"><input type="text"  class="form-control currency" id="costo_ship_<?php echo $i+1 ?>" name="costo_ship_<?php echo $i+1 ?>" onKeyPress="return validarnum(event)" value="<?php echo $datos1[$i]['shipping']  ?>" ></td>
                                             <td align="right"><input type="text"  class="form-control" id="peso_<?php echo $i+1 ?>" name="peso_<?php echo $i+1 ?>" value="<?php echo $datos1[$i]['peso'] ?>" ></td>
                                              <td align="left"> 
                                              <select   class="form-control" id="state_tax_<?php echo $i+1 ?>" name="state_tax_<?php echo $i+1 ?>" onchange="costo_traida(<?php echo $i+1 ?>)" >
                                                 <option value="Escoja opción">Escoja opción</option>
                                                 <option value="SI" <?php if($datos1[$i]['state_tax']=='SI'){echo 'selected';} ?>>SI</option>
                                                 <option value="NO" <?php if($datos1[$i]['state_tax']=='NO'){echo 'selected';} ?>>NO</option>
                                              </select>
                                             </td>
                                             <td align="right"><input type="text"  class="form-control currency" id="pa_<?php echo $i+1 ?>" name="pa_<?php echo $i+1 ?>" readonly value="<?php echo $datos1[$i]['precio_web'] ?>"  ></td>
                                              
                                           
                                             <td align="right"><input type="text"  class="form-control currency" id="flete_<?php echo $i+1 ?>" name="flete_<?php echo $i+1 ?>" readonly  value="<?php echo $datos1[$i]['flete_smi'] ?>"></td>
                                             <td align="right"><input type="text"  class="form-control currency" id="subtotal_<?php echo $i+1 ?>" name="subtotal_<?php echo $i+1 ?>" readonly  value="<?php echo $datos1[$i]['total'] ?>" ></td>

                                             <td align="center"><a style="cursor:pointer" class="fa  fa-plus-square-o" title="Añadir" onclick="agrega()"></a>&nbsp;&nbsp;
                                               <a style="cursor:pointer" class="fa fa-minus-circle" title="Eliminar" onclick="elimina(<?php echo $i+1 ?>)">
                                             </td>       



                                           </tr>
  <?php
    $i++;
   }
  ?>


<?php
 $con->desconectar();


?>
                                      