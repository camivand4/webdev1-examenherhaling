<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session</title>
</head>
<body>
	<h1>Session</h1>
	<form method="POST">
		<input type="text" name="firstname">
		<input type="submit" name="verstuur">
	</form>
	<?php
		session_start();

		$firstnameInSession = $_SESSION['firstname'] ?? 'undefined';

		if (isset($_POST['firstname'])) {
			$name = $_POST['firstname'];
			$_SESSION['firstname'] = $name;
		}

		echo $firstnameInSession;

	?>
</body>
</html>