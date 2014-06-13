<?php
defined('_JEXEC') or die('Restricted access');
?>

<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">

    <fieldset>
        <legend>Acciones</legend>
        <table style="width: 100%;">
            <tr>
                <td style="width: 25%;">
                    <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction'; document.getElementById('adminForm').submit();"/>
                </td>
                <td>
                    &nbsp;
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Buscar" onclick="javascript:document.getElementById('task').value = 'searchAction'; document.getElementById('adminForm').submit();"/>
                </td>
                <td style="width: 25%;">
                    <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('adminForm').submit();"/>
                </td>
            </tr>
        </table>
    </fieldset>
    
    <fieldset>
        <legend>Datos de la Familia</legend>
        <table>
            <tr>              
                <td>Departamento:</td>
                <td>
                    <?php echo $this->lists['Departamentos'];?>
                </td>
                <td>Codigo:</td>
                <td>
                    <input class="text_area" type="text" name="id_entidad" id="id_entidad" size="25" maxlength="250" value="<?php echo ($this->id_entidad) ? $this->id_entidad : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Provincia:</td>
                <td>
                    <?php echo $this->lists['Provincias'];?>
                </td>
                <td>Apellido Paterno:</td>
                <td>
                    <input class="text_area" type="text" name="tx_apellido_paterno" id="tx_apellido_paterno" size="25" maxlength="250" value="<?php echo ($this->tx_apellido_paterno) ? $this->tx_apellido_paterno : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Distrito:</td>
                <td>
                    <?php echo $this->lists['Distritos'];?>
                </td>
                <td>Apellido Materno:</td>
                <td>
                    <input class="text_area" type="text" name="tx_apellido_materno" id="tx_apellido_materno" size="25" maxlength="250" value="<?php echo ($this->tx_apellido_materno) ? $this->tx_apellido_materno : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td colspan="2">&nbsp;</td> 
                <td>Nombres:</td>
                <td>
                    <input class="text_area" type="text" name="tx_nombres" id="tx_nombres" size="25" maxlength="250" value="<?php echo ($this->tx_nombres) ? $this->tx_nombres : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td colspan="2">&nbsp;</td> 
                <td>DNI:</td>
                <td>
                    <input class="text_area" type="text" name="tx_nro_documento" id="tx_nro_documento" size="25" maxlength="250" value="<?php echo ($this->tx_nro_documento) ? $this->tx_nro_documento : ''; ?>" />
                </td>
            </tr>
        </table>
    </fieldset>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="task" id="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="persons" />
    <input type="hidden" name="view" value="persons" />
</form>
<?php
if(count($this->results) > 0 ){
?>
<fieldset>
    <legend>Resultados</legend>
    <table style="width: 100%;" border="1">
        <thead>
            <tr>
                <th width="20">
                    #
                </th>
                <th>
                    Codigo
                </th>
                <th>
                    Ap. Paterno
                </th>
                <th>
                    Ap. Materno
                </th>
                <th>
                    Nombres
                </th>
                <th>
                    Departamento
                </th>
                <th>
                    Provincia
                </th>
                <th>
                    Distrito
                </th>
                <th>
                    Ver
                </th>
            </tr>		
        </thead>
        <?php
        $k = 0;
        for ($i = 0, $n = count($this->results); $i < $n; $i++) {
            $row = &$this->results[$i];
            $link = JRoute::_('index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]=' . $row->id_entidad);
            ?>
            <tr class="<?php echo "row$k"; ?>">
                <td style="text-align:center;">
                    <?php echo $i+1; ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $row->id_entidad; ?>
                </td>
                <td>
                    <?php echo $row->tx_apellido_paterno; ?>
                </td>
                <td>
                    <?php echo $row->tx_apellido_materno; ?>
                </td>
                <td>
                    <?php echo $row->tx_nombres; ?>
                </td>
                <td>
                    <?php echo $row->ubigeo_dpto; ?>
                </td>
                <td>
                    <?php echo $row->ubigeo_prov; ?>
                </td>
                <td>
                    <?php echo $row->ubigeo_dist; ?>
                </td>
                <td>
                    <a href="<?php echo $link; ?>">Ver</a>
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

