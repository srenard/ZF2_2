<?php
return array (
  'router' => 
  array (
    'routes' => 
    array (
      'Validateurs' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Validateurs',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\Validateurs',
            'action' => 'valide',
          ),
        ),
      ),
      'Db' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/Db',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\Db',
            'action' => 'test1',
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\Index',
            'action' => 'index',
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/application',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Application\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'articles' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/articles[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Articles\\Controller\\Articles',
            'action' => 'tableau',
          ),
        ),
      ),
      'pdf' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/pdf',
          'defaults' => 
          array (
            'controller' => 'Articles\\Controller\\Pdf',
            'action' => 'fabrication',
          ),
        ),
      ),
      'voyage2' => 
      array (
        'type' => '\\Regex',
        'options' => 
        array (
          'route' => '/destination[/pays]',
          'regex' => '/destination/(?<pays>[a-zA-Z]+)',
          'spec' => '/voyage/%pays%',
          'defaults' => 
          array (
            'controller' => 'routestest\\Controller\\Voyage',
            'action' => 'accueil',
          ),
        ),
      ),
      'blog' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/blog',
          'defaults' => 
          array (
            'controller' => 'routestest\\Controller\\Voyage',
            'action' => 'accueilblog',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'articles' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/[:id]',
              'constraints' => 
              array (
                'id' => '[0-9]+',
              ),
              'defaults' => 
              array (
                'action' => 'article',
              ),
            ),
          ),
          'auteurs' => 
          array (
            'type' => 'segment',
            'options' => 
            array (
              'route' => '/[:auteur]',
              'constraints' => 
              array (
                'auteur' => '[a-zA-Z]+',
              ),
              'defaults' => 
              array (
                'action' => 'auteur',
              ),
            ),
          ),
        ),
      ),
      'voyage' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/voyage',
          'defaults' => 
          array (
            'controller' => 'routestest\\Controller\\Voyage',
            'action' => 'accueil',
          ),
        ),
      ),
      'upload' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/upload',
          'defaults' => 
          array (
            'controller' => 'Clients\\Controller\\Clients',
            'action' => 'upload',
          ),
        ),
      ),
      'clients' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/clients[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Clients\\Controller\\Clients',
            'action' => 'formulaire',
          ),
        ),
      ),
      'login' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/auth',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'auth\\Controller',
            'controller' => 'Login',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'process' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:action]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'accueil' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/accueil',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'accueil',
          ),
        ),
      ),
      'societe' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/societe',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'societe',
          ),
        ),
      ),
      'histoire' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/histoire',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'histoire',
          ),
        ),
      ),
      'histoire1' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/histoire1',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'histoire1',
          ),
        ),
      ),
      'histoire2' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/histoire2',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'histoire2',
          ),
        ),
      ),
      'histoire3' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/histoire3',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'histoire3',
          ),
        ),
      ),
      'histoire4' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/histoire4',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'histoire4',
          ),
        ),
      ),
      'histoire5' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/histoire5',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'histoire5',
          ),
        ),
      ),
      'h2010' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/h2010',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'h2010',
          ),
        ),
      ),
      'h2011' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/h2011',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'h2011',
          ),
        ),
      ),
      'h2012' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/h2012',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'h2012',
          ),
        ),
      ),
      'groupe' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/groupe',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'groupe',
          ),
        ),
      ),
      'contact' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/contact',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'contact',
          ),
        ),
      ),
      'message' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/message',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'message',
          ),
        ),
      ),
      'plan' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/plan',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'plan',
          ),
        ),
      ),
      'art' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\literal',
        'options' => 
        array (
          'route' => '/art',
          'defaults' => 
          array (
            'controller' => 'Site\\Controller\\Pages',
            'action' => 'art',
          ),
        ),
      ),
      'services' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/soapserveur[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Services\\Controller\\Soap',
            'action' => 'serveurSoap',
          ),
        ),
      ),
    ),
  ),
  'service_manager' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
      1 => 'Zend\\Log\\LoggerAbstractServiceFactory',
    ),
    'aliases' => 
    array (
      'translator' => 'MvcTranslator',
    ),
     
    'factories' => 
    array (
      'Zend\\Log' => 
      Closure::__set_state(array(
      )),
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
      'Navigation' => 'Zend\\Navigation\\Service\\DefaultNavigationFactory',
    ),
       
  ),
  'translator' => 
  array (
    'locale' => 'en_US',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'gettext',
        'base_dir' => 'C:\\wamp\\www\\zend_10\\module\\Application\\config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Application\\Controller\\Index' => 'Application\\Controller\\IndexController',
      'Application\\Controller\\Db' => 'Application\\Controller\\DbController',
      'Application\\Controller\\validateurs' => 'Application\\Controller\\validateursController',
      'Application\\Controller\\Domtest' => 'Application\\Controller\\DomtestController',
      'Articles\\Controller\\Articles' => 'Articles\\Controller\\ArticlesController',
      'Articles\\Controller\\Pdf' => 'Articles\\Controller\\PdfController',
      'routestest\\Controller\\Voyage' => 'Routestest\\Controller\\VoyageController',
      'Clients\\Controller\\Clients' => 'Clients\\Controller\\ClientsController',
      'auth\\Controller\\login' => 'auth\\Controller\\LoginController',
      'site\\Controller\\Pages' => 'site\\Controller\\PagesController',
      'Services\\Controller\\Soap' => 'Services\\Controller\\SoapController',
    ),
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => 'C:\\wamp\\www\\zend_10\\module\\Application\\config/../view/layout/layout.phtml',
      'application/index/index' => 'C:\\wamp\\www\\zend_10\\module\\Application\\config/../view/application/index/index.phtml',
      'error/404' => 'C:\\wamp\\www\\zend_10\\module\\Application\\config/../view/error/404.phtml',
      'error/index' => 'C:\\wamp\\www\\zend_10\\module\\Application\\config/../view/error/index.phtml',
    ),
    'template_path_stack' => 
    array (
      0 => 'C:\\wamp\\www\\zend_10\\module\\Application\\config/../view',
      'articles' => 'C:\\wamp\\www\\zend_10\\module\\Articles\\config/../view',
      'routestest' => 'C:\\wamp\\www\\zend_10\\module\\Routestest\\config/../view',
      'Clients' => 'C:\\wamp\\www\\zend_10\\module\\clients\\config/../view',
      'auth' => 'C:\\wamp\\www\\zend_10\\module\\auth\\config/../view',
      'site' => 'C:\\wamp\\www\\zend_10\\module\\site\\config/../view',
      'Services' => 'C:\\wamp\\www\\zend_10\\module\\Services\\config/../view',
    ),
  ),
  'console' => 
  array (
    'router' => 
    array (
      'routes' => 
      array (
      ),
    ),
  ),
  'controller_plugins' => 
  array (
    'invokables' => 
    array (
      'aclplugin' => 'auth\\Controller\\Plugin\\aclplugin',
    ),
  ),
  'db' => 
  array (
    'driver' => 'Pdo',
    'dsn' => 'mysql:dbname=fox;host=localhost',
    'driver_options' => 
    array (
      1002 => 'SET NAMES \'UTF8\'',
    ),
    'username' => 'root',
    'password' => '',
  ),
  'navigation' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        'label' => 'Accueil',
        'route' => 'accueil',
        'pages' => 
        array (
          0 => 
          array (
            'label' => 'Société',
            'route' => 'societe',
          ),
          1 => 
          array (
            'label' => 'Histoire',
            'route' => 'histoire',
            'pages' => 
            array (
              0 => 
              array (
                'label' => 'Histoire1',
                'route' => 'histoire1',
              ),
              1 => 
              array (
                'label' => 'Histoire2',
                'route' => 'histoire2',
              ),
              2 => 
              array (
                'label' => 'Histoire3',
                'route' => 'histoire3',
              ),
              3 => 
              array (
                'label' => 'Histoire4',
                'route' => 'histoire4',
              ),
              4 => 
              array (
                'label' => 'Histoire5',
                'route' => 'histoire5',
                'pages' => 
                array (
                  0 => 
                  array (
                    'label' => 'H2010',
                    'route' => 'h2010',
                  ),
                  1 => 
                  array (
                    'label' => 'H2011',
                    'route' => 'h2011',
                  ),
                  2 => 
                  array (
                    'label' => 'H2012',
                    'route' => 'h2012',
                  ),
                ),
              ),
            ),
          ),
          2 => 
          array (
            'label' => 'Groupe',
            'route' => 'groupe',
          ),
          3 => 
          array (
            'label' => 'Contact',
            'route' => 'contact',
            'pages' => 
            array (
              0 => 
              array (
                'label' => 'Message',
                'route' => 'message',
              ),
              1 => 
              array (
                'label' => 'Plan',
                'route' => 'plan',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);