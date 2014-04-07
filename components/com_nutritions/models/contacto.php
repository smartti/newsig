<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelContacto extends JModel
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
            $query = "SELECT c.*
                      FROM contacto c 
                      WHERE c.id_contacto=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {                       
            $this->_data = new stdClass();
            $this->_data->id_contacto = 0;
            $this->_data->nu_telefono = null;
            $this->_data->nu_anexo = null;
            $this->_data->tx_correo = null;

        }
        return $this->_data;
    }

    public function store($data)
    {
        $row  =& $this->getTable('contacto', '');
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
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }
        return $row->id_contacto;
    }
    
    
    public function removeContacto($contactoId) {
        $query = "DELETE FROM contacto WHERE id_contacto = '$contactoId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
}
?>
