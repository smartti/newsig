<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();
jimport('joomla.application.component.model');

class NutritionsModelInfindhosp extends JModel
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
                      FROM inf_indhosp ig 
                      LEFT JOIN persona AS p ON (ig.nu_dni = p.tx_nro_documento)
                      INNER JOIN entidad r ON (ig.cod_2000 = r.cod_2000) WHERE ig.id_indhosp=".$this->_id;
            //echo $query;
            $this->_db->setQuery( $query );
            $this->_data = $this->_db->loadObject();
        }
        if (!$this->_data) {                       
            $this->_data = new stdClass();
            $this->_data->id_indhosp = 0;
            $this->_data->nu_dni = null;
            $this->_data->cod_2000 = null;
            $this->_data->nu_ano = null;
            $this->_data->nu_mes = null;
            
            $this->_data->nu_000a = null;
            $this->_data->nu_000b = null;
            $this->_data->nu_000c = null;
            $this->_data->nu_000d = null;
            $this->_data->nu_000e = null;
            $this->_data->nu_000f = null;
            $this->_data->nu_000g = null;
            $this->_data->nu_000h = null;
            $this->_data->nu_000i = null;
            
            $this->_data->nu_001a = null;
            $this->_data->nu_001b = null;
            $this->_data->nu_001c = null;
            $this->_data->nu_001d = null;
            $this->_data->nu_001e = null;
            $this->_data->nu_001f = null;
            $this->_data->nu_001g = null;
            $this->_data->nu_001h = null;
            $this->_data->nu_001i = null;
     
            $this->_data->nu_002a = null;
            $this->_data->nu_002b = null;
            $this->_data->nu_002c = null;
            $this->_data->nu_002d = null;
            $this->_data->nu_002e = null;
            $this->_data->nu_002f = null;
            $this->_data->nu_002g = null;
            $this->_data->nu_002h = null;
            $this->_data->nu_002i = null;            
            
            $this->_data->nu_003a = null;
            $this->_data->nu_003b = null;
            $this->_data->nu_003c = null;
            $this->_data->nu_003d = null;
            $this->_data->nu_003e = null;
            $this->_data->nu_003f = null;
            $this->_data->nu_003g = null;
            $this->_data->nu_003h = null;
            $this->_data->nu_003i = null;            
            
            $this->_data->nu_004a = null;
            $this->_data->nu_004b = null;
            $this->_data->nu_004c = null;
            $this->_data->nu_004d = null;
            $this->_data->nu_004e = null;
            $this->_data->nu_004f = null;
            $this->_data->nu_004g = null;
            $this->_data->nu_004h = null;
            $this->_data->nu_004i = null;
            
            $this->_data->nu_005a = null;
            $this->_data->nu_005b = null;
            $this->_data->nu_005c = null;
            $this->_data->nu_005d = null;
            $this->_data->nu_005e = null;
            $this->_data->nu_005f = null;
            $this->_data->nu_005g = null;
            $this->_data->nu_005h = null;
            $this->_data->nu_005i = null;
            
            $this->_data->nu_006a = null;
            $this->_data->nu_006b = null;
            $this->_data->nu_006c = null;
            $this->_data->nu_006d = null;
            $this->_data->nu_006e = null;
            $this->_data->nu_006f = null;
            $this->_data->nu_006g = null;
            $this->_data->nu_006h = null;
            $this->_data->nu_006i = null;
            
            $this->_data->nu_007a = null;
            $this->_data->nu_007b = null;
            $this->_data->nu_007c = null;
            $this->_data->nu_007d = null;
            $this->_data->nu_007e = null;
            $this->_data->nu_007f = null;
            $this->_data->nu_007g = null;
            $this->_data->nu_007h = null;
            $this->_data->nu_007i = null;
            
            $this->_data->nu_008a = null;
            $this->_data->nu_008b = null;
            $this->_data->nu_008c = null;
            $this->_data->nu_008d = null;
            $this->_data->nu_008e = null;
            $this->_data->nu_008f = null;
            $this->_data->nu_008g = null;
            $this->_data->nu_008h = null;
            $this->_data->nu_008i = null;
            
            $this->_data->nu_009a = null;
            $this->_data->nu_009b = null;
            $this->_data->nu_009c = null;
            $this->_data->nu_009d = null;
            $this->_data->nu_009e = null;
            $this->_data->nu_009f = null;
            $this->_data->nu_009g = null;
            $this->_data->nu_009h = null;
            $this->_data->nu_009i = null;
            
            $this->_data->nu_010a = null;
            $this->_data->nu_010b = null;
            $this->_data->nu_010c = null;
            $this->_data->nu_010d = null;
            $this->_data->nu_010e = null;
            $this->_data->nu_010f = null;
            $this->_data->nu_010g = null;
            $this->_data->nu_010h = null;
            $this->_data->nu_010i = null;
            
            $this->_data->nu_011a = null;
            $this->_data->nu_011b = null;
            $this->_data->nu_011c = null;
            $this->_data->nu_011d = null;
            $this->_data->nu_011e = null;
            $this->_data->nu_011f = null;
            $this->_data->nu_011g = null;
            $this->_data->nu_011h = null;
            $this->_data->nu_011i = null;
     
            $this->_data->nu_012a = null;
            $this->_data->nu_012b = null;
            $this->_data->nu_012c = null;
            $this->_data->nu_012d = null;
            $this->_data->nu_012e = null;
            $this->_data->nu_012f = null;
            $this->_data->nu_012g = null;
            $this->_data->nu_012h = null;
            $this->_data->nu_012i = null;            
            
            $this->_data->nu_013a = null;
            $this->_data->nu_013b = null;
            $this->_data->nu_013c = null;
            $this->_data->nu_013d = null;
            $this->_data->nu_013e = null;
            $this->_data->nu_013f = null;
            $this->_data->nu_013g = null;
            $this->_data->nu_013h = null;
            $this->_data->nu_013i = null;            
            
            $this->_data->nu_014a = null;
            $this->_data->nu_014b = null;
            $this->_data->nu_014c = null;
            $this->_data->nu_014d = null;
            $this->_data->nu_014e = null;
            $this->_data->nu_014f = null;
            $this->_data->nu_014g = null;
            $this->_data->nu_014h = null;
            $this->_data->nu_014i = null;
            
            $this->_data->nu_015a = null;
            $this->_data->nu_015b = null;
            $this->_data->nu_015c = null;
            $this->_data->nu_015d = null;
            $this->_data->nu_015e = null;
            $this->_data->nu_015f = null;
            $this->_data->nu_015g = null;
            $this->_data->nu_015h = null;
            $this->_data->nu_015i = null;
            
            $this->_data->nu_016a = null;
            $this->_data->nu_016b = null;
            $this->_data->nu_016c = null;
            $this->_data->nu_016d = null;
            $this->_data->nu_016e = null;
            $this->_data->nu_016f = null;
            $this->_data->nu_016g = null;
            $this->_data->nu_016h = null;
            $this->_data->nu_016i = null;
            
            $this->_data->nu_017a = null;
            $this->_data->nu_017b = null;
            $this->_data->nu_017c = null;
            $this->_data->nu_017d = null;
            $this->_data->nu_017e = null;
            $this->_data->nu_017f = null;
            $this->_data->nu_017g = null;
            $this->_data->nu_017h = null;
            $this->_data->nu_017i = null;
            
            $this->_data->nu_018a = null;
            $this->_data->nu_018b = null;
            $this->_data->nu_018c = null;
            $this->_data->nu_018d = null;
            $this->_data->nu_018e = null;
            $this->_data->nu_018f = null;
            $this->_data->nu_018g = null;
            $this->_data->nu_018h = null;
            $this->_data->nu_018i = null;
            
            $this->_data->nu_019a = null;
            $this->_data->nu_019b = null;
            $this->_data->nu_019c = null;
            $this->_data->nu_019d = null;
            $this->_data->nu_019e = null;
            $this->_data->nu_019f = null;
            $this->_data->nu_019g = null;
            $this->_data->nu_019h = null;
            $this->_data->nu_019i = null;
            
            $this->_data->nu_020a = null;
            $this->_data->nu_020b = null;
            $this->_data->nu_020c = null;
            $this->_data->nu_020d = null;
            $this->_data->nu_020e = null;
            $this->_data->nu_020f = null;
            $this->_data->nu_020g = null;
            $this->_data->nu_020h = null;
            $this->_data->nu_020i = null;
            
            $this->_data->nu_021a = null;
            $this->_data->nu_021b = null;
            $this->_data->nu_021c = null;
            $this->_data->nu_021d = null;
            $this->_data->nu_021e = null;
            $this->_data->nu_021f = null;
            $this->_data->nu_021g = null;
            $this->_data->nu_021h = null;
            $this->_data->nu_021i = null;
     
            $this->_data->nu_022a = null;
            $this->_data->nu_022b = null;
            $this->_data->nu_022c = null;
            $this->_data->nu_022d = null;
            $this->_data->nu_022e = null;
            $this->_data->nu_022f = null;
            $this->_data->nu_022g = null;
            $this->_data->nu_022h = null;
            $this->_data->nu_022i = null;            
            
            $this->_data->nu_023a = null;
            $this->_data->nu_023b = null;
            $this->_data->nu_023c = null;
            $this->_data->nu_023d = null;
            $this->_data->nu_023e = null;
            $this->_data->nu_023f = null;
            $this->_data->nu_023g = null;
            $this->_data->nu_023h = null;
            $this->_data->nu_023i = null;            
            
            $this->_data->nu_024a = null;
            $this->_data->nu_024b = null;
            $this->_data->nu_024c = null;
            $this->_data->nu_024d = null;
            $this->_data->nu_024e = null;
            $this->_data->nu_024f = null;
            $this->_data->nu_024g = null;
            $this->_data->nu_024h = null;
            $this->_data->nu_024i = null;
            
            $this->_data->nu_025a = null;
            $this->_data->nu_025b = null;
            $this->_data->nu_025c = null;
            $this->_data->nu_025d = null;
            $this->_data->nu_025e = null;
            $this->_data->nu_025f = null;
            $this->_data->nu_025g = null;
            $this->_data->nu_025h = null;
            $this->_data->nu_025i = null;
            
            $this->_data->nu_026a = null;
            $this->_data->nu_026b = null;
            $this->_data->nu_026c = null;
            $this->_data->nu_026d = null;
            $this->_data->nu_026e = null;
            $this->_data->nu_026f = null;
            $this->_data->nu_026g = null;
            $this->_data->nu_026h = null;
            $this->_data->nu_026i = null;
            
            $this->_data->nu_027a = null;
            $this->_data->nu_027b = null;
            $this->_data->nu_027c = null;
            $this->_data->nu_027d = null;
            $this->_data->nu_027e = null;
            $this->_data->nu_027f = null;
            $this->_data->nu_027g = null;
            $this->_data->nu_027h = null;
            #$this->_data->nu_027i = null;
            
            $this->_data->nu_028a = null;
            $this->_data->nu_028b = null;
            $this->_data->nu_028c = null;
            $this->_data->nu_028d = null;
            $this->_data->nu_028e = null;
            $this->_data->nu_028f = null;
            $this->_data->nu_028g = null;
            $this->_data->nu_028h = null;
            #$this->_data->nu_028i = null;
            
            $this->_data->nu_029a = null;
            $this->_data->nu_029b = null;
            $this->_data->nu_029c = null;
            $this->_data->nu_029d = null;
            $this->_data->nu_029e = null;
            $this->_data->nu_029f = null;
            $this->_data->nu_029g = null;
            $this->_data->nu_029h = null;
            #$this->_data->nu_029i = null;
            
            $this->_data->nu_030a = null;
            $this->_data->nu_030b = null;
            $this->_data->nu_030c = null;
            $this->_data->nu_030d = null;
            $this->_data->nu_030e = null;
            $this->_data->nu_030f = null;
            $this->_data->nu_030g = null;
            $this->_data->nu_030h = null;
            #$this->_data->nu_030i = null;
            
            $this->_data->nu_031a = null;
            $this->_data->nu_031b = null;
            $this->_data->nu_031c = null;
            $this->_data->nu_031d = null;
            $this->_data->nu_031e = null;
            $this->_data->nu_031f = null;
            $this->_data->nu_031g = null;
            $this->_data->nu_031h = null;
            #$this->_data->nu_031i = null;
     
            $this->_data->nu_032a = null;
            $this->_data->nu_032b = null;
            $this->_data->nu_032c = null;
            $this->_data->nu_032d = null;
            $this->_data->nu_032e = null;
            $this->_data->nu_032f = null;
            $this->_data->nu_032g = null;
            $this->_data->nu_032h = null;
            #$this->_data->nu_032i = null;            
            
            $this->_data->nu_033a = null;
            $this->_data->nu_033b = null;
            $this->_data->nu_033c = null;
            $this->_data->nu_033d = null;
            $this->_data->nu_033e = null;
            $this->_data->nu_033f = null;
            $this->_data->nu_033g = null;
            $this->_data->nu_033h = null;
            #$this->_data->nu_033i = null;            
            
            $this->_data->nu_034a = null;
            $this->_data->nu_034b = null;
            $this->_data->nu_034c = null;
            $this->_data->nu_034d = null;
            $this->_data->nu_034e = null;
            $this->_data->nu_034f = null;
            $this->_data->nu_034g = null;
            $this->_data->nu_034h = null;
            #$this->_data->nu_034i = null;
            
            $this->_data->nu_035a = null;
            $this->_data->nu_035b = null;
            $this->_data->nu_035c = null;
            $this->_data->nu_035d = null;
            $this->_data->nu_035e = null;
            $this->_data->nu_035f = null;
            $this->_data->nu_035g = null;
            $this->_data->nu_035h = null;
            #$this->_data->nu_035i = null;
            
            $this->_data->nu_036a = null;
            $this->_data->nu_036b = null;
            $this->_data->nu_036c = null;
            $this->_data->nu_036d = null;
            $this->_data->nu_036e = null;
            $this->_data->nu_036f = null;
            $this->_data->nu_036g = null;
            $this->_data->nu_036h = null;
            #$this->_data->nu_036i = null;
            
            $this->_data->nu_037a = null;
            $this->_data->nu_037b = null;
            $this->_data->nu_037c = null;
            $this->_data->nu_037d = null;
            $this->_data->nu_037e = null;
            $this->_data->nu_037f = null;
            $this->_data->nu_037g = null;
            $this->_data->nu_037h = null;
            #$this->_data->nu_037i = null;
            
            $this->_data->nu_038a = null;
            $this->_data->nu_038b = null;
            $this->_data->nu_038c = null;
            $this->_data->nu_038d = null;
            $this->_data->nu_038e = null;
            $this->_data->nu_038f = null;
            $this->_data->nu_038g = null;
            $this->_data->nu_038h = null;
            #$this->_data->nu_038i = null;
            
            $this->_data->nu_039a = null;
            $this->_data->nu_039b = null;
            $this->_data->nu_039c = null;
            $this->_data->nu_039d = null;
            $this->_data->nu_039e = null;
            $this->_data->nu_039f = null;
            $this->_data->nu_039g = null;
            $this->_data->nu_039h = null;
            #$this->_data->nu_039i = null;
            
            $this->_data->nu_040a = null;
            $this->_data->nu_040b = null;
            $this->_data->nu_040c = null;
            $this->_data->nu_040d = null;
            $this->_data->nu_040e = null;
            $this->_data->nu_040f = null;
            $this->_data->nu_040g = null;
            $this->_data->nu_040h = null;
            #$this->_data->nu_040i = null;
            
            $this->_data->nu_041a = null;
            $this->_data->nu_041b = null;
            $this->_data->nu_041c = null;
            $this->_data->nu_041d = null;
            $this->_data->nu_041e = null;
            $this->_data->nu_041f = null;
            $this->_data->nu_041g = null;
            $this->_data->nu_041h = null;
            #$this->_data->nu_041i = null;
     
            $this->_data->nu_042a = null;
            $this->_data->nu_042b = null;
            $this->_data->nu_042c = null;
            $this->_data->nu_042d = null;
            $this->_data->nu_042e = null;
            $this->_data->nu_042f = null;
            $this->_data->nu_042g = null;
            $this->_data->nu_042h = null;
            #$this->_data->nu_042i = null;            
            
            $this->_data->nu_043a = null;
            $this->_data->nu_043b = null;
            $this->_data->nu_043c = null;
            $this->_data->nu_043d = null;
            $this->_data->nu_043e = null;
            $this->_data->nu_043f = null;
            $this->_data->nu_043g = null;
            $this->_data->nu_043h = null;
            #$this->_data->nu_043i = null;            
            
            $this->_data->nu_044a = null;
            $this->_data->nu_044b = null;
            $this->_data->nu_044c = null;
            $this->_data->nu_044d = null;
            #$this->_data->nu_044e = null;
            #$this->_data->nu_044f = null;
            #$this->_data->nu_044g = null;
            #$this->_data->nu_044h = null;
            #$this->_data->nu_044i = null;
            
            $this->_data->desc_estab = null;           
            $this->_data->establec_name=NULL;
            
            $this->_data->encuestador_name = NULL;
        }
        return $this->_data;
    }

    public function store($data)
    {
        $row  =& $this->getTable('informeindhosp', '');
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
        return $row->id_indhosp;
    }
    
    public function getDetalleGeneral($idGeneral, $defaultId) {
        $query = "SELECT id_detalle_general as value, tx_descripcion as text FROM detalle_general WHERE id_general = '$idGeneral' AND id_detalle_general != '$defaultId' ";
        $this->_db->setQuery($query);
        $resultado = $this->_db->loadObjectList();
        return $resultado;
    }
    
    public function removeInfindhosp($infindhospId) {
        $query = "DELETE FROM inf_indhosp WHERE id_indhosp = '$infindhospId'";
        $this->_db->setQuery($query);
        $this->_db->query();
    }
    
}
?>
