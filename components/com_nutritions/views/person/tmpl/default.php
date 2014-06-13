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
                    <input type="button" value="Cancelar" onclick="javascript: history.go(-1);"/>
                </td>
            </tr>
        </table>
    </fieldset>

    <fieldset>
        <legend>Datos Generales</legend>
        <table>
            <tr>
                <td style="width: 50%;" valign="top">
                    <table style=" border-collapse: separate;  border-spacing:  12px 3px;">
                        <tr>
                            <td>Familia ID:</td>
                            <td>
                                <input class="text_area" type="text" name="id_familia" id="id_familia" readonly="true" size="25" value="<?php echo $this->persona->id_familia; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Nombres:</td>
                            <td>
                                <input class="text_area" tabindex="1" type="text" name="tx_nombres" id="tx_nombres" size="25" value="<?php echo $this->persona->tx_nombres; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Ap. Paterno:</td>
                            <td>
                                <input class="text_area" tabindex="3" type="text" name="tx_apellido_paterno" id="tx_apellido_paterno" size="25" value="<?php echo $this->persona->tx_apellido_paterno; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <?php echo JHTML::_('select.booleanlist', 'in_sexo', '', $this->persona->in_sexo, 'Masculino', 'Femenino&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Parentesco:</td>
                            <td>
                                <?php echo $this->lists['parentesco']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nivel Educativo
                            </td>
                            <td><?php echo $this->lists['nivel_educativo']; ?></td>

                        </tr>
                        <tr>
                            <td>Ocupaci&oacute;n:</td>
                            <td>
                                <?php echo $this->lists['ocupaciones']; ?>
                            </td>

                        </tr>
                    </table>
                </td>
                <td style="width: 50%;" valign="top">
                    <table class="tableg">
                        <tr>
                            <td>Tipo Persona:</td>
                            <td>
                                <?php echo $this->lists['tipo_persona']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td>
                                <input class="text_area" tabindex="2" type="text" name="txtEdad" id="txEdad" readonly="true" size="25" value="<?php echo $this->edad; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Ap. Materno:</td>
                            <td>
                                <input class="text_area" tabindex="4" type="text" name="tx_apellido_materno" id="tx_apellido_materno" size="25" value="<?php echo $this->persona->tx_apellido_materno; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha Nacimiento:</td>
                            <td>
                                <?php echo JHTML::_('calendar', $this->persona->fe_nacimiento, "fe_nacimiento", "fe_nacimiento", "%d/%m/%Y", array('class' => 'inputbox', 'size' => '10', 'maxlength' => '10', 'tabindex' => '5')); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Estado Civil:</td>
                            <td>
                                <?php echo $this->lists['estado_civil']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lengua Habitual
                            </td>
                            <td><?php echo $this->lists['lengua_habitual']; ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Teléfono Móvil</legend>
                        <table width="100%" class="tableg">
                            <tr>
                                <td>
                                    Operador:
                                </td>
                                <td><?php echo $this->lists['operador_telefonico']; ?></td>
                                <td>
                                    <input class="text_area" tabindex="3" type="text" name="tx_telf_cel" id="tx_telf_cel" size="25" value="<?php echo $this->persona->tx_telf_cel; ?>" />
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                    </fieldset>
                </td>


            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Documento de Identidad</legend>
                        <table width="100%" class="tableg">
                            <tr>
                                <td>
                                    Tipo Doc.
                                </td>
                                <td><?php echo $this->lists['tipo_documento']; ?></td>
                                <td>N. Documento </td>
                                <td>
                                    <input class="text_area" type="text" name="tx_nro_documento" id="tx_nro_documento" size="25" value="<?php echo $this->persona->tx_nro_documento; ?>" />
                                </td>
                            </tr>

                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Datos del EE.SS donde se atiende</legend>
                        <table width="100%" class="tableg">
                            <tr>              

                            </tr>
                            <tr>
                                <td colspan="4">
                                    <input style=" width: 100%;"placeholder="Establecimiento de Salud" class="text_area" type="text" name="establec" id="establec" value="<?php echo $this->persona->establec_name; ?>" />
                                    <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->persona->cod_2000; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Historia Clínica:</td>
                                <td>
                                    <input class="text_area" type="text" name="tx_hcl" id="tx_hcl" size="25" value="<?php echo $this->persona->tx_hcl; ?>" />
                                </td>                                
                                <td colspan="2">&nbsp;</td>
                            </tr>

                            <tr>
                                <td colspan="4">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Seguro de Salud:</td>
                                <td>
                                    <?php echo $this->lists['seguro_salud']; ?>
                                </td>
                                <td>N° de Seguro:</td>
                                <td>
                                    <input class="text_area" type="text" name="tx_nro_seguro" id="tx_nro_seguro" size="25" value="<?php echo $this->persona->tx_nro_seguro; ?>" />
                                </td>
                            </tr>                          

                        </table>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Programas Sociales</legend>
                        <table width="100%">
                            <tr>
                                <td width="50%">
                                    <input type="checkbox" id="in_vaso_leche" name="in_vaso_leche" value="1" <?php echo ($this->persona->in_vaso_leche) ? 'checked' : ''; ?> />
                                    <label for="in_vaso_leche">Vaso de Leche</label>
                                </td>
                                <td width="50%">
                                    <input type="checkbox" id="in_canasta_alimentaria" name="in_canasta_alimentaria" value="1" <?php echo ($this->persona->in_canasta_alimentaria) ? 'checked' : ''; ?> />
                                    <label for="in_canasta_alimentaria">Canasta</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="in_comedor_popular" name="in_comedor_popular" value="1" <?php echo ($this->persona->in_comedor_popular) ? 'checked' : ''; ?> />
                                    <label for="in_comedor_popular">Comedor Popular</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="in_juntos" name="in_juntos" value="1" <?php echo ($this->persona->in_juntos) ? 'checked' : ''; ?> />
                                    <label for="in_juntos">Juntos</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="in_desayuno_almuerzo_escolar" name="in_desayuno_almuerzo_escolar" value="1" <?php echo ($this->persona->in_desayuno_almuerzo_escolar) ? 'checked' : ''; ?> />
                                    <label for="in_desayuno_almuerzo_escolar">Desayuno o Almuerzo Escolar</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="in_techo_propio" name="in_techo_propio" value="1" <?php echo ($this->persona->in_techo_propio) ? 'checked' : ''; ?> />
                                    <label for="in_techo_propio">Techo Propio o Mi Vivienda</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="in_papilla_yapita" name="in_papilla_yapita" value="1" <?php echo ($this->persona->in_papilla_yapita) ? 'checked' : ''; ?> />
                                    <label for="in_papilla_yapita">Papilla o "Yapita"</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="in_cuna_mas" name="in_cuna_mas" value="1" <?php echo ($this->persona->in_cuna_mas) ? 'checked' : ''; ?> />
                                    <label for="in_cuna_mas">Cuna Mas</label>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label for="tx_observacion">Observacion: </label>
                                    <input size="80" type="text" id="tx_observacion" name="tx_observacion" value="<?php echo $this->persona->tx_observacion; ?>" />
                                </td>

                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>

        </table>

    </fieldset>
    <script type="text/javascript">
        var options = {
            script: "index.php?option=com_nutritions&controller=establec&task=getEstablec&",
            varname: "establecName",
            json: true,
            shownoresults: false,
            maxresults: 6,
            callback: function(obj) {
                document.getElementById('cod_2000').value = obj.id;
            }
        };
        var as_json = new bsn.AutoSuggest('establec', options);
    </script>


    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->persona->id_entidad; ?>" />
    <input type="hidden" name="id_entidad" value="<?php echo $this->persona->id_entidad; ?>" />
    <input type="hidden" name="id_riesgo" value="<?php echo $this->persona->id_riesgo; ?>" />
    <input type="hidden" name="id_discapacidad" value="<?php echo $this->persona->id_discapacidad; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="person" />
</form>

<table  width="100%">

    <tr>
        <td width="49%">
            <fieldset>
                <legend>Discapacidad&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_discapacidad();"></a></legend>
                <form id="discapacidadForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="discapacidadForm">
                    <div style="text-align: left;">

                    </div>
                    <input type="hidden" name="option" value="com_nutritions" />
                    <input type="hidden" name="task" id="disTask" value="" />
                    <input type="hidden" name="controller" value="person" />
                    <input type="hidden" name="personId" value="<?php echo $this->persona->id_entidad; ?>" />
                </form>
                <table  border="0" width="100%" class="tableg">
                    <thead>
                        <tr>
                            <th width="70%">                     
                            </th>
                            <th width="10%">
                            </th>    
                            <th width="10%">                    
                            </th>
                            <th width="10%">                    
                            </th>
                        </tr>		
                    </thead>
                    <?php
                    if (count($this->discapacidadResults) > 0) {
                        ?>
                        <?php
                        $k = 0;
                        for ($i = 0, $n = count($this->discapacidadResults); $i < $n; $i++) {
                            $row = &$this->discapacidadResults[$i];
                            $showLink = JRoute::_('index.php?option=com_nutritions&controller=discapacidad&view=discapacidad&task=edit&Itemid=3&cid[]=' . $row->id_discapacidad);
                            $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=person&task=deletediscapacidad&personId={$this->persona->id_entidad}&Itemid=3&id=" . $row->id_discapacidad);
                            ?>
                            <tr>

                                <td>
                                    <?php echo $row->tx_descripcion; ?>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <a class="glyphicon glyphicon-pencil" href="<?php echo $showLink; ?>" />
                                </td>
                                <td>

                                    <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_discapacidad(<?php echo $row->id_discapacidad ?>,<?php echo $this->persona->id_entidad ?>);
                                            return false;" />
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
        </td>
        <td width="2%"></td>
        <td width="49%">
            <fieldset>
                <legend>Riesgo&nbsp;&nbsp;&nbsp;&nbsp;<a class="glyphicon glyphicon-plus" href="#" onclick="crear_riesgo();"></a></legend>
                <form id="riesgoForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="riesgoForm">
                    <div style="text-align: left;">

                    </div>
                    <input type="hidden" name="option" value="com_nutritions" />
                    <input type="hidden" name="task" id="rieTask" value="" />
                    <input type="hidden" name="controller" value="person" />
                    <input type="hidden" name="personId" value="<?php echo $this->persona->id_entidad; ?>" />
                </form>
                <table  border="0" width="100%" class="tableg">
                    <thead>
                        <tr>
                            <th width="70%">                     
                            </th>
                            <th width="10%">
                            </th>    
                            <th width="10%">                    
                            </th>
                            <th width="10%">                    
                            </th>
                        </tr>		
                    </thead>
                    <?php
                    if (count($this->riesgoResults) > 0) {
                        ?>
                        <?php
                        $k = 0;
                        for ($i = 0, $n = count($this->riesgoResults); $i < $n; $i++) {
                            $row = &$this->riesgoResults[$i];
                            $showLink = JRoute::_('index.php?option=com_nutritions&controller=riesgo&view=riesgo&task=edit&Itemid=3&cid[]=' . $row->id_riesgo);
                            $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=person&task=deleteriesgo&personId={$this->persona->id_entidad}&Itemid=3&id=" . $row->id_riesgo);
                            ?>
                            <tr>

                                <td>
                                    <?php echo $row->tx_descripcion; ?>
                                </td>
                                <td>&nbsp;</td>
                                <td>
                                    <a class="glyphicon glyphicon-pencil" href="<?php echo $showLink; ?>" />
                                </td>
                                <td>

                                    <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_riesgo(<?php echo $row->id_riesgo ?>,<?php echo $this->persona->id_entidad ?>);
                                            return false;" />
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
        </td></tr>

</table>

<?php
if ($this->persona->id_entidad > 0) {
?>
    <fieldset>
        <legend>Actividades</legend>
        <form id="activityForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="activityForm">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%; text-align: center;">
                        <?php
                        if ($this->edad < 5) {
                            ?>
                            <input type="button" name="btnChildActivity" value="Actividad Niño" onclick="javascript:document.getElementById('newTask').value = 'addChildActivity';
                                    document.getElementById('activityForm').submit();" />
                                   <?php
                               } else {
                                   echo "&nbsp;";
                               }
                               ?>
                    </td>
                    <td style="width: 50%; text-align: center;">
                        <?php
                        if ($this->persona->in_sexo != '1' && ( $this->edad >= 10 && $this->edad <= 50 )) {
                            ?>
                            <input type="button" name="btnPregnantActivity" value="Actividad Gestante" onclick="javascript:document.getElementById('newTask').value = 'addPregnantActivity';
                                    document.getElementById('activityForm').submit();" />
                                   <?php
                               } else {
                                   echo "&nbsp;";
                               }
                               ?>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="option" value="com_nutritions" />
            <input type="hidden" name="task" id="newTask" value="" />
            <input type="hidden" name="controller" value="activities" />
            <input type="hidden" name="personId" value="<?php echo $this->persona->id_entidad; ?>" />
        </form>
        <?php
        if (count($this->childResults) > 0) {
            ?>
            <fieldset>
                <legend>Ni&ntilde;os</legend>
                <table border="1" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>F. Visita</th>
                            <th>Edad(Vis)</th>
                            <th>Peso</th>
                            <th>Talla</th>
                            <th>Hemogoblina</th>
                            <th>Anemia</th>
                            <th>P/E</th>
                            <th>P/T</th>
                            <th>T/E</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php
                    $k = 0;
                    for ($i = 0, $n = count($this->childResults); $i < $n; $i++) {
                        $row = &$this->childResults[$i];
                        $showLink = JRoute::_("index.php?option=com_nutritions&controller=child&view=child&personId={$this->persona->id_entidad}&task=edit&Itemid=3&cid[]=" . $row->id_evaluacion_nino);
                        $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=child&task=deleteEvaluacion&personId={$this->persona->id_entidad}&id=" . $row->id_evaluacion_nino);
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
                                <?php echo $row->de_peso; ?>
                            </td>
                            <td>
                                <?php echo $row->de_talla; ?>
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
                                <?php echo $row->peso_edad; ?>
                            </td>
                            <td>
                                <?php echo $row->peso_talla; ?>
                            </td>
                            <td>
                                <?php echo $row->talla_edad; ?>
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
            </fieldset>
            <?php
        }
        ?>

        <?php
        if (count($this->pregnantResults) > 0) {
            ?>
            <fieldset>
                <legend>Gestantes</legend>
                <table border="1" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>F. Visita</th>
                            <th>Edad(Vis)</th>
                            <th>Peso Habitual</th>
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
                    for ($i = 0, $n = count($this->pregnantResults); $i < $n; $i++) {
                        $row = &$this->pregnantResults[$i];
                        $showLink = JRoute::_("index.php?option=com_nutritions&controller=pregnant&view=pregnant&personId={$this->persona->id_entidad}&task=edit&Itemid=3&cid[]=" . $row->id_evaluacion_gestante);
                        $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=pregnant&task=deleteEvaluacion&personId={$this->persona->id_entidad}&id=" . $row->id_evaluacion_gestante);
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
                                <?php echo $row->de_peso_habitual; ?>
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
            </fieldset>
            <?php
        }
        ?>

    </fieldset>

<?php
}
?>


