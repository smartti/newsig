<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelInfpai extends JModel
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
            $query = "SELECT ig.id_pai, ig.cod_2000, ig.nu_anho, ig.nu_mes, ig.nu_00a, ig. r.desc_estab
                      FROM inf_pai ig INNER JOIN entidad r on (ig.cod_2000=r.COD_2000)
                      WHERE r.id_pai=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {                       
            $this->_data = new stdClass();
            $this->_data->id_pai = 0;
            $this->_data->cod_2000_inf = null;
            $this->_data->nu_anho = null;
            $this->_data->nu_mes = null;
            $this->_data->nu_00a = null;
     
            $this->_data->desc_estab = null;           
            $this->_data->establec_name=NULL;        
        }
        return $this->_data;
    }

    public function store($data)
    {
        $row  =& $this->getTable('informepai', '');
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
        return $row->id_pai;
    }    
}
?>
