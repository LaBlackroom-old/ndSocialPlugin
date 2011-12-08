<?php

require_once dirname(__FILE__).'/../lib/adminComponentsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/adminComponentsGeneratorHelper.class.php';

/**
 * adminComponents actions.
 *
 * @package    bourget
 * @subpackage modules
 * @author     Dachez <X9> Nicolas <ndachez@epsi.fr>
 * @version    SVN: $Id$
 */
class adminComponentsActions extends autoAdminComponentsActions
{
  public function executeChangestatus()
  {
    $object = Doctrine_Core::getTable('ndComponents')->findOneById($this->getRequestParameter('id'));   
    $object->changeStatus();
    
    $this->getUser()->setFlash('notice', 'Status was modified successfully');
    $this->redirect('@nd_adminComponents');
  }
}
