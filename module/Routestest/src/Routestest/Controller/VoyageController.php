<?php

namespace Routestest\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class VoyageController extends AbstractActionController {

    public function accueilAction() {
        $this->layout()->setTemplate('layout/layout2.phtml');
        return new ViewModel(array('Pascale' => '20'));
    }

}
