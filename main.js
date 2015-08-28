function initialize() {
    var map;

    /*map setting*/
    $('#map-canvas').height(window.outerHeight / 2.2);

    map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 12,
        center: {lat: 23.00, lng: 120.30}
    });
    
    map.data.loadGeoJson('geojson/8040101.json');
}

google.maps.event.addDomListener(window, 'load', initialize);