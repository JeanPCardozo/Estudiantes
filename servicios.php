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
    $estuController->actualizarEstudiante($estudianteEditado);
    header('Location: index.php');
endif;