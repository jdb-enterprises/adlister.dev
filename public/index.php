<?php 
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>

<html lang="en">
	<head>

		<title>JDB Enterprises LLC, Adlister</title>

		<?php require '../views/partials/head.php'; ?>

	</head>
	<body>
		<?php require '../views/partials/header.php'; ?>
		<?php require '../views/partials/navbar.php'; ?>
		

    	<?php require $main_view; ?>

    	
    	<?php require '../views/partials/footer.php'; ?>
    	<?php require '../views/partials/common_js.php'; ?>

	</body>
</html>

