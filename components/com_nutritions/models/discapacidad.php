<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelDiscapacidad extends JModel
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

    function &getData()
    {
        
        // Load the data
        if (empty( $this->_data )) {
            $query = "SELECT D.*
                      FROM discapacidad D
                      WHERE D.id_discapacidad=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
                       
            $this->_data = new stdClass();
            $this->_data->id_discapacidad = 0;            
            $this->_data->id_entidad = JRequest::getVar('personId', NULL);            
            $this->_data->id_dg_discapacidad = null; 
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;
            
        }
        return $this->_data;
    }
    
   
    
    public function getDiscapacidades() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '21'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
   
    public function store($data)
    {
        $user = & JFactory::getUser();
        $usuario = $user->username;
        
        
        if(!$data['id_discapacidad']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
            $data['tx_usuario_creacion'] = $usuario;
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
            $data['tx_usuario_modificacion'] = $usuario;
        }
        
        $row  =& $this->getTable('discapacidades', '');
        
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
            JError::raiseError(Atras, 'Errorrrr');
            return false;
        }
        
        return $row->id_discapacidad;
    }
    
    public function removeDiscapacidad($discapacidadId) {
        $query = "DELETE FROM discapacidad WHERE id_discapacidad = '$discapacidadId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
    
}
?>
