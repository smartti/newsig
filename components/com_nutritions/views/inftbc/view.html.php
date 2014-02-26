<?php



// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewInftbc extends JView {
    
    function display($tpl = null) {
        global $mainframe, $option;
        
        $model = $this->getModel();
        $inftbc = & $this->get('Data');
        $results = array();
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/archivo.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/table.css');


        $this->assignRef('inftbc', $inftbc);
        $this->assignRef('results', $results);
        parent::display($tpl);
    }
    
}
