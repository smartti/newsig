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
<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">
    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction';
                            document.getElementById('adminForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Evaluaci&oacute;n Nutricional de Gestante</legend>

        <fieldset>
            <legend>Gestante</legend>
            <table>
                <tr>
                    <td style="width: 50%;" valign="top">
                        <table>
                            <?php
                            $showPerson = JRoute::_('index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]=' . $this->persona->id_entidad);
                            ?>                                 
                            <tr>
                                <td><a href="<?php echo $showPerson; ?>">Ir a Persona:</a></td>
                                <td>
                                    <input class="text_area" type="text" name="id_entidad" id="id_entidad" readonly="true" size="25" value="<?php echo $this->persona->id_entidad; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Nombres:</td>
                                <td>
                                    <input class="text_area" tabindex="1" type="text" name="tx_nombres" id="tx_nombres" readonly="true" size="25" value="<?php echo $this->persona->tx_nombres; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Ap. Paterno:</td>
                                <td>
                                    <input class="text_area" tabindex="3" type="text" readonly="true" name="tx_apellido_paterno" id="tx_apellido_paterno" size="25" value="<?php echo $this->persona->tx_apellido_paterno; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha Nacimiento:</td>
                                <td>
                                    <?php echo JHTML::_('calendar', $this->persona->fe_nacimiento, "fe_nacimiento", "fe_nacimiento", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'readonly' => 'true', 'maxlength' => '10', 'tabindex' => '5')); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Peso Habitual:</td>
                                <td>
                                    <input class="text_area" tabindex="4" type="text" name="de_peso_habitual" id="de_peso_habitual" size="15" value="<?php echo $this->actividad->de_peso_habitual; ?>" /> Kg.
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%;" valign="top">
                        <table>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Edad:</td>
                                <td>
                                    <input class="text_area" tabindex="2" type="text" name="txtEdadVisita" id="txEdadVisita" readonly="true" size="25" value="<?php echo $this->actividad->edad_visita; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Ap. Materno:</td>
                                <td>
                                    <input class="text_area" tabindex="4" type="text" readonly="true" name="tx_apellido_materno" id="tx_apellido_materno" size="25" value="<?php echo $this->persona->tx_apellido_materno; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Talla:
                                </td>
                                <td>
                                    <input class="text_area" tabindex="3" type="text" name="de_talla" id="de_talla" size="15" value="<?php echo $this->actividad->de_talla; ?>" /> cm.
                                </td>
                            </tr>

                            <tr>
                                <td>Fecha problable de parto (FPP):</td>
                                <td>
                                    <?php echo JHTML::_('calendar', $this->actividad->fe_pp, "fe_pp", "fe_pp", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10', 'tabindex' => '1')); ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </fieldset>
        <fieldset>
            <legend>Datos Históricos de la Gestante</legend>
            <div>
                Fecha de Toma de Datos Históricos: <?php echo JHTML::_('calendar', $this->actividad->fe_toma_historicos, "fe_toma_historicos", "fe_toma_historicos", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10', 'tabindex' => '1')); ?>
            </div>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 100%;" valign="top" >
                        <fieldset>
                            <legend>Histórico</legend>
                            <table>
                                <tr>
                                    <td style="width: 20%;">
                                        Embarazos Anteriores:
                                    </td>
                                    <td style="width: 35%;"><?php echo $this->lists['nu_question_one']; ?> Unidades.
                                    </td>
                                    <td style="width: 20%;">
                                        N° Partos Anteriores:
                                    </td>
                                    <td style="width: 25%;"><?php echo $this->lists['nu_question_two']; ?> Unidades.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        N° Partos Prematuros:
                                    </td>
                                    <td><?php echo $this->lists['nu_question_three']; ?> Unidades.
                                    </td>
                                    <td>
                                        N° Hijos Vivos:
                                    </td>
                                    <td><?php echo $this->lists['nu_question_four']; ?> Unidades.
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        N° de Abortos, Mola o Ectópicos:
                                    </td>
                                    <td colspan="2"><?php echo $this->lists['nu_question_five']; ?> Unidades.
                                    </td>
                                </tr><tr>
                                    <td style="width: 75%;" align="center"  valign="top" colspan="4">
                                        <fieldset>
                                            <legend>Último Evento</legend>
                                            <table>
                                                <tr>
                                                    <td>
                                                        Último Evento:
                                                    </td>                                                
                                                    <td><?php echo $this->lists['ultimo_evento']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Lugar Último Evento:
                                                    </td>
                                                    <td><?php echo $this->lists['lugar_ultimo_evento']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Fecha de Último Evento:
                                                    </td>
                                                    <td><?php echo JHTML::_('calendar', $this->actividad->fe_ultimo_evento, "fe_ultimo_evento", "fe_ultimo_evento", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10', 'tabindex' => '2')); ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </fieldset>

                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>H&aacute;bitos y Costumbres de la Gestante</legend>
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 80%;">
                            Preguntas
                        </th>
                        <th style="width: 10%;">
                            Semana
                        </th>
                        <th style="width: 10%;">
                            D&iacute;a
                        </th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        1. ¿Consume alimentos de origen animal? (Carne, visceras, leche, huevos, pescado)
                    </td>
                    <td><?php echo $this->lists['week_question_one']; ?>
                    </td>
                    <td><?php echo $this->lists['day_question_one']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        2. ¿Consume alimentos de origen vegetal? (Chocho, frijoles, habas y otras menestras)
                    </td>
                    <td>
                        <?php echo $this->lists['week_question_two']; ?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_two']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        3. ¿Consume alimentos energ&eacute;ticos? (Papa, cebada, trigo, ma&iacute;z, aceite y/o manteca)
                    </td>
                    <td>
                        <?php echo $this->lists['week_question_three']; ?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_three']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        4. ¿Consume frutas y/o verduras?
                    </td>
                    <td>
                        <?php echo $this->lists['week_question_four']; ?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_four']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        5. ¿Consume agua segura (Agua hervida o clorada)?
                    </td>
                    <td colspan="2">
                        <?php echo JHTML::_('select.booleanlist', 'in_consume_agua_segura', '', $this->actividad->in_consume_agua_segura, 'Si', 'No'); ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Datos del Parto</legend>
            <table>
                <tr>

                    <td>
                        Fecha del Parto:
                    </td>
                    <td>
                        <?php echo JHTML::_('calendar', $this->actividad->fe_parto, "fe_parto", "fe_parto", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10', 'tabindex' => '2')); ?>
                    </td>
                    <td>
                        <fieldset>
                            <legend>Tipo de Parto:</legend>
                            <table>
                                <tr>
                                    <td>
                                        <?php echo JHTML::_('select.booleanlist', 'in_tipo_parto', '', $this->actividad->in_tipo_parto, 'Cesárea', 'Vaginal       .'); ?>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        Lugar del Parto:
                    </td>
                    <td>
                        <?php echo $this->lists['lugar_Parto']; ?>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>Establecimiento de Salud:</td>
                    <td colspan="3">
                        <input class="text_area" type="text" name="establec" id="establec" size="80" maxlength="250" value="<?php echo $this->actividad->establec_name; ?>" />
                        <input type="hidden" name="cod_2000_parto" id="cod_2000_parto" value="<?php echo $this->actividad->cod_2000_parto; ?>"/>
                    </td>
                </tr>
                <tr>                        
                    <td>
                        Ubigeo (Trayecto o Domicilio):
                    </td>
                    <td colspan="3">
                        <input class="text_area" type="text" name="ubigeo" id="ubigeo" size="80" maxlength="250" value="<?php echo $this->actividad->ubigeo_name; ?>" />
                        <input type="hidden" name="id_ubigeo_parto" id="id_ubigeo_parto" value="<?php echo $this->actividad->id_ubigeo_parto; ?>"/>
                    </td>
                </tr>
            </table>
        </fieldset>       

    </fieldset>
    <script type="text/javascript">
        var options = {
            script: "index.php?option=com_nutritions&controller=establec&task=getEstablec&",
            varname: "establecName",
            json: true,
            shownoresults: false,
            maxresults: 6,
            callback: function(obj) {
                document.getElementById('cod_2000_parto').value = obj.id;
            }
        };
        var as_json = new bsn.AutoSuggest('establec', options);
    </script>

    <script type="text/javascript">
        var options = {
            script: "index.php?option=com_nutritions&controller=nutrition&task=getUbigeo&",
            varname: "ubigeoName",
            json: true,
            shownoresults: false,
            maxresults: 6,
            callback: function(obj) {
                document.getElementById('id_ubigeo_parto').value = obj.id;
            }
        };
        var as_json = new bsn.AutoSuggest('ubigeo', options);
    </script>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->actividad->id_evaluacion_gestante; ?>" />
    <input type="hidden" name="id_evaluacion_gestante" value="<?php echo $this->actividad->id_evaluacion_gestante; ?>" />
    <input type="hidden" name="id_entidad" value="<?php echo JRequest::getInt('personId', 0); ?>" />
    <input type="hidden" name="id_actividad" value="<?php echo $this->actividad->id_actividad; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="pregnant" />
</form>
<?php
if ($this->persona->id_entidad > 0) {
    ?>
    <fieldset>
        <legend>Controles</legend>
        <form id="pregnantcontrolForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="pregnantcontrolForm">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%; text-align: center;">
                        <?php
                        if ($this->actividad->id_evaluacion_gestante) {
                            ?>
                            <input type="button" name="btnPregnantControl" value="Agregar Control" 
                                   onclick="javascript:document.getElementById('newControlTask').value = 'addPregnantControl';
                                           document.getElementById('pregnantcontrolForm').submit();" />
                                   <?php
                               } else {
                                   echo "&nbsp;";
                               }
                               ?>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="option" value="com_nutritions" />
            <input type="hidden" name="task" id="newControlTask" value="" />
            <input type="hidden" name="controller" value="pregnant" />
            <input type="hidden" name="evaluacionId" value="<?php echo $this->actividad->id_evaluacion_gestante; ?>" />
            <input type="hidden" name="personId" value="<?php echo $this->persona->id_entidad; ?>" />
        </form>
        <?php
        if (count($this->pregnantcontrolResults) > 0) {
            ?>
            <table border="1" style="width: 100%;">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>F. Visita</th>
                        <th>Edad(Vis)</th>
                        <th>Peso actual</th>
                        <th>Hemogoblina</th>
                        <th>Anemia</th>
                        <th>IMC PG</th>
                        <th>Ganancia Peso</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <?php
                $k = 0;
                for ($i = 0, $n = count($this->pregnantcontrolResults); $i < $n; $i++) {
                    $row = &$this->pregnantcontrolResults[$i];
                    $showLink = JRoute::_("index.php?option=com_nutritions&controller=pregnantcontrol&view=pregnantcontrol&evaluacionId={$this->actividad->id_evaluacion_gestante}&personId={$this->persona->id_entidad}&task=edit&Itemid=3&cid[]=" . $row->id_evaluacion_gestante_control);
                    $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=pregnant&task=deleteEvaluacionControl&personId={$this->persona->id_entidad}&evaluacionId={$this->actividad->id_evaluacion_gestante}&Itemid=3&id=" . $row->id_evaluacion_gestante_control);
                    ?>
                    <tr class="<?php echo "row$k"; ?>">
                        <td style="text-align:center;">
                            <?php echo $i + 1; ?>
                        </td>
                        <td style="text-align:center;">
                            <?php
                            $temporalArray = explode('-', $row->fe_visita);
                            echo $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
                            ?>
                        </td>
                        <td style="text-align:center;">
                            <?php
                            $tempNac = explode('/', $this->persona->fe_nacimiento);
                            $fe_nacimiento = $tempNac[2] . '-' . $tempNac[1] . '-' . $tempNac[0];
                            echo $this->getYearDiff($fe_nacimiento, $row->fe_visita);
                            ?>
                        </td>
                        <td>
                            <?php echo $row->de_peso_actual; ?>
                        </td>
                        <td>
                            <?php echo $row->nu_hemoglobina; ?>
                        </td>
                        <td><strong>
                                <?php
                                if ($row->nu_hemoglobina < 11) {
                                    echo "SI";
                                } else {
                                    echo "NO";
                                }
                                ?>
                            </strong>
                        </td>
                        <td>
                            <?php echo $row->img_pc; ?>
                        </td>
                        <td>
                            <?php echo $row->ganancia_peso; ?>
                        </td>
                        <td>
                            <a href="<?php echo $showLink; ?>"><img src="administrator/images/search_f2.png" height="20px" alt="ver" title="ver"/></a>
                        </td>
                        <td>
                            <a href="<?php echo $deleteLink; ?>"><img src="administrator/images/publish_x.png" height="20px" alt="ver" title="ver"/></a>
                        </td>
                    </tr>
                    <?php
                    $k = 1 - $k;
                }
                ?>
            </table>
            <?php
        }
        ?>

    </fieldset>

    <?php
}
?>
<?php
if (count($this->pregnantcontrolResults) > 1) {
    ?>
    <fieldset>
        <legend>Gráfica</legend>
        <table>
            <tr>
                <td><?php
                    $showgraph = JRoute::_("index.php?option=com_nutritions&controller=pregnantgraph&view=pregnantgraph&Itemid=3&cid[]=" . $this->actividad->id_evaluacion_gestante);
                    ?>
                    <img src="<?php echo $showgraph ?>" alt="" border="0">
                </td>
            </tr>
        </table> 
    </fieldset>
    <?php
}
?>


