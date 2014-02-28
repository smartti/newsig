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
                    <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction'; document.getElementById('adminForm').submit();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction'; document.getElementById('adminForm').submit();"/>
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
                    <table>
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
                                <?php echo JHTML::_('select.booleanlist', 'in_sexo', '', $this->persona->in_sexo, 'Masculino', 'Femenino' ); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Parentesco:</td>
                            <td>
                                <?php echo $this->lists['parentesco']; ?>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 50%;" valign="top">
                    <table>
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
                                <?php echo JHTML::_('calendar', $this->persona->fe_nacimiento, "fe_nacimiento", "fe_nacimiento", "%d/%m/%Y", array('class'=>'inputbox', 'size'=>'10',  'maxlength'=>'10', 'tabindex'=>'5'));  ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Estado Civil:</td>
                            <td>
                                <?php echo $this->lists['estado_civil'] ; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            
            <tr>
                <td style="width: 50%;" valign="top">
                    <table>
                        <tr>
                            <td colspan="2">
                                <fieldset>
                                    <table>
                                        <tr>
                                            <td>
                                                Tipo Doc.
                                            </td>
                                            <td><?php echo $this->lists['tipo_documento'] ; ?></td>
                                        </tr>
                                        <tr>
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
                                    <table>
                                        <tr>
                                            <td>
                                                Nivel Educativo
                                            </td>
                                            <td><?php echo $this->lists['nivel_educativo'] ; ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                A&ntilde;o Educativo
                                            </td>
                                            <td><?php echo $this->lists['ano_educativo'] ; ?></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                </td>
                
                <td style="width: 50%;" >
                    <table>
                        <tr>
                            <td>Seguro de Salud:</td>
                            <td>
                                <?php echo $this->lists['seguro_salud'] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Sabe leer/escribir:</td>
                            <td>
                                <?php echo JHTML::_('select.booleanlist', 'in_sabe_leer_escribir', '', $this->persona->in_sabe_leer_escribir, 'Si', 'No' ); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Ocupaci&oacute;n:</td>
                            <td>
                                <?php echo $this->lists['ocupaciones'] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Discapacidad:</td>
                            <td>
                                <?php echo $this->lists['discapacidades'] ; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Da&ntilde;os o Riesgos:</td>
                            <td>
                                <?php echo $this->lists['riesgos'] ; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <fieldset>
                        <legend>Programas Sociales</legend>
                        <table width="100%">
                            <tr>
                                <td width="50%">
                                    <input type="checkbox" id="in_vaso_leche" name="in_vaso_leche" value="1" <?php echo ($this->persona->in_vaso_leche)?'checked':''; ?> />
                                    <label for="in_vaso_leche">Vaso de Leche</label>
                                </td>
                                <td width="50%">
                                    <input type="checkbox" id="in_canasta_alimentaria" name="in_canasta_alimentaria" value="1" <?php echo ($this->persona->in_canasta_alimentaria)?'checked':''; ?> />
                                    <label for="in_canasta_alimentaria">Canasta</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="in_comedor_popular" name="in_comedor_popular" value="1" <?php echo ($this->persona->in_comedor_popular)?'checked':''; ?> />
                                    <label for="in_comedor_popular">Comedor Popular</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="in_juntos" name="in_juntos" value="1" <?php echo ($this->persona->in_juntos)?'checked':''; ?> />
                                    <label for="in_juntos">Juntos</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="in_desayuno_almuerzo_escolar" name="in_desayuno_almuerzo_escolar" value="1" <?php echo ($this->persona->in_desayuno_almuerzo_escolar)?'checked':''; ?> />
                                    <label for="in_desayuno_almuerzo_escolar">Desayuno o Almuerzo Escolar</label>
                                </td>
                                <td>
                                    <input type="checkbox" id="in_techo_propio" name="in_techo_propio" value="1" <?php echo ($this->persona->in_techo_propio)?'checked':''; ?> />
                                    <label for="in_techo_propio">Techo Propio o Mi Vivienda</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" id="in_papilla_yapita" name="in_papilla_yapita" value="1" <?php echo ($this->persona->in_papilla_yapita)?'checked':''; ?> />
                                    <label for="in_papilla_yapita">Papilla o "Yapita"</label>
                                </td>
                                <td>
                                    <label for="tx_observacion">Otros: </label>
                                    <input size="40" type="text" id="tx_observacion" name="tx_observacion" value="<?php echo $this->persona->tx_observacion;?>" />
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
            
        </table>
        
    </fieldset>


    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->persona->id_entidad; ?>" />
    <input type="hidden" name="id_entidad" value="<?php echo $this->persona->id_entidad; ?>" />
    <input type="hidden" name="id_riesgo" value="<?php echo $this->persona->id_riesgo; ?>" />
    <input type="hidden" name="id_discapacidad" value="<?php echo $this->persona->id_discapacidad; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="person" />
</form>

<?php
if( $this->persona->id_entidad > 0 ){
?>
<fieldset>
    <legend>Actividades</legend>
    <form id="activityForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="activityForm">
        <table style="width: 100%;">
            <tr>
                <td style="width: 50%; text-align: center;">
                    <?php
                    if( $this->edad < 5 ){
                    ?>
                    <input type="button" name="btnChildActivity" value="Actividad Niño" onclick="javascript:document.getElementById('newTask').value = 'addChildActivity'; document.getElementById('activityForm').submit();" />
                    <?php
                    }else{echo "&nbsp;";}
                    ?>
                </td>
                <td style="width: 50%; text-align: center;">
                    <?php
                    if( $this->persona->in_sexo != '1' && ( $this->edad >= 10 && $this->edad <= 50 ) ){
                    ?>
                    <input type="button" name="btnPregnantActivity" value="Actividad Gestante" onclick="javascript:document.getElementById('newTask').value = 'addPregnantActivity'; document.getElementById('activityForm').submit();" />
                    <?php
                    }else{echo "&nbsp;";}
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
    if(count($this->childResults) > 0 ){
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
                        <?php echo $i+1; ?>
                    </td>
                    <td style="text-align:center;">
                        <?php 
                        $temporalArray = explode('-', $row->fe_visita);
                        echo $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0]; 
                        ?>
                    </td>
                    <td style="text-align:center;">
                        <?php
                        $tempNac = explode('/', $this->persona->fe_nacimiento);
                        $fe_nacimiento = $tempNac[2].'-'.$tempNac[1].'-'.$tempNac[0];
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
    if(count($this->pregnantResults) > 0 ){
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
                        <?php echo $i+1; ?>
                    </td>
                    <td style="text-align:center;">
                        <?php 
                        $temporalArray = explode('-', $row->fe_visita);
                        echo $temporalArray[2].'/'.$temporalArray[1].'/'.$temporalArray[0]; 
                        ?>
                    </td>
                    <td style="text-align:center;">
                        <?php
                        $tempNac = explode('/', $this->persona->fe_nacimiento);
                        $fe_nacimiento = $tempNac[2].'-'.$tempNac[1].'-'.$tempNac[0];
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