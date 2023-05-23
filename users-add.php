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
					<form action="" class="appForm">
						<div>
							<label for="first_name">First Name</label>
							<input type="text" id="first_name" name="first_name" />
						</div>
						<div>
							<label for="last_name">Last Name</label>
							<input type="text" id="last_name" name="last_name" />
						</div>
						<div>
							<label for="username">Username</label>
							<input type="text" class="appFormInput" id="username" name="username" autocomplete="username" />
						</div>
						<div>
							<label for="password">Password</label>
							<input type="password" id="password" name="password" autocomplete="current-password" />

						</div>
						<button type="submit"><i class="fa fa-plus"></i> Add User</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="js/script.js"></script>
</body>	
</html>