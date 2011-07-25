<?php

/**
 * PluginndComponents form.
 *
 * @package    ndComponentsPlugin/lib
 * @subpackage filter
 * @author     Dachez <X9> Nicolas <ndachez@epsi.fr>
 * @version    
 */
abstract class PluginndComponentsFormFilter extends BasendComponentsFormFilter
{
  public function configure()
  {
    
    $this->widgetSchema['title'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'My title'
    ));

    $this->validatorSchema['title'] = new sfValidatorPass($options = array('required' => false), $attributes = array());

  }
}
