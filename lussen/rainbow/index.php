<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rainbow</title>
	<link rel="stylesheet" href="css/rainbow.css">
</head>
<body>
	<h1>Somewhere over the rainbow</h1>
	<div id="rainbow">
		<?php
			for ($i=1; $i < 360+1; $i++) { 
				echo('<div class="block" style="background-color: hsl(' . $i . ', 100%, 50%);">' . $i . '</div>');
			}
		?>
	</div>
</body>
</html>