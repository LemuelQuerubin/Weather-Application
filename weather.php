<?php 
	if(array_key_exists('submit', $_GET)){
		if($_GET['city']){
			//API CALL 
			$data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q="
				.$_GET['city']."&appid=82075a24dd8a022521aa4b3f25464425");

			//ARRAY OF INFORMATION DECODE USING JSON_DECODE FOR READABLE FORMAT
			$weatherArray = json_decode($data, true);

			//COUNTRY INFORMATION
			$country = $weatherArray['sys']['country'];
			$name = $weatherArray['name'];
			
			//WEATHER INFORMATION
			$weatherCondition = $weatherArray['weather']['0']['main'];
			$weatherDescription = $weatherArray['weather']['0']['description'];
			$tempCelcius = $weatherArray['main']['temp'] - 273;
			$feelsLike = $weatherArray['main']['feels_like'] - 273;
			$tempMax = $weatherArray['main']['temp_max'] - 273;
			$tempMin = $weatherArray['main']['temp_min'] - 273;
			$clouds = $weatherArray['clouds']['all'];
			$humidity = $weatherArray['main']['humidity'];
			$windspeed = $weatherArray['wind']['speed'];
			
			//TIME INFORMATION
			date_default_timezone_set('asia/manila');
			$sunrise = $weatherArray['sys']['sunrise'];
			$sunset = $weatherArray['sys']['sunset'];		

		}
	}	

?>