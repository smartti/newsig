<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelPerson extends JModel
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
            $query = "SELECT P.*, R.id_riesgo, R.id_dg_riesgo, D.id_discapacidad, D.id_dg_discapacidad, 
                      CONCAT_WS(' - ',E.DESC_DISA, E.DESC_RED, E.DESC_ESTAB,E.cod_2000) AS establec_name
                      FROM persona AS P LEFT JOIN riesgo AS R ON (P.id_entidad = R.id_entidad) 
                      LEFT JOIN discapacidad AS D ON (P.id_entidad = D.id_entidad)
                      LEFT JOIN entidad AS E ON (P.cod_2000=E.cod_2000)
                      WHERE P.id_entidad=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
                       
            $this->_data = new stdClass();
            $this->_data->id_entidad = 0;
            $this->_data->nu_lote = null;
            $this->_data->id_familia_excel = null;
            $this->_data->cod_2000 = null;
            $this->_data->tx_nombres = null;
            $this->_data->tx_apellido_paterno = null;
            $this->_data->tx_apellido_materno = null;
            $this->_data->estado_laboral = null;
            $this->_data->tx_nro_seguro = null;
            $this->_data->id_dg_tipo_documento = null;
            $this->_data->tx_nro_documento = null;
            $this->_data->id_dg_seguro_salud = null;
            $this->_data->tx_hcl = null;
            $this->_data->id_dg_operador_telf = null;
            $this->_data->tx_telf_cel = null;
            $this->_data->nu_tiempo_eess = null;
            $this->_data->fe_nacimiento = null;
            $this->_data->in_sexo = null;
            $this->_data->id_dg_edu_nivel = null;
            $this->_data->id_dg_edu_anho = null;
            $this->_data->id_dg_lengua_habitual = null;
            $this->_data->in_sabe_leer_escribir = null;
            $this->_data->id_dg_ocupacion = null;
            $this->_data->id_organizacion = null;
            $this->_data->id_dg_estado_civil = null;
            $this->_data->id_dg_tipo_persona = 192;
            $this->_data->id_familia = JRequest::getVar('familyId', NULL);
            $this->_data->id_dg_parentesco = null;
            $this->_data->in_vaso_leche = null;
            $this->_data->in_comedor_popular = null;
            $this->_data->in_desayuno_almuerzo_escolar = null;
            $this->_data->in_papilla_yapita = null;
            $this->_data->in_canasta_alimentaria = null;
            $this->_data->in_cuna_mas = null;
            $this->_data->in_juntos = null;
            $this->_data->in_techo_propio = null;
            $this->_data->in_otros = null;
            $this->_data->in_ninguno = null;
            $this->_data->tx_email = null;  
            $this->_data->tx_fono_fijo = null;
            $this->_data->tx_cel_claro_gen = null;
            $this->_data->tx_cel_claro_rpc = null;
            $this->_data->tx_cel_mov_gen = null;
            $this->_data->tx_cel_mov_rpm = null;
            $this->_data->tx_observacion = null;
            $this->_data->in_eliminado = null;
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;
            $this->_data->id_dg_riesgo = 163;
            $this->_data->id_riesgo = null;
            $this->_data->id_dg_discapacidad = 157;
            $this->_data->id_discapacidad = null;
            $this->_data->establec_name = NULL;
            
        }
        return $this->_data;
    }
    
    public function getParentescos() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '20'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
   public function getTipoPersonas() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '28'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
    public function getEstadoCivil() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '19'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
    public function getDocumentos() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '14'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
    public function getNivelesEducativos() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '16'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
    public function getAnoEducativo() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '17'";
        $this->_db->setQuery($query);
        $departamentos = $this->_db->loadObjectList();
        return $departamentos;
    }
    
     public function getLenguaHabitual() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '17'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getRiesgos() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '22'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getSeguroSalud() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '15'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getOcupaciones() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '18'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getDiscapacidades() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '21'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }

    public function store($data)
    {
        if(!$data['id_entidad']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
        }
        if(!isset($data['in_vaso_leche']))$data['in_vaso_leche']=0;
        if(!isset($data['in_comedor_popular']))$data['in_comedor_popular']=0;
        if(!isset($data['in_desayuno_almuerzo_escolar']))$data['in_desayuno_almuerzo_escolar']=0;
        if(!isset($data['in_papilla_yapita']))$data['in_papilla_yapita']=0;
        if(!isset($data['in_canasta_alimentaria']))$data['in_canasta_alimentaria']=0;
        if(!isset($data['in_cuna_mas']))$data['in_cuna_mas']=0;
        if(!isset($data['in_juntos']))$data['in_juntos']=0;
        if(!isset($data['in_techo_propio']))$data['in_techo_propio']=0;
        
        
        if($data['fe_nacimiento']){
            $temporalArray = explode('/', $data['fe_nacimiento']);
            $data['fe_nacimiento'] = $temporalArray[2].'-'.$temporalArray[1].'-'.$temporalArray[0];
        }
        
        $row  =& $this->getTable('personas', '');
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
        
//        $riesgoData['id_riesgo'] = $data['id_riesgo'];
//        $riesgoData['id_entidad'] = $row->id_entidad;;
//        $riesgoData['id_dg_riesgo'] = $data['id_dg_riesgo'];
//        if(!$riesgoData['id_riesgo']){
//            $riesgoData['fe_creacion'] = date('Y-m-d H:m:s');
//        }else{
//            $riesgoData['fe_modificacion'] = date('Y-m-d H:m:s');
//        }
//        $riesgoRow  =& $this->getTable('riesgos', '');
//        // bind it to the table
//        if (!$riesgoRow->bind($riesgoData)) {
//            JError::raiseError(500, $this->_db->getErrorMsg() );
//            return false;
//        }
//        
//        // Make sure the data is valid
//        if (!$riesgoRow->check()) {
//            $this->setError($riesgoRow->getError());
//            return false;
//        }
//        // Store it in the db
//        if (!$riesgoRow->store()) {
//            JError::raiseError(500, $this->_db->getErrorMsg() );
//            return false;
//        }
//        
//        $discapacidadData['id_discapacidad'] = $data['id_discapacidad'];
//        $discapacidadData['id_entidad'] = $row->id_entidad;
//        $discapacidadData['id_dg_discapacidad'] = $data['id_dg_discapacidad'];
//        if(!$discapacidadData['id_discapacidad']){
//            $discapacidadData['fe_creacion'] = date('Y-m-d H:m:s');
//        }else{
//            $discapacidadData['fe_modificacion'] = date('Y-m-d H:m:s');
//        }
//        $discapacidadRow =& $this->getTable('discapacidades', '');
//        // bind it to the table
//        if (!$discapacidadRow->bind($discapacidadData)) {
//            JError::raiseError(500, $this->_db->getErrorMsg() );
//            return false;
//        }
//        
//        // Make sure the data is valid
//        if (!$discapacidadRow->check()) {
//            $this->setError($discapacidadRow->getError());
//            return false;
//        }
//        // Store it in the db
//        if (!$discapacidadRow->store()) {
//            JError::raiseError(500, $this->_db->getErrorMsg() );
//            return false;
//        }
        
        
        return $row->id_entidad;
    }
    
    public function removeMember($memberId) {
        $query = "UPDATE persona SET id_familia = '0' WHERE id_entidad = '$memberId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
    public function getChildActivities($personId) {
        $query = "SELECT EN.id_evaluacion_nino, EN.id_actividad, EN.fe_visita, EN.de_peso, EN.de_talla, EN.nu_hemoglobina, 
                  D1.tx_descripcion AS peso_edad, D2.tx_descripcion AS peso_talla, D3.tx_descripcion AS talla_edad 
                  FROM persona AS P INNER JOIN actividad_entidad AS AE ON (P.id_entidad = AE.id_entidad) 
                  INNER JOIN evaluacion_nino AS EN ON ( AE.id_actividad = EN.id_actividad ) 
                  INNER JOIN detalle_general AS D1 ON ( EN.id_dg_diag_pe = D1.id_detalle_general ) 
                  INNER JOIN detalle_general AS D2 ON ( EN.id_dg_diag_pt = D2.id_detalle_general ) 
                  INNER JOIN detalle_general AS D3 ON ( EN.id_dg_diag_te = D3.id_detalle_general ) 
                  WHERE P.id_entidad = '{$personId}'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getPregnantActivities($personId) {
        $query = "SELECT EN.id_evaluacion_gestante, EN.id_actividad, EN.fe_visita, EN.de_peso_habitual, EN.de_peso_actual, EN.nu_hemoglobina, 
                  D1.tx_descripcion AS img_pc, D2.tx_descripcion AS ganancia_peso 
                  FROM persona AS P INNER JOIN actividad_entidad AS AE ON (P.id_entidad = AE.id_entidad) 
                  INNER JOIN evaluacion_gestante AS EN ON ( AE.id_actividad = EN.id_actividad ) 
                  INNER JOIN detalle_general AS D1 ON ( EN.id_dg_imc_pg = D1.id_detalle_general ) 
                  INNER JOIN detalle_general AS D2 ON ( EN.id_dg_ganancia_peso = D2.id_detalle_general ) 
                  WHERE P.id_entidad = '{$personId}'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getEncuestadores($name, $limit) {
        $query = "SELECT id_entidad,tx_nro_documento, CONCAT_WS(' ',tx_nro_documento,'-',tx_apellido_paterno, tx_apellido_materno, tx_nombres) AS encuestador_name FROM persona 
                  WHERE id_dg_tipo_persona = '191' AND CONCAT_WS(' ',tx_nro_documento,'-',tx_apellido_paterno, tx_apellido_materno, tx_nombres) LIKE UPPER('%$name%') LIMIT $limit";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
     public function getDiscapacidad($personId) {
        $query = "SELECT d.id_discapacidad, d.id_dg_discapacidad, dg.tx_descripcion FROM discapacidad d INNER JOIN detalle_general dg ON (d.id_dg_discapacidad=dg.id_detalle_general) WHERE d.id_entidad= {$personId}";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getRiesgo($personId) {
        $query = "SELECT r.id_riesgo, r.id_dg_riesgo, dg.tx_descripcion FROM riesgo r INNER JOIN detalle_general dg ON (r.id_dg_riesgo=dg.id_detalle_general) WHERE r.id_entidad= {$personId}";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
}
?>
