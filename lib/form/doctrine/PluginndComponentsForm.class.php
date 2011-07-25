<?php

/**
 * PluginndComponents form.
 *
 * @package    ndComponentsPlugin/lib
 * @subpackage form
 * @author     Dachez <X9> Nicolas <ndachez@epsi.fr>
 * @version    
 */
abstract class PluginndComponentsForm extends BasendComponentsForm
{
  public function setup()
  {
    parent::setup();
    
    $user = self::getValidUser();
    
    $this->useFields(array(
        'title',
        'slug', 
        'description'  
    ));
    
    $this->widgetSchema['title'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'required'    => true,
        'placeholder' => 'My title'
    ));
    
    $this->widgetSchema['slug'] = new sfWidgetFormHtml5InputText($options = array(), $attributes = array(
        'placeholder' => 'My slug'
    ));
    
    $this->widgetSchema['description'] = new sfWidgetFormCKEditor(array('jsoptions'=>array(
    	'customConfig'				      => '/lib/ckeditor/config.js',
    	'filebrowserBrowseUrl'            => '/lib/elfinder-1.1/elfinder.php.html',
    	'filebrowserImageBrowseUrl'       => '/lib/elfinder-1.1/elfinder.php.html'
    )));  
  }
}
