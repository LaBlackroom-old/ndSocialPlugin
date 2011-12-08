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
        'url',
        'description',
        'active',
        'created_at'
        
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
    
    if(!$this->isNew()) {
      $this->widgetSchema['created_at'] = new sfWidgetFormI18nDate(array(
        'culture' => $user->getCulture(),
      ));
    }
    else
    {
      unset($this['created_at']);
    }
    
    $this->widgetSchema->setHelps(array(
        'title' => 'The component title',
        'slug' => 'The component slug',
        'url' => 'The component url',
        'description' => 'The component description',
        'active' => 'The component status',
        'created_at' => 'Useful is you want to modify the date of the entry publication'
    ));
  }
}
