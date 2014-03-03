<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelPregnant extends JModel
{
    var $_id;
    var $_data;
    var $_personId;

    function __construct()
    {
        parent::__construct();

        $array = JRequest::getVar('cid', 0, '', 'array');
        $this->setId((int) $array[0]);
        $personId = JRequest::getInt('personId', 0);
        if( $personId > 0 ){
            $this->setPersonId($personId);
        }
    }
    
    public function setPersonId($personId) {
        $this->_personId = $personId;
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
            $query = "select eg.id_evaluacion_gestante, eg.id_actividad, eg.de_peso_habitual, eg.fe_fur, eg.fe_pp, eg.nu_ali_animal_sem, eg.nu_ali_animal_dia, eg.nu_ali_vege_sem, eg.nu_ali_vege_dia,
                      eg.nu_ali_ener_sem, eg.nu_ali_ener_dia, eg.nu_ali_fru_ver_sem, eg.nu_ali_fru_ver_dia, eg.in_consume_agua_segura, eg.fe_visita,
                      eg.de_peso_actual,eg.de_talla, eg.nu_hemoglobina, eg.id_dg_imc_pg, eg.id_dg_ganancia_peso,eg.id_dg_lugar_parto,eg.fe_parto,eg.id_ubigeo_parto,eg.cod_2000_parto,eg.in_tipo_parto, eg.fe_toma_historicos,eg.nu_embarazos_anteriores,nu_partos_anteriores,
                      eg.nu_partos_prematuros, eg.nu_hijos_vivos, eg.nu_molas_abortos_ectopicos, eg.id_dg_ultimo_evento,eg.id_dg_lugar_ultimo_evento,eg.fe_ultimo_evento,
                      CONCAT_WS(' - ',E.DESC_DISA, E.DESC_RED, E.DESC_ESTAB,E.cod_2000) AS establec_name,
                      CONCAT_WS(' - ',U.ubigeo_dpto, U.ubigeo_prov, U.ubigeo_dist) AS ubigeo_name   
                      FROM persona p 
                      LEFT JOIN actividad_entidad ae on (p.id_entidad=ae.id_entidad)
                      LEFT JOIN actividad a on (ae.id_actividad=a.id_actividad) 
                      LEFT JOIN evaluacion_gestante eg on (a.id_actividad=eg.id_actividad)
                      LEFT JOIN 0001_geresall_renaes AS E ON (eg.cod_2000_parto=E.cod_2000)
                      LEFT JOIN 0002_geresall_ubigeo AS U ON (eg.id_ubigeo_parto=U.id_ubigeo)
                      WHERE eg.id_evaluacion_gestante=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_evaluacion_gestante = 0;
            $this->_data->fe_visita = null;
            $this->_data->de_peso_habitual = null;
            $this->_data->de_talla = null;
            $this->_data->fe_pp = null;
            $this->_data->fe_fur = null;
            $this->_data->nu_edad_gestacional = null;
            $this->_data->de_peso_actual = null;
            $this->_data->nu_hemoglobina = null;
            $this->_data->id_dg_imc_pg = null;
            $this->_data->id_dg_ganancia_peso = null;
            $this->_data->nu_ali_animal_sem = null;
            $this->_data->nu_ali_animal_dia = null;
            $this->_data->nu_ali_vege_sem = null;
            $this->_data->nu_ali_vege_dia = null;
            $this->_data->nu_ali_ener_sem = null;
            $this->_data->nu_ali_ener_dia = NULL;
            $this->_data->nu_ali_fru_ver_sem = NULL;
            $this->_data->nu_ali_fru_ver_dia = null;
            $this->_data->in_consume_agua_segura = null;
            $this->_data->id_dg_lugar_parto = null;
            $this->_data->fe_parto = null;
            $this->_data->in_tipo_parto = null;
            $this->_data->id_ubigeo_parto = null;
            $this->_data->cod_2000_parto = null;
            $this->_data->fe_toma_historicos = null;
            $this->_data->nu_embarazos_anteriores = NULL;
            $this->_data->nu_partos_anteriores = NULL;
            $this->_data->nu_partos_prematuros = NULL;
            $this->_data->nu_hijos_vivos = NULL;
            $this->_data->nu_molas_abortos_ectopicos = NULL;
            $this->_data->id_dg_ultimo_evento = NULL;
            $this->_data->id_dg_lugar_ultimo_evento = NULL;
            $this->_data->fe_ultimo_evento = NULL;
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;
            $this->_data->anemia = null;
            $this->_data->edad_visita = null;
            $this->_data->establec_name=NULL;
            $this->_data->ubigeo_name=NULL;
            
            $query = "SELECT AE.id_actividad FROM actividad_entidad as AE INNER JOIN actividad as A WHERE AE.id_entidad = '{$this->_personId}' AND A.id_titulo = '2'";
            $this->_db->setQuery($query);
            $tempActividad = $this->_db->loadResult();
            if ($tempActividad) {
                $this->_data->id_actividad = $tempActividad;
            } else {
                $this->_data->id_actividad = null;
            }
        }
        return $this->_data;
    }
    
    function &getPersona()
    {
        // Load persona
        $query = 'SELECT P.id_entidad, P.tx_nombres, P.fe_nacimiento, P.tx_apellido_paterno, P.tx_apellido_materno, P.in_sexo 
                  FROM persona AS P 
                  WHERE P.id_entidad='.$this->_personId;
        //echo $query;
        $this->_db->setQuery( $query );
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
    
    public function getLugarParto() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '31'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getLugarUltimoEvento() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '31'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
     public function getUltimoEvento() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '30'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function store($data)
    {
        $actividadData['id_actividad'] = $data['id_actividad'];
        $actividadData['id_titulo'] = '2';
        $actividadData['tx_usuario_creacion'] = 'admin';
        if(!$actividadData['id_actividad']){
            $actividadData['fe_creacion'] = date('Y-m-d H:m:s');
        }else{
            $actividadData['fe_modificacion'] = date('Y-m-d H:m:s');
        }
        $actividadRow  =& $this->getTable('actividades', '');
        // bind it to the table
        if (!$actividadRow->bind($actividadData)) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }
        
        // Make sure the data is valid
        if (!$actividadRow->check()) {
            $this->setError($actividadRow->getError());
            return false;
        }
        // Store it in the db
        if (!$actividadRow->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }
        
        $query = "SELECT id_actividad FROM actividad_entidad WHERE id_actividad = '{$actividadRow->id_actividad}'";
        $this->_db->setQuery($query);
        $temporalResult = $this->_db->loadResult();
        if( !$temporalResult ){
            $query = "INSERT INTO actividad_entidad VALUES('{$actividadRow->id_actividad}', '{$data['id_entidad']}')";
            $this->_db->setQuery($query);
            $this->_db->query();
        }
        
        $data['id_actividad'] = $actividadRow->id_actividad;
        if($data['fe_visita']){
            $temporalArray = explode('/', $data['fe_visita']);
            $data['fe_visita'] = $temporalArray[2].'-'.$temporalArray[1].'-'.$temporalArray[0];
        }
        if($data['fe_parto']){
            $temporalArray2 = explode('/', $data['fe_parto']);
            $data['fe_parto'] = $temporalArray2[2].'-'.$temporalArray2[1].'-'.$temporalArray2[0];
        }
        if($data['fe_fur']){
            $temporalArray2 = explode('/', $data['fe_fur']);
            $data['fe_fur'] = $temporalArray2[2].'-'.$temporalArray2[1].'-'.$temporalArray2[0];
        }
        if($data['fe_pp']){
            $temporalArray2 = explode('/', $data['fe_pp']);
            $data['fe_pp'] = $temporalArray2[2].'-'.$temporalArray2[1].'-'.$temporalArray2[0];
        }
        if(!$data['id_evaluacion_gestante']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
        }
        
        $row  =& $this->getTable('pregnants', '');
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
        
        return $row->id_evaluacion_gestante;
    }
    
    public function removeEvaluacion($evaluacionId) {
        $query = "DELETE FROM evaluacion_gestante WHERE id_evaluacion_gestante = '$evaluacionId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }

}
?>
