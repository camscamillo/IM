<?php

	session_start();
	if(!isset($_SESSION['user'])) header('location: index.php');
	$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Loan Collection Management System</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/938af96c2e.js">
	</script>
</head>
<body>
	<div id="dashboardMainContainer">
		<?php include('partials/app-sidebar.php') ?>
		<div class="dashboard_content_container" id="dashboard_content_container">
			<?php include('partials/app-topnav.php') ?>
			<div class="dashboard_content">
				<div class="dashboard_content_main">
				</div>
			</div>
		</div>
	</div>

<script src="js/script.js"></script>
</body>	
</html>