<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport('joomla.application.component.model');

class NutritionsModelPersons extends JModel {

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
        $filter_departamento = $mainframe->getUserStateFromRequest( $option.'.persons.filter_departamento','filter_departamento', '0', 'int' );
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
        $filter_provincia = $mainframe->getUserStateFromRequest( $option.'.persons.filter_provincia','filter_provincia', '0', 'int' );
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
        $entidadId = JRequest::getInt('id_entidad', 0);
        $nombres = JRequest::getVar('tx_nombres', null);
        $tx_nro_documento = JRequest::getVar('tx_nro_documento', null);
        $apellidoPaterno = JRequest::getVar('tx_apellido_paterno', null);
        $apellidoMaterno = JRequest::getVar('tx_apellido_materno', null);
        
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
        if($nombres){
            $where[] = " P.tx_nombres LIKE '%{$nombres}%' ";
        }
        if($tx_nro_documento){
            $where[] = " P.tx_nro_documento LIKE '%{$tx_nro_documento}%' ";
        }
        if($apellidoPaterno){
            $where[] = " P.tx_apellido_paterno LIKE '%{$apellidoPaterno}%' ";
        }
        if($apellidoMaterno){
            $where[] = " P.tx_apellido_materno LIKE '%{$apellidoMaterno}%' ";
        }
        if($entidadId > 0){
            $where[] = " P.id_entidad = '{$entidadId}' ";
        }
        
        $where = ( count( $where ) ? ' WHERE ' . implode( ' AND ', $where ) : '' );
        
        $query = "SELECT P.id_entidad, P.id_familia, V.id_departamento, V.id_provincia, V.id_distrito,V.ubigeo_dpto, V.ubigeo_prov, V.ubigeo_dist, P.tx_apellido_paterno, P.tx_apellido_materno, P.tx_nombres 
                  FROM persona P LEFT JOIN direccion_familia D ON (P.id_familia=D.id_familia) 
                  LEFT JOIN 0002_geresall_ubigeo V ON (D.id_ubigeo = V.id_ubigeo) {$where} GROUP BY P.id_entidad";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}

?>