<?php
namespace Articles\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\EventManager\EventManager;// pour EventManager
use Zend\EventManager\EventManagerAwareInterface;//pour EventManager
use Zend\EventManager\EventManagerInterface;//pour EventManager

class ArticlesTable implements EventManagerAwareInterface{
    protected $tableGateway;
    protected $eventManager;
    
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getArticles($id) {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(array('articles_id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("enregistrement introuvable pour id : $id");
        }
        return $row;
    }

    public function saveArticles(Articles $article) {
        $data = array(
            'articles_nom' => $article->articles_nom,
            'articles_ref' => $article->articles_ref,
            'articles_stock' => $article->articles_stock,
            'articles_min' => $article->articles_min,
            'articles_prix' => $article->articles_prix,
        );

        $id = (int) $article->articles_id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getArticles($id)) {
                $this->tableGateway->update($data, array('articles_id' => $id));
            } else {
                throw new \Exception('id non trouvé');
            }
        }
    }

    public function deleteArticles($id) {
        $this->tableGateway->delete(array('articles_id' => $id));
        $this->getEventManager()->trigger('deleteArticles', null);
    }
                
    public function setEventManager(EventManagerInterface $eventManager) {
        $eventManager->addIdentifiers(array(
            get_called_class()
        ));
        $this->eventManager = $eventManager;
    }
    public function getEventManager() {
        return $this->eventManager;   
    }


}
