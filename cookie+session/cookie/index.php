<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookie</title>
</head>
<body>
	<h1>Cookie</h1>
	<form method="POST">
		<input type="text" name="firstname">
		<input type="submit" name="verstuur">
	</form>
	<?php
		$firstnameInCookie = $_COOKIE['firstname'] ?? 'undefined';

		if (isset($_POST['firstname'])) {
			$name = $_POST['firstname'];
			//set cookie for 1 hour
			setcookie('firstname', $name, time() + 3600);
		}

		echo $firstnameInCookie;

	?>
</body>
</html>