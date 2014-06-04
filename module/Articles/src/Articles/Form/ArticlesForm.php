<?php

namespace Articles\Form;

use Zend\Form\Form;

class ArticlesForm extends Form {

    public function __construct($name = null) {
        // Le nom passé au constructeur sera ignoré
        parent::__construct('articles');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'articles_id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'articles_nom',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Nom',
            ),
        ));
        $this->add(array(
            'name' => 'articles_ref',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Référence',
            ),
        ));
        $this->add(array(
            'name' => 'articles_stock',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Stock actuel',
            ),
        ));
        $this->add(array(
            'name' => 'articles_min',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Stock minimum',
            ),
        ));
        $this->add(array(
            'name' => 'articles_prix',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Prix',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }

}
