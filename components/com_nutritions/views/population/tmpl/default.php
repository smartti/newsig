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
<form id="frmPop" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmPop">
        <div>
             <fieldset>
                    <legend>Acciones</legend>
                    <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction'; document.getElementById('frmPop').submit();"/>
                    <label></label>
                    <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                    <label></label>
                    <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                    <label></label>
                    <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction'; document.getElementById('frmPop').submit();"/>
             </fieldset>
             
        </div>
        <div>   
                         <table>
                            <tr>                                
                                <td style="font-size: 12px;"><?php echo $this->lists['resultado_anho']; ?></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input class="text" maxlength="6" type="text" name="id_ubigeo" id="id_ubigeo" value="<?php echo $this->population->id_ubigeo; ?>"/></td>
                                <td><input class="text" maxlength="3" type="text" name="nu_total" id="nu_total" value="<?php echo $this->population->nu_total; ?>"/></td>
                                <td><input class="text" maxlength="3" type="text" name="nu_men_5a" id="nu_men_5a" value="<?php echo $this->population->nu_men_5a; ?>"/></td>                          
                            </tr>
                        </table>          
         </div>    
    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->population->id_pop; ?>" />
    <input type="hidden" name="id_pop" value="<?php echo $this->population->id_pop; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="population" />
</form>
