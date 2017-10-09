<?php $this->layout('layout', ['title' => 'Country']) ?>

<?php $this->start('main_content') ?>

	<!-- <link href="<?= $this->assetUrl('css/city.css') ?>" rel="stylesheet"> -->
	<link href="<?= $this->assetUrl('css/country.css') ?>" rel="stylesheet">

	<h1 class="country"></h1>

	<div class="container-fluid">
		<div id="map" class="country-map"></div>

		<div id="event" class="right">
			<hr>
			<div class="plans">

				<div class="row">
				<?php foreach($cities as $city) { ?>
					<a href="<?= $this->url('city', array('city' => $city)) ?>"><?= $city ?></a><br>
				<?php } ?>
				</div>

			</div><!-- #plans -->

		</div>
	</div>
<?php $this->stop('main_content') ?>

<?= $this->start('footer_scripts') ?>
<script>var ASSETS_PATH = '<?= $this->assetUrl('') ?>';</script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=<?= $google_api_key ?>"></script>
<script>
	var mode = 'country';
	var country_name = '<?= basename($_SERVER['REQUEST_URI']); ?>';
	var title = document.querySelector('.country').textContent;
	document.querySelector('.country').textContent = country_name;
	var ROOT_PATH = "http://<?= $_SERVER['HTTP_HOST'].$this->url('country', array('country' => '')) ?>";
	var google_api_key = '<?= $google_api_key ?>';




var map;
var markers = [];
var infoWindow;

var points = <?= $json_bp ?>;

var iconBase = ASSETS_PATH + 'icones/';

/*function initMap() {

	clearMarkers();
	markers = [];

	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 17,
		center: {lat: points[0].position.lat, lng: points[0].position.lng}
	});

	for (var i in points) {
		var point = points[i];
		//console.log(i, points[i]);
		var marker = addMarker(point);
	}
}*/

/*
function clearMarkers() {
  setMapOnAll(null);
}*/
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// marker = point sur la carte
function addMarker(point) {
	var marker = new google.maps.Marker({
		position: point.position,
		icon: iconBase + point.type + '.png',
		map: map,
		draggable: false,
		animation: google.maps.Animation.DROP,
		/*position: {lat: 48.887691, lng: 2.340607}*/



	});

	marker.addListener('click', function() {

		for(var i in markers) {
			if (markers[i].getAnimation() !== null) {
				markers[i].setAnimation(null);
			}
		}

		toggleBounce(this);

		if (infoWindow) {
			infoWindow.close();
		}

		infoWindow = new google.maps.InfoWindow({
			content: '<strong>' + point.label + '</strong><br>' + point.desc + '<a href="">Voir la fiche</a>'
		});
		infoWindow.open(map, marker);
	});
	markers.push(marker);
}


function toggleBounce(marker) {
	if (marker.getAnimation() !== null) {
		marker.setAnimation(null);
	} else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}
}

function getContentHeight() {
	return ($(window).height() - $('#event').offset().top - $('footer').height()) ;
}
</script>
<script src="<?= $this->assetUrl('js/world-map.js') ?>"></script>
<?= $this->stop('footer_scripts') ?>