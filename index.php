<?php 
	include('scripts/db.php');
	include('scripts/weather.php');
?>

<!doctype html>

<html>
<head>
	<title>WeatherApp</title>
	<meta charset="utf-8"/> 
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
		<form method="get" id="weather_form">
			<!-- Unordered list for selecting country to get weather information -->
		<ul id="country-list">
			<li><input type="button" name="edinburgh" formmethod="get" id="weather_btn">Edinburgh</button></li>
			<li><input type="button" name="london" formmethod="get" id="weather_btn">London</button></li>
			<li><input type="button" name="belfast" formmethod="get" id="weather_btn">Belfast</button></li>
			<li><input type="button" name="dublin" formmethod="get" id="weather_btn">Dublin</button></li>
			<li><input type="button" name="cardiff" formmethod="get" id="weather_btn">Cardiff</button></li>
			<li><input type="button" name="aberdeen" formmethod="get" id="weather_btn">Aberdeen</button></li>
			<li><input type="button" name="turriff" formmethod="get" id="weather_btn">Turriff</button></li>
		</ul>
	</div>
</body>
</html>

