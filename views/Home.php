<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/layout/Header.php';
?>

<div class="row">
    <div class="col-5">
        <?php
        if (!$_GET) {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/views/components/FormularioDeRegistro.php';
        } else if (($_GET['accion'] == 'actualizar')) {
            include_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/views/components/FormularioParaActualizar.php';
        }
        ?>
    </div>
    <div class="col-7 p-3 border table-responsive">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/views/components/TablaDeDatos.php' ?>
    </div>
</div>


<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/estudiantes/layout/Footer.php'
?>
