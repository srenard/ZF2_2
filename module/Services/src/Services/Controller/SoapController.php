<?php

namespace Services\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Services\Model\Services;
use Zend\Soap\Server;
use Zend\Soap\Server\DocumentLiteralWrapper;
use Zend\Soap\Client;
use Zend\Soap\AutoDiscover;
use SoapClass;

class SoapController extends AbstractActionController {

    public function serveurSoapAction() {
        $this->layout()->setTemplate('Services/layout/vide.phtml');
        if (isset($_GET['wsdl'])) {
            //echo 'ok1';
            $soapAutoDiscover = new AutoDiscover
                   (new \Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeSequence());
             //echo 'ok2';
            $soapAutoDiscover->setBindingStyle(array('style' => 'document'));
            $soapAutoDiscover->setOperationBodyStyle(array('use' => 'literal'));
            //$soapAutoDiscover->setClass(new SoapClass());
            $soapAutoDiscover->setClass('Services\Controller\SoapClass');
            $soapAutoDiscover->setServiceName('calc');
            $soapAutoDiscover->setUri('http://localhost/soapserveur?wsdl');
            //var_dump($soapAutoDiscover);
            //header("Content-Type: text/xml");
            //echo 'ok3';
            //var_dump($soapAutoDiscover);
            echo $soapAutoDiscover->generate()->toXml();
            echo 'ok4';
        } else {
            $soap = new Server('localhost/soapserveur' . '?wsdl');
            $soap->setObject(new DocumentLiteralWrapper(new Soapclass()));
            $soap->handle();
        }
    }

    public function clientSoapAction() {
        $options = array();
        $client = new Client('http://localhost/soapserveur?wsdl', $options);
        $result = $client->calcul(2, 2);
        var_dump($result);
    }

}

