<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class riesgos extends JTable
{
    /** @var integer */
    var $id_riesgo = null;
    /** @var integer */
    var $id_entidad = null;
    /** @var integer */
    var $id_dg_riesgo = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var DateTime */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var DateTime */
    var $fe_modificacion = null;
    

    function riesgos(& $db) {
        parent::__construct('riesgo', 'id_riesgo', $db);
    }

}

?>
