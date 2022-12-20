<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                        <div>
                            <p>
                                
                                <a href="<?php echo base_url();?>/unidades" class="btn btn-warning">Unidades</a>
                            </p>

                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Nombre corto</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php foreach($datos as $dato){ ?>
                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                <td><?php echo $dato['nombre_corto']; ?></td>
                                                <td><a href="#" data-href="<?php echo base_url(). '/unidades/reingresar/'. $dato['id']; ?>" data-bs-toggle="modal" data-bs-target="#modal-confirma" data-placement="top" title="Reingresar registro"><i class="fa-solid fa-circle-up"></i></a></td>
                                  
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Reingresar registro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea reingresar este registro?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                                <a class="btn btn-danger btn-ok">Si</a>
                            </div>
                        </div>
                    </div>
                </div>