<?php

return array(
    'db' => array(
        'driver' => 'pdo_mysql',
        'hostname' => 'localhost',
        'database' => 'database',
        'username' => 'root',
        'password' => '',
        'port' => '3306',
        'options' => array('buffer_results' => true),
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'utf8\''
        )
    ),
    'migrations' => array(
        'dir' => dirname(__FILE__) . '/../../migrations',
        'namespace' => 'ZfSimpleMigrations\Migrations',
        'show_log' => true
    ),
);
