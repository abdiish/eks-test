<?php echo $header ?>
    <h1>Editar información</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese la información requerida</h5>
            <p class="card-text">
                <form method="post" 
                      action="<?php echo site_url('/updateAuthor')?>" 
                      enctype="multipart/form-data"
                      autocomplete="off">
            <input type="hidden" name="autor_id" value="<?php echo $autor['autor_id'] ?>">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="my-input">Nombre</label>
                    <input id="nombre" 
                           class="form-control" 
                           type="text" 
                           name="nombre"
                           value="<?php echo $autor['nombre'] ?>"
                           placeholder="Nombre del autor">
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">Apellido</label>
                    <input id="apellido" 
                           class="form-control" 
                           type="text" 
                           name="apellido"
                           value="<?php echo $autor['apellido'] ?>"
                           placeholder="Apellido del autor">
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">Seudonimo</label>
                    <input id="seudonimo" 
                           class="form-control" 
                           type="text" 
                           name="seudonimo"
                           value="<?php echo $autor['seudonimo'] ?>"
                           placeholder="Seudonimo">
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">Genero</label>
                    <select name="genero" id="genero" class="form-control">
                        <option value="M" selected>Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label class="control-label" 
                        for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input class="form-control" 
                           id="fecha_nacimiento" 
                           name="fecha_nacimiento" 
                           placeholder="MM/DD/YYY"
                           value="<?php echo $autor['fecha_nacimiento'] ?>" 
                           type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">País</label>
                    <input id="pais_origen" 
                           class="form-control" 
                           type="text" 
                           name="pais_origen"
                           value="<?php echo $autor['pais_origen'] ?>"
                           placeholder="País de origen">
                </div>
            </div>    
            <a class="btn btn-primary me-md-2 mt-2" 
               href="<?php echo base_url('GetAuthors') ?>" 
               role="button">Cancelar</a>
            <button type="submit" 
                    class="btn btn-primary mt-2">Guardar</button>
        </form>  
            </p>
        </div>
    </div>
<?php echo $footer ?>