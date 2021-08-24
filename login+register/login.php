<?php
	// error_reporting(E_ERROR | E_PARSE);
	require 'app.php';

	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password_form = $_POST['password'];

		$sql = 'SELECT * FROM `user` WHERE `email` = :email';
		$pdo_statement = $db->prepare($sql);
		$pdo_statement->execute( [ ':email' => $email ]);

		$user = $pdo_statement->fetchObject();

		if($user && password_verify($password_form, $user->password)) {
			echo 'succes';
			$_SESSION['user_id'] = $user->user_id;
			header('location: index.php');
		} else {
			echo 'wrong password or email';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login pagina</title>
</head>
<body>
	<h1>op de login pagina</h1>

	<section>
	<form method="POST">
	<label>Email <input type="email" name="email" required></label>
	<label>Password <input type="password" name="password" required></label>
	<button type="submit">login</button>
	</form>
	</section>

	<a href="register.php">register</a>
</body>
</html>