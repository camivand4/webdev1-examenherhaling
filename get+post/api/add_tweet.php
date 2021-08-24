<?php

require '../includes/db.php';

$tweet = $_POST['tweet'];

$sql = 'INSERT INTO `message` (`user_id`, `message`, `created_on`)
VALUES ( :user_id, :message, :created_on )
';

$sql_statement = $db->prepare($sql);
$sql_statement->execute(
	[
		':user_id' => 69,
		':message' => $tweet,
		':created_on' => date('Y-m-d H:i:s'),
	]
);

// redirect
header( 'location: ../index.php' );
die();
