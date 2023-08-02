<?php 
	if(array_key_exists('submit', $_GET)){
		if($_GET['city']){
			$data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q="
				.$_GET['city']."&appid=82075a24dd8a022521aa4b3f25464425");

			$weatherArray = json_decode($data, true);

			
			$tempCelcius = $weatherArray['main']['temp'] - 273;
			$weatherCondition = $weatherArray['weather']['0']['description'];
			$feelsLike = $weatherArray['main']['feels_like'] - 273;
			$weather = "<br><b>Celcius: </b>" .$tempCelcius. "<br><b>Weather Condition: </b>". $weatherCondition.
			"<br><b>Feels like: </b>". $feelsLike;

		}
	}	

?>