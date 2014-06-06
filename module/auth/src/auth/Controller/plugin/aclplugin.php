<?php

namespace Auth\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin,
    Zend\Session\Container as SessionContainer,
    Zend\Permissions\Acl\Acl,
    Zend\Permissions\Acl\Role\GenericRole as Role,
    Zend\Permissions\Acl\Resource\GenericResource as Resource;
// pour authentification
use auth\Model\PersoStorage;

class AclPlugin extends AbstractPlugin {

    public function autorisation($e) {
// Création des rôles
        
        $acl = new Acl();
        $acl->addRole(new Role('admin'));
        $acl->addRole(new Role('visiteur'));
// Création des ressources
        $acl->addResource(new Resource('Clients'));
        $acl->addResource(new Resource('Articles'))
                ->addResource(new Resource('login'))
                ->addResource(new Resource('index'))
                ->addResource(new Resource('add'))
                ->addResource(new Resource('voyage'))
                ->addResource(new Resource('accueil'))
        ->addResource(new Resource('tableau'));
// Création des autorisations
        $acl->allow('visiteur', 'index');
        $acl->allow('visiteur', 'tableau');
        $acl->allow('visiteur', 'add');
        $acl->allow('visiteur', 'voyage');
        $acl->allow('visiteur', 'accueil');
        $acl->allow('admin');
//$acl->deny('admin', 'histoire');
        
        $action = $e->getRouteMatch()->getParams()['action'];
        $sm = $this->getController()
                ->getServiceLocator('authService');
        $session = $sm->get('AuthService')->getStorage()->read();
        if (isset($session->utilisateurs_role)) {
            if ($session->utilisateurs_role != '') {
                $role = $session->utilisateurs_role;
            } else {
                $role = 'visiteur';
            }
        } else {
            $role = 'visiteur';
        }
        if (!$acl->isAllowed($role, $action)) {
            $url = '/';
            $response = $e->getResponse();
            $response->setStatusCode(302);
            $response->getHeaders()->addHeaderLine('Location', $url);
            $e->stopPropagation();
        }
    }

}