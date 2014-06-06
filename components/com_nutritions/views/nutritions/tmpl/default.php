<?php
defined('_JEXEC') or die('Restricted access');
$ordering = 1;
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
                    <input class="text_area" type="text" name="id_familia" id="codigo" size="32" maxlength="250" value="<?php echo ($this->id_familia) ? $this->id_familia : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Provincia:</td>
                <td>
                    <?php echo $this->lists['Provincias'];?>
                </td>
                <td>Apellidos:</td>
                <td>
                    <input class="text_area" type="text" name="tx_apellidos" id="apellidos" size="32" maxlength="250" value="<?php echo ($this->tx_apellidos) ? $this->tx_apellidos : ''; ?>" />
                </td>
            </tr>
            <tr>              
                <td>Distrito:</td>
                <td>
                    <?php echo $this->lists['Distritos'];?>
                </td>
                <td colspan="2">&nbsp;</td>
            </tr>
        </table>
    </fieldset>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="task" id="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="nutritions" />
    <input type="hidden" name="view" value="nutritions" />
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
                    Apellidos
                </th>
                <th>
                    Fecha de visita 1
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
            $link = JRoute::_('index.php?option=com_nutritions&controller=nutrition&view=nutrition&task=edit&Itemid=3&cid[]=' . $row->id_familia);
            ?>
            <tr class="<?php echo "row$k"; ?>">
                <td style="text-align:center;">
                    <?php echo $i+1; ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $row->id_familia; ?>
                </td>
                <td>
                    <?php echo $row->tx_apellidos; ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $row->fe_visita1; ?>
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

