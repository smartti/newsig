<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewEstablec extends JView {
   // public $antiguedad = null;
    
    function display($tpl = null) {
        global $mainframe, $option;        
        //jimport('joomla.html.pane');
              
        $model = $this->getModel();
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');

        $establecimiento = & $this->get('Data');        
  
        $infResults = array();

        
        
        $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_departamento','filter_departamento', $establecimiento->id_departamento, 'int' );
        $filter_provincia = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_provincia','filter_provincia', $establecimiento->id_provincia, 'int' );
        $filter_distrito = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_distrito','filter_distrito', $establecimiento->id_distrito, 'int' );
        
        $departamentos = $this->get('Departamentos');
        $provincias = $this->get('Provincias');
        $distritos = $this->get('Distritos');

        
        $departmentoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($departamentos as $departamento) {
            $departmentoArray[] = JHTML::_('select.option', $departamento->value, JText::_($departamento->text));
        }
        $lists['Departamentos'] = JHTML::_('select.genericlist', $departmentoArray, 'filter_departamento', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_departamento");

        $provinciaArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($provincias as $provincia) {
            $provinciaArray[] = JHTML::_('select.option', $provincia->value, JText::_($provincia->text));
        }
        $lists['Provincias'] = JHTML::_('select.genericlist', $provinciaArray, 'filter_provincia', 'class="inputbox" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', "$filter_provincia");

        $distritoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($distritos as $distrito) {
            $distritoArray[] = JHTML::_('select.option', $distrito->value, JText::_($distrito->text));
        }
        $lists['Distritos'] = JHTML::_('select.genericlist', $distritoArray, 'filter_distrito', 'class="inputbox" size="1" onchange="document.getElementById(\'id_ubigeo\').value = this.options[this.selectedIndex].value;"', 'value', 'text', "$filter_distrito");
         
        $this->assignRef('lists', $lists);
        $this->assignRef('establecimiento', $establecimiento);
        $this->assignRef('infResults', $infResults);
        
        
        parent::display($tpl);
    }
    
}
