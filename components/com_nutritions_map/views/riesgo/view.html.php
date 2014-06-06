<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewRiesgo extends JView {
    
    
    function display($tpl = null) {
        global $mainframe, $option;        
        //jimport('joomla.html.pane');              
        
        $model = $this->getModel();
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        
        
        
        $riesgo_ =  $this->get('Data');
        
        
        
        $riesgos = $this->get('Riesgos');
     
        foreach ($riesgos as $riesgo) {
            $riesgosArray[] = JHTML::_('select.option', $riesgo->value, JText::_($riesgo->text));
        }
        $lists['riesgos'] = JHTML::_('select.genericlist', $riesgosArray, 'id_dg_riesgo', 'class="inputbox" size="1"', 'value', 'text', $riesgo_->id_dg_riesgo);
        
        $this->assignRef('lists', $lists);
        
        $this->assignRef('riesgo_', $riesgo_);
        
        
        parent::display($tpl);
    }
    
    

}
