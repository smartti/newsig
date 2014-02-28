<?php defined('_JEXEC') or die('Restricted access'); ?>

<script type="text/javascript">
function validaNum(e){ 
    var tecla = e.keyCode || e.which;
    if (tecla==8 || tecla==9) return true; //Tecla de retroceso (para poder borrar) o pasar al siguiente campo
    patron = /\d/; // Solo acepta números 
    te = String.fromCharCode(tecla); 
    return patron.test(te);  
}
</script>
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
<form id="frmPctNuevo" name="frmPctNuevo" method="post" action="nuevo.php" onsubmit="GrabarDatos(); return false;">
    <div class="container">
                <p><label>cod_2000<br />
                        <input class="text" maxlength="3" type="text" name="cod_2000" id="cod_2000" onblur="validateCode();"/>
                        <span id="codeValidation" style="font-weight: bold; color: red; display: none;">C&oacute;digo inv&aacute;lido!</span>
                    </label>
                </p>
                <p>
                    <label>DNI<br />
                        <input class="text" maxlength="3" type="text" name="nu_dni" maxlength="8" id="nu_dni" onKeypress="return validaNum(event)"/>
                    </label>
                </p>
                <p>
                    <select name="nu_ano" id="nu_ano">
                        <option value="2013" selected="selected">2013</option>
                        <option value="2014">2014</option>
                    </select>
                </p>
                <p>
                    <select name="nu_mes" id="nu_mes">
                        <option value="1" selected="selected">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>


                    </select>
                </p>
                <p>
                    <label>ATC<br />
                        <input type="text" name="nu_00a"  id="nu_00a" onKeypress="return validaNum(event)"/>                        
                    </label>
                </p>
                <p>
                    <input type="submit" name="submit" id="button" value="Enviar" disabled="disabled" />
                    <label></label>
                    <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
                    <label></label>
                    <input type="button" class="btnPrint" name="btnPrint" id="btnPrint" value="Imprimir" onclick="javascript:window.print()" />
                </p>
                <section class="tabs">
                        <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Actividades 1</label>
                        
                        <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Actividades 2</label>

                        <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3"/>
		        <label for="tab-3" class="tab-label-3">Actividades 3</label>
                        
                        <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Bacteriológicos</label>
                        <div class="clear-shadow"></div>
			
		        <div class="content">
			   <div class="content-1">
			      <div class="clear-shadow"></div>
                                <table id="gradient-style" summary="tabla_actividades">
                                    <thead>
                                        <tr>

                                            <th scope="col" width="80%">A. DETECCION Y DIAGNOSTICO DE CASOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>    
                                            <td class="n2">A1.S.R. Esperados = Atenciones en > 15 años x 0.05</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td>A2.S.R. Identificados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01a" id="nu_01a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01b" id="nu_01b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01c" id="nu_01c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01d" id="nu_01d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_01e" id="nu_01e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr><td>A3.S.R. Examinados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02a" id="nu_02a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02b" id="nu_02b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02c" id="nu_02c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02d" id="nu_02d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_02e" id="nu_02e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr><td>A4.S.R. Diagnosticados con TB Pulmonar baciloscopía positiva</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03a" id="nu_03a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03b" id="nu_03b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03c" id="nu_03c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03d" id="nu_03d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_03e" id="nu_03e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="n2">A5.   Baciloscopías de Diagnóstico esperadas (A1 x 2)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td>A6.   Baciloscopías de Diagnóstico Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_05f" id="nu_05f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>  
                                        <tr>
                                            <td>A7.   Baciloscopías de Diagnóstico BK (+)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_06f" id="nu_06f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>A8.   Baciloscopías de Control Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_07f" id="nu_07f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td>A9.   Cultivos de Diagnóstico Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_08f" id="nu_08f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr> 						
                                        <tr>
                                            <td>A10. Cultivos de Diagnóstico Positivos</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_09f" id="nu_09f" /></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>A11. Cultivos de Control Total</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_10f" id="nu_10f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr> 						
                                        <tr>
                                            <td class="n2">A12. Nº de Pruebas de Sensibilidad realizadas	</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td>A12.1 Nº de Pruebas de Sensibilidad Rápidas (H y R)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_12f" id="nu_12f" onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>A12.2 Nº de Pruebas de Sensibilidad Convencional</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_13f" id="nu_13f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col">B. CASOS NUEVOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">Total de Casos Nuevos (B1+B2)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td class="n3">B1. TB Pulmonar Total (B1.1 +B1.2 + B1.3 + B1.4)</td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                        </tr>
                                        <tr><td>        B1.1 TB Pulmonar frotis positivo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14a" id="nu_14a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14b" id="nu_14b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14c" id="nu_14c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14d" id="nu_14d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_14e" id="nu_14e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr><td>        B1.2 TB Pulmonar cultivo positivo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15a" id="nu_15a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15b" id="nu_15b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15c" id="nu_15c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15d" id="nu_15d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_15e" id="nu_15e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>        B1.3 TB Pulmonar frotis negativo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16a" id="nu_16a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16b" id="nu_16b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16c" id="nu_16c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16d" id="nu_16d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_16e" id="nu_16e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>        B1.4 TB Pulmonar sin frotis de esputo.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17a" id="nu_17a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17b" id="nu_17b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17c" id="nu_17c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17d" id="nu_17d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_17e" id="nu_17e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>  
                                        <tr>
                                            <td class="n3">B2. TB Extrapulmonar (B2.1 +B2.2)</td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                            <td class="n3"></td>
                                        </tr>
                                        <tr>
                                            <td>B2.1 Con confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18a" id="nu_18a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18b" id="nu_18b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18c" id="nu_18c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18d" id="nu_18d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_18e" id="nu_18e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td> B2.2 Sin confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19a" id="nu_19a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19b" id="nu_19b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19c" id="nu_19c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19d" id="nu_19d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_19e" id="nu_19e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>                
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col">C. RECAÍDAS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">RECAIDAS (C1 + C2)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td class="n2">C1. Recaidas Pulmonar (C1.1 + C1.2)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td>C1.1 TB Pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20a" id="nu_20a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20b" id="nu_20b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20c" id="nu_20c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20d" id="nu_20d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_20e" id="nu_20e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>C1.2 TB Pulmonar frotis negativo </td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21a" id="nu_21a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21b" id="nu_21b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21c" id="nu_21c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21d" id="nu_21d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_21e" id="nu_21e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>C2 Recaídas Extrapulmonares</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_22a" id="nu_22a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_22b" id="nu_22b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_22c" id="nu_22c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_22d" id="nu_22d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_22e" id="nu_22e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col">D. ABANDONOS RECUPERADOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">Abandonos Recuperados (D1+D2)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td class="n2">D1. Abandonos recuperados pulmonar (D1.1+D1.2)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>
                                            <td>      D1.1 TB Pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23a" id="nu_23a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23b" id="nu_23b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23c" id="nu_23c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23d" id="nu_23d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_23e" id="nu_23e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>    D1.2 TB Pulmonar frotis negativo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24a" id="nu_24a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24b" id="nu_24b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24c" id="nu_24c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24d" id="nu_24d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_24e" id="nu_24e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>D2. Abandonos Recuperados  Extrapulmonares</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_25a" id="nu_25a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_25b" id="nu_25b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_25c" id="nu_25c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_25d" id="nu_25d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_25e" id="nu_25e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                           </div>
			   <div class="content-2">
			      <div class="clear-shadow"></div>
                                <table id="gradient-style" summary="tabla_actividades">
                                    <thead>                
                                        <tr>
                                            <th scope="col">E. FRACASOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>     E1. Total de casos que fracasan a esquema con medicamentos de primera línea</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26a" id="nu_26a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26b" id="nu_26b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26c" id="nu_26c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26d" id="nu_26d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_26e" id="nu_26e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">F.  MORBILIDAD TOTAL</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>F1. Total de personas afectadas con tuberculosis</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27a" id="nu_27a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27b" id="nu_27b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27c" id="nu_27c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27d" id="nu_27d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_27e" id="nu_27e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">G.  CASOS DE TB CON RESISTENCIA A MEDICAMENTOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>G1. Casos nuevos y antes tratados de Otras Tuberculosis Drogo Resistente</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28a" id="nu_28a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28b" id="nu_28b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28c" id="nu_28c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28d" id="nu_28d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_28e" id="nu_28e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G2. Casos nuevos con TBMDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29a" id="nu_29a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29b" id="nu_29b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29c" id="nu_29c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29d" id="nu_29d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_29e" id="nu_29e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G3. Casos antes tratados con TBMDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30a" id="nu_30a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30b" id="nu_30b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30c" id="nu_30c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30d" id="nu_30d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_30e" id="nu_30e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G4. Casos nuevos con TB XDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31a" id="nu_31a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31b" id="nu_31b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31c" id="nu_31c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31d" id="nu_31d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_31e" id="nu_31e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>G5. Casos antes tratados con TB XDR confirmada</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32a" id="nu_32a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32b" id="nu_32b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32c" id="nu_32c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32d" id="nu_32d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_32e" id="nu_32e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">H.  ESTUDIO DE CONTACTOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td class="n2">H1. Contactos Esperados (Morbilidad x 4)</td>
                                            <td class="n2"></td>
                                            <td class="n2"></td> 
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                            <td class="n2"></td>
                                        </tr>
                                        <tr>    
                                            <td>H2. Contactos Censados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34a" id="nu_34a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34b" id="nu_34b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34c" id="nu_34c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34d" id="nu_34d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_34e" id="nu_34e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H3. Contactos Examinados</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35a" id="nu_35a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35b" id="nu_35b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35c" id="nu_35c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35d" id="nu_35d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_35e" id="nu_35e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H4. Contactos Examinados con TB</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36a" id="nu_36a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36b" id="nu_36b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36c" id="nu_36c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36d" id="nu_36d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_36e" id="nu_36e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>H5. Contactos Examinados con TB pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37a" id="nu_37a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37b" id="nu_37b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37c" id="nu_37c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37d" id="nu_37d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_37e" id="nu_37e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">I.  TERAPIA PREVENTIVA (TPI-TPC)</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>I1. Contactos Censados < 5 años de pacientes con TBP</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_38f" id="nu_38f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>I2. Contactos Examinados < 5 años de pacientes con TBP</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_39f" id="nu_39f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>I3. Nº de Contactos < 5 años con Terapia Preventiva con Isoniacida (TPI)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_40f" id="nu_40f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> I4. Nº de personas con VIH positivo</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_41f" id="nu_41f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> I5. N° de personas con VIH que reciben Terapia Preventiva con Isoniacida (TPI)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_42f" id="nu_42f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> I6. N° de personas con TB-VIH que reciben Terapia Preventiva con Cotrimoxazol (TPC)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_43f" id="nu_43f"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">J.  COINFECCIÓN TB-VIH</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>J1. Total de Casos TB-VIH (J1.1+J1.2)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> J1.1 Total de casos TB / VIH  Nuevos (J1.1.1 + J1.1.2)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> J1.1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44a" id="nu_44a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44b" id="nu_44b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44c" id="nu_44c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44d" id="nu_44d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_44e" id="nu_44e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> J1.1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45a" id="nu_45a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45b" id="nu_45b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45c" id="nu_45c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45d" id="nu_45d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_45e" id="nu_45e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> J1.2 Total de casos TB/VIH  antes tratados (J1.2.1 + J1.2.2)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>J1.2.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46a" id="nu_46a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46b" id="nu_46b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46c" id="nu_46c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46d" id="nu_46d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_46e" id="nu_46e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>J1.2.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47a" id="nu_47a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47b" id="nu_47b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47c" id="nu_47c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47d" id="nu_47d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_47e" id="nu_47e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>J2. Total de casos TB/VIH que reciben TARGA </td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_48a" id="nu_48a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_48b" id="nu_48b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_48c" id="nu_48c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_48d" id="nu_48d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_48e" id="nu_48e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                           </div>
			   <div class="content-3">
			      <div class="clear-shadow"></div>
                                <table id="gradient-style" summary="tabla_actividades">
                                    <thead>                
                                        <tr>
                                            <th scope="col">K.  TAMIZAJE DE VIH EN PACIETNES CON TB</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>K1. Total de casos que recibieron consejeria pre test para VIH</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49a" id="nu_49a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49b" id="nu_49b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49c" id="nu_49c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49d" id="nu_49d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_49e" id="nu_49e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>K2. Total de casos que cuentan con resultado de tamizaje de VIH durante el tratamiento</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50a" id="nu_50a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50b" id="nu_50b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50c" id="nu_50c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50d" id="nu_50d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_50e" id="nu_50e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>K3. Total de casos que cuentan con resultado de VIH reactivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51a" id="nu_51a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51b" id="nu_51b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51c" id="nu_51c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51d" id="nu_51d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_51e" id="nu_51e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">L.  MENINGITIS TB EN MENORES DE 5 AÑOS</th>
                                            <th scope="col">menores 5 años</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>L1. N° casos de meningitis TB  en < de 5 años</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_52a" id="nu_52a"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">M.  GESTANTES CON TUBERCULOSIS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>                            
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>M1. N° de Gestantes con TB (M1.1+ M1.2 )</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>M1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53a" id="nu_53a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53b" id="nu_53b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53c" id="nu_53c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53d" id="nu_53d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_53e" id="nu_53e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> M1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54a" id="nu_54a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54b" id="nu_54b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54c" id="nu_54c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54d" id="nu_54d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_54e" id="nu_54e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">N.  PERSONAL DE SALUD DEL EESS. CON TUBERCULOSIS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>N1. N°de trabajadores del EESS con TB (N1.1+ N1.2)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>N1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55a" id="nu_55a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55b" id="nu_55b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55c" id="nu_55c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55d" id="nu_55d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_55e" id="nu_55e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td> N1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56a" id="nu_56a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56b" id="nu_56b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56c" id="nu_56c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56d" id="nu_56d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_56e" id="nu_56e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>N2. N° de trabajadores con TB-MDR confirmado</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_57a" id="nu_57a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_57b" id="nu_57b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_57c" id="nu_57c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_57d" id="nu_57d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_57e" id="nu_57e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">O.  COMORBILIDAD TB/DIABETES</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td> O1. Total de casos con TB / DIABETES (O1.1+ O1.2 )</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>
                                        <tr>    
                                            <td>O1.1 TB Pulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58a" id="nu_58a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58b" id="nu_58b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58c" id="nu_58c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58d" id="nu_58d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_58e" id="nu_58e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>O1.2 TB Extrapulmonar</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59a" id="nu_59a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59b" id="nu_59b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59c" id="nu_59c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59d" id="nu_59d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_59e" id="nu_59e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">P.  TAMIZAJE DE DIABETES EN PACIENTES CON TB</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>P1. Total de casos con TB que cuenten con resultado de glicemia durante el Tto.</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60a" id="nu_60a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60b" id="nu_60b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60c" id="nu_60c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60d" id="nu_60d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_60e" id="nu_60e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">Q.  FALLECIDOS</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>Q1 N             </thead>
                                    <tbody>
                                        <tr>    
                                            <td>Q1 N             </thead>
                                    <tbody>
                                        <tr>    
                                            <td>Q1 N° de Pacientes fallecidos durante tratamiento</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61a" id="nu_61a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61b" id="nu_61b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61c" id="nu_61c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61d" id="nu_61d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_61e" id="nu_61e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                    <thead>                
                                        <tr>
                                            <th scope="col">R.  RAFA</th>
                                            <th scope="col">0-11 años</th>
                                            <th scope="col">12-17 años</th>
                                            <th scope="col">18-29 años</th>
                                            <th scope="col">30-59 años</th>
                                            <th scope="col">60+ años</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>    
                                            <td>R1. N° de pacientes con Reacciones Adversas a Fármacos Antituberculosis</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62a" id="nu_62a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62b" id="nu_62b"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62c" id="nu_62c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62d" id="nu_62d"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_62e" id="nu_62e"  onKeypress="return validaNum(event)"/></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>

                                </table> 
                             </div>
                             <div class="content-4">
                              <div class="clear-shadow"></div>
                                <table id="gradient-style_f2" summary="CASOS NUEVOS DE TUBERCULOSIS">
                                    <thead>                
                                        <tr>
                                            <th scope="col"></th>
                                            <th colspan="19" scope="col">GRUPOS DE EDADES SEGÚN SEXO</th>
                                        </tr>                                    
                                        <tr>
                                            <th scope="col">S.  CASOS NUEVOS DE TUBERCULOSIS</th>
                                            <th colspan="2" scope="col">0-4 años</th>
                                            <th colspan="2" scope="col">5-14 años</th>
                                            <th colspan="2" scope="col">15-24 años</th>
                                            <th colspan="2" scope="col">25-34 años</th>
                                            <th colspan="2" scope="col">35-44 años</th>				
                                            <th colspan="2" scope="col">45-54 años</th>
                                            <th colspan="2" scope="col">55-64 años</th>
                                            <th colspan="2" scope="col">65 a más años</th>
                                            <th colspan="3" scope="col">TOTAL</th>

                                        </tr>                        
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">F</th>
                                            <th scope="col">M</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>                    
                                    <tbody>
                                        <tr>    
                                            <td>S1. TB Pulmonar Total (S1.1 +S1.2 + S1.3)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>                            
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td></td>

                                        </tr>
                                        <tr>    
                                            <td>S1.1 TB Pulmonar frotis positivo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75a" id="nu_75a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75b" id="nu_75b"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75c" id="nu_75c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75d" id="nu_75d"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75e" id="nu_75e"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75f" id="nu_75f"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75g" id="nu_75g"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75h" id="nu_75h"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75i" id="nu_75i"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75j" id="nu_75j"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75k" id="nu_75k"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75l" id="nu_75l"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75m" id="nu_75m"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75n" id="nu_75n"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_75o" id="nu_75o"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_75p" id="nu_75p"  onKeypress="return validaNum(event)"/></td>

                                            <td></td>
                                            <td></td>

                                            <td></td>


                                        </tr>
                                        <tr>    
                                            <td>S1.2 TB Pulmonar frotis negativo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76a" id="nu_76a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76b" id="nu_76b"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76c" id="nu_76c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76d" id="nu_76d"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76e" id="nu_76e"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76f" id="nu_76f"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76g" id="nu_76g"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76h" id="nu_76h"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76i" id="nu_76i"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76j" id="nu_76j"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76k" id="nu_76k"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76l" id="nu_76l"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76m" id="nu_76m"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76n" id="nu_76n"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_76o" id="nu_76o"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_76p" id="nu_76p"  onKeypress="return validaNum(event)"/></td>

                                            <td></td>
                                            <td></td>

                                            <td></td>

                                        </tr>
                                        <tr>    
                                            <td>S1.3 TB Pulmonar sin frotis de esputo</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77a" id="nu_77a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77b" id="nu_77b"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77c" id="nu_77c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77d" id="nu_77d"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77e" id="nu_77e"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77f" id="nu_77f"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77g" id="nu_77g"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77h" id="nu_77h"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77i" id="nu_77i"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77j" id="nu_77j"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77k" id="nu_77k"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77l" id="nu_77l"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77m" id="nu_77m"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77n" id="nu_77n"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_77o" id="nu_77o"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_77p" id="nu_77p"  onKeypress="return validaNum(event)"/></td>

                                            <td></td>
                                            <td></td>

                                            <td></td>

                                        </tr>
                                        <tr>    
                                            <td>S2. TB Extrapulmonar (B2.1 +B2.2)</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>                            
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>S2.1 Con confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78a" id="nu_78a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78b" id="nu_78b"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78c" id="nu_78c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78d" id="nu_78d"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78e" id="nu_78e"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78f" id="nu_78f"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78g" id="nu_78g"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78h" id="nu_78h"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78i" id="nu_78i"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78j" id="nu_78j"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78k" id="nu_78k"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78l" id="nu_78l"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78m" id="nu_78m"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78n" id="nu_78n"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_78o" id="nu_78o"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_78p" id="nu_78p"  onKeypress="return validaNum(event)"/></td>

                                            <td></td>
                                            <td></td>

                                            <td></td>
                                        </tr>
                                        <tr>    
                                            <td>S2.2 Sin confirmación bacteriológica o histopatológica</td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79a" id="nu_79a"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79b" id="nu_79b"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79c" id="nu_79c"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79d" id="nu_79d"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79e" id="nu_79e"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79f" id="nu_79f"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79g" id="nu_79g"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79h" id="nu_79h"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79i" id="nu_79i"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79j" id="nu_79j"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79k" id="nu_79k"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79l" id="nu_79l"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79m" id="nu_79m"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79n" id="nu_79n"  onKeypress="return validaNum(event)"/></td>

                                            <td><input class="text" maxlength="3" type="text" name="nu_79o" id="nu_79o"  onKeypress="return validaNum(event)"/></td>
                                            <td><input class="text" maxlength="3" type="text" name="nu_79p" id="nu_79p"  onKeypress="return validaNum(event)"/></td>

                                            <td></td>
                                            <td></td>

                                            <td></td>

                                        </tr>
                                    </tbody>                                    
                                </table>
                             </div>                         
                       </div>
                </section>
    </div>
</form>
