<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class personas extends JTable
{
    /** @var integer */
    var $id_entidad = null;
    /** @var integer */
    var $nu_lote = null;
    /** @var integer */
    var $id_familia_excel = null;
    /** @var integer */
    var $cod_2000 = null;
    /** @var String */
    var $tx_nombres = null;
    /** @var String */
    var $tx_apellido_paterno = null;
    /** @var String */
    var $tx_apellido_materno = null;
    /** @var integer */
    var $estado_laboral = null;
    /** @var String */
    var $tx_nro_seguro = null;
    /** @var integer */
    var $id_dg_tipo_documento = null;
    /** @var String */
    var $tx_hcl = null;
    /** @var integer */
    var $nu_tiempo_eess = null;
    /** @var integer */
    var $id_dg_operador_telf = null;
    /** @var String */
    var $tx_telf_cel = null;
    /** @var String */
    var $tx_nro_documento = null;
    /** @var integer */
    var $id_dg_seguro_salud = null;
    /** @var date */
    var $fe_nacimiento;
    /** @var integer */
    var $in_sexo = null;
    /** @var integer */
    var $id_dg_edu_nivel = null;
    /** @var integer */
    var $id_dg_edu_anho = null;
     /** @var integer */
    var $id_dg_lengua_habitual = null;
    /** @var integer */
    var $in_sabe_leer_escribir = null;
    /** @var integer */
    var $id_dg_ocupacion = null;
    /** @var integer */
    var $id_organizacion = null;
    /** @var integer */
    var $id_dg_estado_civil = null;
    /** @var integer */
    var $id_dg_tipo_persona = null;
    /** @var integer */
    var $id_familia = null;
    /** @var integer */
    var $id_dg_parentesco = null;
    /** @var integer */
    var $in_vaso_leche = null;
    /** @var integer */
    var $in_comedor_popular = null;
    /** @var integer */
    var $in_desayuno_almuerzo_escolar = null;
    /** @var integer */
    var $in_papilla_yapita = null;
    /** @var integer */
    var $in_canasta_alimentaria = null;
    /** @var integer */
    var $in_cuna_mas = null;
    /** @var integer */
    var $in_juntos = null;
    /** @var integer */
    var $in_techo_propio = null;
    /** @var integer */
    var $in_otros = null;
    /** @var integer */
    var $in_ninguno = null;
    /** @var String */
    var $tx_email = null;
    /** @var String */
    var $tx_fono_fijo = null;
    /** @var String */
    var $tx_cel_claro_gen = null;
    /** @var String */
    var $tx_cel_claro_rpc = null;
    /** @var String */
    var $tx_cel_mov_gen = null;
    /** @var String */
    var $tx_cel_mov_rpm = null;
    /** @var String */
    var $tx_observacion = null;
    /** @var integer */
    var $in_eliminado = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var date */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var datetime */
    var $fe_modificacion = null;

    function personas(& $db) {
        parent::__construct('persona', 'id_entidad', $db);
    }

}

?>
