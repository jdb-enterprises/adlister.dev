<!-- <?php
// session_start();
// require_once __DIR__ . '/../bootstrap.php';

?> -->
<!DOCTYPE html>

<html lang="en">
	<head>

		<title>Adlister</title>

		<?php require '../views/partials/head.php'; ?>

	</head>
	<body>
		<?php require '../views/partials/navbar.php'; ?>

    	<?php require $main_view; ?>

    	<?php require '../views/partials/common_js.php'; ?>

		<!-- Jquery.js CDN -->
		<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
		<!-- Bootstrap.js CDN -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</body>
</html>

