<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewDiscapacidad extends JView {
    
    
    function display($tpl = null) {
        global $mainframe, $option;        
        //jimport('joomla.html.pane');              
        
        $model = $this->getModel();
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        
        
        
        $discapacidad_ =  $this->get('Data');
        
        $discapacidades = $this->get('Discapacidades');
     
        foreach ($discapacidades as $discapacidad) {
            $discapacidadesArray[] = JHTML::_('select.option', $discapacidad->value, JText::_($discapacidad->text));
        }
        $lists['discapacidades'] = JHTML::_('select.genericlist', $discapacidadesArray, 'id_dg_discapacidad', 'class="inputbox" size="1"', 'value', 'text', $discapacidad_->id_dg_discapacidad);
        
        $this->assignRef('lists', $lists);
        $this->assignRef('discapacidad_', $discapacidad_);
        
        
        parent::display($tpl);
    }
    
    

}
