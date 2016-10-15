<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="LoginStylesheet.css" />
</head>
<body>
<div class="header">
<a href=""><img src="https://scontent-dft4-2.xx.fbcdn.net/v/t34.0-12/14657689_1284081328281370_1603812898_n.jpg?oh=bc3f2ad7f15f562d02b1672464498ec8&oe=58023C67" alt="Logo" /></a>
	<div class="loginmodal">
		<div class="loginmodal-container">
			<h1>Login to Your Account</h1><br>
			<form action="Home.php" method="post">
				<input type="text" name="user" placeholder="Username">
				<input type="password" name="pass" placeholder="Password">
				<input type="submit" name="login" class="login loginmodal-submit" value="Login">
			</form>
					
			<div class="login-help">
				<a href="Register.php">Register</a> - <a href="ForgotPass.php">Forgot Password</a>
			</div>
		</div>
	</div>
</body>
</html>
