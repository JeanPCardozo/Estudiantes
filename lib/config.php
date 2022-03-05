<?php
require_once 'php-activerecord/activerecord.php';
// $con = 'mysql://username:password@localhost/database_name'

activerecord\config::initialize(function ($cfg) {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://uasktf7r4ce3rt2s:lpChTnBu4W64f15sBF8O@bxfqgvqyyufnvoh3wui2-mysql.services.clever-cloud.com:3306/bxfqgvqyyufnvoh3wui2'));
});
