<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>dir</title>
</head>
<body>
	<h1>What can I find here?</h1>
	<ul>
		<?php
			$dirs = array_filter(glob('*'), 'is_dir');
			foreach ($dirs as $d) {
				echo(
					'<li>'. $d .'</li>'
				);
			}
		?>
	</ul>
</body>
</html>