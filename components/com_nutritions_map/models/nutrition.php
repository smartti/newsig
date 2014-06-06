<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelNutrition extends JModel
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
            $query = "SELECT F.id_familia, V.id_departamento, V.id_provincia, V.id_distrito, D.id_ubigeo, D.tx_centro_poblado, D.id_dg_cate_centro_poblado, D.id_direccion_familia,  
                      D.tx_nucleo_urbano,D.tx_sector,D.tx_direccion,D.tx_referencia, D.id_dg_cate_nucleo_urbano, D.id_dg_via, D.tx_nombre_via, D.un_puerta, D.un_piso, D.tx_zona, D.un_interior, D.tx_manzana, 
                      D.tx_manzana_nucleo, D.un_vivienda, D.tx_lote, D.un_km,D.un_latitud, D.un_longitud, D.un_altitud, F.tx_apellidos, F.id_dg_tipo_vivienda, F.tx_observacion_vivienda, 
                      F.id_dg_material_techo, F.tx_observacion_techo, F.id_dg_material_paredes, F.tx_observacion_paredes, F.id_dg_material_piso, F.tx_observacion_piso, F.nu_telf_fijo,
                      F.id_dg_tipo_alumbrado, F.tx_observacion_tipo_alumbrado, F.id_dg_abastecimiento_agua, F.tx_observacion_abastecimiento_agua, F.id_dg_sshh, F.tx_observacion_sshh, 
                      F.id_dg_combustible_cocina, F.tx_observacion_combustible_cocina, F.id_dg_disposicion_basura, F.tx_observacion_disposicion_basura, F.fe_visita1, F.fe_visita2, F.fe_visita3, 
                      F.id_dg_resultado, F.id_dg_resultado2, F.id_dg_resultado3, F.un_habitaciones, F.in_cria_animales, D.un_hogares, D.un_hogar, CONCAT_WS(' ',tx_nro_documento,'-',tx_apellido_paterno, tx_apellido_materno, tx_nombres) AS encuestador_name, id_persona_encuestador 
                      FROM familia as F INNER JOIN direccion_familia D ON (F.id_familia = D.id_familia) 
                      LEFT JOIN persona AS P ON (F.id_persona_encuestador = P.tx_nro_documento)
                      INNER JOIN 0002_geresall_ubigeo V ON (D.id_ubigeo = V.id_ubigeo)
                      WHERE F.id_familia=".$this->_id;
            
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_familia = 0;
            $this->_data->id_departamento = NULL;
            $this->_data->id_provincia = NULL;
            $this->_data->id_distrito = NULL;
            $this->_data->id_dg_cate_centro_poblado = NULL;
            $this->_data->id_dg_cate_nucleo_urbano = NULL;
            $this->_data->id_dg_via = NULL;
            $this->_data->id_ubigeo = NULL;
            $this->_data->tx_centro_poblado = NULL;
            $this->_data->tx_nucleo_urbano = NULL;
            $this->_data->tx_sector = NULL;
            $this->_data->tx_direccion = NULL;
            $this->_data->tx_referencia = NULL;
            $this->_data->tx_nombre_via = NULL;
            $this->_data->un_puerta = NULL;
            $this->_data->un_piso = NULL;
            $this->_data->un_hogares = NULL;
            $this->_data->un_hogar = NULL;
            $this->_data->tx_zona = NULL;
            $this->_data->un_interior = NULL;
            $this->_data->tx_manzana = NULL;
            $this->_data->tx_manzana_nucleo = NULL;
            $this->_data->un_vivienda = NULL;
            $this->_data->tx_lote = NULL;
            $this->_data->un_km = NULL;
            $this->_data->un_latitud = NULL;
            $this->_data->un_longitud = NULL;
            $this->_data->un_altitud = NULL;
            $this->_data->tx_apellidos = NULL;
            $this->_data->nu_telf_fijo = NULL;
            $this->_data->fe_visita1 = NULL;
            $this->_data->id_dg_resultado = NULL;
            $this->_data->fe_visita2 = NULL;
            $this->_data->id_dg_resultado2 = NULL;
            $this->_data->fe_visita3 = NULL;
            $this->_data->id_dg_resultado3 = NULL;
            $this->_data->numero_integrantes = NULL;
            $this->_data->poblacion_objetivo = NULL;
            $this->_data->poblacion_riesgo = NULL;
            $this->_data->tx_observacion_vivienda = NULL;
            $this->_data->id_dg_tipo_vivienda = NULL;
            $this->_data->id_dg_material_techo = NULL;
            $this->_data->tx_observacion_techo = NULL;
            $this->_data->id_dg_material_paredes = NULL;
            $this->_data->tx_observacion_paredes = NULL;
            $this->_data->id_dg_material_piso = NULL;
            $this->_data->tx_observacion_piso = NULL;
            $this->_data->id_dg_tipo_alumbrado = NULL;
            $this->_data->tx_observacion_tipo_alumbrado = NULL;
            $this->_data->id_dg_abastecimiento_agua = NULL;
            $this->_data->tx_observacion_abastecimiento_agua = NULL;
            $this->_data->id_dg_sshh = NULL;
            $this->_data->id_dg_combustible_cocina = NULL;
            $this->_data->tx_observacion_combustible_cocina = NULL;
            $this->_data->id_dg_disposicion_basura = NULL;
            $this->_data->tx_observacion_disposicion_basura = NULL;
            $this->_data->un_habitaciones = NULL;
            $this->_data->in_cria_animales = NULL;
            $this->_data->id_persona_encuestador = NULL;
            $this->_data->encuestador_name = NULL;
            $this->_data->id_direccion_familia = NULL;
        }
        return $this->_data;
    }
    
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
    
    public function getCentros() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '1'";
        $this->_db->setQuery($query);
        $centros = $this->_db->loadObjectList();
        return $centros;
    }
    
    public function getNucleos() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '2'";
        $this->_db->setQuery($query);
        $nucleos = $this->_db->loadObjectList();
        return $nucleos;
    }
    
    public function getVias() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '13'";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }
    
    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $vias = $this->_db->loadObjectList();
        return $vias;
    }
    
    public function getVisitaResultados() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '29'";
        $this->_db->setQuery($query);
        $resultados = $this->_db->loadObjectList();
        return $resultados;
    }

    public function store($data)
    {
        if(!$data['id_familia']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
        }
        if($data['fe_visita1']){
            $tempArray = explode('/', $data['fe_visita1']);
            $data['fe_visita1'] = $tempArray[2].'-'.$tempArray[1].'-'.$tempArray[0];
        }
        if($data['fe_visita2']){
            $tempArray = explode('/', $data['fe_visita2']);
            $data['fe_visita2'] = $tempArray[2].'-'.$tempArray[1].'-'.$tempArray[0];
        }
        if($data['fe_visita3']){
            $tempArray = explode('/', $data['fe_visita3']);
            $data['fe_visita3'] = $tempArray[2].'-'.$tempArray[1].'-'.$tempArray[0];
        }
        
        $row  =& $this->getTable('familias', '');
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
        
        $data['id_familia'] = $row->id_familia;
        $data['fe_creacion'] = null;
        $data['fe_modificacion'] = null;
        if(!$data['id_direccion_familia']){
            $data['fe_creacion'] = date('Y-m-d');
        }else{
            $data['fe_modificacion'] = date('Y-m-d');
        }
        $jRow  =& $this->getTable('direccionFamilia', '');
        // bind it to the table
        if (!$jRow->bind($data)) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }
        
        // Make sure the data is valid
        if (!$jRow->check()) {
            $this->setError($jRow->getError());
            return false;
        }
        // Store it in the db
        if (!$jRow->store()) {
            JError::raiseError(500, $this->_db->getErrorMsg() );
            return false;
        }

        return $row->id_familia;
    }
    
    public function getIntegrantes($familiaId) {
        $query = "SELECT P.id_entidad, P.tx_apellido_paterno, P.tx_apellido_materno, P.tx_nombres, (CASE P.in_sexo WHEN 1 THEN 'Masculino' WHEN 0 THEN 'Femenino' END) as Sexo, P.tx_nro_documento, P.fe_nacimiento, (SELECT tx_descripcion FROM detalle_general WHERE id_detalle_general=P.id_dg_parentesco) as Parentesco FROM persona P WHERE P.id_familia = {$familiaId}";
        
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getUbigeos($name, $limit) {
        $query = "SELECT id_ubigeo, CONCAT_WS(' - ',ubigeo_dpto, ubigeo_prov, ubigeo_dist) AS ubigeo_name FROM 0002_geresall_ubigeo 
                  WHERE CONCAT_WS(' ',ubigeo_dpto, ubigeo_prov, ubigeo_dist) LIKE '%$name%' LIMIT $limit";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

}
?>
