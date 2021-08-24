<?php
	class Test {
		// these functions can be public or private or static
		public static function getById( $id ) {
			global $db;
			$sql = 'SELECT * FROM `users` WHERE `user_id` = :user_id';
			$pdo_statement = $db->prepare($sql);
			$pdo_statement->execute([':user_id' => $id-1]);
			return $pdo_statement->fetchObject();
		}

		public static function getAll() {
			global $db;	
			$sql = 'SELECT * FROM `users`';
			$pdo_statement = $db->prepare($sql);
			$pdo_statement->execute();
			return $pdo_statement->fetchAll();
		}
	}