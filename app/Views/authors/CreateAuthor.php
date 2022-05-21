<?php echo $header ?>
    <h1>Nuevo autor</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese la información requerida</h5>
            <p class="card-text">
                <form method="post" 
                      action="<?php echo site_url('/save')?>" 
                      enctype="multipart/form-data"
                      autocomplete="off">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="my-input">Nombre</label>
                    <input id="nombre" 
                        class="form-control" 
                        type="text" 
                        name="nombre"
                        placeholder="Nombre del autor">
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">Apellido</label>
                    <input id="apellido" 
                        class="form-control" 
                        type="text" 
                        name="apellido"
                        placeholder="Apellido del autor">
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">Seudonimo</label>
                    <input id="seudonimo" 
                        class="form-control" 
                        type="text" 
                        name="seudonimo"
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
                        type="text"/>
                </div>
                <div class="form-group col-md-4">
                    <label for="my-input">País</label>
                    <input id="pais_origen" 
                        class="form-control" 
                        type="text" 
                        name="pais_origen"
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