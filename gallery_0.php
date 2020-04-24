<?php
// READ FILES FROM THE GALLERY FOLDER
$dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
$images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

// DRAW HTML ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Ремонт авто во Владивостоке | Галерея проектов</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type='text/javascript' src='/assets/js/jquery.min.js'></script>
		<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script> 
		
		<link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' /> 
		<script type='text/javascript' src='unitegallery/themes/tiles/ug-theme-tiles.js'></script>
		<link rel='stylesheet' href='unitegallery/themes/default/ug-theme-default.css' type='text/css' /> 

</head>

	<body>
	
		<div id="gallery">

		<?php
    foreach ($images as $i) {
      printf("<img alt='' data-image='images/projects/%s'>", basename($i));
    }
    ?>
		
		
			
		
		</div>
	
</body>

<script type="text/javascript"> 
			jQuery("#gallery").unitegallery({
	slider_enable_arrows:false,
	slider_enable_progress_indicator:false,
	slider_enable_play_button:false,
	slider_enable_fullscreen_button:true,
	slider_enable_zoom_panel:false,
	slider_enable_text_panel:false,
	strippanel_enable_handle:false,
	gridpanel_enable_handle:false,
});

</script>
</html>