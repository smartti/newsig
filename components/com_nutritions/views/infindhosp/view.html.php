<?php



// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewInfindhosp extends JView {
    
    function display($tpl = null) {
        global $mainframe, $option;
        
        $model = $this->getModel();
        $infindhosp = & $this->get('Data');
        $results = array();
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        

       // $document->addScript(JURI::base().'components/com_nutritions/assets/js/bootstrap.min.js');
       //$document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/bootstrap.min.css');

        
        $anhos = $model->getDetalleGeneral('33', '211');
        $meses = $model->getDetalleGeneral('34', '211');
        
        
        $anhoArray[] = JHTML::_('select.option', '211', JText::_('- Año -'));
        foreach ($anhos as $anho) {
            $anhoArray[] = JHTML::_('select.option', $anho->value, JText::_($anho->text));
        }
        $lists['resultado_anho'] = JHTML::_('select.genericlist', $anhoArray, 'nu_ano', 'class="inputbox" size="1"', 'value', 'text', $infindhosp->nu_ano);
 
        
        $mesArray[] = JHTML::_('select.option', '211', JText::_('- Mes -'));
        foreach ($meses as $mes) {
            $mesArray[] = JHTML::_('select.option', $mes->value, JText::_($mes->text));
        }
        $lists['resultado_mes'] = JHTML::_('select.genericlist', $mesArray, 'nu_mes', 'class="inputbox" size="1"', 'value', 'text', $infindhosp->nu_mes);

        $this->assignRef('lists', $lists);
        $this->assignRef('infindhosp', $infindhosp);
        $this->assignRef('results', $results);
        
        parent::display($tpl);
    }
    
}
