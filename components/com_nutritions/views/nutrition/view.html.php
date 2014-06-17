<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewNutrition extends JView {

    function display($tpl = null) {
        global $mainframe, $option;
        jimport('joomla.html.pane');
        
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/map.js');  
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');   
        $model = $this->getModel();
        $familia = & $this->get('Data');
        $results = array();
        if( $familia->id_familia ){
            $results = $model->getIntegrantes($familia->id_familia);
            $familia->numero_integrantes = count($results);
        }
        if($familia->fe_visita1){
            $tempArray = explode('-', $familia->fe_visita1);
            $familia->fe_visita1 = $tempArray[2].'/'.$tempArray[1].'/'.$tempArray[0];
        }
        if($familia->fe_visita2){
            $tempArray = explode('-', $familia->fe_visita2);
            $familia->fe_visita2 = $tempArray[2].'/'.$tempArray[1].'/'.$tempArray[0];
        }
        if($familia->fe_visita3){
            $tempArray = explode('-', $familia->fe_visita3);
            $familia->fe_visita3 = $tempArray[2].'/'.$tempArray[1].'/'.$tempArray[0];
        }
        
        $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_departamento','filter_departamento', $familia->id_departamento, 'int' );
        $filter_provincia = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_provincia','filter_provincia', $familia->id_provincia, 'int' );
        $filter_distrito = $mainframe->getUserStateFromRequest( $option.'.nutrition.filter_distrito','filter_distrito', $familia->id_distrito, 'int' );
        
        $departamentos = $this->get('Departamentos');
        $provincias = $this->get('Provincias');
        $distritos = $this->get('Distritos');
        $centros = $this->get('Centros');
        $nucleos = $this->get('Nucleos');
        //$vias = $this->get('Vias');
        $vias = $model->getDetalleGeneral('13', '210');
        //$primeraVisitaResultados = $this->get('VisitaResultados');
        $primeraVisitaResultados = $model->getDetalleGeneral('29', '211');
        $segundaVisitaResultados = $primeraVisitaResultados;
        $terceraVisitaResultados = $primeraVisitaResultados;
        
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
        
        $centroArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($centros as $centro) {
            $centroArray[] = JHTML::_('select.option', $centro->value, JText::_($centro->text));
        }
        $lists['Centros'] = JHTML::_('select.genericlist', $centroArray, 'id_dg_cate_centro_poblado', 'class="inputbox" size="1"', 'value', 'text', $familia->id_dg_cate_centro_poblado);
        
        $nucleoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($nucleos as $nucleo) {
            $nucleoArray[] = JHTML::_('select.option', $nucleo->value, JText::_($nucleo->text));
        }
        $lists['Nucleos'] = JHTML::_('select.genericlist', $nucleoArray, 'id_dg_cate_nucleo_urbano', 'class="inputbox" size="1"', 'value', 'text', $familia->id_dg_cate_nucleo_urbano);
        
        $viaArray[] = JHTML::_('select.option', '210', JText::_('- Seleccione -'));
        foreach ($vias as $via) {
            $viaArray[] = JHTML::_('select.option', $via->value, JText::_($via->text));
        }
        $lists['Vias'] = JHTML::_('select.genericlist', $viaArray, 'id_dg_via', 'class="inputbox" size="1"', 'value', 'text', $familia->id_dg_via);
        
        $primeraVisitaResultadosArray[] = JHTML::_('select.option', '211', JText::_('- Seleccione -'));
        foreach ($primeraVisitaResultados as $primeraVisitaResultado) {
            $primeraVisitaResultadosArray[] = JHTML::_('select.option', $primeraVisitaResultado->value, JText::_($primeraVisitaResultado->text));
        }
        $lists['resultado_visita_1'] = JHTML::_('select.genericlist', $primeraVisitaResultadosArray, 'id_dg_resultado', 'class="inputbox" size="1"', 'value', 'text', $familia->id_dg_resultado);
        
        $segundaVisitaResultadosArray[] = JHTML::_('select.option', '211', JText::_('- Seleccione -'));
        foreach ($segundaVisitaResultados as $segundaVisitaResultado) {
            $segundaVisitaResultadosArray[] = JHTML::_('select.option', $segundaVisitaResultado->value, JText::_($segundaVisitaResultado->text));
        }
        $lists['resultado_visita_2'] = JHTML::_('select.genericlist', $segundaVisitaResultadosArray, 'id_dg_resultado2', 'class="inputbox" size="1"', 'value', 'text', $familia->id_dg_resultado2);
        
        $terceraVisitaResultadosArray[] = JHTML::_('select.option', '211', JText::_('- Seleccione -'));
        foreach ($terceraVisitaResultados as $terceraVisitaResultado) {
            $terceraVisitaResultadosArray[] = JHTML::_('select.option', $terceraVisitaResultado->value, JText::_($terceraVisitaResultado->text));
        }
        $lists['resultado_visita_3'] = JHTML::_('select.genericlist', $terceraVisitaResultadosArray, 'id_dg_resultado3', 'class="inputbox" size="1"', 'value', 'text', $familia->id_dg_resultado3);
        
        $numeroHabitacionensArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 10; $i++) {
            $numeroHabitacionensArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['numero_habitaciones'] = JHTML::_('select.genericlist', $numeroHabitacionensArray, 'un_habitaciones', 'class="inputbox" size="1"', 'value', 'text', $familia->un_habitaciones);
        
        $this->assignRef('lists', $lists);
        $this->assignRef('familia', $familia);
        $this->assignRef('results', $results);
        parent::display($tpl);
    }
    
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        return $years;
    }

}
