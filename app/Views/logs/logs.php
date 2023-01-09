            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>N° de Usuario</th>
                                            <th>IP</th>
                                            <th>Evento</th>
                                            <th>Detalles</th>
                                            <th>Fecha y hora</th>

                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php foreach($datos as $dato){ ?>
                                            <tr>
                                                <td><?php echo $dato['id_usuario']; ?></td>
                                                <td><?php echo $dato['ip']; ?></td>
                                                <td><?php echo $dato['evento']; ?></td>
                                                <td><?php echo $dato['detalles']; ?></td>
                                                <td><?php echo $dato['fecha']; ?></td>
                                                
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </main>