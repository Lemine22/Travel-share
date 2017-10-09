    var map;

    var bounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(15, 0)
    );

    function initialize() {
        // Create an array of styles.
        var styles = [
        {
            featureType: "water",
            elementType: "labels.text.stroke",
            stylers: [{ color: "#FFE64D" }]
        },
        {
            featureType: "landscape",
            stylers: [{ color: "#FAE577" }]
        },
        {
            featureType: "administrative.country",
            elementType: "geometry.stroke",
            stylers: [{color: "#1A4D80" }]
        },
        {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [{color: "#1A4D80" }]
        },
        {
            featureType: "water",
            elementType: "geometry",
            stylers: [{color: "#64BAD1" }]
        }
        ];

        // Create a new StyledMapType object, passing it the array of styles,
        // as well as the name to be displayed on the map type control.
        var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});

        //Associate the styled map with the MapTypeId and set it to display.
        switch(mode) {

            case 'world':

                var zoom = 3;
                console.log(zoom);
                console.log(zoom);
                var myOptions = {
                    center: new google.maps.LatLng(18, 0),

                    zoom: zoom,
                    draggable: false,
                    zoomControl : false,             // supprime l'icône de contrôle du zoom
                    scrollwheel : false,             // désactive le zoom avec la molette de la souris
                    disableDoubleClickZoom : true,   // désactive le zoom sur le double-clic
                    streetViewControl : false,
                    mapTypeControl : false,
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.HYBRID, 'map_style']
                    }
                };
            break;
            case 'country':
                var myOptions = {
                    center: new google.maps.LatLng(20, 0),
                    zoom: Math.ceil(Math.log2($(window).width())) - 9,
                    draggable: true,
                    zoomControl : true,             // supprime l'icône de contrôle du zoom
                    scrollwheel : true,             // désactive le zoom avec la molette de la souris
                    disableDoubleClickZoom : true,   // désactive le zoom sur le double-clic
                    streetViewControl : false,
                    mapTypeControl : false,
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.HYBRID, 'map_style']
                    }
                };
            break;
        }

        map = new google.maps.Map(document.getElementById('map'),
            myOptions);

        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

        // console.log(map);

        switch(mode) {

            case 'world':

                // Initialize JSONP request
                var script = document.createElement('script');
                var url = ['https://www.googleapis.com/fusiontables/v1/query?'];
                url.push('sql=');
                var query = 'SELECT name, iso_a2, kml_4326 FROM ' +
                    '1foc3xO9DyfSIF6ofvN0kp2bxSfSeKog5FbdWdQ';
                var encodedQuery = encodeURIComponent(query);
                url.push(encodedQuery);
                url.push('&callback=drawMap');
                url.push('&key='+google_api_key);
                script.src = url.join('');
                var body = document.getElementsByTagName('body')[0];
                body.appendChild(script);

            break;

            case 'country':

                drawMap();

            break;
        }
    }

    function getInfowindowContent(country, iso_country, count_bon_plans) {
        return  '<ul class="f32">'+
                    '<li class="flag '+iso_country+'"></li>'+
                '</ul>'+
                '<h3 id="firstHeading" class="firstHeading">'+country+'</h3>'+
                '<p class="bp">'+count_bon_plans+' bon'+(count_bon_plans > 1 ? 's' : '')+' plan'+(count_bon_plans > 1 ? 's' : '')+' pour ce pays</p>';
    }

    function slugify(text)
        {
          return text.toString().substr(0,1).toUpperCase()+text.substr(1,text.length).toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
        }


    function drawMap(data) {

        switch(mode) {

            case 'world':

                var rows = data['rows'];
                for (var i in rows) {

                    if (rows[i][0] != 'Antarctica') {
                        var newCoordinates = [];
                        var geometries = rows[i][2]['geometries'];
                        if (geometries) {
                            for (var j in geometries) {
                                newCoordinates.push(constructNewCoordinates(geometries[j]));
                            }
                        }
                        else {
                            newCoordinates = constructNewCoordinates(rows[i][2]['geometry']);
                        }

                        var country = new google.maps.Polygon({
                            name: rows[i][0],
                            iso: rows[i][1],
                            latlng: newCoordinates,
                            paths: newCoordinates,
                            strokeWeight: 0,
                            fillColor: null,
                            fillOpacity: 0
                        });

                        // console.log('Mode > '+ mode);

                        google.maps.event.addListener(country, 'mouseover', function() {
                            this.setOptions({fillColor: '#1A4D80', fillOpacity: 0.3});
                            var country_name = this.name;
                            var country_iso = this.iso;
                            var country_iso = country_iso.toLowerCase();
                            // console.log(country_iso, this.name);

                            $.ajax({
                                url: ROOT_PATH+escape(slugify(this.name))+'/count',
                                type: 'GET',
                                dataType: 'html',
                                data: [],
                                success: function(result) {
                                    $('.infobubble').html(getInfowindowContent(country_name, country_iso, result)).show();
                                },
                                error: function(error) {
                                    console.log('Country over error > ', error);
                                }
                            });

                        });
                        google.maps.event.addListener(country, 'mouseout', function() {
                            this.setOptions({fillColor: null, fillOpacity: 0});

                            $('.infobubble').html('').hide();
                        });
                        google.maps.event.addListener(country, 'click', function(e) {

                            // console.log('click', this.name);

                            window.location.href = ROOT_PATH+escape(slugify(this.name));
                        });

                        country.setMap(map);
                    }
                }

            break;

            case 'country':

                if (typeof(country_name) === 'undefined') {

                    console.log('Undefined country!!!');
                    break;
                }

                // console.log('Country > ' + country_name);

                var geocoder = new google.maps.Geocoder();

                geocoder.geocode( {'address' : country_name}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var bounds = results[0].geometry.bounds;
                        map.fitBounds(bounds);
                        map.setCenter(results[0].geometry.location);
                        // go to the url
                        //window.location.href = 'country';
                        // or open link in a new window
                        //window.open('country');
                    }
                });
            break;

            case 'city':

            break;

            default:
                //TODO 404
            break;
        }
    }

    function constructNewCoordinates(polygon) {
        var newCoordinates = [];
        var coordinates = polygon['coordinates'][0];
        for (var i in coordinates) {
            newCoordinates.push(
                new google.maps.LatLng(coordinates[i][1], coordinates[i][0]));
        }
        return newCoordinates;
    }

    google.maps.event.addDomListener(window, 'load', initialize);