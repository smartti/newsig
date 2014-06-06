<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewPopulation extends JView {
    
    function display($tpl = null) {
        global $mainframe, $option;
        
        $model = $this->getModel();
        $population = & $this->get('Data');
        $results = array();
        //$document = JFactory::getDocument();
        
        $anhos = $model->getDetalleGeneral('33', '211');        
        
        $anhoArray[] = JHTML::_('select.option', '211', JText::_('- Año -'));
        foreach ($anhos as $anho) {
            $anhoArray[] = JHTML::_('select.option', $anho->value, JText::_($anho->text));
        }
        $lists['resultado_anho'] = JHTML::_('select.genericlist', $anhoArray, 'id_dg_anho', 'class="inputbox" size="1"', 'value', 'text', $population->id_dg_anho); 
        
        $this->assignRef('lists', $lists);
        $this->assignRef('population', $population);
        $this->assignRef('results', $results);
        
        parent::display($tpl);
    }
    
}
