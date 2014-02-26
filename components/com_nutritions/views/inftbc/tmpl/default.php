<?php defined('_JEXEC') or die('Restricted access'); ?>

<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
	
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
<form id="tbcForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="tbcForm">
<fieldset>
    <legend>Acciones</legend>
    <table style="width: 100%;">
        <tr>
            <td style="width: 25%;">
                <input type="button" value="Grabar" onclick="javascript:document.getElementById('task').value = 'saveAction'; document.getElementById('tbcForm').submit();"/>
            </td>
            <td>
                &nbsp;
            </td>
            <td style="width: 25%;">
                <input type="button" value="Limpiar" onclick="javascript:document.getElementById('task').value = 'cleanAction'; document.getElementById('tbcForm').submit();"/>
            </td>
            <td style="width: 25%;">
                <input type="button" value="Cancelar" onclick="javascript:document.getElementById('task').value = 'cancelAction'; document.getElementById('tbcForm').submit();"/>
            </td>
        </tr>
    </table>
</fieldset>

<fieldset>
<div class="container">
    <section class="tabs">
            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
            <label for="tab-1" class="tab-label-1">Parte 1</label>

            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
            <label for="tab-2" class="tab-label-2">Parte 2</label>
        <div class="clear-shadow"></div>			
            <div class="content">
               <div class="content-1">
                   <table>
                       <td>
                       <tr>
                           <input class="text_area" type="text" name="nu_00a" id="nu_00a" size="25" maxlength="250" value="<?php echo $this->inftbc->nu_00a; ?>" />
                       </tr>
                       </td>
                   </table>         
               </div>
               <div class="content-2">
               </div>

            </div>
     </section>
</div>
</fieldset>
        <input type="hidden" name="option" value="com_nutritions" />
        <input type="hidden" name="task" id="newTask" value="" />
        <input type="hidden" name="controller" value="inftbc" />
        <input type="hidden" name="tbcId" value="<?php echo $this->inftbc->id_tbc; ?>" />
</form>