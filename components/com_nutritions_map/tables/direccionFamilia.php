<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of direccionFamilia
 *
 * @author JuniorSRR
 */
class direccionFamilia extends JTable {
    /** @var integer */
    var $id_direccion_familia = null;
    /** @var integer */
    var $id_familia = null;
    /** @var integer */
    var $id_ubigeo = null;
    /** @var String */
    var $tx_centro_poblado = null;
    /** @var integer */
    var $id_dg_cate_centro_poblado = null;
    /** @var String */
    var $tx_nucleo_urbano = null;
    /** @var integer */
    var $id_dg_cate_nucleo_urbano = null;
    /** @var String */
    var $tx_sector = null;
    /** @var String */
    var $tx_direccion = null;
    /** @var String */
    var $tx_referencia = null;
    /** @var String */
    var $tx_zona = null;
    /** @var String */
    var $tx_manzana = null;
    /** @var integer */
    var $un_vivienda = null;
    /** @var integer */
    var $un_hogares = null;
    /** @var integer */
    var $un_hogar = null;
    /** @var integer */
    var $un_hogar_de = null;
    /** @var integer */
    var $id_dg_via = null;
    /** @var String */
    var $tx_nombre_via = null;
    /** @var integer */
    var $un_puerta = null;
    /** @var integer */
    var $un_puerta_anexo = null;
    /** @var integer */
    var $un_interior = null;
    /** @var integer */
    var $un_piso = null;
    /** @var String */
    var $tx_manzana_nucleo = null;
    /** @var String */
    var $tx_lote = null;
    /** @var integer */
    var $un_km = null;
    /** @var String */
    var $un_latitud = null;
    /** @var String */
    var $un_longitud = null;
    /** @var String */
    var $un_altitud = null;
    /** @var String */
    var $tx_usuario_creacion = null;
    /** @var date */
    var $fe_creacion = null;
    /** @var String */
    var $tx_usuario_modificacion = null;
    /** @var date */
    var $fe_modificacion = null;

    function direccionFamilia(& $db) {
        parent::__construct('direccion_familia', 'id_direccion_familia', $db);
    }
}

?>
