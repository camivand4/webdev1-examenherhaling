<h1>List of projects</h1>

<?php
	foreach ($results as $r) {
		$r = (object) $r;
		include BASE_DIR . '/views/Test/_partials/list_item.php';
	}
?>