<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelPopulation extends JModel
{
    var $_id;
    var $_data;

     function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);

    }  

    function setId($id)
    {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData()    {
        
        // Load the data
        if (empty( $this->_data )) {
            $query = "SELECT * FROM population WHERE id_pop=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {                       
            $this->_data = new stdClass();
            $this->_data->id_pop = 0;
            $this->_data->id_dg_anho = null;
            $this->_data->id_ubigeo = null;
            $this->_data->nu_total = null;
            $this->_data->nu_men_5a = null; //poblacion 
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;
            }
        return $this->_data;
    }

    public function store($data)
    {   
        $user = & JFactory::getUser();
        $usuario = $user->username; 
        
        if(!$data['id_pop']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
            $data['tx_usuario_creacion'] = $usuario;
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
            $data['tx_usuario_modificacion'] = $usuario;
        }
        
        $row  =& $this->getTable('populations', '');
        
        // bind it to the table
        if (!$row->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }        
        // Make sure the data is valid
        if (!$row->check()) {
            $this->setError($row->getError());
            return false;
        }
        // Store it in the db
        if (!$row->store()) {
            JError::raiseError(Atras, 'Este distrito ya cuenta con población en este año');
            return false;
        }
        
        return $row->id_pop;
    }
    
    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $resultado = $this->_db->loadObjectList();
        return $resultado;
    }
    
    public function removePopulation($populationId) {
        $query = "DELETE FROM population WHERE id_pop = '$populationId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
}
?>
