<!doctype html>
<html>
<head>
        <title>SignUp</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
        <h2>Sign Up</h2>
	<form method="post" action="signup.php">
		<!-- handle form errors -->
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
