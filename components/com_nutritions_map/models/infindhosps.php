<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class NutritionsModelInfindhosps extends JModel {
    /**
     * Data array
     *
     * @var array
     */
    var $_data;
    
    public function getSearchResults() {

        $cod_2000Id = JRequest::getInt('cod_2000', 0);

        
        $where = array();
        
        if($cod_2000Id > 0){
            $where[] = " ig.cod_2000 = '{$cod_2000Id}' ";
        }
        
        $where = ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
        
        $query = "SELECT CONCAT_WS(' ',P.tx_apellido_paterno, P.tx_apellido_materno, P.tx_nombres) AS encuestador_name,        
                  CONCAT_WS('-',r.DESC_DISA, r.DESC_RED, r.DESC_ESTAB, r.cod_2000) AS establec_name,
                  r.DESC_UE, r.DESC_DISA, r.DESC_RED, r.DESC_ESTAB, dg_a.tx_descripcion as ano, dg_m.tx_descripcion as mes, ig.*
                  FROM inf_indhosp ig 
                  LEFT JOIN persona AS P ON (ig.nu_dni = P.tx_nro_documento)
                  LEFT JOIN entidad r ON (ig.cod_2000 = r.cod_2000)
                  LEFT join renaes_detalle rd on (rd.cod_estab=r.cod_estab)
                  LEFT join unidad_ejecutora ue on (rd.cod_ue=ue.cod_ue)
                  LEFT JOIN detalle_general dg_a on (ig.nu_ano=dg_a.id_detalle_general)
                  LEFT JOIN detalle_general dg_m on (ig.nu_mes=dg_m.id_detalle_general) {$where} ORDER BY ig.nu_ano DESC, ig.nu_mes DESC";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    function &getData()    {        
        // Load the data
        if (!$this->_data) {                       
            $this->_data = new stdClass();            
            $this->_data->desc_estab = null;           
            $this->_data->establec_name=NULL;            

        }
        return $this->_data;
    }
}

?>