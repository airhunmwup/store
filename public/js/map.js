$(document).ready(function() {






});

function initialize() {

    $("#dialog").dialog();


    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(-33.8902, 151.1759),
        new google.maps.LatLng(-33.8474, 151.2631));
    map.fitBounds(defaultBounds);

    var input = /** @type {HTMLInputElement} */ (document.getElementById('target'));
    var searchBox = new google.maps.places.SearchBox(input);
    var markers = [];

    google.maps.event.addListener(searchBox, 'places_changed', function() {

        var infowindow = new google.maps.InfoWindow();
        $("#places").html('');
        var places = searchBox.getPlaces();

        for (var i = 0, marker; marker = markers[i]; i++) {
            marker.setMap(null);
        }

        markers = [];
        var bounds = new google.maps.LatLngBounds();
        var marker;
        for (var i = 0, place; place = places[i]; i++) {
            var image = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            marker = new google.maps.Marker({
                map: map,
                icon: image,
                title: place.name,
                position: place.geometry.location
            });

            markers.push(marker);

            bounds.extend(place.geometry.location);
            var name = place.name;
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.close();
                infowindow.setContent(name);
                infowindow.open(map, marker);
            });

            $("<li>")
                .text(place.name)
                .appendTo("#places")
                .click(function() {

                    new google.maps.event.trigger(marker, 'click');

                    map.setZoom(14);
                    map.setCenter(marker.getPosition());
                });




        }

        map.fitBounds(bounds);
    });

    google.maps.event.addListener(map, 'bounds_changed', function() {
        var bounds = map.getBounds();
        searchBox.setBounds(bounds);
    });
}

google.maps.event.addDomListener(window, 'load', initialize);