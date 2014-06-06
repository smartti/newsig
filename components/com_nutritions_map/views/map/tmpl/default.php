<!DOCTYPE html>
<html>
<head>
    <?php if($procede == 1)
    {
    ?>
    <script type="text/javascript">
    <!--
    alert('La marca se creo correctamente.');
    window.opener.location.reload();
    window.close();
    </script>
    <?php 
    }
    ?>

    </script>

    <style type="text/css">
        #map_canvas {height:600px;width:800px}
    </style>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
        var map;
        var markersArray = [];

        function initMap()
        {
            var latlng = new google.maps.LatLng(-8, -79);

            var myOptions = {
                zoom: 10,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

            // add a click event handler to the map object
            google.maps.event.addListener(map, "click", function(event)
            {
                // place a marker
                placeMarker(event.latLng);

                // display the lat/lng in your form's lat/lng fields
                document.getElementById("x").value = event.latLng.lat();
                document.getElementById("y").value = event.latLng.lng();
            });
        }
        function placeMarker(location) {
            // first remove all markers if there are any
            deleteOverlays();

            var marker = new google.maps.Marker({
                position: location, 
                map: map
            });

            // add marker in markers array
            markersArray.push(marker);

            //map.setCenter(location);
        }

        // Deletes all markers in the array by removing references to them
        function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
            markersArray.length = 0;
            }
        }
    </script>
</head>

<body onload="initMap()">
<form action="guardaMarca" id="posicion" name="posicion" enctype="multipart/form-data" method="post"> 
    <div id="map_canvas"></div>
    <input type="text" name="x" id="x">
    <input type="text" name="y"  id="y">
    <span style="color: #900;">*</span> Nombre: <input type="text" name="nombre"/><br>
Ubicaci&oacute;n: <input type="text" name="direccion"/><br>
    <input type="submit" value="Enviar"/>
</form>
</body>
</html>