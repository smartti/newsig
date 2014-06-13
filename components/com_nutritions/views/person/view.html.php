<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewPerson extends JView {
    public $edad = null;
    
    function display($tpl = null) {
        global $mainframe, $option;        
        //jimport('joomla.html.pane');
              
        
        $model = $this->getModel();
        $document = JFactory::getDocument();
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bsn.AutoSuggest_2.1.3.js');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/style.css');
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/autosuggest_inquisitor.css');
        
        $document->addStyleSheet(JURI::base().'components/com_nutritions/assets/css/bootstrap.min_.css');
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/funciones.js');        
        $document->addScript(JURI::base().'components/com_nutritions/assets/js/bootstrap.min.js');        
        

        $persona = & $this->get('Data');
        if($persona->fe_nacimiento){
            $now = date('Y-m-d');
            $this->diff($persona->fe_nacimiento, $now);
            $temporalArray = explode('-', $persona->fe_nacimiento);
            $persona->fe_nacimiento = $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0];
        }
        
        //$parentescos = $this->get('Parentescos');
        $parentescos = $model->getDetalleGeneral('20', '214');
        $tipoPersonas = $this->get('TipoPersonas');
        //$estadoCivil = $this->get('EstadoCivil');
        $estadoCivil = $model->getDetalleGeneral('19', '212');
        //$documentos = $this->get('Documentos');
        $documentos = $model->getDetalleGeneral('14', '213');
        //$nivelesEducativos = $this->get('NivelesEducativos');
        $nivelesEducativos = $model->getDetalleGeneral('16', '228');
        //$anoEducativo = $this->get('AnoEducativo');
        $anoEducativo = $model->getDetalleGeneral('17', '216');
        $lenguaHabituals = $model->getDetalleGeneral('17', '112');
        $riesgos = $this->get('Riesgos');
        //$seguroSalud = $this->get('SeguroSalud');
        $seguroSalud = $model->getDetalleGeneral('15', '215');
        $operadorTelf = $model->getDetalleGeneral('32', '231');
        //$ocupaciones = $this->get('Ocupaciones');
        $ocupaciones = $model->getDetalleGeneral('18', '217');
        $discapacidades = $this->get('Discapacidades');
        $childResults = array();
        $pregnantResults = array();
        
        $discapacidadResults = array();
        $riesgoResults = array();
        
        if( $persona->id_entidad ){
            $childResults = $model->getChildActivities($persona->id_entidad);
            $pregnantResults = $model->getPregnantActivities($persona->id_entidad);
            $discapacidadResults = $model->getDiscapacidad($persona->id_entidad);
            $riesgoResults = $model->getRiesgo($persona->id_entidad);
        }
        
        $parentescoArray[] = JHTML::_('select.option', '214', JText::_('- Seleccione -'));
        foreach ($parentescos as $parentesco) {
            $parentescoArray[] = JHTML::_('select.option', $parentesco->value, JText::_($parentesco->text));
        }
        $lists['parentesco'] = JHTML::_('select.genericlist', $parentescoArray, 'id_dg_parentesco', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_parentesco);

        //$tipoPersonaArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($tipoPersonas as $tipoPersona) {
            $tipoPersonaArray[] = JHTML::_('select.option', $tipoPersona->value, JText::_($tipoPersona->text));
        }
        $lists['tipo_persona'] = JHTML::_('select.genericlist', $tipoPersonaArray, 'id_dg_tipo_persona', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_tipo_persona);

        $estadoCivilArray[] = JHTML::_('select.option', '212', JText::_('- Seleccione -'));
        foreach ($estadoCivil as $estadoC) {
            $estadoCivilArray[] = JHTML::_('select.option', $estadoC->value, JText::_($estadoC->text));
        }
        $lists['estado_civil'] = JHTML::_('select.genericlist', $estadoCivilArray, 'id_dg_estado_civil', 'class="inputbox" size="1" ', 'value', 'text', $persona->id_dg_estado_civil);
        
        $documentoArray[] = JHTML::_('select.option', '213', JText::_('- Seleccione -'));
        foreach ($documentos as $documento) {
            $documentoArray[] = JHTML::_('select.option', $documento->value, JText::_($documento->text));
        }
        $lists['tipo_documento'] = JHTML::_('select.genericlist', $documentoArray, 'id_dg_tipo_documento', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_tipo_documento);
        
        $nivelesEducativosArray[] = JHTML::_('select.option', '228', JText::_('- Seleccione -'));
        foreach ($nivelesEducativos as $nivelEducativo) {
            $nivelesEducativosArray[] = JHTML::_('select.option', $nivelEducativo->value, JText::_($nivelEducativo->text));
        }
        $lists['nivel_educativo'] = JHTML::_('select.genericlist', $nivelesEducativosArray, 'id_dg_edu_nivel', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_edu_nivel);
        
        $anoEducativoArray[] = JHTML::_('select.option', '216', JText::_('- Seleccione -'));
        foreach ($anoEducativo as $anoEduca) {
            $anoEducativoArray[] = JHTML::_('select.option', $anoEduca->value, JText::_($anoEduca->text));
        }
        $lists['ano_educativo'] = JHTML::_('select.genericlist', $anoEducativoArray, 'id_dg_edu_anho', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_edu_anho);
        
        $lenguaHabitualArray[] = JHTML::_('select.option', '118', JText::_('- Seleccione -'));
        foreach ($lenguaHabituals as $lenguaHabitual) {
            $lenguaHabitualArray[] = JHTML::_('select.option', $lenguaHabitual->value, JText::_($lenguaHabitual->text));
        }
        $lists['lengua_habitual'] = JHTML::_('select.genericlist', $lenguaHabitualArray, 'id_dg_lengua_habitual', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_lengua_habitual);

        //$riesgosArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($riesgos as $riesgo) {
            $riesgosArray[] = JHTML::_('select.option', $riesgo->value, JText::_($riesgo->text));
        }
        $lists['riesgos'] = JHTML::_('select.genericlist', $riesgosArray, 'id_dg_riesgo', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_riesgo);
        
        $seguroSaludArray[] = JHTML::_('select.option', '215', JText::_('- Seleccione -'));
        foreach ($seguroSalud as $seg) {
            $seguroSaludArray[] = JHTML::_('select.option', $seg->value, JText::_($seg->text));
        }
        $lists['seguro_salud'] = JHTML::_('select.genericlist', $seguroSaludArray, 'id_dg_seguro_salud', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_seguro_salud);
        
        $operadorTelfArray[] = JHTML::_('select.option', '231', JText::_('- Seleccione -'));
        foreach ($operadorTelf as $otelf) {
            $operadorTelfArray[] = JHTML::_('select.option', $otelf->value, JText::_($otelf->text));
        }
        $lists['operador_telefonico'] = JHTML::_('select.genericlist', $operadorTelfArray, 'id_dg_operador_telf', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_operador_telf);
       
        
        $ocupacionArray[] = JHTML::_('select.option', '217', JText::_('- Seleccione -'));
        foreach ($ocupaciones as $ocupacion) {
            $ocupacionArray[] = JHTML::_('select.option', $ocupacion->value, JText::_($ocupacion->text));
        }
        $lists['ocupaciones'] = JHTML::_('select.genericlist', $ocupacionArray, 'id_dg_ocupacion', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_ocupacion);
        
        //$discapacidadesArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($discapacidades as $discapacidad) {
            $discapacidadesArray[] = JHTML::_('select.option', $discapacidad->value, JText::_($discapacidad->text));
        }
        $lists['discapacidades'] = JHTML::_('select.genericlist', $discapacidadesArray, 'id_dg_discapacidad', 'class="inputbox" size="1"', 'value', 'text', $persona->id_dg_discapacidad);
        
        $this->assignRef('lists', $lists);
        $this->assignRef('persona', $persona);
        $this->assignRef('childResults', $childResults);
        $this->assignRef('pregnantResults', $pregnantResults);
        $this->assignRef('discapacidadResults', $discapacidadResults);
        $this->assignRef('riesgoResults', $riesgoResults);
        
        parent::display($tpl);
    }
    
    function diff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        $this->edad = $years;
    }
    
    function getYearDiff($date1, $date2) {
        // Checks $start and $end format (timestamp only for more simplicity and portability)
        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365*60*60*24));
        return $years;
    }

}
