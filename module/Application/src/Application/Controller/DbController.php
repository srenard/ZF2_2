<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Sql\Sql;

/*
  class dbController extends AbstractActionController {
  public function test1Action() {
  $adapt = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
  $res = $adapt->query('SELECT * FROM `articles`', $adapt::QUERY_MODE_EXECUTE);
  $res = $res->current();
  return new ViewModel(array('res' => $res));
  }
  }
 */

class dbController extends AbstractActionController {
    public function test1Action() {
          $adapt = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
          $sql = new Sql($adapt);
          $select = $sql->select();
          $select-> from('articles')->where("articles_nom = 'taille-crayon'");
          $chaineSql = $sql->getSqlStringForSqlObject($select);
          $resultat = $adapt->query($chaineSql, $adapt::QUERY_MODE_EXECUTE);
          return new ViewModel(array('resultat' => $resultat));
    }
}