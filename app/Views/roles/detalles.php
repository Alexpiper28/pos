            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo;?></h4>

                        <form id="form_permisos" name="form_permisos" method="POST" action="<?php echo base_url() . '/roles/guardaPermisos'; ?>">

                        <input type="hidden" name="id_rol" value="<?php echo $id_rol; ?>" />

                        <?php foreach($permisos as $permiso){ ?>
                            <input type="checkbox" value="<?php echo $permiso['id']; ?>" name="permisos[]" <?php if(isset($asignado[$permiso['id']])) { echo 'checked'; } ?> /> <label><?php echo $permiso['nombre']; ?></label>
                            <br>
                        
                        <?php } ?>

                        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        </form>
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