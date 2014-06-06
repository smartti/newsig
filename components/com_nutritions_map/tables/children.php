<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class children extends JTable
{
    /** @var integer */
    var $id_evaluacion_nino = null;
    /** @var integer */
    var $id_actividad = null;
    /** @var datetime */
    var $fe_visita = null;
    /** @var integer */
    var $in_diarrea = null;
    /** @var integer */
    var $in_resfrio = null;
    /** @var decimal */
    var $de_peso = null;
    /** @var decimal */
    var $de_talla = null;
    /** @var decimal */
    var $nu_hemoglobina = null;
    /** @var integer */
    var $id_dg_diag_pe = null;
    /** @var integer */
    var $id_dg_diag_te = null;
    /** @var integer */
    var $id_dg_diag_pt = null;
    /** @var integer */
    var $id_dg_diag_pe_calc = null;
    /** @var integer */
    var $id_dg_diag_te_calc = null;
    /** @var integer */
    var $id_dg_diag_pt_calc = null;
    /** @var integer */
    var $nu_ali_animal_sem = null;
    /** @var integer */
    var $nu_ali_animal_dia = null;
    /** @var integer */
    var $nu_ali_vege_sem = null;
    /** @var integer */
    var $nu_ali_vege_dia = null;
    /** @var integer */
    var $nu_ali_ener_sem = null;
    /** @var integer */
    var $nu_ali_ener_dia = null;
    /** @var integer */
    var $nu_ali_fru_ver_sem = null;
    /** @var integer */
    var $nu_ali_fru_ver_dia = null;
    /** @var integer */
    var $in_consume_agua_segura = null;
    /** @var integer */
    var $in_eda = null;
    /** @var integer */
    var $in_ira = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var date */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var date */
    var $fe_modificacion = null;

    function children(& $db) {
        parent::__construct('evaluacion_nino', 'id_evaluacion_nino', $db);
    }

}

?>
