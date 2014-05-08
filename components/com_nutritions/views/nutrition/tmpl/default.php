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
    function validateFamilyAddress(){
        var departamento = document.getElementById('filter_departamento');
        var provincia = document.getElementById('filter_provincia');
        var distrito = document.getElementById('filter_distrito');
        
        var departamentoValue = departamento.options[departamento.selectedIndex].value;
        var provinciaValue = departamento.options[provincia.selectedIndex].value;
        var distritoValue = departamento.options[distrito.selectedIndex].value;
        if( departamentoValue === '0' || provinciaValue === '0' || distritoValue === '0' ){
            alert('Por favor seleccione Departamento, Provincia y Distrito antes de proseguir!');
            return false;
        }
        document.getElementById('task').value = 'saveAction'; 
        document.getElementById('adminForm').submit();
    }
</script>
<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">
    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="validateFamilyAddress();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction'; document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('adminForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>
 
               
    <fieldset>
        <legend>Direccion de la Familia</legend>
        <table>
            <tr>              
                <td>Departamento:</td>
                <td>
                    <?php echo $this->lists['Departamentos']; ?>
                </td>
                <td>Codigo:</td>
                <td>
                    <input class="text_area" type="text" name="id_ubigeo" id="id_ubigeo" readonly="true" size="20" maxlength="250" value="<?php echo $this->familia->id_ubigeo; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Provincia:</td>
                <td>
                    <?php echo $this->lists['Provincias']; ?>
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>              
                <td>Distrito:</td>
                <td>
                    <?php echo $this->lists['Distritos']; ?>
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>              
                <td>Centro Poblado:</td>
                <td>
                    <input class="text_area" type="text" name="tx_centro_poblado" id="tx_centro_poblado" size="25" maxlength="250" value="<?php echo $this->familia->tx_centro_poblado; ?>" />
                </td>
                <td>Sector:</td>
                <td>
                    <input class="text_area" type="text" name="tx_sector" id="tx_sector" size="25" maxlength="250" value="<?php echo $this->familia->tx_sector; ?>" />
                </td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td  colspan="3">
                    <input class="text_area" type="text" name="tx_direccion" id="tx_direccion" size="84" maxlength="250" value="<?php echo $this->familia->tx_direccion; ?>" />
                </td>
            </tr>
            <tr>
                <td>Referencia:</td>
                <td  colspan="3">
                    <input class="text_area" type="text" name="tx_referencia" id="tx_referencia" size="84" maxlength="250" value="<?php echo $this->familia->tx_referencia; ?>" />
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Ubicacion Georeferencial</legend>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>
                        Latitud
                    </th>
                    <th>
                        Longitud
                    </th>
                    <th>
                        Altitud
                    </th>
                </tr>
            </thead>
            <tr>              
                <td>
                    <input class="text_area" type="text" name="un_latitud" id="un_latitud" size="18" maxlength="18" value="<?php echo $this->familia->un_latitud; ?>" />
                </td>
                <td>
                    <input class="text_area" type="text" name="un_longitud" id="un_longitud" size="18" maxlength="18" value="<?php echo $this->familia->un_longitud; ?>" />
                </td>
                <td>
                    <input class="text_area" type="text" name="un_altitud" id="un_altitud" size="4" maxlength="4" value="<?php echo $this->familia->un_altitud; ?>" /> msnm.
                </td>
            </tr>

        </table>
    </fieldset>
    <fieldset>
        <legend>Datos de la Familia</legend>
        <table>
            <tr>              
                <td>Apellidos:</td>
                <td>
                    <input class="text_area" type="text" name="tx_apellidos" id="tx_apellidos" size="25" maxlength="250" value="<?php echo $this->familia->tx_apellidos; ?>" />
                </td>
                <td>N. Integrantes:</td>
                <td>
                    <input class="text_area" type="text" name="numero_integrantes" id="numero_integrantes" size="25" disabled="true" maxlength="250" value="<?php echo $this->familia->numero_integrantes; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Poblacion Objetivo:</td>
                <td>
                    <input class="text_area" type="text" name="poblacion_objetivo" id="poblacion_objetivo" disabled="true" size="25" maxlength="250" value="" />
                </td>
                <td>Poblacion Riesgo:</td>
                <td>
                    <input class="text_area" type="text" name="poblacion_riesgo" id="poblacion_riesgo" disabled="true" size="25" maxlength="250" value="" />
                </td>
            </tr>
            <tr>              
                <td>Teléfono Fijo:</td>
                <td>
                    <input class="text_area" type="text" name="nu_telf_fijo" id="nu_telf_fijo" size="18" maxlength="18" value="<?php echo $this->familia->nu_telf_fijo; ?>" />
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>

        <fieldset>
            <legend>Entrevista</legend>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th>
                            Nro.
                        </th>
                        <th>
                            Fecha
                        </th>
                        <th>
                            Resultado
                        </th>
                    </tr>
                </thead>
                <tr>              
                    <td>Primera:</td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->familia->fe_visita1, "fe_visita1", "fe_visita1", '%d/%m/%Y', array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    </td>
                    <td style="width: 50%;"><?php echo $this->lists['resultado_visita_1'] ?></td>
                </tr>
                <tr>              
                    <td>Segunda:</td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->familia->fe_visita2, "fe_visita2", "fe_visita2", '%d/%m/%Y', array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    </td>
                    <td style="width: 50%;"><?php echo $this->lists['resultado_visita_2'] ?></td>
                </tr>
                <tr>              
                    <td>Tercera:</td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->familia->fe_visita3, "fe_visita3", "fe_visita3", '%d/%m/%Y', array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10')); ?>
                    </td>
                    <td style="width: 50%;"><?php echo $this->lists['resultado_visita_3'] ?></td>
                </tr>
                <tr>              
                    <td>Encuestador:</td>
                    <td colspan="2">
                        <input class="text_area" type="text" name="encuestador" id="encuestador" size="60" maxlength="250" value="<?php echo $this->familia->encuestador_name; ?>" />
                        <input type="hidden" name="id_persona_encuestador" id="id_persona_encuestador" value="<?php echo $this->familia->id_persona_encuestador; ?>"/>
                    </td>
                </tr>
                
            </table>
        </fieldset>    
    </fieldset>
    <script type="text/javascript">
        var options = {
            script:"index.php?option=com_nutritions&controller=person&task=getEncuestador&",
            varname:"encuestadorName",
            json:true,
            shownoresults:false,
            maxresults:6,
            callback: function (obj) { document.getElementById('id_persona_encuestador').value = obj.id; }
        };
        var as_json = new bsn.AutoSuggest('encuestador', options);
    </script>
    <p>&nbsp;</p>
    <?php
    $pane = & JPane::getInstance('tabs', array('startOffset' => 0));
    echo $pane->startPane('pane');
    echo $pane->startPanel('Material', 'panel1');
    ?>
    <ol type="1">
        <li>Tipo de vivienda<br/>
            <input type="radio" id="firstQuestion1" name="id_dg_tipo_vivienda" value="31" <?php echo ($this->familia->id_dg_tipo_vivienda == '31') ? 'checked' : ''; ?> /> <label for="firstQuestion1">¿Casa independiente?</label><br/>
            <input type="radio" id="firstQuestion2" name="id_dg_tipo_vivienda" value="32" <?php echo ($this->familia->id_dg_tipo_vivienda == '32') ? 'checked' : ''; ?>/> <label for="firstQuestion2">¿Departamento en edificio?</label><br/>
            <input type="radio" id="firstQuestion3" name="id_dg_tipo_vivienda" value="33" <?php echo ($this->familia->id_dg_tipo_vivienda == '33') ? 'checked' : ''; ?>/> <label for="firstQuestion3">¿Vivienda en quinta?</label><br/>
            <input type="radio" id="firstQuestion4" name="id_dg_tipo_vivienda" value="34" <?php echo ($this->familia->id_dg_tipo_vivienda == '34') ? 'checked' : ''; ?>/> <label for="firstQuestion4">¿Vivienda en casa vecindad?</label><br/>
            <input type="radio" id="firstQuestion5" name="id_dg_tipo_vivienda" value="35" <?php echo ($this->familia->id_dg_tipo_vivienda == '35') ? 'checked' : ''; ?>/> <label for="firstQuestion5">¿Choza o cabana?</label><br/>
            <input type="radio" id="firstQuestion6" name="id_dg_tipo_vivienda" value="36" <?php echo ($this->familia->id_dg_tipo_vivienda == '36') ? 'checked' : ''; ?>/> <label for="firstQuestion6">¿Vivienda improvisada?</label><br/>
            <input type="radio" id="firstQuestion7" name="id_dg_tipo_vivienda" value="37" <?php echo ($this->familia->id_dg_tipo_vivienda == '37') ? 'checked' : ''; ?>/> <label for="firstQuestion7">¿Local no destinado parahabitación humana?</label><br/>   
            Otros: <input class="text_area" type="text" name="tx_observacion_vivienda" id="tx_observacion_vivienda" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_vivienda; ?>" /><br/>&nbsp;<br/>
        </li>

        <li>El material predominante en el techo es:<br/>
            <input type="radio" id="secondQuestion1" name="id_dg_material_techo" value="38" <?php echo ($this->familia->id_dg_material_techo == '38') ? 'checked' : ''; ?>/> <label for="secondQuestion1">¿Concreto armado?</label><br/>
            <input type="radio" id="secondQuestion2" name="id_dg_material_techo" value="39" <?php echo ($this->familia->id_dg_material_techo == '39') ? 'checked' : ''; ?>/> <label for="secondQuestion2">¿Madera?</label><br/>
            <input type="radio" id="secondQuestion3" name="id_dg_material_techo" value="40" <?php echo ($this->familia->id_dg_material_techo == '40') ? 'checked' : ''; ?>/> <label for="secondQuestion3">¿Tejas?</label><br/>
            <input type="radio" id="secondQuestion4" name="id_dg_material_techo" value="41" <?php echo ($this->familia->id_dg_material_techo == '41') ? 'checked' : ''; ?>/> <label for="secondQuestion4">¿Calamina/ethernit o similar?</label><br/>
            <input type="radio" id="secondQuestion5" name="id_dg_material_techo" value="42" <?php echo ($this->familia->id_dg_material_techo == '42') ? 'checked' : ''; ?>/> <label for="secondQuestion5">¿Can/estera con torta de barro?</label><br/>
            <input type="radio" id="secondQuestion6" name="id_dg_material_techo" value="43" <?php echo ($this->familia->id_dg_material_techo == '43') ? 'checked' : ''; ?>/> <label for="secondQuestion6">¿Estera?</label><br/>
            <input type="radio" id="secondQuestion7" name="id_dg_material_techo" value="44" <?php echo ($this->familia->id_dg_material_techo == '44') ? 'checked' : ''; ?>/> <label for="secondQuestion7">¿Paja,hojas de palmera?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_techo" id="tx_observacion_techo" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_techo; ?>" /><br/>&nbsp;<br/>
        </li>

        <li>El material predominante en las paredes exteriores es:<br/>
            <input type="radio" id="thirdQuestion1" name="id_dg_material_paredes" value="45" <?php echo ($this->familia->id_dg_material_paredes == '45') ? 'checked' : ''; ?>/> <label for="thirdQuestion1">¿Ladrillo o bloque de cemento?</label><br/>
            <input type="radio" id="thirdQuestion2" name="id_dg_material_paredes" value="46" <?php echo ($this->familia->id_dg_material_paredes == '46') ? 'checked' : ''; ?>/> <label for="thirdQuestion2">¿Piedra o similar con cal o cemento?</label><br/>
            <input type="radio" id="thirdQuestion3" name="id_dg_material_paredes" value="47" <?php echo ($this->familia->id_dg_material_paredes == '47') ? 'checked' : ''; ?>/> <label for="thirdQuestion3">¿Adobe o tapia?</label><br/>
            <input type="radio" id="thirdQuestion4" name="id_dg_material_paredes" value="48" <?php echo ($this->familia->id_dg_material_paredes == '48') ? 'checked' : ''; ?>/> <label for="thirdQuestion4">¿Quincha (ca&ntilde;a con barro)?</label><br/>
            <input type="radio" id="thirdQuestion5" name="id_dg_material_paredes" value="49" <?php echo ($this->familia->id_dg_material_paredes == '49') ? 'checked' : ''; ?>/> <label for="thirdQuestion5">¿Piedra con barro?</label><br/>
            <input type="radio" id="thirdQuestion6" name="id_dg_material_paredes" value="50" <?php echo ($this->familia->id_dg_material_paredes == '50') ? 'checked' : ''; ?>/> <label for="thirdQuestion6">¿Madera?</label><br/>
            <input type="radio" id="thirdQuestion7" name="id_dg_material_paredes" value="51" <?php echo ($this->familia->id_dg_material_paredes == '51') ? 'checked' : ''; ?>/> <label for="thirdQuestion7">¿Estera?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_paredes" id="tx_observacion_paredes" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_paredes; ?>" /><br/>&nbsp;<br/>
        </li>

        <li>El material predominante en los pisos es:<br/>
            <input type="radio" id="fourthQuestion1" name="id_dg_material_piso" value="52" <?php echo ($this->familia->id_dg_material_piso == '52') ? 'checked' : ''; ?>/> <label for="fourthQuestion1">¿Parquet o madera pulida?</label><br/>
            <input type="radio" id="fourthQuestion2" name="id_dg_material_piso" value="53" <?php echo ($this->familia->id_dg_material_piso == '53') ? 'checked' : ''; ?>/> <label for="fourthQuestion2">¿L&aacute;minas asf&aacute;lticas, vin&iacute;licos o similares?</label><br/>
            <input type="radio" id="fourthQuestion3" name="id_dg_material_piso" value="54" <?php echo ($this->familia->id_dg_material_piso == '54') ? 'checked' : ''; ?>/> <label for="fourthQuestion3">¿Losetas?</label><br/>
            <input type="radio" id="fourthQuestion4" name="id_dg_material_piso" value="55" <?php echo ($this->familia->id_dg_material_piso == '55') ? 'checked' : ''; ?>/> <label for="fourthQuestion4">¿Madera (Entablados)?</label><br/>
            <input type="radio" id="fourthQuestion5" name="id_dg_material_piso" value="56" <?php echo ($this->familia->id_dg_material_piso == '56') ? 'checked' : ''; ?>/> <label for="fourthQuestion5">¿Cemento?</label><br/>
            <input type="radio" id="fourthQuestion6" name="id_dg_material_piso" value="57" <?php echo ($this->familia->id_dg_material_piso == '57') ? 'checked' : ''; ?>/> <label for="fourthQuestion6">¿Tierra?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_piso" id="tx_observacion_piso" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_piso; ?>" /><br/>&nbsp;<br/>
        </li>

        <li>¿Cual es el tipo de alumbrado que tiene su vivienda?<br/>
            <input type="radio" id="fifthQuestion1" name="id_dg_tipo_alumbrado" value="58" <?php echo ($this->familia->id_dg_tipo_alumbrado == '58') ? 'checked' : ''; ?>/> <label for="fifthQuestion1">¿Electricidad?</label><br/>
            <input type="radio" id="fifthQuestion2" name="id_dg_tipo_alumbrado" value="59" <?php echo ($this->familia->id_dg_tipo_alumbrado == '59') ? 'checked' : ''; ?>/> <label for="fifthQuestion2">¿Kerosene?</label><br/>
            <input type="radio" id="fifthQuestion3" name="id_dg_tipo_alumbrado" value="60" <?php echo ($this->familia->id_dg_tipo_alumbrado == '60') ? 'checked' : ''; ?>/> <label for="fifthQuestion3">¿Petr&oacute;leo?</label><br/>
            <input type="radio" id="fifthQuestion4" name="id_dg_tipo_alumbrado" value="61" <?php echo ($this->familia->id_dg_tipo_alumbrado == '61') ? 'checked' : ''; ?>/> <label for="fifthQuestion4">¿Vela?</label><br/>
            <input type="radio" id="fifthQuestion5" name="id_dg_tipo_alumbrado" value="62" <?php echo ($this->familia->id_dg_tipo_alumbrado == '62') ? 'checked' : ''; ?>/> <label for="fifthQuestion5">¿No tiene?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_tipo_alumbrado" id="tx_observacion_tipo_alumbrado" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_tipo_alumbrado; ?>" /><br/>&nbsp;<br/>
        </li>
    </ol>
    <?php
    echo $pane->endPanel();
    echo $pane->startPanel('Servicios y Recursos', 'panel2');
    ?>
    <ol type="1" start="6">
        <li>El abastecimiento de agua en su vivienda procede de:<br/>
            <input type="radio" id="sixthQuestion1" name="id_dg_abastecimiento_agua" value="63" <?php echo ($this->familia->id_dg_abastecimiento_agua == '63') ? 'checked' : ''; ?>/> <label for="sixthQuestion1">¿Red p&uacute;blica dentro de la vivienda?</label><br/>
            <input type="radio" id="sixthQuestion2" name="id_dg_abastecimiento_agua" value="64" <?php echo ($this->familia->id_dg_abastecimiento_agua == '64') ? 'checked' : ''; ?>/> <label for="sixthQuestion2">¿Red p&uacute;blica fuera de la vivienda, pero dentro del edificio?</label><br/>
            <input type="radio" id="sixthQuestion3" name="id_dg_abastecimiento_agua" value="65" <?php echo ($this->familia->id_dg_abastecimiento_agua == '65') ? 'checked' : ''; ?>/> <label for="sixthQuestion3">¿Pil&oacute;n de uso p&uacute;blico?</label><br/>
            <input type="radio" id="sixthQuestion4" name="id_dg_abastecimiento_agua" value="66" <?php echo ($this->familia->id_dg_abastecimiento_agua == '66') ? 'checked' : ''; ?>/> <label for="sixthQuestion4">¿Cami&oacute;n cisterna o similar?</label><br/>
            <input type="radio" id="sixthQuestion5" name="id_dg_abastecimiento_agua" value="67" <?php echo ($this->familia->id_dg_abastecimiento_agua == '67') ? 'checked' : ''; ?>/> <label for="sixthQuestion5">¿Pozo?</label><br/>
            <input type="radio" id="sixthQuestion6" name="id_dg_abastecimiento_agua" value="68" <?php echo ($this->familia->id_dg_abastecimiento_agua == '68') ? 'checked' : ''; ?>/> <label for="sixthQuestion6">¿R&iacute;o, acequ&iacute;a, manantial o similar?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_abastecimiento_agua" id="tx_observacion_abastecimiento_agua" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_abastecimiento_agua; ?>" /><br/>&nbsp;<br/>
        </li>

        <li>El servicio higienico (water, letrina, etc) que tiene su vivienda esta conectado a:<br/>
            <input type="radio" id="seventhQuestion1" name="id_dg_sshh" value="69" <?php echo ($this->familia->id_dg_sshh == '69') ? 'checked' : ''; ?>/> <label for="seventhQuestion1">¿Red p&uacute;blica dentro de la vivienda?</label><br/>
            <input type="radio" id="seventhQuestion2" name="id_dg_sshh" value="70" <?php echo ($this->familia->id_dg_sshh == '70') ? 'checked' : ''; ?>/> <label for="seventhQuestion2">¿Red p&uacute;blica fuera de la vivienda, pero dentro del edificio?</label><br/>
            <input type="radio" id="seventhQuestion3" name="id_dg_sshh" value="71" <?php echo ($this->familia->id_dg_sshh == '71') ? 'checked' : ''; ?>/> <label for="seventhQuestion3">¿Pozo s&eacute;ptico?</label><br/>
            <input type="radio" id="seventhQuestion4" name="id_dg_sshh" value="72" <?php echo ($this->familia->id_dg_sshh == '72') ? 'checked' : ''; ?>/> <label for="seventhQuestion4">¿Pozo ciego / letrina?</label><br/>
            <input type="radio" id="seventhQuestion5" name="id_dg_sshh" value="73" <?php echo ($this->familia->id_dg_sshh == '73') ? 'checked' : ''; ?>/> <label for="seventhQuestion5">¿R&iacute;o, acequ&iacute;a o canal?</label><br/>
            <input type="radio" id="seventhQuestion6" name="id_dg_sshh" value="191" <?php echo ($this->familia->id_dg_sshh == '191') ? 'checked' : ''; ?>/> <label for="seventhQuestion6">No tiene</label><br/>                    
            &nbsp;<br/>
        </li>

        <li>¿Que combustible mas utiliza para cocinar?<br/>
            <input type="radio" id="eighthQuestion1" name="id_dg_combustible_cocina" value="74" <?php echo ($this->familia->id_dg_combustible_cocina == '74') ? 'checked' : ''; ?>/> <label for="eighthQuestion1">¿Electricidad?</label><br/>
            <input type="radio" id="eighthQuestion2" name="id_dg_combustible_cocina" value="192" <?php echo ($this->familia->id_dg_combustible_cocina == '192') ? 'checked' : ''; ?>/> <label for="eighthQuestion2">¿Gas?</label><br/>
            <input type="radio" id="eighthQuestion3" name="id_dg_combustible_cocina" value="75" <?php echo ($this->familia->id_dg_combustible_cocina == '75') ? 'checked' : ''; ?>/> <label for="eighthQuestion3">¿Kerosene?</label><br/>
            <input type="radio" id="eighthQuestion4" name="id_dg_combustible_cocina" value="76" <?php echo ($this->familia->id_dg_combustible_cocina == '76') ? 'checked' : ''; ?>/> <label for="eighthQuestion4">¿Carb&oacute;n?</label><br/>
            <input type="radio" id="eighthQuestion5" name="id_dg_combustible_cocina" value="77" <?php echo ($this->familia->id_dg_combustible_cocina == '77') ? 'checked' : ''; ?>/> <label for="eighthQuestion5">¿Le&ntilde;a?</label><br/>
            <input type="radio" id="eighthQuestion6" name="id_dg_combustible_cocina" value="78" <?php echo ($this->familia->id_dg_combustible_cocina == '78') ? 'checked' : ''; ?>/> <label for="eighthQuestion6">¿Bosta o estiercol?</label><br/>
            <input type="radio" id="eighthQuestion7" name="id_dg_combustible_cocina" value="79" <?php echo ($this->familia->id_dg_combustible_cocina == '79') ? 'checked' : ''; ?>/> <label for="eighthQuestion7">¿No cocina?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_combustible_cocina" id="tx_observacion_combustible_cocina" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_combustible_cocina; ?>" /><br/>&nbsp;<br/>
        </li>

        <li>¿Como es la disposisci&oacute;n de la basura?<br/>
            <input type="radio" id="ninthQuestion1" name="id_dg_disposicion_basura" value="80" <?php echo ($this->familia->id_dg_disposicion_basura == '80') ? 'checked' : ''; ?>/> <label for="ninthQuestion1">¿Lo recoge el Carro recolector de basura?</label><br/>
            <input type="radio" id="ninthQuestion2" name="id_dg_disposicion_basura" value="81" <?php echo ($this->familia->id_dg_disposicion_basura == '81') ? 'checked' : ''; ?>/> <label for="ninthQuestion2">¿Lo quema?</label><br/>
            <input type="radio" id="ninthQuestion3" name="id_dg_disposicion_basura" value="82" <?php echo ($this->familia->id_dg_disposicion_basura == '82') ? 'checked' : ''; ?>/> <label for="ninthQuestion3">¿Lo entierra?</label><br/>
            <input type="radio" id="ninthQuestion4" name="id_dg_disposicion_basura" value="83" <?php echo ($this->familia->id_dg_disposicion_basura == '83') ? 'checked' : ''; ?>/> <label for="ninthQuestion4">¿Lo arroja al r&iacute;o, acequ&iacute;a?</label><br/>
            <input type="radio" id="ninthQuestion5" name="id_dg_disposicion_basura" value="84" <?php echo ($this->familia->id_dg_disposicion_basura == '84') ? 'checked' : ''; ?>/> <label for="ninthQuestion5">¿Recicla?</label><br/>
            Otros: <input class="text_area" type="text" name="tx_observacion_disposicion_basura" id="tx_observacion_disposicion_basura" size="50" maxlength="250" value="<?php echo $this->familia->tx_observacion_disposicion_basura; ?>" /><br/>&nbsp;<br/>
        </li>
    </ol>
    <?php
    echo $pane->endPanel();
    echo $pane->startPanel('Otros', 'panel3');
    ?>
    <ol type="1" start="10">
        <li>
            ¿Cuantas habitaciones ocupa este hogar? (sin contar ba&ntilde;o, cocina, pasadizos, ni garaje)&nbsp;&nbsp;&nbsp;<?php echo $this->lists['numero_habitaciones']; ?>
        </li>
        <li>
            ¿Cria animales en su vivienda? (Si / No)&nbsp;&nbsp;&nbsp;<?php echo JHTML::_('select.booleanlist', 'in_cria_animales', '', $this->familia->in_cria_animales, 'Si', 'No'); ?>
        </li>
    </ol>
    <?php
    echo $pane->endPanel();
    echo $pane->endPane();
    ?>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->familia->id_familia; ?>" />
    <input type="hidden" name="id_familia" value="<?php echo $this->familia->id_familia; ?>" />
    <input type="hidden" name="id_direccion_familia" value="<?php echo $this->familia->id_direccion_familia; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="nutrition" />
</form>

<fieldset>
    <legend>Integrantes</legend>
    <form id="memberForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="memberForm">
        <div style="text-align: left;">
            <input type="button" name="btnNew" value="Nuevo" onclick="javascript:document.getElementById('newTask').value = 'addMember'; document.getElementById('memberForm').submit();" />
        </div>
        <input type="hidden" name="option" value="com_nutritions" />
        <input type="hidden" name="task" id="newTask" value="" />
        <input type="hidden" name="controller" value="nutrition" />
        <input type="hidden" name="familyId" value="<?php echo $this->familia->id_familia; ?>" />
    </form>
    <table style="width: 100%;" border="1">
        <thead>
            <tr>
                <th width="20">
                    #
                </th>
                <th>
                    ID
                </th>
                <th>
                    Nombres
                </th>
                <th>
                    Apellido Paterno
                </th>
                <th>
                    Apellido Materno
                </th>
                <th>
                    Sexo
                </th>
                <th>
                    DNI
                </th>
                <th>
                    Parentesco
                </th>
                <th>
                    Edad
                </th>
                <th>
                    Ver
                </th>
                <th>
                    Delete
                </th>
            </tr>		
        </thead>
        <?php
        if (count($this->results) > 0) {
            ?>
            <?php
            $k = 0;
            for ($i = 0, $n = count($this->results); $i < $n; $i++) {
                $row = &$this->results[$i];
                $showLink = JRoute::_('index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]=' . $row->id_entidad);
                $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=nutrition&task=deleteMember&familyId={$this->familia->id_familia}&Itemid=3&id=" . $row->id_entidad);
                ?>
                <tr class="<?php echo "row$k"; ?>">
                    <td style="text-align:center;">
                        <?php echo $i + 1; ?>
                    </td>
                    <td style="text-align:center;">
                        <?php echo $row->id_entidad; ?>
                    </td>
                    <td>
                        <?php echo $row->tx_nombres; ?>
                    </td>
                    <td>
                        <?php echo $row->tx_apellido_paterno; ?>
                    </td>
                    <td>
                        <?php echo $row->tx_apellido_materno; ?>
                    </td>
                    <td>
                        <?php echo $row->Sexo; ?>
                    </td>
                    <td>
                        <?php echo $row->tx_nro_documento; ?>
                    </td>
                    <td>
                        <?php echo $row->Parentesco; ?>
                    </td>
                    <td>
                        <?php
                        $now = date('Y-m-d');
                        $edad = $this->diff($row->fe_nacimiento, $now);
                        echo $edad;
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo $showLink; ?>">Ver</a>
                    </td>
                    <td>
                        <a href="<?php echo $deleteLink; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                $k = 1 - $k;
            }
            ?>
            <?php
        }
        ?>
    </table>
</fieldset>

