<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class NutritionsModelNutritions extends JModel {

    /**
     * Data array
     *
     * @var array
     */
    var $_data;
    
    public function getDepartamentos() {
        $query = "SELECT id_ubigeo as value, tx_descripcion as text FROM ubigeo WHERE id_dg_nivel = '2'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
    public function getProvincias() {
        global $mainframe, $option;
        $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.nutritions.filter_departamento','filter_departamento', '0', 'int' );
        $where = '';
        if($filter_departamento > 0){
            $where = "AND id_ubigeo_padre = '{$filter_departamento}'";
        }
        $query = "SELECT id_ubigeo as value, tx_descripcion as text FROM ubigeo WHERE id_dg_nivel = '3' {$where}";
        $this->_db->setQuery($query);
        $provincias = $this->_db->loadObjectList();
        return $provincias;
    }
    
    public function getDistritos() {
        global $mainframe, $option;
        $filter_provincia = $mainframe->getUserStateFromRequest( $option.'.nutritions.filter_provincia','filter_provincia', '0', 'int' );
        $where = '';
        if($filter_provincia > 0){
            $where = "AND id_ubigeo_padre = '{$filter_provincia}'";
        }
        $query = "SELECT id_ubigeo as value, tx_descripcion as text FROM ubigeo WHERE id_dg_nivel = '4' $where";
        $this->_db->setQuery($query);
        $distritos = $this->_db->loadObjectList();
        return $distritos;
    }
        
        public function getSearchResults() {
        $departamentoId = JRequest::getInt('filter_departamento', 0);
        $provinciaId = JRequest::getInt('filter_provincia', 0);
        $distritoId = JRequest::getInt('filter_distrito', 0);
        $familiaId = JRequest::getInt('id_familia', 0);
        $apellidos = JRequest::getVar('tx_apellidos', null);
        
        $ubigeoId = 0;
        
        if($departamentoId > 0){
            $ubigeoId = $departamentoId;
            if($provinciaId > 0){
                $ubigeoId = $provinciaId;
                if($distritoId > 0){
                    $ubigeoId = $distritoId;
                }
            }
        }
        
        $where = array();
        
        if( $ubigeoId > 0 ){
            $where[] = " D.id_ubigeo LIKE '{$ubigeoId}%' ";
        }
        if($apellidos){
            $where[] = " F.tx_apellidos LIKE '%{$apellidos}%' ";
        }
        if($familiaId > 0){
            $where[] = " F.id_familia = '{$familiaId}' ";
        }
        
        $where = ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
        
        $query = "SELECT F.id_familia, F.tx_apellidos, F.fe_visita1, V.ubigeo_dpto, V.ubigeo_prov, V.ubigeo_dist, D.un_latitud, D.un_longitud
                  FROM familia as F 
                  LEFT JOIN direccion_familia D ON (F.id_familia = D.id_familia) 
                  LEFT JOIN 0002_geresall_ubigeo V ON (D.id_ubigeo = V.id_ubigeo) {$where} LIMIT 0,100";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}

?>