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
        <legend>Ubigeo</legend>
        <table>
            <tr>              
                <td>Departamento:</td>
                <td>
                    <input class="text_area" type="text" name="ubigeo_dpto" id="ubigeo_dpto" readonly="true" size="65" value="<?php echo $this->establecimiento->ubigeo_dpto; ?>" />
                </td>
                <td>Ubigeo:</td>
                <td>
                    <input class="text_area" type="text" name="id_ubigeo" id="id_ubigeo" readonly="true" size="20" maxlength="250" value="<?php echo $this->establecimiento->id_ubigeo; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Provincia:</td>
                <td>
                    <input class="text_area" type="text" name="ubigeo_prov" id="ubigeo_prov" readonly="true" size="65" value="<?php echo $this->establecimiento->ubigeo_prov; ?>" />
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>              
                <td>Distrito:</td>
                <td>
                    <input class="text_area" type="text" name="ubigeo_dist" id="ubigeo_dist" readonly="true" size="65" value="<?php echo $this->establecimiento->ubigeo_dist; ?>" />
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                </td>                
            </tr>
            <tr>
                <td>Disa:</td>
                <td>
                    <input class="text_area" type="text" name="desc_disa" id="desc_disa" readonly="true" size="65" value="<?php echo $this->establecimiento->desc_disa; ?>" />
                </td>
            </tr>
            <tr>
                <td>Red:</td>
                <td>
                    <input class="text_area" type="text" name="desc_red" id="desc_red" readonly="true" size="65" value="<?php echo $this->establecimiento->desc_red; ?>" />
                </td>
            </tr>
            <tr>
                <td>Microred:</td>
                <td>
                    <input class="text_area" type="text" name="desc_micro" id="desc_micro" readonly="true" size="65" value="<?php echo $this->establecimiento->desc_micro; ?>" />
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Datos Generales</legend>
        <table>

            <tr>
                <td>Establecimiento:</td>
                <td>
                    <input class="text_area" type="text" name="cod_2000" id="cod_2000" readonly="true" size="16" value="<?php echo $this->establecimiento->cod_2000; ?>" />
                </td>
                <td coldspan="2">
                    <input class="text_area" tabindex="3" type="text" name="desc_estab" id="desc_estab" readonly="true" size="55" value="<?php echo $this->establecimiento->desc_estab; ?>" />
                </td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>
                    <?php echo JHTML::_('select.booleanlist', 'estado', '', $this->establecimiento->estado, 'Activo', 'Inactivo'); ?>
                </td>
            </tr>            
        </table>
    </fieldset>


    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->establecimiento->cod_2000; ?>" />
    <input type="hidden" name="cod_2000" value="<?php echo $this->establecimiento->cod_2000; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="establec" />
</form>

<?php
if ($this->establecimiento->cod_2000 > 0) {
    ?>
    <fieldset>
        <legend>Informes Generales</legend>
        <form id="infgeneralForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="infgeneralForm">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 50%; text-align: center;">
                        <input type="button" name="btnInformeGeneral" value="Informe General" onclick="javascript:document.getElementById('newTask').value = 'addInfGeneral'; document.getElementById('infgeneralForm').submit();" />
                    </td>
                </tr>
            </table>
            <input type="hidden" name="option" value="com_nutritions" />
            <input type="hidden" name="task" id="newTask" value="" />
            <input type="hidden" name="controller" value="establec" />
            <input type="hidden" name="establecId" value="<?php echo $this->establecimiento->cod_2000; ?>" />
        </form>

        <?php
        if (count($this->infResults) > 0) {
            ?>
            <fieldset>
                <legend>Ni&ntilde;os</legend>
                <table border="1" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>F. Informe</th>
                            <th>Tiempo(Vig)</th>
                            <th>Establecimiento</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>FAX</th>
                            <th>Dir. General</th>
                            <th>Dir. Estadís</th>
                            <th>Indicadores Hosp.</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <?php
                    $k = 0;
                    for ($i = 0, $n = count($this->infResults); $i < $n; $i++) {
                        $row = &$this->infResults[$i];
                        $showLink = JRoute::_("index.php?option=com_nutritions&controller=infgeneral&view=infgeneral&establecId={$this->establecimiento->cod_2000}&task=edit&Itemid=3&cid[]=" . $row->id_informe_general);
                        $deleteLink = JRoute::_("index.php?option=com_nutritions&controller=infgeneral&task=deleteInforme&establecId={$this->establecimiento->cod_2000}&id=" . $row->id_informe_general);
                        ?>
                        <tr class="<?php echo "row$k"; ?>">
                            <td style="text-align:center;">
                                <?php echo $i + 1; ?>
                            </td>
                            <td style="text-align:center;">
                                <?php
                                $temporalArray = explode('-', $row->fe_informe);
                                echo $temporalArray[2] . '/' . $temporalArray[1] . '/' . $temporalArray[0];
                                ?>
                            </td>
                            <td style="text-align:center;">
                                <?php
                                $tempInf = explode('/', $this->establecimiento->fe_informe);
                                $fe_informe = $tempInf[2] . '-' . $tempInf[1] . '-' . $tempInf[0];
                                echo $this->getYearDiff($fe_informe, $row->fe_informe);
                                ?>
                            </td>
                            <td>
                                <?php echo $row->cod_2000; ?>
                            </td>
                            <td>
                                <?php echo $row->tx_direccion; ?>
                            </td>
                            <td>
                                <?php echo $row->tx_telefono; ?>
                            </td>
                            <td>
                                <?php echo $row->tx_fax; ?>
                            </td>
                            <td>
                                <?php echo $row->nu_dni_dir_general; ?>
                            </td>
                            <td>
                                <?php echo $row->nu_dni_dir_estadistica; ?>
                            </td>
                            <td>
                                <?php echo $row->nu_dni_dir_ind_hospital; ?>
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


<?php } ?>
