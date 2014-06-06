<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewInfPai extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        jimport('joomla.html.pane');
        
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/table.css');
        
        
        $model = $this->getModel();
        $infpai = & $this->get('Data');
        $results = array();

        $this->assignRef('infpai', $infpai);
        $this->assignRef('results', $results);
        parent::display($tpl);
    }

}
