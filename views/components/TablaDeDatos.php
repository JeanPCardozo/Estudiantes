<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/controllers/EstudiantesControllers.php';

$estuController = new EstudiantesControllers();
$arrayEstudiantes = $estuController->obtenerEstudiantes();

if ($_GET) {
    if ($_GET['accion'] == 'eliminar') {
        $estuController->eliminarEstudiante($_GET['id']);
        header('Location: index.php');
    }
}
?>

<table class="table table-striped">
    <thead>
    <tr class="text-truncate">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha De Nacimiento</th>
        <th scope="col">Semestre</th>
        <th scope="col">Genero</th>
        <th scope="col">Programa</th>
        <th scope="col">Universidad</th>
        <th scope="col">Email</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($arrayEstudiantes as $estudiante):
        ?>
        <tr class="text-truncate">
            <th scope="row"><?php echo $estudiante->id ?></th>
            <td><?php echo $estudiante->nombre ?></td>
            <td><?php echo $estudiante->apellido ?></td>
            <td><?php echo $estudiante->fecha_nacimiento ?></td>
            <td><?php echo $estudiante->semestre ?></td>
            <td><?php echo $estudiante->genero ?></td>
            <td><?php echo $estudiante->programa ?></td>
            <td><?php echo $estudiante->universidad ?></td>
            <td><?php echo $estudiante->email ?></td>
            <td>
                <a class="link-info mx-2" href="index.php?id=<?php echo $estudiante->id ?>&accion=actualizar">
                    Editar
                </a>
                <a class="link-danger mx-2" href="index.php?id=<?php echo $estudiante->id ?>&accion=eliminar">
                    Eliminar
                </a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>