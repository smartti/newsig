<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class familias extends JTable
{
    /** @var integer */
    var $id_familia = null;
    /** @var integer */
    var $nu_lote = null;
    /** @var integer */
    var $id_familia_excel = null;
    /** @var String */
    var $tx_apellidos = null;
    /** @var integer */
    var $nu_telf_fijo = null;
    /** @var integer */
    var $id_dg_tipo_vivienda = null;
    /** @var String */
    var $tx_observacion_vivienda = null;
    /** @var integer */
    var $id_dg_material_techo = null;
    /** @var String */
    var $tx_observacion_techo = null;
    /** @var integer */
    var $id_dg_material_paredes = null;
    /** @var String */
    var $tx_observacion_paredes = null;
    /** @var integer */
    var $id_dg_material_piso = null;
    /** @var String */
    var $tx_observacion_piso = null;
    /** @var integer */
    var $id_dg_tipo_alumbrado = null;
    /** @var String */
    var $tx_observacion_tipo_alumbrado = null;
    /** @var integer */
    var $id_dg_abastecimiento_agua = null;
    /** @var String */
    var $tx_observacion_abastecimiento_agua = null;
    /** @var integer */
    var $id_dg_sshh = null;
    /** @var String */
    var $tx_observacion_sshh = null;
    /** @var integer */
    var $id_dg_combustible_cocina = null;
    /** @var String */
    var $tx_observacion_combustible_cocina = null;
    /** @var integer */
    var $id_dg_disposicion_basura = null;
    /** @var String */
    var $tx_observacion_disposicion_basura = null;
    /** @var integer */
    var $un_habitaciones = null;
    /** @var integer */
    var $in_cria_animales = null;
    /** @var integer */
    var $id_ubigeo_salud = null;
    /** @var integer */
    var $id_dg_resultado = null;
    /** @var date */
    var $fe_visita = null;
    /** @var integer */
    var $id_persona_encuestador = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var date */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var date */
    var $fe_modificacion = null;
    /** @var date */
    var $fe_visita1 = null;
    /** @var date */
    var $fe_visita2 = null;
    /** @var integer */
    var $id_dg_resultado2 = null;
    /** @var date */
    var $fe_visita3 = null;
    /** @var integer */
    var $id_dg_resultado3 = null;
    /** @var String */
    var $tx_otro_resultado = null;
    

    function familias(& $db) {
        parent::__construct('familia', 'id_familia', $db);
    }

}

?>
