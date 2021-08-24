<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lotto</title>
</head>
<body>
	<h1>Lotto</h1>
	
	<?php
		$lottotrekking = [];
		$min = 1;
		$max = 45;

		// add to lottotrekking
			// $lottotrekking[] = 5;
			// $lottotrekking[] = 3;
			// $lottotrekking[] = 12;
			// print_r($lottotrekking);
			// echo('<br>');
			// array_push($lottotrekking, 15);
			// print_r($lottotrekking);

		while ( count($lottotrekking) < 6 ) {
			$randomNumber = rand($min, $max);
			if ( ! in_array($randomNumber, $lottotrekking) ) {
				$lottotrekking[] = $randomNumber;
			}
		}
		print_r($lottotrekking);

	?>

</body>
</html>