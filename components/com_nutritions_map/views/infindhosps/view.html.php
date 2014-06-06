<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

/**
 * Categories View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class NutritionsViewInfindhosps extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    function display($tpl = null) {
        //for pagination
        global $mainframe, $option;
        $model = $this->getModel();
        $infindhosps = & $this->get('Data');
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bootstrap.min.js');
        
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/bootstrap.min.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');

        
        $id_indhosp = $mainframe->getUserStateFromRequest( $option.'.infindhosps.id_indhosp', 'id_indhosp', '', 'int' );
       // $cod_2000 = $mainframe->getUserStateFromRequest( $option.'.inftbcs.cod_2000', 'cod_2000', '', 'int' );
        
        $this->assignRef('id_indhosp', $id_indhosp);
        $this->assignRef('infindhosps', $infindhosps);
        //$this->assignRef('cod_2000', $cod_2000);

        parent::display($tpl);
    }

}
