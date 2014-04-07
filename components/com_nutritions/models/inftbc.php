<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelInftbc extends JModel
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
            $query = "SELECT CONCAT_WS(' ', p.tx_nro_documento,'-',p.tx_apellido_paterno, p.tx_apellido_materno, p.tx_nombres) AS encuestador_name,
                      CONCAT_WS(' - ',r.cod_2000, r.DESC_Dpto, r.desc_prov, r.desc_dist, '|', r.desc_disa, r.DESC_RED, r.DESC_ESTAB) AS establec_name, ig.*
                      FROM inf_tbc ig 
                      LEFT JOIN persona AS p ON (ig.nu_dni = p.tx_nro_documento)
                      INNER JOIN entidad r ON (ig.cod_2000 = r.cod_2000) WHERE ig.id_tbc=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {                       
            $this->_data = new stdClass();
            $this->_data->id_tbc = 0;
            $this->_data->nu_dni = null;
            $this->_data->cod_2000 = null;
            $this->_data->nu_ano = null;
            $this->_data->nu_mes = null;
            $this->_data->nu_pob = null;
            
            $this->_data->nu_00a = null;
            
            $this->_data->nu_01a = null;
            $this->_data->nu_01b = null;
            $this->_data->nu_01c = null;
            $this->_data->nu_01d = null;
            $this->_data->nu_01e = null;
     
            $this->_data->nu_02a = null;
            $this->_data->nu_02b = null;
            $this->_data->nu_02c = null;
            $this->_data->nu_02d = null;
            $this->_data->nu_02e = null;
            
            $this->_data->nu_03a = null;
            $this->_data->nu_03b = null;
            $this->_data->nu_03c = null;
            $this->_data->nu_03d = null;
            $this->_data->nu_03e = null;
            
            $this->_data->nu_05f = null;
            $this->_data->nu_06f = null;
            $this->_data->nu_07f = null;
            $this->_data->nu_08f = null;
            $this->_data->nu_09f = null;
            $this->_data->nu_10f = null;
            $this->_data->nu_12f = null;
            $this->_data->nu_13f = null;
            
            $this->_data->nu_14a = null;
            $this->_data->nu_14b = null;
            $this->_data->nu_14c = null;
            $this->_data->nu_14d = null;
            $this->_data->nu_14e = null;
            
            $this->_data->nu_15a = null;
            $this->_data->nu_15b = null;
            $this->_data->nu_15c = null;
            $this->_data->nu_15d = null;
            $this->_data->nu_15e = null;
            
            $this->_data->nu_16a = null;
            $this->_data->nu_16b = null;
            $this->_data->nu_16c = null;
            $this->_data->nu_16d = null;
            $this->_data->nu_16e = null;
            
            $this->_data->nu_17a = null;
            $this->_data->nu_17b = null;
            $this->_data->nu_17c = null;
            $this->_data->nu_17d = null;
            $this->_data->nu_17e = null;
            
            $this->_data->nu_18a = null;
            $this->_data->nu_18b = null;
            $this->_data->nu_18c = null;
            $this->_data->nu_18d = null;
            $this->_data->nu_18e = null;
            
            $this->_data->nu_19a = null;
            $this->_data->nu_19b = null;
            $this->_data->nu_19c = null;
            $this->_data->nu_19d = null;
            $this->_data->nu_19e = null;
           
            $this->_data->nu_20a = null;
            $this->_data->nu_20b = null;
            $this->_data->nu_20c = null;
            $this->_data->nu_20d = null;
            $this->_data->nu_20e = null;
            
            $this->_data->nu_21a = null;
            $this->_data->nu_21b = null;
            $this->_data->nu_21c = null;
            $this->_data->nu_21d = null;
            $this->_data->nu_21e = null;
            
            $this->_data->nu_22a = null;
            $this->_data->nu_22b = null;
            $this->_data->nu_22c = null;
            $this->_data->nu_22d = null;
            $this->_data->nu_22e = null;
            
            $this->_data->nu_23a = null;
            $this->_data->nu_23b = null;
            $this->_data->nu_23c = null;
            $this->_data->nu_23d = null;
            $this->_data->nu_23e = null;
            
            $this->_data->nu_24a = null;
            $this->_data->nu_24b = null;
            $this->_data->nu_24c = null;
            $this->_data->nu_24d = null;
            $this->_data->nu_24e = null;
            
            $this->_data->nu_25a = null;
            $this->_data->nu_25b = null;
            $this->_data->nu_25c = null;
            $this->_data->nu_25d = null;
            $this->_data->nu_25e = null;
            
            $this->_data->nu_26a = null;
            $this->_data->nu_26b = null;
            $this->_data->nu_26c = null;
            $this->_data->nu_26d = null;
            $this->_data->nu_26e = null;
           
            $this->_data->nu_27a = null;
            $this->_data->nu_27b = null;
            $this->_data->nu_27c = null;
            $this->_data->nu_27d = null;
            $this->_data->nu_27e = null;
            
            $this->_data->nu_28a = null;
            $this->_data->nu_28b = null;
            $this->_data->nu_28c = null;
            $this->_data->nu_28d = null;
            $this->_data->nu_28e = null;
            
            $this->_data->nu_29a = null;
            $this->_data->nu_29b = null;
            $this->_data->nu_29c = null;
            $this->_data->nu_29d = null;
            $this->_data->nu_29e = null;
          
            $this->_data->nu_30a = null;
            $this->_data->nu_30b = null;
            $this->_data->nu_30c = null;
            $this->_data->nu_30d = null;
            $this->_data->nu_30e = null;
            
            $this->_data->nu_31a = null;
            $this->_data->nu_31b = null;
            $this->_data->nu_31c = null;
            $this->_data->nu_31d = null;
            $this->_data->nu_31e = null;
            
            $this->_data->nu_32a = null;
            $this->_data->nu_32b = null;
            $this->_data->nu_32c = null;
            $this->_data->nu_32d = null;
            $this->_data->nu_32e = null;
            
            $this->_data->nu_34a = null;
            $this->_data->nu_34b = null;
            $this->_data->nu_34c = null;
            $this->_data->nu_34d = null;
            $this->_data->nu_34e = null;
            
            $this->_data->nu_35a = null;
            $this->_data->nu_35b = null;
            $this->_data->nu_35c = null;
            $this->_data->nu_35d = null;
            $this->_data->nu_35e = null;
            
            $this->_data->nu_36a = null;
            $this->_data->nu_36b = null;
            $this->_data->nu_36c = null;
            $this->_data->nu_36d = null;
            $this->_data->nu_36e = null;
            
            $this->_data->nu_37a = null;
            $this->_data->nu_37b = null;
            $this->_data->nu_37c = null;
            $this->_data->nu_37d = null;
            $this->_data->nu_37e = null;
            
            $this->_data->nu_38f = null;
            $this->_data->nu_39f = null;
            $this->_data->nu_40f = null;
            $this->_data->nu_41f = null;
            $this->_data->nu_42f = null;
            $this->_data->nu_43f = null;
            
            $this->_data->nu_44a = null;
            $this->_data->nu_44b = null;
            $this->_data->nu_44c = null;
            $this->_data->nu_44d = null;
            $this->_data->nu_44e = null;
            
            $this->_data->nu_45a = null;
            $this->_data->nu_45b = null;
            $this->_data->nu_45c = null;
            $this->_data->nu_45d = null;
            $this->_data->nu_45e = null;
            
            $this->_data->nu_46a = null;
            $this->_data->nu_46b = null;
            $this->_data->nu_46c = null;
            $this->_data->nu_46d = null;
            $this->_data->nu_46e = null;
            
            $this->_data->nu_47a = null;
            $this->_data->nu_47b = null;
            $this->_data->nu_47c = null;
            $this->_data->nu_47d = null;
            $this->_data->nu_47e = null;
            
            $this->_data->nu_48a = null;
            $this->_data->nu_48b = null;
            $this->_data->nu_48c = null;
            $this->_data->nu_48d = null;
            $this->_data->nu_48e = null;
           
            $this->_data->nu_49a = null;
            $this->_data->nu_49b = null;
            $this->_data->nu_49c = null;
            $this->_data->nu_49d = null;
            $this->_data->nu_49e = null;
            
            $this->_data->nu_50a = null;
            $this->_data->nu_50b = null;
            $this->_data->nu_50c = null;
            $this->_data->nu_50d = null;
            $this->_data->nu_50e = null;
            
            $this->_data->nu_51a = null;
            $this->_data->nu_51b = null;
            $this->_data->nu_51c = null;
            $this->_data->nu_51d = null;
            $this->_data->nu_51e = null;
            
            $this->_data->nu_52a = null;
            
            $this->_data->nu_53a = null;
            $this->_data->nu_53b = null;
            $this->_data->nu_53c = null;
            $this->_data->nu_53d = null;
            $this->_data->nu_53e = null;
            
            $this->_data->nu_54a = null;
            $this->_data->nu_54b = null;
            $this->_data->nu_54c = null;
            $this->_data->nu_54d = null;
            $this->_data->nu_54e = null;
            
            $this->_data->nu_55a = null;
            $this->_data->nu_55b = null;
            $this->_data->nu_55c = null;
            $this->_data->nu_55d = null;
            $this->_data->nu_55e = null;
            
            $this->_data->nu_56a = null;
            $this->_data->nu_56b = null;
            $this->_data->nu_56c = null;
            $this->_data->nu_56d = null;
            $this->_data->nu_56e = null;
            
            $this->_data->nu_57a = null;
            $this->_data->nu_57b = null;
            $this->_data->nu_57c = null;
            $this->_data->nu_57d = null;
            $this->_data->nu_57e = null;
           
            $this->_data->nu_58a = null;
            $this->_data->nu_58b = null;
            $this->_data->nu_58c = null;
            $this->_data->nu_58d = null;
            $this->_data->nu_58e = null;
           
            $this->_data->nu_59a = null;
            $this->_data->nu_59b = null;
            $this->_data->nu_59c = null;
            $this->_data->nu_59d = null;
            $this->_data->nu_59e = null;
           
            $this->_data->nu_60a = null;
            $this->_data->nu_60b = null;
            $this->_data->nu_60c = null;
            $this->_data->nu_60d = null;
            $this->_data->nu_60e = null;
            
            $this->_data->nu_61a = null;
            $this->_data->nu_61b = null;
            $this->_data->nu_61c = null;
            $this->_data->nu_61d = null;
            $this->_data->nu_61e = null;
            
            $this->_data->nu_62a = null;
            $this->_data->nu_62b = null;
            $this->_data->nu_62c = null;
            $this->_data->nu_62d = null;
            $this->_data->nu_62e = null;
            
            $this->_data->nu_75a = null;
            $this->_data->nu_75b = null;
            $this->_data->nu_75c = null;
            $this->_data->nu_75d = null;
            $this->_data->nu_75e = null;
            $this->_data->nu_75f = null;
            $this->_data->nu_75g = null;
            $this->_data->nu_75h = null;
            $this->_data->nu_75i = null;
            $this->_data->nu_75j = null;
            $this->_data->nu_75k = null;
            $this->_data->nu_75l = null;
            $this->_data->nu_75m = null;
            $this->_data->nu_75n = null;
            $this->_data->nu_75o = null;
            $this->_data->nu_75p = null;
            
            $this->_data->nu_76a = null;
            $this->_data->nu_76b = null;
            $this->_data->nu_76c = null;
            $this->_data->nu_76d = null;
            $this->_data->nu_76e = null;
            $this->_data->nu_76f = null;
            $this->_data->nu_76g = null;
            $this->_data->nu_76h = null;
            $this->_data->nu_76i = null;
            $this->_data->nu_76j = null;
            $this->_data->nu_76k = null;
            $this->_data->nu_76l = null;
            $this->_data->nu_76m = null;
            $this->_data->nu_76n = null;
            $this->_data->nu_76o = null;
            $this->_data->nu_76p = null;
            
            $this->_data->nu_77a = null;
            $this->_data->nu_77b = null;
            $this->_data->nu_77c = null;
            $this->_data->nu_77d = null;
            $this->_data->nu_77e = null;
            $this->_data->nu_77f = null;
            $this->_data->nu_77g = null;
            $this->_data->nu_77h = null;
            $this->_data->nu_77i = null;
            $this->_data->nu_77j = null;
            $this->_data->nu_77k = null;
            $this->_data->nu_77l = null;
            $this->_data->nu_77m = null;
            $this->_data->nu_77n = null;
            $this->_data->nu_77o = null;
            $this->_data->nu_77p = null;
            
            $this->_data->nu_78a = null;
            $this->_data->nu_78b = null;
            $this->_data->nu_78c = null;
            $this->_data->nu_78d = null;
            $this->_data->nu_78e = null;
            $this->_data->nu_78f = null;
            $this->_data->nu_78g = null;
            $this->_data->nu_78h = null;
            $this->_data->nu_78i = null;
            $this->_data->nu_78j = null;
            $this->_data->nu_78k = null;
            $this->_data->nu_78l = null;
            $this->_data->nu_78m = null;
            $this->_data->nu_78n = null;
            $this->_data->nu_78o = null;
            $this->_data->nu_78p = null;
            
            $this->_data->nu_79a = null;
            $this->_data->nu_79b = null;
            $this->_data->nu_79c = null;
            $this->_data->nu_79d = null;
            $this->_data->nu_79e = null;
            $this->_data->nu_79f = null;
            $this->_data->nu_79g = null;
            $this->_data->nu_79h = null;
            $this->_data->nu_79i = null;
            $this->_data->nu_79j = null;
            $this->_data->nu_79k = null;
            $this->_data->nu_79l = null;
            $this->_data->nu_79m = null;
            $this->_data->nu_79n = null;
            $this->_data->nu_79o = null;
            $this->_data->nu_79p = null;
            $this->_data->nu_79a = null;
            $this->_data->nu_79b = null;
            $this->_data->nu_79c = null;
            $this->_data->nu_79d = null;
            $this->_data->nu_79e = null;
            
            $this->_data->nu_80a = null;
            $this->_data->nu_80b = null;
            $this->_data->nu_80c = null;
            $this->_data->nu_80d = null;
            $this->_data->nu_80e = null;
            $this->_data->nu_80f = null;
            $this->_data->nu_80g = null;
            $this->_data->nu_80h = null;
            $this->_data->nu_80i = null;
            $this->_data->nu_80j = null;
            $this->_data->nu_80k = null;
            $this->_data->nu_80l = null;
            $this->_data->nu_80m = null;
            $this->_data->nu_80n = null;
            $this->_data->nu_80o = null;
            $this->_data->nu_80p = null;
            
            $this->_data->desc_estab = null;           
            $this->_data->establec_name=NULL;
            
            $this->_data->encuestador_name = NULL;
        }
        return $this->_data;
    }

    public function store($data)
    {
        $row  =& $this->getTable('informetbc', '');
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
        return $row->id_tbc;
    }
    
    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $resultado = $this->_db->loadObjectList();
        return $resultado;
    }
    
    public function removeInftbc($inftbcId) {
        $query = "DELETE FROM inf_tbc WHERE id_tbc = '$inftbcId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
}
?>
