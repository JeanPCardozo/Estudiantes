<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/controllers/EstudiantesControllers.php';

$estuController = new EstudiantesControllers();
$id = $_GET['id'];
$estudiante = $estuController->obtenerEstudiantePorId($id);

if ($_POST):
    echo $id;
    $estudianteEditado = array(
        "id" => $id,
        "nombre" => $_POST['txtNombre'],
        "apellido" => $_POST['txtApellido'],
        "fecha_nacimiento" => $_POST['txtFechaNacimiento'],
        "semestre" => $_POST['txtSemestre'],
        "genero" => $_POST['txtGenero'],
        "telefono" => $_POST['txtTelefono'],
        "programa" => $_POST['txtPrograma'],
        "universidad" => $_POST['txtUniversidad'],
        "email" => $_POST['txtEmail'],
        "password" => $_POST['txtPassword'],
    );
    $estuController->actualizarEstudiante($id, $estudianteEditado);
    header('Location: index.php');
endif;
?>
<style>
    .card-body {
        overflow: auto !important;
        max-height: 500px !important;
    }
</style>
<div class="card w-100">
    <h5 class="card-title mx-3 mt-3">Actualizar Estudiantes</h5>
    <form method="post">
        <div class="card-body shadow-lg m-2">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                       value="<?php echo $estudiante->nombre ?>" required/>
                <label for="txtNombre" class="form-label">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="txtApellido" name="txtApellido"
                       value="<?php echo $estudiante->apellido ?>" required/>
                <label for="txtApellido" class="form-label">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="txtFechaNacimiento" name="txtFechaNacimiento"
                       value="<?php echo $estudiante->fecha_nacimiento ?>" required/>
                <label for="txtFechaNacimiento" class="form-label">Fecha Nacimiento</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="txtSemestre" name="txtSemestre"
                       value="<?php echo $estudiante->semestre ?>" required/>
                <label for="txtSemestre" class="form-label">Semestre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="txtEmail" name="txtEmail"
                       value="<?php echo $estudiante->email ?>" required/>
                <label for="txtEmail" class="form-label">Email</label>
            </div>
            <div class="form-floating mb-3">
                <select id="txtGenero" class="form-select" name="txtGenero" value="<?php echo $estudiante->genero ?>"
                        required>
                    <option value="">Selecciona una opción</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
                <label for="txtGenero" class="form-label">Genero</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="txtTelefono" name="txtTelefono"
                       value="<?php echo $estudiante->telefono ?>" required/>
                <label for="txtTelefono" class="form-label">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="txtPrograma" name="txtPrograma"
                       value="<?php echo $estudiante->programa ?>" required/>
                <label for="txtPrograma" class="form-label">Programa</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="txtUniversidad" name="txtUniversidad"
                       value="<?php echo $estudiante->universidad ?>" required/>
                <label for="txtUniversidad" class="form-label">Universidad</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="password" id="txtPassword" name="txtPassword"
                       value="<?php echo $estudiante->password ?>" required/>
                <label for="txtPassword" class="form-label">Contraseña</label>
            </div>
        </div>
        <div class="card-actions p-3">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <a href="index.php" class="btn btn-outline-danger" type="reset">Cancelar</a>
        </div>
    </form>
</div>