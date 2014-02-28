<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class actividades extends JTable
{
    /** @var integer */
    var $id_actividad = null;
    /** @var integer */
    var $id_titulo = null;
    /** @var integer */
    var $tx_usuario_creacion = null;
    /** @var String */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var DateTime */
    var $fe_modificacion = null;
    

    function actividades(& $db) {
        parent::__construct('actividad', 'id_actividad', $db);
    }

}

?>
