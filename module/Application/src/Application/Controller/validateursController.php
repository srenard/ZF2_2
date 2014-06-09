<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Validator\Barcode;
use Zend\I18n\Translator\Translator as t1;
use Zend\Mvc\I18n\Translator as t2;
class validateursController extends AbstractActionController {

    public function valideAction() {
        $validator = new Barcode('EAN8');
        $t1 = new t1();
        $traducteur = new t2($t1);
        //var_dump($traducteur);
        //exit();
        $traducteur->addTranslationFile('phparray',
                                        'traductions/Zend_Validate.php',
                                        '',
                                        'fr_FR');
        //var_dump($traducteur);
        //exit();
         //Zend\Validator\Translator\TranslatorInterface
        
        $validator->setTranslator($traducteur);
        var_dump($validator);
        $resultat = $validator->isValid('32123457');
        $messages = $validator->getMessages();
        return new ViewModel(
                array(
            'resultat' => $resultat,
            'messages' => $messages,
        ));
    }

}
