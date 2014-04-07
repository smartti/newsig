<?php
/**
 * Description of familias
 *
 * @author JuniorSRR
 */
class contacto extends JTable
{
    /** @var integer */
    var $id_contacto = null;
    /** @var integer */
    var $nu_telefono = null;
    /** @var integer */
    var $nu_anexo = null;
    /** @var String */
    var $tx_correo = null;
    
    
    function contacto (& $db) {
        parent::__construct('contacto', 'id_contacto', $db);
    }

}

?>
