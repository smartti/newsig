<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewPregnant extends JView {
    
    function display($tpl = null) {
        global $mainframe, $option;
        
        $document = JFactory::getDocument();
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $actividad = & $this->get('Data');
        $persona = & $this->get('Persona');
        if($persona->fe_nacimiento){
            $now = date('Y-m-d');
            $fecha_nacimiento = $persona->fe_nacimiento;
            $persona->edad = $this->diff($persona->fe_nacimiento, $now);
            $temporalArray = explode('-', $persona->fe_nacimiento);
            $persona->fe_nacimiento = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
        }
        
        if($actividad->fe_visita){
            $actividad->edad_visita = $this->diff($fecha_nacimiento, $actividad->fe_visita);
            $temporalArray = explode('-', $actividad->fe_visita);
            $actividad->fe_visita = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
            $temporalArray = explode('-', $actividad->fe_fur);
            $actividad->fe_fur = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
        }
        
        $actividad->anemia = 'NO';
        if( $actividad->nu_hemoglobina && $actividad->nu_hemoglobina < 11 ){
            $actividad->anemia = 'SI';
        }
        
        $imcPgs = $this->get('ImcPg');
        $gananciaPeso = $this->get('GananciaPeso');
        
        $weekQuestionOneArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 10 ; $i++) {
            $weekQuestionOneArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['week_question_one'] = JHTML::_('select.genericlist', $weekQuestionOneArray, 'nu_ali_animal_sem', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_animal_sem);    
        $dayQuestionOneArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 5 ; $i++) {
            $dayQuestionOneArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['day_question_one'] = JHTML::_('select.genericlist', $dayQuestionOneArray, 'nu_ali_animal_dia', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_animal_dia);
        
        $weekQuestionTwoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 10 ; $i++) {
            $weekQuestionTwoArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['week_question_two'] = JHTML::_('select.genericlist', $weekQuestionTwoArray, 'nu_ali_vege_sem', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_vege_sem);    
        $dayQuestionTwoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 5 ; $i++) {
            $dayQuestionTwoArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['day_question_two'] = JHTML::_('select.genericlist', $dayQuestionTwoArray, 'nu_ali_vege_dia', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_vege_dia);
        
        $weekQuestionThreeArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 10 ; $i++) {
            $weekQuestionThreeArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['week_question_three'] = JHTML::_('select.genericlist', $weekQuestionThreeArray, 'nu_ali_ener_sem', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_ener_sem);    
        $dayQuestionThreeArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 5 ; $i++) {
            $dayQuestionThreeArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['day_question_three'] = JHTML::_('select.genericlist', $dayQuestionThreeArray, 'nu_ali_ener_dia', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_ener_dia);
        
        $weekQuestionFourArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 10 ; $i++) {
            $weekQuestionFourArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['week_question_four'] = JHTML::_('select.genericlist', $weekQuestionFourArray, 'nu_ali_fru_ver_sem', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_fru_ver_sem);    
        $dayQuestionFourArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Sel.') . ' -');
        for ($i = 1; $i <= 5 ; $i++) {
            $dayQuestionFourArray[] = JHTML::_('select.option', $i, $i);
        }
        $lists['day_question_four'] = JHTML::_('select.genericlist', $dayQuestionFourArray, 'nu_ali_fru_ver_dia', 'class="inputbox" size="1"', 'value', 'text', $actividad->nu_ali_fru_ver_dia);
        
        $imcPgArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($imcPgs as $imcPg) {
            $imcPgArray[] = JHTML::_('select.option', $imcPg->value, JText::_($imcPg->text));
        }
        $lists['imc_pg'] = JHTML::_('select.genericlist', $imcPgArray, 'id_dg_imc_pg', 'class="inputbox" size="1"', 'value', 'text', $actividad->id_dg_imc_pg);
        
        $gananciaPesoArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($gananciaPeso as $gp) {
            $gananciaPesoArray[] = JHTML::_('select.option', $gp->value, JText::_($gp->text));
        }
        $lists['ganancia_peso'] = JHTML::_('select.genericlist', $gananciaPesoArray, 'id_dg_ganancia_peso', 'class="inputbox" size="1"', 'value', 'text', $actividad->id_dg_ganancia_peso);

        
        
        $this->assignRef('lists', $lists);
        $this->assignRef('persona', $persona);
        $this->assignRef('actividad', $actividad);
        parent::display($tpl);
    }
    
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        return $years;
    }

}
