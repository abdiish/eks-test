<?php echo $header ?>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
  <a class="btn btn-primary me-md-2" 
     href="<?php echo base_url('CreateAuthor') ?>" 
     role="button">Nuevo</a>
</div>
<table class=" table table-bordered table-hover">
    <thead class="thead-light">
        <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Seudonimo</th>
        <th>Genero</th>
        <th>Fecha nacimiento</th>
        <th>País de origen</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autores as $autor): ?>
        <tr>
        <th><?php echo $autor['autor_id']; ?></th>
        <td><?php echo $autor['nombre']; ?></td>
        <td><?php echo $autor['apellido']; ?></td>
        <td><?php echo $autor['seudonimo']; ?></td>
        <td><?php echo $autor['genero']; ?></td>
        <td><?php echo $autor['fecha_nacimiento']; ?></td>
        <td><?php echo $autor['pais_origen']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $footer ?>