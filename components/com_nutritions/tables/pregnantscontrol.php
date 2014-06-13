<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class pregnantscontrol extends JTable
{
    /** @var integer */
    var $id_evaluacion_gestante_control = null;
    /** @var integer */
    var $id_evaluacion_gestante = null;
    /** @var datetime */
    var $fe_visita = null;
    /** @var decimal */
    var $de_peso_habitual = null;
    /** @var integer */
    var $nu_edad_gestacional = null;
    /** @var decimal */
    var $de_peso_actual = null;
    /** @var decimal */
    var $nu_hemoglobina = null;
    /** @var integer */
    var $id_dg_imc_pg = null;
    /** @var integer */
    var $id_dg_ganancia_peso = null;
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
    var $in_tipo_parto = null;
    /** @var integer */
    var $id_dg_lugar_parto = null;
    /** @var date */
    var $fe_parto = null;
    /** @var integer */
    var $id_ubigeo_parto = null;
    /** @var integer */
    var $cod_2000_parto = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var date */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var date */
    var $fe_modificacion = null;

    function pregnantscontrol(& $db) {
        parent::__construct('evaluacion_gestante_control', 'id_evaluacion_gestante_control', $db);
    }

}

?>
