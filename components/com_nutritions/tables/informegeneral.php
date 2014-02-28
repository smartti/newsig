<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class informegeneral extends JTable
{
    /** @var integer */
    var $id_informe_general = null;
    /** @var integer */
    var $cod_2000_inf = null;
    /** @var date */
    var $fe_informe = null;
    /** @var integer */
    var $tx_direccion = null;
    /** @var String */
    var $tx_telefono = null;
    /** @var integer */
    var $tx_fax = null;
    /** @var integer */
    var $nu_dni_dir_general = null;
    /** @var integer */
    var $nu_dni_dir_estadistica = null;
    /** @var integer */
    var $nu_dni_dir_ind_hospital = null;
        /** @var integer */
    var $in_vigente = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var date */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var datetime */
    var $fe_modificacion = null;
    

    function informegeneral(& $db) {
        parent::__construct('inf_general', 'id_informe_general', $db);
    }

}

?>
