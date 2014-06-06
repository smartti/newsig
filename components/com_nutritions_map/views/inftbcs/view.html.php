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
class NutritionsViewinftbcs extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    function display($tpl = null) {
        //for pagination
        global $mainframe, $option;
        $model = $this->getModel();
        $inftbcs = & $this->get('Data');
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bootstrap.min.js');
        
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/bootstrap.min.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');

        
        $id_tbc = $mainframe->getUserStateFromRequest( $option.'.inftbcs.id_tbc', 'id_tbc', '', 'int' );
       // $cod_2000 = $mainframe->getUserStateFromRequest( $option.'.inftbcs.cod_2000', 'cod_2000', '', 'int' );
        
        $this->assignRef('id_tbc', $id_tbc);
        $this->assignRef('inftbcs', $inftbcs);
        //$this->assignRef('cod_2000', $cod_2000);

        parent::display($tpl);
    }

}
