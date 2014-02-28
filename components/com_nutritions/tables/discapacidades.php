<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class discapacidades extends JTable
{
    /** @var integer */
    var $id_discapacidad = null;
    /** @var integer */
    var $id_entidad = null;
    /** @var integer */
    var $id_dg_discapacidad = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var DateTime */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var DateTime */
    var $fe_modificacion = null;
    

    function discapacidades(& $db) {
        parent::__construct('discapacidad', 'id_discapacidad', $db);
    }

}

?>
