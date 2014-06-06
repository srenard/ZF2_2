<?php

namespace Articles\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Articles\Model\Articles;
use Articles\Form\ArticlesForm;

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
        $form = new ArticlesForm();
        $form->get('submit')->setValue('Add');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $article = new Articles();
            $form->setInputFilter($article->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $article->exchangeArray($form->getData());
                $this->getArticlesTable()->saveArticles($article);
                $this->getServiceLocator()->get('Zend\Log')->info('Bonjour');
                return $this->redirect()->toRoute('articles');
            }
        }
        return array('form' => $form);
    }

    public function editAction() {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('articles', array(
                        'action' => 'add'
            ));
        }
        $article = $this->getArticlesTable()->getArticles($id);
        $form = new ArticlesForm();
        $form->bind($article);
        $form->get('submit')->setAttribute('value', 'Edit');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setInputFilter($article->getInputFilter());
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $this->getArticlesTable()->saveArticles($form->getData());
                return $this->redirect()->toRoute('articles');
            }
        }
        return array(
            'id' => $id,
            'form' => $form,
        );
    }

    public function deleteAction() {
        $id = (int) $this->params()->fromRoute('id', 0);
        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');
            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $this->getArticlesTable()->deleteArticles($id);
            }
            // On redirige vers le tableau
            return $this->redirect()->toRoute('articles');
        }
        return array(
            'articles_id' => $id,
            'article' => $this->getArticlesTable()->getArticles($id)
        );
    }

}
