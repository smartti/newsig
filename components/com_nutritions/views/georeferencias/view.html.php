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
class NutritionsViewGeoreferencias extends JView {

    public $results = null;

    /**
     * Categories view display method
     * @return void
     * */
    
    function display($tpl = null) {
        //for pagination
        global $mainframe, $option;
//        $document = JFactory::getDocument();
//        $document->addScript(JURI::base().'components/com_nutritions/assets/js/map.js');  
        $model = $this->getModel();
        $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.nutritions.filter_departamento','filter_departamento', '13', 'int' );
        $filter_provincia = $mainframe->getUserStateFromRequest( $option.'.nutritions.filter_provincia','filter_provincia', '1301', 'int' );
        $filter_distrito = $mainframe->getUserStateFromRequest( $option.'.nutritions.filter_distrito','filter_distrito', '0', 'int' );
                
        $id_familia = $mainframe->getUserStateFromRequest( $option.'.nutritions.id_familia', 'id_familia', '', 'int' );
        $tx_apellidos = $mainframe->getUserStateFromRequest( $option.'.nutritions.tx_apellidos', 'tx_apellidos', '', 'string' );
        $filter_titulo = $mainframe->getUserStateFromRequest( $option.'.nutritions.id_titulo', 'id_titulo', '', 'int' );
        
        
        $departamentos = $model->getDepartamentos();
        $provincias = $model->getProvincias();
        $distritos = $model->getDistritos();
        $titulos = $model->getTitulos();

        /*$limit = JRequest::getVar('limit', $mainframe->getCfg('list_limit')); //if not defined pull limit from joomla configuration
        $limitstart = JRequest::getVar('limitstart', 0); //start with 0
        $db = & JFactory::getDBO();

        $projectname = $_POST['projectname'];

        $total = $model->countProjects($projectname);
        jimport('joomla.html.pagination');
        $pageNav = new JPagination($total, $limitstart, $limit);*/
        
        
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
        
        $tituloArray[] = JHTML::_('select.option', '0', '- ' . JText::_('Seleccione') . ' -');
        foreach ($titulos as $titulo) {
            $tituloArray[] = JHTML::_('select.option', $titulo->value, JText::_($titulo->text));
        }
        $lists['Titulos'] = JHTML::_('select.genericlist', $tituloArray, 'filter_titulo', 'class="inputbox" size="1"', 'value', 'text', "$filter_titulo");
  
        $this->assignRef('lists', $lists);
        $this->assignRef('id_familia', $id_familia);
        $this->assignRef('tx_apellidos', $tx_apellidos);
//        $this->assignRef('id_titulo', $titulos);
        
        

        parent::display($tpl);
    }

}
