            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                        <div>
                            <p>
                                <a href="<?php echo base_url();?>/ventas" class="btn btn-success">Ventas</a>
                            </p>

                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Folio</th>
                                            <th>Cliente</th>
                                            <th>Total</th>
                                            <th>Cajero</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php foreach($datos as $dato){ ?>
                                            <tr>
                                                <td><?php echo $dato['fecha_alta']; ?></td>
                                                <td><?php echo $dato['folio']; ?></td>
                                                <td><?php echo $dato['cliente']; ?></td>
                                                <td><?php echo $dato['total']; ?></td>
                                                <td><?php echo $dato['cajero']; ?></td>
                                                
                                                <td><a href="<?php echo base_url(). '/ventas/muestraTicket/'. $dato['id']; ?>" class="btn btn-primary"><i class="fa-solid fa-list-alt"></i></a></td>
                                                
                                  
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