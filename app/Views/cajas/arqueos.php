            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                        <div>
                            <p>
                                <a href="<?php echo base_url();?>/cajas/nuevo_arqueo" class="btn btn-info">Agregar</a>
                                <a href="<?php echo base_url();?>/cajas/eliminados" class="btn btn-warning">Eliminados</a>
                            </p>

                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Fecha apertura</th>
                                            <th>Fecha cierre</th>
                                            <th>Monto inicial</th>
                                            <th>Monto final</th>
                                            <th>Total ventas</th>
                                            <th>Estatus</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php foreach($datos as $dato){ ?>
                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['fecha_inicio']; ?></td>
                                                <td><?php echo $dato['fecha_fin']; ?></td>
                                                <td><?php echo $dato['monto_inicial']; ?></td>
                                                <td><?php echo $dato['monto_final']; ?></td>
                                                <td><?php echo $dato['total_ventas']; ?></td>
                                                <?php if($dato['estatus'] == 1){ ?>
                                                    <td>Abierta</td>
                                                    <td><a href="#" data-href="<?php echo base_url(). '/cajas/cerrar/'. $dato['id']; ?>" data-bs-toggle="modal" data-bs-target="#modal-confirma" data-placement="top" title="Eliminar registro" class="btn btn-danger"><i class="fa-solid fa-lock"></i></a></td>
                                                <?php } else { ?>
                                                    <td>Cerrada</td>
                                                    <td><a href="#" data-href="<?php echo base_url(). '/cajas/eliminar/'. $dato['id']; ?>" data-bs-toggle="modal" data-bs-target="#modal-new" data-placement="top" title="Eliminar registro" class="btn btn-success"><i class="fa-solid fa-print"></i></a></td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="modal-confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar este registro?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                                <a class="btn btn-danger btn-ok">Si</a>
                            </div>
                        </div>
                    </div>
                </div>