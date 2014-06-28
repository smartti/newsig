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
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('adminForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>
    
    <fieldset>
        <legend>Evaluaci&oacute;n Nutricional del Ni&ntilde;o</legend>
        
        <fieldset>
            <legend>Ni&ntilde;o(a)</legend>
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
                                <td>Sexo:</td>
                                <td>
                                    <?php echo JHTML::_('select.booleanlist', 'in_sexo', '', $this->persona->in_sexo, 'Masculino', 'Femenino' ); ?>
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
                                    <input class="text_area" tabindex="2" type="text" name="txtEdad" id="txEdad" readonly="true" size="25" value="<?php echo $this->persona->edad; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Ap. Materno:</td>
                                <td>
                                    <input class="text_area" tabindex="4" type="text" readonly="true" name="tx_apellido_materno" id="tx_apellido_materno" size="25" value="<?php echo $this->persona->tx_apellido_materno; ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td>Fecha Nacimiento:</td>
                                <td>
                                    <?php echo JHTML::_('calendar', $this->persona->fe_nacimiento, "fe_nacimiento", "fe_nacimiento", "%d/%m/%Y", array('class'=>'inputbox', 'size'=>'10', 'readonly'=>'true',  'maxlength'=>'10', 'tabindex'=>'5'));  ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <fieldset>
            <legend>H&aacute;bitos y Costumbres del Ni&ntilde;o(a) menor de 5 a&ntilde;os</legend>
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
                    <td>
                        <?php echo $this->lists['week_question_one'];?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_one'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        2. ¿Consume alimentos de origen vegetal? (Chocho, frijoles, habas y otras menestras)
                    </td>
                    <td>
                        <?php echo $this->lists['week_question_two'];?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_two'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        3. ¿Consume alimentos energ&eacute;ticos? (Papa, cebada, trigo, ma&iacute;z, aceite y/o manteca)
                    </td>
                    <td>
                        <?php echo $this->lists['week_question_three'];?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_three'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        4. ¿Consume frutas y/o verduras?
                    </td>
                    <td>
                        <?php echo $this->lists['week_question_four'];?>
                    </td>
                    <td>
                        <?php echo $this->lists['day_question_four'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        5. ¿Consume agua segura (Agua hervida o clorada)?
                    </td>
                    <td colspan="2">
                        <?php echo JHTML::_('select.booleanlist', 'in_consume_agua_segura', '', $this->actividad->in_consume_agua_segura, 'Si', 'No' ); ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <fieldset>
            <legend>Salud Infantil</legend>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 80%;">
                        6. ¿Su ni&ntilde;o ha tenido diarrea en los &uacute;ltimos 15 d&iacute;as?
                    </td>
                    <td style="width: 20%;">
                        <?php echo JHTML::_('select.booleanlist', 'in_diarrea', '', $this->actividad->in_diarrea, 'Si', 'No' ); ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 80%;">
                        7. ¿Su ni&ntilde;o ha tenido resfrio o neumon&iacute;a en los &uacute;ltimos 15 d&iacute;as?
                    </td>
                    <td style="width: 20%;">
                        <?php echo JHTML::_('select.booleanlist', 'in_resfrio', '', $this->actividad->in_resfrio, 'Si', 'No' ); ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <fieldset>
            <legend>Evaluaci&oacute;n Nutricional</legend>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%;" >
                        <table>
                            <tr>
                                <td>
                                    Fecha:
                                </td>
                                <td>
                                    <?php echo JHTML::_('calendar', $this->actividad->fe_visita, "fe_visita", "fe_visita", "%d/%m/%Y", array('class'=>'inputbox', 'size'=>'10', 'maxlength'=>'10', 'tabindex'=>'1'));  ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Peso:
                                </td>
                                <td>
                                    <input class="text_area" tabindex="2" type="text" name="de_peso" id="de_peso" size="15" value="<?php echo $this->actividad->de_peso; ?>" /> Kg.
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
                        </table>
                    </td>
                    <td style="width: 50%;" valign="top">
                        <fieldset>
                            <legend>Hemoglobina</legend>
                            <table>
                                <tr>
                                    <td>
                                        Medida:
                                    </td>
                                    <td>
                                        <input class="text_area" tabindex="4" type="text" name="nu_hemoglobina" id="nu_hemoglobina" size="15" value="<?php echo $this->actividad->nu_hemoglobina; ?>" /> gr/dl
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Anemia:
                                    </td>
                                    <td>
                                        <strong><?php echo $this->actividad->anemia; ?></strong>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </td>
                </tr>
            </table>
            <?php
        if ( $this->actividad->de_peso > 0) {
            ?>
            <fieldset>
                <legend>Diagn&oacute;stico</legend>
                <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 33%;" align="center" >Peso / Edad</th>
                            <th style="width: 34%;" align="center" >Peso / Talla</th>
                            <th style="width: 33%;" align="center" >Talla / Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">
                                <?php echo $this->lists['peso_edad']?>
                            </td>
                            <td align="center">
                                <?php echo $this->lists['peso_talla']?>
                            </td>
                            <td align="center">
                                <?php echo $this->lists['talla_edad']?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        <?php         
        } 
        ?>
        </fieldset>
        
    </fieldset>


    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->actividad->id_evaluacion_nino; ?>" />
    <input type="hidden" name="id_evaluacion_nino" value="<?php echo $this->actividad->id_evaluacion_nino; ?>" />
    <input type="hidden" name="id_entidad" value="<?php echo JRequest::getInt('personId', 0); ?>" />
    <input type="hidden" name="id_actividad" value="<?php echo $this->actividad->id_actividad; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="child" />
</form>
