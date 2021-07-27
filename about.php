<?php 
	include('scripts/db.php');
?>

<!doctype html>

<html>
<head>
	<title>About</title>
	<meta charset="utf-8"/> 
	<meta name="viewport" content="width=device-width, initial-scale=0.5">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="icon" href="icons/weather.ico">
</head>

<body>
	<nav> 
		<ul>
			<li> <a href="index.php" title="Go back to homepage.">Home</a></li>
			<li> <a href="signup.php" title="Create a new account.">Signup</a></li>
			<li> <a href="login.php" title="Login to an existing account.">Login</a></li>
		</ul>
	</nav>
	
	<h1 id="title">About WeatherApp</h1>

	<!-- User session (username and logout button) -->
	<div id="session">
		<?php if(isset($_SESSION['success'])): ?>
			<div id="error success">
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			<div>
		<?php endif ?>
		
		<?php if(isset($_SESSION['username'])): ?>
                        <p><strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                <?php endif ?>
	</div>


	<div id="container">

		<h2 id="OMDb-title">This webapp usesd the WeatherAPI API</h2>
		
		<p id="about-text"> &nbsp </p>
		
		<p id="about-text">The weatherapi API returns weather information about any geolocation.</p>
   		<p id="about-text">The home page of the API can be found at: <a href="https://www.weatherapi.com/">weatherapi.com</a></p>
		<p id="about-text"> &nbsp </p>
		
		<hr>

		<p id="about-text"> &nbsp </p>
		
		<h2>This site is hosted on an Nginx Server</h2>
		
		<p id="about-text"> &nbsp </p>

		<p id="about-text"> </p>
		<p id="about-text">NGINX is an <a href="https://github.com/nginx/nginx">open source</a> software server for cloud computing </p>
		<p id="about-text">and is maintained by <a href="https://www.nginx.com/about/">NGINX</a></p>

	</div>

</body>
</html>
