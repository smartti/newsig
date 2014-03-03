<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelChild extends JModel
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
            $query = 'select en.id_evaluacion_nino, en.id_actividad, en.in_diarrea, en.in_resfrio, en.nu_ali_animal_sem, en.nu_ali_animal_dia, en.nu_ali_vege_sem, en.nu_ali_vege_dia,
                      en.nu_ali_ener_sem, en.nu_ali_ener_dia, en.nu_ali_fru_ver_sem, en.nu_ali_fru_ver_dia, en.in_consume_agua_segura,
                      en.in_eda, en.in_ira, en.fe_visita, en.de_peso,en.de_talla, en.nu_hemoglobina, 
                      en.id_dg_diag_pe_calc, en.id_dg_diag_pt_calc, en.id_dg_diag_te_calc, en.id_dg_diag_pe, en.id_dg_diag_pt, en.id_dg_diag_te  
                      from persona p inner join actividad_entidad ae on (p.id_entidad=ae.id_entidad) inner join actividad a on (ae.id_actividad=a.id_actividad) inner join evaluacion_nino en on (a.id_actividad=en.id_actividad)
                      WHERE en.id_evaluacion_nino='.$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {
            $this->_data = new stdClass();
            $this->_data->id_evaluacion_nino = 0;
            $this->_data->fe_visita = null;
            $this->_data->in_diarrea = null;
            $this->_data->in_resfrio = null;
            $this->_data->de_peso = null;
            $this->_data->de_talla = null;
            $this->_data->nu_hemoglobina = null;
            $this->_data->id_dg_diag_pe = null;
            $this->_data->id_dg_diag_te = null;
            $this->_data->id_dg_diag_pt = null;
            $this->_data->id_dg_diag_pe_calc = null;
            $this->_data->id_dg_diag_te_calc = null;
            $this->_data->id_dg_diag_pt_calc = null;
            $this->_data->nu_ali_animal_sem = null;
            $this->_data->nu_ali_animal_dia = null;
            $this->_data->nu_ali_vege_sem = null;
            $this->_data->nu_ali_vege_dia = null;
            $this->_data->nu_ali_ener_sem = null;
            $this->_data->nu_ali_ener_dia = NULL;
            $this->_data->nu_ali_fru_ver_sem = NULL;
            $this->_data->nu_ali_fru_ver_dia = null;
            $this->_data->in_consume_agua_segura = null;
            $this->_data->in_eda = null;
            $this->_data->in_ira = null;
            $this->_data->tx_usuario_creacion = null;
            $this->_data->fe_creacion = null;
            $this->_data->tx_usuario_modificacion = null;
            $this->_data->fe_modificacion = null;
            $this->_data->anemia = null;
            
            $query = "SELECT AE.id_actividad FROM actividad_entidad as AE INNER JOIN actividad as A WHERE AE.id_entidad = '{$this->_personId}' AND A.id_titulo = '1'";
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
    
    public function getPesoEdades() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '23'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
   public function getTallaEdades() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '24'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }
    
    public function getPesoTallas() {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '25'";
        $this->_db->setQuery($query);
        $results = $this->_db->loadObjectList();
        return $results;
    }

    public function store($data)
    {
        $actividadData['id_actividad'] = $data['id_actividad'];
        $actividadData['id_titulo'] = '1';
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
        if(!$data['id_evaluacion_nino']){
            $data['fe_creacion'] = date('Y-m-d H:m:s');
        }else{
            $data['fe_modificacion'] = date('Y-m-d H:m:s');
        }
        
        $dateBorn = $data['fe_nacimiento'];
        $tempArray = explode('/', $dateBorn);
        $dateBorn = $tempArray[2].'-'.$tempArray[1].'-'.$tempArray[0];
        $dateCurrent = $data['fe_visita'];
        
        $diff = $this->_date_diff( strtotime($dateBorn), strtotime($dateCurrent) );
        $monthsNumber = $diff['y']*12 + $diff['m'];
        //echo $monthsNumber;
        
        $jQuery = "SELECT de_ds_2n, de_ds_2 FROM indicador_peso_edad WHERE in_sexo='{$data['in_sexo']}' AND nu_mes='{$monthsNumber}'";
        $this->_db->setQuery($jQuery);
        $pesoEdad = $this->_db->loadObject();
        if( $data['de_peso'] >= $pesoEdad->de_ds_2n && $data['de_peso'] <= $pesoEdad->de_ds_2 ){
            $data['id_dg_diag_pe'] = 172;
        }elseif( $data['de_peso'] < $pesoEdad->de_ds_2n ){
            $data['id_dg_diag_pe'] = 171;
        }elseif( $data['de_peso'] > $pesoEdad->de_ds_2 ){
            $data['id_dg_diag_pe'] = 173;
        }
        
        $jQuery = "SELECT de_ds_3n, de_ds_2n, de_ds_2 FROM indicador_talla_edad WHERE in_sexo='{$data['in_sexo']}' AND nu_mes='{$monthsNumber}'";
        $this->_db->setQuery($jQuery);
        $tallaEdad = $this->_db->loadObject();
        if( $data['de_talla'] < $tallaEdad->de_ds_3n ){
            $data['id_dg_diag_te'] = 174;
        }elseif( $data['de_talla'] >= $tallaEdad->de_ds_3n && $data['de_talla'] < $tallaEdad->de_ds_2n ){
            $data['id_dg_diag_te'] = 175;
        }elseif( $data['de_talla'] >= $tallaEdad->de_ds_2n && $data['de_talla'] <= $tallaEdad->de_ds_2 ){
            $data['id_dg_diag_te'] = 176;
        }elseif( $data['de_talla'] > $tallaEdad->de_ds_2 ){
            $data['id_dg_diag_te'] = 177;
        }
        
        $jTalla = round($data['de_talla']);
        $jQuery = "SELECT de_ds_3n, de_ds_2n, de_ds_2, de_ds_3 FROM indicador_peso_talla WHERE in_sexo='{$data['in_sexo']}' AND de_talla='{$jTalla}'";
        $this->_db->setQuery($jQuery);
        $pesoTalla = $this->_db->loadObject();
        if( $data['de_peso'] < $pesoTalla->de_ds_3n ){
            $data['id_dg_diag_pt'] = 178;
        }elseif( $data['de_peso'] >= $pesoTalla->de_ds_3n && $data['de_peso'] < $pesoTalla->de_ds_2n ){
            $data['id_dg_diag_pt'] = 179;
        }elseif( $data['de_peso'] >= $pesoTalla->de_ds_2n && $data['de_peso'] <= $pesoTalla->de_ds_2 ){
            $data['id_dg_diag_pt'] = 180;
        }elseif( $data['de_peso'] > $pesoTalla->de_ds_2 && $data['de_peso'] <= $pesoTalla->de_ds_3 ){
            $data['id_dg_diag_pt'] = 181;
        }elseif( $data['de_peso'] > $pesoTalla->de_ds_3 ){
            $data['id_dg_diag_pt'] = 182;
        }
        
        $row  =& $this->getTable('children', '');
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
        
        return $row->id_evaluacion_nino;
    }
    
    public function removeEvaluacion($evaluacionId) {
        $query = "DELETE FROM evaluacion_nino WHERE id_evaluacion_nino = '$evaluacionId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
    function _date_range_limit($start, $end, $adj, $a, $b, &$result) {
        if ($result[$a] < $start) {
            $result[$b] -= intval(($start - $result[$a] - 1) / $adj) + 1;
            $result[$a] += $adj * intval(($start - $result[$a] - 1) / $adj + 1);
        }

        if ($result[$a] >= $end) {
            $result[$b] += intval($result[$a] / $adj);
            $result[$a] -= $adj * intval($result[$a] / $adj);
        }

        return $result;
    }

    function _date_range_limit_days(&$base, &$result) {
        $days_in_month_leap = array(31, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        $days_in_month = array(31, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

        $this->_date_range_limit(1, 13, 12, "m", "y", $base);

        $year = $base["y"];
        $month = $base["m"];

        if (!$result["invert"]) {
            while ($result["d"] < 0) {
                $month--;
                if ($month < 1) {
                    $month += 12;
                    $year--;
                }

                $leapyear = $year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0);
                $days = $leapyear ? $days_in_month_leap[$month] : $days_in_month[$month];

                $result["d"] += $days;
                $result["m"]--;
            }
        } else {
            while ($result["d"] < 0) {
                $leapyear = $year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0);
                $days = $leapyear ? $days_in_month_leap[$month] : $days_in_month[$month];

                $result["d"] += $days;
                $result["m"]--;

                $month++;
                if ($month > 12) {
                    $month -= 12;
                    $year++;
                }
            }
        }

        return $result;
    }

    function _date_normalize(&$base, &$result) {
        $result = $this->_date_range_limit(0, 60, 60, "s", "i", $result);
        $result = $this->_date_range_limit(0, 60, 60, "i", "h", $result);
        $result = $this->_date_range_limit(0, 24, 24, "h", "d", $result);
        $result = $this->_date_range_limit(0, 12, 12, "m", "y", $result);

        $result = $this->_date_range_limit_days($base, $result);

        $result = $this->_date_range_limit(0, 12, 12, "m", "y", $result);

        return $result;
    }

    /**
     * Accepts two unix timestamps.
     */
    function _date_diff($one, $two) {
        $invert = false;
        if ($one > $two) {
            list($one, $two) = array($two, $one);
            $invert = true;
        }

        $key = array("y", "m", "d", "h", "i", "s");
        $a = array_combine($key, array_map("intval", explode(" ", date("Y m d H i s", $one))));
        $b = array_combine($key, array_map("intval", explode(" ", date("Y m d H i s", $two))));

        $result = array();
        $result["y"] = $b["y"] - $a["y"];
        $result["m"] = $b["m"] - $a["m"];
        $result["d"] = $b["d"] - $a["d"];
        $result["h"] = $b["h"] - $a["h"];
        $result["i"] = $b["i"] - $a["i"];
        $result["s"] = $b["s"] - $a["s"];
        $result["invert"] = $invert ? 1 : 0;
        $result["days"] = intval(abs(($one - $two) / 86400));

        if ($invert) {
            $this->_date_normalize($a, $result);
        } else {
            $this->_date_normalize($b, $result);
        }

        return $result;
    }
    
     public function updateChildEvaluations() {
        $query = "SELECT EN.id_evaluacion_nino, EN.id_actividad, EN.fe_visita, EN.de_peso, EN.de_talla, P.id_entidad, P.fe_nacimiento, P.in_sexo 
                  FROM evaluacion_nino as EN INNER JOIN actividad_entidad as AE ON (EN.id_actividad = AE.id_actividad) INNER JOIN persona as P ON (AE.id_entidad = P.id_entidad)";
        //die($query);
        $this->_db->setQuery($query);
        $objects = $this->_db->loadObjectList();
        $j = 0;
        foreach ($objects as $item) {
            $j += 1;
            $this->calculateIndicators($item);
            echo $j.'<br/>';
        }
    }
    
    public function calculateIndicators($item) {
        $diff = $this->_date_diff( strtotime($item->fe_nacimiento), strtotime($item->fe_visita) );
        $monthsNumber = $diff['y']*12 + $diff['m'];
        //echo $monthsNumber;
        //die();
        
        $jQuery = "SELECT de_ds_2n, de_ds_2 FROM indicador_peso_edad WHERE in_sexo='{$item->in_sexo}' AND nu_mes='{$monthsNumber}'";
        $this->_db->setQuery($jQuery);
        $pesoEdad = $this->_db->loadObject();
        if( $item->de_peso >= $pesoEdad->de_ds_2n && $item->de_peso <= $pesoEdad->de_ds_2 ){
            $id_dg_diag_pe = 172;
        }elseif( $item->de_peso < $pesoEdad->de_ds_2n ){
            $id_dg_diag_pe = 171;
        }elseif( $item->de_peso > $pesoEdad->de_ds_2 ){
            $id_dg_diag_pe = 173;
        }
        
        $jQuery = "SELECT de_ds_3n, de_ds_2n, de_ds_2 FROM indicador_talla_edad WHERE in_sexo='{$item->in_sexo}' AND nu_mes='{$monthsNumber}'";
        $this->_db->setQuery($jQuery);
        $tallaEdad = $this->_db->loadObject();
        if( $item->de_talla < $tallaEdad->de_ds_3n ){
            $id_dg_diag_te = 174;
        }elseif( $item->de_talla >= $tallaEdad->de_ds_3n && $item->de_talla < $tallaEdad->de_ds_2n ){
            $id_dg_diag_te = 175;
        }elseif( $item->de_talla >= $tallaEdad->de_ds_2n && $item->de_talla <= $tallaEdad->de_ds_2 ){
            $id_dg_diag_te = 176;
        }elseif( $item->de_talla > $tallaEdad->de_ds_2 ){
            $id_dg_diag_te = 177;
        }
        
        $jTalla = round($item->de_talla);
        $jQuery = "SELECT de_ds_3n, de_ds_2n, de_ds_2, de_ds_3 FROM indicador_peso_talla WHERE in_sexo='{$item->in_sexo}' AND de_talla='{$jTalla}'";
        $this->_db->setQuery($jQuery);
        $pesoTalla = $this->_db->loadObject();
        if( $item->de_peso < $pesoTalla->de_ds_3n ){
            $id_dg_diag_pt = 178;
        }elseif( $item->de_peso >= $pesoTalla->de_ds_3n && $item->de_peso < $pesoTalla->de_ds_2n ){
            $id_dg_diag_pt = 179;
        }elseif( $item->de_peso >= $pesoTalla->de_ds_2n && $item->de_peso <= $pesoTalla->de_ds_2 ){
            $id_dg_diag_pt = 180;
        }elseif( $item->de_peso > $pesoTalla->de_ds_2 && $item->de_peso <= $pesoTalla->de_ds_3 ){
            $id_dg_diag_pt = 181;
        }elseif( $item->de_peso > $pesoTalla->de_ds_3 ){
            $id_dg_diag_pt = 182;
        }
        
        $jQuery = "UPDATE evaluacion_nino SET id_dg_diag_pe='{$id_dg_diag_pe}', id_dg_diag_te='{$id_dg_diag_te}', id_dg_diag_pt='{$id_dg_diag_pt}' WHERE id_evaluacion_nino='{$item->id_evaluacion_nino}'";
        $this->_db->setQuery($jQuery);
        $this->_db->query();
    }

}
?>
