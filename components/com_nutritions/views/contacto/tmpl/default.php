<?php defined('_JEXEC') or die('Restricted access'); ?>

<style type="text/css">
    .input-wrapper {
        padding: .2em;
        border: 1px #333 solid;
    }
    .input-wrapper input, .input-wrapper textarea {
        width: 100%;
        margin: 0;
        padding: 0;
        font: inherit;
        color: inherit;
        border: 0;
        background-color: transparent;
    }
</style>
<form id="frmContacto" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmContacto">
<fieldset>
                    <legend>Acciones</legend>
           
                    <input type="button" id="btngrabar" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction'; document.getElementById('frmContacto').submit();"/>
                    <label></label>
                    <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                    <label></label>
                    <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                    <label></label>
                    <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction'; document.getElementById('frmContacto').submit();"/>
             </fieldset>

    <fieldset>
        <legend>Contacto</legend>
        <table>
            <tr>              
                <td>Contacto ID:</td>
                <td>
                    <input class="text_area" type="text" name="id_contacto" id="id_contacto" readonly="true" size="65" value="<?php echo $this->contacto->id_contacto; ?>" />
                </td>
                <td>Teléfono:</td>
                <td>
                    <input class="text_area" type="text" name="nu_telefono" id="nu_telefono" size="20" maxlength="250" value="<?php echo $this->contacto->nu_telefono; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Anexo:</td>
                <td>
                     <input class="text_area" type="text" name="nu_anexo" id="nu_anexo" size="20" maxlength="250" value="<?php echo $this->contacto->nu_anexo; ?>" />
                </td>
                
                <td>Email:</td>
                <td>
                    <input class="text_area" type="text" name="tx_correo" id="tx_correo" size="20" maxlength="250" value="<?php echo $this->contacto->tx_correo; ?>" />
                </td>
            </tr>         
        </table>

    </fieldset>
    
    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->contacto->id_contacto; ?>" />
    <input type="hidden" name="id_contacto" value="<?php echo $this->contacto->id_contacto; ?>" />   
    <input type="hidden" name="task" id="newTask" value="edit" />
    <input type="hidden" name="controller" value="contacto" />

    
    

    


</form>