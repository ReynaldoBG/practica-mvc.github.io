<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Calificación de parcial</a>
        </nav>
    </header>

    <main class="container mt-4">
        <div>
            <h2>Alumnos a calificar</h2>
            <form action="controlador.php" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Materia</th>
                            <th>Parcial</th>
                            <th>Calificación</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="nombre_alumnoID" id="nombre_alumnoID" required></td>
                            <td><input type="text" class="form-control" name="materiaID" id="materiaID" required></td>
                            <td><input type="number" class="form-control" name="parcialID" id="parcialID" required></td>
                            <td><input type="number" step="0.01" class="form-control" name="calificacionID" id="calificacionID" required></td>
                            <td><input type="date" class="form-control" name="fechaID" id="fechaID" required></td>
                            <td><input type="submit" class="btn btn-primary" value="Guardar" name="btnAgregar" id="btnAgregar"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>

        <div>
            <h2>Alumnos calificados</h2>

            <form action="controlador.php" method="post">
                <input type="hidden" name="accion" value="buscar">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="buscaAlumno" id="buscaAlumno" placeholder="Buscar por nombre...">
                    <div class="input-group-append">
                        <input type="submit" class="btn btn-outline-secondary" value="Buscar" name="btnBuscar" id="btnBuscar">
                    </div>
                </div>
                <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Matrícula</th>
                                <th>Alumno</th>
                                <th>Materia</th>
                                <th>Parcial</th>
                                <th>Calificación</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo isset($tabla) ? $tabla : ''; ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div>
            <h2>Modificar calificaciones</h2>
            <form action="controlador.php" method="post">
                <div class="form-group">
                    <label for="modID">Matrícula del alumno</label>
                    <input type="number" class="form-control" name="modID" id="modID" required>
                </div>
                <div class="form-group">
                    <label for="modCalificacionID">Nueva calificación:</label>
                    <input type="number" step="0.01" class="form-control" name="modCalificacionID" id="modCalificacionID" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Guardar cambios" name="btnModificar" id="btnModificar">
            </form>
        </div>

        <div>
            <h2>Remover calificaciones</h2>
            <form action="controlador.php" method="post">
                <div class="form-group">
                    <label for="modID">Matrícula del alumno</label>
                    <input type="number" class="form-control" name="modID" id="modID" required>
                </div>
                <input type="submit" class="btn btn-danger" value="Borrar calificación" name="btnEliminar" id="btnEliminar">
            </form>
        </div>
    </main>
</body>

</html>