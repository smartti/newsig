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
<script type="text/javascript">
    function validateInfpai(){
        document.getElementById('task').value = 'saveAction'; 
        document.getElementById('paiForm').submit();
    }
</script>
<form id="paiForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="paiForm">
    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="validateInfpai();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction'; document.getElementById('paiForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('paiForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>
  
    <fieldset>
        <legend>Informe de Pai</legend>
        <fieldset>
            <legend>Informe Mensual</legend>
            <table style="width: 100%;">
                <tr>
                <td>Establecimiento de Salud:</td>
                <td colspan="3">
                    <input class="text_area" style="font-size: 10px;" type="text" name="establec" id="establec" size=100% maxlength="250"  value="<?php echo $this->infpai->establec_name; ?>" />
                    <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->infpai->cod_2000_inf; ?>"/>
                </td>
            </tr>
            <tr>              
                <td colspan="1">Informe ID:</td>
                <td colspan="1">
                    <input class="text_area" type="text" name="id_pai" id="id_pai" size="65" value="<?php echo $this->infpai->id_pai; ?>" />
                </td>
                <td colspan="1">Año:</td>
                <td colspan="1">
                    <input class="text_area" type="text" name="nu_anho" id="nu_anho" size="20" maxlength="250" value="<?php echo $this->infpai->nu_anho; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Mes:</td>
                <td>
                    <input class="text_area" type="text" name="nu_mes" id="nu_mes" size="20" maxlength="250" value="<?php echo $this->infpai->nu_mes; ?>" />
                </td>
                
                <td>Dato 1:</td>
                <td>
                    <input class="text_area" type="text" name="nu_00a" id="nu_00a" size="20" maxlength="250" value="<?php echo $this->infpai->nu_00a; ?>" />
                </td>
            </tr>
                
            </table>
        </fieldset>    
    </fieldset>
    <script type="text/javascript">
        var options = {
            script:"index.php?option=com_nutritions&controller=establec&task=getEstablec&",
            varname:"establecName",
            json:true,
            shownoresults:false,
            maxresults:6,
            callback: function (obj) { document.getElementById('cod_2000').value = obj.id; }
        };
        var as_json = new bsn.AutoSuggest('establec', options);
    </script>
    
    <p>&nbsp;</p>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->infpai->id_pai; ?>" />
    <input type="hidden" name="id_pai" value="<?php echo $this->infpai->id_pai; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="infpai" />
</form>

