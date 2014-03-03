<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class informepai extends JTable
{
    /** @var integer */
    var $id_pai = null;
    /** @var integer */
    var $cod_2000 = null;
        
    var $nu_anho = null;
    
    var $nu_mes = null;
    
    var $nu_00a = null;    

    function informepai(& $db) {        
        parent::__construct('inf_pai', 'id_pai', $db);
    }

}

?>
