<?php
defined('_JEXEC') or die('Restricted access');
$ordering = 1;
?>
<script src="http://maps.google.com/maps?file=api&amp;v=3&amp;key=ABQIAAAA0i-FlhSlmSIy42o419clwBSEqkJhzYopKSEbd84FMDkJnd-q8xSvD48xXdHojwQNjEs5egDYuipQNA" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
            function search(){
                    document.getElementById('task').value = 'searchAction'; 
                    document.getElementById('adminForm').submit();
                    load();
                    
            }
            function load()
            {
//            if (GBrowserIsCompatible())
//            {

                    var map = new google.maps.Map(document.getElementById("map"));
                    map.addControl(new GMapTypeControl());
                    map.addControl(new GLargeMapControl());
                    map.addControl(new GScaleControl());
                    // map.addControl(new GOverviewMapControl());
                    map.setCenter(new google.maps.LatLng( - 8.111746, - 79.027405), 12);
                    // map.setMapType(G_HYBRID_TYPE);

                    //EL ICONO
                    var iconoMarca = new google.maps.MarkerImage(G_DEFAULT_ICON); // Icono por default que se mostrara
                    iconoMarca.image = "http://gmaps-samples.googlecode.com/svn/trunk/markers/blue/blank.png"; // ruta del icono
                    var tamanoIcono = new google.maps.Size(30, 30); // Tamaño del icono
                    iconoMarca.iconSize = tamanoIcono;
                    iconoMarca.shadow = "http://gmaps-samples.googlecode.com/svn/trunk/markers/red/blank.png"; // Sombra de icono 
                    var tamanoSombra = new google.maps.Size(32, 28); // Tamaño de la sombra
                    iconoMarca.shadowSize = tamanoSombra;
                    iconoMarca.iconAnchor = new google.maps.Point(11, 16);
                    function createMarker(point)
                    {
                    //Creamos el infowindow dinamico para todas las marcas
                    var marker = new google.maps.Marker(point, iconoMarca);
                            google.maps.Event.addListener(marker, 'click', function(){ marker.openInfoWindowHtml("");
                            });
                            return marker;
                    }
                    <?php
                        $k = 0;
                        for ($i = 0, $n = count($this->results); $i < $n; $i++) {
                        $row = &$this->results[$i];
                    ?>
                            var point = new google.maps.Point ( <?php echo $row->un_longitud; ?>,<?php echo $row->un_latitud; ?>);
                            var marker = createMarker (point);   
                            map.addOverlay(marker);           
                    <?php    
                    $k = 1 - $k; 
                    } 
                    ?>
//                }
                }
                
//                window.onload=load;
    //]]>
    </script>
    <style type="text/css">
        #map {height:600px;width:600px}
    </style>
 <body onload="load()"></body>
    <form id="adminForm" action="<?php echo JRoute::_('index.php'); ?>" method="post" name="adminForm">

        <fieldset>
            <legend>Acciones</legend>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 25%;">
                        <input type="button" value="Nuevo" onclick="search();"/>
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
    <?php echo $this->lists['Departamentos']; ?>
                    </td>
                    <td>Codigo:</td>
                    <td>
                        <input class="text_area" type="text" name="id_familia" id="codigo" size="32" maxlength="250" value="<?php echo ($this->id_familia) ? $this->id_familia : ''; ?>" />
                    </td>
                </tr>
                <tr>              
                    <td>Provincia:</td>
                    <td>
    <?php echo $this->lists['Provincias']; ?>
                    </td>
                    <td>Apellidos:</td>
                    <td>
                        <input class="text_area" type="text" name="tx_apellidos" id="apellidos" size="32" maxlength="250" value="<?php echo ($this->tx_apellidos) ? $this->tx_apellidos : ''; ?>" />
                    </td>
                </tr>
                <tr>              
                    <td>Distrito:</td>
                    <td>
    <?php echo $this->lists['Distritos']; ?>
                    </td>
                    <td>Objetivo:</td>
                    <td>
    <?php echo $this->lists['Titulos']; ?>
                    </td>
                </tr>
            </table>
        </fieldset>
        
        <input type="hidden" name="option" value="com_nutritions" />
        <input type="hidden" name="task" id="task" value="" />
        <input type="hidden" name="boxchecked" value="0" />
        <input type="hidden" name="controller" value="georeferencias" />
        <input type="hidden" name="view" value="georeferencias" />
    </form>
    <div id="map" style="width: 750px; height: 650px;"></div>
    <?php
    if (count($this->results) > 0) {
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
                            Latitud
                        </th>
                        <th>
                            Longitud
                        </th>
                        <th>
                            Objetivo
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
                    <?php echo $i + 1; ?>
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
                            <?php echo $row->un_latitud; ?>
                        </td>
                        <td>
                            <?php echo $row->un_longitud; ?>
                        </td>
                        <td>
                            <?php echo $row->tx_descripcion; ?>
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

