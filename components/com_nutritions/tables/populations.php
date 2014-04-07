<?php

class populations extends JTable {

    /** @var integer*/
    var $id_pop = null;
    /** @var integer*/
    var $id_dg_anho = null;
    /** @var String*/
    var $id_ubigeo = null;
    /** @var integer*/
    var $nu_total = null;
    /** @var integer*/
    var $nu_men_5a = null;    
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var DateTime */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var DateTime */
    var $fe_modificacion = null;    
    
    function populations(& $db) {
        parent::__construct('population', 'id_pop', $db);
    }
}

?>
