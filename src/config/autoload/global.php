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
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            ),
        ),
        'view_manager' => array(
            'base_path' => "http://api.oauth.ec",
            'display_not_found_reason' => true,
            'display_exceptions' => true,
        ),
    );
