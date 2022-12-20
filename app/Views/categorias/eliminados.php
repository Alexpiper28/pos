<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                        <div>
                            <p>
                                
                                <a href="<?php echo base_url();?>/categorias" class="btn btn-warning">Unidades</a>
                            </p>

                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php foreach($datos as $dato){ ?>
                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><?php echo $dato['nombre']; ?></td>
                                                <td><a href="<?php echo base_url(). '/categorias/reingresar/'. $dato['id']; ?>"><i class="fa-solid fa-circle-up"></i></a></td>
                                                
                                                
                                  
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </main>