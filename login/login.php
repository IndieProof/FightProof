<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>F!GHTproof Dashboard Login</title>
</head>
<body>
	<div class="align">
		<img class="logo" src="img/logo.svg">
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="#login">Login</a>
				<a id="register" href="#register">Register</a>
				<div></div>
			</div>
			<div class="tabs">
				<form method="post" action="server.php">
				<?php include('errors.php'); ?>
					<div class="inputs">
						<div class="input">
							<input placeholder="Username" type="text">
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Password" type="password">
							<img src="img/pass.svg">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							<span>Remember me</span>
						</label>
					</div>
					<div class="input-group">

  		<button type="submit" class="btn" name="login_user">Login</button>

  	</div>
				</form>
				<form method="POST" action="server.php">
				<?php include('errors.php'); ?>
					<div class="inputs">
						<div class="input">
							<input type="text" placeholder="Username" name="username" required>
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input type="Password" placeholder="Password" name="password" required>
							<img src="img/pass.svg">
						</div>
						<div class="input">
							<input type="mail" placeholder="Email" name="email" required>
							<img src="img/mail.svg">
						</div>
						<div class="input">
							<input type="text" placeholder="Tron Address" name="wallet" required>
							<img src="img/tron.svg">
						</div>
					</div>
					<div class="input-group">

  	  <button type="submit" class="btn" name="register">Register</button>

  	</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/login.js"></script>
	<script src="server.php"></script>
	<script src="errors.php"></script>
</body>
</html>
