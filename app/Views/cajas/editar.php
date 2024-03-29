<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo;?></h4>

            <?php  if(isset($validation)){ ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors(); ?>
                </div>
            <?php } ?> 

            <form method="POST" action="<?php echo base_url(); ?>/cajas/actualizar" autocomplete="off">

            <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre de caja</label>
                            <input class="form-control" id="numero_caja" name="numero_caja" type="text" value="<?php echo $datos['numero_caja']; ?>" autofocus required />
                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Folio</label>
                            <input class="form-control" id="folio" name="folio" type="number" min="0" value="<?php echo $datos['folio']; ?>" required />
                        </div>
                    </div>
                </div>
                
                <a href="<?php echo base_url(); ?>/cajas" class="btn btn-primary mt-3">Regresar</a>
                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </form>
        </div>
    </main>