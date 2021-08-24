<?php
	require_once 'carsData/data.php';
	// require 'carsData/data.php';
	// include 'carsData/data.php';

	// The difference between include and require arises when the file being included cannot be found: 
	// include will emit a warning (E_WARNING) and the script will continue, 
	// whereas require will emit a fatal error (E_COMPILE_ERROR) and halt the script. 
	// If the file being included is critical to the rest of the script running correctly 
	// then you need to use require.
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cars</title>
	<link rel="stylesheet" href="css/cars.css">
</head>
<body>
	<img src="" alt="">
	<h1>Cars <img id="carsLogo" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d9d39ed5-b9d2-4fa3-8882-f26542d3209e/d7u1fob-67341826-a134-4ee2-920d-e6e92f0dcc2d.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Q5ZDM5ZWQ1LWI5ZDItNGZhMy04ODgyLWYyNjU0MmQzMjA5ZVwvZDd1MWZvYi02NzM0MTgyNi1hMTM0LTRlZTItOTIwZC1lNmU5MmYwZGNjMmQucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.5aiKyCibC68Hd-vXUxoHevAAeD490WO1INeyb8CylT0" alt="cars"></h1>
	<div class="cars">
		<?php
			foreach ($cars as $c) {
				include ('carsViews/carItem.php');
				// echo('<div><img src="carsImages/'.$value['image'].'"><p>'.$value['brand'].'</p></div>');
			}
		?>
	</div>
</body>
</html>