<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

            <link href="<?= $this->assetUrl('css/home.css') ?>" rel="stylesheet">

            <div id="map"></div>

            <footer>
                <p>Travel & Share <?= date('Y') ?> <sup>&copy;</sup></p>
            </footer>
	        <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script>
                function initMap() {

            // Create an array of styles.
            var styles =
            [
            {
              featureType: "water",
              elementType: "labels.text.stroke",
              stylers: [
              { color: "#FFE64D" }
              ]
          },{
              featureType: "landscape",
              stylers: [
              { color: "#FAE577" }
              ]
          },{
              featureType: "administrative.country",
              elementType: "geometry.stroke",
              stylers: [
              { color: "#1A4D80" }
              ]
          },{
              featureType: "administrative",
              elementType: "labels.text.fill",
              stylers: [
              { color: "#1A4D80" }
              ]
          },{
              featureType: "water",
              elementType: "geometry",
              stylers: [
              { color: "#64BAD1" }
              ]
          }
          ];

            // Create a new StyledMapType object, passing it the array of styles,
            // as well as the name to be displayed on the map type control.
            var styledMap = new google.maps.StyledMapType(styles,
                {name: "Styled Map"});

            // Create a map object, and include the MapTypeId to add
            // to the map type control.
            var mapOptions = {
                zoom: 2,
                center: new google.maps.LatLng(10, 10),
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.HYBRID, 'map_style']
                }
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

                //Associate the styled map with the MapTypeId and set it to display.
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
            }
        </script>
        <?php $this->stop('main_content') ?>