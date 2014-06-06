


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
                 document.getElementById("un_latitud").value = event.latLng.lat();
                 document.getElementById("un_longitud").value = event.latLng.lng();
            });
        }
        
         function deleteOverlays() {
            if (markersArray) {
                for (i in markersArray) {
                    markersArray[i].setMap(null);
                }
            markersArray.length = 0;
            }
        }
        
        function placeMarker(location) {
            // first remove all markers if there are any
            //deleteOverlays();
            if (marker) {
                marker.setPosition(location);
            } else {
             var marker = new google.maps.Marker({
                position: location, 
                map: map,
                draggable: true
            });

            // add marker in markers array
            markersArray.push(marker);

            //map.setCenter(location);
            }
        }
        
        function placeMarker_(location) {
            if (marker) {
                marker.setPosition(location);
            } else {
               marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    draggable: true
                });
                google.maps.event.addListener(marker, "drag", function (mEvent) {
                    populateInputs(mEvent.latLng);
                });
            }
            populateInputs(location);
        }

        function populateInputs(pos) {
            document.getElementById("un_latitud").value=pos.lat()
            document.getElementById("un_longitud").value=pos.lng();
        }

        // Deletes all markers in the array by removing references to them
       
