<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/estudiantes/models/Estudiantes.php";

class EstudiantesControllers
{
    public function obtenerEstudiantes()
    {
        $estudiantes = new Estudiantes();

        return $estudiantes::find('all');
    }

    public function registrarEstudiante($arrayEstudiante)
    {
        $estudiantes = new Estudiantes();
        $estudiantes::create($arrayEstudiante);
    }

    public function obtenerEstudiantePorId($id)
    {
        $estudiantes = new Estudiantes();

        return $estudiantes::find(array("id" => $id));
    }

    public function actualizarEstudiante($id, $estudianteEditado)
    {
        $estudiantes = new Estudiantes();
        $estudiante = $estudiantes::find(array("id" => $id));
        $estudiante->update_attributes($estudianteEditado);
    }

    public function eliminarEstudiante($id)
    {
        $estudiantes = new Estudiantes();
        $estudiante = $estudiantes::find(array("id" => $id));
        $estudiante->delete();

    }
}
