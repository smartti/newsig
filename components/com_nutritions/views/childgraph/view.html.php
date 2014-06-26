<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewChildgraph extends JView {
    
    function display($tpl = null) {
        global $mainframe, $option;
        
       
        $model = $this->getModel();
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        
        require_once (JPATH_COMPONENT.DS.'assets'.DS.'files'.DS.'jpgraph'.DS.'src'.DS.'jpgraph.php');
//        require_once (JPATH_COMPONENT.DS.'assets'.DS.'files'.DS.'jpgraph'.DS.'src'.DS.'jpgraph_bar.php');
        require_once (JPATH_COMPONENT.DS.'assets'.DS.'files'.DS.'jpgraph'.DS.'src'.DS.'jpgraph_line.php');
        
        $person = & $this->get('Data');
                
        if( $person->id_entidad ){
            $grafica = $model->grafico($person->id_entidad);
//            $grafica1 = $model->grafico1($actividad->id_evaluacion_gestante);
        }     
        
//        $this->assignRef('actividad', $actividad);
        
        parent::display($tpl);
    }    

}
