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
<script>
    function validateinforme(){

        document.getElementById('task').value = 'saveAction'; 
        document.getElementById('infgeneralForm').submit();
    }
</script>
<form id="infgeneralForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="infgeneralForm">
    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="validateinforme();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction'; document.getElementById('infgeneralForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('infgeneralForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Informe General</legend>
        <table>
             <tr>
                <td>Establecimiento de Salud:</td>
                <td colspan="3">
                    <input class="text_area" style="font-size: 10px;" type="text" name="establec" id="establec" size=100% maxlength="250"  value="<?php echo $this->infgeneral->establec_name; ?>" />
                    <input type="hidden" name="cod_2000_inf" id="cod_2000_inf" value="<?php echo $this->infgeneral->cod_2000_inf; ?>"/>
                </td>
            </tr>
            <tr>              
                <td>Informe ID:</td>
                <td>
                    <input class="text_area" type="text" name="id_informe_general" id="id_informe_general" readonly="true" size="65" value="<?php echo $this->infgeneral->id_informe_general; ?>" />
                </td>
                <td>Dirección:</td>
                <td>
                    <input class="text_area" type="text" name="tx_direccion" id="tx_direccion" readonly="true" size="20" maxlength="250" value="<?php echo $this->infgeneral->tx_direccion; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Fecha:</td>
                <td>
                       <?php echo JHTML::_('calendar', $this->infgeneral->fe_informe, "fe_informe", "fe_informe", "%d/%m/%Y", array('class'=>'inputbox', 'size'=>'10', 'readonly'=>'true',  'maxlength'=>'10', 'tabindex'=>'5'));  ?>
                </td>
                
                <td>Teléfono:</td>
                <td>
                    <input class="text_area" type="text" name="tx_telefono" id="tx_telefono" readonly="true" size="20" maxlength="250" value="<?php echo $this->infgeneral->tx_telefono; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Director General:</td>
                <td>
                    <input class="text_area" type="text" name="nu_dni_director_general" id="nu_dni_director_general" readonly="true" size="65" value="<?php echo $this->infgeneral->nu_dni_director_general; ?>" />
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>        
                <td>Estadística:</td>
                <td>
                    <input class="text_area" type="text" name="nu_dni_director_estadistica" id="nu_dni_director_estadistica" readonly="true" size="65" value="<?php echo $this->infgeneral->nu_dni_director_estadistica; ?>" />
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
            
            <tr>              
                <td>Indicadores Hospitalarios:</td>
                <td>
                    <input class="text_area" type="text" name="nu_dni_ind_hospital" id="nu_dni_ind_hospital" readonly="true" size="65" value="<?php echo $this->infgeneral->nu_dni_ind_hospital; ?>" />
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>         
        </table>

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
    
    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="task" id="newTask" value="" />
    <input type="hidden" name="controller" value="infgeneral" />
    <input type="hidden" name="informeId" value="<?php echo $this->infgeneral->id_informe_general; ?>" />



</form>
