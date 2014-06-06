<?php

namespace Routestest\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Mail\Message;
use Zend\Mail\Transport\Smtp;
use Zend\Mail\Transport\SmtpOptions;

class VoyageController extends AbstractActionController {
    /*
      public function accueilAction() {
      $this->layout()->setTemplate('Routestest/layoutsLocaux/local_1.phtml');
      return new ViewModel(array('Pascale' => '20'));
      }
     */

    public function accueilAction() {
        $this->layout()->setTemplate('Routestest/layoutsLocaux/local_1.phtml');
        $pays = $this->params()->fromRoute('pays');

        $message = new Message();
        $message->addTo("srenard@ruses.com")
                ->addFrom("srenard@ruses.com")
                ->setSubject("Test 1")
                ->setBody("Message de test");

        $transport = new Smtp();
        $options = new SmtpOptions(array(
            'host' => 'smtp.free.fr'
        ));
        $transport->setOptions($options);
        $transport->send($message);


        return new ViewModel(array('Pascale' => '20', 'pays' => $pays));
    }

    public function accueilblogAction() {
        $this->layout()->setTemplate('Routestest/layoutsLocaux/local_1.phtml');
        return new ViewModel();
    }

    public function articleAction() {
        $this->layout()->setTemplate('Routestest/layoutsLocaux/local_1.phtml');
        return new ViewModel();
    }

    public function auteurAction() {
        $this->layout()->setTemplate('Routestest/layoutsLocaux/local_1.phtml');
        return new ViewModel();
    }

}
