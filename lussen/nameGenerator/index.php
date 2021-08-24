<?php
	require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NameGenerator</title>
</head>
<body>
	<h1>Name Generator</h1>

	<?php
		$prefixCount = count($prefix);
		$suffixCount = count($suffix);

	
		do {
			$newFestival = $prefix[rand(0, $prefixCount-1)]. $suffix[rand(0, $suffixCount-1)];
		} while (in_array($newFestival, $unavailable));

		echo $newFestival;
	?>
	<a href="">CLAIM</a>
</body>
</html>