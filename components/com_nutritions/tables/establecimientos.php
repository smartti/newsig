<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class establecimientos extends JTable
{
    /** @var integer */
    var $cod_2000 = null;
    /** @var integer */
    var $cod_estab = null;
    /** @var integer */
    var $desc_estab = null;
    /** @var String */
    var $tipoestab = null;
    /** @var integer */
    var $cod_dpto = null;
    /** @var integer */
    var $cod_prov = null;
    /** @var String */
    var $cod_dist = null;
    /** @var integer */
    var $cod_disa = null;
    /** @var String */
    var $cod_red = null;
    /** @var integer */
    var $cod_mic = null;
    /** @var String */
    var $clas = null;
    /** @var integer */
    var $estado = null;

  

    function establecimientos(& $db) {
        parent::__construct('establec', 'cod_2000', $db);
    }

}

?>
