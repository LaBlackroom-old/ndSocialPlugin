<?php

/**
 *
 * @package    peanut
 * @subpackage settings
 * @author     Alexandre 'pocky' Balmes <falbalmes@gmail.com>
 */

class BaseSettingsActions extends sfActions
{  
  public function executeSocial(sfWebRequest $request)
  {
    $this->form = new socialSettingsForm();
    
    if($request->isMethod('post'))
    { 
      $this->form->bind($request->getParameter('settings'));
      
      if($this->form->isValid())
      {
        
        foreach($this->form->getValues() as $name => $value)
        {
          peanutConfig::set($name, $value);
        }
        
      }

    }
  }
}