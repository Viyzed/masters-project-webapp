<!-- run the db script to log all user activity -->
<?php include('scripts/db.php'); ?>
<!doctype html>
<html>
<head>
	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="icon" href="icons/weather.ico">
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<meta charset="utf-8"/>
	<!-- if the user session is active redirect to the homepage -->
	<?php if(isset($_SESSION['username'])) { header('location: index.php'); } ?>
</head>

<body>

	<nav>
                <ul>
                        <li> <a href="index.php" title="Go to homepage.">Home</a></li>
                        <li> <a href="signup.php" title="Create an  account.">Signup</a></li>
                        <li> <a href="about.php" title="About thie webapp.">About</a></li>
                </ul>
	</nav>

	<h2 id ="title">Log In</h2>
	<form id="user_form" method="post" action="login.php">
		<!-- check for errors in username/password combination -->
		<?php include('scripts/errors.php'); ?>
		<div id="user-input">
                        <label>Username</label>
                        <input type="text" name="username">
                </div>
                <div id="user-input">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>
                <div id="user-input">
                        <button type="submit" name="login" id="btn">Sign In</button>
                </div>

                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

	</form>
</body>
</html>
