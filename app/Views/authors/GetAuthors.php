<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Autores</h1>
        <table class="table table-striped table-hover">
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
                <?php foreach($autores as $autor): ?>
                <tr>
                    <th><?php echo $autor['autor_id'];?></th>
                    <td><?php echo $autor['nombre'];?></td>
                    <td><?php echo $autor['apellido'];?></td>
                    <td><?php echo $autor['seudonimo'];?></td>
                    <td><?php echo $autor['genero'];?></td>
                    <td><?php echo $autor['fecha_nacimiento'];?></td>
                    <td><?php echo $autor['pais_origen'];?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>