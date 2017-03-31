<?php
require __DIR__ . '/config.php';
require __DIR__ . '/RedBeanPHP4_3_4/rb.php';
require __DIR__ . '/varDumpAsText.php';


spl_autoload_register(function($class_name){
    $base = __DIR__. '/../' .str_replace('\\', '/', $class_name).'Class.php';
    $path = realpath($base);
    if ($path) {
        require_once $path;
    }
    else {
        $e = new Exception();
        print_r($e->getMessage());
//        print_r($e->getTraceAsString());
    }
    return class_exists($class_name, false);
}, true);

R::setup( 'mysql:host='.$db_config['host'].';dbname='.$db_config['name'],
    $db_config['user'], $db_config['pass'] ); //for both mysql or mariaDB
