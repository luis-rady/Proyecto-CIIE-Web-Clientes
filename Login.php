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
<div class="w3-row w3-padding-64 w3-center">
	<!-- Register Option -->
	<div class="w3-container w3-half">
		<h2 class="w3-xlarge w3-textred w3-padding-16 w3-border-bottom">Don't have an account yet?</h2>
		<a href="Register.php" class="w3-btn w3-padding-8 w3-medium w3-margin-top w3-hover-red">Register</a>
	</div>
	<!-- Sign In -->
	<div class="w3-container w3-half w3-center w3-margin-left" style="width:40%">
		<div class="w3-example w3-large w3-card-8 w3-padding-16">
			<form class="w3-container w3-padding-16">
				<input placeholder="Email" class="w3-input w3-border w3-medium" type="email" required>
				<label class="w3-label w3-validate">Email</label>
				<br><br>

				<input placeholder="Password" class="w3-input w3-border w3-medium" type="password" required>
				<label class="w3-label w3-validate">Password</label>
				<br><br>
				<a href="Home.php" class="w3-btn w3-padding-8 w3-medium w3-margin-top w3-hover-red">Sign In</a>
			</form>
			<!-- Return to Landing Page -->
			<a href="LandingPage.php" class="w3-padding-left w3-label w3-small w3-light-grey w3-hover-text-blue">Return</a> - <a href="ForgotPass.php" class="w3-label w3-small w3-light-grey w3-hover-text-blue">Forgot Password?</a>
		</div>
	</div>
</div>
</body>
</html>
