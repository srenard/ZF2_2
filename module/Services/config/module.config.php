<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Services\Controller\Soap' => 'Services\Controller\SoapController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Services' => __DIR__ . '/../view',
        ),
    ),
    'router' => array(
        'routes' => array(
            'services' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/soapserveur[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Services\Controller\Soap',
                        'action' => 'serveurSoap',
                    ),
                ),
            ),
        ),
    ),
);
