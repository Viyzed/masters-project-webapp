<?php include('scripts/db.php'); ?>
<!doctype html>
<html>
<head>
        <title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="icon" href="icons/weather.ico">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<meta charset="utf-8"/>
	<?php if(isset($_SESSION['username'])) { header('location: index.php'); } ?>
</head>

<body>
	<!-- Navigation pane -->
	<nav>
                <ul>
                        <li> <a href="index.php" title="Go to homepage.">Home</a></li>
                        <li> <a href="login.php" title="Login to an existing account.">Login</a></li>
                        <li> <a href="about.php" title="About thie webapp.">About</a></li>
                </ul>
        </nav>	

	<!-- Signup form -->
        <h2 id="title">Sign Up</h2>
	<form id="user_form" method="post" action="signup.php">
		<!-- handle form errors -->
		<?php include('scripts/errors.php'); ?>
		<div id="user-input">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div id="user-input">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>
		<div id="user-input">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirm">
                </div>
		<div id="user-input">
                        <button type="submit" name="signup" id="btn">Sign Up</button>
                </div>
 		
		<p>Already have an account? <a href="login.php">Log In</a></p>

	</form>
</body>
</html>
