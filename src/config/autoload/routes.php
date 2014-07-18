<?php

return array(
    'routes' => array(
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route' => '/',
                'defaults' => array(
                    'module' => 'Application',
                    '__NAMESPACE__' => 'Application\Controller',
                    '__CONTROLLER__' => 'index',
                    'controller' => 'Application\Controller\Index',
                    'action' => 'index',
                ),
            ),
            'may_terminate' => true,
            'child_routes' => array(
            ),
        ),
    ),
);
