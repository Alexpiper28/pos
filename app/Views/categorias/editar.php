<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo;?></h4>

            <form method="POST" action="<?php echo base_url(); ?>/categorias/actualizar" autocomplete="off">

            <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" autofocus require />
                        </div>
                    </div>
                </div>
                
                <a href="<?php echo base_url(); ?>/categorias" class="btn btn-primary mt-3">Regresar</a>
                <button type="submit" class="btn btn-success mt-3">Guardar</button>
            </form>
        </div>
    </main>