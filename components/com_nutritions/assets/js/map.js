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
        clearOverlays();
        placeMarker(event.latLng);
        // display the lat/lng in your form's lat/lng fields
        document.getElementById("un_latitud").value = event.latLng.lat();
        document.getElementById("un_longitud").value = event.latLng.lng();
    });
}
// Sets the map on all markers in the array.
function setAllMap(map) {
    for (var i = 0; i < markersArray.length; i++) {
        markersArray[i].setMap(map);
    }
}
// Removes the overlays from the map, but keeps them in the array.
function clearOverlays() {
    setAllMap(null);
}
// Shows any overlays currently in the array.
function showOverlays() {
    setAllMap(map);
}
// Deletes all markers in the array by removing references to them.
function deleteOverlays() {
    clearOverlays();
    markers = [];
}
function placeMarker(location) {
    // first remove all markers if there are any
    //deleteOverlays();

    var marker = new google.maps.Marker({
        position: location,
        map: map,
        draggable: true
    });

    // add marker in markers array
    markersArray.push(marker);

    //map.setCenter(location);

}
function createMarker(point)
{
    //Creamos el infowindow dinamico para todas las marcas
    var marker = new google.maps.Marker(point, iconoMarca);
    google.maps.event.addListener(marker, 'click', function() {
        //marker.openInfoWindowHtml("<span style='font-size: 8pt; font-family: verdana'>" + nombre + "</span><br><span style='font-size: 8pt; font-family: verdana'>" + direccion + "</span><br>");
    });
    return marker;
}
function initialize() {
  var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}
google.maps.event.addDomListener(window, 'load', initialize);


