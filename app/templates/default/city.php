<?php $this->layout('layout', ['title' => 'City']) ?>

<?php $this->start('main_content') ?>

<link href="<?= $this->assetUrl('css/city.css') ?>" rel="stylesheet">

<h1 class="city"><?=ucfirst( $city) ?></h1>

<div class="container">

	<div id="map"></div>

	<div id="event">

		<h2 class="type"></h2>
		<h3 class="qui"></h3>

		<form id="form-filter-qui">
			<input type= "radio" id="qui-famille" name="qui" value="famille"> <label for="qui-famille"> En famille </label>
			<input type= "radio" id="qui-couple" name="qui" value="couple"> <label for="qui-couple"> En couple </label>
			<input type= "radio" id="qui-amie" name="qui" value="amis"> <label for="qui-amie"> Entre amis </label>
			<input type= "radio" id="qui-solo" name="qui" value="solo"> <label for="qui-solo"> Solo </label>
		</form>

		<div id="side-bar">
			<form id="form-filter-type">
				<div class="menue">
					<label class="checkbox" id="color" data-toggle="tooltip" data-placement="left" title="Patrimoine">
						<i class="fa fa-fort-awesome" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="patrimoine" />
					</label>
				</div>

				<div class="menue" >
					<label class="checkbox" id="color" data-toggle="tooltip" data-placement="left" title="Hebergement">
						<i class="fa fa-bed" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="hebergement" />
					</label>
				</div>
				<div class="menue" >

					<label class="checkbox" id="color" data-toggle="tooltip" data-placement="left" title="shopping">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="shopping" />
					</label>

				</div>
				<div class="menue" >

					<label class="checkbox" id="color" data-toggle="tooltip" data-placement="left" title="Restaurant" >
						<i class="fa fa-cutlery" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="restaurant" />

					</label>

				</div>
				<div class="menue" >

					<label class="checkbox" id="color" data-toggle="tooltip" data-placement="left" title="Bar">
						<i class="fa fa-beer" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="bar" />

					</label>

				</div>
				<div class="menue" >

					<label class="checkbox" id='color' data-toggle="tooltip" data-placement="left" title="Night-Club">
						<i class="fa fa-glass" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="night-club" />

					</label>


				</div>
				<div class="menue" >

					<label class="checkbox" id="color" data-toggle="tooltip" data-placement="left" title="Loisir">

						<i class="fa fa-bicycle" aria-hidden="true"></i>
						<input type="radio" id="checkbox" name="type[]" value="loisir" />

					</label>

				</div>
			</form>
		</div>

		<div class="plans">

			<?= $this->fetch('default/partials/city-bon-plans', array('bon_plans' => $bon_plans)); ?>

		</div><!-- #plans -->

		<!-- <nav>
			<ul class="pagination">
				<li class="disabled">
					<span class='caractere'>
						<span aria-hidden="true">&laquo;</span>
					</span>
				</li>

				<li class="active"><a href="#">1</a></li>


				<li class=""><a href="#">2</a></li>
				<li class=""><a href="#">3</a></li>
				<li class=""><a href="#">4</a></li>
				<li class=""><a href="#">5</a></li>
				<li class=""><a href="#">6</a></li>
				<li class=""><a href="#">7</a></li>
				<li class=""><a href="#">8</a></li>
				<li class=""><a href="#">9</a></li>
				<li class=""><a href="#">10</a></li>
				<li class="disabled">
					<span class='caractere'>
						<span aria-hidden="true">&raquo;</span>
					</span>
				</li>
			</ul>
		</nav> -->
	</div>
</div>

<?php $this->stop('main_content') ?>

<?= $this->start('footer_scripts') ?>

<script>var ASSETS_PATH = '<?= $this->assetUrl('') ?>';</script>

<script type="text/javascript">
$(document).ready(function(){
    $("label").tooltip();

});



var map;
var markers = [];
var infoWindow;

var points = <?= $json_bp ?>;

var iconBase = ASSETS_PATH + 'icones/';

var lat = 0;
var lng = 0;

function initMap() {

	clearMarkers();
	markers = [];

	if (typeof(points[0]) !== 'undefined') {
		lat = points[0].position.lat;
		lng = points[0].position.lng;
	}

	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 17,
		center: {lat: lat, lng: lng}
	});

	for (var i in points) {
		var point = points[i];
		//console.log(i, points[i]);
		var marker = addMarker(point);
	}
}

function clearMarkers() {
  setMapOnAll(null);
}

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



//console.log(marker);

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

$(document).ready(function() {

	$('.modal').css('display','none');

	$('#btnModal').click(function(event){
		$('.modal').css('display','block');
		$('.modal').fadeIn('slow');
		/*$('.apperB,.apperC,.apperD').fadeOut(500);*/
		event.stopPropagation();

	})

	$('#map, #event').css('height', getContentHeight());
	$(window).resize(function() {
		$('#map, #event').css('height', getContentHeight());
	});

	console.log($('#form-filter').length);

	var plans=document.querySelector('.plans');
		plans.style.textAlign="center";

	$('#form-filter-qui input[type="radio"]').on('click', function() {

		var qui = $(this).val();

		 $('#event .qui').text(qui.substr(0,1).toUpperCase()+qui.substr(1,qui.length).toLowerCase());




		$.ajax({
			url: '<?= $this->url('city_bon_plans', array('city' => $city)) ?>',
			data: 'qui='+qui,
			method: 'GET',
			dataType: 'html',
			success: function(result) {
				if (result === '') {
					$('.plans').text('Aucun bon plan pour le statut : '+qui);
					return false;
				}
				$('.plans').html(result);
				setBtnModalOpen();
			},
			error: function(error) {
				console.log('City qui fitler ajax error > ', error);
			}
		});

	});

	$('#form-filter-type input[type="radio"]').on('click', function() {

		console.log('DEBUG');

		var type = $(this).val();


 $('#event .type').text(type.substr(0,1).toUpperCase()+type.substr(1,type.length).toLowerCase());


		$.ajax({
			url: '<?= $this->url('city_bon_plans', array('city' => $city)) ?>',
			data: 'type='+type,
			method: 'GET',
			dataType: 'html',
			success: function(result) {
				//console.log(result);
				if (result === '') {
					$('.plans').text('Aucun bon plan pour cette demande : '+type);
					return false;
				}
				$('.plans').html(result);
				setBtnModalOpen();
			},

			error: function(error) {
				console.log('City qui fitler ajax error > ', error);
			}
		});

		$.ajax({
			url: '<?= $this->url('city_json_bp', array('city' => $city)) ?>',
			data: 'type='+type,
			method: 'GET',
			dataType: 'json',
			success: function(result) {
				//console.log('json bp > ', result);
				points = result;
				initMap();
			},

			error: function(error) {
				console.log('City qui fitler ajax error > ', error);
			}
		});


	});
})

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= $google_api_key ?>&callback=initMap" async defer></script>

<?= $this->stop('footer_scripts') ?>
