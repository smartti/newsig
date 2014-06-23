<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelPregnantcontrol extends JModel {

    var $_id;
    var $_data;
    var $_personId;
    var $_evaluacionId;

    function __construct() {
        parent::__construct();
        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);

        $evaluacionId = JRequest::getInt('evaluacionId', 0);
        if ($evaluacionId > 0) {
            $this->setEvaluacionId($evaluacionId);
        }
        $personId = JRequest::getInt('personId', 0);
        if ($personId > 0) {
            $this->setPersonId($personId);
        }
    }

    public function setEvaluacionId($evaluacionId) {
        $this->_evaluacionId = $evaluacionId;
    }

    public function setPersonId($personId) {
        $this->_personId = $personId;
    }

    function setId($id) {
        // Set id and wipe data
        $this->_id = $id;
        $this->_data = null;
    }

    function &getData() {
        // Load the data
        if (empty($this->_data)) {
            $query = "SELECT egc.id_evaluacion_gestante_control, 
                             egc.fe_visita, 
                             egc.de_peso_actual, 
                             egc.nu_hemoglobina, 
                             egc.id_dg_imc_pg, 
                             egc.id_dg_ganancia_peso
                      FROM evaluacion_gestante_control egc 
                      WHERE egc.id_evaluacion_gestante_control=" . $this->_id;
            //echo $query;
            $this->_db->setQuery($query);
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_evaluacion_gestante_control = 0;
            $this->_data->id_evaluacion_gestante = JRequest::getVar('evaluacionId', NULL);
            $this->_data->fe_visita = null;
            $this->_data->de_peso_actual = null;
            $this->_data->nu_hemoglobina = null;
            $this->_data->id_dg_imc_pg = null;
            $this->_data->id_dg_ganancia_peso = null;
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;
        }
        return $this->_data;
    }

    function &getEvaluacion() {
        // Load persona
        $query = 'SELECT EG.*
                  FROM evaluacion_gestante AS EG 
                  WHERE EG.id_evaluacion_gestante=' . $this->_evaluacionId;
        //echo $query;
        $this->_db->setQuery($query);
        $evaluacion = $this->_db->loadObject();

        return $evaluacion;
    }

    function &getPersona() {
        // Load persona
        $query = 'SELECT P.id_entidad, P.tx_nombres, P.fe_nacimiento, P.tx_apellido_paterno, P.tx_apellido_materno, P.in_sexo 
                  FROM persona AS P 
                  WHERE P.id_entidad=' . $this->_personId;
        //echo $query;
        $this->_db->setQuery($query);
        $persona = $this->_db->loadObject();

        return $persona;
    }

    public function getImcPg() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '26'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function getGananciaPeso() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '27'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function store($data) {
        if (!$data['id_evaluacion_gestante_control']) {
            $data['fe_creacion'] = date('Y-m-d H:m:s');
        } else {
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
        }

        if ($data['fe_visita']) {
            $temporalArray = explode('/', $data['fe_visita']);
            $data['fe_visita'] = $temporalArray[2] . '-' . $temporalArray[1] . '-' . $temporalArray[0];
        }

        $row = & $this->getTable('pregnantscontrol', '');
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

        return $row->id_evaluacion_gestante_control;
    }

    public function removeEvaluacionControl($evaluacioncontrolId) {
        $query = "DELETE FROM evaluacion_gestante_control WHERE id_evaluacion_gestante_control = '$evaluacioncontrolId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

}

?>
