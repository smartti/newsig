<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelEstablec extends JModel {

    var $_id;
    var $_data;

    function __construct() {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);
    }

    function setId($id) {
        // Set id and wipe data
        $user = & JFactory::getUser();
        $id = $user->username;
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData() {
        // Load the data
        if (empty($this->_data)) {
            $query = "SELECT e.cod_estab, e.desc_estab, e.cod_2000, e.tipoestab,
                      e.cod_dpto, e.cod_prov, e.cod_dist, e.cod_disa, e.cod_red, e.cod_mic, e.clas, e.estado,
		      u.id_departamento,u.id_provincia, u.id_distrito, u.ubigeo AS id_ubigeo,
                      u.ubigeo_dpto,u.ubigeo_prov,u.ubigeo_dist,
 		      r.desc_disa,r.desc_red, r.desc_micro
                      FROM establec e 
		      INNER JOIN 0002_geresall_ubigeo u 
                      ON (e.COD_DPTO=u.COD_DPTO AND e.COD_PROV=u.COD_PROV AND e.COD_DIST=u.COD_DIST)
    		      INNER JOIN 0001_geresall_renaes r 
 		      ON (e.cod_2000=r.cod_2000)
                      WHERE e.cod_2000=" . $this->_id;

            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->cod_2000 = 0;
            $this->_data->cod_estab = NULL;
            $this->_data->desc_estab = NULL;
            $this->_data->tipoestab = NULL;
            $this->_data->cod_dpto = NULL;
            $this->_data->cod_prov = NULL;
            $this->_data->cod_dist = NULL;
            $this->_data->cod_disa = NULL;
            $this->_data->cod_red = NULL;
            $this->_data->cod_mic = NULL;
            $this->_data->clas = NULL;
            $this->_data->estado = NULL;
            $this->_data->id_departamento = NULL;
            $this->_data->id_provincia = NULL;
            $this->_data->id_distrito = NULL;
            $this->_data->id_ubigeo = NULL;
            $this->_data->ubigeo_dpto = NULL;
            $this->_data->ubigeo_prov = NULL;
            $this->_data->ubigeo_dist = NULL;
            $this->_data->desc_disa = NULL;
            $this->_data->desc_red = NULL;
            $this->_data->desc_micro = NULL;
        }
        return $this->_data;
    }

    public function getDepartamentos() {
        $query = "SELECT DISTINCT id_departamento as value, ubigeo_dpto as text FROM 0002_geresall_ubigeo";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }

    public function getProvincias() {
        global $mainframe, $option;
        $filter_departamento = $mainframe->getUserStateFromRequest($option . '.nutritions.filter_departamento', 'filter_departamento', '0', 'int');
        $where = '';
        if ($filter_departamento > 0) {
            $where = "WHERE id_departamento = '{$filter_departamento}'";
        }
        $query = "SELECT distinct id_provincia as value, ubigeo_prov as text FROM 0002_geresall_ubigeo {$where}";
        $this->_db->setQuery($query);
        $provincias = $this->_db->loadObjectList();
        return $provincias;
    }

    public function getDistritos() {
        global $mainframe, $option;
        $filter_provincia = $mainframe->getUserStateFromRequest($option . '.nutritions.filter_provincia', 'filter_provincia', '0', 'int');
        $filter_departamento = $mainframe->getUserStateFromRequest($option . '.nutritions.filter_departamento', 'filter_departamento', '0', 'int');
        $where = '';
        if ($filter_provincia > 0) {
            $where = "WHERE id_departamento = '{$filter_departamento}' AND id_provincia = '{$filter_provincia}'";
        }
        $query = "SELECT distinct id_distrito as value, ubigeo_dist as text FROM 0002_geresall_ubigeo {$where}";
        $this->_db->setQuery($query);
        $distritos = $this->_db->loadObjectList();
        return $distritos;
    }

    public function store($data) {
        $row = & $this->getTable('establecimientos', '');
        // bind it to the table
        if (!$row->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }

        // Make sure the data is valid
        if (!$row->check()) {
            $this->setError($row->getError());
            return false;
        }
        // Store it in the db
        if (!$row->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg());
            return false;
        }

        $data['cod_2000'] = $row->cod_2000;
        $data['fe_creacion'] = null;
        $data['fe_modificacion'] = null;

        return $row->cod_2000;
    }

    public function getInfGeneral($establecId) {
        $query = "SELECT ig.id_informe_general, ig.fe_informe, ig.cod_2000,
                      ig.nu_dni_director_estadistica, ig.nu_dni_director_general, ig.nu_dni_ind_hospital,
                      ig.tx_direccion,ig.tx_observacion, ig.tx_telefono,
                      r.DESC_ESTAB
                      FROM inf_general ig INNER JOIN 0001_geresall_renaes r on (ig.cod_2000=r.COD_2000)
                      WHERE r.id_informe_general= '{$establecId}'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function getEstablecimientos($name, $limit, $usuario) {
        $query = "SELECT cod_2000, CONCAT_WS('-',DESC_DISA, DESC_RED, DESC_ESTAB,cod_2000) AS establec_name FROM 0001_geresall_renaes 
                  WHERE (cod_ue=$usuario or cod_2000=$usuario) and CONCAT_WS(' - ',DESC_DISA, DESC_RED, DESC_ESTAB,cod_2000) LIKE UPPER('%$name%') LIMIT $limit";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}

?>
