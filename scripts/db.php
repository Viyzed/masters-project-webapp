<?php 
	//Start PHP session
	session_start();

	$errors = array();
	$username = "";
	$query = "";

	$server = "masters-maria-db.cohsjxuibh07.eu-west-1.rds.amazonaws.com";
	$dbuser = "admin";
	$dbpasswd = "Pa\$\$w0rd!";
	$db = "masters_maria_db";

	//open MariaDB connection
	try 
	{
		$connect = mysqli_connect($server, $dbuser, $dbpasswd, $db);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	 
	//HTTP post request through the Sign Up button
	if (isset($_POST['signup'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_confirm = $_POST['password_confirm'];
		
		//check that all fields are populated and passwords match
		if(empty($username)) {
			array_push($errors, "Username box is empty.");
		}	
		if(empty($password)) {
                        array_push($errors, "Password box is empty.");
                }
		if($password != $password_confirm) {
			array_push($errors, "Passwords do not match.");
		}

		//sanitise username variable (to be decided)
		//$username = filter_var($username, FILTER_SANITIZE_STRING); 
		
		//add the user to the Db
		if(count($errors) == 0) {
			//encrypt the password with md5 hash
			$password_hash = md5($password);
			$query = "INSERT INTO users(username, password) VALUES('$username', '$password_hash')";
			try
			{
				mysqli_query($connect, $query);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
			mysqli_close($connect);
			$_SESSION['username'] = $username;
			header('location: index.php'); //redirect to the home page
		}
	}

	//login
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
                $password = $_POST['password'];

                //check that all fields are populated and passwords match
                if(empty($username)) {
                        array_push($errors, "Username box is empty.");
                }
                if(empty($password)) {
			array_push($errors, "Password box is empty.");
                }

		//sanitise username variable
                //$username = filter_var($username, FILTER_SANITIZE_STRING);

		if(count($errors) == 0) {
			$password_hash = md5($password); //encrypt password
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password_hash'";
			$result = mysqli_query($connect, $query);
			$count_rows = mysqli_num_rows($result);
				
			if($count_rows > 0) {
				//sign user in
                        	$_SESSION['username'] = $username;
                        	header('location: index.php'); //redirect to the home page
			} else {
				echo("Login unsuccessful.");
				array_push($errors, "The username/password is incorrect.");
			}
		}
	}

	//log out
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}
?>	
