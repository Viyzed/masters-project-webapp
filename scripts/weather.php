<?php
$_SESSION['city'] = "";
$_SESSION['city_weather'] = "";
$api_key = "?key=fa7160d8737048e1896180049212207";
$api_prefix = "https://api.weatherapi.com/v1";
$api_url = "";

//Enable buttons if user is logged in
if(isset($_GET['city'])) {
	
	//If a city button is pressed
	if(isset($_SESSION['username'])) {
		$_SESSION['city'] = $_GET['city'];
		$api_url = $api_prefix . "/current.json" . $api_key . "&q=" . $_SESSION['city'] . "&aqi=no";
		$api_return = file_get_contents($api_url);
		$api_array = json_decode($api_return, true);
		$api_output = $api_array['location']['name']." is currently ".$api_array['current']['condition']['text'].", ".$api_array['current']['temp_c']."C (".$api_array['current']['temp_f']."F)";
		
		$_SESSION['city_weather'] = $api_output;

		$api_url = $api_prefix . "/forecast.json" . $api_key . "&q=" . $_SESSION['city'] . "&days=2&aqi=no&alerts=no";
		$api_return = file_get_contents($api_url);
		$api_array = json_decode($api_return, true);
		$api_output = "<br />The forecast for tomorrow is ".$api_array['forecast']['forecastday'][1]['day']['condition']['text'].", ".$api_array['forecast']['forecastday'][1]['day']['avgtemp_c']."C (".$api_array['forecast']['forecastday'][1]['day']['avgtemp_f']."F)";

		$_SESSION['city_weather'] .= $api_output;

	}
	else {
		$_SESSION['city'] = $_GET['city'];
                $api_url = $api_prefix . "/current.json" . $api_key . "&q=" . $_SESSION['city'] . "&aqi=no";
                $api_return = file_get_contents($api_url);
                $api_array = json_decode($api_return, true);
                $api_output = $api_array['location']['name']." is currently ".$api_array['current']['condition']['text'].", ".$api_array['current']['temp_c']."C (".$api_array['current']['temp_f']."F)<br /><b>Signup/Login for tomorrow's forecast...</b>";
		
		$_SESSION['city_weather'] = $api_output;
	}
}

?>
