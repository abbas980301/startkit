<?php
require __DIR__ . '/config.php';
require __DIR__ . '/RedBeanPHP4_3_4/rb.php';


R::setup( 'mysql:host='.$db_config['host'].';dbname='.$db_config['name'],
    $db_config['user'], $db_config['pass'] ); //for both mysql or mariaDB
