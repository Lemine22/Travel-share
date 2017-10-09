<?php $this->layout('layout', ['title'=>'Post']);
$this->start('main_content')
?>

<link href="<?= $this->assetUrl('css/liens.css') ?>"rel="stylesheet">


<div class="row">
	<div class="col-sm-12">

		<h1>Votre "bon plan" à partager !</h1>

		<?php if (!empty($result)) { ?>
		<div class="alert alert-success">Votre bon plan a bien été envoyé</div>
		<script>setTimeout(function() { location.href = "<?= $this->url('post_view', array('id' => $result)) ?>"; }, 3000);</script>
		<?php } else { ?>

		<?php if (!empty($errors)) { ?>
		<div class="alert alert-danger">
			<ul>
			<?php
			foreach($errors as $error) {
				echo '<li>'.$error.'</li>';
			}
			?>
			</ul>
		</div>
		<?php } ?>

		<form action="<?= $this->url('post_add') ?>" method="POST" enctype="multipart/form-data">

			<input type="hidden" name="user_id" value="<?= $w_user->id ?>">

			<fieldset>

				<div class="row">
					<h4>J'ai un bon plan : </h4>
					<hr>

					<label for="inlineRadio1" class="radio-inline" data-toggle="tooltip" data-placement="top" title="restaurant">
						<input type="radio" id="inlineRadio1" name="type" value="restaurant">&nbsp;<img src="<?= $this->assetUrl('icones/restaurant.png') ?>">
					</label>

					<label for="inlineRadio2" class="radio-inline" data-toggle="tooltip" data-placement="top" title="bar">
						<input type="radio" id="inlineRadio2" name="type" value="bar">&nbsp;<img src="<?= $this->assetUrl('icones/bar.png') ?>">
					</label>
					<label for="inlineRadio3" class="radio-inline" data-toggle="tooltip" data-placement="top" title="night-club">
						<input type="radio" id="inlineRadio3" name="type"  value="night-club">&nbsp;<img src="<?= $this->assetUrl('icones/night-club.png') ?>">
					</label>

					<label for="inlineRadio4" class="radio-inline" data-toggle="tooltip" data-placement="top" title="patrimoine">
						<input type="radio" id="inlineRadio4" name="type"  value="patrimoine">&nbsp;<img src="<?= $this->assetUrl('icones/patrimoine.png') ?>">
					</label>
					<label for="inlineRadio5" class="radio-inline" data-toggle="tooltip" data-placement="top" title="shop">
						<input type="radio" id="inlineRadio5" name="type"  value="shopping">&nbsp;<img src="<?= $this->assetUrl('icones/shopping.png') ?>">
					</label>

					<label for="inlineRadio6" class="radio-inline" data-toggle="tooltip" data-placement="top" title="hebergement">
						<input type="radio" id="inlineRadio6" name="type"  value="hebergement">&nbsp;<img src="<?= $this->assetUrl('icones/hebergement.png') ?>">
					</label>

					<label for="inlineRadio7" class="radio-inline" data-toggle="tooltip" data-placement="top" title="loisir">
						<input type="radio" id="inlineRadio7" name="type"  value="loisir">&nbsp;<img src="<?= $this->assetUrl('icones/loisir.png') ?>">
					</label>
				</div>

				<div class="row">
					<h4>Un bon plan à faire : </h4>
					<hr>
					<label for="inlineRadio8" class="radio-inline" data-toggle="tooltip" data-placement="top" title="en couple">
						<input type="radio" id="inlineRadio8" name="qui" value="couple">&nbsp;<img src="<?= $this->assetUrl('icones/loveinterest.png') ?>">
					</label>

					<label for="inlineRadio9" class="radio-inline" data-toggle="tooltip" data-placement="top" title="en famille">
						<input type="radio" id="inlineRadio9" name="qui" value="famille">&nbsp;<img src="<?= $this->assetUrl('icones/family.png') ?>">
					</label>

					<label for="inlineRadio10" class="radio-inline" data-toggle="tooltip" data-placement="top" title="en solo">
						<input type="radio" id="inlineRadio10" name="qui" value="solo">&nbsp;<img src="<?= $this->assetUrl('icones/solo.png') ?>">
					</label>

					<label for="inlineRadio11" class="radio-inline" data-toggle="tooltip" data-placement="top" title="entre amis">
						<input type="radio" id="inlineRadio11" name="qui" value="amis">&nbsp;<img src="<?= $this->assetUrl('icones/group.png') ?>">
					</label>

					<hr>

					<div class="form-group mbp" style="display:inline-block;text-align:center;">
						<label for="title">Mon bon plan</label>
						<input name="title" id="title" class="form-control" rows="1" placeholder="Restaurant chinois, magasin de casquettes,..." value="<?= $post->title ?>">
					</div>
					<div class="form-group ndl" style="display:inline-block;text-align:center;">
						<label for="name_bp">Nom du lieu</label>
						<input name="name_bp" id="name_bp" class="form-control" rows="1" placeholder="Nom du lieu" value="<?= $post->name_bp ?>">
					</div>
					<div class="form-group">
						<label for="adresse">Adresse du bon plan</label>
						<input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse du bon plan..." value="<?= $post->adresse ?>" onblur="geocoding();">
					</div>

					<!-- 	<div class="form-group">
						<label for="title">Les ingrédients de votre recette</label>
						<input type="text" class="form-control" name="ingredients" id="ingredients" placeholder="Ingrédients de votre recette" value="<?= $ingredients ?>">
					</div> -->


					<div class="form-group ville" style="display:inline-block;text-align:center;">
						<label for="city">Ville</label>
						<input name="city" id="city" class="form-control" rows="1" placeholder="Ville" value="<?= $post->city ?>">
					</div>

					<div class="form-group pays" style="display:inline-block;text-align:center;">
						<label for="country">Pays</label>
						<input name="country" id="country" class="form-control" rows="1" placeholder="Pays" value="<?= $post->country ?>">
					</div>

					<div class="form-group" >
						<label for="description">Votre bon plan en quelques mots... </label>
						<textarea name="description" id="description" class="form-control" rows="10" placeholder="Votre bon plan en quelques mots..."><?= $post->description ?></textarea>
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" name="lat" id="lat" value="">
						<input type="hidden" class="form-control" name="lng" id="lng" value="">
					</div>

					<div class="form-group">
						<label for="#">Partagez aussi vos photos !</label>
						<input type="file" name="image">
						<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
					</div>
					<button type="submit" class="btn btn-default">Envoyer</button>

				</div>

			</fieldset>

		</form>

		<?php } ?>

	</div>
</div>
<script type="text/javascript">

  var geocoder;
  var map;
  geocoder = new google.maps.Geocoder();

	function geocoding() {
	// Récupération de l'adresse tapée dans le formulaire
		var adresse = document.getElementById('adresse').value;

		// console.log('addresse > ', encodeURIComponent(adresse), adresse);

		$.ajax({
			url: '<?= $this->url('geocoding', array('address' => '')) ?>' + encodeURIComponent(adresse),
			method: 'GET',
			dataType: 'json',
			success: function(result) {

				var result = result.results[0];
				var lat_value = result.geometry.location.lat;
				var lng_value = result.geometry.location.lng;
				var ville = document.getElementById('city');
				var pays = document.getElementById('country');
				var lat_input = document.getElementById('lat');
				var lng_input = document.getElementById('lng');

				//console.log('Geocoding success > ', result.address_components);

				for (var i in result.address_components) {

					var address_component = result.address_components[i];

					console.log('Address component > ', address_component, address_component.types[0]);

					if (address_component.types[0] == 'street_number') {
						var street_number = address_component.long_name;
						// console.log('Numéro > ', street_number);
					}
					if (address_component.types[0] == 'route') {
						var route = address_component.long_name;
						// console.log('Rue > ', route);
					}
					if (address_component.types[0] == 'locality') {
						var locality = address_component.long_name;
						// console.log('Ville > ', locality);
					}
					if (address_component.types[0] == 'postal_code') {
						var postal_code = address_component.long_name;
						// console.log('Code Postal > ', postal_code);
					}
					if (address_component.types[0] == 'administrative_area_level_1') {
						var administrative_area_level_1 = address_component.long_name;
						// console.log('Région > ', administrative_area_level_1);
					}
					if (address_component.types[0] == 'administrative_area_level_3') {
						var administrative_area_level_3 = address_component.long_name;
					}
					if (address_component.types[0] == 'country') {
						var name_country = address_component.long_name;
						// console.log('Pays > ', name_country);
					}
				}
				// console.log('lat > ', lat_value, 'lng > ', lng_value);
				if (typeof(locality) !== "undefined") {
					ville.value = locality;
					ville.setAttribute("readonly", "true");
				}
				else if (typeof(locality) === "undefined") {
					ville.value = administrative_area_level_1;
					ville.setAttribute("readonly", "true");
				}
				else if (typeof(administrative_area_level_1) === "undefined") {
					ville.value = administrative_area_level_3;
					ville.setAttribute("readonly", "true");
				}
				if (typeof(name_country) !== "undefined") {
					pays.value = name_country;
					pays.setAttribute("readonly", "true");
				}
				lat_input.value = lat_value;
				lng_input.value = lng_value;
			},
			error: function(result) {
				console.log('Geocoding error > ', result);
			}
		});
	}
</script>

<?php $this->stop('main_content') ?>