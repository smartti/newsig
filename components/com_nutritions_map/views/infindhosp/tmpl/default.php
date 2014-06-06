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
<form id="frmInfindhosp" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="frmInfindhosp" 
      oninput="">

    <div class="container">

        <div>
            <fieldset>
                <legend>Acciones</legend>

                <input type="button" id="btngrabar" value="Grabar" onclick="validateFields_infindhosp();"/>
                <label></label>
                <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                <label></label>
                <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                <label></label>
                <input type="button" value="Nuevo" onclick="javascript:document.getElementById('task').value = 'newAction';
                        document.getElementById('frmIndhosp').submit();"/>
            </fieldset>

        </div>
        <div>&nbsp;</div>       
        <div class="elegant-aero">
            <input style="font-size: 12px;" placeholder="Personal de Salud" type="text" name="encuestador" id="encuestador" size="60" maxlength="250" value="<?php echo $this->infindhosp->encuestador_name; ?>" required autofocus/>
            <input type="hidden" name="nu_dni" id="nu_dni" value="<?php echo $this->infindhosp->nu_dni; ?>" required autofocus/>
            <input style="font-size: 12px;" placeholder="Establecimiento de Salud" type="text" name="establec" id="establec" size="100" maxlength="250" value="<?php echo $this->infindhosp->establec_name; ?>" required autofocus/>
            <input type="hidden" name="cod_2000" id="cod_2000" value="<?php echo $this->infindhosp->cod_2000; ?>" required/>
            <table>
                <tr>
                    <td style="font-size: 12px;"><?php echo $this->lists['resultado_anho']; ?></td>
                    <td style="font-size: 12px;"><?php echo $this->lists['resultado_mes']; ?></td>                                 
                </tr>
            </table>             
        </div>
        <div>
            <section class="tabs">
                <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                <label for="tab-1" class="tab-label-1">Formato 1</label>

                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                <label for="tab-2" class="tab-label-2">Formato 2</label>

                <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                <label for="tab-3" class="tab-label-3">Formato 3</label>

                <div class="clear-shadow"></div>

                <div class="content">
                    <div class="content-1">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style" summary="tabla_actividades">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan='2'></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th colspan="2" scope="col" style="text-align:center;">Transferencia en el mes</th>                                            
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col">ESTAN.</th>                                            
                                    <th scope="col">SERVICIO</th>
                                    <th scope="col">SALDO MES ANTERIOR</th>
                                    <th scope="col">INGRESO EN EL MES</th>
                                    <th scope="col">DE OTROS SERVICIOS</th>
                                    <th scope="col">A OTROS SERVICIOS</th>
                                    <th scope="col">EGRESOS EN EL MES</th>
                                    <th scope="col">SALDO PARA EL MES SIG.</th>
                                    <th scope="col">DIAS PACIENTES</th>                                            
                                    <th scope="col">DIAS CAMA</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="n2"><output name="A_a"></output></td>
                                    <td class="n2">00_Total</td>
                                    <td class="n2"><output name="A_b"></output></td>
                                    <td class="n2"><output name="A_c"></output></td>
                                    <td class="n2"><output name="A_d"></output></td>
                                    <td class="n2"><output name="A_e"></output></td>
                                    <td class="n2"><output name="A_f"></output></td>
                                    <td class="n2"><output name="A_g"></output></td>
                                    <td class="n2"><output name="A_h"></output></td>
                                    <td class="n2"><output name="A_i"></output></td>
                                </tr>
                                <tr>
                                    <td class="n2"><output name="B_a"></output></td>
                                    <td class="n2">10_Medicina</td>
                                    <td class="n2"><output name="B_b"></output></td>
                                    <td class="n2"><output name="B_c"></output></td>
                                    <td class="n2"><output name="B_d"></output></td>
                                    <td class="n2"><output name="B_e"></output></td>
                                    <td class="n2"><output name="B_f"></output></td>
                                    <td class="n2"><output name="B_g"></output></td>
                                    <td class="n2"><output name="B_h"></output></td>
                                    <td class="n2"><output name="B_i"></output></td>
                                </tr>
                                <tr>    
                                    <td><input class="text" maxlength="3" type="text" name="nu_000a" id="nu_000a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000a; ?>"/></td>
                                    <td>11_Medicina GRAL/Interna</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000b" id="nu_000b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000c" id="nu_000c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000d" id="nu_000d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000e" id="nu_000e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000f" id="nu_000f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000g" id="nu_000g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000h" id="nu_000h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_000i" id="nu_000i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_000i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001a" id="nu_001a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001a; ?>"/></td>
                                    <td>12_Neumología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001b" id="nu_001b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001c" id="nu_001c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001d" id="nu_001d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001e" id="nu_001e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001f" id="nu_001f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001g" id="nu_001g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001h" id="nu_001h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_001i" id="nu_001i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_001i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002a" id="nu_002a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002a; ?>"/></td>
                                    <td>13_Cardiología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002b" id="nu_002b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002c" id="nu_002c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002d" id="nu_002d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002e" id="nu_002e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002f" id="nu_002f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002g" id="nu_002g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002h" id="nu_002h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_002i" id="nu_002i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_002i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003a" id="nu_003a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003a; ?>"/></td>
                                    <td>14_Neurología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003b" id="nu_003b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003c" id="nu_003c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003d" id="nu_003d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003e" id="nu_003e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003f" id="nu_003f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003g" id="nu_003g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003h" id="nu_003h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_003i" id="nu_003i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_003i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004a" id="nu_004a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004a; ?>"/></td>
                                    <td>15_Gastroenterología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004b" id="nu_004b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004c" id="nu_004c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004d" id="nu_004d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004e" id="nu_004e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004f" id="nu_004f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004g" id="nu_004g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004h" id="nu_004h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_004i" id="nu_004i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_004i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005a" id="nu_005a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005a; ?>"/></td>
                                    <td>16_Dermatología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005b" id="nu_005b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005c" id="nu_005c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005d" id="nu_005d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005e" id="nu_005e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005f" id="nu_005f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005g" id="nu_005g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005h" id="nu_005h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_005i" id="nu_005i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_005i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006a" id="nu_006a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006a; ?>"/></td>
                                    <td>17_Nefrología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006b" id="nu_006b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006c" id="nu_006c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006d" id="nu_006d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006e" id="nu_006e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006f" id="nu_006f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006g" id="nu_006g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006h" id="nu_006h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_006i" id="nu_006i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_006i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007a" id="nu_007a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007a; ?>"/></td>
                                    <td>18_Psiquiatría</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007b" id="nu_007b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007c" id="nu_007c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007d" id="nu_007d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007e" id="nu_007e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007f" id="nu_007f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007g" id="nu_007g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007h" id="nu_007h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_007i" id="nu_007i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_007i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n2"><output name="C_a"></output></td>
                                    <td class="n2">19_Otros</td>
                                    <td class="n2"><output name="C_b"></output></td>
                                    <td class="n2"><output name="C_c"></output></td>
                                    <td class="n2"><output name="C_d"></output></td>
                                    <td class="n2"><output name="C_e"></output></td>
                                    <td class="n2"><output name="C_f"></output></td>
                                    <td class="n2"><output name="C_g"></output></td>
                                    <td class="n2"><output name="C_h"></output></td>
                                    <td class="n2"><output name="C_i"></output></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008a" id="nu_008a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008a; ?>"/></td>
                                    <td>19A_Otros (Med.Onc)</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008b" id="nu_008b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008c" id="nu_008c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008d" id="nu_008d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008e" id="nu_008e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008f" id="nu_008f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008g" id="nu_008g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008h" id="nu_008h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_008i" id="nu_008i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_008i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009a" id="nu_009a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009a; ?>"/></td>
                                    <td>19B_Otros(UCI)</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009b" id="nu_009b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009c" id="nu_009c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009d" id="nu_009d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009e" id="nu_009e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009f" id="nu_009f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009g" id="nu_009g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009h" id="nu_009h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_009i" id="nu_009i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_009i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n2"><output name="C_a"></output></td>
                                    <td class="n2">20_Cirugía</td>
                                    <td class="n2"><output name="C_b"></output></td>
                                    <td class="n2"><output name="C_c"></output></td>
                                    <td class="n2"><output name="C_d"></output></td>
                                    <td class="n2"><output name="C_e"></output></td>
                                    <td class="n2"><output name="C_f"></output></td>
                                    <td class="n2"><output name="C_g"></output></td>
                                    <td class="n2"><output name="C_h"></output></td>
                                    <td class="n2"><output name="C_i"></output></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010a" id="nu_010a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010a; ?>"/></td>
                                    <td>21_Cirugía General</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010b" id="nu_010b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010c" id="nu_010c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010d" id="nu_010d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010e" id="nu_010e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010f" id="nu_010f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010g" id="nu_010g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010h" id="nu_010h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_010i" id="nu_010i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_010i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011a" id="nu_011a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011a; ?>"/></td>
                                    <td>22_Traum y Ortoped</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011b" id="nu_011b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011c" id="nu_011c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011d" id="nu_011d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011e" id="nu_011e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011f" id="nu_011f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011g" id="nu_011g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011h" id="nu_011h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_011i" id="nu_011i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_011i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012a" id="nu_012a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012a; ?>"/></td>
                                    <td>23_Otorrinolaring</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012b" id="nu_012b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012c" id="nu_012c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012d" id="nu_012d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012e" id="nu_012e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012f" id="nu_012f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012g" id="nu_012g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012h" id="nu_012h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_012i" id="nu_012i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_012i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013a" id="nu_013a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013a; ?>"/></td>
                                    <td>24_Oftalmología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013b" id="nu_013b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013c" id="nu_013c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013d" id="nu_013d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013e" id="nu_013e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013f" id="nu_013f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013g" id="nu_013g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013h" id="nu_013h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_013i" id="nu_013i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_013i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014a" id="nu_014a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014a; ?>"/></td>
                                    <td>25_Urología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014b" id="nu_014b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014c" id="nu_014c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014d" id="nu_014d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014e" id="nu_014e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014f" id="nu_014f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014g" id="nu_014g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014h" id="nu_014h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_014i" id="nu_014i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_014i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015a" id="nu_015a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015a; ?>"/></td>
                                    <td>26_Neurología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015b" id="nu_015b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015c" id="nu_015c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015d" id="nu_015d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015e" id="nu_015e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015f" id="nu_015f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015g" id="nu_015g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015h" id="nu_015h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_015i" id="nu_015i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_015i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016a" id="nu_016a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016a; ?>"/></td>
                                    <td>27_Otros</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016b" id="nu_016b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016c" id="nu_016c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016d" id="nu_016d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016e" id="nu_016e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016f" id="nu_016f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016g" id="nu_016g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016h" id="nu_016h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_016i" id="nu_016i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_016i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n2"><output name="C_a"></output></td>
                                    <td class="n2">30_Pediatría</td>
                                    <td class="n2"><output name="C_b"></output></td>
                                    <td class="n2"><output name="C_c"></output></td>
                                    <td class="n2"><output name="C_d"></output></td>
                                    <td class="n2"><output name="C_e"></output></td>
                                    <td class="n2"><output name="C_f"></output></td>
                                    <td class="n2"><output name="C_g"></output></td>
                                    <td class="n2"><output name="C_h"></output></td>
                                    <td class="n2"><output name="C_i"></output></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017a" id="nu_017a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017a; ?>"/></td>
                                    <td>31_Lactante</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017b" id="nu_017b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017c" id="nu_017c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017d" id="nu_017d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017e" id="nu_017e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017f" id="nu_017f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017g" id="nu_017g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017h" id="nu_017h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_017i" id="nu_017i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_017i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018a" id="nu_018a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018a; ?>"/></td>
                                    <td>32_Neonatología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018b" id="nu_018b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018c" id="nu_018c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018d" id="nu_018d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018e" id="nu_018e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018f" id="nu_018f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018g" id="nu_018g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018h" id="nu_018h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_018i" id="nu_018i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_018i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019a" id="nu_019a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019a; ?>"/></td>
                                    <td>33_UCIN</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019b" id="nu_019b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019c" id="nu_019c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019d" id="nu_019d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019e" id="nu_019e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019f" id="nu_019f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019g" id="nu_019g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019h" id="nu_019h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_019i" id="nu_019i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_019i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020a" id="nu_020a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020a; ?>"/></td>
                                    <td>34_Pre-Escolar(1-4 a.)</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020b" id="nu_020b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020c" id="nu_020c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020d" id="nu_020d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020e" id="nu_020e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020f" id="nu_020f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020g" id="nu_020g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020h" id="nu_020h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_020i" id="nu_020i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_020i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021a" id="nu_021a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021a; ?>"/></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 a.</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021b" id="nu_021b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021c" id="nu_021c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021d" id="nu_021d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021e" id="nu_021e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021f" id="nu_021f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021g" id="nu_021g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021h" id="nu_021h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_021i" id="nu_021i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_021i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022a" id="nu_022a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022a; ?>"/></td>
                                    <td>35_Escolar (6-14 a.)</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022b" id="nu_022b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022c" id="nu_022c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022d" id="nu_022d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022e" id="nu_022e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022f" id="nu_022f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022g" id="nu_022g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022h" id="nu_022h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_022i" id="nu_022i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_022i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td class="n2"><output name="C_a"></output></td>
                                    <td class="n2">40_Obstetricia y Ginecología</td>
                                    <td class="n2"><output name="C_b"></output></td>
                                    <td class="n2"><output name="C_c"></output></td>
                                    <td class="n2"><output name="C_d"></output></td>
                                    <td class="n2"><output name="C_e"></output></td>
                                    <td class="n2"><output name="C_f"></output></td>
                                    <td class="n2"><output name="C_g"></output></td>
                                    <td class="n2"><output name="C_h"></output></td>
                                    <td class="n2"><output name="C_i"></output></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023a" id="nu_023a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023a; ?>"/></td>
                                    <td>41_Obstetricia</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023b" id="nu_023b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023c" id="nu_023c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023d" id="nu_023d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023e" id="nu_023e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023f" id="nu_023f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023g" id="nu_023g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023h" id="nu_023h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_023i" id="nu_023i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_023i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024a" id="nu_024a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024a; ?>"/></td>
                                    <td>42_Ginecología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024b" id="nu_024b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024c" id="nu_024c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024d" id="nu_024d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024d; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024e" id="nu_024e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024f" id="nu_024f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024g" id="nu_024g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024h" id="nu_024h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024h; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_024i" id="nu_024i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_024i; ?>"/></td>
                                </tr>
                                <tr>
                                    <td colspan="10">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="n2"></td>
                                    <td class="n2" colspan="3">N° de Consulta de Emergencias</td>
                                    <td class="n2" ><input class="text" maxlength="3" type="text" name="nu_025a" id="nu_025a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025a; ?>"/></td>
                                    <td colspan="5"></td> 
                                </tr>                        
                            </tbody>
                        </table>
                    </div>
                    <div class="content-2">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style" summary="tabla_actividades">
                            <tr>
                                <td>50. Nacidos Vivos</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025b" id="nu_025b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025b; ?>"/></td>
                            </tr>
                            <tr>
                                <td>60. Defunciones Fetal</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025c" id="nu_025c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025c; ?>"/></td>
                            </tr>
                            <tr>
                                <td>61. Abortos</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025d" id="nu_025d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025d; ?>"/></td>
                            </tr>
                            <tr>
                                <td>70. Partos</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025e" id="nu_025e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025e; ?>"/></td>
                            </tr>
                            <tr>
                                <td>70.1 Partos en adolescentes</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025f" id="nu_025f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025f; ?>"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="n2">Pacientes Egresos</td>
                            </tr>
                            <tr>
                                <td>80. Altas vivas</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025g" id="nu_025g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025g; ?>"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="n2">Fallecidos</td>
                            </tr>
                            <tr>
                                <td>83. Antes de 24 HORAS</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025h" id="nu_025h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025h; ?>"/></td>
                            </tr>
                            <tr>
                                <td>84. 24-48 HORAS</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_025i" id="nu_025i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_025i; ?>"/></td>
                            </tr>
                            <tr>
                                <td>85. Mas 48 horas</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026a" id="nu_026a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026a; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Número de camas</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026b" id="nu_026b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026b; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="n2" style="text-align: center">INTERVENCIONES QUIRÚRGICAS</td>
                            </tr>
                            <tr>
                                <td class="n2">Total</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11. Cirugía General</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026c" id="nu_026c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026c; ?>"/></td>
                            </tr>
                            <tr>
                                <td>11. Cirugía Pediátrica</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026d" id="nu_026d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026d; ?>"/></td>
                            </tr>
                            <tr>
                                <td>11. Cirugía Plástica</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026e" id="nu_026e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026e; ?>"/></td>
                            </tr>
                            <tr>
                                <td>12. Traum. y Orto.</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026f" id="nu_026f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026f; ?>"/></td>
                            </tr>
                            <tr>
                                <td>13. Otorrinolaringología</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026g" id="nu_026g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026g; ?>"/></td>
                            </tr>
                            <tr>
                                <td>14. Oftamología</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026h" id="nu_026h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026h; ?>"/></td>
                            </tr>
                            <tr>
                                <td>15. Urología</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_026i" id="nu_026i"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_026i; ?>"/></td>
                            </tr>
                            <tr>
                                <td>16. Urología</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027a" id="nu_027a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027a; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Otros</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027b" id="nu_027b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027b; ?>"/></td>
                            </tr>
                            <tr>
                                <td class="n2">17. Ginecología y Obstetricia</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Cesáreas</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027c" id="nu_027c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027c; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Legrados Uterinos</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027d" id="nu_027d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027d; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;AQV Femenino (Ligaduras de Trompas Uterinas)</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027e" id="nu_027e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027e; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;AQV MAsculino (Vasectomía)</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027f" id="nu_027f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027f; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Otras Ginecologías</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027g" id="nu_027g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027g; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;Cesáreas + AQV Femenino</td>
                                <td><input class="text" maxlength="3" type="text" name="nu_027h" id="nu_027h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_027h; ?>"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="content-3">
                        <div class="clear-shadow"></div>
                        <table id="gradient-style" summary="tabla_actividades">
                            <thead>
                                <tr>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">SERVICIO</th>                                            
                                    <th scope="col">Hospitalización</th>
                                    <th scope="col">Consulta Externa</th>
                                    <th scope="col">Consulta Emergencia</th>
                                    <th scope="col">Otro</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="n2" colspan="2" style="text-align: center">10. LABORATORIO Y ANATOMÍA PATOLÍGICA</td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>11. Exámen Bioquímicos</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028a" id="nu_028a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028b" id="nu_028b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028c" id="nu_028c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028d" id="nu_028d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>12. Exámen Hemtalógicos</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028e" id="nu_028e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028f" id="nu_028f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028g" id="nu_028g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_028h" id="nu_028h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_028h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>13. Exámen Microbiológicos</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029a" id="nu_029a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029b" id="nu_029b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029c" id="nu_029c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029d" id="nu_029d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>14. Exámenes Inmunología</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029e" id="nu_029e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029f" id="nu_029f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029g" id="nu_029g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_029h" id="nu_029h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_029h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>15. Exámen Histológicos</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030a" id="nu_030a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030b" id="nu_030b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030c" id="nu_030c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030d" id="nu_030d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>16. Exámen Citológicos</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030e" id="nu_030e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030f" id="nu_030f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030g" id="nu_030g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_030h" id="nu_030h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_030h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>17. Autopsia médico legales</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031a" id="nu_031a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031b" id="nu_031b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031c" id="nu_031c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031d" id="nu_031d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>18. Autopsias clínicas</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031e" id="nu_031e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031f" id="nu_031f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031g" id="nu_031g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_031h" id="nu_031h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_031h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>19. Banco de Sangre</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032a" id="nu_032a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032b" id="nu_032b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032c" id="nu_032c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032d" id="nu_032d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>20. Otros Laboratorio</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032e" id="nu_032e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032f" id="nu_032f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032g" id="nu_032g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_032h" id="nu_032h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_032h; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>21. Baciloscopía</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033a" id="nu_033a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033b" id="nu_033b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033c" id="nu_033c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033d" id="nu_033d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>22. Gota Gruesa</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033e" id="nu_033e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033f" id="nu_033f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033g" id="nu_033g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_033h" id="nu_033h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_033h; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="n2" >20. RADIOLOGÍA</td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>21. Radioscopía</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034a" id="nu_034a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034b" id="nu_034b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034c" id="nu_034c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034d" id="nu_034d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>22. Exámenes radiografías</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034e" id="nu_034e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034f" id="nu_034f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034g" id="nu_034g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_034h" id="nu_034h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_034h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>23. Radiografías tomadas</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035a" id="nu_035a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035b" id="nu_035b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035c" id="nu_035c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035d" id="nu_035d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>24. Fotoradiografías</td>    
                                    <td><input class="text" maxlength="3" type="text" name="nu_035e" id="nu_035e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035f" id="nu_035f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035g" id="nu_035g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_035h" id="nu_035h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_035h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>25. Aplicación de Rayos X</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036a" id="nu_036a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036b" id="nu_036b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036c" id="nu_036c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036d" id="nu_036d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>26. Aplicación de RADIUM</td>    
                                    <td><input class="text" maxlength="3" type="text" name="nu_036e" id="nu_036e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036f" id="nu_036f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036g" id="nu_036g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_036h" id="nu_036h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_036h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>27. Otras radiografías</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037a" id="nu_037a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037b" id="nu_037b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037c" id="nu_037c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037d" id="nu_037d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>28. Ecografía</td>    
                                    <td><input class="text" maxlength="3" type="text" name="nu_037e" id="nu_037e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037f" id="nu_037f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037g" id="nu_037g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_037h" id="nu_037h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_037h; ?>"/></td>
                                </tr>
                              </tbody>
                        </table>
                        <table id="gradient-style" summary="tabla_actividades">
                            <thead>
                                <tr>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">SERVICIO</th>                                            
                                    <th scope="col">Hospitalización</th>
                                    <th scope="col">Consulta Externa</th>
                                    <th scope="col">Consulta Emergencia</th>
                                    <th scope="col">Otro</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="n2" >30. FARMACIA</td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>31. Recetas despachadas</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038a" id="nu_038a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038b" id="nu_038b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038c" id="nu_038c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038d" id="nu_038d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="n2" >40. NUTRICIÓN DIETÉTICA</td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>41. Ración para paciente</td>     
                                    <td><input class="text" maxlength="3" type="text" name="nu_038e" id="nu_038e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038f" id="nu_038f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038g" id="nu_038g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_038h" id="nu_038h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_038h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>42. Ración para personal</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039a" id="nu_039a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039b" id="nu_039b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039c" id="nu_039c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039d" id="nu_039d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>43. Biberones</td>     
                                    <td><input class="text" maxlength="3" type="text" name="nu_039e" id="nu_039e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039f" id="nu_039f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039g" id="nu_039g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_039h" id="nu_039h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_039h; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td class="n2" >50. OTROS PROCEDIMIENTOS DE DIAGNÓSTICOS</td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                    <td class="n2" ></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>51. Electrocardiografías</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040a" id="nu_040a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040b" id="nu_040b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040c" id="nu_040c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040d" id="nu_040d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>52. Electroencefalogramas</td>    
                                    <td><input class="text" maxlength="3" type="text" name="nu_040e" id="nu_040e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040f" id="nu_040f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040g" id="nu_040g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_040h" id="nu_040h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_040h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>53. Espirometría</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041a" id="nu_041a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041b" id="nu_041b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041c" id="nu_041c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041d" id="nu_041d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>54. Biopsia pleural</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041e" id="nu_041e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041f" id="nu_041f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041g" id="nu_041g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_041h" id="nu_041h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_041h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>55. Toraconcentesis</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042a" id="nu_042a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042b" id="nu_042b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042c" id="nu_042c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042d" id="nu_042d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>56. Terapia Ocupacional</td>      
                                    <td><input class="text" maxlength="3" type="text" name="nu_042e" id="nu_042e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042f" id="nu_042f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042g" id="nu_042g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_042h" id="nu_042h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_042h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>57. Tópico Curaciones (Extrac. Puntos)</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043a" id="nu_043a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043b" id="nu_043b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043c" id="nu_043c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043d" id="nu_043d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043d; ?>"/></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>58. Inyectables aplicadas</td>     
                                    <td><input class="text" maxlength="3" type="text" name="nu_043e" id="nu_043e"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043e; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043f" id="nu_043f"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043f; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043g" id="nu_043g"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043g; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_043h" id="nu_043h"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_043h; ?>"/></td>

                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>59. Lavandería (KGS Ropa lavada)</td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_044a" id="nu_044a"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_044a; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_044b" id="nu_044b"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_044b; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_044c" id="nu_044c"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_044c; ?>"/></td>
                                    <td><input class="text" maxlength="3" type="text" name="nu_044d" id="nu_044d"  onKeypress="return validaNum(event)" value="<?php echo $this->infindhosp->nu_044d; ?>"/></td>
                                </tr>                                                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>        
        <script type="text/javascript">
            var options = {
                script: "index.php?option=com_nutritions&controller=person&task=getEncuestador&",
                varname: "encuestadorName",
                json: true,
                shownoresults: false,
                maxresults: 6,
                callback: function(obj) {
                    document.getElementById('nu_dni').value = obj.id;
                }
            };
            var as_json = new bsn.AutoSuggest('encuestador', options);
        </script>

        <script type="text/javascript">
            var options_es = {
                script: "index.php?option=com_nutritions&controller=establec&task=getEstablec&",
                varname: "establecName",
                json: true,
                shownoresults: false,
                maxresults: 6,
                callback: function(obj) {
                    document.getElementById('cod_2000').value = obj.id;
                }
            };
            var as_json_es = new bsn.AutoSuggest('establec', options_es);
        </script> 

    </div>

    <input type="hidden" name="option" value="com_nutritions" />
    <input type="hidden" name="cid[]" value="<?php echo $this->infindhosp->id_indhosp; ?>" />
    <input type="hidden" name="id_indhosp" value="<?php echo $this->infindhosp->id_indhosp; ?>" />
    <input type="hidden" name="task" id="task" value="edit" />
    <input type="hidden" name="controller" value="infindhosp" />
</form>
