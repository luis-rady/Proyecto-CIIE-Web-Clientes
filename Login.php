<html>
<head>
<title>Mockup Web</title>
<style>
body { color: #000; background-color: #e6e6e6; font: 15px; Helvetica neue; }
a {color: #e6e6e6; }
img { border: none; opacity: 1; }
#login { background-color: #85C1E9; outline-style: outset; outline-color: red; width: 500px; padding: 10px; margin: auto; text-align: center; }
#login h2 {text-align: center; text-decoration: underline; color: blue;}
input[type=text] { width: 280px; padding: 10px 3px; margin: 2px 0; box-sizing: border-box; border: 1px solid #555; outline: none; }
input[type=text]:focus { background-color: lightyellow; }
#submit { border-radius: 20px; background: #ee404e; padding: 15px ; width: 70px; height: 10px; color: #fff; text-align: center; }
#submit:hover { background-color: #A03472; }
#register { border-radius: 20px; background: #A03472; color: #fff; padding: 15px; width: 70px; height: 10px; text-align: center; }
#register:hover { background-color: #ee404e; }
.topright { position: absolute; top: 8px; right: 16px; font-size: 18px; }
#forgotpass { color: ; list-style-type: none; text-align: center; }
#forgotpass ul li { display: inline; margin-right: 1px; text-align: center; }
#forgotpass ul li a { text-transform: uppercase; text-decoration: none; }
#forgotpass ul li a:hover { text-decoration: underline; }
</style>
</head>
<body>
<div id="header">
<a href=""><img src="https://scontent-dft4-2.xx.fbcdn.net/v/t34.0-12/14657689_1284081328281370_1603812898_n.jpg?oh=bc3f2ad7f15f562d02b1672464498ec8&oe=58023C67" alt="Logo" /></a>
</div>

<div id="login">
<h2>Login</h2>
<form action="Home.php" method="post">
<?php

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "post") {
  $user = test_input($_POST["user"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="user">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  <input type="submit" name="submit" value="Submit" id="submit">  
</form>
</form>
<br>
<div class="topright">New?
<form action="Register.php" method="post">
<input type="submit" name="Register" value="Register" id="register">
</form>
</div>
<div id="forgotpass">
	<ul>
		<li><a href="ForgotPass.php">Forgot password?</a></li>
	</ul>
</div>
</div>
</body>
</html>
