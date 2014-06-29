<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Fox\validateurs\Rp;

class validateursController extends AbstractActionController {

    public function valideAction() {
        $validator = new Rp();
        $resultat = $validator->isValid('44000');
        return new ViewModel(
                array(
            'resultat' => $resultat,
   
        ));
    }

}
