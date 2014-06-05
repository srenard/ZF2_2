<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Validator\Barcode;
use Zend\I18n\Translator\Translator;
use Zend\Mvc\Translator as t2;
class validateursController extends AbstractActionController {

    public function valideAction() {
        $validator = new Barcode('EAN8');
        $traducteur = new Translator();
        $traducteur->addTranslationFile('phparray',
                                        'traductions/Zend_Validate.php',
                                        'application',
                                        'fr_FR');
        var_dump($traducteur);
        $traducteur2 = $translate = new t2($traducteur);
        $validator->setTranslator($traducteur2);
        $resultat = $validator->isValid('32123457');
        $messages = $validator->getMessages();
        return new ViewModel(
                array(
            'resultat' => $resultat,
            'messages' => $messages,
        ));
    }

}
