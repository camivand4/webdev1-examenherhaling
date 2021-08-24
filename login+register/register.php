<?php
	require 'app.php';

	if(isset($_POST['email']) && isset($_POST['password'])){
		$email = $_POST['email'];
		$password_form = $_POST['password'];
		$firstname_form = $_POST['firstname'];
		$email_form = $_POST['email'];

		$sql = 'INSERT INTO `user` 
			(firstname, email, password) VALUES 
			(:firstname, :email, :password);';
			// (firstname, email, password, creation_date) VALUES 
			// (:firstname, :email, :password, :creation_date);';
		$stmnt = $db->prepare($sql);
		$stmnt->execute([
			':firstname' => $firstname_form,
			':email' => $email_form,
			':password' => password_hash($password_form, PASSWORD_DEFAULT),
			// ':creation_date' => date('Y-m-d H:i:s'),
		]);

		$user_id = $db->lastInsertId();
		if($user_id) {
			$_SESSION['user_id'] = $user_id;
			header('location: index.php');
		} else {
			echo 'Er is iets fout gegaan';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>register</title>
</head>
<body>

	<h1>Register page</h1>
	<section>
	<form method="POST">
		<label>firstname <input type="text" name="firstname" required></label>
		<label>Email <input type="email" name="email" required></label>
		<label>Password <input type="password" name="password" required></label>
		<button type="submit">Register</button>
	</form>
	</section>
</body>
</html>