<?php

namespace Site\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PagesController extends AbstractActionController {

    public function accueilAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Page d\'accueil',
        ));
    }

    public function societeAction() {
        $this->layout()->setTemplate('site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre société',
        ));
    }

    public function histoireAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre histoire',
        ));
    }

    public function histoire1Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre histoire 1',
        ));
    }

    public function histoire2Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre histoire 2',
        ));
    }

    public function histoire3Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre histoire 3',
        ));
    }

    public function histoire4Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre histoire 4',
        ));
    }

    public function histoire5Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre histoire 5',
        ));
    }

    public function h2010Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'H2010',
        ));
    }

    public function h2011Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'H2011',
        ));
    }

    public function h2012Action() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'H2012',
        ));
    }

    public function groupeAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Notre groupe',
        ));
    }

    public function contactAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Contactez-nous !',
        ));
    }

    public function messageAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Votre message',
        ));
    }

    public function planAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        //$vue = new ViewModel();
        //$vue->setTerminal(true);
        //return($vue);
        return new ViewModel(array(
            'titre' => 'Plan',
        ));
    }

    public function artAction() {
        $this->layout()->setTemplate('Site/layout/layoutStatique.phtml');
        return new ViewModel(array(
            'titre' => 'Art',
        ));
    }

}
