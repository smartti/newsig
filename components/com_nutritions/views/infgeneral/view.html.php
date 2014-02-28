<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewInfgeneral extends JView {

    function display($tpl = null) {
        global $mainframe, $option;

        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
       
        $infgeneral = & $this->get('Data');


        if ($infgeneral->fe_informe) {
            $temporalArray = explode('-', $infgeneral->fe_informe);
            $infgeneral->fe_informe = $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
        }

        
        $this->assignRef('infgeneral', $infgeneral);
        parent::display($tpl);
    }

}