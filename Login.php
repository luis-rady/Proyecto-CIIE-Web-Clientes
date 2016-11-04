<?php require 'ConnectDB.php';
if (isset($_POST['Submit'])) {

	$Email = $_POST['email'];
	$Password = $_POST['passw'];
}


?>

<html>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="Login.css"
<body>
<!-- Header -->
<div class="w3-container w3-blue w3-padding-16">
	<h1 class="w3-margin w3-center w3-jumbo">Login</h1>
</div>

<!-- Content -->
<div class="w3-row w3-padding-64 w3-center w3-content">
	<!-- Sign In -->
	<div class='w3-container w3-content' style='width:80%'>
		<div class='w3-example w3-large w3-card-16 w3-padding-16'>
			<form action="Home.php" method="POST" class='w3-container w3-padding-16'>
				<input name='email' placeholder='Email' class='w3-input w3-border w3-medium' type='email' required>
				<label class='w3-label w3-validate'>Email</label>
				<br><br>

				<input name='passw' placeholder='Password' class='w3-input w3-border w3-medium' type='password' required>
				<label class='w3-label w3-validate'>Password</label>
				<br><br>
				<input name='Submit' class='w3-btn w3-padding-8 w3-medium w3-margin-top w3-hover-red' type='submit'></a>
			</form>

			<!-- Return to Landing Page -->
			<a href="LandingPage.php" class="w3-padding-left w3-label w3-small w3-light-grey w3-hover-text-blue">Return</a> - <a href="ForgotPass.php" class="w3-label w3-small w3-light-grey w3-hover-text-blue">Forgot Password?</a>
		</div>
	</div>
</div>
</body>
</html>
