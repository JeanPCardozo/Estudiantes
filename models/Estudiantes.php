<?php

require_once $_SERVER['DOCUMENT_ROOT']."/estudiantes/lib/config.php";

class Estudiantes extends \ActiveRecord\Model
{
    public static $table_name = "estudiante";
    public static $primary_key = "id";
}