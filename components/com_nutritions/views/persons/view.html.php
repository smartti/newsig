<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.view');

class NutritionsViewPersons extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    function display($tpl = null) {
        //for pagination
        global $mainframe, $option;
        $model = $this->getModel();
        
        $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.persons.filter_departamento','filter_departamento', '0', 'int' );
        $filter_provincia = $mainframe->getUserStateFromRequest( $option.'.persons.filter_provincia','filter_provincia', '0', 'int' );
        $filter_distrito = $mainframe->getUserStateFromRequest( $option.'.persons.filter_distrito','filter_distrito', '0', 'int' );
        
        $id_entidad = $mainframe->getUserStateFromRequest( $option.'.persons.id_entidad', 'id_entidad', '', 'int' );
        $tx_apellido_paterno = $mainframe->getUserStateFromRequest( $option.'.persons.tx_apellido_paterno', 'tx_apellido_paterno', '', 'string' );
        $tx_apellido_materno = $mainframe->getUserStateFromRequest( $option.'.persons.tx_apellido_materno', 'tx_apellido_materno', '', 'string' );
        $tx_nombres = $mainframe->getUserStateFromRequest( $option.'.persons.tx_nombres', 'tx_nombres', '', 'string' );
        $tx_nro_documento = $mainframe->getUserStateFromRequest( $option.'.persons.tx_nro_documento', 'tx_nro_documento', '', 'string' );
        
        $departamentos = $model->getDepartamentos();
        $provincias = $model->getProvincias();
        $distritos = $model->getDistritos();
        
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
        $lists['Distritos'] = JHTML::_('select.genericlist', $distritoArray, 'filter_distrito', 'class="inputbox" size="1"', 'value', 'text', "$filter_distrito");

        $this->assignRef('lists', $lists);
        $this->assignRef('id_entidad', $id_entidad);
        $this->assignRef('tx_nombres', $tx_nombres);
        $this->assignRef('tx_nro_documento', $tx_nro_documento);
        $this->assignRef('tx_apellido_paterno', $tx_apellido_paterno);
        $this->assignRef('tx_apellido_materno', $tx_apellido_materno);

        parent::display($tpl);
    }

}
