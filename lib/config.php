<?php
require_once 'php-activerecord/activerecord.php';
// $con = 'mysql://username:password@localhost/database_name'

activerecord\config::initialize(function ($cfg) {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:@localhost/estudiantes'));
});
