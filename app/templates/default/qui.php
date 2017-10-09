<?php $this->layout('layout', ['title' => 'qui']) ?>

<?php $this->start('main_content') ?>


<link href="<?= $this->assetUrl('css/liens.css') ?>" rel="stylesheet">
<link href="<?= $this->assetUrl('css/qui.css') ?>" rel="stylesheet">

	<h1>Qui sommes-nous ?</h1>

	<div id="aboutus" class="row" >
	 	 <div class="col-md-6 col-md-offset-3 tetes">
			<figure style="background: url(<?= $this->assetUrl('tetes/png/punk-2.png') ?>) no-repeat top left; background-size: auto 100%;">
				<img src="<?= $this->assetUrl('tetes/png/emeric2.jpg') ?>">
				<figcaption>
					<h4>Emeric</h4>
				</figcaption>
			</figure>
			<figure style="background: url(<?= $this->assetUrl('tetes/png/girl.png') ?>) no-repeat top left; background-size: auto 100%;">
				<img src="<?= $this->assetUrl('tetes/png/katia.jpg') ?>">
				<figcaption>
					<h4>Katia</h4>
				</figcaption>
			</figure>
			<figure style="background: url(<?= $this->assetUrl('tetes/png/smoked.png') ?>) no-repeat top left; background-size: auto 100%;">
				<img src="<?= $this->assetUrl('tetes/png/christophe.jpg') ?>">
				<figcaption>
					<h4>Christophe</h4>
				</figcaption>
			</figure>
			<figure style="background: url(<?= $this->assetUrl('tetes/png/smug-1.png') ?>) no-repeat top left; background-size: auto 100%;">
				<img src="<?= $this->assetUrl('tetes/png/lea.jpg') ?>">
				<figcaption>
					<h4>Léa</h4>
				</figcaption>
			</figure>
			<figure style="background: url(<?= $this->assetUrl('tetes/png/wink-2.png') ?>) no-repeat top left; background-size: auto 100%;">
				<img src="<?= $this->assetUrl('tetes/png/mohamed.jpg') ?>">
				<figcaption>
					<h4>Mohamed</h4>
				</figcaption>
			</figure>
	 	 </div>

	</div>
	<div class="row">

		 <h2>Projet final de la formation webforce3 - Session du 8 mars 2016</h2>
		<p>
	    Création d’un site internet dédié au voyage permettant aux utilisateurs de partager leurs “bons plans” en voyage et leurs photos.<br>
		Notre objectif est de créer une communauté de voyageurs souhaitant partager et/ou transmettre et /ou trouver des informations sur des destinations de voyage.<br>
		Notre cible : Les particuliers en quête d’information pour organiser un voyage.<br>
    	Dans un second temps, nous souhaitons que le site travel & share puisse devenir un outil pour les professionnels du voyage, qui pourront eux-même contribuer et certifier les informations sur les destinations.
		</p>
	</div>


<?php $this->stop('main_content') ?>

<?= $this->start('footer_scripts') ?>

<script type="text/javascript">

var fading = false;

$('#aboutus figure').on('mouseenter', function() {

	if (fading) {
		//return false;
	}

	fading = true
	console.log('mouseenter');
	//changeImage($(this));
	$(this).find('img').fadeIn(function() {
		fading = false;
	});
});

$('#aboutus figure').on('mouseleave', function() {

	if (fading) {
		//return false;
	}

	fading = true;
	console.log('mouseleave');
	//changeImage($(this));
	$(this).find('img').fadeOut(function() {
		fading = false;
	});
});

function changeImage(img) {

	var $img = $(img);
	var currentSrc = $img.attr('src');
	var over_image = $img.attr('data-image-over');
	$img.attr('src', over_image);
	$img.attr('data-image-over', currentSrc);

    /*var image = document.getElementById('emeric');

    if (image.src.match("punk-2")) {

        image.src = "<?= $this->assetUrl('tetes/png/emeric.jpg') ?>";

    } else{
        image.src = "<?= $this->assetUrl('tetes/png/punk-2.png') ?>";
     }*/
}

</script>
<?= $this->stop('footer_scripts') ?>