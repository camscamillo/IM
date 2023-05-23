<?php
	session_start();
	if(isset($_SESSION['user'])) header('location: dashboard.php');
	$error_message = '';


  if($_POST) {
  	include('database/connection.php');


    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM users WHERE users.username="'. $username .'" AND users.password="'. $password .'"';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
   		$user = $stmt->fetchAll()[0];
   		$_SESSION['user'] = $user;
   		header('Location: dashboard.php');

    } else $error_message ='Please make sure that the username and password are correct.';
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>SYSTEM Login - Loan Collection Management System</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
	<?php if (!empty($error_message)) { ?>
		<div id="errorMessage">
			<strong>Error: </strong><p><?= $error_message ?></p>
		</div>
	<?php } ?>
	<div class="container"> 
		<div class="loginHeader">
			<header style="text-align: right;">
			<h1 style="display: inline-block; margin-right: 75%; margin-top: 1%;">CollectX</h1>
			</header>
			<header style="text-align: right;">
			<h3 style="display: inline-block; margin-top: 0%; margin-right: 58%;">Loan Collection Management System</h3>
			<header style="text-align: right;">
				<p style="display: inline-block; margin-right: 0%; margin-right: 56%;">Transforming collection management for lasting financial stability</p>
			</header>
			</header>

		</div>
		<div class="loginBody">
			<form action="index.php" method="POST"> 
				<div class="loginInputContainer">
					<label for="">Username</label>
					<input placeholder="username" name="username" type="text" />
				</div>
				<div class="loginInputContainer">
					<label for="">Password</label>
					<input placeholder="password" name="password" type="password" />
				</div> 
				<div class="loginButtonContainer">
					<button>login</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>