<?php

/**
 * page actions.
 *
 * @package    ndComponentsPlugin
 * @subpackage components
 * @author     Dachez <X9> Nicolas <ndachez@epsi.fr>
 */
class componentsComponents extends sfComponents
{ 
  public function executeExample(sfWebRequest $request)
  {
    $components = Doctrine_Core::getTable('ndComponents')->getComponentWithId(1);
    $this->components = $components->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
  }
}
