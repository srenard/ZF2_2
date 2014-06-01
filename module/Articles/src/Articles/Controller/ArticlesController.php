<?php

namespace Articles\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ArticlesController extends AbstractActionController {

    protected $articlesTable;

    public function getArticlesTable() {
        if (!$this->articlesTable) {
            $sm = $this->getServiceLocator();
            $this->articlesTable = $sm->get('Articles\Model\ArticlesTable');
        }
        return $this->articlesTable;
    }

    public function tableauAction() {
        return new ViewModel(array('articles' => $this->getArticlesTable()
                    ->fetchAll()));
    }

    public function indexAction() {
        
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }

}
