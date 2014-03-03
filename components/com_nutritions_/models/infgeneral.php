<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelInfgeneral extends JModel
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
            $query = "SELECT ig.id_informe_general, ig.fe_informe, ig.cod_2000,
                      ig.nu_dni_director_estadistica, ig.nu_dni_director_general, ig.nu_dni_ind_hospital,
                      ig.tx_direccion,ig.tx_observacion, ig.tx_telefono,ig.in_vigente,
                      tx_usuario_creacion, ig.fe_creacion, ig.tx_usuario_modificacion, ig.fe_modificacion,
                      r.DESC_ESTAB
                      FROM inf_general ig INNER JOIN 0001_geresall_renaes r on (ig.cod_2000=r.COD_2000)
                      WHERE r.id_informe_general=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
                       
            $this->_data = new stdClass();
            $this->_data->id_informe_general = 0;
            $this->_data->cod_2000_inf = null;
            $this->_data->fe_informe = null;
            $this->_data->nu_dni_director_estadistica = null;
            $this->_data->nu_dni_director_general = null;
            $this->_data->nu_dni_ind_hospital = null;
            $this->_data->tx_direccion = null;
            $this->_data->tx_observacion = null;
            $this->_data->tx_telefono = null;
            $this->_data->in_vigente = null;
            
            $this->_data->DESC_ESTAB = null;           
            $this->_data->establec_name=NULL;
            
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;            
        }
        return $this->_data;
    }

    public function store($data)
    {
        if(!$data['id_informe_general']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
        }
        
        if($data['fe_informe']){
            $temporalArray = explode('/', $data['fe_informe']);
            $data['fe_informe'] = $temporalArray[2].'-'.$temporalArray[1].'-'.$temporalArray[0];
        }
        
        $row  =& $this->getTable('informegeneral', '');
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
        return $row->id_informe_general;
    }
    
    public function removeInf($informeId) {
        $query = "UPDATE infgeneral SET in_eliminar = '1' WHERE id_informe_general = '$informeId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

    
    
}
?>
