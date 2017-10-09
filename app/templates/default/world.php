<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<link href="<?= $this->assetUrl('css/world.css') ?>" rel="stylesheet">

    <div id="map" class="worldmap"></div>

    <div class="infobubble"></div>
<?php $this->stop('main_content') ?>

<?= $this->start('footer_scripts') ?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=<?= $google_api_key ?>"></script>
<script>
	var mode = '<?= $mode ?>';
	var country_name = '';
	var ROOT_PATH = "http://<?= $_SERVER['HTTP_HOST'].$this->url('country', array('country' => '')) ?>";
	var google_api_key = '<?= $google_api_key ?>';
</script>
<script src="<?= $this->assetUrl('js/world-map.js') ?>"></script>
<?= $this->stop('footer_scripts') ?>