<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'routestest\Controller\Voyage' => 'Routestest\Controller\VoyageController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'voyage' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/voyage',
                    'defaults' => array(
                        'controller' => 'routestest\Controller\Voyage',
                        'action' => 'accueil',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'routestest' => __DIR__ . '/../view',
        ),
    ),
);