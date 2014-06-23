<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewPregnantcontrol extends JView {
    
    function display($tpl = null) {
        global $mainframe, $option;
        
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        
        $evaluacioncontrol = & $this->get('Data');
        $persona = & $this->get('Persona');
        $actividad = & $this->get('Evaluacion');
        $fecha_nacimiento = $persona->fe_nacimiento;
        
        if($fecha_nacimiento){
            $now = date('Y-m-d');
            $persona->edad = $this->diff($fecha_nacimiento, $now);
            $temporalArray = explode('-', $fecha_nacimiento);
            $persona->fe_nacimiento = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
        }
        
        if($actividad->fe_visita){
            $actividad->edad_visita = $this->diff($fecha_nacimiento, $actividad->fe_visita);
            $temporalArray = explode('-', $actividad->fe_visita);
            $actividad->fe_visita = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
        }
        
        if($evaluacioncontrol->fe_visita){
            $evaluacioncontrol->edad_visita = $this->diff($fecha_nacimiento, $evaluacioncontrol->fe_visita);
            $temporalArray = explode('-', $evaluacioncontrol->fe_visita);
            $evaluacioncontrol->fe_visita = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
        }
        
        $evaluacioncontrol->anemia = 'NO';
        if( $evaluacioncontrol->nu_hemoglobina && $evaluacioncontrol->nu_hemoglobina < 11 ){
            $evaluacioncontrol->anemia = 'SI';
        }
        
        $imcPgs = $this->get('ImcPg');
        $gananciaPeso = $this->get('GananciaPeso');
 
        $imcPgArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($imcPgs as $imcPg) {
            $imcPgArray[] = JHTML::_('select.option', $imcPg->value, JText::_($imcPg->text));
        }
        $lists['imc_pg'] = JHTML::_('select.genericlist', $imcPgArray, 'id_dg_imc_pg', 'class="inputbox" size="1"', 'value', 'text', $evaluacioncontrol->id_dg_imc_pg);
        
        $gananciaPesoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($gananciaPeso as $gp) {
            $gananciaPesoArray[] = JHTML::_('select.option', $gp->value, JText::_($gp->text));
        }
        $lists['ganancia_peso'] = JHTML::_('select.genericlist', $gananciaPesoArray, 'id_dg_ganancia_peso', 'class="inputbox" size="1"', 'value', 'text', $evaluacioncontrol->id_dg_ganancia_peso);

        
        $this->assignRef('lists', $lists);
        $this->assignRef('evaluacioncontrol', $evaluacioncontrol);
        $this->assignRef('persona', $persona);
        $this->assignRef('actividad', $actividad);
        
        parent::display($tpl);
    }
    
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        $this->edad_visita = $years;
        return $years;
    }
    
    function getFPP($date1) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        
        
        $fpp = floor($date1 / (365*60*60*24));
        return $fpp;
    }

}
