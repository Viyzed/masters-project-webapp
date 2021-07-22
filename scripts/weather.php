<?php
$_SESSION['city'] = "";
$_SESSION['city_weather'] = "";
$api_key = "?key=fa7160d8737048e1896180049212207";
$api_prefix = "http://api.weatherapi.com/v1/current.json";
$api_url = "";

//Enable buttons if user is logged in
if(isset($_GET['city'])) {
	
	//If a city button is pressed
	if(isset($_SESSION['username'])) {
		$_SESSION['city'] = $_GET['city'];
		$api_url = $api_prefix . $api_key . "&q=" . $_SESSION['city'] . "&aqi=no";
		$api_return = file_get_contents($api_url);
		$api_array = json_decode($api_return, true);

		$api_output = $api_array['location']['name']." is currently ".$api_array['current']['condition']['text'].", ".$api_array['current']['temp_c']."C (".$api_array['current']['temp_f']."F)";
		$_SESSION['city_weather'] = $api_output;

	}
	else {
                $_SESSION['city_weather'] = "Signup/Login to know the weather...";
        }
}

?>
