
<!DOCTYPE HTML>

<html>

	<body>
	
		<div>

		<?php
		
		// READ FILES FROM THE GALLERY FOLDER
		$project = $_GET["project"];
		$imgdir = "images" .DIRECTORY_SEPARATOR . "projects" . DIRECTORY_SEPARATOR . $project . DIRECTORY_SEPARATOR;
		$dir = __DIR__ . DIRECTORY_SEPARATOR . $imgdir;
		$images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
		
		
    foreach ($images as $i) {
			printf("<img alt='' src='$imgdir%s'>", basename($i));
		}
		
    ?>
		
		</div>
	
</body>

</html>