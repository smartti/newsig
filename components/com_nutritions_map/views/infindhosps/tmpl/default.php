<?php
defined('_JEXEC') or die('Restricted access');
?>

<form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">

    <?php 
    $new = JRoute::_('index.php?option=com_nutritions&controller=infindhosp&view=infindhosp&task=edit&Itemid=3&cid[]=');
    ?>
    <fieldset>
        <table>
            <tr>              
                <td>
                    <input style="font-size: 10px;" placeholder="Buscar Establecimiento de Salud" type="text" name="establec" id="establec" size="100" maxlength="250" value="<?php echo $this->infindhosps->establec_name; ?>" required autofocus/>
                    <input type="hidden" name="cod_2000" id="cod_2000" value="" required/>
                    <a>&nbsp;</a>
                    <a class="glyphicon glyphicon-search" href="#" onclick="validateSearch();"/>
                    <a>&nbsp;&nbsp;</a>
                    <a class="glyphicon glyphicon-plus"  href="<?php echo $new ?>" />
                </td>
            </tr>
        </table>
    </fieldset>
                <script type="text/javascript">
                    var options_es = {
                        script:"index.php?option=com_nutritions&controller=establec&task=getEstablec&",
                        varname:"establecName",
                        json:true,
                        shownoresults:false,
                        maxresults:6,
                        callback: function (obj) { document.getElementById('cod_2000').value = obj.id; }
                    };
                    var as_json_es = new bsn.AutoSuggest('establec', options_es);
                </script> 
    
    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="task" id="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="infindhosps" />
    <input type="hidden" name="view" value="infindhosps" />
</form>
<?php

if(count($this->results) > 0 ){
?>
<fieldset>
    <legend>Resultados</legend>
    <table class="table table-bordered" style="width: 100%;" border="1">
        <thead>
            <tr>
                <th width="20">
                    N°
                </th>
                <th>
                    Ejecutora
                </th>
                <th>
                    Geresa
                </th>
                <th>
                    Red
                </th>
                <th>
                    EESS
                </th>
                <th>
                    Responsable
                </th>
                <th>
                    Año
                </th>
                <th>
                    Mes
                </th>
                <th>
                    Acciones
                </th>
            </tr>		
        </thead>
        <?php
        $k = 0;
        for ($i = 0, $n = count($this->results); $i < $n; $i++) {
            $row = &$this->results[$i];
            
            $link = JRoute::_('index.php?option=com_nutritions&controller=infindhosp&view=infindhosp&task=edit&Itemid=3&cid[]=' . $row->id_indhosp);
            $deleteLink = JRoute::_('index.php?option=com_nutritions&controller=infindhosp&task=removeInfindhosp&infindhospId=' . $row->id_indhosp);
            ?>
            <tr class="<?php echo "row$k"; ?>">
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $i+1; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->DESC_UE; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->DESC_DISA; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->DESC_RED; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->DESC_ESTAB; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->encuestador_name; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->ano; ?>
                </td>
                <td style="text-align:center; font-size: 0.7em">
                    <?php echo $row->mes; ?>
                </td>
                <td style="text-align:center;">
                    <a class="glyphicon glyphicon-pencil"  href="<?php echo $link ?>" />
                    <a>&nbsp;&nbsp;</a>
                    <!--<a class="glyphicon glyphicon-minus"  href="<?php // echo $deleteLink ?>" />-->
                    
                     <a class="glyphicon glyphicon-minus"  href="#" onclick="verifyDelete_indhosp(<?php echo $row->id_indhosp ?>);return false;" />
                   
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
