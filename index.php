<?php 
	include('scripts/db.php');
?>

<!doctype html>

<html>
<head>
	<title>WeatherApp</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=0.5"> 
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>
	<nav> 
		<ul>
			<li> <a href="signup.php" title="Create a new account.">Signup</a></li>
			<li> <a href="login.php" title="Login to an existing account.">Login</a></li>
			<li> <a href="about.php" title="About thie webapp.">About</a></li>
		</ul>
	</nav>
	
	<h1 id="title"> WeatherApp</h1>

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
		<form id="country_form" method="get">
		<?php include('scripts/weather.php'); ?>
		<label id="api_return"><?php echo($_SESSION['city_weather']); ?></label>
		<!-- Unordered list for selecting country to get weather information -->
		<ul id="country-list">
			<li><input name="city" type="submit" id="weather_btn" value="Edinburgh"></li>
			<li><input name="city" type="submit" id="weather_btn" value="London"></li>
			<li><input name="city" type="submit" id="weather_btn" value="Belfast"></li>
			<li><input name="city" type="submit" id="weather_btn" value="Dublin"></li>
			<li><input name="city" type="submit" id="weather_btn" value="Cardiff"></li>
			<li><input name="city" type="submit" id="weather_btn" value="Aberdeen"></li>
			<li><input name="city" type="submit" id="weather_btn" value="Turriff"></li>
		</ul>
		</form>
	</div>
</body>
</html>

