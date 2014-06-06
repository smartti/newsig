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
<form id="riesgoForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="riesgoForm">
    <fieldset>
        <legend>Riesgo</legend>
        <table>
            <tr>

                <td style="width: 50%;" valign="top">
                    <table>
                        <tr>
                            <td>Riesgo:</td>
                            <td>
                                <?php echo $this->lists['riesgos']; ?>
                                <input class="text_area" type="hidden" name="id_entidad" id="id_entidad" readonly="true" size="25" value="<?php echo $this->riesgo_->id_entidad; ?>" />
                                <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction'; document.getElementById('riesgoForm').submit();"/>
                            </td>
                        </tr>

                    </table>

                </td>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <?php
            $link = JRoute::_('index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]=' . $this->riesgo_->id_entidad);
            ?>
            <tr>
                <td>
                    <a href="<?php echo $link; ?>">Volver</a>
                </td>
            </tr>


        </table>

    </fieldset>    


    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->riesgo_->id_riesgo; ?>" />
    <input type="hidden" name="id_riesgo" value="<?php echo $this->riesgo_->id_riesgo; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="riesgo" />
</form>



