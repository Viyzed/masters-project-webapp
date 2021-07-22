<?php 
	include('scripts/db.php');
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
			<li> <a href="#" title="About thie webapp.">About</a></li>
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

	
	<!-- Unordered list for selecting country to get weather information -->
	<ul id="country-list">
		<li><a>Edinburgh</a></li>
		<li><a>London</a></li>
		<li><a>Belfast</a></li>
		<li><a>Dublin</a></li>
		<li><a>Cardiff</a></li>
		<li><a>Aberdeen</a></li>
		<li><a>Turriff</a></li>
	</ul>
</body>
</html>

