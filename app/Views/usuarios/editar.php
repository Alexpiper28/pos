<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo;?></h4>

            <?php \Config\Services::validation()->listErrors(); ?>

            <form method="POST" action="<?php echo base_url(); ?>/usuarios/actualizar" autocomplete="off">
            <?php csrf_field(); ?>
            <input type="hidden" value="<?php echo $usuario['id']; ?>" name="id" />
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $usuario['nombre']; ?>" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Usuario</label>
                            <input class="form-control" id="usuario" name="usuario" type="text" value="<?php echo $usuario['usuario']; ?>" required />
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Caja</label>
                            <select class="form-control" name="id_caja" id="id_caja" required>
                                <option value="">Seleccionar caja</option>
                                <?php foreach($cajas as $caja) { ?>
                                    <option value="<?php echo $caja['id']; ?>" <?php if($caja['id']== $usuario['id_caja']){ echo 'selected'; }?>><?php echo $caja['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Rol</label>
                            <select class="form-control" name="id_rol" id="id_rol" required>
                                <option value="">Seleccionar unidad</option>
                                <?php foreach($roles as $rol) { ?>
                                    <option value="<?php echo $rol['id']; ?>" <?php if($rol['id']== $usuario['id_caja']){ echo 'selected'; }?>><?php echo $rol['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <i class="campo-obligatorio">( * ) Campo obligatorio</i>
                        </div>
                    </div>
                </div>
                
                <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary mt-3">Regresar</a>
                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </form>
        </div>
    </main>