<?php

namespace Fox\validateurs;

use Zend\Validator\ValidatorInterface;

class Rp implements ValidatorInterface {

    public function isValid($valeur) {
        if (1 === preg_match("/^75|91|92|93|94|95|77|78[0-9]{3}$/", $valeur)) {
            return true;
        } else {
            return false;
        }
    }

    public function getMessages() {
        return;
    }

}